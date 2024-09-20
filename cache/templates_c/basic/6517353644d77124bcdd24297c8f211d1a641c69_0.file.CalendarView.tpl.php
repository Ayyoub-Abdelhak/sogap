<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:41:04
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Calendar\CalendarView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659539c0a2d8d7_53125770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6517353644d77124bcdd24297c8f211d1a641c69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Calendar\\CalendarView.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659539c0a2d8d7_53125770 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Calendar-CalendarView --><input value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CURRENT_USER']->value->getDetail('activity_view'));?>
" type="hidden" id="activity_view" /><input value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->getDetail('date_format');?>
" type="hidden" id="date_format" /><input value="current" type="hidden" id="showType" /><input value="workDays" type="hidden" id="switchingDays" /><input value="<?php echo $_smarty_tpl->tpl_vars['EVENT_CREATE']->value;?>
" type="hidden" id="eventCreate" /><input value="<?php echo $_smarty_tpl->tpl_vars['EVENT_EDIT']->value;?>
" type="hidden" id="eventEdit" /><input value="<?php echo $_smarty_tpl->tpl_vars['WEEK_COUNT']->value;?>
" type="hidden" id="weekCount" /><input value="<?php echo $_smarty_tpl->tpl_vars['WEEK_VIEW']->value;?>
" type="hidden" id="weekView" /><input value="<?php echo $_smarty_tpl->tpl_vars['DAY_VIEW']->value;?>
" type="hidden" id="dayView" /><input value="<?php echo $_smarty_tpl->tpl_vars['ALL_DAY_SLOT']->value;?>
" type="hidden" id="allDaySlot" /><input value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(\App\Config::module('Calendar','HIDDEN_DAYS_IN_CALENDAR_VIEW')));?>
"type="hidden" id="hiddenDays" /><input value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value));?>
" type="hidden" id="historyParams" /><input value="<?php echo \App\Purifier::encodeHtml(\App\Config::module('Calendar','SHOW_EDIT_FORM'));?>
" type="hidden" id="showEditForm" /><div class="calendarViewContainer rowContent js-css-element-queries js-calendar-container" data-js="css-element-queries|container"><div class="o-calendar__container mt-2" data-js="offset"><div class="d-none js-calendar__header-buttons"><div class="js-calendar__view-btn mb-1 mb-sm-0 mr-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'],'CLASS'=>'listViewMassActions u-remove-dropdown-icon','BTN_CLASS'=>'btn-light o-calendar__view-btn d-flex align-items-center'), 0, true);
?></div><div class="o-calendar__filter js-calendar__filter-container" data-js="clone container"><?php if (count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value) > 0) {?><ul class="nav nav-pills u-w-fit js-calendar__extended-filter-tab" data-js="change" role="tablist"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value, 'GROUP_CUSTOM_VIEWS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value) {
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value, 'CUSTOM_VIEW');
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value) {
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = false;
if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isFeatured()) {?><li class="nav-item js-filter-tab c-tab--small font-weight-bold" data-cvid="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
" data-js="click"><a class="nav-link<?php ob_start();
echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();
$_prefixVariable1 = ob_get_clean();
if (!empty($_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value['cvid']) && $_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value['cvid'] == $_prefixVariable1) {?> active show<?php }?>"href="#"<?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('color')) {?>style="color: <?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('color');?>
;" <?php }?>data-toggle="tab" role="tab"aria-selected="<?php ob_start();
echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();
$_prefixVariable2 = ob_get_clean();
if (!empty($_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value['cvid']) && $_smarty_tpl->tpl_vars['HISTORY_PARAMS']->value['cvid'] == $_prefixVariable2) {?>true<?php } else { ?>false<?php }?>"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('description')) {?><span class="js-popover-tooltip ml-1" data-toggle="popover" data-placement="top" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('description'));?>
" data-js="popover"><span class="fas fa-info-circle"></span></span><?php }?></a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?><a class="o-calendar__clear-btn btn btn-warning d-none ml-1 js-calendar__clear-filters js-popover-tooltip" role="button" data-content="<?php echo \App\Language::translate("LBL_REMOVE_FILTERING",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"data-js="class: d-none | popover"><span class="fas fa-eraser" title="<?php echo \App\Language::translate("LBL_REMOVE_FILTERING",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a></div></div><div class="js-calendar__container" data-js="fullcalendar | offset"></div></div></div><!-- /tpl-Base-Calendar-CalendarView -->
<?php }
}
