<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:57:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PDF\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ea60c68e631_62888623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f98e84d5dd138da0cb60400495cab7433c9690f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PDF\\ListViewHeader.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ea60c68e631_62888623 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-PDF-ListViewHeader listViewPageDiv" id="listViewContainer"><div class="listViewTopMenuDiv"><div class="row widget_header mb-2"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php $_smarty_tpl->_assignInScope('CHECK_ALERT', \App\YetiForce\Shop::checkAlert('YetiForcePdfPremium'));
if ($_smarty_tpl->tpl_vars['CHECK_ALERT']->value) {?><div class="alert alert-warning"><span class="yfi-premium mr-2 u-fs-2em color-red-600 float-left"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CHECK_ALERT']->value,'Settings::YetiForce');?>
 <a class="btn btn-primary btn-sm" href="index.php?parent=Settings&module=YetiForce&view=Shop&product=YetiForcePdfPremium&mode=showProductModal"><span class="yfi yfi-shop mr-2"></span><?php echo \App\Language::translate('LBL_YETIFORCE_SHOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><?php }?><div class="form-row"><div class="col-md-4 btn-toolbar mb-2 mb-xl-0  d-flex justify-content-center justify-content-md-start"><button class="btn btn-light addButton" id="addButton" data-url="<?php echo Settings_PDF_Module_Model::getCreateRecordUrl();?>
"><span class="fas fa-plus mr-1"></span><strong><?php echo \App\Language::translate('LBL_NEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate('LBL_PDF_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-light importButton" id="importButton" data-url="<?php echo Settings_PDF_Module_Model::getImportViewUrl();?>
"title="<?php echo \App\Language::translate('LBL_IMPORT_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-download"></span></button></div><div class="col-md-8 col-lg-8 col-xl-3 btn-toolbar mb-2 mb-xl-0"><select class="select2" id="moduleFilter"><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option <?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) && $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected="" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-lg-12 col-xl-5 btn-toolbar pl-0 d-flex justify-content-center justify-content-xl-end"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="listViewContentDiv" id="listViewContents">
<?php }
}
