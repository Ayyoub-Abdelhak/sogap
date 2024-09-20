<?php
/* Smarty version 4.2.0, created on 2024-05-10 18:03:17
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\MappedFields\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e5355319ed0_03759315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a73fe5560d6088352935fe2363e87d2aaf1f180' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\MappedFields\\ListViewHeader.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e5355319ed0_03759315 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-MappedFields-ListViewHeader --><div class="listViewPageDiv" id="listViewContainer"><div class="listViewTopMenuDiv"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="row align-items-center my-1"><div class="col-md-4 btn-toolbar"><button class="btn btn-light addButton" id="addButton" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
"><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-light importButton" id="importButton" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getImportViewUrl();?>
"title="<?php echo \App\Language::translate('LBL_IMPORT_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-download"></i></button></div><div class="col-md-4 btn-toolbar"><select class="select2" id="moduleFilter" data-placeholder="<?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-select="allowClear"><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'OSSMailView') {?> continue <?php }?><option <?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) && $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId()) {?> selected="" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-md-4 btn-toolbar justify-content-end"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="listViewContentDiv" id="listViewContents"><!-- /tpl-Settings-MappedFields-ListViewHeader -->
<?php }
}
