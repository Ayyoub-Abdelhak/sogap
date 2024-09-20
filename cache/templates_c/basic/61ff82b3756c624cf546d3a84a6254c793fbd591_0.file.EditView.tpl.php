<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:45:30
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\FieldsDependency\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f8538ac54fb7_11690539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61ff82b3756c624cf546d3a84a6254c793fbd591' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\FieldsDependency\\EditView.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f8538ac54fb7_11690539 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-FieldsDependency-EditView -->
<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewBlocks.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!-- /tpl-Settings-FieldsDependency-EditView -->
<?php }
}
