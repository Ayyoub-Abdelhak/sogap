<?php
/* Smarty version 4.2.0, created on 2024-03-14 11:59:25
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\AdvanceFilterExpressions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f2e69d4b6ce6_23063371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa5351c31653592f881ca9ff12ca227cd76544ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\AdvanceFilterExpressions.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f2e69d4b6ce6_23063371 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['MODULE_MODEL']->value)) {
$_smarty_tpl->_assignInScope('MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value));
}
if (empty($_smarty_tpl->tpl_vars['DATE_FILTERS']->value)) {
$_smarty_tpl->_assignInScope('DATE_FILTERS', Vtiger_AdvancedFilter_Helper::getDateFilter($_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));
}
if (empty($_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS']->value)) {
$_smarty_tpl->_assignInScope('ADVANCED_FILTER_OPTIONS', Vtiger_AdvancedFilter_Helper::getAdvancedFilterOptions());
}
if (empty($_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS_BY_TYPE']->value)) {
$_smarty_tpl->_assignInScope('ADVANCED_FILTER_OPTIONS_BY_TYPE', Vtiger_AdvancedFilter_Helper::getAdvancedFilterOpsByFieldType());
}
if (empty($_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS']->value)) {
$_smarty_tpl->_assignInScope('FIELD_EXPRESSIONS', Vtiger_AdvancedFilter_Helper::getExpressions());
}
if (empty($_smarty_tpl->tpl_vars['META_VARIABLES']->value)) {
$_smarty_tpl->_assignInScope('META_VARIABLES', Vtiger_AdvancedFilter_Helper::getMetaVariables());
}
$_smarty_tpl->_assignInScope('COLUMNNAME_API', 'getName');?><div class="card mb-2"><div id="advanceFilterContainer" class="js-conditions-container" data-js="container"><div class="card-header"><span class="fas fa-random"></span> <?php echo \App\Language::translate('LBL_CHOOSE_FILTER_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="card-body"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('FieldExpressions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div>
<?php }
}
