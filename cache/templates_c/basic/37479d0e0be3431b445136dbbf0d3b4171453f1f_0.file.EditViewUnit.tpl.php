<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:05:12
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewUnit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cfd8015892_60892199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37479d0e0be3431b445136dbbf0d3b4171453f1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewUnit.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cfd8015892_60892199 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewUnit --><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" type="hidden"class="form-control <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
 valueVal"value="<?php echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;?>
"readonly="readonly" /><span class="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
Text valueText"><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value,$_smarty_tpl->tpl_vars['ITEM_DATA']->value);?>
</span><!-- /tpl-Base-inventoryfields-EditViewUnit -->
<?php }
}
