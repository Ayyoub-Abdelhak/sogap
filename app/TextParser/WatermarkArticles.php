<?php

namespace App\TextParser;

/**
 * Watermark for Articles Pages class.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Custom
 */
class WatermarkArticles extends Base
{
    /** @var string Class name */
    public $name = 'LBL_WATERMARK_ARTICLES';

    /** @var mixed Parser type */
    public $type = 'pdf';

    /**
     * Process.
     *
     * @return string
     */
    public function process()
    {
        // Return watermark using only supported CSS
        // Using background-image on a div or direct image placement
        $html = '<div style="text-align:center; margin-top:-700px; margin-bottom:650px;">';
        $html .= '<img src="storage/Pdf/watermark/55.watermark_image" style="width:400px; height:auto; max-width:60%;" />';
        $html .= '</div>';

        return $html;
    }
}
