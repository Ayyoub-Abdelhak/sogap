<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewTax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf66ef5695_89537489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '286eed5b31af6ef20958574a705f5ddddd76ccf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewTax.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf66ef5695_89537489 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewTax --><?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));?><div class="input-group input-group-sm"><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" type="text"class="tax form-control form-control-sm js-tax" readonly="readonly" data-js="data-default-tax|value" /><?php if ($_smarty_tpl->tpl_vars['TAXS_CONFIG']->value['taxs'][0] != '') {
if (empty($_smarty_tpl->tpl_vars['ITEM_DATA']->value['taxparam'])) {
$_smarty_tpl->_assignInScope('TAXPARAM_VALUE', '');
} else {
$_smarty_tpl->_assignInScope('TAXPARAM_VALUE', $_smarty_tpl->tpl_vars['ITEM_DATA']->value['taxparam']);
}
if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value['taxmode']))) {
$_smarty_tpl->_assignInScope('TAX_MODE', $_smarty_tpl->tpl_vars['ITEM_DATA']->value['taxmode']);
} else {
$_smarty_tpl->_assignInScope('TAX_MODE', $_smarty_tpl->tpl_vars['TAXS_CONFIG']->value['default_mode']);
}?><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][taxparam]" type="hidden" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TAXPARAM_VALUE']->value);?>
"class="taxParam" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?> /><span class="input-group-append u-cursor-pointer changeTax <?php if ($_smarty_tpl->tpl_vars['TAX_MODE']->value == 0) {?>d-none<?php }?>"><div class="input-group-text"><span class="small"><span class="fas fa-long-arrow-alt-up"></span><span class="fas fa-percent"></span></span></div></span><?php }?></div><!-- /tpl-Base-inventoryfields-EditViewTax -->
<?php }
}
