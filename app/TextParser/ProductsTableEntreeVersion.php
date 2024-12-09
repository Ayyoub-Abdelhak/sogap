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
class ProductsTableEntreeVersion extends Base
{
	/** @var string Class name */
	public $name = 'LBL_PRODUCTS_TABLE_LONG_VERSION';

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
		$lines = 25;
		foreach (['ItemNumber', 'Name', 'Value', 'UnitPrice', 'Quantity', 'TotalPrice', 'Tax', 'GrossPrice'] as $fieldType) {
			foreach ($inventory->getFieldsByType($fieldType) as $fieldModel) {
				$columnName = $fieldModel->getColumnName();
				$typeName = $fieldModel->getType();
				$headerName = \App\Language::translate($fieldModel->get('label'), $this->textParser->moduleName);
				if ($typeName == 'Name')
					$headerName = 'Désignation';
				if ($typeName == 'Value')
					$headerName = 'Un.';
				if ($typeName == 'Quantity')
					$headerName = 'Qte';
				if ($typeName == 'UnitPrice')
					$headerName = 'Prix U.';
				if ($typeName == 'TotalPrice')
					$headerName = 'HT';
				if ($typeName == 'GrossPrice')
					$headerName = 'TTC';
				if (!$fieldModel->isVisible()) {
					continue;
				}
				$html .= "<th style=\"{$headerStyle}\">" . $headerName . '</th>';
				$emptyTr .= "<td style=\"{$bodyStyle}\">&nbsp;&nbsp;&nbsp;</td>";
				$groupModels[$columnName] = $fieldModel;
			}
		}
		$emptyTr .= "</tr>";
		$html .= '</tr></thead>';
		if (!empty($groupModels)) {
			$html .= '<tbody>';
			$counter = 0;
			foreach ($inventoryRows as $inventoryRow) {
				++$counter;
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
							$fieldStyle = $bodyStyle . 'text-align:left;width: 255px !important;';
							$fieldValue = $fieldModel->getDisplayValue($itemValue, $inventoryRow, true) === 'Produit non trouvé' ? '' : '<strong>' . $fieldModel->getDisplayValue($itemValue, $inventoryRow, true) . '</strong>';
							$lines--;
							foreach ($inventory->getFieldsByType('Comment') as $commentField) {
								if ($commentField->isVisible() && ($value = $inventoryRow[$commentField->getColumnName()]) && $comment = $commentField->getDisplayValue($value, $inventoryRow, true)) {
									$fieldValue .= '<br />' . $comment;
									$lines--;
								}
							}
						} elseif (\in_array($typeName, ['GrossPrice', 'UnitPrice', 'TotalPrice']) && !empty($currencySymbol)) {
							$fieldValue = \CurrencyField::appendCurrencySymbol($fieldModel->getDisplayValue($itemValue, $inventoryRow), $currencySymbol);
							$fieldStyle = $bodyStyle . 'text-align:right;white-space: nowrap;';
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
				$headerStyle = 'font-size:7px;border:1px solid black;border-top:0px;padding:0px 4px;text-align:center;background-color:#D9E1F2;';
				$html .= "<th class=\"col-type-{$typeName}\" style=\"{$headerStyle}\">";
				if ($fieldModel->isSummary()) {
					$sum = 0;
					foreach ($inventoryRows as $inventoryRow) {
						$sum += $inventoryRow[$fieldModel->getColumnName()];
					}
					$html .= str_replace("DH", "", \CurrencyField::appendCurrencySymbol(\CurrencyField::convertToUserFormat($sum, null, true), $currencySymbol));
				}
				$html .= '</th>';
			}
			$html .= '</tr></tfoot></table>';
		}
		return $html;
	}
}
