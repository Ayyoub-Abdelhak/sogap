<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\PreferenceDetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b119b7f4_29292343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a03e3ccde3af96fe2289dd7139599e54a1cb37ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\PreferenceDetailViewHeader.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b119b7f4_29292343 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-PreferenceDetailViewHeader --><?php $_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="tpl-Users-PreferenceDetailViewHeader detailViewContainer"><div class="detailViewTitle px-2 marginTop5 d-flex flex-column justify-content-lg-between flex-lg-row" id="prefPageHeader"><div class="ml-0 d-flex justify-content-center"><div class="logo pl-0 mt-2 d-flex"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECORD']->value->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
" class="mr-2" alt="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"height="80" align="left"><br /><?php } else { ?><span class="o-detail__icon js-detail__icon yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"></span><?php }?></div><div class="p-0 d-flex flex-column"><div id="myPrefHeading"><h3 class="my-0"><?php echo \App\Language::translate('LBL_MY_PREFERENCES');?>
 </h3></div><div><?php echo \App\Language::translate('LBL_USERDETAIL_INFO',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<strong class="ml-1">"<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"</strong></div></div></div><div class="mr-0 pl-1 py-2 mt-0 detailViewButtoncontainer d-flex justify-content-center"><div class="btn-group btn-toolbar flex-md-nowrap u-w-sm-down-100"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWPREFERENCE'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewBasic','BREAKPOINT'=>'md','CLASS'=>'c-btn-link--responsive'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (count($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC']) > 0) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TEXT_HOLDER'=>'LBL_MORE','LINKS'=>$_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAIL_VIEW_BASIC'],'CLASS'=>'c-btn-link--responsive btn-group','BTN_CLASS'=>' btn-outline-dark'), 0, true);
}?></div></div></div><div class="detailViewInfo px-2 mt-0 userPreferences w-100"><div class="details w-100"><form id="detailView" data-name-fields="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields()));?>
"method="POST"><div class="contents"><!-- /tpl-Users-PreferenceDetailViewHeader -->
<?php }
}
