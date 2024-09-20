<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:27:41
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\Field\Currency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818c3d8eb425_22934630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd1fc85274f473856e38bdf07b2821b9dc06d21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\Field\\Currency.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818c3d8eb425_22934630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'FUN_CURRENCY_SYMBOL' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\4dd1fc85274f473856e38bdf07b2821b9dc06d21_0.file.Currency.tpl.php',
    'uid' => '4dd1fc85274f473856e38bdf07b2821b9dc06d21',
    'call_name' => 'smarty_template_function_FUN_CURRENCY_SYMBOL_124810475765818c3d7cd451_19533207',
  ),
));
?><!-- tpl-Base-Edit-Field-Currency --><div><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('SYMBOL_PLACEMENT', $_smarty_tpl->tpl_vars['USER_MODEL']->value->currency_symbol_placement);
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '71') {?><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
" data-uitype="71"><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value != '1.0$') {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol')), true);
}?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" type="text" class="currencyField form-control <?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {?> textAlignRight <?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?>data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
'data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
'data-number-of-decimal-places='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('no_of_currency_decimals');?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php } else { ?> data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php }?> /><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol')), true);
}?></div><?php } elseif (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '72')) {?><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><?php $_smarty_tpl->_assignInScope('DISPLAY_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_VALUE']->value);
if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value != '1.0$') {
if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && !empty($_smarty_tpl->tpl_vars['RECORD']->value->get('currency_id'))) {
$_smarty_tpl->_assignInScope('CURRENCY', \App\Fields\Currency::getById($_smarty_tpl->tpl_vars['RECORD']->value->get('currency_id')));
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol']), true);
} else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol')), true);
}
}?><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_FIELD_VALUE']->value;?>
" type="text" class="row-fluid currencyField form-control" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
'data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> /><?php if ($_smarty_tpl->tpl_vars['SYMBOL_PLACEMENT']->value == '1.0$') {
if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && !empty($_smarty_tpl->tpl_vars['RECORD']->value->get('currency_id'))) {
$_smarty_tpl->_assignInScope('CURRENCY', \App\Fields\Currency::getById($_smarty_tpl->tpl_vars['RECORD']->value->get('currency_id')));
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol']), true);
} else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'FUN_CURRENCY_SYMBOL', array('CURRENCY_SYMBOL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol')), true);
}
}?></div><?php } else { ?><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><div class="row"><span class="col-md-1 input-group-append"><span class="input-group-text row js-currency" data-js="text"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol');?>
</span></span><?php $_smarty_tpl->_assignInScope('DISPLAY_FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?><span class="col-md-7"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_FIELD_VALUE']->value;?>
" type="text" class="row-fluid currencyField form-control" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
'data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?> /></span></div></div><?php }?></div><!-- /tpl-Base-Edit-Field-Currency -->
<?php }
/* smarty_template_function_FUN_CURRENCY_SYMBOL_124810475765818c3d7cd451_19533207 */
if (!function_exists('smarty_template_function_FUN_CURRENCY_SYMBOL_124810475765818c3d7cd451_19533207')) {
function smarty_template_function_FUN_CURRENCY_SYMBOL_124810475765818c3d7cd451_19533207(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('CURRENCY_SYMBOL'=>'','CLASS'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
<span class="input-group-append <?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
"><span class="input-group-text js-currency" data-js="text"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</span></span><?php
}}
/*/ smarty_template_function_FUN_CURRENCY_SYMBOL_124810475765818c3d7cd451_19533207 */
}
