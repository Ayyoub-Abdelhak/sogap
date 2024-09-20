<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:52:30
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\MeetingUrl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953c6e9bb6a6_02049504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce27737461a5e355c217bb3947229e29b3677466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\MeetingUrl.tpl',
      1 => 1702905749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953c6e9bb6a6_02049504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'MEETING_INFO' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\ce27737461a5e355c217bb3947229e29b3677466_0.file.MeetingUrl.tpl.php',
    'uid' => 'ce27737461a5e355c217bb3947229e29b3677466',
    'call_name' => 'smarty_template_function_MEETING_INFO_68141829165953c6e960892_57427374',
  ),
));
?><!-- tpl-Base-Edit-Field-MeetingUrl --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('MEETING_SERVICE', \App\MeetingService::getInstance());
$_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());
$_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex());
if (!(isset($_smarty_tpl->tpl_vars['RECORD_ID']->value))) {
$_smarty_tpl->_assignInScope('RECORD_ID', 0);
}?><div class="js-meeting-container"><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" type="text" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"class="form-control js-meeting-val" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength')) {?>maxSize[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength');?>
],<?php }?>funcCall[Vtiger_Url_Validator_Js.invokeValidation]]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value);?>
"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> /><?php if ($_smarty_tpl->tpl_vars['VIEW']->value !== 'Detail' && $_smarty_tpl->tpl_vars['MEETING_SERVICE']->value->isActive()) {?><span class="input-group-append u-cursor-pointer"><button class="btn btn-light js-meeting-clear" type="button" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>disabled="disabled" <?php }?>><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_clear" class="fas fa-times-circle" title="<?php echo \App\Language::translate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><button class="btn btn-light js-meeting-add js-popover-tooltip" type="button" aria-label="<?php echo \App\Language::translate("LBL_MEETING_AUTOGENERATE",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>disabled="disabled" <?php }?>data-js="popover" data-trigger="hover" data-content="<?php echo \App\Language::translate("LBL_MEETING_AUTOGENERATE",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'MEETING_INFO', array('PARAMS'=>$_smarty_tpl->tpl_vars['PARAMS']->value), true);?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getUrl($_smarty_tpl->tpl_vars['RECORD_ID']->value);?>
"data-exp-field="<?php if (!empty($_smarty_tpl->tpl_vars['PARAMS']->value['exp'])) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PARAMS']->value['exp']);
}?>"data-room-name="<?php if (!empty($_smarty_tpl->tpl_vars['PARAMS']->value['roomName'])) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PARAMS']->value['roomName']);
}?>"data-domain="<?php echo $_smarty_tpl->tpl_vars['MEETING_SERVICE']->value->get('url');?>
"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="AdditionalIcon-VideoConference"></span></button></span><?php }?></div></div><!-- /tpl-Base-Edit-Field-MeetingUrl -->
<?php }
/* smarty_template_function_MEETING_INFO_68141829165953c6e960892_57427374 */
if (!function_exists('smarty_template_function_MEETING_INFO_68141829165953c6e960892_57427374')) {
function smarty_template_function_MEETING_INFO_68141829165953c6e960892_57427374(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('PARAMS'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_assignInScope('DEPENDENT_TEXT', array());
$_smarty_tpl->_assignInScope('MEETING_DEPENDENT_FIELDS', array());
if (!empty($_smarty_tpl->tpl_vars['PARAMS']->value['exp']) && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getFieldByName($_smarty_tpl->tpl_vars['PARAMS']->value['exp'])) {
$_smarty_tpl->_assignInScope('MEETING_DEPENDENT_FIELDS', array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getFieldByName($_smarty_tpl->tpl_vars['PARAMS']->value['exp'])));
}
if (!empty($_smarty_tpl->tpl_vars['PARAMS']->value['roomName']) && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getFieldByName($_smarty_tpl->tpl_vars['PARAMS']->value['roomName'])) {
$_smarty_tpl->_assignInScope('MEETING_DEPENDENT_FIELDS', array_merge($_smarty_tpl->tpl_vars['MEETING_DEPENDENT_FIELDS']->value,array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getFieldByName($_smarty_tpl->tpl_vars['PARAMS']->value['roomName']))));
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MEETING_DEPENDENT_FIELDS']->value, 'DEPEND_FIELD');
$_smarty_tpl->tpl_vars['DEPEND_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DEPEND_FIELD']->value) {
$_smarty_tpl->tpl_vars['DEPEND_FIELD']->do_else = false;
if ($_smarty_tpl->tpl_vars['DEPEND_FIELD']->value->isViewable()) {
$_smarty_tpl->_assignInScope('DEPENDENT_TEXT', array_merge($_smarty_tpl->tpl_vars['DEPENDENT_TEXT']->value,array($_smarty_tpl->tpl_vars['DEPEND_FIELD']->value->getFullLabelTranslation($_smarty_tpl->tpl_vars['DEPEND_FIELD']->value->getModule()))));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['DEPENDENT_TEXT']->value) {?><br><?php echo \App\Language::translateArgs("LBL_MEETING_AUTOGENERATE_INFO",$_smarty_tpl->tpl_vars['DEPEND_FIELD']->value->getModuleName(),implode(', ',$_smarty_tpl->tpl_vars['DEPENDENT_TEXT']->value));
}
}}
/*/ smarty_template_function_MEETING_INFO_68141829165953c6e960892_57427374 */
}
