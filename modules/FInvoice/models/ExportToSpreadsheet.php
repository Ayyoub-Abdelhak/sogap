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
	/** {@inheritdoc} */
	public function sanitizeValues(array $row): array
	{
        // Check if sum_gross (TTC) or sum_total (HT) are being exported
		$sumGrossExists = false;
        $sumTotalExists = false;

        foreach ($this->fields as $fieldModel) {
            $fieldName = $fieldModel->getName();
            if ($fieldName === 'sum_gross') {
				$sumGrossExists = true;
            }
            if ($fieldName === 'sum_total') {
                $sumTotalExists = true;
			}
		}

        // If either sum_gross or sum_total is being exported, we need to recalculate
        if ($sumGrossExists || $sumTotalExists) {
            // Fetch required fields if not in row
            $requiredFields = ['sum_total', 'sum_gross', 'retenue_garantie', 'reception_definitive', 'reception_provisoire', 'sum_discount'];
            $missingFields = array_diff($requiredFields, array_keys($row));

            if (!empty($missingFields) && !empty($row['id'])) {
				$recordData = (new \App\Db\Query())
                    ->select($missingFields)
                    ->from('u_yf_finvoice')
                    ->innerJoin('vtiger_crmentity', 'u_yf_finvoice.finvoiceid = vtiger_crmentity.crmid')
					->where(['vtiger_crmentity.crmid' => $row['id'], 'vtiger_crmentity.deleted' => 0])
					->one();
                    
				if ($recordData) {
                    $row = array_merge($row, $recordData);
				}
			}

            // Get base values
            $ht = (float) ($row['sum_total'] ?? 0);
            $discount = (float) ($row['sum_discount'] ?? 0);
            $receptionDefinitivePercentage = (int) ($row['reception_definitive'] ?? 0);
            $receptionProvisoirePercentage = (int) ($row['reception_provisoire'] ?? 0);

            // Calculate reception amounts
            $totalHT = $ht - $discount;
            $receptionDefinitive = $totalHT * $receptionDefinitivePercentage / 100;
            $receptionProvisoire = $totalHT * $receptionProvisoirePercentage / 100;

            // Adjust HT after reception deductions
            $totalHT = $totalHT - $receptionDefinitive - $receptionProvisoire;

            // Calculate TVA (20%)
            $totalTVA = ($receptionDefinitive > 0 || $receptionProvisoire > 0) ? $totalHT * 0.2 : (float) ($row['sum_gross'] ?? 0) - $ht;

            // Calculate TTC before retenue garantie
            $totalTTC = round($totalHT + $totalTVA, 2);

            // Apply retenue de garantie
            $retenueGarantiePercentage = (float) ($row['retenue_garantie'] ?? 0);
            $retenueGarantie = $totalTTC * $retenueGarantiePercentage / 100;
			$totalRGTTC = round($totalTTC - $retenueGarantie, 2);

            // Update the row with recalculated values
            if ($sumTotalExists) {
                $row['sum_total'] = $totalHT;
            }
            if ($sumGrossExists) {
                $row['sum_gross'] = $totalRGTTC;
            }
		}
		
		// Now process the row with the parent method
		$this->colNo = 1;
		foreach ($this->fields as $dbKey => $fieldModel) {
			$idKey = 'id';
			if ($fieldModel->get('source_field_name')) {
				$name = $fieldModel->get('source_field_name') . $fieldModel->getModuleName();
				$idKey = $name . $idKey;
				$dbKey = $name . $fieldModel->getName();
			}
			
			// Get the actual field name to look up in the row
			$fieldName = $fieldModel->getName();
			$value = $row[$fieldName] ?? ($row[$dbKey] ?? '');
			$id = $row[$idKey] ?? 0;

			$this->putDataIntoSpreadsheet($fieldModel, $value, $id);
		}
		++$this->rowNo;

		return [];
	}
}