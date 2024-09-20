<?php
/* Smarty version 4.2.0, created on 2023-12-25 17:07:20
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\InventorySummary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6589a8b82be9c0_60007929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb3827ae2a64e9e2be561503995c490281005018' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\InventorySummary.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6589a8b82be9c0_60007929 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-InventorySummary --><div class="row"><?php if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[1]['discount'])) && (isset($_smarty_tpl->tpl_vars['FIELDS']->value[0]['discountmode']))) {
$_smarty_tpl->_assignInScope('DISCOUNT', $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getField('discount')->getSummaryValuesFromData($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value));?><div class="col-md-4"><table class="table table-bordered inventorySummaryContainer"><thead><tr><th><img src="<?php echo \App\Layout::getImagePath('Discount24.png');?>
"alt="<?php echo \App\Language::translate('LBL_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" />&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_DISCOUNTS_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></th></tr></thead><tbody><tr><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['DISCOUNT']->value,true,$_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['currency_symbol']);?>
</td></tr></tbody></table></div><?php }
if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[1]['tax'])) && (isset($_smarty_tpl->tpl_vars['FIELDS']->value[0]['taxmode'])) && $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('net')) {
$_smarty_tpl->_assignInScope('TAX_FIELD', $_smarty_tpl->tpl_vars['FIELDS']->value[1]['tax']);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value, 'INVENTORY_ROW', false, 'KEY');
$_smarty_tpl->tpl_vars['INVENTORY_ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value) {
$_smarty_tpl->tpl_vars['INVENTORY_ROW']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['TAXS']->value)) && (isset($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['taxparam']))) {
$_smarty_tpl->_assignInScope('TAXS', $_smarty_tpl->tpl_vars['TAX_FIELD']->value->getTaxParam($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['taxparam'],$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['net'],$_smarty_tpl->tpl_vars['TAXS']->value));
} elseif ((isset($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['taxparam']))) {
$_smarty_tpl->_assignInScope('TAXS', $_smarty_tpl->tpl_vars['TAX_FIELD']->value->getTaxParam($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['taxparam'],$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['net'],array()));
} else {
$_smarty_tpl->_assignInScope('TAXS', array());
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="col-md-4"><table class="table table-bordered inventorySummaryContainer"><thead><tr><th colspan="2"><img src="<?php echo \App\Layout::getImagePath('Tax24.png');?>
"alt="<?php echo \App\Language::translate('LBL_TAX',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" />&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_TAX_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></th></tr></thead><tbody><?php $_smarty_tpl->_assignInScope('TAX_AMOUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAXS']->value, 'TAX', false, 'KEY');
$_smarty_tpl->tpl_vars['TAX']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['TAX']->value) {
$_smarty_tpl->tpl_vars['TAX']->do_else = false;
$_smarty_tpl->_assignInScope('TAX_AMOUNT', $_smarty_tpl->tpl_vars['TAX_AMOUNT']->value+$_smarty_tpl->tpl_vars['TAX']->value);?><tr><td class="textAlignRight" width='70px'><?php echo App\Fields\Double::formatToDisplay($_smarty_tpl->tpl_vars['KEY']->value);?>
%</td><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['TAX']->value,true,$_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['currency_symbol']);?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><tr><td class="textAlignRight" width='70px'><?php echo \App\Language::translate('LBL_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['TAX_AMOUNT']->value,true,$_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['currency_symbol']);?>
</td></tr></tbody></table></div><?php if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[0]['currency'])) && $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['id'] != $_smarty_tpl->tpl_vars['CURRENCY']->value) {
$_smarty_tpl->_assignInScope('CURRENCY_PARAM', json_decode($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['currencyparam'],true));
$_smarty_tpl->_assignInScope('RATE', $_smarty_tpl->tpl_vars['CURRENCY_PARAM']->value[$_smarty_tpl->tpl_vars['CURRENCY']->value]['value']);?><div class="col-md-4"><table class="table table-bordered inventorySummaryContainer"><thead><tr><th colspan="2"><strong><?php echo \App\Language::translate('LBL_CURRENCIES_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></th></tr></thead><tbody><?php $_smarty_tpl->_assignInScope('CURRENY_AMOUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAXS']->value, 'TAX', false, 'KEY');
$_smarty_tpl->tpl_vars['TAX']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['TAX']->value) {
$_smarty_tpl->tpl_vars['TAX']->do_else = false;
$_smarty_tpl->_assignInScope('CURRENY_AMOUNT', $_smarty_tpl->tpl_vars['CURRENY_AMOUNT']->value+$_smarty_tpl->tpl_vars['TAX']->value);?><tr><td class="textAlignRight" width='70px'><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['KEY']->value);?>
%</td><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['TAX']->value*$_smarty_tpl->tpl_vars['RATE']->value,true,$_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol']);?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><tr><td class="textAlignRight" width='70px'><?php echo \App\Language::translate('LBL_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['CURRENY_AMOUNT']->value*$_smarty_tpl->tpl_vars['RATE']->value,true,$_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol']);?>
</td></tr></tbody></table></div><?php }
}?></div><!-- /tpl-Base-Detail-InventorySummary -->
<?php }
}
