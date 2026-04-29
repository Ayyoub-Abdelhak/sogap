<?php

namespace App\TextParser;

/**
 * Header for avoir (correcting invoice).
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */
class AvoirHeader extends Base
{
    /** @var string Class name */
    public $name = 'LBL_PRODUCTS_TABLE_SHORT_VERSION';

    /** @var mixed Parser type */
    public $type = 'pdf';

    public function process()
    {
        $html = '';
        $recordModel = $this->textParser->recordModel;
        $invoiceModel = \Vtiger_Record_Model::getInstanceById($recordModel->get('finvoiceid'));
        $account = \Vtiger_Record_Model::getInstanceById($recordModel->get('accountid'));
        $issueTime = \App\Fields\Date::formatToDisplay($recordModel->get('saledate'));

        $html .= '<table class="custom-static-table" style="width:100%;font-size:8px;border-collapse:collapse;border:1px solid black;">';

        $html .= '<tr>';
        $html .= '<td style="width:50%;text-align:center;padding:4px;border:1px solid black;font-size:15px;font-weight:bold;">Avoir N°: ' . $recordModel->get('number') . ' sur Facture N°: ' . $invoiceModel->get('number') . '</td>';
        $html .= '<td style="width:50%;text-align:center;padding:4px;border:1px solid black;"><span style="font-size: 14px">' . $account->get('accountname') . '</span><br>' . $account->get('addresslevel8a') . '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td style="text-align:left;padding:4px;border:1px solid black;">CASABLANCA, le ' . $issueTime . '</td>';
        $html .= '<td style="text-align:center;padding:4px;border:1px solid black;">ICE ' . $account->get('ice') . '</td>';
        $html .= '</tr>';

        $fields = [
            'bc'          => $invoiceModel->get('bc'),
            'br'          => $invoiceModel->get('br'),
            'decompte'    => $invoiceModel->get('decompte'),
            'attachement' => $invoiceModel->get('attachement'),
            'nmarche'     => $invoiceModel->get('nmarche'),
            'naffaire'    => $invoiceModel->get('naffaire'),
            'ndr'         => $invoiceModel->get('ndr'),
        ];

        $html .= '<tr>';
        $html .= '<td colspan="2" style="padding:4px;border:1px solid black;">';
        $html .= '<div style="display:inline-block;width:51%;vertical-align:top;text-align:left;">';
        if ($fields['bc'])
            $html .= '<b>Bon Commande N°</b>: ' . $fields['bc'] . '<br>';
        if ($fields['br'])
            $html .= '<b>Bon de Reception N°</b>: ' . $fields['br'] . '<br>';
        if ($fields['decompte'])
            $html .= '<b>Décompte N°</b>: ' . $fields['decompte'];
        $html .= '</div>';

        $html .= '<div style="display:inline-block;width:49%;vertical-align:top;text-align:right;">';
        if ($fields['attachement'])
            $html .= '<b>Attachement N°</b>: ' . $fields['attachement'] . '<br>';
        if ($fields['nmarche'])
            $html .= '<b>Marché N°</b>: ' . $fields['nmarche'] . '<br>';
        if ($fields['ndr'])
            $html .= '<b>FS N°</b>: ' . $fields['ndr'] . '<br>';
        if ($fields['naffaire'])
            $html .= '<b>Affaire N°</b>: ' . $fields['naffaire'];
        $html .= '</div>';

        $html .= '</td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<td colspan="2" style="text-align:left;padding:4px;border:1px solid black;"><b>Objet</b>: ' . $recordModel->get('subject') . '</td>';
        $html .= '</tr>';

        $html .= '</table>';

        return $html;
    }
}
