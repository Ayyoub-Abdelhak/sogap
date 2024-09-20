<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:02:43
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\Boolean.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658051038edaa3_54539838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cffcb69245282c247dd2c3bc00ce1904b9a6c81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Boolean.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658051038edaa3_54539838 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-Boolean --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());?><div class="checkbox"><label class="d-flex m-0 mt-1"><?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="0" /><?php }?><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" disabled="disabled" <?php }?> tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php echo ' ';?>
data-validation-engine="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php echo ' ';
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value)) {?>checked="checked" <?php }
if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> /></label></div><!-- /tpl-Base-Edit-Field-Boolean -->
<?php }
}
