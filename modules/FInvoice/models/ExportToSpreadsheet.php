<?php

/**
 * Export to spreadsheet model file for FInvoice module.
 *
 * @package Model
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

/**
 * Export to spreadsheet model class for FInvoice module.
 */
class FInvoice_ExportToSpreadsheet_Model extends Vtiger_ExportToSpreadsheet_Model
{
	private bool $dateRangeParsed = false;
	private ?array $dateRange = null;

	/** Background fill applied to avoir (credit note) rows. */
	private const AVOIR_ROW_COLOR = 'FFFCE4D6'; // light salmon

	/** Extra column labels inserted after sum_total (HT). */
	private const EXTRA_LABELS = [
		'Remise',
		'Prix après remise',
		'Réception Provisoire',
		'Réception Définitive',
		'TVA',
		'Retenue Garantie',
	];

	/**
	 * Parse [start, end] in Y-m-d from the issue_time "bw" filter in the request,
	 * or null if no such filter is present.
	 */
	private function parseDateRange(): ?array
	{
		if ($this->dateRangeParsed) {
			return $this->dateRange;
		}
		$this->dateRangeParsed = true;

		$raw    = $_REQUEST['search_params'] ?? '[]';
		$params = json_decode($raw, true);
		if (!is_array($params)) {
			return null;
		}
		foreach ($params as $group) {
			if (!is_array($group)) {
				continue;
			}
			foreach ($group as $condition) {
				if (is_array($condition)
					&& ($condition[0] ?? '') === 'issue_time'
					&& ($condition[1] ?? '') === 'bw'
				) {
					$parts = explode(',', $condition[2] ?? '');
					if (count($parts) === 2) {
						$start = \DateTime::createFromFormat('d/m/Y', trim($parts[0]));
						$end   = \DateTime::createFromFormat('d/m/Y', trim($parts[1]));
						if ($start && $end) {
							$this->dateRange = [$start->format('Y-m-d'), $end->format('Y-m-d')];
							return $this->dateRange;
						}
					}
				}
			}
		}
		return null;
	}

	/**
	 * Override header writing so extra columns land immediately after sum_total (HT).
	 * {@inheritdoc}
	 */
	public function getHeaders(): array
	{
		$allHeaders = [];
		foreach ($this->fields as $fieldModel) {
			$label = \App\Purifier::decodeHtml($fieldModel->getFullLabelTranslation($this->moduleInstance));
			$this->workSheet->setCellValueExplicitByColumnAndRow(
				$this->colNo, $this->rowNo, $label,
				\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING
			);
			$allHeaders[] = $label;
			++$this->colNo;

			if ($fieldModel->getName() === 'sum_total') {
				foreach (self::EXTRA_LABELS as $extra) {
					$this->workSheet->setCellValueExplicitByColumnAndRow(
						$this->colNo, $this->rowNo, $extra,
						\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING
					);
					$allHeaders[] = $extra;
					++$this->colNo;
				}
			}
		}
		++$this->rowNo;
		return $allHeaders;
	}

	/** {@inheritdoc} */
	public function sanitizeValues(array $row): array
	{
		$sumGrossExists = false;
		foreach ($this->fields as $fieldModel) {
			if ($fieldModel->getName() === 'sum_gross') {
				$sumGrossExists = true;
				break;
			}
		}

		// Fetch required fields not already in $row
		$required = ['sum_total', 'sum_gross', 'retenue_garantie', 'reception_definitive', 'reception_provisoire', 'discount'];
		$missing  = array_diff($required, array_keys($row));
		if (!empty($missing)) {
			$fetched = (new \App\Db\Query())
				->select($missing)
				->from('u_yf_finvoice')
				->innerJoin('vtiger_crmentity', 'u_yf_finvoice.finvoiceid = vtiger_crmentity.crmid')
				->where(['vtiger_crmentity.crmid' => $row['id'], 'vtiger_crmentity.deleted' => 0])
				->one();
			if ($fetched) {
				$row = array_merge($row, $fetched);
			}
		}

		// Line-level inventory discount sum
		$inventoryDiscount = (float)((new \App\Db\Query())
			->select(['SUM(discount)'])
			->from('u_yf_finvoice_inventory')
			->where(['crmid' => $row['id']])
			->scalar() ?? 0);

		$ht    = (float)($row['sum_total'] ?? 0);
		$rdPct = (int)($row['reception_definitive'] ?? 0);
		$rpPct = (int)($row['reception_provisoire'] ?? 0);
		$rgPct = (float)($row['retenue_garantie'] ?? 0);
		$remise = $inventoryDiscount + (float)($row['discount'] ?? 0);

		$htApresRemise       = $ht - $remise;
		$receptionDefinitive = $htApresRemise * $rdPct / 100;
		$receptionProvisoire = $htApresRemise * $rpPct / 100;
		$totalHT             = $htApresRemise - $receptionDefinitive - $receptionProvisoire;

		$originalGross = (float)($row['sum_gross'] ?? 0);
		$totalTVA      = ($receptionDefinitive > 0 || $receptionProvisoire > 0 || $remise > 0)
			? $totalHT * 0.2
			: ($originalGross - $ht);
		$totalTTC        = round($totalHT + $totalTVA, 2);
		$retenueGarantie = $totalTTC * $rgPct / 100;
		$totalRGTTC      = round($totalTTC - $retenueGarantie, 2);

		// sum_total stays as raw HT; only sum_gross is overridden to the recalculated TTC
		if ($sumGrossExists) {
			$row['sum_gross'] = $totalRGTTC;
		}

		// Write standard fields, inserting extra cols immediately after sum_total (HT)
		$this->colNo = 1;
		foreach ($this->fields as $dbKey => $fieldModel) {
			$idKey = 'id';
			if ($fieldModel->get('source_field_name')) {
				$name  = $fieldModel->get('source_field_name') . $fieldModel->getModuleName();
				$idKey = $name . 'id';
				$dbKey = $name . $fieldModel->getName();
			}
			$fieldName = $fieldModel->getName();
			$value     = $row[$fieldName] ?? ($row[$dbKey] ?? '');
			$id        = $row[$idKey] ?? 0;
			$this->putDataIntoSpreadsheet($fieldModel, $value, $id);

			if ($fieldName === 'sum_total') {
				$this->writeExtraCols($remise, $htApresRemise, $receptionProvisoire, $receptionDefinitive, $totalTVA, $retenueGarantie);
			}
		}
		++$this->rowNo;

		// Append linked avoir rows
		$this->writeAvoirRows($row);

		return [];
	}

	/**
	 * Write the six extra columns at the current colNo position.
	 */
	private function writeExtraCols(float $remise, float $prixApresRemise, float $rp, float $rd, float $tva, float $rg): void
	{
		foreach ([$remise, $prixApresRemise, $rp, $rd, $tva, $rg] as $amount) {
			$this->workSheet->setCellValueExplicitByColumnAndRow(
				$this->colNo, $this->rowNo,
				round($amount, 2),
				\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
			);
			++$this->colNo;
		}
	}

	/**
	 * Query avoirs linked to $invoiceRow whose paymentdate falls in the filtered
	 * date range, then write one negative spreadsheet row per avoir.
	 */
	private function writeAvoirRows(array $invoiceRow): void
	{
		$dateRange = $this->parseDateRange();

		$query = (new \App\Db\Query())
			->select(['a.*', 'vtiger_account.accountname'])
			->from(['a' => 'u_yf_fcorectinginvoice'])
			->leftJoin('vtiger_account', 'a.accountid = vtiger_account.accountid')
			->innerJoin('vtiger_crmentity', 'a.fcorectinginvoiceid = vtiger_crmentity.crmid')
			->where(['a.finvoiceid' => $invoiceRow['id'], 'vtiger_crmentity.deleted' => 0]);

		if ($dateRange) {
			$query->andWhere(['between', 'a.paymentdate', $dateRange[0], $dateRange[1]]);
		}

		foreach ($query->all() as $avoir) {
			// Line-level discount from avoir inventory + record-level discount from linked invoice
			$avoirLineDiscount = (float)((new \App\Db\Query())
				->select(['SUM(discount)'])
				->from('u_yf_fcorectinginvoice_inventory')
				->where(['crmid' => $avoir['fcorectinginvoiceid']])
				->scalar() ?? 0);

			$avoirHT             = (float)($avoir['sum_total'] ?? 0);
			$remise              = $avoirLineDiscount + (float)($invoiceRow['discount'] ?? 0);
			$avoirHtApresRemise  = $avoirHT - $remise;

			$rdPct               = (int)($invoiceRow['reception_definitive'] ?? 0);
			$rpPct               = (int)($invoiceRow['reception_provisoire'] ?? 0);
			$receptionDefinitive = $avoirHtApresRemise * $rdPct / 100;
			$receptionProvisoire = $avoirHtApresRemise * $rpPct / 100;
			$totalHT             = $avoirHtApresRemise - $receptionDefinitive - $receptionProvisoire;

			$avoirGross      = (float)($avoir['sum_gross'] ?? 0);
			$totalTVA        = ($receptionDefinitive > 0 || $receptionProvisoire > 0 || $remise > 0)
				? $totalHT * 0.2
				: ($avoirGross - $avoirHT);
			$totalTTC        = round($totalHT + $totalTVA, 2);
			$rgPct           = (float)($invoiceRow['retenue_garantie'] ?? 0);
			$retenueGarantie = $totalTTC * $rgPct / 100;
			$totalRGTTC      = round($totalTTC - $retenueGarantie, 2);

			$this->colNo = 1;
			foreach ($this->fields as $fieldModel) {
				$fieldName = $fieldModel->getName();
				switch ($fieldName) {
					case 'issue_time':
						$date = $avoir['paymentdate'] ?? '';
						if ($date) {
							$this->workSheet->setCellValueExplicitByColumnAndRow(
								$this->colNo, $this->rowNo,
								\PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($date),
								\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
							);
							$this->workSheet->getStyleByColumnAndRow($this->colNo, $this->rowNo)
								->getNumberFormat()->setFormatCode('DD/MM/YYYY');
						} else {
							$this->workSheet->setCellValueExplicitByColumnAndRow($this->colNo, $this->rowNo, '', \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
						}
						break;

					case 'number':
						$this->workSheet->setCellValueExplicitByColumnAndRow(
							$this->colNo, $this->rowNo,
							(string)($avoir['number'] ?? ''),
							\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING
						);
						break;

					case 'accountid':
						$this->workSheet->setCellValueExplicitByColumnAndRow(
							$this->colNo, $this->rowNo,
							(string)($avoir['accountname'] ?? ''),
							\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING
						);
						break;

					case 'sum_total':
						$this->workSheet->setCellValueExplicitByColumnAndRow(
							$this->colNo, $this->rowNo,
							-round($avoirHT, 2),
							\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
						);
						break;

					case 'sum_gross':
						$this->workSheet->setCellValueExplicitByColumnAndRow(
							$this->colNo, $this->rowNo,
							-round($totalRGTTC, 2),
							\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
						);
						break;

					case 'subject':
						$this->workSheet->setCellValueExplicitByColumnAndRow(
							$this->colNo, $this->rowNo,
							(string)($avoir['subject'] ?? ''),
							\PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING
						);
						break;

					default:
						// Invoice-specific fields (naffaire, nmarche, attachement, …)
						$value = $invoiceRow[$fieldName] ?? '';
						$type  = is_numeric($value) && $value !== ''
							? \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_NUMERIC
							: \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING;
						$this->workSheet->setCellValueExplicitByColumnAndRow($this->colNo, $this->rowNo, $value, $type);
						break;
				}
				++$this->colNo;

				if ($fieldName === 'sum_total') {
					$this->writeExtraCols($remise, $avoirHtApresRemise, $receptionProvisoire, $receptionDefinitive, $totalTVA, $retenueGarantie);
				}
			}
			$this->workSheet->getStyleByColumnAndRow(1, $this->rowNo, $this->colNo - 1, $this->rowNo)
				->applyFromArray(['fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'startColor' => ['argb' => self::AVOIR_ROW_COLOR]]]);
			++$this->rowNo;
		}
	}
}
