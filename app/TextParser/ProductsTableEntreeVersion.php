<?php

namespace App\TextParser;

/**
 * Products table short version class.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 */
class ProductsTableEntreeVersion extends Base
{
	/** @var string Class name */
	public $name = 'LBL_PRODUCTS_TABLE_SHORT_VERSION';

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
		if (!$this->textParser->recordModel->getModule()->isInventory()) {
			return $html;
		}
		$inventory = \Vtiger_Inventory_Model::getInstance($this->textParser->moduleName);
		$inventoryRows = $this->textParser->recordModel->getInventoryData();

		$headerStyle = 'font-size:9px;padding:0px 4px;text-align:center;background-color:#ddd;';
		$bodyStyle = 'font-size:8px;border:1px solid #ddd;padding:0px 4px;';

		$html .= '<table class="products-table-entree-version" style="width:100%;font-size:8px;border-collapse:collapse;">
			<thead>
				<tr>
					<th style="' . $headerStyle . '">CodeP/M</th>
					<th style="' . $headerStyle . '">Libellé</th>
					<th style="' . $headerStyle . '">Type</th>
					<th style="' . $headerStyle . '">Fournisseur</th>
					<th style="' . $headerStyle . '">Etat</th>
					<th style="' . $headerStyle . '">Affectation</th>
				</tr>
			</thead>';

		if (!empty($inventoryRows)) {
			$html .= '<tbody>';
			foreach ($inventoryRows as $inventoryRow) {
				$productId = $inventoryRow['name'];
				if (empty($productId)) {
					continue;
				}

				$productRecord = \Vtiger_Record_Model::getInstanceById($productId, 'Products');
				if (!$productRecord) {
					continue;
				}

				// Fetch product details
				$productNo = $productRecord->get('product_no');
				$productName = $productRecord->get('productname');
				$productType = $productRecord->get('type');
				$etat = $productRecord->get('etatmateriel');

				// Fetch vendor name
				$vendorName = '';
				if ($vendorId = $productRecord->get('vendor_id')) {
					$vendorRecord = \Vtiger_Record_Model::getInstanceById($vendorId, 'Vendors');
					if ($vendorRecord) {
						$vendorName = $vendorRecord->get('vendorname');
					}
				}

				// Fetch project name for Affectation
				$projectName = '';
				if ($projectId = $productRecord->get('affectation')) {
					$projectRecord = \Vtiger_Record_Model::getInstanceById($projectId, 'Project');
					if ($projectRecord) {
						$projectName = $projectRecord->get('projectname');
					}
				}

				$html .= '<tr>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productNo) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productName) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productType) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($vendorName) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($etat) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($projectName) . '</td>
				</tr>';
			}
			$html .= '</tbody>';
		}

		$html .= '</table>';

		return $html;
	}
}