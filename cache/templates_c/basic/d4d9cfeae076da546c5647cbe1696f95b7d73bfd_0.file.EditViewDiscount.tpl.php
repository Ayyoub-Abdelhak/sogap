<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewDiscount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf66af66b8_98336587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d9cfeae076da546c5647cbe1696f95b7d73bfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewDiscount.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf66af66b8_98336587 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewDiscount --><?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));?><div><div class="input-group input-group-sm"><input type="text" name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" class="discount form-control form-control-sm" readonly="readonly" /><?php if ($_smarty_tpl->tpl_vars['DISCOUNTS_CONFIG']->value['discounts'][0] != '') {
if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value['discountmode']))) {
$_smarty_tpl->_assignInScope('DISCOUNT_MODE', $_smarty_tpl->tpl_vars['ITEM_DATA']->value['discountmode']);
} else {
$_smarty_tpl->_assignInScope('DISCOUNT_MODE', $_smarty_tpl->tpl_vars['DISCOUNTS_CONFIG']->value['default_mode']);
}?><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][discountparam]" type="hidden" value="<?php if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value['discountparam']))) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM_DATA']->value['discountparam']);
}?>" class="discountParam" /><span class="input-group-append u-cursor-pointer js-change-discount <?php if ($_smarty_tpl->tpl_vars['DISCOUNT_MODE']->value == 0) {?>d-none<?php }?>"><div class="input-group-text"><span class="small"><span class="fas fa-long-arrow-alt-down"></span><span class="fas fa-percent"></span></span></div></span><?php }?></div></div><!-- /tpl-Base-inventoryfields-EditViewDiscount -->
<?php }
}
