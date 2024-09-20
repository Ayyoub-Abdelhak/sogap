<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:17:24
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Groups\Edit\Field\Owner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6595343420fd44_64183811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d643f2b004c97b0af77675f5137c9cca5501be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Groups\\Edit\\Field\\Owner.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6595343420fd44_64183811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'OPTGRUOP' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\e3d643f2b004c97b0af77675f5137c9cca5501be_0.file.Owner.tpl.php',
    'uid' => 'e3d643f2b004c97b0af77675f5137c9cca5501be',
    'call_name' => 'smarty_template_function_OPTGRUOP_4003887765953433e80f89_48275233',
  ),
));
?><!-- tpl-Settings-Groups-Edit-Field-Owner --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('OWNERS_ALL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getOwnerList($_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('CURRENT_USER_ID', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('id'));
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));?><div class="w-100"><select class="select2 form-control <?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly() || !$_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>readonly="readonly" <?php }?>><?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><optgroup class="p-0"><option value="0"><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OWNERS_ALL']->value, 'OWNERS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['OWNERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['OWNERS']->value) {
$_smarty_tpl->tpl_vars['OWNERS']->do_else = false;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'OPTGRUOP', array('BLOCK_NAME'=>$_smarty_tpl->tpl_vars['BLOCK_NAME']->value,'OWNERS'=>$_smarty_tpl->tpl_vars['OWNERS']->value), true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><!-- /tpl-Settings-Groups-Edit-Field-Owner -->
<?php }
/* smarty_template_function_OPTGRUOP_4003887765953433e80f89_48275233 */
if (!function_exists('smarty_template_function_OPTGRUOP_4003887765953433e80f89_48275233')) {
function smarty_template_function_OPTGRUOP_4003887765953433e80f89_48275233(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('BLOCK_NAME'=>'','OWNERS'=>array(),'ACTIVE'=>'inactive'), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if ($_smarty_tpl->tpl_vars['OWNERS']->value) {?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OWNERS']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_VALUE']->value == $_smarty_tpl->tpl_vars['OWNER_ID']->value) {?> selected="selected" <?php }?>data-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }
}}
/*/ smarty_template_function_OPTGRUOP_4003887765953433e80f89_48275233 */
}
