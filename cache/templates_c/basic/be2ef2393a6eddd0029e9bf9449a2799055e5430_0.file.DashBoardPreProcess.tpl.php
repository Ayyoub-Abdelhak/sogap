<?php
/* Smarty version 4.2.0, created on 2023-12-19 15:11:14
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\dashboards\DashBoardPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581a482464a43_57878909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be2ef2393a6eddd0029e9bf9449a2799055e5430' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardPreProcess.tpl',
      1 => 1702905746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581a482464a43_57878909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PageHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class="mainContainer"><div class="contentsDiv u-ml-0px u-mr-0px" id="centerPanel"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('dashboards/DashBoardHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DASHBOARDHEADER_TITLE'=>\App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0, true);
?><div class="dashboardViewContainer"><?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value) > 1) {?><ul class="nav nav-tabs massEditTabs selectDashboard m-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value, 'DASHBOARD');
$_smarty_tpl->tpl_vars['DASHBOARD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DASHBOARD']->value) {
$_smarty_tpl->tpl_vars['DASHBOARD']->do_else = false;
?><li class="nav-item" data-id="<?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id'];?>
"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['CURRENT_DASHBOARD']->value == $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id']) {?> active <?php }?>"  href="#" data-toggle="tab"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DASHBOARD']->value['name']);?>
</strong></a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}
}
