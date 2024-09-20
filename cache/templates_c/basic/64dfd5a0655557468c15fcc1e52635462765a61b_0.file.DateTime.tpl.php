<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:52:30
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Calendar\Edit\Field\DateTime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953c6e676a38_61903915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64dfd5a0655557468c15fcc1e52635462765a61b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Calendar\\Edit\\Field\\DateTime.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953c6e676a38_61903915 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-Edit-Field-DateTime --><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'date_start') {
$_smarty_tpl->_assignInScope('DATE_FIELD', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value);
$_smarty_tpl->_assignInScope('MODULE_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule());
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_start'));
$_smarty_tpl->_assignInScope('TIME_NAME', 'time_start');
} elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == 'due_date') {
$_smarty_tpl->_assignInScope('DATE_FIELD', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value);
$_smarty_tpl->_assignInScope('MODULE_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule());
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('time_end'));
$_smarty_tpl->_assignInScope('TIME_NAME', 'time_end');
}
if (empty($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)) {
$_smarty_tpl->_assignInScope('BLOCK_FIELDS', false);
}
$_smarty_tpl->_assignInScope('DATE_TIME_VALUE', ((string) $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));
$_smarty_tpl->_assignInScope('DATE_TIME_COMPONENTS', explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value));
if (count($_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value) == 2) {
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['TIME_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[1]));
} elseif (!empty($_smarty_tpl->tpl_vars['RECORD']->value)) {
$_smarty_tpl->_assignInScope('TIME_FIELD', $_smarty_tpl->tpl_vars['TIME_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['TIME_NAME']->value)));
}
$_smarty_tpl->_assignInScope('DATE_TIME_CONVERTED_VALUE', DateTimeField::convertToUserTimeZone($_smarty_tpl->tpl_vars['DATE_TIME_VALUE']->value)->format('Y-m-d H:i:s'));
$_smarty_tpl->_assignInScope('DATE_TIME_COMPONENTS', explode(' ',$_smarty_tpl->tpl_vars['DATE_TIME_CONVERTED_VALUE']->value));
$_smarty_tpl->_assignInScope('DATE_FIELD', $_smarty_tpl->tpl_vars['DATE_FIELD']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['DATE_TIME_COMPONENTS']->value[0]));?><div class="tpl-Edit-Field-DateTime form-row"><div class="col-12 col-sm-6 col-md-5 mb-3 mb-sm-0 px-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/Date.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['DATE_FIELD']->value), 0, true);
?></div><div class="col-12 col-sm-6 col-md-7 px-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/Field/Time.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value,'FIELD_MODEL'=>$_smarty_tpl->tpl_vars['TIME_FIELD']->value), 0, true);
?></div></div><!-- /tpl-Calendar-Edit-Field-DateTime -->
<?php }
}
