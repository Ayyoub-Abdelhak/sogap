<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:34:47
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\MultiAttachment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953847439219_48294357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f76127e6ef3e77260c878c568af22b6043aac8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\MultiAttachment.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953847439219_48294357 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-MultiAttachment --><?php $_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex());
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));?><div class="border rounded form-control-plaintext text-center c-multi-attachment js-multi-attachment "><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
_temp[]" type="file" class="d-none js-multi-attachment__file" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" data-js="jQuery-file-upload"data-url="file.php?module=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
&action=MultiAttachment&field=<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();
if ($_smarty_tpl->tpl_vars['RECORD']->value && !$_smarty_tpl->tpl_vars['RECORD']->value->isNew()) {?>&record=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();
}?>" accept="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getAcceptFormats();?>
" multiple><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
"data-validation-engine="validate[funcCall[Vtiger_MultiImage_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' class="js-multi-attachment__values "data-js="value" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?>><label for="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="text-muted u-cursor-pointer mb-0" id="filepond--drop-label" aria-hidden="true"><?php echo \App\Language::translate('LBL_DRAG_AND_DROP_FILES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><div class="js-multi-attachment__result" data-js="container" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"></div><div class="js-multi-attachment__progress progress d-none mt-2" data-js="container|css:display"><div class="js-multi-attachment__progress-bar progress-bar progress-bar-striped progress-bar-animated" data-js="css:width" role="progressbar"></div></div></div><!-- /tpl-Base-Edit-Field-MultiAttachment -->
<?php }
}
