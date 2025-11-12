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
        // Get the base values from the database
        $totalHT = (float) ($row['sum_total'] ?? 0); // HT = sum_total
        $totalTTC = (float) ($row['sum_gross'] ?? 0); // TTC = sum_gross
        $retenueGarantiePercentage = (float) ($row['retenue_garantie'] ?? 0);

        // Calculate retenue de garantie amount
        $retenueGarantie = $totalTTC * $retenueGarantiePercentage / 100;

        // Calculate total after retenue de garantie
        $totalRGTTC = round($totalTTC - $retenueGarantie, 2);

        // Calculate TVA (TTC - HT)
        $totalTVA = $totalTTC - $totalHT;

        // Add calculated values to the row
        // These fields should match the field names in your FInvoice module
        $row['retenue_garantie_amount'] = $retenueGarantie;
        $row['total_rg_ttc'] = $totalRGTTC;
        $row['total_tva'] = $totalTVA;

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