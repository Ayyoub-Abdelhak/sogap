<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:47:06
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PickListDependency\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585a16a1dcda8_97643239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3adb4188d6b802e37545a9dd6a4a6cb57bb67f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PickListDependency\\ListViewHeader.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585a16a1dcda8_97643239 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-PickListDependency-ListViewHeader --><div><div class="o-breadcrumb widget_header row"><div class="col-12 d-flex"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php if (!\App\YetiForce\Register::isRegistered()) {?><div class="col-md-12"><div class="alert alert-danger"><span class="yfi yfi-yeti-register-alert color-red-600 u-fs-5x mr-4 float-left"></span><h1 class="alert-heading"><?php echo \App\Language::translate('LBL_YETIFORCE_NOT_REGISTRATION_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h1><?php echo \App\Language::translate('LBL_YETIFORCE_NOT_REGISTRATION_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php } else { ?><div class="listViewActionsDiv row mt-2 mb-2"><div class="<?php if (!empty($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value)) {?>col-md-5<?php } else { ?>col-md-8<?php }?> btn-toolbar"><?php
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_DATA', false, 'VALUE_ID');
$_smarty_tpl->tpl_vars['MODULE_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VALUE_ID']->value => $_smarty_tpl->tpl_vars['MODULE_DATA']->value) {
$_smarty_tpl->tpl_vars['MODULE_DATA']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_DATA']->value['name'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) && $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_DATA']->value['name']) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_DATA']->value['tablabel'],$_smarty_tpl->tpl_vars['MODULE_DATA']->value['name']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?><div class="col-12 col-sm-4 d-flex flex-row-reverse"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php }?><div class="clearfix"></div><div class="listViewContentDiv listViewPageDiv" id="listViewContents"><!-- /tpl-Settings-PickListDependency-ListViewHeader -->
<?php }
}
