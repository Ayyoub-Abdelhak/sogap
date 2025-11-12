<?php

/**
 * Export to spreadsheet model file for Conge module.
 *
 * @package Model
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */

/**
 * Export to spreadsheet model class for Conge module.
 */
class Conge_ExportToSpreadsheet_Model extends Vtiger_ExportToSpreadsheet_Model
{
	/** {@inheritdoc} */
	public function sanitizeValues(array $row): array
	{
		// Check if we need to calculate any of the special fields
		$needsCalculation = false;
		foreach ($this->fields as $fieldModel) {
			$fieldName = $fieldModel->getName();
			if (in_array($fieldName, ['solde_initial', 'consommations_cp_n', 'solde_cp_n'])) {
				$needsCalculation = true;
				break;
			}
		}
		
		// If we need to calculate, fetch the required fields from database if not in row
		if ($needsCalculation) {
			$requiredFields = ['soldefinnmoins1', 'droit_cp_annee_encours', 'janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'];
			$missingFields = array_diff($requiredFields, array_keys($row));
			
			// Fetch missing fields from database
			if (!empty($missingFields) && !empty($row['id'])) {
				$recordData = (new \App\Db\Query())
					->select($missingFields)
					->from('u_yf_conge')
					->innerJoin('vtiger_crmentity', 'u_yf_conge.congeid = vtiger_crmentity.crmid')
					->where(['vtiger_crmentity.crmid' => $row['id'], 'vtiger_crmentity.deleted' => 0])
					->one();
				
				if ($recordData) {
					$row = array_merge($row, $recordData);
				}
			}
			
			// Calculate the additional columns
			$soldeFN1 = (float)($row['soldefinnmoins1'] ?? 0);
			$droitCp = (float)($row['droit_cp_annee_encours'] ?? 0);
			$soldeInitial = $soldeFN1 + $droitCp;
			
			$janvier = (float)($row['janvier'] ?? 0);
			$fevrier = (float)($row['fevrier'] ?? 0);
			$mars = (float)($row['mars'] ?? 0);
			$avril = (float)($row['avril'] ?? 0);
			$mai = (float)($row['mai'] ?? 0);
			$juin = (float)($row['juin'] ?? 0);
			$juillet = (float)($row['juillet'] ?? 0);
			$aout = (float)($row['aout'] ?? 0);
			$septembre = (float)($row['septembre'] ?? 0);
			$octobre = (float)($row['octobre'] ?? 0);
			$novembre = (float)($row['novembre'] ?? 0);
			$decembre = (float)($row['decembre'] ?? 0);
			
			$consomations = $janvier + $fevrier + $mars + $avril + $mai + $juin + $juillet + $aout + $septembre + $octobre + $novembre + $decembre;
			$soldeCP = $soldeInitial - $consomations;
			
			// Override the values in the row
			$row['solde_initial'] = $soldeInitial;
			$row['consommations_cp_n'] = $consomations;
			$row['solde_cp_n'] = $soldeCP;
		}
		
		// Now process the row with the parent method
		$this->colNo = 1;
		foreach ($this->fields as $originalDbKey => $fieldModel) {
			$dbKey = $originalDbKey;
			$idKey = 'id';
			if ($fieldModel->get('source_field_name')) {
				$name = $fieldModel->get('source_field_name') . $fieldModel->getModuleName();
				$idKey = $name . $idKey;
				$dbKey = $name . $fieldModel->getName();
			}
			
			// For calculated fields, check if we have them in the row with the original key
			$value = $row[$dbKey] ?? $row[$originalDbKey] ?? '';

			$this->putDataIntoSpreadsheet($fieldModel, $value, $row[$idKey] ?? 0);
		}
		++$this->rowNo;

		return [];
	}
}