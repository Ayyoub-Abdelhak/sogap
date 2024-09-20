<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:46:34
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\AutomaticAssignment\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a696cab29df7_76254031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcbf77651473497c86657851051cc1e9968fba2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\AutomaticAssignment\\ListViewHeader.tpl',
      1 => 1702905761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a696cab29df7_76254031 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-AutomaticAssignment-ListViewHeader --><div><div class="o-breadcrumb widget_header row"><div class="col-12 d-flex"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php if (!\App\YetiForce\Register::isRegistered()) {?><div class="col-md-12"><div class="alert alert-danger"><span class="yfi yfi-yeti-register-alert color-red-600 u-fs-5x mr-4 float-left"></span><h1 class="alert-heading"><?php echo \App\Language::translate('LBL_YETIFORCE_NOT_REGISTRATION_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h1><?php echo \App\Language::translate('LBL_YETIFORCE_NOT_REGISTRATION_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php } else {
$_smarty_tpl->_assignInScope('CHECK_ALERT', \App\YetiForce\Shop::checkAlert('YetiForceAutoAssignment'));
if ($_smarty_tpl->tpl_vars['CHECK_ALERT']->value) {?><div class="alert alert-warning"><span class="yfi-premium mr-2 u-fs-2em color-red-600 float-left"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CHECK_ALERT']->value,'Settings::YetiForce');?>
 <a class="btn btn-primary btn-sm" href="index.php?parent=Settings&module=YetiForce&view=Shop&product=YetiForceAutoAssignment&mode=showProductModal"><span class="yfi yfi-shop mr-2"></span><?php echo \App\Language::translate('LBL_YETIFORCE_SHOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><?php }?><div class="listViewActionsDiv row mt-2 mb-2"><div class="<?php if (!empty($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value)) {?>col-md-5<?php } else { ?>col-md-8<?php }?> btn-toolbar"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
if ($_smarty_tpl->tpl_vars['LINK']->value->getLabel()) {
$_smarty_tpl->_assignInScope('LABEL', \App\Language::translate($_smarty_tpl->tpl_vars['LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));
}?><button type="button" title="<?php if ($_smarty_tpl->tpl_vars['LINK']->value->getLabel()) {
echo $_smarty_tpl->tpl_vars['LABEL']->value;
}?>"class="btn<?php if ($_smarty_tpl->tpl_vars['LINK']->value->getClassName()) {?> <?php echo $_smarty_tpl->tpl_vars['LINK']->value->getClassName();
} else { ?> btn-light<?php }?> <?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('modalView')) {?>js-show-modal<?php }?>"<?php if ($_smarty_tpl->tpl_vars['LINK']->value->getUrl()) {
if (stripos($_smarty_tpl->tpl_vars['LINK']->value->getUrl(),'javascript:') === 0) {?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LINK']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?> onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['LINK']->value->getUrl();?>
"'<?php }
}
if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata') != '' && is_array($_smarty_tpl->tpl_vars['LINK']->value->get('linkdata'))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINK']->value->get('linkdata'), 'DATA', false, 'NAME');
$_smarty_tpl->tpl_vars['DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['DATA']->value) {
$_smarty_tpl->tpl_vars['DATA']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['LINK']->value->get('linkicon')) {?><span class="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->get('linkicon');?>
"></span><?php }
if ($_smarty_tpl->tpl_vars['LINK']->value->getLabel() && $_smarty_tpl->tpl_vars['LINK']->value->get('showLabel') == 1) {?>&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</strong><?php }?></button><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php if (!empty($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value)) {?><div class="col-md-3 btn-toolbar marginLeftZero"><select class="select2 form-control" id="moduleFilter" data-placeholder="<?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-select="allowClear"><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option <?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) && $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected="" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?><div class="col-12 col-sm-4 d-flex flex-row-reverse"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }?><div class="clearfix"></div><div class="listViewContentDiv listViewPageDiv" id="listViewContents"><!-- /tpl-Settings-AutomaticAssignment-ListViewHeader -->
<?php }
}
