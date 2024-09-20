<?php
/* Smarty version 4.2.0, created on 2024-02-12 13:03:31
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\AdvancedPermission\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65ca0913cdf819_37696828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05925da6fa3a9f42ead4cfc161b53d218b3c4172' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\AdvancedPermission\\ListViewHeader.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca0913cdf819_37696828 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-AdvancedPermission-ListViewHeader"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php if (!\App\Config::security('PERMITTED_BY_ADVANCED_PERMISSION')) {?><div class="alert alert-block alert-danger fade in show"><button type="button" class="close" data-dismiss="alert">×</button><h4 class="alert-heading"><?php echo \App\Language::translate('ERR_INACTIVE_ALERT_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><p><?php echo \App\Language::translate('ERR_INACTIVE_ALERT_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><?php }
if (!\App\Config::security('CACHING_PERMISSION_TO_RECORD')) {?><div class="alert alert-block alert-danger fade in show"><h4 class="alert-heading"><?php echo \App\Language::translate('ERR_INACTIVE_ALERT_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><p><?php echo \App\Language::translate('ERR_INACTIVE_CACHING_PERM_ALERT_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><?php }?><div class="listViewActionsDiv my-1 row"><div class="col-md-8 btn-toolbar"><?php if (\App\Config::security('CACHING_PERMISSION_TO_RECORD')) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LISTVIEW_BASICACTION');
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->do_else = false;
?><button class="btn btn-success addButton mr-1" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:') === 0) {?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?> onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"'<?php }?>><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><div class="col-md-4 d-flex flex-row-reverse"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="clearfix"></div><div class="listViewContentDiv listViewPageDiv" id="listViewContents">
<?php }
}
