<?php
/* Smarty version 4.2.0, created on 2024-05-10 17:58:13
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\ModuleManager\BodyHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e5225d20328_73667657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a29498abf8221e0b9587c0e26de4879a9e2e2663' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\ModuleManager\\BodyHeader.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e5225d20328_73667657 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-BodyHeader --><?php $_smarty_tpl->_assignInScope('count', 0);?><header class="navbar navbar-expand-md navbar-dark fixed-top px-2 js-header c-header" data-js="height"><div class="o-navbar__left d-inline-flex"><div class="rightHeaderBtnMenu"><div class="quickAction"><a class="btn btn-light c-header__btn ml-0 js-sidebar-btn" role="button" href="#" data-js="click" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bars fa-fw" title="<?php echo \App\Language::translate('LBL_MENU');?>
"></span></a></div></div><?php $_smarty_tpl->_assignInScope('VERIFY', \App\YetiForce\Shop::verify());
if ($_smarty_tpl->tpl_vars['VERIFY']->value) {?><a class="d-flex align-items-center text-warning mr-2 js-popover-tooltip" data-content="<?php echo $_smarty_tpl->tpl_vars['VERIFY']->value;?>
" aria-label="<?php echo \App\Language::translate('LBL_YETIFORCE_SHOP');?>
"<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?> href="index.php?module=YetiForce&parent=Settings&view=Shop" <?php } else { ?> href="#" <?php }?>><span class="yfi yfi-shop-alert fa-2x"></span></a><?php }
if (!\App\YetiForce\Register::verify(true)) {
if (\App\Security\AdminAccess::isPermitted('Companies')) {
ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('INFO_REGISTRATION_ERROR', "<a href='index.php?module=Companies&parent=Settings&view=List&displayModal=online'>".$_prefixVariable1."</a>");
} else {
$_smarty_tpl->_assignInScope('INFO_REGISTRATION_ERROR', \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
}?><a class="d-flex align-items-center text-center text-warning p-0 text-danger js-popover-tooltip c-header__btn" role="button" data-content="<?php echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['INFO_REGISTRATION_ERROR']->value);?>
"title="<?php echo \App\Purifier::encodeHtml('<span class="yfi yfi-yeti-register-alert mr-1"></span>');
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"<?php if (\App\Security\AdminAccess::isPermitted('Companies')) {?>href="index.php?parent=Settings&module=Companies&view=List&displayModal=online"<?php } else { ?>href="#"<?php }?>><span class="yfi yfi-yeti-register-alert fa-2x"></span></a><?php }?></div><div class="o-navbar__right ml-auto d-inline-flex flex-sm-nowrap"><?php if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value === 'Settings') {?><div class="mr-xxl-4 d-flex flex-sm-nowrap ml-4"><a class="btn btn-light c-header__btn ml-2" title="YetiForce Documentation" role="button" href="https://doc.yetiforce.com" target="_blank" rel="noreferrer noopener"><span class="mdi mdi-book-open-page-variant"></span></a><a class="btn btn-light c-header__btn ml-2" title="<?php echo \App\Language::translate('LBL_YETIFORCE_ASSISTANCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" role="button" href="index.php?module=YetiForce&parent=Settings&view=Shop&category=Support" target="_blank"><span class="far fa-life-ring fa-fw"></span></a><a class="btn btn-light c-header__btn ml-2" title="<?php echo \App\Language::translate('LBL_YETIFORCE_ISSUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" role="button" href="https://github.com/YetiForceCompany/YetiForceCRM/issues" target="_blank" rel="noreferrer noopener"><span class="fas fa-bug fa-fw"></span></a><a class="btn btn-light c-header__btn ml-2 js-show-modal" title="YetiForceCRM" role="button" data-url="index.php?module=AppComponents&view=YetiForceDetailModal" data-js="click"><span class="fas fa-info-circle fa-fw"></span></a></div><?php }?><nav class="actionMenu" aria-label="<?php echo \App\Language::translate("QUICK_ACCESS_MENU");?>
"><a class="btn btn-light c-header__btn ml-2 c-header__btn--mobile js-quick-action-btn" href="#" data-js="click" role="button" aria-expanded="false" aria-controls="o-action-menu__container"><span class="fas fa-ellipsis-h fa-fw" title="<?php echo \App\Language::translate('LBL_ACTION_MENU');?>
"></span></a><div class="o-action-menu__container d-flex flex-md-nowrap flex-column flex-md-row" id="o-action-menu__container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU_HEADER_LINKS']->value, 'obj', false, 'index');
$_smarty_tpl->tpl_vars['obj']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['obj']->value) {
$_smarty_tpl->tpl_vars['obj']->do_else = false;
if ($_smarty_tpl->tpl_vars['obj']->value->linktype == 'HEADERLINK') {
$_smarty_tpl->_assignInScope('HREF', '#');
$_smarty_tpl->_assignInScope('ICON_PATH', $_smarty_tpl->tpl_vars['obj']->value->getIconPath());
$_smarty_tpl->_assignInScope('LINK', $_smarty_tpl->tpl_vars['obj']->value->convertToNativeLink());
$_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['obj']->value->getHeaderIcon());
$_smarty_tpl->_assignInScope('TITLE', $_smarty_tpl->tpl_vars['obj']->value->getLabel());
$_smarty_tpl->_assignInScope('CHILD_LINKS', $_smarty_tpl->tpl_vars['obj']->value->getChildLinks());
if (!empty($_smarty_tpl->tpl_vars['LINK']->value)) {
$_smarty_tpl->_assignInScope('HREF', $_smarty_tpl->tpl_vars['LINK']->value);
}?><div class="o-action-menu__item"><a class="c-header__btn ml-2 btn btn js-popover-tooltip <?php if (strrpos($_smarty_tpl->tpl_vars['obj']->value->getClassName(),"btn-") === false) {?>btn-light <?php echo $_smarty_tpl->tpl_vars['obj']->value->getClassName();
} else {
echo $_smarty_tpl->tpl_vars['obj']->value->getClassName();
}?> <?php if (!empty($_smarty_tpl->tpl_vars['CHILD_LINKS']->value)) {?>dropdownMenu<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['HREF']->value;?>
" data-placement="bottom"role="button" data-js="popover" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['obj']->value->linkdata)) && $_smarty_tpl->tpl_vars['obj']->value->linkdata && is_array($_smarty_tpl->tpl_vars['obj']->value->linkdata)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->linkdata, 'DATA_VALUE', false, 'DATA_NAME');
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DATA_NAME']->value => $_smarty_tpl->tpl_vars['DATA_VALUE']->value) {
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['DATA_NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA_VALUE']->value;?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php if ($_smarty_tpl->tpl_vars['ICON']->value) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
"></span><span class="c-header__label--sm-down"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['ICON_PATH']->value) {?><img src="<?php echo $_smarty_tpl->tpl_vars['ICON_PATH']->value;?>
" alt="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TITLE']->value);?>
" /><?php }?></a><?php if (!empty($_smarty_tpl->tpl_vars['CHILD_LINKS']->value)) {?><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHILD_LINKS']->value, 'obj', false, 'index');
$_smarty_tpl->tpl_vars['obj']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['obj']->value) {
$_smarty_tpl->tpl_vars['obj']->do_else = false;
if ($_smarty_tpl->tpl_vars['obj']->value->getLabel() == NULL) {?><li class="dropdown-divider"></li><?php } else {
$_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['obj']->value->getId());
$_smarty_tpl->_assignInScope('href', $_smarty_tpl->tpl_vars['obj']->value->getUrl());
$_smarty_tpl->_assignInScope('label', $_smarty_tpl->tpl_vars['obj']->value->getLabel());
$_smarty_tpl->_assignInScope('onclick', '');
if (stripos($_smarty_tpl->tpl_vars['obj']->value->getUrl(),'javascript:') === 0) {
$_smarty_tpl->_assignInScope('onclick', ("onclick=").($_smarty_tpl->tpl_vars['href']->value));
$_smarty_tpl->_assignInScope('href', "javascript:;");
}?><li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" target="<?php echo $_smarty_tpl->tpl_vars['obj']->value->target;?>
" <?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
id="menubar_item_right_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['label']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['obj']->value->linkdata && is_array($_smarty_tpl->tpl_vars['obj']->value->linkdata)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obj']->value->linkdata, 'DATA_VALUE', false, 'DATA_NAME');
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DATA_NAME']->value => $_smarty_tpl->tpl_vars['DATA_VALUE']->value) {
$_smarty_tpl->tpl_vars['DATA_VALUE']->do_else = false;
?>data-<?php echo $_smarty_tpl->tpl_vars['DATA_NAME']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['DATA_VALUE']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['label']->value);?>
</a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></nav></div></header><!-- /tpl-Base-BodyHeader -->
<?php }
}
