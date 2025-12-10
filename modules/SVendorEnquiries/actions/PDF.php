<?php

/**
 * SVendorEnquiries PDF Action file - Auto-merge CGA template.
 *
 * @package Action
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom
 */

/**
 * SVendorEnquiries PDF Action class.
 */
class SVendorEnquiries_PDF_Action extends Vtiger_PDF_Action
{
	/**
	 * Main template ID (with watermark).
	 */
	const MAIN_TEMPLATE_ID = 38;

	/**
	 * CGA template ID (without watermark).
	 */
	const CGA_TEMPLATE_ID = 55;

	/**
	 * {@inheritdoc}
	 */
	public function generate(App\Request $request): void
	{
		// Get the requested template IDs
		$templateIds = $request->getArray('pdf_template', 'Integer');

		// If template 38 is requested, automatically add template 55
		if (in_array(self::MAIN_TEMPLATE_ID, $templateIds) && !in_array(self::CGA_TEMPLATE_ID, $templateIds)) {
			$templateIds[] = self::CGA_TEMPLATE_ID;
			$request->set('pdf_template', $templateIds);

			// Force merge mode if not already set
			if (!$request->has('single_pdf')) {
				$request->set('single_pdf', 1);
			}

			\App\Log::warning('SVendorEnquiries PDF: Automatically added CGA template (55) to merge with main template (38)');
		}

		// Call parent generate method
		parent::generate($request);
	}
}
