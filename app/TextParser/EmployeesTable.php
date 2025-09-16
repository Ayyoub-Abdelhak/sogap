<?php

namespace App\TextParser;

/**
 * Modern Employee CV class for PDF generation.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom Development
 */

class EmployeesTable extends Base
{
    /** @var string Class name */
    public $name = 'LBL_EMPLOYEE_CV_MODERN';

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
        $recordModel = $this->textParser->recordModel;
        
        // Get employee data
        $employeeId = $recordModel->getId();
        $employee = $this->getEmployeeData($employeeId);
        
        if (!$employee) {
            return '<p>Aucune donnée employé trouvée.</p>';
        }

        // Get related data
        $formations = $this->getFormations($employeeId);
        $experiences = $this->getExperiences($employeeId);
        $diplomes = $this->getDiplomes($employeeId);

        $html = $this->generateModernCV($employee, $formations, $experiences, $diplomes);
        
        return $html;
    }

    /**
     * Get employee data from database
     */
    private function getEmployeeData($employeeId)
    {
        $query = (new \App\Db\Query())
            ->select([
                'name', 'last_name', 'business_phone', 'private_phone', 'business_mail', 
                'private_mail', 'street', 'code', 'city', 'position', 'date_de_naissance', 
                'lieu_de_naissance', 'situation_familiale', 'qualifications', 'qualificationss',
                'date_embauche', 'poste', 'pic', 'cin_num'
            ])
            ->from('vtiger_ossemployees')
            ->where(['ossemployeesid' => $employeeId]);
            
        return $query->one();
    }

    /**
     * Get formations data
     */
    private function getFormations($employeeId)
    {
        $query = (new \App\Db\Query())
            ->select(['thme', 'certificats', 'date', 'organismedeform', 'duree', 'typedeform'])
            ->from('u_yf_formation')
            ->where(['employee' => $employeeId])
            ->orderBy(['date' => SORT_DESC]);
            
        return $query->all();
    }

    /**
     * Get experiences data
     */
    private function getExperiences($employeeId)
    {
        $query = (new \App\Db\Query())
            ->select(['poste', 'entite', 'principales_ref', 'date_debut', 'date_fin'])
            ->from('u_yf_expriencespro')
            ->where(['employe' => $employeeId])
            ->orderBy(['date_debut' => SORT_ASC]); // Changed to ASC to get oldest first
            
        return $query->all();
    }

    /**
     * Get diplomes data
     */
    private function getDiplomes($employeeId)
    {
        $query = (new \App\Db\Query())
            ->select(['intituldiplme', 'annee_obtention', 'ecole'])
            ->from('u_yf_diplome')
            ->where(['employe' => $employeeId])
            ->orderBy(['annee_obtention' => SORT_DESC]);

        return $query->all();
    }

    /**
     * Calculate years of experience from first experience
     */
    private function calculateYearsOfExperience($experiences)
    {
        if (empty($experiences)) {
            return 0;
        }

        // Find the earliest experience date
        $earliestDate = null;
        foreach ($experiences as $exp) {
            if (!empty($exp['date_debut'])) {
                $startDate = new \DateTime($exp['date_debut']);
                if ($earliestDate === null || $startDate < $earliestDate) {
                    $earliestDate = $startDate;
                }
            }
        }

        if ($earliestDate === null) {
            return 0;
        }

        $currentDate = new \DateTime();
        $interval = $currentDate->diff($earliestDate);
        
        return $interval->y + ($interval->m >= 6 ? 1 : 0); // Round up if 6+ months
    }

    /**
     * Format experience period from date_debut and date_fin
     */
    private function formatExperiencePeriod($dateDebut, $dateFin)
    {
        if (empty($dateDebut)) {
            return '';
        }

        $startDate = new \DateTime($dateDebut);
        $startFormatted = $this->formatDateToFrench($startDate);

        if (empty($dateFin)) {
            return $startFormatted . ' à ce jour';
        }

        $endDate = new \DateTime($dateFin);
        $endFormatted = $this->formatDateToFrench($endDate);

        return $startFormatted . ' - ' . $endFormatted;
    }

    /**
     * Format date to French format (Mai 2024)
     */
    private function formatDateToFrench($date)
    {
        $months = [
            1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril',
            5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août',
            9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre'
        ];

        $month = (int)$date->format('n');
        $year = $date->format('Y');

        return $months[$month] . ' ' . $year;
    }
    private function calculateSeniority($dateEmbauche)
    {
        if (empty($dateEmbauche)) {
            return 0;
        }

        $hireDate = new \DateTime($dateEmbauche);
        $currentDate = new \DateTime();
        $interval = $currentDate->diff($hireDate);
        
        return $interval->y;
    }

    /**
     * Get image path from JSON stored data
     */
    private function getImagePath($picData)
    {
        if (empty($picData)) {
            return null;
        }
        
        $imageData = json_decode($picData, true);
        if (is_array($imageData) && !empty($imageData[0]['path'])) {
            // Construct the full path - adjust base URL as needed
            return $imageData[0]['path'];
        }
        
        return null;
    }

    /**
     * Clean HTML content from CKEditor
     */
    private function cleanHtmlContent($htmlContent)
    {
        if (empty($htmlContent)) {
            return '';
        }

        // Remove HTML tags and decode entities
        $cleanText = strip_tags($htmlContent);
        $cleanText = html_entity_decode($cleanText, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        // Replace multiple spaces/newlines with single space
        $cleanText = preg_replace('/\s+/', ' ', $cleanText);

        // Trim whitespace
        return trim($cleanText);
    }

    /**
     * Generate modern CV HTML compatible with YetiForce PDF
     */
    private function generateModernCV($employee, $formations, $experiences, $diplomes)
    {
        $fullName = trim($employee['name'] . ' ' . $employee['last_name']);
        $phone = $employee['business_phone'] ?: $employee['private_phone'];
        $email = $employee['business_mail'] ?: $employee['private_mail'];
        $address = trim($employee['street'] . ' ' . $employee['code'] . ' ' . $employee['city']);
        
        // Calculate years of experience and seniority
        $yearsOfExperience = $this->calculateYearsOfExperience($experiences);
        $seniority = $this->calculateSeniority($employee['date_embauche']);
        
        // Get image path
        $imagePath = $this->getImagePath($employee['pic']);
        
        $html = '<div style="font-family: Arial, sans-serif; color: #333; line-height: 1.2; font-size: 9px;">';
        
        // Header Section - using table for better PDF compatibility
        $html .= '<table style="width: 100%; border-collapse: collapse; background-color: #667eea; color: white; margin-bottom: 12px;">';
        $html .= '<tr>';
        
        // Profile section
        $html .= '<td style="width: 25%; text-align: center; padding: 15px; vertical-align: middle;">';
        if ($imagePath) {
            $html .= '<img src="' . $imagePath . '" style="width: 70px; height: 70px; border: 2px solid white;" /><br>';
        } else {
            $html .= '<div style="width: 70px; height: 70px; background-color: white; color: #667eea; text-align: center; line-height: 70px; font-size: 24px; font-weight: bold; margin: 0 auto;">';
            $html .= strtoupper(substr($employee['name'], 0, 1) . substr($employee['last_name'], 0, 1));
            $html .= '</div><br>';
        }
        $html .= '</td>';
        
        // Name and contact info
        $html .= '<td style="width: 75%; padding: 15px; vertical-align: middle;">';
        $html .= '<h1 style="margin: 0 0 6px 0; font-size: 18px; font-weight: bold;">' . $fullName . '</h1>';
        $html .= '<h2 style="margin: 0 0 10px 0; font-size: 12px; font-weight: normal;">' . ($employee['position'] ?: $employee['poste']) . '</h2>';
        
        if ($phone) {
            $html .= '<div style="margin: 2px 0; font-size: 9px;"><strong>Téléphone:</strong> ' . $phone . '</div>';
        }
        if ($email) {
            $html .= '<div style="margin: 2px 0; font-size: 9px;"><strong>Email:</strong> ' . $email . '</div>';
        }
        if ($address) {
            $html .= '<div style="margin: 2px 0; font-size: 9px;"><strong>Adresse:</strong> ' . $address . '</div>';
        }
        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';

        // Personal Info Section
        $html .= '<div style="margin-bottom: 15px; padding: 12px; background-color: #f8f9fa; border-left: 4px solid #667eea;">';
        $html .= '<h3 style="color: #667eea; font-size: 12px; font-weight: bold; margin: 0 0 8px 0; padding-bottom: 4px; border-bottom: 4px solid #667eea; padding-left: 0;">INFORMATIONS PERSONNELLES</h3>';
        
        $html .= '<table style="width: 100%; border-collapse: collapse; font-size: 8px;">';
        $html .= '<tr>';
        $html .= '<td style="width: 50%; padding: 2px; vertical-align: top; padding-left: 0;">';
        if ($employee['date_de_naissance']) {
            $html .= '<div style="margin-bottom: 3px; padding-left: 0;"><strong>Date de naissance:</strong> ' . \App\Fields\Date::formatToDisplay($employee['date_de_naissance']) . '</div>';
        }
        if ($employee['lieu_de_naissance']) {
            $html .= '<div style="margin-bottom: 3px; padding-left: 0;"><strong>Lieu de naissance:</strong> ' . $employee['lieu_de_naissance'] . '</div>';
        }
        if (!empty($employee['cin_num'])) {
            $html .= '<div style="margin-bottom: 3px; padding-left: 0;"><strong>CIN Nº:</strong> ' . $employee['cin_num'] . '</div>';
        }
        $html .= '</td>';
        $html .= '<td style="width: 50%; padding: 2px; vertical-align: top; padding-left: 0;">';
        if ($yearsOfExperience > 0) {
            $html .= '<div style="margin-bottom: 3px; padding-left: 0;"><strong>Nombre d\'années d\'expérience:</strong> ' . $yearsOfExperience . ' ans</div>';
        }
        if ($seniority > 0) {
            $html .= '<div style="margin-bottom: 3px; padding-left: 0;"><strong>Ancienneté au sein de l\'entreprise:</strong> ' . $seniority . ' ans</div>';
        }
        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';
        $html .= '</div>';

        // Experience Section
        if (!empty($experiences)) {
            $html .= '<div style="margin-bottom: 15px;">';
            $html .= '<h3 style="color: #667eea; font-size: 12px; font-weight: bold; margin: 0 0 8px 0; padding-bottom: 4px; border-bottom: 4px solid #667eea; padding-left: 0;">EXPÉRIENCES PROFESSIONNELLES</h3>';
            
            // Reverse order for display (most recent first)
            $displayExperiences = array_reverse($experiences);
            
            foreach ($displayExperiences as $exp) {
                $html .= '<div style="margin-bottom: 5px; padding: 0; border-left: 3px solid #667eea; padding-left: 8px;">';
                
                $html .= '<table style="width: 100%; border-collapse: collapse;">';
                $html .= '<tr>';
                $html .= '<td style="width: 70%; vertical-align: top; padding-left: 0;">';
                $html .= '<h4 style="color: #333; font-size: 10px; font-weight: bold; margin: 0 0 2px 0; padding-left: 0;">' . $exp['poste'] . '</h4>';
                $html .= '</td>';
                $html .= '<td style="width: 30%; text-align: right; vertical-align: top; padding-left: 0;">';
                $periodFormatted = $this->formatExperiencePeriod($exp['date_debut'], $exp['date_fin']);
                if ($periodFormatted) {
                    $html .= '<span style="background-color: #667eea; color: white; padding: 1px 4px; font-size: 8px;">' . $periodFormatted . '</span>';
                }
                $html .= '</td>';
                $html .= '</tr>';
                $html .= '</table>';
                
                if ($exp['entite']) {
                    $html .= '<p style="color: #667eea; font-weight: bold; margin: 2px 0; font-size: 9px; padding-left: 0;">' . $exp['entite'] . '</p>';
                }
                
                if ($exp['principales_ref']) {
                    $cleanedRef = $this->cleanHtmlContent($exp['principales_ref']);
                    $html .= '<p style="color: #666; margin: 3px 0 0 0; font-size: 8px; line-height: 1.2; padding-left: 0;">' . $cleanedRef . '</p>';
                }
                $html .= '</div>';
            }
            $html .= '</div>';
        }

        // Formation Section
        if (!empty($formations)) {
            $html .= '<div style="margin-bottom: 15px;">';
            $html .= '<h3 style="color: #667eea; font-size: 12px; font-weight: bold; margin: 0 0 8px 0; padding-bottom: 4px; border-bottom: 4px solid #667eea; padding-left: 0;">FORMATIONS</h3>';
            
            foreach ($formations as $formation) {
                $html .= '<div style="margin-bottom: 5px; padding: 0; border-left: 3px solid #4dabf7; padding-left: 8px;">';
                
                $html .= '<table style="width: 100%; border-collapse: collapse;">';
                $html .= '<tr>';
                $html .= '<td style="width: 70%; vertical-align: top; padding-left: 0;">';
                $html .= '<h4 style="color: #333; font-size: 9px; font-weight: bold; margin: 0 0 2px 0; padding-left: 0;">' . $formation['thme'] . '</h4>';
                $html .= '</td>';
                $html .= '<td style="width: 30%; text-align: right; vertical-align: top; padding-left: 0;">';
                if ($formation['date']) {
                    $html .= '<span style="background-color: #4dabf7; color: white; padding: 1px 3px; font-size: 7px;">' . \App\Fields\Date::formatToDisplay($formation['date']) . '</span>';
                }
                $html .= '</td>';
                $html .= '</tr>';
                $html .= '</table>';
                
                if ($formation['organismedeform']) {
                    $html .= '<p style="color: #4dabf7; font-weight: bold; margin: 2px 0; font-size: 8px; padding-left: 0;">' . $formation['organismedeform'] . '</p>';
                }
                
                $html .= '<table style="width: 100%; border-collapse: collapse; margin-top: 3px;">';
                $html .= '<tr>';
                if ($formation['duree']) {
                    $html .= '<td style="width: 50%; font-size: 7px; color: #666; padding-left: 0;"><strong>Durée:</strong> ' . $formation['duree'] . '</td>';
                }
                if ($formation['typedeform']) {
                    $html .= '<td style="width: 50%; font-size: 7px; color: #666; padding-left: 0;"><strong>Type:</strong> ' . $formation['typedeform'] . '</td>';
                }
                $html .= '</tr>';
                $html .= '</table>';
                
                $html .= '</div>';
            }
            $html .= '</div>';
        }

        // Diplomes Section
        if (!empty($diplomes)) {
            $html .= '<div style="margin-bottom: 15px;">';
            $html .= '<h3 style="color: #667eea; font-size: 12px; font-weight: bold; margin: 0 0 8px 0; padding-bottom: 4px; border-bottom: 4px solid #667eea; padding-left: 0;">DIPLÔMES & QUALIFICATIONS</h3>';

            foreach ($diplomes as $diplome) {
                if (!empty($diplome['intituldiplme'])) {
                    $html .= '<div style="margin-bottom: 5px; padding: 0; border-left: 3px solid #ff6b6b; padding-left: 8px;">';

                    $html .= '<table style="width: 100%; border-collapse: collapse;">';
                    $html .= '<tr>';
                    $html .= '<td style="width: 70%; vertical-align: top; padding-left: 0;">';
                    $html .= '<h4 style="color: #333; font-size: 9px; font-weight: bold; margin: 0 0 2px 0; padding-left: 0;">' . $diplome['intituldiplme'] . '</h4>';
                    $html .= '</td>';
                    $html .= '<td style="width: 30%; text-align: right; vertical-align: top; padding-left: 0;">';
                    if ($diplome['annee_obtention']) {
                        $html .= '<span style="background-color: #ff6b6b; color: white; padding: 1px 3px; font-size: 7px;">' . $diplome['annee_obtention'] . '</span>';
                    }
                    $html .= '</td>';
                    $html .= '</tr>';
                    $html .= '</table>';

                    if ($diplome['ecole']) {
                        $html .= '<p style="color: #ff6b6b; font-weight: bold; margin: 2px 0; font-size: 8px; padding-left: 0;">' . $diplome['ecole'] . '</p>';
                    }

                    $html .= '</div>';
                }
            }
            $html .= '</div>';
        }

        $html .= '</div>';

        return $html;
    }
}