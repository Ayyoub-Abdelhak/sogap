<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:47:51
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Notifications\Members.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d48357ecaae0_58404801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2511b0125d09416ce673be632b3d31714fd42f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Notifications\\Members.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d48357ecaae0_58404801 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="tpl-Settings-Notifications-Members form-horizontal" id="modalMembersView"><input type="hidden" id="srcModule" name="srcModule" value="<?php echo $_smarty_tpl->tpl_vars['SRC_MODULE']->value;?>
" /><input type="hidden" id="isToAdd" name="isToAdd" value="<?php echo $_smarty_tpl->tpl_vars['IS_TO_ADD']->value;?>
" /><input type="hidden" id="mode" name="mode" value="addOrRemoveMembers" /><div class="modal-header"><h5 class="modal-title"><span class="fa fa-plus u-mr-5px mt-2"></span><?php echo \App\Language::translate('LBL_ADD_MEMBERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">&times;</span></button></div><div class="modal-body"><div class="form-group"><div class="col-12"><label class="col-form-label"><?php echo \App\Language::translate('LBL_SELECT_MEMBERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><select id="members" class="select2 form-control" multiple="true" name="members[]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\PrivilegeUtil::getMembers(), 'ALL_GROUP_MEMBERS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value) {
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value, 'MEMBER', false, 'MEMBER_ID');
$_smarty_tpl->tpl_vars['MEMBER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER_ID']->value => $_smarty_tpl->tpl_vars['MEMBER']->value) {
$_smarty_tpl->tpl_vars['MEMBER']->do_else = false;
if (!in_array($_smarty_tpl->tpl_vars['MEMBER_ID']->value,$_smarty_tpl->tpl_vars['RESTRICT_MEMBERS']->value)) {?><option class="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['type'];?>
"value="<?php echo $_smarty_tpl->tpl_vars['MEMBER_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value['name']);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form>
<?php }
}
