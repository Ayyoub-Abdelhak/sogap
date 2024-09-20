<?php
/* Smarty version 4.2.0, created on 2024-01-03 13:50:17
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\UserViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65955809c17386_59346887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a08cb639c47d65ada435916b594875b8810cc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\UserViewHeader.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65955809c17386_59346887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"/><div class="tpl-Users-UserViewHeader detailViewContainer"><div class="detailViewTitle pt-md-0 pt-1" id="userPageHeader"><div class="o-breadcrumb widget_header row" data-js="container"><div class="col-12 d-flex flex-wrap justify-content-between"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="my-auto o-header-toggle__actions js-header-toggle__actions d-flex flex-column flex-md-row" id="o-view-actions__container"><div class="detailViewButtoncontainer"><div class="btn-toolbar btn-group"><?php if ((isset($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_ADDITIONAL']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_ADDITIONAL'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewBasic','CLASS'=>'c-btn-link--responsive'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if (count($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC']) > 0) {?><div class="btn-group c-btn-link--responsive dropdown"><button class="btn btn-outline-dark dropdown-toggle" id="more-actions-button" data-toggle="dropdown" href="javascript:void(0);" aria-haspopup="true" aria-expanded="false"><strong><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><div class="dropdown-menu" aria-labelledby="more-actions-button"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC'], 'DETAIL_VIEW_LINK');
$_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value) {
$_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->do_else = false;
if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel() == 'Delete') {
if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() && $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId() != $_smarty_tpl->tpl_vars['RECORD']->value->getId()) {?><a class="dropdown-item" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_moreAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel());?>
"href=<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl();?>
><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></a><?php }
} else { ?><a class="dropdown-item <?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getClassName();?>
"id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_moreAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel());?>
"href="#"data-url="<?php if (!empty($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->linkdata['url'])) {
echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->linkdata['url'];
}?>"onclick="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->linkurl;?>
"><span class="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->linkicon;?>
 mr-1"></span><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></a><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div></div></div></div></div></div></div><div class="detailViewInfo userPreferences row"><div class="details col-md-12"><a class="btn btn-outline-dark d-md-none o-header-toggle__actions-btn js-header-toggle__actions-btn mb-1" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-view-actions__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><form id="detailView" data-name-fields="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields()));?>
"><div class="contents">
<?php }
}
