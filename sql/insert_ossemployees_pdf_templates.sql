-- PDF templates for OSSEmployees HR documents (SOGAP)
-- TextParser classes: AttestationTravail, AttestationSalaire, CertificatTravail, DomiciliationSalaire

-- Set default gender for all existing employees
UPDATE vtiger_ossemployees SET gender = 'Homme' WHERE gender IS NULL OR gender = '';

INSERT INTO a_yf_pdf (
    generator, module_name, body_content, status,
    primary_name, secondary_name,
    meta_author, meta_keywords, meta_subject, meta_title,
    metatags_status, page_format, page_orientation,
    margin_chkbox, margin_top, margin_bottom, margin_left, margin_right,
    header_height, footer_height, language, filename,
    visibility, `default`, watermark_type, watermark_text, watermark_angle,
    watermark_image, template_members, one_pdf, type, styles
) VALUES
(
    'YetiForcePDF', 'OSSEmployees', '<div>$(custom : AttestationTravail)$</div>', 1,
    'Attestation de Travail', 'Attestation de Travail',
    '', '', '', '', 0, 'A4', 'PLL_PORTRAIT',
    1, 15, 15, 20, 20, 0, 0, 'fr-FR',
    'Attestation_Travail',
    'PLL_DETAILVIEW,PLL_LISTVIEW,PLL_RELATEDLISTVIEW', 0, 0, '', 0, '', '', NULL, 0, NULL
),
(
    'YetiForcePDF', 'OSSEmployees', '<div>$(custom : AttestationSalaire)$</div>', 1,
    'Attestation de Travail et de Salaire', 'Attestation de Travail et de Salaire',
    '', '', '', '', 0, 'A4', 'PLL_PORTRAIT',
    1, 15, 15, 20, 20, 0, 0, 'fr-FR',
    'Attestation_Salaire',
    'PLL_DETAILVIEW,PLL_LISTVIEW,PLL_RELATEDLISTVIEW', 0, 0, '', 0, '', '', NULL, 0, NULL
),
(
    'YetiForcePDF', 'OSSEmployees', '<div>$(custom : CertificatTravail)$</div>', 1,
    'Certificat de Travail', 'Certificat de Travail',
    '', '', '', '', 0, 'A4', 'PLL_PORTRAIT',
    1, 15, 15, 20, 20, 0, 0, 'fr-FR',
    'Certificat_Travail',
    'PLL_DETAILVIEW,PLL_LISTVIEW,PLL_RELATEDLISTVIEW', 0, 0, '', 0, '', '', NULL, 0, NULL
),
(
    'YetiForcePDF', 'OSSEmployees', '<div>$(custom : DomiciliationSalaire)$</div>', 1,
    'Domiciliation Salaire', 'Domiciliation Salaire',
    '', '', '', '', 0, 'A4', 'PLL_PORTRAIT',
    1, 15, 15, 20, 20, 0, 0, 'fr-FR',
    'Domiciliation_Salaire',
    'PLL_DETAILVIEW,PLL_LISTVIEW,PLL_RELATEDLISTVIEW', 0, 0, '', 0, '', '', NULL, 0, NULL
);
