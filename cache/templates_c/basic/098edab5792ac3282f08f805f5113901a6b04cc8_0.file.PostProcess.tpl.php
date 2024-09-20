<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:41:04
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Calendar\PostProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659539c0bc05f5_23814776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '098edab5792ac3282f08f805f5113901a6b04cc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Calendar\\PostProcess.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659539c0bc05f5_23814776 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Calendar-PostProcess --><div class="js-calendar-right-panel <?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide')) {?>leftPanelOpen <?php }?>siteBarRight calendarRightPanel col-xs-12 hideSiteBar"data-showPanel="<?php if (!App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'SHOW_RIGHT_PANEL')) {?>0<?php } else { ?>1<?php }?>"data-js="class: hideSiteBar"><?php $_smarty_tpl->_assignInScope('DEFAULT_FILTER', current($_smarty_tpl->tpl_vars['FILTERS']->value));?><div class="o-calendar__panel__tabs"><div class="btn btn-block js-toggle-site-bar-right-button toggleSiteBarRightButton hideToggleSiteBarRightButton d-none d-lg-block" title="<?php echo \App\Language::translate('LBL_RIGHT_PANEL_SHOW_HIDE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="click"><span class="fas fa-chevron-left"></span></div><ul class="nav nav-pills js-show-sitebar<?php if (count($_smarty_tpl->tpl_vars['FILTERS']->value) != 2) {?> d-none<?php }?>" id="rightPanelTab" role="tablist" data-js="click"><?php if (in_array('Events',$_smarty_tpl->tpl_vars['FILTERS']->value)) {?><li class="nav-item" role="tab"><a class="nav-link js-right-panel-event-link<?php if ($_smarty_tpl->tpl_vars['DEFAULT_FILTER']->value == "Events") {?> active show<?php }?>" id="rightPanelEvent-tab" data-toggle="tab"href="#rightPanelEvent" role="tab"aria-controls="event"aria-selected="true" data-js="trigger"><?php echo \App\Language::translate('LBL_EVENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php }
if (in_array('Filter',$_smarty_tpl->tpl_vars['FILTERS']->value)) {?><li class="nav-item"><a class="nav-link<?php if ($_smarty_tpl->tpl_vars['DEFAULT_FILTER']->value != 'Events') {?> active show<?php }?>" id="rightPanelFilter-tab" data-toggle="tab" href="#rightPanelFilter" role="tab"aria-controls="filter" aria-selected="false"><?php echo \App\Language::translate('LBL_FILTER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php }?></ul></div><div class="tab-content u-overflow-y-auto" id="rightPanelTabContent"><?php if (in_array('Events',$_smarty_tpl->tpl_vars['FILTERS']->value)) {?><div class="tab-pane fade js-right-panel-event<?php if ($_smarty_tpl->tpl_vars['DEFAULT_FILTER']->value == 'Events') {?> active show<?php }?>" id="rightPanelEvent" role="tabpanel" aria-labelledby="rightPanelEvent-tab" data-js="class: active"><div class="js-qc-form qc-form px-1"></div></div><?php }
if (in_array('Filter',$_smarty_tpl->tpl_vars['FILTERS']->value)) {?><div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['DEFAULT_FILTER']->value != "Events") {?> active show<?php }?>" id="rightPanelFilter" role="tabpanel" aria-labelledby="rightPanelFilter-tab"><div class="o-calendar__tab--filters js-calendar__tab--filters d-flex flex-column"><div><?php if (\App\Config::module('Calendar','HIDDEN_DAYS_IN_CALENDAR_VIEW')) {
$_smarty_tpl->_assignInScope('HIDDEN_DAYS', $_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value == '' || !(isset($_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value['hiddenDays'])) || !empty($_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value['hiddenDays']));?><div class="btn-group btn-group-toggle js-switch js-switch--switchingDays c-calendar-switch" data-toggle="buttons"><label class="btn btn-outline-primary c-calendar-switch__button js-switch--label-on<?php if ($_smarty_tpl->tpl_vars['HIDDEN_DAYS']->value) {?> active<?php }?>"><input type="radio" name="options" data-on-text="<?php echo \App\Language::translate('LBL_WORK_DAYS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" id="option1" autocomplete="off" data-val="workDays" <?php if ($_smarty_tpl->tpl_vars['HIDDEN_DAYS']->value) {?> checked<?php }?>><?php echo \App\Language::translate('LBL_WORK_DAYS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><label class="btn btn-outline-primary c-calendar-switch__button js-switch--label-off<?php if (!$_smarty_tpl->tpl_vars['HIDDEN_DAYS']->value) {?> active<?php }?>"><input type="radio" name="options" id="option2" data-off-text="<?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" autocomplete="off" data-val="all" <?php if (!$_smarty_tpl->tpl_vars['HIDDEN_DAYS']->value) {?> checked<?php }?>><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><?php }
if (!empty($_smarty_tpl->tpl_vars['SHOW_TYPE']->value)) {
$_smarty_tpl->_assignInScope('IS_TIME_CURRENT', empty($_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value['time']) || $_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value['time'] == 'current');?><div class="btn-group btn-group-toggle js-switch js-switch--showType c-calendar-switch" data-toggle="buttons"><label class="btn btn-outline-primary c-calendar-switch__button js-switch--label-on<?php if ($_smarty_tpl->tpl_vars['IS_TIME_CURRENT']->value) {?> active<?php }?>"><input type="radio" name="options1" data-on-text="<?php echo \App\Language::translate('LBL_FILTER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" autocomplete="off" data-val="current" <?php if ($_smarty_tpl->tpl_vars['IS_TIME_CURRENT']->value) {?> checked<?php }?>><?php echo \App\Language::translate('LBL_TO_REALIZE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><label class="btn btn-outline-primary c-calendar-switch__button js-switch--label-off<?php if (!$_smarty_tpl->tpl_vars['IS_TIME_CURRENT']->value) {?> active<?php }?>"><input type="radio" name="options1" data-off-text="<?php echo \App\Language::translate('LBL_HISTORY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" autocomplete="off" data-val="history" <?php if (!$_smarty_tpl->tpl_vars['IS_TIME_CURRENT']->value) {?> checked<?php }?>><?php echo \App\Language::translate('LBL_HISTORY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><?php }?></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'SIDEBARWIDGET', false, 'index');
$_smarty_tpl->tpl_vars['SIDEBARWIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value) {
$_smarty_tpl->tpl_vars['SIDEBARWIDGET']->do_else = false;
?><div class="js-sidebar-filter-container position-relative mt-1 mb-1 <?php echo $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->get('linkclass');?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->get('template'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FILTER_DATA'=>$_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->get('filterData'),'HISTORY_USERS'=>$_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->get('historyUsers')), 0, true);
?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div></div><!-- /tpl-Base-Calendar-PostProcess -->
<?php }
}
