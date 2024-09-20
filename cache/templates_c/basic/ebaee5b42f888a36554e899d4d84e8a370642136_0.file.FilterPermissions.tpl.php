<?php
/* Smarty version 4.2.0, created on 2024-09-12 11:49:36
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\CustomView\FilterPermissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66e2c740ee0ec3_28880280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebaee5b42f888a36554e899d4d84e8a370642136' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\CustomView\\FilterPermissions.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e2c740ee0ec3_28880280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('MEMBERS', Settings_Groups_Member_Model::getAll());
$_smarty_tpl->_assignInScope('MEMBERS_DEFAULT', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFilterPermissionsView($_smarty_tpl->tpl_vars['CVID']->value,$_smarty_tpl->tpl_vars['TYPE']->value));?><input type="hidden" id="cvid" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" id="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" id="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" /><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</h5></div><div class="modal-body"><div class=""><div class="form-group"><label class="col-form-label"><?php echo \App\Language::translate('LBL_ALL_GROUP_LIST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><div class="input-group"><select class="select2 form-control add" id="allGroups" <?php if ($_smarty_tpl->tpl_vars['IS_DEFAULT']->value) {?> disabled="disabled" <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MEMBERS']->value, 'ALL_GROUP_MEMBERS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value) {
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value, 'MEMBER', false, 'QUALIFIEDID');
$_smarty_tpl->tpl_vars['MEMBER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['QUALIFIEDID']->value => $_smarty_tpl->tpl_vars['MEMBER']->value) {
$_smarty_tpl->tpl_vars['MEMBER']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['MEMBERS_DEFAULT']->value[$_smarty_tpl->tpl_vars['GROUP_LABEL']->value])) && is_array($_smarty_tpl->tpl_vars['MEMBERS_DEFAULT']->value[$_smarty_tpl->tpl_vars['GROUP_LABEL']->value]) && in_array($_smarty_tpl->tpl_vars['QUALIFIEDID']->value,$_smarty_tpl->tpl_vars['MEMBERS_DEFAULT']->value[$_smarty_tpl->tpl_vars['GROUP_LABEL']->value])) {
continue 1;
}?><option value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->get('id');?>
" data-member-type="<?php echo $_smarty_tpl->tpl_vars['GROUP_LABEL']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value->get('name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-success moveItem" data-source="add" data-target="remove" data-operator="1" title="<?php echo \App\Language::translate('LBL_ADD_PERMISSIONS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['IS_DEFAULT']->value) {?> disabled="disabled" <?php }?>><span class="fas fa-arrow-down"></span></button></div></div></div><div class="form-group"><label class="col-form-label"><?php echo \App\Language::translate('LBL_GROUP_MEMBERS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><div class="input-group"><select class="select2 form-control remove" id="groups"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MEMBERS_DEFAULT']->value, 'GROUP', false, 'LABEL');
$_smarty_tpl->tpl_vars['GROUP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->value => $_smarty_tpl->tpl_vars['GROUP']->value) {
$_smarty_tpl->tpl_vars['GROUP']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP']->value, 'USER');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
$_smarty_tpl->_assignInScope('MEMBER', $_smarty_tpl->tpl_vars['MEMBERS']->value[$_smarty_tpl->tpl_vars['LABEL']->value][$_smarty_tpl->tpl_vars['USER']->value]);
if ($_smarty_tpl->tpl_vars['MEMBER']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
" data-member-type="<?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value->get('name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-danger moveItem" data-source="remove" data-target="add" data-operator="0" title="<?php echo \App\Language::translate('LBL_RECEIVE_PERMISSION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-arrow-up"></span></button></div></div></div></div></div><div class="modal-footer"><button type="button" class="btn btn-warning dismiss" data-dismiss="modal"><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div>
<?php }
}
