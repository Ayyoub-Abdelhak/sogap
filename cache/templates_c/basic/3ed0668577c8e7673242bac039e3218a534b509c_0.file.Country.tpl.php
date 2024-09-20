<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\Country.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b8ac16a0_82162924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed0668577c8e7673242bac039e3218a534b509c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Country.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b8ac16a0_82162924 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-Country --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('COUNTRY_DATA', \App\Fields\Country::getAll('uitype'));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('PLACE_HOLDER', ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed() && !($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true && $_smarty_tpl->tpl_vars['FIELD_VALUE']->value != '')));
$_smarty_tpl->_assignInScope('IS_LAZY', count($_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value) > \App\Config::performance('picklistLimit'));?><div><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="select2 form-control" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"<?php if ($_smarty_tpl->tpl_vars['IS_LAZY']->value) {?> data-select-lazy="true" <?php }?>title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-template-result="prependDataTemplate" data-template-selection="prependDataTemplate"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"<?php if ($_smarty_tpl->tpl_vars['PLACE_HOLDER']->value) {?>data-select="allowClear" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
" <?php }?> data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
" <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?>><?php if ($_smarty_tpl->tpl_vars['PLACE_HOLDER']->value) {?><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php }
if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value && empty($_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value[$_smarty_tpl->tpl_vars['FIELD_VALUE']->value])) {
$_smarty_tpl->_assignInScope('FIELD_VALUE', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));?><optgroup label="<?php echo \App\Language::translate('LBL_VALUE_NOT_FOUND');?>
"><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
</option></optgroup><?php }?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
$_smarty_tpl->_assignInScope('CODE', $_smarty_tpl->tpl_vars['COUNTRY_DATA']->value[$_smarty_tpl->tpl_vars['KEY']->value]['code']);?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['CODE']->value;?>
" title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
"data-template="<span><span class='fi fi-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['CODE']->value, 'UTF-8');?>
 mr-2'></span><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
</span>"<?php if (trim($_smarty_tpl->tpl_vars['FIELD_VALUE']->value) == trim($_smarty_tpl->tpl_vars['KEY']->value)) {?> selected<?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div><!-- /tpl-Base-Edit-Field-Country -->
<?php }
}
