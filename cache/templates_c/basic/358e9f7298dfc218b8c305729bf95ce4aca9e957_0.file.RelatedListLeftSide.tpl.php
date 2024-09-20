<?php
/* Smarty version 4.2.0, created on 2024-07-17 12:22:52
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Documents\RelatedListLeftSide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6697a98cc0ad41_46477347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358e9f7298dfc218b8c305729bf95ce4aca9e957' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Documents\\RelatedListLeftSide.tpl',
      1 => 1702905766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6697a98cc0ad41_46477347 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Documents-RelatedListLeftSide --><div class="btn btn-sm"><?php $_smarty_tpl->_assignInScope('IMAGE_CLASS', Documents_Record_Model::getFileIconByFileType($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('filetype')));?><span class="<?php echo $_smarty_tpl->tpl_vars['IMAGE_CLASS']->value;?>
 fa-lg" title="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('filetype');?>
"><?php if ($_smarty_tpl->tpl_vars['IMAGE_CLASS']->value != 'yfm-Documents') {?>&nbsp;<?php }?></span></div><?php if (!empty($_smarty_tpl->tpl_vars['IS_FAVORITES']->value)) {
$_smarty_tpl->_assignInScope('RECORD_IS_FAVORITE', (int)in_array($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId(),$_smarty_tpl->tpl_vars['FAVORITES']->value));?><div><a class="favorites btn btn-light btn-sm" role="button" data-state="<?php echo $_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value;?>
"><span title="<?php echo \App\Language::translate('LBL_REMOVE_FROM_FAVORITES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fas fa-star <?php if (!$_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value) {?>d-none<?php }?>"></span><span title="<?php echo \App\Language::translate('LBL_ADD_TO_FAVORITES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="far fa-star <?php if ($_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value) {?>d-none<?php }?>"></span></a></div><?php }
$_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getRecordRelatedListViewLinksLeftSide($_smarty_tpl->tpl_vars['VIEW_MODEL']->value));
if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
$_smarty_tpl->_assignInScope('ONLY_ONE', count($_smarty_tpl->tpl_vars['LINKS']->value) == 1);?><div class="actions"><?php if ($_smarty_tpl->tpl_vars['ONLY_ONE']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="dropright u-remove-dropdown-icon"><button class="btn btn-sm btn-light toolsAction dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-wrench" title="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"></span></button><div class="dropdown-menu" aria-label="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div><?php }
if (App\Config::module('ModTracker','UNREVIEWED_COUNT') && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isPermitted('ReviewingUpdates') && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isTrackingEnabled() && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><div><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getUpdatesUrl();?>
" class="unreviewed d-none"><span class="badge badge-danger c-badge--md all" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
"aria-label="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
"></span><span class="badge badge-primary c-badge--md mail" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
"aria-label="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
"></span></a></div><?php }?><!-- /tpl-Documents-RelatedListLeftSide -->
<?php }
}
