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

class FactureBanque extends Base
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
        $bank = $recordModel->get('bank');

        $html .= '<table border="1" cellpadding="0" cellspacing="0">';
        $html .= '<tr><td><br></td></tr>';
        $html .= '<tr><td><br></td></tr>';
        $html .= '<tr><td><br></td></tr>';
        $html .= '<tr><td>';

        if ($bank === 'CFG') {
            $html .= '<strong>Banque : CFG Bank - Agence Agence TPME</strong> <br>';
            $html .= '<strong>Compte n° : 050 780 004 0103990892001 50</strong> <br>';
            $html .= '<strong>Swift : CAFGMAMC</strong> <br>';
        } elseif ($bank === 'ATTIJARIWAFA') {
            $html .= '<strong>Banque : ATTIJARIWAFA BANK - Agence Ambassadeur Ben Aicha</strong> <br>';
            $html .= '<strong>Compte n° : 007 780 0002625000000452 35</strong> <br>';
            $html .= '<strong>Swift : BCMAMAMC</strong> <br>';
        } else {
            $html .= '<strong>BANQUE : BMCE BANK</strong> <br>';
            $html .= '<strong>AGENCE : CENTRE AFF FAR</strong> <br>';
            $html .= '<strong>ADRESSE: 73 AV DES FAR 20000 / Casablanca</strong> <br>';
            $html .= '<strong>R.I.B N°: 011780000033210001037990 SWIFT: BMCEMAMC</strong> <br>';
        }

        $html .= '</td></tr>';
        $html .= '</table>';

        return $html;
    }
}
