<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewMarginP.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf66d9f6a3_83306575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85d30b649889661e5ef59f7dcc699bde685c2262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewMarginP.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf66d9f6a3_83306575 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewMarginP --><?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));?><div class="input-group input-group-sm"><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" type="text" class="marginp form-control form-control-sm" readonly="readonly" /><div class="input-group-append"><span class="input-group-text">%</span></div></div><!-- /tpl-Base-inventoryfields-EditViewMarginP -->
<?php }
}
