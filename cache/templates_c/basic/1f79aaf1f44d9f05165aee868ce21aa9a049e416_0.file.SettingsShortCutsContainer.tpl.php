<?php
/* Smarty version 4.2.0, created on 2023-12-26 13:01:37
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Vtiger\DashBoard\SettingsShortCutsContainer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ac0a16ef593_20098717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f79aaf1f44d9f05165aee868ce21aa9a049e416' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Vtiger\\DashBoard\\SettingsShortCutsContainer.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ac0a16ef593_20098717 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-DashBoard-SettingsShortCutsContainer --><div class="js-shortcuts pt-0 px-0 pb-3 d-flex flex-wrap" data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUTS']->value, 'SETTINGS_SHORTCUT');
$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value) {
$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/SettingsShortCut.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-Settings-Base-DashBoard-SettingsShortCutsContainer -->
<?php }
}
