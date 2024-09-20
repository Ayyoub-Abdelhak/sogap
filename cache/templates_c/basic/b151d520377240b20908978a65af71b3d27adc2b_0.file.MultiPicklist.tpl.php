<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:27:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\MultiPicklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818c3e4b6dc8_67410070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b151d520377240b20908978a65af71b3d27adc2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\MultiPicklist.tpl',
      1 => 1702905749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818c3e4b6dc8_67410070 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-MultiPicklist --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))) {
$_smarty_tpl->_assignInScope('NOT_DISPLAY_LIST_VALUES', array_diff_key(array_flip($_smarty_tpl->tpl_vars['FIELD_VALUE']->value),$_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value));
} else {
$_smarty_tpl->_assignInScope('NOT_DISPLAY_LIST_VALUES', array());
}?><div class="w-100"><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="" /><select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple class="select2 form-control <?php if (!empty($_smarty_tpl->tpl_vars['NOT_DISPLAY_LIST_VALUES']->value)) {?> hideSelected<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
[]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('dataSelect')) {?> data-select="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('dataSelect');?>
" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?> readonly="readonly" <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if (in_array(\App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value),$_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {?>selected<?php }
if ($_smarty_tpl->tpl_vars['NOT_DISPLAY_LIST_VALUES']->value && array_key_exists($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,$_smarty_tpl->tpl_vars['NOT_DISPLAY_LIST_VALUES']->value)) {?> class="d-none" <?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOT_DISPLAY_LIST_VALUES']->value, 'ITERATION', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['ITERATION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['ITERATION']->value) {
$_smarty_tpl->tpl_vars['ITERATION']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if (in_array(\App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value),$_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {?> selected <?php }?> class="d-none"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><!-- /tpl-Base-Edit-Field-MultiPicklist -->
<?php }
}
