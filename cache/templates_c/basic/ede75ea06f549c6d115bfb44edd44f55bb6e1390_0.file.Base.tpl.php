<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\Edit\Field\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b7818e39_97687726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ede75ea06f549c6d115bfb44edd44f55bb6e1390' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\Edit\\Field\\Base.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b7818e39_97687726 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Edit-Field-Base --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" class="form-control <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()) {?>nameField<?php }?>" <?php echo ' ';?>
id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" <?php echo ' ';?>
 tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" <?php echo ' ';?>
title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" <?php echo ' ';?>
data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName() == 'user_name') {?>required,<?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength') && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName() !== 'user_name') {?>maxSize[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength');?>
],<?php }?> funcCall[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName() == 'user_name') {?>Vtiger_UserName_Validator_Js<?php } else { ?>Vtiger_InputMask_Validator_Js<?php }?>.invokeValidation]]" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField() || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName() == 'user_name') {?>autocomplete="username" <?php }
echo ' ';
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '3' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '4' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReadOnly() || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?> readonly="readonly" <?php }?>data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
" <?php }
echo ' ';
if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value['mask']))) {?>data-inputmask="'mask': <?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['PARAMS']->value['mask']));?>
" <?php }?> /><!-- /tpl-Users-Edit-Field-Base -->
<?php }
}
