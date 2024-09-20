<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:17
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewDiscountMode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf6590d261_93404645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45adf9e997b926a6cdf7dd6efa75e04cdbbac8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewDiscountMode.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf6590d261_93404645 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewDiscountMode --><?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value === null) {
$_smarty_tpl->_assignInScope('ITEM_VALUE', $_smarty_tpl->tpl_vars['DISCOUNTS_CONFIG']->value['default_mode']);
}?><select <?php if ($_smarty_tpl->tpl_vars['ROW_NO']->value) {?> name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" <?php }?> class="select2 js-discountmode"title="<?php echo \App\Language::translate('LBL_DISCOUNT_MODE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?> data-js="change|val"><option value="0" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '0') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_GROUP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '1') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_INDIVIDUAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select><!-- /tpl-Base-inventoryfields-EditViewDiscountMode -->
<?php }
}
