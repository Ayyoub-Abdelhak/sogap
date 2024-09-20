<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:41:32
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\OSSTimeControl\Edit\Field\Date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659539dcdffc60_10244480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc034875959e44ea4ba454f770fc71cfa8517a6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\OSSTimeControl\\Edit\\Field\\Date.tpl',
      1 => 1702905754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659539dcdffc60_10244480 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'date_start' && in_array($_smarty_tpl->tpl_vars['VIEW']->value,array('Edit','QuickCreateAjax','QuickEditModal'))) {
$_smarty_tpl->_assignInScope('MODULE_MODEL', $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getModule());
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_start'));
} elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'due_date' && in_array($_smarty_tpl->tpl_vars['VIEW']->value,array('Edit','QuickCreateAjax','QuickEditModal'))) {
$_smarty_tpl->_assignInScope('MODULE_MODEL', $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getModule());
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_end'));
}
if (empty($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)) {
$_smarty_tpl->_assignInScope('BLOCK_FIELDS', false);
}
if (!empty($_smarty_tpl->tpl_vars['TIME_FIELD']->value)) {?><div class="tpl-Edit-Field-Date form-row"><div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-sm-0"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/Date.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value), 0, true);
?></div><div class="col-12 col-sm-6 col-md-6 col-lg-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/Time.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['TIME_FIELD']->value,'SKIP'=>true), 0, true);
?></div></div><?php $_smarty_tpl->_assignInScope('BLOCK_FIELDS', false);
} else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/Date.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value), 0, true);
}
}
}
