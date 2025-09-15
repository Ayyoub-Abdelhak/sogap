<?php

namespace App\TextParser;

/**
 * Products table short version class.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Arkadiusz Sołek <a.solek@yetiforce.com>
 */

class EmployeesTable extends Base
{
    /** @var string Class name */
    public $name = 'LBL_PRODUCTS_TABLE_SHORT_VERSION';

    /** @var mixed Parser type */
    public $type = 'pdf';

    /**
     * Process.
     *
     * @return string
     */
    public function process()
    {
        $html = '';
        if (!$this->textParser->recordModel->getModule()->isInventory()) {
            return $html;
        }
        $recordModel = $this->textParser->recordModel;
        $html = '';
        $html .= '<table class="custom-static-table" style="width:100%;font-size:8px;border-collapse:collapse;border:1px solid black;">';

        // Row 1 - Centered columns
        $html .= '<tr>';
        $html .= '<td style="width:50%;text-align:center;padding:4px;border:1px solid black;font-size:15px;font-weight:bold;">Facture</td>';
        $html .= '<td style="width:50%;text-align:center;padding:4px;border:1px solid black;"><span style="font-size: 14px">Photo</span><br><img src="' . $recordModel->get('photo') . '"/></td>';
        $html .= '</tr>';

        // Row 4
        $html .= '<tr>';
        $html .= '<td colspan="2" style="text-align:left;padding:4px;border:1px solid black;"><b>Objet</b>: ' . $recordModel->get('name') . '</td>';
        $html .= '</tr>';

        $html .= '</table>';

        return $html;
    }
}
