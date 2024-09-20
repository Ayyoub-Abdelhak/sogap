<?php
/* Smarty version 4.2.0, created on 2024-05-23 13:09:36
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewTaxMode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_664f320011cd64_46773515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c252e81895dad43a21ce3453b8a5711e722dcd73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewTaxMode.tpl',
      1 => 1716466143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664f320011cd64_46773515 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewTaxMode --><?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value === null) {
$_smarty_tpl->_assignInScope('ITEM_VALUE', $_smarty_tpl->tpl_vars['TAXS_CONFIG']->value['default_mode']);
}?><select class="select2 js-taxmode" title="<?php echo \App\Language::translate('LBL_TAX_MODE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['ROW_NO']->value) {?> name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" <?php }
if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?> data-js="change|val"><option value="0" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '0') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_GROUP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['ITEM_VALUE']->value == '1') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_INDIVIDUAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select><!-- /tpl-Base-inventoryfields-EditViewTaxMode -->
<?php }
}
