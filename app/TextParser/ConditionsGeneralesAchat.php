<?php

namespace App\TextParser;

/**
 * Conditions Générales d'Achat class.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom
 */
class ConditionsGeneralesAchat extends Base
{
    /** @var string Class name */
    public $name = 'LBL_CONDITIONS_GENERALES_ACHAT';

    /** @var mixed Parser type */
    public $type = 'pdf';

    /**
     * Process.
     *
     * @return string
     */
    public function process()
    {
        $html = '<style>
            .cga-header-table {
                width: 100%;
                border: 1px solid #000;
                border-bottom: none;
                border-collapse: collapse;
                margin-bottom: 0px;
            }
            .cga-header-table td {
                border: 1px solid #000;
                border-bottom: none;
                padding: 5px;
                text-align: center;
                vertical-align: middle;
            }
            .cga-header-title {
                width: 80%;
                font-size: 16px;
                font-weight: bold;
            }
            .cga-header-ref {
                width: 20%;
                font-size: 9px;
                border-left: 1px solid #000;
            }
            .cga-content-table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 0px;
            }
            .cga-column {
                width: 50%;
                border: 1px solid #000;
                border-top: none;
                padding: 10px;
                vertical-align: top;
                font-size: 7px;
                line-height: 1.3;
            }
            .cga-section-title {
                font-weight: bold;
                font-size: 8px;
                margin-top: 8px;
                margin-bottom: 3px;
            }
            .cga-section-content {
                text-align: justify;
                margin-bottom: 8px;
            }
            .cga-list {
                margin-left: 15px;
                margin-top: 3px;
                margin-bottom: 3px;
            }
        </style>';

        // HEADER
        $html .= '<table class="cga-header-table">';
        $html .= '<tr>';
        $html .= '<td class="cga-header-title">CONDITIONS GÉNÉRALES D\'ACHAT</td>';
        $html .= '<td class="cga-header-ref"><strong>CGA-Ind00</strong><br>Date: 20-10-2025</td>';
        $html .= '</tr>';
        $html .= '</table>';

        // PAGE 1 - TWO COLUMNS
        $html .= '<table class="cga-content-table">';
        $html .= '<tr>';
        
        // LEFT COLUMN - PAGE 1
        $html .= '<td class="cga-column">';
        
        // Section 1
        $html .= '<div class="cga-section-title">1. Objet et champ d\'application</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Les présentes conditions régissent l\'achat de matières premières, matériels industriels, EPI et autres achats destinés à être utilisées lors d\'une prestation de service réalisée par la société SOGAP';
        $html .= '</div>';

        // Section 2
        $html .= '<div class="cga-section-title">2. Conformité aux normes HSE</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur s\'engage à respecter toutes les exigences légales et réglementaires en matière de sécurité, d\'hygiène et d\'environnement (HSE) applicables aux produits fournis, ainsi que les standards spécifiques de l\'entreprise.';
        $html .= '</div>';

        // Section 3
        $html .= '<div class="cga-section-title">3. Sécurité des produits et documentation à fournir à chaque livraison</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Les produits doivent être conformes aux normes de sécurité en vigueur. Le fournisseur doit fournir la documentation relative à la sécurité des produits, y compris, mais sans s\'y limiter :';
        $html .= '<div class="cga-list">';
        $html .= '• Les fiches de données de sécurité (FDS)<br>';
        $html .= '• Les informations sur les risques chimiques et/ou biologiques<br>';
        $html .= '• Les consignes de manipulation, de stockage et de transport des produits (étiquetage)<br>';
        $html .= '• Les certificats de conformité<br>';
        $html .= '• Bon de livraison cacheté et signé<br>';
        $html .= '• Pour le matériel : Manuel d\'utilisation et d\'entretien, ✓ Certificat de conformité, ✓ Fiche technique, ✓ Déclaration Unique de Marchandises (DUM) en cas d\'acquisition par importation.<br>';
        $html .= '• Facture (en ce qui concerne le matériel la facture doit inclure Les numéros de série des équipements concernés, ✓ Les références et caractéristiques techniques complètes, ✓ La désignation précise et la quantité des matériels livrés.)';
        $html .= '</div></div>';

        // Section 4
        $html .= '<div class="cga-section-title">4. Qualité et conformité des produits</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur doit garantir que les produits respectent les spécifications qualité définies par l\'entreprise. Tout écart par rapport à ces spécifications doit être communiqué et validé avant livraison. Le fournisseur garantit la conformité des produits livrés pendant une période de 6 mois à compter de la date de réception des produits. Si des défauts ou non-conformités sont détectés dans ce délai, le fournisseur s\'engage à prendre en charge les réparations ou les remplacements nécessaires.';
        $html .= '</div>';

        $html .= '</td>';
        
        // RIGHT COLUMN - PAGE 1
        $html .= '<td class="cga-column">';
        
        // Section 5
        $html .= '<div class="cga-section-title">5. Gestion des risques environnementaux</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur doit fournir des informations sur l\'impact environnemental des matières premières (empreinte carbone, émissions de gaz à effet de serre, risques de pollution).';
        $html .= '</div>';
        
        // Section 5
        $html .= '<div class="cga-section-title">5. Gestion des risques environnementaux</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur doit fournir des informations sur l\'impact environnemental des matières premières (empreinte carbone, émissions de gaz à effet de serre, risques de pollution).';
        $html .= '</div>';
        
        // Section 6
        $html .= '<div class="cga-section-title">6. Formation et sensibilisation</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur doit s\'assurer que ses employés et sous-traitants reçoivent une formation adéquate sur les pratiques HSE, notamment en ce qui concerne les risques associés aux matières premières fournies, leur manipulation, leur stockage et leur élimination.';
        $html .= '</div>';

        // Section 7
        $html .= '<div class="cga-section-title">7. Audits et contrôles</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur accepte de se soumettre à des audits ou inspections HSE réalisés par l\'entreprise ou par un tiers désigné pour vérifier la conformité des produits et des pratiques de production aux exigences spécifiées. Toute non-conformité détectée devra être corrigée dans les délais convenus.';
        $html .= '</div>';

        // Section 8
        $html .= '<div class="cga-section-title">8. Évaluation annuelle des fournisseurs</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Dans le cadre de l\'amélioration continue de la gestion HSE, l\'entreprise procédera à une évaluation annuelle des fournisseurs, couvrant les aspects suivants : (voir fiche d\'évaluation en annexe)';
        $html .= '<div class="cga-list">';
        $html .= '• Respect des normes HSE : Qualité des matières premières et ou produits, matériels fourni(e)s et conformité<br>';
        $html .= '• Performances achat (compétitivité, modalités de paiement, organisation interne,.,)<br>';
        $html .= '• Logistique (respect des délais de livraison, rupture,…)<br>';
        $html .= '• Développement : (innovation produit, amélioration des compétences)';
        $html .= '</div>';
        $html .= 'Les résultats de cette évaluation seront partagés avec le fournisseur en cas de performance insuffisante. Un plan d\'action correctif sera défini et devra être mis en œuvre sous un délai déterminé. Le non-respect de ce plan pourra entraîner la résiliation du contrat d\'achat.';
        $html .= '</div>';

        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';

        // PAGE BREAK
        $html .= '<div style="page-break-after:always;"></div>';

        // HEADER PAGE 2
        $html .= '<table class="cga-header-table">';
        $html .= '<tr>';
        $html .= '<td class="cga-header-title">CONDITIONS GÉNÉRALES D\'ACHAT</td>';
        $html .= '<td class="cga-header-ref"><strong>CGA-Ind00</strong><br>Date: 20-10-2025</td>';
        $html .= '</tr>';
        $html .= '</table>';

        // PAGE 2 - TWO COLUMNS
        $html .= '<table class="cga-content-table">';
        $html .= '<tr>';
        
        // LEFT COLUMN - PAGE 2
        $html .= '<td class="cga-column">';
        
        // Section 9
        $html .= '<div class="cga-section-title">9. Respect des livraisons et des conformités des produits</div>';
        $html .= '<div class="cga-section-title" style="margin-left: 10px;">9.1 Respect des délais de livraison</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur s\'engage à respecter strictement les délais de livraison convenus. Tout retard dans la livraison devra être communiqué à l\'entreprise au moins 1 jour avant la date prévue, avec une explication détaillée des raisons du retard. En cas de retard non justifié, l\'entreprise se réserve le droit de :';
        $html .= '<div class="cga-list">';
        $html .= '• Appliquer des pénalités de retard,<br>';
        $html .= '• Réaliser une annulation partielle ou totale de la commande sans préjudice';
        $html .= '</div></div>';
        
        // Section 9.2
        $html .= '<div class="cga-section-title" style="margin-left: 10px;">9.2. Conformité des produits</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur garantit que les produits livrés sont conformes aux spécifications définies dans le contrat, les bons de commande et/ou les documents techniques relatifs aux produits. Cela inclut, sans s\'y limiter :';
        $html .= '<div class="cga-list">';
        $html .= '• Les caractéristiques physiques et ou chimiques des produits,<br>';
        $html .= '• Les conditions de sécurité et de qualité,<br>';
        $html .= '• La conformité aux normes légales et réglementaires en vigueur,<br>';
        $html .= '• Le respect des critères environnementaux et de durabilité.';
        $html .= '</div>';
        $html .= 'Le fournisseur s\'engage également à fournir tous les certificats nécessaires (certificats de qualité, de conformité, de sécurité, etc.) lors de chaque livraison.';
        $html .= '</div>';

        // Section 9.3
        $html .= '<div class="cga-section-title" style="margin-left: 10px;">9.3. Contrôles et inspections</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'L\'entreprise procède à des inspections et à des contrôles des produits à leur arrivée, afin de vérifier la conformité des produits aux spécifications et normes applicables. Si des défauts ou non-conformités sont détectés, l\'entreprise notifie le fournisseur par écrit dans un délai de 2 jours à compter de la réception des produits.';
        $html .= '</div>';

        // Section 9.4
        $html .= '<div class="cga-section-title" style="margin-left: 10px;">9.4. Retrait et remplacement des produits non conformes</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'En cas de produits non conformes, l\'entreprise se réserve le droit de demander au fournisseur de :';
        $html .= '<div class="cga-list">';
        $html .= '• Retirer les produits non conformes et les remplacer par des produits conformes aux spécifications, à ses frais et dans les plus brefs délais,<br>';
        $html .= '• Réaliser une réduction de prix proportionnelle à la non-conformité,<br>';
        $html .= '• Annuler la commande et exiger un remboursement intégral, en fonction de la gravité de la non-conformité.';
        $html .= '</div>';
        $html .= 'Les frais associés au remplacement des produits (transport, gestion des retours, tests supplémentaires, etc.) seront à la charge du fournisseur.';
        $html .= '</div>';

        $html .= '</td>';
        
        // RIGHT COLUMN - PAGE 2
        $html .= '<td class="cga-column">';

        // Section 10
        $html .= '<div class="cga-section-title">10. Documentation et traçabilité</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur doit garantir la traçabilité des produits, depuis leur origine jusqu\'à leur livraison. Toutes les étapes de production, de transport et de stockage doivent être documentées et disponibles pour contrôle en cas de besoin.';
        $html .= '</div>';
        
        // Section 11
        $html .= '<div class="cga-section-title">11. Durabilité et responsabilité sociétale</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Le fournisseur doit respecter les principes du développement durable et s\'efforcer d\'optimiser l\'impact environnemental des produits fournis. L\'entreprise privilégie les fournisseurs qui démontrent un engagement en matière de responsabilité sociétale et de pratiques éthiques.';
        $html .= '</div>';

        // Section 12
        $html .= '<div class="cga-section-title">12. Résiliation</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'En cas de non-respect des présentes conditions ou des engagements qualité, SOGAP se réserve le droit de résilier la relation fournisseur à tout moment, sans indemnité.';
        $html .= '</div>';

        // Section 13
        $html .= '<div class="cga-section-title">13. Acceptation des Conditions</div>';
        $html .= '<div class="cga-section-content">';
        $html .= 'Toute commande implique l\'acceptation sans réserve des présentes Conditions Générales d\'Achat.';
        $html .= '</div>';

        $html .= '</td>';
        $html .= '</tr>';
        $html .= '</table>';

        return $html;
    }
}