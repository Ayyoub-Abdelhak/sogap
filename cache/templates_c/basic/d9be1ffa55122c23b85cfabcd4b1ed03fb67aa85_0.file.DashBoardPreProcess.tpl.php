<?php
/* Smarty version 4.2.0, created on 2023-12-18 14:57:14
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Home\dashboards\DashBoardPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65804fba288824_01850029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9be1ffa55122c23b85cfabcd4b1ed03fb67aa85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Home\\dashboards\\DashBoardPreProcess.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65804fba288824_01850029 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Home-dashboards-DashBoardPreProcess --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer"><div class="contentsDiv mx-md-0 dashboardContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DASHBOARDHEADER_TITLE'=>\App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0, true);
?><div class="dashboardViewContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardPreProcessAjax.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Home-dashboards-DashBoardPreProcess -->
<?php }
}
