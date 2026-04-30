<?php

namespace App\TextParser;

/**
 * PDF generator: Certificat de Travail.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom Development
 */
class CertificatTravail extends HRDocumentBase
{
    /** @var string Class name */
    public $name = 'LBL_CERTIFICAT_TRAVAIL';

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
        $cin          = $employee['cin_num'];
        $cnss         = $employee['cnss_num'];
        $poste        = $employee['poste'] ?: $employee['position'];
        $dateEmbauche = $this->formatDateFr($employee['date_embauche']);
        $dateSortie   = $this->formatDateFr($employee['sortie']);

        $hon        = $this->honorific();
        $employe    = $this->agree('employé', 'employée');
        $quitte     = $this->agree('Il nous a quitté', 'Elle nous a quitté');
        $interessee = $this->agree('l\'intéressé', 'l\'intéressée');
        $immatricule = $this->agree('immatriculé', 'immatriculée');
        $titulaire   = $this->agree('Titulaire', 'Titulaire');

        $html  = $this->getLetterhead();
        $html .= '<h2 style="text-align:center; text-decoration:underline; font-size:13pt; margin:30px 0 30px 0; letter-spacing:1px;">CERTIFICAT DE TRAVAIL</h2>';

        $html .= '<p style="text-align:justify; line-height:2;">';
        $html .= 'Nous soussignés, Société Générale d\'Application de Peintures « SOGAP SARL », sise à Casablanca, ';
        $html .= 'N°10, Boulevard de Boured, Roches Noires, attestons par la présente que&nbsp;:';
        $html .= '</p>';

        $html .= '<p style="text-align:center; line-height:2; font-size:11pt;">';
        $html .= '<strong>' . $hon . ' ' . $prenom . ' ' . $nom . '</strong>';
        $html .= '</p>';

        $html .= '<p style="text-align:justify; line-height:2;">';
        $html .= $titulaire . ' de la CIN N°<strong>' . $cin . '</strong>, ';
        $html .= $immatricule . ' à la CNSS sous le N°<strong>' . $cnss . '</strong> ';
        $html .= 'a été ' . $employe . ' au sein de notre société en tant que : «&nbsp;<strong>' . $poste . '</strong>&nbsp;» ';
        $html .= 'pendant la période : Du <strong>' . $dateEmbauche . '</strong>';
        if ($dateSortie) {
            $html .= ' au <strong>' . $dateSortie . '</strong>';
        }
        $html .= ' sous contrat à durée déterminée.';
        $html .= '</p>';

        $html .= '<p style="text-align:justify; line-height:2;">';
        $html .= $quitte . ' de son plein gré libre de tout engagement.';
        $html .= '</p>';

        $html .= '<p style="text-align:justify; line-height:2;">';
        $html .= 'Le présent certificat est délivré à ' . $interessee . ' pour servir et valoir ce que de droit.';
        $html .= '</p>';

        $html .= $this->getSignature();

        return $html;
    }
}
