<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:29
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\FullContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658191598c5a68_03478813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f6f033859b747320a0716c2d1dd0662dacd02ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\FullContents.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658191598c5a68_03478813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'DetailTop'), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/BlocksView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
if ($_smarty_tpl->tpl_vars['MODULE_TYPE']->value == '1') {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/InventoryView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'DetailBottom'), 0, true);
}
}
