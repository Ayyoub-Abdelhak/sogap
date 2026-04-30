<?php

namespace App\TextParser;

/**
 * PDF generator: Attestation de Travail et de Salaire.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom Development
 */
class AttestationSalaire extends HRDocumentBase
{
    /** @var string Class name */
    public $name = 'LBL_ATTESTATION_SALAIRE';

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

        $prenom       = $employee['name'];
        $nom          = strtoupper($employee['last_name']);
        $cnss         = $employee['cnss_num'];
        $dateEmbauche = $this->formatDateFr($employee['date_embauche']);
        $poste        = $employee['poste'] ?: $employee['position'];
        $salaireMoyen = !empty($employee['salaire_moyen']) ? $this->formatMontant((float)$employee['salaire_moyen']) : '';
        $salaireLettres = $employee['salaire_lettres'];

        $hon         = $this->honorific();
        $employe     = $this->agree('employé', 'employée');
        $immatricule = $this->agree('immatriculé', 'immatriculée');
        $il          = $this->agree('il', 'elle');
        $interessee  = $this->agree('l\'intéressé', 'l\'intéressée');

        $html  = $this->getLetterhead();
        $html .= '<h2 style="text-align:center; text-decoration:underline; font-size:13pt; margin:30px 0 30px 0; letter-spacing:1px;">ATTESTATION DE TRAVAIL ET DE SALAIRE</h2>';

        $html .= '<p style="text-align:justify; line-height:2;">';
        $html .= 'Nous soussignés, Société Générale d\'Application de Peintures « SOGAP –SARL », sise à Casablanca, ';
        $html .= 'N°10, Boulevard de Boured, Roches Noires, attestons par la présente que ';
        $html .= '<strong>' . $hon . ' ' . $prenom . ' ' . $nom . '</strong> ';
        $html .= $immatricule . ' à la CNSS sous le N°<strong>' . $cnss . '</strong>, ';
        $html .= 'est ' . $employe . ' au sein de notre société depuis le <strong>' . $dateEmbauche . '</strong> ';
        $html .= 'en qualité de : «<strong>' . $poste . '</strong>».';
        $html .= '</p>';

        if ($salaireMoyen) {
            $html .= '<p style="text-align:justify; line-height:2;">';
            $html .= 'A ce titre, ' . $il . ' perçoit en moyenne un salaire net mensuel de ';
            $html .= '<strong>' . $salaireMoyen . '</strong> Dirhams';
            if ($salaireLettres) {
                $html .= ' (<strong>' . $salaireLettres . '</strong> Dirhams)';
            }
            $html .= '.';
            $html .= '</p>';
        }

        $html .= '<p style="text-align:justify; line-height:2;">';
        $html .= 'La présente attestation est délivrée à la demande de ' . $interessee . ' pour servir et valoir ce que de droit.';
        $html .= '</p>';

        $html .= $this->getSignature();

        return $html;
    }
}
