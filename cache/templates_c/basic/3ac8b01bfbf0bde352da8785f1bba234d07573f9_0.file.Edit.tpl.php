<?php
/* Smarty version 4.2.0, created on 2024-09-12 15:26:47
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PickListDependency\Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66e2fa278d3af8_71286270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac8b01bfbf0bde352da8785f1bba234d07573f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PickListDependency\\Edit.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e2fa278d3af8_71286270 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-PickListDependency-Edit --><div class="verticalScroll"><div class="o-breadcrumb widget_header row mb-3"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="contents js-picklist-dependent-container " data-js="container"><form id="pickListDependencyForm" name="tmp" method="post" action="index.php"><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><?php }?><div class="js-dependent-fields" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DependentFields.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div id="dependencyGraph" class="my-3 w-100 js-dependency-tables-container" data-js="container"><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div></form></div></div><!-- /tpl-Settings-PickListDependency-Edit -->
<?php }
}
