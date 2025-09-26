<?php

namespace App\TextParser;

class ProductsTableSortieVersion extends Base
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
		$recordModel = $this->textParser->recordModel;
		$inventory = \Vtiger_Inventory_Model::getInstance($this->textParser->moduleName);
		$inventoryRows = $recordModel->getInventoryData();

		// Updated styling with a border around the entire table
		$headerStyle = 'font-size:9px;border:1px solid black;border-bottom:0px;padding:0px 4px;text-align:center;background-color:#D9E1F2;';
		$bodyStyle = 'font-size:8px;border-left-color:#000000;border-left-style:solid;border-left-width:1px;border-right-color:#000000;border-right-style:solid;border-right-width:1px;border-bottom-style:solid;border-bottom-width:1px;padding:0px 4px;vertical-align: top;';

		// We'll aim for 25 total lines (products + empty lines)
		$lines = 20;

		$html .= '<table class="products-table-entree-version" style="width:100%;font-size:8px;border-collapse:collapse;border:1px solid #000000;">
			<thead>
				<tr>
					<th style="' . $headerStyle . '">CodeP/M</th>
					<th style="' . $headerStyle . '">Libellé</th>
					<th style="' . $headerStyle . '">Quantité</th>
					<th style="' . $headerStyle . '">Type</th>
					<th style="' . $headerStyle . '">Fournisseur</th>
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
				// $etat = $productRecord->get('etatmateriel');

				// Fetch vendor name
				$vendorName = '';
				if ($vendorId = $productRecord->get('vendor_id')) {
					$vendorRecord = \Vtiger_Record_Model::getInstanceById($vendorId, 'Vendors');
					if ($vendorRecord) {
						$vendorName = $vendorRecord->get('vendorname');
					}
				}

				// Fetch storage name for Affectation
				$storageName = '';
				if ($storageId = $productRecord->get('affectation')) {
					$projectRecord = \Vtiger_Record_Model::getInstanceById($storageId, 'IStorages');
					if ($projectRecord) {
						$storageName = $projectRecord->get('subject');
					}
				}

				$html .= '<tr class="row">
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productNo) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productName) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars(intval($inventoryRow['qty'])) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($productType) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($vendorName) . '</td>
					<td style="' . $bodyStyle . 'text-align:left;">' . htmlspecialchars($storageName) . '</td>
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

		// Retrieve fields for the additional 3-block table
		$expName = $recordModel->get('nom_expediteur');
		$expLieu = $recordModel->get('lieu_expediteur');
		$transName = $recordModel->get('nom_transporteur');
		$transLieu = $recordModel->get('lieu_transporteur');
		$destName = $recordModel->get('nom_destinataire');
		$destLieu = $recordModel->get('lieu_destinataire');

		// Add the 3-column table at the end
		$html .= '<table style="width:100%;font-size:8px;border-collapse:collapse;margin-top:25px;">
			<tr style="background-color:#D9E1F2;">
				<td style="font-weight:bold;">Expediteur :</td>
				<td style="font-weight:bold;">Transporteur :</td>
				<td style="font-weight:bold;">Destinataire :</td>
			</tr>
			<tr>
				<td>' . htmlspecialchars($expName) . '</td>
				<td>' . htmlspecialchars($transName) . '</td>
				<td>' . htmlspecialchars($destName) . '</td>
			</tr>
			<tr>
				<td>Lieu: ' . htmlspecialchars($expLieu) . '</td>
				<td>Lieu: ' . htmlspecialchars($transLieu) . '</td>
				<td>Lieu: ' . htmlspecialchars($destLieu) . '</td>
			</tr>
		</table>';

		return $html;
	}
}