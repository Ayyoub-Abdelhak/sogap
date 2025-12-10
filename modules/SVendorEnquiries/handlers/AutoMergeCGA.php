<?php

/**
 * Auto Merge CGA PDF Handler file.
 *
 * @package Handler
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom
 */

/**
 * Auto Merge CGA PDF Handler class.
 */
class SVendorEnquiries_AutoMergeCGA_Handler
{
	/**
	 * Main SVendorEnquiries template ID (with watermark).
	 */
	public const MAIN_TEMPLATE_ID = 38;

	/**
	 * CGA PDF Template ID - Conditions Générales Achat template (without watermark).
	 */
	public const CGA_TEMPLATE_ID = 55;

	/**
	 * PdfGenerateInit handler function - automatically add CGA template when main template is generated.
	 *
	 * @param App\EventHandler $eventHandler
	 *
	 * @return void
	 */
	public function pdfGenerateInit(App\EventHandler $eventHandler)
	{
		// Get current templates from the event
		$templates = $eventHandler->getParam('templates');

		// Check if the main template (38) is being generated
		if (in_array(self::MAIN_TEMPLATE_ID, $templates)) {
			// Check if CGA template is not already in the list
			if (!in_array(self::CGA_TEMPLATE_ID, $templates)) {
				// Add CGA template to the list
				$templates[] = self::CGA_TEMPLATE_ID;
				$eventHandler->addParams('templates', $templates);

				\App\Log::trace('SVendorEnquiries Auto Merge CGA: Added CGA template (55) to merge with main template (38)');
			}
		}
	}
}
