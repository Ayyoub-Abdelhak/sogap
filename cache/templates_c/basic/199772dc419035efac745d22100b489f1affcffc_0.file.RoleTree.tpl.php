<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:08:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Roles\RoleTree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9ab851cbf8_23542093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '199772dc419035efac745d22100b489f1affcffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Roles\\RoleTree.tpl',
      1 => 1702905765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9ab851cbf8_23542093 (Smarty_Internal_Template $_smarty_tpl) {
?><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLE']->value->getChildren(), 'CHILD_ROLE');
$_smarty_tpl->tpl_vars['CHILD_ROLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CHILD_ROLE']->value) {
$_smarty_tpl->tpl_vars['CHILD_ROLE']->do_else = false;
?><li data-role="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getId();?>
"><div class="toolbar-handle"><?php if ($_smarty_tpl->tpl_vars['TYPE']->value == 'Transfer') {
$_smarty_tpl->_assignInScope('SOURCE_ROLE_SUBPATTERN', ('::').($_smarty_tpl->tpl_vars['SOURCE_ROLE']->value->getId()));
if (strpos($_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getParentRoleString(),$_smarty_tpl->tpl_vars['SOURCE_ROLE_SUBPATTERN']->value) !== false) {?><a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn btn-info" rel="tooltip" ><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn btn-light roleEle" rel="tooltip" ><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php }
} else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getEditViewUrl();?>
" class="btn btn-light draggable droppable" rel="tooltip" title="<?php echo \App\Language::translate('LBL_CLICK_TO_EDIT_OR_DRAG_TO_MOVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['VIEW']->value != 'Popup') {?><div class="toolbar">&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getCreateChildUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getCreateChildUrl();?>
" title="<?php echo \App\Language::translate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-plus-circle"></span></a>&nbsp;<a data-id="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getId();?>
" href="javascript:;" data-url="<?php echo $_smarty_tpl->tpl_vars['CHILD_ROLE']->value->getDeleteActionUrl();?>
" data-action="modal" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-trash-alt"></span></a></div><?php }?></div><?php $_smarty_tpl->_assignInScope('ROLE', $_smarty_tpl->tpl_vars['CHILD_ROLE']->value);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RoleTree.tpl','Settings:Roles'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul>
<?php }
}
