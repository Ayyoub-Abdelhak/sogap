<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:17:24
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Groups\Edit\Field\MultiPicklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953434737af4_35466935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '158b4dbb00a1a3414ada39a8b38d01328b5e1591' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Groups\\Edit\\Field\\MultiPicklist.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953434737af4_35466935 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Groups-Edit-Field-MultiPicklist --><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'members') {
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('MEMBERS_ALL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getMembersList($_smarty_tpl->tpl_vars['RECORD']->value));?><div class="row"><div class="col-12"><ul class="list-inline groupMembersColors mb-1 d-flex flex-nowrap flex-column flex-sm-row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_keys($_smarty_tpl->tpl_vars['MEMBERS_ALL']->value), 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['GROUP_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value) {
$_smarty_tpl->tpl_vars['GROUP_LABEL']->do_else = false;
?><li class="<?php echo $_smarty_tpl->tpl_vars['GROUP_LABEL']->value;?>
 text-center px-4 m-0 list-inline-item w-100"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><div class="col-12"><select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getTabIndex();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" multiple class="select2 form-control" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
[]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('dataSelect')) {?> data-select="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('dataSelect');?>
" <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?> readonly="readonly" <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MEMBERS_ALL']->value, 'ALL_GROUP_MEMBERS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value) {
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value, 'MEMBER', false, 'MEMBER_ID');
$_smarty_tpl->tpl_vars['MEMBER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER_ID']->value => $_smarty_tpl->tpl_vars['MEMBER']->value) {
$_smarty_tpl->tpl_vars['MEMBER']->do_else = false;
?><option class="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['type'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MEMBER_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['MEMBER_ID']->value,$_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value['name']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php } else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?><!-- /tpl-Settings-Groups-Edit-Field-MultiPicklist -->
<?php }
}
