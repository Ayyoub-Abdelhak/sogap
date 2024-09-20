<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\MultiListFields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b8720911_63629914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d73e9b50280f682d2dd8d61fd4865950771cb6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\MultiListFields.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b8720911_63629914 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-MultiListFields --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));?><div><select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple class="select2 form-control col-md-12" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
[]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
" <?php if (in_array(\App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value),$_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {?>selected<?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><!-- /tpl-Base-Edit-Field-MultiListFields -->
<?php }
}
