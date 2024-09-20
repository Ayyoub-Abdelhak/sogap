<?php
/* Smarty version 4.2.0, created on 2023-12-25 15:17:43
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\InventoryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65898f07019175_98341407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d884255c26ac5fba82f677d93c4c8525b332b3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\InventoryView.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65898f07019175_98341407 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-InventoryView --><?php $_smarty_tpl->_assignInScope('INVENTORY_MODEL', Vtiger_Inventory_Model::getInstance($_smarty_tpl->tpl_vars['MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('FIELDS', $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getFieldsForView($_smarty_tpl->tpl_vars['VIEW']->value));
$_smarty_tpl->_assignInScope('INVENTORY_ROWS', $_smarty_tpl->tpl_vars['RECORD']->value->getInventoryData());
if ($_smarty_tpl->tpl_vars['FIELDS']->value && $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('name') && $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value) {
$_smarty_tpl->_assignInScope('BASE_CURRENCY', Vtiger_Util_Helper::getBaseCurrency());
$_smarty_tpl->_assignInScope('MAIN_PARAMS', $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getField('name')->getParamsConfig());
$_smarty_tpl->_assignInScope('REFERENCE_MODULE_DEFAULT', '');
if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[0]))) {
$_smarty_tpl->_assignInScope('INVENTORY_ROW', current($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value));
if ((isset($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['currency']))) {
$_smarty_tpl->_assignInScope('CURRENCY', $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['currency']);
} else {
$_smarty_tpl->_assignInScope('CURRENCY', $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['id']);
}
$_smarty_tpl->_assignInScope('CURRENCY_SYMBOLAND', \App\Fields\Currency::getById($_smarty_tpl->tpl_vars['CURRENCY']->value));?><table class="table table-bordered blockContainer"><thead><tr><th style="width: 40%;"></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[0], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><th><span class="inventoryLineItemHeader"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span>&nbsp;<?php $_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('DetailView',$_smarty_tpl->tpl_vars['MODULE_NAME']->value)));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['FIELD']->value->getColumnName()],'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?></th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead></table><?php }
$_smarty_tpl->_assignInScope('FIELDS_TEXT_ALIGN_RIGHT', array('TotalPrice','Tax','MarginP','Margin','Purchase','Discount','NetPrice','GrossPrice','UnitPrice','Quantity','Unit','TaxPercent'));?><div class="table-responsive"><table class="table table-bordered"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><th class="textAlignCenter u-table-column__before-block u-table-column__before-block--inventory<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('colSpan') != 0) {?> u-table-column__vw-<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->get('colSpan');
}?>"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><tbody class="js-inventory-items-body" data-js="container"><?php $_smarty_tpl->_assignInScope('ROW_NO', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value, 'INVENTORY_ROW', false, 'KEY');
$_smarty_tpl->tpl_vars['INVENTORY_ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value) {
$_smarty_tpl->tpl_vars['INVENTORY_ROW']->do_else = false;
$_smarty_tpl->_assignInScope('ROW_NO', $_smarty_tpl->tpl_vars['ROW_NO']->value+1);
$_smarty_tpl->_assignInScope('ROW_MODULE', \App\Record::getType($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']));?><tr class="js-inventory-row" data-product-id="<?php echo $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name'];?>
" data-js="data-product-id"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><td <?php if (in_array($_smarty_tpl->tpl_vars['FIELD']->value->getType(),$_smarty_tpl->tpl_vars['FIELDS_TEXT_ALIGN_RIGHT']->value)) {?>class="textAlignRight text-nowrap" <?php }?>><?php $_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('DetailView',$_smarty_tpl->tpl_vars['MODULE_NAME']->value)));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['FIELD']->value->getColumnName()]), 0, true);
?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody><tfoot><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><th class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getType();?>
 textAlignCenter <?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {?>hideTd<?php }?>"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><td class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getType();?>
 textAlignRight text-nowrap <?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {?>hideTd<?php } else { ?>wisableTd<?php }?>"data-sumfield="<?php echo lcfirst($_smarty_tpl->tpl_vars['FIELD']->value->getType());?>
"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {
$_smarty_tpl->_assignInScope('SUM', $_smarty_tpl->tpl_vars['FIELD']->value->getSummaryValuesFromData($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value));
echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['SUM']->value,null,true);
}?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></tfoot></table></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/InventorySummary.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?><!-- /tpl-Base-Detail-InventoryView -->
<?php }
}
