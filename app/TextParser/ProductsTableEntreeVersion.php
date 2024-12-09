<?php

namespace App\TextParser;

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

		// Updated styling with a border around the entire table
		$headerStyle = 'font-size:9px;border:1px solid black;border-bottom:0px;padding:0px 4px;text-align:center;background-color:#D9E1F2;';
		$bodyStyle = 'font-size:8px;border-left-color:#000000;border-left-style:solid;border-left-width:1px;border-right-color:#000000;border-right-style:solid;border-right-width:1px;border-bottom-style:solid;border-bottom-width:1px;padding:0px 4px;padding:0px 4px;vertical-align: top;';

		// We'll aim for 25 total lines (products + empty lines)
		$lines = 20;

		$html .= '<table class="products-table-entree-version" style="width:100%;font-size:8px;border-collapse:collapse;border:1px solid #000000;">
			<thead>
				<tr>
					<th style="' . $headerStyle . '">CodeP/M</th>
					<th style="' . $headerStyle . '">Libellé</th>
					<th style="' . $headerStyle . '">Type</th>
					<th style="' . $headerStyle . '">Fournisseur</th>
					<th style="' . $headerStyle . '">Etat</th>
					<th style="' . $headerStyle . '">Affectation</th>
				</tr>
			</thead>
			<tbody>';

		if (!empty($inventoryRows)) {
			foreach ($inventoryRows as $inventoryRow) {
				if ($lines <= 0) {
					break; // no more lines if we already exceeded desired count
				}

				$productId = $inventoryRow['name'];
				if (empty($productId)) {
					continue;
				}

				$productRecord = \Vtiger_Record_Model::getInstanceById($productId, 'Products');
				if (!$productRecord) {
					continue;
				}

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

				$html .= '<tr class="row">
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productNo) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productName) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productType) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($vendorName) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($etat) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($projectName) . '</td>
				</tr>';

				$lines--; // Decrement the lines count after each product row
			}
		}

		// If there are lines left, we add empty rows
		if ($lines > 0) {
			// Construct the empty line template
			$emptyTr = '<tr class="row">';
			for ($col = 0; $col < 6; $col++) {
				$emptyTr .= "<td style=\"{$bodyStyle}\">&nbsp;&nbsp;&nbsp;</td>";
			}
			$emptyTr .= '</tr>';

			// Add empty lines until we have reached total desired lines
			for ($i = 0; $i < $lines; $i++) {
				$html .= $emptyTr;
			}
		}

		$html .= '</tbody></table>';

		return $html;
	}
}