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
		// Check if sum_gross is being exported
		$sumGrossExists = false;
		foreach ($this->fields as $fieldModel) {
			if ($fieldModel->getName() === 'sum_gross') {
				$sumGrossExists = true;
				break;
			}
		}
		
		// Only modify sum_gross if it's being exported
		if ($sumGrossExists && isset($row['sum_gross'])) {
			// Fetch retenue_garantie if not in row
			if (!isset($row['retenue_garantie']) && !empty($row['id'])) {
				$recordData = (new \App\Db\Query())
					->select(['retenue_garantie'])
					->from('u_yf_finvoice')
					->innerJoin('vtiger_crmentity', 'u_yf_finvoice.finvoiceid = vtiger_crmentity.crmid')
					->where(['vtiger_crmentity.crmid' => $row['id'], 'vtiger_crmentity.deleted' => 0])
					->one();
				
				if ($recordData) {
					$row['retenue_garantie'] = $recordData['retenue_garantie'];
				}
			}
			
			$totalTTC = (float)$row['sum_gross'];
			$retenueGarantiePercentage = (float)($row['retenue_garantie'] ?? 0);
			
			// Calculate retenue de garantie amount
			$retenueGarantie = $totalTTC * $retenueGarantiePercentage / 100;
			
			// Calculate total after retenue de garantie
			$totalRGTTC = round($totalTTC - $retenueGarantie, 2);
			
			// Replace sum_gross with the calculated value (TTC - retenue_garantie)
			$row['sum_gross'] = $totalRGTTC;
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