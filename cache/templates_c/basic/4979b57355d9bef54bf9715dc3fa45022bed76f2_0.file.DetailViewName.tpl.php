<?php
/* Smarty version 4.2.0, created on 2023-12-25 17:07:20
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\DetailViewName.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6589a8b80adf19_99325416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4979b57355d9bef54bf9715dc3fa45022bed76f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\DetailViewName.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6589a8b80adf19_99325416 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-DetailViewName --><strong><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value);?>
</strong><?php if ((isset($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getFieldsByType('Comment'), 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD']->value->isVisibleInDetail() && $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['FIELD']->value->getColumnName()]) {?><br /><label class="u-text-small-bold mt-2"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['FIELD']->value->getColumnName()]);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="js-subproducts-container" data-js="append"><ul class="float-left mb-0"></ul></div><?php }?><!-- /tpl-Base-inventoryfields-DetailViewName -->
<?php }
}
