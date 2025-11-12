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
        // Calculate the additional columns before exporting
        $soldeFN1 = (float) ($row['soldefinnmoins1'] ?? 0);
        $droitCp = (float) ($row['droit_cp_annee_encours'] ?? 0);
        $soldeInitial = $soldeFN1 + $droitCp;

        $janvier = (float) ($row['janvier'] ?? 0);
        $fevrier = (float) ($row['fevrier'] ?? 0);
        $mars = (float) ($row['mars'] ?? 0);
        $avril = (float) ($row['avril'] ?? 0);
        $mai = (float) ($row['mai'] ?? 0);
        $juin = (float) ($row['juin'] ?? 0);
        $juillet = (float) ($row['juillet'] ?? 0);
        $aout = (float) ($row['aout'] ?? 0);
        $septembre = (float) ($row['septembre'] ?? 0);
        $octobre = (float) ($row['octobre'] ?? 0);
        $novembre = (float) ($row['novembre'] ?? 0);
        $decembre = (float) ($row['decembre'] ?? 0);

        $consomations = $janvier + $fevrier + $mars + $avril + $mai + $juin + $juillet + $aout + $septembre + $octobre + $novembre + $decembre;
        $soldeCP = $soldeInitial - $consomations;

        // Add calculated values to the row
        $row['solde_initial'] = $soldeInitial;
        $row['consommations_cp_n'] = $consomations;
        $row['solde_cp_n'] = $soldeCP;

        // Now process the row with the parent method
        $this->colNo = 1;
        foreach ($this->fields as $dbKey => $fieldModel) {
            $idKey = 'id';
            if ($fieldModel->get('source_field_name')) {
                $name = $fieldModel->get('source_field_name') . $fieldModel->getModuleName();
                $idKey = $name . $idKey;
                $dbKey = $name . $fieldModel->getName();
            }

            $this->putDataIntoSpreadsheet($fieldModel, $row[$dbKey] ?? '', $row[$idKey] ?? 0);
        }
        ++$this->rowNo;

        return [];
    }
}