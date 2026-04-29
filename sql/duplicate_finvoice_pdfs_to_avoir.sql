-- Duplicate active FInvoice PDF templates as FCorectingInvoice (avoir) templates.
-- Replaces FactureHeader → AvoirHeader and all ProductsTableFacture* → ProductsTableAvoir*.
-- Safe to run multiple times only if FCorectingInvoice templates don't already exist.

INSERT INTO a_yf_pdf (
  generator, module_name, header_content, body_content, footer_content,
  status, primary_name, secondary_name, meta_author, meta_keywords,
  metatags_status, meta_subject, meta_title, page_format, margin_chkbox,
  margin_top, margin_bottom, margin_left, margin_right, header_height,
  footer_height, page_orientation, language, filename, visibility,
  `default`, conditions, watermark_type, watermark_text, watermark_angle,
  watermark_image, template_members, one_pdf, type, styles
)
SELECT
  generator,
  'FCorectingInvoice',
  REPLACE(header_content, 'FactureHeader', 'AvoirHeader'),
  REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(
    body_content,
    'ProductsTableFactureGENAVersion', 'ProductsTableAvoirGENAVersion'),
    'ProductsTableFactureOCPVersion',  'ProductsTableAvoirOCPVersion'),
    'ProductsTableFactureMRVersion',   'ProductsTableAvoirMRVersion'),
    'ProductsTableFactureRGVersion',   'ProductsTableAvoirRGVersion'),
    'ProductsTableFactureVersion',     'ProductsTableAvoirVersion'),
  footer_content,
  status,
  REPLACE(primary_name, 'FInvoice', 'FCorectingInvoice'),
  secondary_name, meta_author, meta_keywords, metatags_status,
  meta_subject, meta_title, page_format, margin_chkbox,
  margin_top, margin_bottom, margin_left, margin_right,
  header_height, footer_height, page_orientation, language,
  REPLACE(filename, 'FInvoice', 'FCorectingInvoice'),
  visibility, `default`, conditions, watermark_type, watermark_text,
  watermark_angle, watermark_image, template_members, one_pdf, type, styles
FROM a_yf_pdf
WHERE module_name = 'FInvoice' AND status = 1;
