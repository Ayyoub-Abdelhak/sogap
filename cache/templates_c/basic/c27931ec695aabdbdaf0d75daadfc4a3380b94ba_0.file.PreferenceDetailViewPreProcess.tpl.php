<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:08
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\PreferenceDetailViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b0ee5a57_44818804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c27931ec695aabdbdaf0d75daadfc4a3380b94ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\PreferenceDetailViewPreProcess.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b0ee5a57_44818804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PreferenceDetailViewHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
