<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:27
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RelatedActivities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658191575e11a2_95630087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0761dddcd7b2c6f17c6c57daddd5d2133b31379a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RelatedActivities.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658191575e11a2_95630087 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="small"><input type="hidden" name="relatedModule" value="Calendar" /><?php $_smarty_tpl->_assignInScope('MODULE_NAME', "Calendar");
if (count($_smarty_tpl->tpl_vars['ACTIVITIES']->value) != '0') {
if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value == 1) {?><input type="hidden" class="totaltActivities" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('totalCount');?>
" /><input type="hidden" class="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" /><?php }?><input type="hidden" class="countActivities" value="<?php echo count($_smarty_tpl->tpl_vars['ACTIVITIES']->value);?>
" /><input type="hidden" class="currentPage" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" /><?php $_smarty_tpl->_assignInScope('SHOW_LINK_TO_CALENDAR', App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'SHOW_EDIT_FORM'));
$_smarty_tpl->_assignInScope('CURRENT_STATUSES', Calendar_Module_Model::getComponentActivityStateLabel('current'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIVITIES']->value, 'RECORD', false, 'KEY', 'activities', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->tpl_vars['RECORD']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['total'];
if ($_smarty_tpl->tpl_vars['PAGE_NUMBER']->value != 1 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['first'] : null)) {?><hr><?php }
$_smarty_tpl->_assignInScope('START_DATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('date_start'));
$_smarty_tpl->_assignInScope('START_TIME', $_smarty_tpl->tpl_vars['RECORD']->value->get('time_start'));
$_smarty_tpl->_assignInScope('END_DATE', $_smarty_tpl->tpl_vars['RECORD']->value->get('due_date'));
$_smarty_tpl->_assignInScope('END_TIME', $_smarty_tpl->tpl_vars['RECORD']->value->get('time_end'));
$_smarty_tpl->_assignInScope('SHAREDOWNER', \App\Fields\SharedOwner::getById($_smarty_tpl->tpl_vars['RECORD']->value->getId()));?><div class="activityEntries p-1"><input type="hidden" class="activityModule" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" class="activityId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="row"><span class="col-md-6"><strong title='<?php echo \App\Fields\DateTime::formatToDay(((string)$_smarty_tpl->tpl_vars['START_DATE']->value)." ".((string)$_smarty_tpl->tpl_vars['START_TIME']->value));?>
'><span class="far fa-clock fa-fw mr-1"></span><?php echo Vtiger_Util_Helper::formatDateIntoStrings($_smarty_tpl->tpl_vars['START_DATE']->value,$_smarty_tpl->tpl_vars['START_TIME']->value);?>
</strong></span><span class="col-md-6 rightText"><strong title='<?php echo \App\Fields\DateTime::formatToDay(((string)$_smarty_tpl->tpl_vars['END_DATE']->value)." ".((string)$_smarty_tpl->tpl_vars['END_TIME']->value));?>
'><span class="far fa-clock fa-fw mr-1"></span><?php echo Vtiger_Util_Helper::formatDateIntoStrings($_smarty_tpl->tpl_vars['END_DATE']->value,$_smarty_tpl->tpl_vars['END_TIME']->value);?>
</strong></span></div><div class="summaryViewEntries"><span class="mr-1"><?php $_smarty_tpl->_assignInScope('ACTIVITY_TYPE', $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype'));
if ($_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value == 'Task') {?><span class="far fa-check-square fa-fw"></span><?php } elseif ($_smarty_tpl->tpl_vars['ACTIVITY_TYPE']->value == 'Call') {?><span class="fas fa-phone fa-flip-horizontal fa-fw"></span><?php } else { ?><span class="fas fa-user fa-fw"></span><?php }?></span><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('activitytype');?>
&nbsp;-&nbsp;<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->isViewable()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject');?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject');
}?>&nbsp;<?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getEditViewUrl();?>
" class="fieldValue"><span class="yfi yfi-full-editing-view fa-fw js-detail-quick-edit" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->isViewable()) {?>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl();?>
" class="fieldValue"><span title="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"class="fas fa-th-list fa-fw js-detail-quick-edit"></span></a><?php }?></div><div class="row"><div class="activityStatus col-md-12"><input value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype'));?>
" type="hidden" class="activityType" /><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><div><strong><span class="fas fa-tags fa-fw mr-1"></span><span class="value"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('activitystatus');?>
</span></strong>&nbsp;&nbsp;<?php if (in_array($_smarty_tpl->tpl_vars['RECORD']->value->get('activitystatus'),$_smarty_tpl->tpl_vars['CURRENT_STATUSES']->value)) {
if ($_smarty_tpl->tpl_vars['SHOW_LINK_TO_CALENDAR']->value) {
$_smarty_tpl->_assignInScope('ACTIVITY_URL', "index.php?module=Calendar&view=QuickEditAjax&record=".((string)$_smarty_tpl->tpl_vars['RECORD']->value->getId()));?><span class="editDefaultStatus u-cursor-pointer float-right js-popover-tooltip showEdit" data-url="<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_URL']->value;?>
"data-content="<?php echo \App\Language::translate('LBL_EDIT_FROM_CALENDAR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="popover"><span class="far fa-calendar fa-fw"></span></span><?php } else { ?><span class="editDefaultStatus float-right u-cursor-pointer js-popover-tooltip delay0" data-js="popover" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getActivityStateModalUrl();?>
"data-content="<?php echo \App\Language::translate('LBL_SET_RECORD_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-check fa-fw"></span></span><?php }
}?></div><?php }?></div></div><div class="activityDescription"><div><span class="value mr-1"><span class="fas fa-align-justify fa-fw mr-1"></span><?php $_smarty_tpl->_assignInScope('IS_DESCRIPTION', $_smarty_tpl->tpl_vars['RECORD']->value->get('description') != '');?><span class="js-description-text" data-js="html"><?php if ($_smarty_tpl->tpl_vars['IS_DESCRIPTION']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('description',false,false,120);
}?></span><span class="js-no-description text-muted<?php if ($_smarty_tpl->tpl_vars['IS_DESCRIPTION']->value) {?> d-none<?php }?>" data-js="class: d-none"><?php echo \App\Language::translate('LBL_NO_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></span><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><span class="js-activity-buttons__container d-none" data-js="class: d-none"><button class="btn btn-sm btn-success js-save-description u-fs-95per my-1 mr-1 py-0 px-1" type="button" data-js="click"><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><button class="btn btn-sm btn-danger js-close-description u-fs-95per my-1 py-0 px-1" type="button" data-js="click"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></span><span class="editDescription u-cursor-pointer"><span class="yfi yfi-full-editing-view fa-fw" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></span><?php }
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('location')) {?><a target="_blank" rel="noreferrer noopener" href="https://www.google.com/maps/search/<?php echo urlencode($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('location'));?>
"class="float-right js-popover-tooltip delay0" data-js="popover"data-original-title="<?php echo \App\Language::translate('Location','Calendar');?>
"data-content="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('location');?>
"><span class="fas fa-map-marker-alt fa-fw"></span>&nbsp</a><?php }?><span class="float-right js-popover-tooltip delay0" data-js="popover" data-placement="left" data-class="activities" data-original-title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('activitytype',false,true,true));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subject',false,false,40));?>
"data-content="<?php echo \App\Language::translate('Status',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('activitystatus',false,true,40));?>
<br /><?php echo \App\Language::translate('Start Time','Calendar');?>
: <?php echo $_smarty_tpl->tpl_vars['START_DATE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['START_TIME']->value;?>
<br /><?php echo \App\Language::translate('End Time','Calendar');?>
: <?php echo $_smarty_tpl->tpl_vars['END_DATE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['END_TIME']->value;
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend')) {?><hr /><?php echo App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('linkextend')));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('linkextend',false,false,40));
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('link')) {?><br /><?php echo App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('link')));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('link',false,false,40));
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('process')) {?><br /><?php echo App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('process')));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('process',false,false,40));
}
if ($_smarty_tpl->tpl_vars['RECORD']->value->get('subprocess')) {?><br /><?php echo App\Language::translateSingularModuleName(\App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get('subprocess')));?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('subprocess',false,false,40));
}?><hr /><?php echo \App\Language::translate('Created By',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('created_user_id',false,false,40));?>
<br /><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id',false,false,40));
if ($_smarty_tpl->tpl_vars['SHAREDOWNER']->value) {?><div><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:&nbsp;<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHAREDOWNER']->value, 'SOWNERID', false, NULL, 'sowner', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['SOWNERID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SOWNERID']->value) {
$_smarty_tpl->tpl_vars['SOWNERID']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['total'];
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sowner']->value['last'] : null)) {?>,&nbsp;<?php }
echo \App\Purifier::encodeHtml(\App\Fields\Owner::getUserLabel($_smarty_tpl->tpl_vars['SOWNERID']->value));
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if (count($_smarty_tpl->tpl_vars['RECORD']->value->get('selectedusers')) > 0) {?><br /><?php echo \App\Language::translate('LBL_INVITE_RECORDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD']->value->get('selectedusers'), 'USER', false, 'KEY');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
if ($_smarty_tpl->tpl_vars['USER']->value) {?> <?php echo \App\Purifier::encodeHtml(\App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['USER']->value));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>"><span class="fas fa-info-circle fa-fw"></span></span><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['RECORD']->value->isEditable()) {?><span class="edit d-none"><?php $_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RECORD']->value->getField('description')->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get('description')));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
' /></span><?php }?></div></div></div><?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_activities']->value['last'] : null)) {?><hr><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="summaryWidgetContainer"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_PENDING_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }
if ($_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()) {?><div class="d-flex py-1"><div class="ml-auto"><button type="button" class="btn btn-primary btn-sm moreRecentActivities mt-2"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
..</button></div></div><?php }?></div>
<?php }
}
