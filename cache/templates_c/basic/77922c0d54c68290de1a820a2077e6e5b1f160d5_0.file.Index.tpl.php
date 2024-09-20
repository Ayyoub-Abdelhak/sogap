<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:08:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Roles\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9ab840fd26_74633541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77922c0d54c68290de1a820a2077e6e5b1f160d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Roles\\Index.tpl',
      1 => 1702905765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9ab840fd26_74633541 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Roles-Index"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="clearfix treeView"><ul><li data-role="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getParentRoleString();?>
" data-roleid="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getId();?>
"><div class="toolbar-handle"><a href="javascript:;" class="btn btn-light draggable droppable"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><div class="toolbar" title="<?php echo \App\Language::translate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><button class="btn btn-success ml-1 js-upload-logo" type="button" data-js="click" data-url="index.php?module=Roles&parent=Settings&view=UploadLogo"><span class="fas fa-image" title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getCreateChildUrl();?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['ROOT_ROLE']->value->getCreateChildUrl();?>
" data-action="modal"><span class="fas fa-plus-circle"></span></a></div></div><?php $_smarty_tpl->_assignInScope('ROLE', $_smarty_tpl->tpl_vars['ROOT_ROLE']->value);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RoleTree.tpl','Settings:Roles'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></li></ul></div></div>
<?php }
}
