<?php

namespace App\TextParser;

/**
 * PDF generator: Domiciliation Irrévocable de Salaire.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom Development
 */
class DomiciliationSalaire extends HRDocumentBase
{
    /** @var string Class name */
    public $name = 'LBL_DOMICILIATION_SALAIRE';

    /**
     * Process.
     *
     * @return string
     */
    public function process()
    {
        $recordModel = $this->textParser->recordModel;
        $employee    = $this->getEmployeeData($recordModel->getId());

        if (!$employee) {
            return '<p>Données employé introuvables.</p>';
        }

        $this->initGender($employee);

        $prenom  = $employee['name'];
        $nom     = strtoupper($employee['last_name']);
        $banque  = $employee['banquee'];
        $agence  = $employee['agence_bancaire'];
        $rib     = $employee['rrib_num'];

        $honShort   = $this->honorificShort();
        $interessee = $this->agree('l\'intéressé', 'l\'intéressée');
        $licencie   = $this->agree('licenciement de l\'intéressé', 'licenciement de l\'intéressée');

        $style = 'font-family: Arial, sans-serif; font-size: 10pt; color: #222; line-height: 1.6;';
        $html  = '<div style="' . $style . '">';

        // Addressee block (top right)
        $html .= '<table style="width:100%; border-collapse:collapse; margin-bottom:40px;">';
        $html .= '<tr>';
        $html .= '<td style="vertical-align:top; width:50%;">';
        $html .= '<strong style="font-size:11pt;">SOGAP – SARL</strong><br>';
        $html .= 'Société Générale d\'Application de Peintures<br>';
        $html .= 'N°10, Boulevard de Boured, Roches Noires<br>';
        $html .= 'Casablanca';
        $html .= '</td>';
        $html .= '<td style="vertical-align:top; width:50%; text-align:left; padding-left:20px;">';
        $html .= 'A Monsieur le Directeur de&nbsp;: <strong>' . $banque . '</strong><br>';
        $html .= 'Agence&nbsp;: <strong>' . $agence . '</strong>';
        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';

        $html .= '<h2 style="text-align:center; text-decoration:underline; font-size:13pt; margin:30px 0 30px 0; letter-spacing:1px;">Domiciliation irrévocable de salaire</h2>';

        $html .= '<p style="text-align:justify; line-height:2;">';
        $html .= 'Nous soussignés, Société Générale d\'Application de Peintures « SOGAP –SARL », sise à Casablanca, ';
        $html .= 'N°10, Boulevard de Boured, Roches Noires, Nous engageons par la présente de virer mensuellement ';
        $html .= 'et irrévocablement, le salaire intégral et toutes les indemnités de ';
        $html .= '<strong>' . $honShort . ' ' . $prenom . ' ' . $nom . '</strong>, ';
        $html .= 'à son compte ouvert à la <strong>' . $banque . '</strong>, ';
        $html .= 'Agence <strong>' . $agence . '</strong> sous le numéro&nbsp;: <strong>' . $rib . '</strong>.';
        $html .= '</p>';

        $html .= '<p style="text-align:justify; line-height:2;">';
        $html .= '<strong>' . $banque . '</strong> devra obligatoirement être informé, sous huitaine, par écrit en cas ';
        $html .= 'de démission ou de ' . $licencie . ', et le solde de tout compte de ';
        $html .= '<strong>' . $honShort . ' ' . $prenom . ' ' . $nom . '</strong> ';
        $html .= 'lui sera viré sur son compte ci-dessus mentionné, en priorité par rapport à d\'autres créanciers privilégiés.';
        $html .= '</p>';

        // Signature (inline since letterhead is custom here)
        $html .= '<br><br>';
        $html .= '<table style="width:100%; border-collapse:collapse;">';
        $html .= '<tr>';
        $html .= '<td style="width:55%;">&nbsp;</td>';
        $html .= '<td style="width:45%; text-align:right;">';
        $html .= 'Faite à Casablanca, le ' . $this->todayFr() . '<br><br><br>';
        $html .= '<strong>Direction des Ressources Humaines</strong>';
        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';
        $html .= '</div>';

        return $html;
    }
}
