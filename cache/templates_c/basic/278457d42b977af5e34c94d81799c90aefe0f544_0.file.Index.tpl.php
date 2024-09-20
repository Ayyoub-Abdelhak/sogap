<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:46:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Picklist\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585a1443a0c99_23703850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '278457d42b977af5e34c94d81799c90aefe0f544' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Picklist\\Index.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585a1443a0c99_23703850 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="listViewPageDiv tpl-Settings-Picklist-Index"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="listViewContentDiv js-container p-1 mt-2" id="listViewContents"><div class="form-group row"><label class="col-form-label col-md-3"><strong><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </strong></label><div class="col-md-4"><select class="select2 form-control" id="pickListModules"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_MODULES']->value, 'PICKLIST_MODULE');
$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->do_else = false;
?><option <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value == $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value['tabname']) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value['tabname'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value['tablabel'],$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value['tabname']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div id="modulePickListContainer" class="js-picklist-container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ModulePickListDetail.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div id="modulePickListValuesContainer" class="js-picklist-data-container"><?php if (!empty($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value)) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('PickListValueDetail.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div></div>
<?php }
}
