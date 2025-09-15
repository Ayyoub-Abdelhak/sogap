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
                'name',
                'last_name',
                'business_phone',
                'private_phone',
                'business_mail',
                'private_mail',
                'street',
                'code',
                'city',
                'position',
                'date_de_naissance',
                'lieu_de_naissance',
                'situation_familiale',
                'qualifications',
                'qualificationss',
                'date_embauche',
                'poste',
                'pic'
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
     * Get diplomes (assuming from qualifications field or separate table)
     */
    private function getDiplomes($employeeId)
    {
        // For now, we'll use the qualifications field
        // You can modify this if you have a separate diplomes table
        $employee = $this->getEmployeeData($employeeId);
        $diplomes = [];

        if (!empty($employee['qualifications'])) {
            $diplomes[] = [
                'titre' => $employee['qualifications'],
                'institution' => '',
                'annee' => ''
            ];
        }

        if (!empty($employee['qualificationss'])) {
            $diplomes[] = [
                'titre' => $employee['qualificationss'],
                'institution' => '',
                'annee' => ''
            ];
        }

        return $diplomes;
    }

    /**
     * Generate modern CV HTML
     */
    private function generateModernCV($employee, $formations, $experiences, $diplomes)
    {
        $fullName = trim($employee['name'] . ' ' . $employee['last_name']);
        $phone = $employee['business_phone'] ?: $employee['private_phone'];
        $email = $employee['business_mail'] ?: $employee['private_mail'];
        $address = trim($employee['street'] . ' ' . $employee['code'] . ' ' . $employee['city']);

        $html = '<div style="font-family: \'Segoe UI\', Tahoma, Geneva, Verdana, sans-serif; color: #333; line-height: 1.6; max-width: 800px; margin: 0 auto;">';

        // Header Section with gradient background
        $html .= '<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 40px 30px; text-align: center; border-radius: 15px 15px 0 0; margin-bottom: 0;">';

        // Profile image placeholder
        if (!empty($employee['pic'])) {
            $html .= '<div style="width: 120px; height: 120px; border-radius: 50%; background: white; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 25px rgba(0,0,0,0.15);">';
            $html .= '<img src="' . $employee['pic'] . '" style="width: 110px; height: 110px; border-radius: 50%; object-fit: cover;" />';
            $html .= '</div>';
        } else {
            $html .= '<div style="width: 120px; height: 120px; border-radius: 50%; background: rgba(255,255,255,0.2); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 48px; font-weight: bold;">';
            $html .= strtoupper(substr($employee['name'], 0, 1) . substr($employee['last_name'], 0, 1));
            $html .= '</div>';
        }

        $html .= '<h1 style="margin: 0 0 10px 0; font-size: 32px; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">' . $fullName . '</h1>';
        $html .= '<h2 style="margin: 0 0 20px 0; font-size: 18px; font-weight: 300; opacity: 0.9;">' . ($employee['position'] ?: $employee['poste']) . '</h2>';

        // Contact info with icons
        $html .= '<div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap; margin-top: 20px;">';
        if ($phone) {
            $html .= '<div style="display: flex; align-items: center; gap: 8px;"><span style="font-size: 14px;">📞</span> <span>' . $phone . '</span></div>';
        }
        if ($email) {
            $html .= '<div style="display: flex; align-items: center; gap: 8px;"><span style="font-size: 14px;">✉️</span> <span>' . $email . '</span></div>';
        }
        if ($address) {
            $html .= '<div style="display: flex; align-items: center; gap: 8px;"><span style="font-size: 14px;">📍</span> <span>' . $address . '</span></div>';
        }
        $html .= '</div>';
        $html .= '</div>';

        // Main content area
        $html .= '<div style="background: white; padding: 40px 30px; border-radius: 0 0 15px 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">';

        // Personal Info Section
        $html .= '<div style="margin-bottom: 35px;">';
        $html .= '<h3 style="color: #667eea; font-size: 20px; font-weight: 600; margin-bottom: 15px; padding-bottom: 8px; border-bottom: 3px solid #667eea; display: inline-block;">👤 INFORMATIONS PERSONNELLES</h3>';
        $html .= '<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-top: 20px;">';

        if ($employee['date_de_naissance']) {
            $html .= '<div><strong>Date de naissance:</strong> ' . \App\Fields\Date::formatToDisplay($employee['date_de_naissance']) . '</div>';
        }
        if ($employee['lieu_de_naissance']) {
            $html .= '<div><strong>Lieu de naissance:</strong> ' . $employee['lieu_de_naissance'] . '</div>';
        }
        if ($employee['situation_familiale']) {
            $html .= '<div><strong>Situation familiale:</strong> ' . $employee['situation_familiale'] . '</div>';
        }
        if ($employee['date_embauche']) {
            $html .= '<div><strong>Date d\'embauche:</strong> ' . \App\Fields\Date::formatToDisplay($employee['date_embauche']) . '</div>';
        }

        $html .= '</div>';
        $html .= '</div>';

        // Experience Section
        if (!empty($experiences)) {
            $html .= '<div style="margin-bottom: 35px;">';
            $html .= '<h3 style="color: #667eea; font-size: 20px; font-weight: 600; margin-bottom: 15px; padding-bottom: 8px; border-bottom: 3px solid #667eea; display: inline-block;">💼 EXPÉRIENCES PROFESSIONNELLES</h3>';

            foreach ($experiences as $exp) {
                $html .= '<div style="margin-bottom: 25px; padding: 20px; background: #f8f9ff; border-radius: 10px; border-left: 4px solid #667eea;">';
                $html .= '<div style="display: flex; justify-content: between; align-items: flex-start; margin-bottom: 10px;">';
                $html .= '<h4 style="color: #333; font-size: 16px; font-weight: 600; margin: 0;">' . $exp['poste'] . '</h4>';
                if ($exp['periode']) {
                    $html .= '<span style="background: #667eea; color: white; padding: 4px 12px; border-radius: 15px; font-size: 12px; font-weight: 500; margin-left: auto;">' . $exp['periode'] . '</span>';
                }
                $html .= '</div>';

                if ($exp['entite']) {
                    $html .= '<p style="color: #667eea; font-weight: 500; margin: 5px 0;"><strong>' . $exp['entite'] . '</strong></p>';
                }

                if ($exp['principales_ref']) {
                    $html .= '<p style="color: #666; margin: 10px 0 0 0; line-height: 1.5;">' . $exp['principales_ref'] . '</p>';
                }
                $html .= '</div>';
            }
            $html .= '</div>';
        }

        // Formation Section
        if (!empty($formations)) {
            $html .= '<div style="margin-bottom: 35px;">';
            $html .= '<h3 style="color: #667eea; font-size: 20px; font-weight: 600; margin-bottom: 15px; padding-bottom: 8px; border-bottom: 3px solid #667eea; display: inline-block;">🎓 FORMATIONS</h3>';

            foreach ($formations as $formation) {
                $html .= '<div style="margin-bottom: 20px; padding: 18px; background: #f0f7ff; border-radius: 10px; border-left: 4px solid #4dabf7;">';
                $html .= '<div style="display: flex; justify-content: between; align-items: flex-start; margin-bottom: 8px;">';
                $html .= '<h4 style="color: #333; font-size: 15px; font-weight: 600; margin: 0;">' . $formation['thme'] . '</h4>';
                if ($formation['date']) {
                    $html .= '<span style="background: #4dabf7; color: white; padding: 3px 10px; border-radius: 12px; font-size: 11px; margin-left: auto;">' . \App\Fields\Date::formatToDisplay($formation['date']) . '</span>';
                }
                $html .= '</div>';

                if ($formation['organismedeform']) {
                    $html .= '<p style="color: #4dabf7; font-weight: 500; margin: 5px 0;"><strong>' . $formation['organismedeform'] . '</strong></p>';
                }

                $html .= '<div style="display: flex; gap: 20px; margin-top: 8px; font-size: 13px; color: #666;">';
                if ($formation['duree']) {
                    $html .= '<span><strong>Durée:</strong> ' . $formation['duree'] . '</span>';
                }
                if ($formation['typedeform']) {
                    $html .= '<span><strong>Type:</strong> ' . $formation['typedeform'] . '</span>';
                }
                $html .= '</div>';

                if ($formation['certificats']) {
                    $html .= '<div style="margin-top: 10px; padding: 8px 12px; background: white; border-radius: 6px; font-size: 12px;"><strong>Certificats:</strong> ' . $formation['certificats'] . '</div>';
                }
                $html .= '</div>';
            }
            $html .= '</div>';
        }

        // Diplomes Section
        if (!empty($diplomes)) {
            $html .= '<div style="margin-bottom: 35px;">';
            $html .= '<h3 style="color: #667eea; font-size: 20px; font-weight: 600; margin-bottom: 15px; padding-bottom: 8px; border-bottom: 3px solid #667eea; display: inline-block;">🏆 DIPLÔMES & QUALIFICATIONS</h3>';

            foreach ($diplomes as $diplome) {
                if (!empty($diplome['titre'])) {
                    $html .= '<div style="margin-bottom: 15px; padding: 15px; background: #fff5f5; border-radius: 8px; border-left: 4px solid #ff6b6b;">';
                    $html .= '<h4 style="color: #333; font-size: 14px; font-weight: 600; margin: 0;">' . $diplome['titre'] . '</h4>';
                    if (!empty($diplome['institution'])) {
                        $html .= '<p style="color: #ff6b6b; margin: 5px 0 0 0; font-size: 13px;"><strong>' . $diplome['institution'] . '</strong></p>';
                    }
                    $html .= '</div>';
                }
            }
            $html .= '</div>';
        }

        $html .= '</div>'; // Close main content
        $html .= '</div>'; // Close main container

        return $html;
    }
}