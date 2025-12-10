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
	 * CGA PDF Template ID - Conditions Générales Achat template.
	 */
	public const CGA_TEMPLATE_ID = 55;

	/**
	 * PdfGenerateInit handler function - automatically add CGA template to merge.
	 *
	 * @param App\EventHandler $eventHandler
	 *
	 * @return void
	 */
	public function pdfGenerateInit(App\EventHandler $eventHandler)
	{
		// Only process if CGA template ID is configured
		if (null === self::CGA_TEMPLATE_ID) {
			\App\Log::warning('SVendorEnquiries Auto Merge CGA: CGA_TEMPLATE_ID not configured in handler');
			return;
		}

		// Get current templates from the event
		$templates = $eventHandler->getParam('templates');

		// Check if CGA template is already in the list
		if (!in_array(self::CGA_TEMPLATE_ID, $templates)) {
			// Add CGA template to the list
			$templates[] = self::CGA_TEMPLATE_ID;
			$eventHandler->addParams('templates', $templates);

			\App\Log::trace('SVendorEnquiries Auto Merge CGA: Added CGA template to PDF generation');
		}

		// Get the view instance to modify the request
		$viewInstance = $eventHandler->getParam('viewInstance');
		if ($viewInstance && method_exists($viewInstance, 'request')) {
			// Force single PDF mode to enable auto-merge
			// Note: This might not work depending on YetiForce version
			// The merge will happen automatically if multiple templates are selected
		}
	}
}
