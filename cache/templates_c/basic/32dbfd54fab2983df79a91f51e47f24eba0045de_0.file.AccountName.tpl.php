<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:27:39
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\AccountName.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818c3bd8c4a6_93991772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32dbfd54fab2983df79a91f51e47f24eba0045de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\AccountName.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818c3bd8c4a6_93991772 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-AccountName --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('EXPLODED_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->parseName());
$_smarty_tpl->_assignInScope('MAXIMUM_LENGTH', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maximumlength'));
$_smarty_tpl->_assignInScope('PARAMS', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldParams());
$_smarty_tpl->_assignInScope('LEGAL_FORM', '');
if ($_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->_assignInScope('LEGAL_FORM', $_smarty_tpl->tpl_vars['RECORD']->value->get('legal_form'));
}?><div class="row"><div class="col px-0 <?php if ($_smarty_tpl->tpl_vars['LEGAL_FORM']->value === 'PLL_NATURAL_PERSON') {?>d-none<?php }?> js-account-name" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/Base.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col pl-0 <?php if ($_smarty_tpl->tpl_vars['LEGAL_FORM']->value !== 'PLL_NATURAL_PERSON') {?>d-none<?php }?> js-first-name" data-js="container"><input value="<?php echo $_smarty_tpl->tpl_vars['EXPLODED_FIELD_VALUE']->value['first'];?>
" class="form-control" type="text" title="<?php echo \App\Language::translate('First Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" <?php echo ' ';?>
data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['MAXIMUM_LENGTH']->value/2) {?>maxSize[<?php echo round($_smarty_tpl->tpl_vars['MAXIMUM_LENGTH']->value/2);?>
],<?php }?> funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReadOnly() || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }
echo ' ';?>
data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
" <?php }
echo ' ';
if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value['mask']))) {?>data-inputmask="'mask': <?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['PARAMS']->value['mask']));?>
" <?php }
echo ' ';?>
tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" placeholder="<?php echo \App\Language::translate('First Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" /></div><div class="col px-0 <?php if ($_smarty_tpl->tpl_vars['LEGAL_FORM']->value !== 'PLL_NATURAL_PERSON') {?>d-none<?php }?> js-last-name" data-js="container"><input value="<?php echo $_smarty_tpl->tpl_vars['EXPLODED_FIELD_VALUE']->value['last'];?>
" class="form-control" type="text" title="<?php echo \App\Language::translate('Last Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" <?php echo ' ';?>
data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?>required,<?php }
if ($_smarty_tpl->tpl_vars['MAXIMUM_LENGTH']->value/2) {?>maxSize[<?php echo round($_smarty_tpl->tpl_vars['MAXIMUM_LENGTH']->value/2);?>
],<?php }?> funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReadOnly() || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }
echo ' ';?>
data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
" <?php }
echo ' ';
if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value['mask']))) {?>data-inputmask="'mask': <?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['PARAMS']->value['mask']));?>
" <?php }
echo ' ';?>
tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" placeholder="<?php echo \App\Language::translate('Last Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" /></div></div><!-- /tpl-Base-Edit-Field-AccountName -->
<?php }
}
