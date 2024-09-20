<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:49:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Workflows\ScheduleBox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d483ab632a29_20495606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '654182102d590fe3af0e898c5b3df2286a4f0198' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Workflows\\ScheduleBox.tpl',
      1 => 1702905760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d483ab632a29_20495606 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Workflows-ScheduleBox --><div id="scheduleBox" class="well u-timetable js-wf-execution-item <?php if ($_smarty_tpl->tpl_vars['EXECUTION_CONDITION']->value != 6) {?> d-none <?php }?>"><div class="form-row"><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_RUN_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid)) {
$_smarty_tpl->_assignInScope('SCHTYPE_ID', $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtypeid);
}?><div class="col-md-6 d-flex align-items-center"><select class="select2 form-control" id="schtypeid" name="schtypeid"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Workflow::$SCHEDULED_LIST, 'LABEL', false, 'ID');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) && ($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value == $_smarty_tpl->tpl_vars['ID']->value)) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-row <?php if (empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) || $_smarty_tpl->tpl_vars['SCHTYPE_ID']->value != 3) {?> d-none <?php }?>"id="scheduledWeekDay"><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center"><?php if (!empty($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schdayofweek)) {
$_smarty_tpl->_assignInScope('SCHDAY_OF_WEEK', $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schdayofweek);
$_smarty_tpl->_assignInScope('DAY_OF_WEEK', \App\Json::decode($_smarty_tpl->tpl_vars['SCHDAY_OF_WEEK']->value));
}?><select multiple class="select2 col-md-6" data-validation-engine="validate[rquired,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="schdayofweek" id="schdayofweek"><option value="7" <?php if (!empty($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && (is_array($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && in_array('7',$_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value))) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY0','Calendar');?>
</option><option value="1" <?php if (!empty($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && (is_array($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && in_array('1',$_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value))) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY1','Calendar');?>
</option><option value="2" <?php if (!empty($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && (is_array($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && in_array('2',$_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value))) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY2','Calendar');?>
</option><option value="3" <?php if (!empty($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && (is_array($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && in_array('3',$_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value))) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY3','Calendar');?>
</option><option value="4" <?php if (!empty($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && (is_array($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && in_array('4',$_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value))) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY4','Calendar');?>
</option><option value="5" <?php if (!empty($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && (is_array($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && in_array('5',$_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value))) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY5','Calendar');?>
</option><option value="6" <?php if (!empty($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && (is_array($_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value) && in_array('6',$_smarty_tpl->tpl_vars['DAY_OF_WEEK']->value))) {?> selected <?php }?>><?php echo \App\Language::translate('LBL_DAY6','Calendar');?>
</option></select></div></div><div class="form-row <?php if (empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) || $_smarty_tpl->tpl_vars['SCHTYPE_ID']->value != 5) {?> d-none <?php }?>"id="scheduleMonthByDates"><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_ON_THESE_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center"><select multiple class="select2" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name='schdayofmonth' id='schdayofmonth'><?php if (!empty($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schdayofmonth)) {
$_smarty_tpl->_assignInScope('SCHDAY_OF_MONTH', $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schdayofmonth);
}
if (!empty($_smarty_tpl->tpl_vars['SCHDAY_OF_MONTH']->value)) {
$_smarty_tpl->_assignInScope('DAYS', \App\Json::decode($_smarty_tpl->tpl_vars['SCHDAY_OF_MONTH']->value));
}
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if (true) {
for ($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] <= 31; $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?><option value=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null);?>
 <?php if (!empty($_smarty_tpl->tpl_vars['DAYS']->value) && is_array($_smarty_tpl->tpl_vars['DAYS']->value) && in_array((isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null),$_smarty_tpl->tpl_vars['DAYS']->value)) {?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['iteration'] : null);?>
</option><?php
}
}
?></select></div></div><div class='form-row <?php if (empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) || $_smarty_tpl->tpl_vars['SCHTYPE_ID']->value != 4) {?> d-none <?php }?>'id='scheduleByDate'><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_CHOOSE_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center"><div class="date w-100"><div class="input-group dateTime"><?php $_smarty_tpl->_assignInScope('SCHANNUAL_DATES', '');
if (!empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) && $_smarty_tpl->tpl_vars['SCHTYPE_ID']->value == 4 && !empty($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schannualdates)) {
$_smarty_tpl->_assignInScope('SCHANNUAL_DATES', \App\Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schannualdates));
$_smarty_tpl->_assignInScope('SCHANNUAL_DATES', \App\Purifier::encodeHtml(implode(',',array_map('App\Fields\DateTime::formatToDisplay',$_smarty_tpl->tpl_vars['SCHANNUAL_DATES']->value))));
}?><input type="text" class="dateTimePickerField form-control datepicker" name="schdate" value="<?php if (!empty($_smarty_tpl->tpl_vars['SCHANNUAL_DATES']->value)) {
echo $_smarty_tpl->tpl_vars['SCHANNUAL_DATES']->value;
}?>"data-date-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format');?>
"data-validation-engine="validate[ required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /><div class=" input-group-append"><span class="input-group-text u-cursor-pointer js-date__btn" data-js="click"><span class="fas fa-calendar-alt"></span> &nbsp; <span class="far fa-clock"></span></span></div></div></div></div></div><div class='form-row <?php if (empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) || $_smarty_tpl->tpl_vars['SCHTYPE_ID']->value != 6) {?> d-none <?php }?>'id='scheduleMonthByWeekDays'></div><div class="form-row my-1 <?php if (empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) || $_smarty_tpl->tpl_vars['SCHTYPE_ID']->value != 7) {?> d-none <?php }?>" id='scheduleAnually'><div class="col-md-2"><?php echo \App\Language::translate('LBL_SELECTED_DATES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="input-group col-md-10 date"><?php $_smarty_tpl->_assignInScope('SCHANNUAL_DATES', '');
if (!empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) && $_smarty_tpl->tpl_vars['SCHTYPE_ID']->value == 7 && !empty($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schannualdates)) {
$_smarty_tpl->_assignInScope('SCHANNUAL_DATES', \App\Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schannualdates));
$_smarty_tpl->_assignInScope('SCHANNUAL_DATES', \App\Purifier::encodeHtml(implode(',',array_map('App\Fields\Date::formatToDisplay',$_smarty_tpl->tpl_vars['SCHANNUAL_DATES']->value))));
}?><textarea class="dateField datepicker form-control" id="annualDates" name="schannualdates" readonly="readonly" data-date="<?php if (!empty($_smarty_tpl->tpl_vars['SCHANNUAL_DATES']->value)) {
echo $_smarty_tpl->tpl_vars['SCHANNUAL_DATES']->value;
}?>"><?php if (!empty($_smarty_tpl->tpl_vars['SCHANNUAL_DATES']->value)) {
echo $_smarty_tpl->tpl_vars['SCHANNUAL_DATES']->value;
}?></textarea><div class="input-group-append"><span class="input-group-text u-cursor-pointer js-date__btn" data-js="click"><span class="fas fa-calendar-alt"></span></span></div></div></div><div class="form-row pt-1 pb-2 px-0 <?php if (empty($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value) || !in_array($_smarty_tpl->tpl_vars['SCHTYPE_ID']->value,array(2,11,12,13))) {?> d-none <?php }?>"id="scheduledTime"><div class="col-md-2 d-flex align-items-center"><?php echo \App\Language::translate('LBL_AT_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-6 d-flex align-items-center" id="schtime"><div class="input-group time"><?php if (!empty($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtime)) {
$_smarty_tpl->_assignInScope('SCHTIME', \App\Fields\Time::formatToDisplay($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->schtime));
}?><input type="text" class="clockPicker form-control" data-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('hour_format');?>
"name="schtime" value="<?php if (!empty($_smarty_tpl->tpl_vars['SCHTIME']->value)) {
echo $_smarty_tpl->tpl_vars['SCHTIME']->value;
}?>"autocomplete="off" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /><div class="input-group-append"><span class="input-group-text u-cursor-pointer js-clock__btn" data-js="click"><span class="far fa-clock"></span></span></div></div></div></div><div class="mb-2 mt-2 js-wf-execution-item" data-js="container"><div class="form-check"><input type="hidden" name="params[iterationOff]" value="0"><input class="form-check-input" type="checkbox" value="1" id="iterationOff" name="params[iterationOff]" <?php if (!empty($_smarty_tpl->tpl_vars['PARAMS']->value['iterationOff'])) {?> checked="checked" <?php }?>><label class="form-check-label ml-1" for="iterationOff"><?php echo \App\Language::translate('LBL_WORKFLOW_TRIGGER_RECORD_RESTRICTION_OFF',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><?php if (!empty($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->nexttrigger_time)) {?><hr class="mt-2"><div class="form-row"><div class="col-md-2 d-flex align-items-center"><span><?php echo \App\Language::translate('LBL_NEXT_TRIGGER_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-md-6 d-flex align-items-center"><?php echo \App\Fields\DateTime::formatToDisplay($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->nexttrigger_time);?>
<span>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->time_zone;?>
)</span></div></div><?php }?></div><!-- /tpl-Settings-Workflows-ScheduleBox -->
<?php }
}
