<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:18:01
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\Edit\Field\Password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659534592252e2_96547098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49accb16780167b9a45b3b13e39254eb49bf85f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\Edit\\Field\\Password.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659534592252e2_96547098 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Edit-Field-Password --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName());?><div class="input-group <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE_GROUP']->value;?>
"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="password" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" class="form-control <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isNameField()) {?>nameField<?php }?>"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?>required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?> data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?>><span class="input-group-append"><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'user_password') {?><button class="btn btn-light js-popover-tooltip js-validate-password" data-content="<?php echo \App\Language::translate('LBL_VALIDATE_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" data-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-js="popover|click"><span class="mdi mdi-lock-question"></span></button><?php }?><button class="btn btn-light js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_SHOW_PASSWORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" onmousedown="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
.type = 'text';" onmouseup="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
.type = 'password';" onmouseout="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
.type = 'password';" data-js="popover"><span class="fas fa-eye"></span></button></span></div><!-- /tpl-Users-Edit-Field-Password -->
<?php }
}
