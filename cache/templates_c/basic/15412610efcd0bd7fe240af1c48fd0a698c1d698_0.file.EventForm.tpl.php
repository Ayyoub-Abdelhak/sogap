<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:41:32
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Calendar\EventForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659539dcb5a937_21980767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15412610efcd0bd7fe240af1c48fd0a698c1d698' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Calendar\\EventForm.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659539dcb5a937_21980767 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Calendar-EventForm --><div class="js-edit-form"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SCRIPTS']->value, 'jsModel', false, 'index');
$_smarty_tpl->tpl_vars['jsModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
$_smarty_tpl->tpl_vars['jsModel']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><form class="form-horizontal recordEditView js-form" id="quickCreate" name="QuickCreate" method="post" action="index.php" data-js="container"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" name="fromView" value="QuickEdit" /><?php $_smarty_tpl->_assignInScope('FROM_VIEW', 'QuickEdit');
} else { ?><input type="hidden" name="fromView" value="QuickCreate" /><?php $_smarty_tpl->_assignInScope('FROM_VIEW', 'QuickCreate');
}?><input type="hidden" id="preSaveValidation" value="<?php echo !empty(\App\EventHandler::getByType(\App\EventHandler::EDIT_VIEW_PRE_SAVE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
" /><input type="hidden" class="js-change-value-event" value="<?php echo \App\EventHandler::getVarsByType(\App\EventHandler::EDIT_VIEW_CHANGE_VALUE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value,array($_smarty_tpl->tpl_vars['RECORD']->value,$_smarty_tpl->tpl_vars['FROM_VIEW']->value));?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input type="hidden" name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
' /><?php }
if (!empty($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value)) {?><input type="hidden" name="listFilterFields" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value);?>
' /><?php }
if (!empty($_smarty_tpl->tpl_vars['IS_POSTPONED']->value)) {?><input type="hidden" name="postponed" value="1" /><?php }?><input type="hidden" name="defaultOtherEventDuration" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('othereventduration'));?>
" /><input type="hidden" name="userChangedEndDateTime" value="0" /><?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_RELATED_FIELD']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_RELATED_FIELD']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="d-none fieldValue source-related-fields" data-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div class="o-calendar__form w-100 d-flex flex-column"><div class="o-calendar__form__wrapper js-calendar__form__wrapper massEditTable no-margin" data-js="perfectscrollbar"><h6 class="boxEventTitle text-muted text-center mt-1"><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?><div class="js-sidebar-title" data-title="edit"><span class="yfi yfi-full-editing-view mr-1"></span><?php echo \App\Language::translate('LBL_EDIT_EVENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php } else { ?><div class="js-sidebar-title" data-title="add"><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php }?></h6><?php if (!empty(App\Config::module('Calendar','SHOW_ACTIVITY_BUTTONS_IN_EDIT_FORM')) && empty($_smarty_tpl->tpl_vars['IS_POSTPONED']->value) && !empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Extended/ActivityButtons.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?><div class="fieldRow"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_start' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_end') && ($_smarty_tpl->tpl_vars['MODULE_NAME']->value === 'OSSTimeControl' || $_smarty_tpl->tpl_vars['MODULE_NAME']->value === 'Reservations')) {
continue 1;
}
$_smarty_tpl->_assignInScope('isReferenceField', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType());
$_smarty_tpl->_assignInScope('refrenceList', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList());
$_smarty_tpl->_assignInScope('refrenceListCount', count($_smarty_tpl->tpl_vars['refrenceList']->value));
$_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());?><div class="row fieldsLabelValue pl-0 pr-0 mb-2 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><?php if (!((isset($_smarty_tpl->tpl_vars['PARAMS']->value['hideLabel'])) && in_array($_smarty_tpl->tpl_vars['VIEW']->value,$_smarty_tpl->tpl_vars['PARAMS']->value['hideLabel']))) {?><div class="col-12 u-fs-sm"><?php $_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));?><label class="muted mt-0 mb-0"><?php if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
"data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><?php }?><div class="fieldValue col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="o-calendar__form__actions"><div class="d-flex flex-wrap<?php if (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?> justify-content-center<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKCREATE_VIEW_HEADER'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKCREATE_VIEW_HEADER'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'quickcreateViewHeader'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><button type="submit" class="js-save-event btn btn-success" title="<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="click"><span title="<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && $_smarty_tpl->tpl_vars['VIEW']->value === 'EventForm') {?><a href="#" role="button" class="btn btn-danger js-summary-close-edit ml-auto u-h-fit"><span title="<?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"class="fas fa-times"></span></a><?php }?></div></div></div></form></div><!-- /tpl-Base-Calendar-EventForm -->
<?php }
}
