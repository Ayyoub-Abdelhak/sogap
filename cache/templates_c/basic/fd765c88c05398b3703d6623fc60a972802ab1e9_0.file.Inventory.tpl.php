<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Inventory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf64dc0f05_40464960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd765c88c05398b3703d6623fc60a972802ab1e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Inventory.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf64dc0f05_40464960 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Inventory --><?php $_smarty_tpl->_assignInScope('INVENTORY_MODEL', Vtiger_Inventory_Model::getInstance($_smarty_tpl->tpl_vars['MODULE_NAME']->value));
if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('name')) {
$_smarty_tpl->_assignInScope('FIELDS', $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getFieldsByBlocks());
$_smarty_tpl->_assignInScope('BASIC_FIELD', $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getField('name'));
$_smarty_tpl->_assignInScope('DISCOUNTS_CONFIG', Vtiger_Inventory_Model::getDiscountsConfig());
$_smarty_tpl->_assignInScope('TAXS_CONFIG', Vtiger_Inventory_Model::getTaxesConfig());
$_smarty_tpl->_assignInScope('TAX_DEFAULT', Vtiger_Inventory_Model::getDefaultGlobalTax());
$_smarty_tpl->_assignInScope('BASE_CURRENCY', Vtiger_Util_Helper::getBaseCurrency());
$_smarty_tpl->_assignInScope('INVENTORY_ROWS', $_smarty_tpl->tpl_vars['RECORD']->value->getInventoryData());
$_smarty_tpl->_assignInScope('DEFAULT_INVENTORY_ROW', \App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'defaultInventoryData',array()));
if ($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value) {
$_smarty_tpl->_assignInScope('INVENTORY_ROW', current($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value));
} else {
$_smarty_tpl->_assignInScope('INVENTORY_ROW', array());
}
$_smarty_tpl->_assignInScope('MAIN_PARAMS', $_smarty_tpl->tpl_vars['BASIC_FIELD']->value->getParamsConfig());
$_smarty_tpl->_assignInScope('IS_REQUIRED_INVENTORY', $_smarty_tpl->tpl_vars['BASIC_FIELD']->value->isRequired());
$_smarty_tpl->_assignInScope('COUNT_FIELDS1', count($_smarty_tpl->tpl_vars['FIELDS']->value[1]));
$_smarty_tpl->_assignInScope('COUNT_FIELDS2', 0);
$_smarty_tpl->_assignInScope('REFERENCE_MODULE_DEFAULT', '');
$_smarty_tpl->_assignInScope('IS_VISIBLE_COMMENTS', false);
$_smarty_tpl->_assignInScope('IS_OPENED_COMMENTS', false);
if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[2]))) {
$_smarty_tpl->_assignInScope('COUNT_FIELDS2', count($_smarty_tpl->tpl_vars['FIELDS']->value[2]));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[2], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD']->value->getColumnName() == 'comment1') {
if ($_smarty_tpl->tpl_vars['FIELD']->value->isVisible()) {
$_smarty_tpl->_assignInScope('IS_VISIBLE_COMMENTS', true);
}
if ($_smarty_tpl->tpl_vars['FIELD']->value->isOpened()) {
$_smarty_tpl->_assignInScope('IS_OPENED_COMMENTS', true);
}
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('currency')) {
if ($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value && !empty($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['currency'])) {
$_smarty_tpl->_assignInScope('CURRENCY', $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['currency']);
} else {
$_smarty_tpl->_assignInScope('CURRENCY', $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['id']);
}
$_smarty_tpl->_assignInScope('CURRENCY_SYMBOLAND', \App\Fields\Currency::getById($_smarty_tpl->tpl_vars['CURRENCY']->value));
}
$_smarty_tpl->_assignInScope('INVENTORY_ITEMS_NO', count($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value));
$_smarty_tpl->_assignInScope('RELATED_FIELD', \App\Field::getRelatedFieldForModule($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'Accounts'));?><input type="hidden" class="js-discount-config" value="<?php echo App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['DISCOUNTS_CONFIG']->value));?>
"><input type="hidden" class="js-tax-config" value="<?php echo App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['TAXS_CONFIG']->value));?>
"><input type="hidden" id="inventoryItemsNo" value="<?php if ($_smarty_tpl->tpl_vars['INVENTORY_ITEMS_NO']->value) {
echo $_smarty_tpl->tpl_vars['INVENTORY_ITEMS_NO']->value;
} else { ?>1<?php }?>" /><input type="hidden" id="accountReferenceField" value="<?php if ($_smarty_tpl->tpl_vars['RELATED_FIELD']->value) {
echo $_smarty_tpl->tpl_vars['RELATED_FIELD']->value['fieldname'];
}?>" /><input type="hidden" id="inventoryLimit" value="<?php echo $_smarty_tpl->tpl_vars['MAIN_PARAMS']->value['limit'];?>
" /><input type="hidden" id="isRequiredInventory" value="<?php echo $_smarty_tpl->tpl_vars['IS_REQUIRED_INVENTORY']->value;?>
" /><div class="table-responsive"><table class="table inventoryHeader blockContainer mb-0 table-bordered"><colgroup><col class="w-25"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><col class="w-25"><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></colgroup><thead><tr data-rownumber="0" class="u-min-w-650pxr"><th class="border-bottom-0"><span class="inventoryLineItemHeader"><?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>&nbsp;&nbsp;<div class="d-flex"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAIN_PARAMS']->value['modules'], 'MAIN_MODULE', false, NULL, 'moduleList', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['MAIN_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MAIN_MODULE']->value) {
$_smarty_tpl->tpl_vars['MAIN_MODULE']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_moduleList']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_moduleList']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_moduleList']->value['index'];
if (\App\Module::isModuleActive($_smarty_tpl->tpl_vars['MAIN_MODULE']->value)) {
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_moduleList']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_moduleList']->value['first'] : null)) {
$_smarty_tpl->_assignInScope('REFERENCE_MODULE_DEFAULT', $_smarty_tpl->tpl_vars['MAIN_MODULE']->value);
}?><div class="btn-group btn-group-sm d-flex align-items-center justify-content-center <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_moduleList']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_moduleList']->value['first'] : null)) {?>ml-lg-1<?php }?>" role="group"><button type="button" data-module="<?php echo $_smarty_tpl->tpl_vars['MAIN_MODULE']->value;?>
"title="<?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['MAIN_MODULE']->value),$_smarty_tpl->tpl_vars['MAIN_MODULE']->value);?>
"class="btn btn-light js-inv-add-item border mb-1 mb-lg-0 text-nowrap" data-js="click"><span class="moduleIcon yfm-<?php echo $_smarty_tpl->tpl_vars['MAIN_MODULE']->value;?>
 mr-1"></span><strong><?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['MAIN_MODULE']->value),$_smarty_tpl->tpl_vars['MAIN_MODULE']->value);?>
</strong></button><?php $_smarty_tpl->_assignInScope('MASS_ADD_URL', $_smarty_tpl->tpl_vars['BASIC_FIELD']->value->getUrlForMassSelection($_smarty_tpl->tpl_vars['MAIN_MODULE']->value));
if ($_smarty_tpl->tpl_vars['MASS_ADD_URL']->value) {?><button type="button" data-module="<?php echo $_smarty_tpl->tpl_vars['MAIN_MODULE']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['MASS_ADD_URL']->value;?>
"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MAIN_MODULE']->value,$_smarty_tpl->tpl_vars['MAIN_MODULE']->value);?>
"data-content="<?php echo \App\Language::translate('LBL_MASS_ADD_ENTIRIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"class="btn btn-light js-mass-add border mb-1 mb-lg-0 mr-2 u-cursor-pointer js-popover-tooltip" data-js="popover" data-js="click"><span class="fas fa-search-plus"></span></button><?php }?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></th><?php $_smarty_tpl->_assignInScope('ROW_NO', 0);
if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[0]))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[0], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><th class="<?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?> d-none <?php }?> border-bottom-0"><span class="inventoryLineItemHeader"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['FIELD']->value->getModuleName());?>
</span>&nbsp;&nbsp;<?php $_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('EditView',$_smarty_tpl->tpl_vars['MODULE_NAME']->value)));
$_smarty_tpl->_assignInScope('COLUMN_NAME', $_smarty_tpl->tpl_vars['FIELD']->value->get('columnName'));
if ((isset($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]))) {
$_smarty_tpl->_assignInScope('ITEM_VALUE', $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]);
} elseif ((isset($_smarty_tpl->tpl_vars['DEFAULT_INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]))) {
$_smarty_tpl->_assignInScope('ITEM_VALUE', $_smarty_tpl->tpl_vars['DEFAULT_INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]);
} else {
$_smarty_tpl->_assignInScope('ITEM_VALUE', NULL);
}?><div class="input-group-sm"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_DATA'=>$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value), 0, true);
?></div></th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></tr></thead></table></div><div class="table-responsive"><table class="table table-bordered inventoryItems mb-2"><?php if (count($_smarty_tpl->tpl_vars['FIELDS']->value[1]) != 0) {?><thead><tr><th class="text-center u-w-1per-45px"></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><th <?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?>colspan="0" <?php }?>class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getType();
if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?> d-none<?php }?> u-table-column__before-block u-table-column__before-block--inventory<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('colSpan') != 0) {?> u-table-column__vw-<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->get('colSpan');
}?> text-center text-nowrap"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['FIELD']->value->getModuleName());?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><?php }?><tbody class="js-inventory-items-body" data-js="container"><?php $_smarty_tpl->_assignInScope('ROW_NO', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value, 'ITEM_DATA', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM_DATA']->value) {
$_smarty_tpl->tpl_vars['ITEM_DATA']->do_else = false;
$_smarty_tpl->_assignInScope('ROW_NO', $_smarty_tpl->tpl_vars['ROW_NO']->value+1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/InventoryItem.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if ($_smarty_tpl->tpl_vars['ITEM_DATA']->do_else) {
if ($_smarty_tpl->tpl_vars['IS_REQUIRED_INVENTORY']->value) {
$_smarty_tpl->_assignInScope('ROW_NO', 1);
$_smarty_tpl->_assignInScope('ITEM_DATA', $_smarty_tpl->tpl_vars['RECORD']->value->getInventoryDefaultDataFields());
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/InventoryItem.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody><tfoot><tr><td colspan="1" class="hideTd u-w-1per-45px">&nbsp;&nbsp;</td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><td <?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?>colspan="0" <?php }?>class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getType();
if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?> d-none<?php }?> text-right text-nowrap<?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {?> hideTd<?php } else { ?> wisableTd<?php }?>"data-sumfield="<?php echo lcfirst($_smarty_tpl->tpl_vars['FIELD']->value->getType());?>
"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {
$_smarty_tpl->_assignInScope('SUM', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value, 'ITEM_VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM_VALUE']->value) {
$_smarty_tpl->tpl_vars['ITEM_VALUE']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['ITEM_VALUE']->value[$_smarty_tpl->tpl_vars['FIELD']->value->get('columnName')]))) {
$_smarty_tpl->_assignInScope('SUM', ($_smarty_tpl->tpl_vars['SUM']->value+$_smarty_tpl->tpl_vars['ITEM_VALUE']->value[$_smarty_tpl->tpl_vars['FIELD']->value->get('columnName')]));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['SUM']->value,null,true);
}
if ($_smarty_tpl->tpl_vars['FIELD']->value->getType() == 'Name' && $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('price')) {
echo \App\Language::translate('LBL_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></tfoot></table></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/InventorySummary.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_assignInScope('ITEM_DATA', $_smarty_tpl->tpl_vars['RECORD']->value->getInventoryDefaultDataFields());?><table id="blackIthemTable" class="noValidate d-none"><?php $_smarty_tpl->_assignInScope('INVENTORY_LBLS', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAIN_PARAMS']->value['modules'], 'MAIN_MODULE');
$_smarty_tpl->tpl_vars['MAIN_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MAIN_MODULE']->value) {
$_smarty_tpl->tpl_vars['MAIN_MODULE']->do_else = false;
$_tmp_array = isset($_smarty_tpl->tpl_vars['INVENTORY_LBLS']) ? $_smarty_tpl->tpl_vars['INVENTORY_LBLS']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['MAIN_MODULE']->value] = \App\Language::translateSingularModuleName($_smarty_tpl->tpl_vars['MAIN_MODULE']->value);
$_smarty_tpl->_assignInScope('INVENTORY_LBLS', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><tbody class="js-inventory-base-item" data-module-lbls="<?php echo App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['INVENTORY_LBLS']->value));?>
"><?php $_smarty_tpl->_assignInScope('ROW_NO', '_NUM_');
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/InventoryItem.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></tbody></table><?php }?><!-- /tpl-Base-Edit-Inventory -->
<?php }
}
