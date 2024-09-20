<?php
/* Smarty version 4.2.0, created on 2023-12-28 21:10:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\DetailViewItemNumber.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658dd64213b584_57321577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d8c216349136d3ce5e31aaf1d0fb3b815a22947' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\DetailViewItemNumber.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658dd64213b584_57321577 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['ROW_NO']->value))) {
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;
} else {
echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;
}
}
}
