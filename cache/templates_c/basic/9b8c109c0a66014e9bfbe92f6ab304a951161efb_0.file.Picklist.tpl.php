<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\Edit\Field\Picklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b799ec33_69040278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b8c109c0a66014e9bfbe92f6ab304a951161efb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\Edit\\Field\\Picklist.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b799ec33_69040278 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Edit-Field-Picklist --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'defaulteventstatus') {
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', Vtiger_Module_Model::getInstance('Calendar')->getField('activitystatus')->getPicklistValues());
} elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'defaultactivitytype') {
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', Vtiger_Module_Model::getInstance('Calendar')->getField('activitytype')->getPicklistValues());
}
$_smarty_tpl->_assignInScope('PLACE_HOLDER', ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEmptyPicklistOptionAllowed() && !($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true && $_smarty_tpl->tpl_vars['FIELD_VALUE']->value != '')));?><select class="select2 form-control" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true && !in_array($_smarty_tpl->tpl_vars['FIELD_NAME']->value,array('currency_decimal_separator','currency_grouping_separator','authy_methods'))) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
" <?php }?>data-selected-value='<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> <?php if ($_smarty_tpl->tpl_vars['PLACE_HOLDER']->value) {?>data-select="allowClear" <?php }?>><?php if ($_smarty_tpl->tpl_vars['PLACE_HOLDER']->value) {?><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
$_smarty_tpl->_assignInScope('OPTION_VALUE', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value));
if ($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value == ' ' && ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'currency_decimal_separator' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'currency_grouping_separator')) {
$_smarty_tpl->_assignInScope('PICKLIST_VALUE', \App\Language::translate('LBL_SPACE','Users',false,false));
$_smarty_tpl->_assignInScope('OPTION_VALUE', ' ');?><option value="<?php echo $_smarty_tpl->tpl_vars['OPTION_VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['OPTION_VALUE']->value) {?> selected <?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'currency_decimal_separator' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'currency_grouping_separator') {?><option value="<?php echo $_smarty_tpl->tpl_vars['OPTION_VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['OPTION_VALUE']->value) {?> selected <?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php } else { ?><option value="<?php echo $_smarty_tpl->tpl_vars['OPTION_VALUE']->value;?>
" <?php if (trim($_smarty_tpl->tpl_vars['FIELD_VALUE']->value) == trim($_smarty_tpl->tpl_vars['OPTION_VALUE']->value)) {?> selected <?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><!-- /tpl-Users-Edit-Field-Picklist -->
<?php }
}
