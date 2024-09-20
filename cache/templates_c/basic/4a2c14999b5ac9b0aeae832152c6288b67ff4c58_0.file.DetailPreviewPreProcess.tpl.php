<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:34:11
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\DetailPreviewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819bd3e115a4_76417139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2c14999b5ac9b0aeae832152c6288b67ff4c58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\DetailPreviewPreProcess.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819bd3e115a4_76417139 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer"><div class="contentsDiv"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
