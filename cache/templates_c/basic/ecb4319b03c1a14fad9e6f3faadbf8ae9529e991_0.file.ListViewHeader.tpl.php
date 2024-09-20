<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:52:02
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\CronTasks\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d48452c440d8_63236366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecb4319b03c1a14fad9e6f3faadbf8ae9529e991' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\CronTasks\\ListViewHeader.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d48452c440d8_63236366 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-CronTasks-ListViewHeader --><div class=""><div class='widget_header row '><div class="col-md-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-md-6 d-flex justify-content-end align-items-center ml-2 ml-md-0"><div class="mr-3"><a href="https://yetiforce.com/en/knowledge-base/documentation/administrator-documentation/item/enable-cron" target="_blank" class="btn btn-outline-info js-popover-tooltip" data-content="<?php echo App\Language::translate('BTM_GOTO_YETIFORCE_DOCUMENTATION');?>
" rel="noreferrer noopener" data-js="popover"><span class="mdi mdi-book-open-page-variant u-fs-lg"></span></a></div><div><div class="d-flex flex-wrap justify-content-md-end"><span class="mr-1"><?php echo \App\Language::translate('LBL_LAST_START',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</span><strong><?php echo $_smarty_tpl->tpl_vars['LAST_CRON']->value['laststart'];?>
</strong></div><div class="d-flex flex-wrap justify-content-md-end"><span class="mr-1"><?php echo \App\Language::translate('LBL_TOTAL_LAST_DURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</span><strong><?php if ($_smarty_tpl->tpl_vars['LAST_CRON']->value['duration'] === 'running') {?><i class="fas fa-spinner fa-spin text-primary" title="<?php echo \App\Language::translate('LBL_IS_RUNNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i><?php } elseif ($_smarty_tpl->tpl_vars['LAST_CRON']->value['duration'] === 'timeout') {?><i class="fas fa-exclamation-triangle text-danger" title="<?php echo \App\Language::translate('LBL_HAD_TIMEOUT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i><?php } else {
echo $_smarty_tpl->tpl_vars['LAST_CRON']->value['duration'];
}?></strong></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['LAST_CRON']->value['laststart'] === ' - ') {?><div class="alert alert-danger mt-3" role="alert"><h4 class="alert-heading"><span class="fas fa-exclamation-triangle pr-3"></span><?php echo \App\Language::translate('LBL_CRON_HAS_NOT_BEEN_ENABLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><?php }?><div class="listViewActionsDiv row"><div class="<?php if (!empty($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value)) {?>col-md-5<?php } else { ?>col-md-8<?php }?> btn-toolbar"><?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'])) {
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php if (!empty($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value)) {?><div class="col-md-3 btn-toolbar marginLeftZero"><select class="select2 form-control" id="moduleFilter" data-placeholder="<?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-select="allowClear"><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'MODULE_MODEL', false, 'TAB_ID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAB_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['TAB_ID']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?><div class="col-md-4"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="clearfix"></div><div class="listViewContentDiv listViewPageDiv" id="listViewContents"><!-- /tpl-Settings-CronTasks-ListViewHeader -->
<?php }
}
