<?php

namespace App\TextParser;

/**
 * Products table short version class.
 *
 * @package TextParser
 *
 * @copyright YetiForce S.A.
 * @license   YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Arkadiusz Sołek <a.solek@yetiforce.com>
 */
class ProductsTableDevisVersion extends Base
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
		$firstRow = current($inventoryRows);
		$baseCurrency = \Vtiger_Util_Helper::getBaseCurrency();
		if ($inventory->isField('currency')) {
			if (!empty($firstRow) && null !== $firstRow['currency']) {
				$currency = $firstRow['currency'];
			} else {
				$currency = $baseCurrency['id'];
			}
			$currencySymbol = \App\Fields\Currency::getById($currency)['currency_symbol'];
		} else {
			$currencySymbol = \App\Fields\Currency::getDefault()['currency_symbol'];
		}
		$headerStyle = 'font-size:9px;border:1px solid black;border-bottom:0px;padding:0px 4px;text-align:center;background-color:#D9E1F2;';
		$bodyStyle = 'font-size:8px;border-left-color:#000000;border-left-style:solid;border-left-width:1px;border-right-color:#000000;border-right-style:solid;border-right-width:1px;padding:0px 4px;vertical-align: top;';
		$html .= '<table class="products-table-long-version" style="width:100%;font-size:8px;border-collapse:collapse;">
				<thead>
					<tr>';
		$groupModels = [];
		$emptyTr = '<tr class="row">';
		$lines = 15;

		$ht = 0;
		$tax = 0;
		$ttc = 0;
		$discount = 0;
		foreach (['TotalPrice', 'Tax', 'GrossPrice', 'Discount'] as $fieldType) {
			foreach ($inventory->getFieldsByType($fieldType) as $fieldModel) {
				foreach ($inventoryRows as $inventoryRow) {
					if ('TotalPrice' === $fieldModel->getType()) {
						$ht += $inventoryRow[$fieldModel->getColumnName()];
					}
					if ('Tax' === $fieldModel->getType()) {
						$tax += $inventoryRow[$fieldModel->getColumnName()];
					}
					if ('GrossPrice' === $fieldModel->getType()) {
						$ttc += $inventoryRow[$fieldModel->getColumnName()];
					}
					if ('Discount' === $fieldModel->getType()) {
						$discount += $inventoryRow[$fieldModel->getColumnName()];
					}
				}
			}
		}

		$fieldTypes = ['Name', 'Value', 'Quantity', 'UnitPrice', 'TotalPrice'];
		if ($discount > 0) {
			$fieldTypes[] = 'Discount';
		}
		foreach ($fieldTypes as $fieldType) {
			foreach ($inventory->getFieldsByType($fieldType) as $fieldModel) {
				$columnName = $fieldModel->getColumnName();
				$typeName = $fieldModel->getType();
				$headerName = \App\Language::translate($fieldModel->get('label'), $this->textParser->moduleName);
				if ($typeName == 'Name')
					$headerName = 'Désignation';
				if ($typeName == 'Value')
					$headerName = 'Un.';
				if ($typeName == 'UnitPrice')
					$headerName = 'Prix U. HT';
				if ($typeName == 'TotalPrice')
					$headerName = 'Prix Total HT';
				if (!$fieldModel->isVisible()) {
					continue;
				}
				$html .= "<th style=\"{$headerStyle}\">" . $headerName . '</th>';
				$emptyTr .= "<td style=\"{$bodyStyle}\">&nbsp;&nbsp;&nbsp;</td>";
				$groupModels[$columnName] = $fieldModel;
			}
		}
		$html .= '</tr></thead>';
		if (!empty($groupModels)) {
			$html .= '<tbody>';
			$counter = 0;
			foreach ($inventoryRows as $inventoryRow) {
				++$counter;

				$displayType = $inventoryRow['picklist1'];
				$displayStyle = '';
				if ($displayType == 'T') {
					$displayStyle = 'font-weight:bold;font-size:8.5px;';
				} elseif ($displayType == 'ST') {
					$displayStyle = 'font-weight:bold;';
				} else {
					$displayStyle = 'font-weight:normal;';
				}

				$html .= '<tr class="row-' . $counter . '">';
				foreach ($groupModels as $fieldModel) {
					$columnName = $fieldModel->getColumnName();
					$typeName = $fieldModel->getType();
					$fieldStyle = $bodyStyle;
					if ('ItemNumber' === $typeName) {
						$html .= "<td style=\"{$bodyStyle}font-weight:bold;\">" . $counter++ . '</td>';
					} elseif ('ean' === $columnName) {
						$code = $inventoryRow[$columnName];
						$html .= "<td class=\"col-type-barcode\" style=\"{$fieldStyle}font-weight:bold;text-align:center;\"><div data-barcode=\"EAN13\" data-code=\"{$code}\" data-size=\"1\" data-height=\"16\">{$code}</div></td>";
					} else {
						$itemValue = $inventoryRow[$columnName];
						if ('Name' === $typeName) {
							$fieldStyle = $bodyStyle . 'width: 300px !important;' . $displayStyle;
							if ($discount > 0) {
								$fieldStyle = $bodyStyle . 'width: 250px !important;' . $displayStyle;
							}
							$fieldValue = $fieldModel->getDisplayValue($itemValue, $inventoryRow, true) === 'Produit non trouvé' ? '' : $fieldModel->getDisplayValue($itemValue, $inventoryRow, true);
							$lines--;
							foreach ($inventory->getFieldsByType('Comment') as $commentField) {
								if ($commentField->isVisible() && ($value = $inventoryRow[$commentField->getColumnName()]) && $comment = $commentField->getDisplayValue($value, $inventoryRow, true)) {
									$fieldValue .= '<br />' . $comment;
									$lines--;
								}
							}
						} elseif (\in_array($typeName, ['GrossPrice', 'UnitPrice', 'TotalPrice', 'Discount']) && !empty($currencySymbol)) {
							$fieldValue = \CurrencyField::appendCurrencySymbol($fieldModel->getDisplayValue($itemValue, $inventoryRow), $currencySymbol);
							$fieldStyle = $bodyStyle . 'text-align:left;white-space: nowrap;';
						} else {
							$fieldValue = $fieldModel->getDisplayValue($itemValue, $inventoryRow, true);
						}
						$fieldValue = in_array($fieldValue, ['0', '0.00 DH', '0 DH', 'nan']) ? '' : $fieldValue;
						$fieldValue = str_replace("DH", "", $fieldValue);
						$html .= "<td class=\"col-type-{$typeName}\" style=\"{$fieldStyle}\">" . $fieldValue . '</td>';
					}
				}
				$html .= '</tr>';
			}
			for ($i = 0; $i < $lines; $i++) {
				$html .= $emptyTr;
			}
			$html .= '</tbody><tfoot><tr>';

			foreach ($groupModels as $fieldModel) {
				$headerStyle = 'border:1px solid black;border-top:0px;border-bottom:0px;padding:0px;';
				$html .= "<th style=\"{$headerStyle}\">";
				$html .= '</th>';
			}
			$html .= '</tr></tfoot></table>';

			$html .= '
			<div style="padding: 0px 0px 0px 221px">
				<table style="width:100%;font-size:8px;margin-top:15px;border:1px solid black;font-weight:bold;">
					<tr>
						<td style="width:75%;text-align:center;border-right-style:solid;border-right-width:1px;border-bottom-style:solid;border-bottom-width:1px;">
							TOTAL HT
						</td>
						<td style="width: 25%;text-align:center;border-bottom-style:solid;border-bottom-width:1px;">' . \CurrencyField::convertToUserFormat($ht, null, true) . '</td>
					</tr>';
			if ($tax > 0) {
				$html .= '
				<tr>
					<td style="width:75%;text-align:center;border-right-style:solid;border-right-width:1px;border-bottom-style:solid;border-bottom-width:1px;">
						TVA 20%
					</td>
					<td style="width: 25%;text-align:center;border-bottom-style:solid;border-bottom-width:1px;">' . \CurrencyField::convertToUserFormat($tax, null, true) . '</td>
				</tr>';
			}
			if ($discount > 0) {
				$html .= '
				<tr>
					<td style="width:75%;text-align:center;border-right-style:solid;border-right-width:1px;border-bottom-style:solid;border-bottom-width:1px;">
						Remise
					</td>
					<td style="width: 25%;text-align:center;border-bottom-style:solid;border-bottom-width:1px;">' . \CurrencyField::convertToUserFormat($discount, null, true) . '</td>
				</tr>';
			}
			$html .= '
					<tr>
						<td style="width:75%;text-align:center;border-right-style:solid;border-right-width:1px;">
							TOTAL TTC
						</td>
						<td style="width: 25%;text-align:center;">' . \CurrencyField::convertToUserFormat($ttc, null, true) . '</td>
					</tr>
				</table>
			</div>';

			$currency = \Vtiger_Util_Helper::is_decimal($ttc) ? '' : ' DIRHAMS';
			$html .= '<div style="font-size:9px;margin-top:20px;"><b>ARRÊTÉ LE PRÉSENT DEVIS À LA SOMME DE : ' . \Vtiger_Util_Helper::int2str($ttc) . $currency . ' TTC</b></div>';
			if ($this->textParser->recordModel->get('validite') != '') {
				$html .= '<div style="font-size:8px;margin-top:20px;"><b>Validité de l\'offre : ' . $this->textParser->recordModel->get('validite') . '</b></div>';
			}
		}
		return $html;
	}
}
