<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:35:55
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818e2b720a76_66178630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f97a5b3904c74ae352a03054339df3c486a6335' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\Index.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818e2b720a76_66178630 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-Index --><?php $_smarty_tpl->_assignInScope('WEBSERVICE_APPS', Settings_WebserviceApps_Module_Model::getServers());?><div id="layoutEditorContainer"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><div class="o-breadcrumb widget_header row"><div class="col-md-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="float-right col-md-6 m-auto"><div class="float-right col-md-6"><select class="select2 form-control" name="layoutEditorModules"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isTypeChangeAllowed()) {?><div class="float-right"><div class="btn-group"><button class="btn btn-outline-primary<?php if (!$_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?> active<?php } else { ?> js-switch--inventory<?php }?>" type="button" data-js="click" <?php if ($_smarty_tpl->tpl_vars['CHANGE_MODULE_TYPE_DISABLED']->value) {?>disabled="disabled" <?php }?> data-value="<?php echo Vtiger_Module_Model::STANDARD_TYPE;?>
" autocomplete="off"><?php echo App\Language::translate('LBL_BASIC_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-outline-primary<?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?> active<?php } else { ?> js-switch--inventory<?php }?>" type="button" data-js="click" <?php if ($_smarty_tpl->tpl_vars['CHANGE_MODULE_TYPE_DISABLED']->value) {?>disabled="disabled" <?php }?> data-value="<?php echo Vtiger_Module_Model::ADVANCED_TYPE;?>
" autocomplete="off"><?php echo App\Language::translate('LBL_ADVANCED_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div><?php }?></div></div><hr><div class="alert alert-block alert-warning mb-2"><span class="fas fa-exclamation-triangle u-fs-xlg mr-2 float-left"></span><span class="text-left"><?php echo \App\Language::translate('LBL_EDIT_MAY_AFFECT_STABILITY_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs" role="tablist"><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === 'detailViewLayout') {?>active<?php }?>" id="detailViewLayoutTab" data-toggle="tab" role="tab" href="#detailViewLayout" aria-selected="<?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === 'detailViewLayout') {?>true<?php } else { ?>false<?php }?>"><strong><?php echo App\Language::translate('LBL_DETAILVIEW_LAYOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><li class="nav-item inventoryNav"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === 'inventoryViewLayout') {?>active<?php }?>" id="inventoryViewLayoutTab" data-toggle="tab" role="tab" href="#inventoryViewLayout" aria-selected="<?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === 'inventoryViewLayout') {?>true<?php } else { ?>false<?php }?>"><strong><?php echo App\Language::translate('LBL_MANAGING_AN_ADVANCED_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WEBSERVICE_APPS']->value, 'SERVER', false, 'SERVER_ID');
$_smarty_tpl->tpl_vars['SERVER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SERVER_ID']->value => $_smarty_tpl->tpl_vars['SERVER']->value) {
$_smarty_tpl->tpl_vars['SERVER']->do_else = false;
if ($_smarty_tpl->tpl_vars['SERVER']->value['type'] === 'WebservicePremium') {?><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === "webserviceApps".((string)$_smarty_tpl->tpl_vars['SERVER_ID']->value)) {?>active<?php }?>" id="webserviceAppsTab<?php echo $_smarty_tpl->tpl_vars['SERVER_ID']->value;?>
" data-toggle="tab" role="tab" href="#webserviceApps<?php echo $_smarty_tpl->tpl_vars['SERVER_ID']->value;?>
" aria-selected="<?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === "webserviceApps".((string)$_smarty_tpl->tpl_vars['SERVER_ID']->value)) {?>true<?php } else { ?>false<?php }?>"><strong><?php echo \App\Purifier::encodeHTML($_smarty_tpl->tpl_vars['SERVER']->value['name']);?>
 (<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SERVER']->value['type'],'Settings:WebserviceApps');?>
)</strong></a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><div class="tab-content layoutContent pt-3 pb-2 themeTableColor overflowVisible"><div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === 'detailViewLayout') {?>active show<?php }?>" id="detailViewLayout" role="tabpanel" aria-labelledby="detailViewLayoutTab"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Tabs/DetailViewLayout.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><div class="tab-pane mt-0 fade <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === 'inventoryViewLayout') {?>active show<?php }?>" id="inventoryViewLayout" role="tabpanel" aria-labelledby="inventoryViewLayoutTab"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Tabs/Inventory.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WEBSERVICE_APPS']->value, 'SERVER', false, 'SERVER_ID');
$_smarty_tpl->tpl_vars['SERVER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SERVER_ID']->value => $_smarty_tpl->tpl_vars['SERVER']->value) {
$_smarty_tpl->tpl_vars['SERVER']->do_else = false;
if ($_smarty_tpl->tpl_vars['SERVER']->value['type'] === 'WebservicePremium') {?><div class="tab-pane mt-0 fade <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value === "webserviceApps".((string)$_smarty_tpl->tpl_vars['SERVER_ID']->value)) {?>active show<?php }?>" id="webserviceApps<?php echo $_smarty_tpl->tpl_vars['SERVER_ID']->value;?>
" role="tabpanel" aria-labelledby="#webserviceAppsTab<?php echo $_smarty_tpl->tpl_vars['SERVER_ID']->value;?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Tabs/WebserviceApps.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><!-- /tpl-Settings-LayoutEditor-Index -->
<?php }
}
