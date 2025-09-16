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
                'date_embauche', 'poste', 'pic'
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
            ->select(['poste', 'entite', 'principales_ref', 'periode'])
            ->from('u_yf_expriencespro')
            ->where(['employe' => $employeeId])
            ->orderBy(['periode' => SORT_DESC]);
            
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
        
        // Get image path
        $imagePath = $this->getImagePath($employee['pic']);
        
        $html = '<div style="font-family: Arial, sans-serif; color: #333; line-height: 1.4; font-size: 11px;">';
        
        // Header Section - using table for better PDF compatibility
        $html .= '<table style="width: 100%; border-collapse: collapse; background-color: #667eea; color: white; margin-bottom: 15px;">';
        $html .= '<tr>';
        
        // Profile section
        $html .= '<td style="width: 25%; text-align: center; padding: 20px; vertical-align: middle;">';
        if ($imagePath) {
            $html .= '<img src="' . $imagePath . '" style="width: 80px; height: 80px; border: 2px solid white;" /><br>';
        } else {
            $html .= '<div style="width: 80px; height: 80px; background-color: white; color: #667eea; text-align: center; line-height: 80px; font-size: 28px; font-weight: bold; margin: 0 auto;">';
            $html .= strtoupper(substr($employee['name'], 0, 1) . substr($employee['last_name'], 0, 1));
            $html .= '</div><br>';
        }
        $html .= '</td>';
        
        // Name and contact info
        $html .= '<td style="width: 75%; padding: 20px; vertical-align: middle;">';
        $html .= '<h1 style="margin: 0 0 8px 0; font-size: 22px; font-weight: bold;">' . $fullName . '</h1>';
        $html .= '<h2 style="margin: 0 0 15px 0; font-size: 14px; font-weight: normal;">' . ($employee['position'] ?: $employee['poste']) . '</h2>';
        
        if ($phone) {
            $html .= '<div style="margin: 3px 0; font-size: 11px;"><strong>Téléphone:</strong> ' . $phone . '</div>';
        }
        if ($email) {
            $html .= '<div style="margin: 3px 0; font-size: 11px;"><strong>Email:</strong> ' . $email . '</div>';
        }
        if ($address) {
            $html .= '<div style="margin: 3px 0; font-size: 11px;"><strong>Adresse:</strong> ' . $address . '</div>';
        }
        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';

        // Personal Info Section
        $html .= '<div style="margin-bottom: 20px; padding: 15px; background-color: #f8f9fa; border-left: 4px solid #667eea;">';
        $html .= '<h3 style="color: #667eea; font-size: 14px; font-weight: bold; margin: 0 0 10px 0; padding-left: 0;">INFORMATIONS PERSONNELLES</h3>';
        
        $html .= '<table style="width: 100%; border-collapse: collapse; font-size: 10px;">';
        $html .= '<tr>';
        $html .= '<td style="width: 50%; padding: 3px; vertical-align: top; padding-left: 0;">';
        if ($employee['date_de_naissance']) {
            $html .= '<div style="margin-bottom: 5px; padding-left: 0;"><strong>Date de naissance:</strong> ' . \App\Fields\Date::formatToDisplay($employee['date_de_naissance']) . '</div>';
        }
        if ($employee['lieu_de_naissance']) {
            $html .= '<div style="margin-bottom: 5px; padding-left: 0;"><strong>Lieu de naissance:</strong> ' . $employee['lieu_de_naissance'] . '</div>';
        }
        $html .= '</td>';
        $html .= '<td style="width: 50%; padding: 3px; vertical-align: top; padding-left: 0;">';
        if ($employee['situation_familiale']) {
            $html .= '<div style="margin-bottom: 5px; padding-left: 0;"><strong>Situation familiale:</strong> ' . $employee['situation_familiale'] . '</div>';
        }
        if ($employee['date_embauche']) {
            $html .= '<div style="margin-bottom: 5px; padding-left: 0;"><strong>Date d\'embauche:</strong> ' . \App\Fields\Date::formatToDisplay($employee['date_embauche']) . '</div>';
        }
        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';
        $html .= '</div>';

        // Experience Section
        if (!empty($experiences)) {
            $html .= '<div style="margin-bottom: 20px;">';
            $html .= '<h3 style="color: #667eea; font-size: 14px; font-weight: bold; margin: 0 0 10px 0; padding-bottom: 3px; border-bottom: 2px solid #667eea; padding-left: 0;">EXPÉRIENCES PROFESSIONNELLES</h3>';
            
            foreach ($experiences as $exp) {
                $html .= '<div style="margin-bottom: 12px; padding: 10px; background-color: #f8f9ff; border-left: 3px solid #667eea;">';
                
                $html .= '<table style="width: 100%; border-collapse: collapse;">';
                $html .= '<tr>';
                $html .= '<td style="width: 70%; vertical-align: top; padding-left: 0;">';
                $html .= '<h4 style="color: #333; font-size: 12px; font-weight: bold; margin: 0 0 3px 0; padding-left: 0;">' . $exp['poste'] . '</h4>';
                $html .= '</td>';
                $html .= '<td style="width: 30%; text-align: right; vertical-align: top; padding-left: 0;">';
                if ($exp['periode']) {
                    $html .= '<span style="background-color: #667eea; color: white; padding: 2px 6px; font-size: 9px;">' . $exp['periode'] . '</span>';
                }
                $html .= '</td>';
                $html .= '</tr>';
                $html .= '</table>';
                
                if ($exp['entite']) {
                    $html .= '<p style="color: #667eea; font-weight: bold; margin: 3px 0; font-size: 11px; padding-left: 0;">' . $exp['entite'] . '</p>';
                }
                
                if ($exp['principales_ref']) {
                    $cleanedRef = $this->cleanHtmlContent($exp['principales_ref']);
                    $html .= '<p style="color: #666; margin: 5px 0 0 0; font-size: 10px; line-height: 1.3; padding-left: 0;">' . $cleanedRef . '</p>';
                }
                $html .= '</div>';
            }
            $html .= '</div>';
        }

        // Formation Section
        if (!empty($formations)) {
            $html .= '<div style="margin-bottom: 20px;">';
            $html .= '<h3 style="color: #667eea; font-size: 14px; font-weight: bold; margin: 0 0 10px 0; padding-bottom: 3px; border-bottom: 2px solid #667eea; padding-left: 0;">FORMATIONS</h3>';
            
            foreach ($formations as $formation) {
                $html .= '<div style="margin-bottom: 10px; padding: 8px; background-color: #f0f7ff; border-left: 3px solid #4dabf7;">';
                
                $html .= '<table style="width: 100%; border-collapse: collapse;">';
                $html .= '<tr>';
                $html .= '<td style="width: 70%; vertical-align: top; padding-left: 0;">';
                $html .= '<h4 style="color: #333; font-size: 11px; font-weight: bold; margin: 0 0 3px 0; padding-left: 0;">' . $formation['thme'] . '</h4>';
                $html .= '</td>';
                $html .= '<td style="width: 30%; text-align: right; vertical-align: top; padding-left: 0;">';
                if ($formation['date']) {
                    $html .= '<span style="background-color: #4dabf7; color: white; padding: 1px 4px; font-size: 9px;">' . \App\Fields\Date::formatToDisplay($formation['date']) . '</span>';
                }
                $html .= '</td>';
                $html .= '</tr>';
                $html .= '</table>';
                
                if ($formation['organismedeform']) {
                    $html .= '<p style="color: #4dabf7; font-weight: bold; margin: 3px 0; font-size: 10px; padding-left: 0;">' . $formation['organismedeform'] . '</p>';
                }
                
                $html .= '<table style="width: 100%; border-collapse: collapse; margin-top: 5px;">';
                $html .= '<tr>';
                if ($formation['duree']) {
                    $html .= '<td style="width: 50%; font-size: 9px; color: #666; padding-left: 0;"><strong>Durée:</strong> ' . $formation['duree'] . '</td>';
                }
                if ($formation['typedeform']) {
                    $html .= '<td style="width: 50%; font-size: 9px; color: #666; padding-left: 0;"><strong>Type:</strong> ' . $formation['typedeform'] . '</td>';
                }
                $html .= '</tr>';
                $html .= '</table>';
                
                $html .= '</div>';
            }
            $html .= '</div>';
        }

        // Diplomes Section
        if (!empty($diplomes)) {
            $html .= '<div style="margin-bottom: 20px;">';
            $html .= '<h3 style="color: #667eea; font-size: 14px; font-weight: bold; margin: 0 0 10px 0; padding-bottom: 3px; border-bottom: 2px solid #667eea; padding-left: 0;">DIPLÔMES & QUALIFICATIONS</h3>';

            foreach ($diplomes as $diplome) {
                if (!empty($diplome['intituldiplme'])) {  // ← Fixed: was 'titre'
                    $html .= '<div style="margin-bottom: 10px; padding: 8px; background-color: #fff5f5; border-left: 3px solid #ff6b6b;">';

                    $html .= '<table style="width: 100%; border-collapse: collapse;">';
                    $html .= '<tr>';
                    $html .= '<td style="width: 70%; vertical-align: top; padding-left: 0;">';
                    $html .= '<h4 style="color: #333; font-size: 11px; font-weight: bold; margin: 0 0 3px 0; padding-left: 0;">' . $diplome['intituldiplme'] . '</h4>';  // ← Fixed: was 'titre'
                    $html .= '</td>';
                    $html .= '<td style="width: 30%; text-align: right; vertical-align: top; padding-left: 0;">';
                    if ($diplome['annee_obtention']) {  // ← Fixed: added year display
                        $html .= '<span style="background-color: #ff6b6b; color: white; padding: 1px 4px; font-size: 9px;">' . $diplome['annee_obtention'] . '</span>';
                    }
                    $html .= '</td>';
                    $html .= '</tr>';
                    $html .= '</table>';

                    if ($diplome['ecole']) {  // ← Fixed: was 'institution'
                        $html .= '<p style="color: #ff6b6b; font-weight: bold; margin: 3px 0; font-size: 10px; padding-left: 0;">' . $diplome['ecole'] . '</p>';
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