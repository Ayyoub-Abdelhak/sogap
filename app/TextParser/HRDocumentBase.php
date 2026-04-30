<?php

namespace App\TextParser;

/**
 * Abstract base class for SOGAP HR document PDF generators.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom Development
 */
class HRDocumentBase extends Base
{
    /** @var mixed Parser type */
    public $type = 'pdf';

    /** @var array Allowed modules */
    public $allowedModules = ['OSSEmployees'];

    /** @var bool Gender flag: false = Homme, true = Femme */
    protected $feminine = false;

    /**
     * Get employee data fields needed for HR documents.
     */
    protected function getEmployeeData(int $employeeId): ?array
    {
        return (new \App\Db\Query())
            ->select([
                'name', 'last_name', 'cnss_num', 'cin_num', 'date_embauche',
                'poste', 'position', 'sortie', 'salaire_moyen', 'salaire_lettres',
                'banquee', 'agence_bancaire', 'rrib_num', 'gender',
            ])
            ->from('vtiger_ossemployees')
            ->where(['ossemployeesid' => $employeeId])
            ->one() ?: null;
    }

    /**
     * Set $feminine based on the employee's gender field value.
     * Any value other than "Femme" is treated as masculine (safe default).
     */
    protected function initGender(array $employee): void
    {
        $this->feminine = ($employee['gender'] === 'Femme');
    }

    /** Format a Y-m-d date string to "1 Janvier 2024". */
    protected function formatDateFr(?string $dateStr): string
    {
        if (empty($dateStr)) {
            return '';
        }
        $months = [
            1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril',
            5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août',
            9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre',
        ];
        $d = new \DateTime($dateStr);
        return (int)$d->format('j') . ' ' . $months[(int)$d->format('n')] . ' ' . $d->format('Y');
    }

    /** Today's date in French long format. */
    protected function todayFr(): string
    {
        return $this->formatDateFr((new \DateTime())->format('Y-m-d'));
    }

    /** Format a decimal salary amount in French style: "15 000,00". */
    protected function formatMontant(float $amount): string
    {
        return number_format($amount, 2, ',', ' ');
    }

    /** Return "Monsieur" or "Madame" based on gender. */
    protected function honorific(): string
    {
        return $this->feminine ? 'Madame' : 'Monsieur';
    }

    /** Return "M." or "Mme" abbreviation. */
    protected function honorificShort(): string
    {
        return $this->feminine ? 'Mme' : 'M.';
    }

    /** Agree a word: masc form / fem form. */
    protected function agree(string $masc, string $fem): string
    {
        return $this->feminine ? $fem : $masc;
    }

    /**
     * Company letterhead HTML block.
     * Returns an open <div> — caller must close it via getSignature().
     */
    protected function getLetterhead(): string
    {
        $style = 'font-family: Arial, sans-serif; font-size: 10pt; color: #222; line-height: 1.6;';
        $html  = '<div style="' . $style . '">';
        $html .= '<table style="width:100%; border-collapse:collapse; margin-bottom:40px;">';
        $html .= '<tr>';
        $html .= '<td style="vertical-align:top; width:55%;">';
        $html .= '<strong style="font-size:11pt;">SOGAP – SARL</strong><br>';
        $html .= 'Société Générale d\'Application de Peintures<br>';
        $html .= 'N°10, Boulevard de Boured, Roches Noires<br>';
        $html .= 'Casablanca';
        $html .= '</td>';
        $html .= '<td style="vertical-align:top; width:45%;">&nbsp;</td>';
        $html .= '</tr>';
        $html .= '</table>';
        return $html;
    }

    /**
     * Signature block and closing </div>.
     */
    protected function getSignature(): string
    {
        $html  = '<br><br>';
        $html .= '<table style="width:100%; border-collapse:collapse;">';
        $html .= '<tr>';
        $html .= '<td style="width:55%;">&nbsp;</td>';
        $html .= '<td style="width:45%; text-align:right;">';
        $html .= 'Fait à Casablanca, le ' . $this->todayFr() . '<br><br><br>';
        $html .= '<strong>Direction des Ressources Humaines</strong>';
        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';
        $html .= '</div>';
        return $html;
    }
}
