<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:47:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\TreesManager\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585a173bff835_57078393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e38e20df86776d6dd692ee2d1399fe57d115b71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\TreesManager\\ListViewHeader.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585a173bff835_57078393 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-TreesManager-ListViewHeader listViewPageDiv"><div class="listViewTopMenuDiv"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="form-row align-items-center my-2"><div class="col-md-4 btn-toolbar"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LISTVIEW_BASICACTION');
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->do_else = false;
?><button class="btn addButton btn-success" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:') === 0) {?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?> onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"'<?php }?>><i class="fas fa-plus"></i>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="col-md-4 btn-toolbar ml-0"><select class="select2 form-control ml-1" id="moduleFilter" data-placeholder="<?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-select="allowClear"><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option <?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) && $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-md-4 d-flex justify-content-end"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div><div class="listViewContentDiv listViewPageDiv" id="listViewContents">
<?php }
}
