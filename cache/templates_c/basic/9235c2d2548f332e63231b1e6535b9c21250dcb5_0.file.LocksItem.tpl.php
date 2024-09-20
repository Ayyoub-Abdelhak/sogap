<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:45:51
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Users\LocksItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a6969f016565_11428141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9235c2d2548f332e63231b1e6535b9c21250dcb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Users\\LocksItem.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a6969f016565_11428141 (Smarty_Internal_Template $_smarty_tpl) {
?><tr><td><select class="form-control js-users <?php if ($_smarty_tpl->tpl_vars['SELECT']->value) {?>select2<?php }?>" data-js="value"><optgroup label="<?php echo \App\Language::translate('LBL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLES']->value, 'ROLE', false, 'ROLEID');
$_smarty_tpl->tpl_vars['ROLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ROLEID']->value => $_smarty_tpl->tpl_vars['ROLE']->value) {
$_smarty_tpl->tpl_vars['ROLE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLEID']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['ID']->value) && $_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['ROLEID']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROLE']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><optgroup label="<?php echo \App\Language::translate('LBL_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS']->value, 'USER', false, 'USERID');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USERID']->value => $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['ID']->value) && $_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['USERID']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['USER']->value->getName();?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></td><td><select class="form-control js-locks <?php if ($_smarty_tpl->tpl_vars['SELECT']->value) {?>select2<?php }?>" data-js="value" multiple=""><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LOCKS_TYPE']->value, 'LOCKT', false, 'ID');
$_smarty_tpl->tpl_vars['LOCKT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['LOCKT']->value) {
$_smarty_tpl->tpl_vars['LOCKT']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl->tpl_vars['LOCK']->value)) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LOCKT']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td><td class="text-center"><button title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button" class="btn btn-danger js-delete-item" data-js="click"><span class="fas fa-trash-alt"></span></button></td></tr>
<?php }
}
