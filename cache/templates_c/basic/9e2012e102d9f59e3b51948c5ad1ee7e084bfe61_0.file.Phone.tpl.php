<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\Phone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b7ce6d56_27179759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2012e102d9f59e3b51948c5ad1ee7e084bfe61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Phone.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b7ce6d56_27179759 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-Phone --><?php $_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex());
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());
$_smarty_tpl->_assignInScope('NUMBER', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?><div><?php if (\App\Config::main('phoneFieldAdvancedVerification',false)) {
if ($_smarty_tpl->tpl_vars['NUMBER']->value) {
$_smarty_tpl->_assignInScope('PHONE_DETAIL', App\Fields\Phone::getDetails($_smarty_tpl->tpl_vars['NUMBER']->value));
$_smarty_tpl->_assignInScope('COUNTRY', $_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['country']);
} else {
$_smarty_tpl->_assignInScope('PHONE_DETAIL', array());
if (!\App\Config::component('Phone','defaultPhoneCountry')) {
$_smarty_tpl->_assignInScope('COUNTRY', \App\Language::getLanguageRegion());
} else {
$_smarty_tpl->_assignInScope('COUNTRY', '');
}
}
$_smarty_tpl->_assignInScope('FIELD_NAME_EXTRA', ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()).('_extra'));
$_smarty_tpl->_assignInScope('FIELD_MODEL_EXTRA', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getFieldByName($_smarty_tpl->tpl_vars['FIELD_NAME_EXTRA']->value));
$_smarty_tpl->_assignInScope('ACTIVE_EXTRA_FIELD', !empty($_smarty_tpl->tpl_vars['VIEW']->value) && ($_smarty_tpl->tpl_vars['VIEW']->value == 'Edit' || $_smarty_tpl->tpl_vars['VIEW']->value == 'QuickCreateAjax') && $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->isWritable());
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', App\Fields\Country::getAll('phone'));
$_smarty_tpl->_assignInScope('IS_LAZY', count($_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value) > \App\Config::performance('picklistLimit'));?><div class="form-row"><div class="<?php if ($_smarty_tpl->tpl_vars['ACTIVE_EXTRA_FIELD']->value) {?>col-md-8<?php } else { ?>col-md-12<?php }?>"><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
 phoneGroup mb-1"><div class="input-group-prepend m-0 p-0"><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_country" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['IS_LAZY']->value) {?> data-select-lazy="true" <?php }?>id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
_dropDown_<?php echo \App\Layout::getUniqueId();?>
" class="select2 phoneCountryList" data-template-result="prependDataTemplate" data-template-selection="prependDataTemplate" required="required" data-dropdown-auto-width="true" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?> readonly="readonly" <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'ROW', false, 'KEY');
$_smarty_tpl->tpl_vars['ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->tpl_vars['ROW']->do_else = false;
$_smarty_tpl->_assignInScope('TRANSLATE', \App\Language::translateSingleMod($_smarty_tpl->tpl_vars['ROW']->value['name'],'Other.Country'));?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['COUNTRY']->value === $_smarty_tpl->tpl_vars['KEY']->value) {?> selected <?php }?> title="<?php echo $_smarty_tpl->tpl_vars['TRANSLATE']->value;?>
" data-template="<span><span class='fi fi-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['KEY']->value, 'UTF-8');?>
 mr-2'></span><?php echo $_smarty_tpl->tpl_vars['TRANSLATE']->value;?>
</span>"><?php echo $_smarty_tpl->tpl_vars['TRANSLATE']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php if ($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value && ((isset($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['geocoding'])) || (isset($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['carrier'])))) {
$_smarty_tpl->_assignInScope('TITLE', (($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['geocoding']).(' ')).($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['carrier']));
} else {
$_smarty_tpl->_assignInScope('TITLE', \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value));
}
if ($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value && (isset($_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['number']))) {
$_smarty_tpl->_assignInScope('NUMBER', $_smarty_tpl->tpl_vars['PHONE_DETAIL']->value['number']);
}?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['NUMBER']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"title="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
" type="text" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-advanced-verification="1" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value['mask']))) {?>data-inputmask="'mask': <?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['PARAMS']->value['mask']));?>
" <?php }?> /></div></div><?php if ($_smarty_tpl->tpl_vars['ACTIVE_EXTRA_FIELD']->value) {
$_smarty_tpl->_assignInScope('PARAMS_EXTRA', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());?><div class="col-md-4"><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getValidator());?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME_EXTRA']->value;?>
" class="form-control" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
"placeholder="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME_EXTRA']->value),$_smarty_tpl->tpl_vars['RECORD']->value);
}?>" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME_EXTRA']->value;?>
" type="text" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->isMandatory() == true) {?> required,<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength')) {?>maxSize[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength');?>
],<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL_EXTRA']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['PARAMS_EXTRA']->value['mask']))) {?>data-inputmask="'mask': <?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['PARAMS_EXTRA']->value['mask']));?>
" <?php }?> /></div><?php }?></div><?php } else { ?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['NUMBER']->value);?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" placeholder="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="text" class="form-control" data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength')) {?>maxSize[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength');?>
],<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-advanced-verification="0" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value['mask']))) {?>data-inputmask="'mask': <?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['PARAMS']->value['mask']));?>
" <?php }?> /><?php }?></div><!-- /tpl-Base-Edit-Field-Phone -->
<?php }
}
