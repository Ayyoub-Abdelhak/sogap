<?php
/* Smarty version 4.2.0, created on 2024-03-29 11:39:10
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Picklist\AssignRoles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6606a85ead3378_22587762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48128a11a62c64fa1734088942a4b7fede078cc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Picklist\\AssignRoles.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606a85ead3378_22587762 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Picklist-AssignRoles --><div class="modal-body js-modal-body pb-0" data-js="container"><form class="form-horizontal validateForm" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="assignValueToRole" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" /><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_ITEM_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls"><select multiple class="select2 form-control" id="assignValues" name="assign_values[]" data-validation-engine="validate[required,funcCall[Vtiger_MultiSelect_Validator_Js.invokeValidation]]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_ALL_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isRoleBased()) {?><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_ASSIGN_TO_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls"><select class="rolesList select2 form-control" id="rolesSelected" name="rolesSelected[]" multiple data-placeholder="<?php echo \App\Language::translate('LBL_CHOOSE_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-validation-engine="validate[required,funcCall[Vtiger_MultiSelect_Validator_Js.invokeValidation]]"><option value="all" selected><?php echo \App\Language::translate('LBL_ALL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLES_LIST']->value, 'ROLE');
$_smarty_tpl->tpl_vars['ROLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ROLE']->value) {
$_smarty_tpl->tpl_vars['ROLE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('roleid');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROLE']->value->get('rolename'));?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php }?></form></div><!-- /tpl-Settings-Picklist-AssignRoles -->
<?php }
}
