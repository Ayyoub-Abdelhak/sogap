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

class FactureHeader extends Base
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
        $issueTime = \App\Fields\Date::formatToDisplay($recordModel->get('issue_time'));
        $html = '';
        $html .= '<table class="custom-static-table" style="width:100%;font-size:8px;border-collapse:collapse;border:1px solid black;">';

        // Row 1 - Centered columns
        $html .= '<tr>';
        $html .= '<td style="width:50%;text-align:center;padding:4px;border:1px solid black;font-size:15px;font-weight:bold;">Facture</td>';
        $html .= '<td style="width:50%;text-align:center;padding:4px;border:1px solid black;">' . $issueTime . '</td>';
        $html .= '</tr>';

        // Row 2
        $html .= '<tr>';
        $html .= '<td style="text-align:left;padding:4px;border:1px solid black;">Left Text</td>';
        $html .= '<td style="text-align:center;padding:4px;border:1px solid black;">Centered Text</td>';
        $html .= '</tr>';

        // Row 3
        $html .= '<tr>';
        $html .= '<td colspan="2" style="padding:4px;border:1px solid black;">';
        $html .= '<div style="display:inline-block;width:49%;vertical-align:top;text-align:left;">Line 1<br>Line 2<br>Line 3</div>';
        $html .= '<div style="display:inline-block;width:49%;vertical-align:top;text-align:right;">Line A<br>Line B<br>Line C</div>';
        $html .= '</td>';
        $html .= '</tr>';

        // Row 4
        $html .= '<tr>';
        $html .= '<td colspan="2" style="text-align:left;padding:4px;border:1px solid black;">Final Left-Aligned Text</td>';
        $html .= '</tr>';

        $html .= '</table>';

        return $html;
    }
}
