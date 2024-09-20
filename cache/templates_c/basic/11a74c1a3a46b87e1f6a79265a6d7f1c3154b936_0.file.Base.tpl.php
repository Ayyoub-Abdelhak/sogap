<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:45:03
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\DefaultField\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581904f1b99d6_13318717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11a74c1a3a46b87e1f6a79265a6d7f1c3154b936' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\DefaultField\\Base.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581904f1b99d6_13318717 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-DefaultBase --><?php $_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue')));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD'=>false,'MODULE'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()), 0, true);
}
}
