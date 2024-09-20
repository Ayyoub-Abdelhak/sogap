<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:42:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\OSSTimeControl\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953a07166033_66862633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd05c54fd63683c62be33e6e166c0067a5a9b687' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\OSSTimeControl\\EditView.tpl',
      1 => 1702905754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953a07166033_66862633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewBlocks.tpl','OSSTimeControl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
