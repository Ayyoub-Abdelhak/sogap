<?php
/* Smarty version 4.2.0, created on 2023-12-25 17:07:19
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\DetailViewBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6589a8b7f3d403_82424806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f0112ed7d544f72db098954de908f1dccd4e759' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\DetailViewBase.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6589a8b7f3d403_82424806 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-DetailViewBase --><?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value,$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value);?>
<!-- /tpl-Base-inventoryfields-DetailViewBase -->
<?php }
}
