<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:02:40
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Companies\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65805100680570_75739476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6d51c08487228c179c25c783ee5834a11ed809b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Companies\\ListViewHeader.tpl',
      1 => 1702905761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65805100680570_75739476 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Companies-ListViewHeader --><div class=""><div class="o-breadcrumb widget_header row"><div class="col-9 d-flex"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php $_smarty_tpl->_assignInScope('LAST_CHECK_TIME', \App\YetiForce\Register::getLastCheckTime());
if (!empty($_smarty_tpl->tpl_vars['LAST_CHECK_TIME']->value)) {?><div class="col-md-3 ml-2 ml-md-0 d-flex justify-content-end align-items-center"><span class="mr-2"><strong><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['LAST_CHECK_TIME']->value);?>
</strong></span><span class="js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_LAST_SCAN_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div><?php } else {
$_smarty_tpl->_assignInScope('LAST_CHECK_ERROR', \App\YetiForce\Register::getLastCheckError());?><div class="col-md-3 ml-2 ml-md-0 d-flex justify-content-end align-items-center"><?php if (!empty($_smarty_tpl->tpl_vars['LAST_CHECK_ERROR']->value)) {?><span class="mr-2"><strong><?php echo \App\Language::translateArgs('LBL_ERROR_MESSAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,\App\Language::translate($_smarty_tpl->tpl_vars['LAST_CHECK_ERROR']->value,'Other:Exceptions'));?>
</strong></span><?php }?><span class="js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_LAST_SCAN_ERROR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-question-circle"></span></span></div><?php }?></div><div class="listViewActionsDiv row mt-2 mb-2"><div class="<?php if (!empty($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value)) {?>col-md-5<?php } else { ?>col-md-8<?php }?> btn-toolbar"><?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="col-12 col-sm-4 d-flex flex-row-reverse"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="clearfix"></div><div class="listViewContentDiv listViewPageDiv" id="listViewContents"><!-- /tpl-Settings-ListViewHeader -->
<?php }
}
