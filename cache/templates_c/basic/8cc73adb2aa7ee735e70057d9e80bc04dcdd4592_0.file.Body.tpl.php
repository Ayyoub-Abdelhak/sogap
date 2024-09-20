<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\Body.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b10380b6_14727196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cc73adb2aa7ee735e70057d9e80bc04dcdd4592' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\Body.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b10380b6_14727196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('ANNOUNCEMENTS', Vtiger_Module_Model::getInstance('Announcements'));
if ($_smarty_tpl->tpl_vars['ANNOUNCEMENTS']->value->checkActive()) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Announcement.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_assignInScope('LEFTPANELHIDE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('leftpanelhide'));?><div class="container-fluid container-fluid-main"><div class="o-base-container js-base-container c-menu--animation <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value) {?> c-menu--open<?php }?> <?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>userInfoFooter<?php }?>" data-js="container | class: c-menu--animation"><?php if ($_smarty_tpl->tpl_vars['VIEW']->value != 'Login') {
if (!empty($_smarty_tpl->tpl_vars['CHILD_LINKS']->value)) {?><span class="caret"></span><?php }?><div class="js-sidebar c-menu__container noSpaces" data-js="class: .js-expand"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyLeft.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="basePanel"><div class="mainBody"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BodyContent.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
