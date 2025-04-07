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
        $html = '';
        $html .= '<br><br><strong>';

        if ($bank === 'CFG') {
            $html .= 'Banque : CFG Bank - Agence Agence TPME <br>';
            $html .= 'Compte n° : 050 780 004 0103990892001 50 <br>';
            $html .= 'Swift : CAFGMAMC';
        } elseif ($bank === 'ATTIJARIWAFA') {
            $html .= 'Banque : ATTIJARIWAFA BANK - Agence Ambassadeur Ben Aicha <br>';
            $html .= 'Compte n° : 007 780 0002625000000452 35 <br>';
            $html .= 'Swift : BCMAMAMC';
        } else {
            $html .= 'BANQUE : BMCE BANK <br>';
            $html .= 'AGENCE : CENTRE AFF FAR <br>';
            $html .= 'ADRESSE: 73 AV DES FAR 20000 / Casablanca <br>';
            $html .= 'R.I.B N°: 011780000033210001037990 <br>';
            $html .= 'SWIFT: BMCEMAMC';
        }
        $html .= '</strong>';
        return $html;
    }
}
