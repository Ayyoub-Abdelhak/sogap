<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:46:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Picklist\PickListValueDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585a14459c8a7_94912931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6536babaa9a4d80edb43be2fa0498beed0f6acd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Picklist\\PickListValueDetail.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585a14459c8a7_94912931 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Picklist-PicklistValueDetail --><div><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value) {
$_smarty_tpl->_assignInScope('SHOW_ROLE', $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isRoleBased() && $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isEditable());?><ul class="nav nav-tabs mr-0" role="tablist"><li class="nav-item"><a class="nav-link active" href="#allValuesLayout" data-toggle="tab" role="tab" aria-controls="<?php echo \App\Language::translate('LBL_ALL_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php echo ' ';?>
aria-selected="true"><strong><?php echo \App\Language::translate('LBL_ALL_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php if ($_smarty_tpl->tpl_vars['SHOW_ROLE']->value) {?><li class="nav-item" id="assignedToRoleTab"><a class="nav-link" href="#assignedToRoleLayout" data-toggle="tab" role="tab" aria-controls="<?php echo \App\Language::translate('LBL_VALUES_ASSIGNED_TO_A_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php echo ' ';?>
aria-selected="false"><strong><?php echo \App\Language::translate('LBL_VALUES_ASSIGNED_TO_A_ROLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php }?></ul><div class="tab-content layoutContent py-3 themeTableColor overflowVisible"><div class="tab-pane fade show active" role="tabpanel" id="allValuesLayout"><div class="row"><div class="col-12 btn-group flex-wrap flex-md-nowrap" role="group"><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isEditable()) {?><button type="button" class="btn btn-primary js-picklist-create" id="addItem"><?php echo \App\Language::translate('LBL_ADD_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php if ($_smarty_tpl->tpl_vars['SHOW_ROLE']->value) {?><button type="button" class="btn btn-info js-picklist-role" id="assignValue"><?php echo \App\Language::translate('LBL_ASSIGN_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?><button type="button" class="btn btn-warning js-picklist-import" id="importItem"><?php echo \App\Language::translate('LBL_IMPORT_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?><button type="button" class="btn btn-success js-picklist-order" disabled="" id="saveSequence"><?php echo \App\Language::translate('LBL_SAVE_ORDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><div class="col-12"><div class="my-1 my-md-3 ml-2"><span class="fas fa-info-circle mr-1"></span><?php echo \App\Language::translate('LBL_DRAG_ITEMS_TO_RESPOSITION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="col-12"><div class="table-responsive"><table id="pickListValuesTable" class="table table-bordered js-picklist-table"><thead><tr class="listViewHeaders"><th><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;<?php echo \App\Language::translate('LBL_ITEMS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Fields\Picklist::getValues($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->getName()), 'PICKLIST_DATA', false, 'PICKLIST_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_DATA']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_DATA']->do_else = false;
?><tr class="pickListValue js-picklist-value u-bg-white-darken" data-key-id="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
"><td class="u-text-ellipsis p-2"><span class="mdi mdi-drag"></span>&nbsp;&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_DATA']->value['picklistValue'],$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
<span class="float-right actions"><button class="btn btn-primary btn-xs ml-1 js-picklist-edit" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
"><span class="yfi yfi-full-editing-view"></span></button><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->isEditable() && $_smarty_tpl->tpl_vars['PICKLIST_DATA']->value['presence'] === 1) {?><button class="btn btn-danger btn-xs js-picklist-delete ml-1" title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
"><span class="fas fa-trash-alt"></span></button><?php }?></span></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['SHOW_ROLE']->value) {?><div class="tab-pane fade" role="tabpanel" id="assignedToRoleLayout"><div class="row align-items-center"><div class="col-md-2 textAlignRight"><?php echo \App\Language::translate('LBL_ROLE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-4"><select name="rolesSelected" class="form-control select2 js-role-list" id="rolesList" data-placeholder="<?php echo \App\Language::translate('LBL_CHOOSE_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLES_LIST']->value, 'ROLE');
$_smarty_tpl->tpl_vars['ROLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ROLE']->value) {
$_smarty_tpl->tpl_vars['ROLE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value->get('roleid');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROLE']->value->get('rolename'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div id="pickListValeByRoleContainer"></div></div><?php }?></div><?php }?></div><!-- /tpl-Settings-Picklist-PicklistValueDetail -->
<?php }
}
