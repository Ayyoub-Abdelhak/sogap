<?php
/* Smarty version 4.2.0, created on 2024-05-14 15:20:00
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\MappedFields\Step4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_664373102b07d4_78237927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7267f8c968c4504c6ce7408198ad3bba55efbbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\MappedFields\\Step4.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664373102b07d4_78237927 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mfTemplateContents"><form name="editMFTemplate" action="index.php" method="post" id="mf_step4" class="form-horizontal"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->getName();?>
"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step8" /><input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->getParentName();?>
" /><input type="hidden" class="step" value="4" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><div class="col-md-12 paddingLRZero"><div class="card"><div class="card-header"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,4);?>
: <?php echo \App\Language::translate('LBL_PERMISSIONS_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="card-body"><div class="form-group row mb-0"><label class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_GROUP_MEMBERS','Settings:Groups');?>
</label><div class="col-md-8"><select class="select2 form-control" multiple="true" id="permissions" name="permissions[]" data-placeholder="<?php echo \App\Language::translate('LBL_ADD_USERS_ROLES','Settings:Groups');?>
"><?php $_smarty_tpl->_assignInScope('TEMPLATE_MEMBERS', explode(',',$_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('permissions')));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Groups_Member_Model::getAll(false), 'ALL_GROUP_MEMBERS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value) {
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value, 'MEMBER');
$_smarty_tpl->tpl_vars['MEMBER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER']->value) {
$_smarty_tpl->tpl_vars['MEMBER']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->get('id');?>
" data-member-type="<?php echo $_smarty_tpl->tpl_vars['GROUP_LABEL']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['MEMBER']->value->get('id'),$_smarty_tpl->tpl_vars['TEMPLATE_MEMBERS']->value)) {?>selected="true" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value->get('name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="card-footer clearfix"><div class="btn-toolbar float-right"><button class="btn btn-danger backStep mr-1" type="button"><strong><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-success" type="submit"><strong><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div></div></form></div>
<?php }
}
