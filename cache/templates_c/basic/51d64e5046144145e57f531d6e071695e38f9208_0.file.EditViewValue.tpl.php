<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewValue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf66416c98_23661512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d64e5046144145e57f531d6e071695e38f9208' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewValue.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf66416c98_23661512 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewValue --><?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
$_smarty_tpl->_assignInScope('INPUT_TYPE', 'text');
if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly() || $_smarty_tpl->tpl_vars['FIELD']->value->getMapDetail($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value)) {
$_smarty_tpl->_assignInScope('INPUT_TYPE', 'hidden');?><span class="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
Text valueText"><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['VALUE']->value,$_smarty_tpl->tpl_vars['ITEM_DATA']->value);?>
</span><?php }?><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" type="<?php echo $_smarty_tpl->tpl_vars['INPUT_TYPE']->value;?>
" class="form-control form-control-sm <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
 valueVal" data-validation-engine="validate[maxSize[<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getRangeValues();?>
]]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?> /><!-- /tpl-Base-inventoryfields-EditViewValue -->
<?php }
}
