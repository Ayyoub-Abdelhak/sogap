<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:12:23
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053475c0702_29441970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63878c9f2430e705a67a35a069a66dcb1eb09fa0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\Login.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053475c0702_29441970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('_DefaultLoginTemplate', \App\Layout::getTemplatePath('Login.Default.tpl','Users'));
$_smarty_tpl->_assignInScope('_CustomLoginTemplate', \App\Layout::getTemplatePath('Login.Custom.tpl','Users'));
$_smarty_tpl->_assignInScope('_CustomLoginTemplateFullPath', "layouts/basic/".((string)$_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value));?>

<?php if (file_exists($_smarty_tpl->tpl_vars['_CustomLoginTemplateFullPath']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_DefaultLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
