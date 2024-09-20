<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:13:50
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Users\SwitchUsersItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a68f1e88ec14_31324577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54b7b5e13dd380b11a7519d5e212f305c6f7634' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Users\\SwitchUsersItem.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a68f1e88ec14_31324577 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Users-SwitchUsersItem --><tr><td><select class="form-control sufrom <?php if ($_smarty_tpl->tpl_vars['SELECT']->value) {?>select2<?php }?>"><optgroup label="<?php echo \App\Language::translate('LBL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></td><td><select class="form-control suto <?php if ($_smarty_tpl->tpl_vars['SELECT']->value) {?>select2<?php }?>" multiple=""><optgroup label="<?php echo \App\Language::translate('LBL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLES']->value, 'ROLE', false, 'ROLEID');
$_smarty_tpl->tpl_vars['ROLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ROLEID']->value => $_smarty_tpl->tpl_vars['ROLE']->value) {
$_smarty_tpl->tpl_vars['ROLE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROLEID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['ROLEID']->value,$_smarty_tpl->tpl_vars['SUSERS']->value)) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROLE']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><optgroup label="<?php echo \App\Language::translate('LBL_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS']->value, 'USER', false, 'USERID');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USERID']->value => $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['USERID']->value,$_smarty_tpl->tpl_vars['SUSERS']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['USER']->value->getName();?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></td><td class="textAlignCenter"><button title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button" class="btn btn-sm btn-danger delate"><i class="fas fa-trash-alt"></i></button></td></tr><!-- /tpl-Settings-Users-SwitchUsersItem -->
<?php }
}
