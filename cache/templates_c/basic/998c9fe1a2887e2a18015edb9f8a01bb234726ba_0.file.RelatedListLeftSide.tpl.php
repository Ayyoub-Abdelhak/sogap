<?php
/* Smarty version 4.2.0, created on 2024-01-16 12:40:19
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RelatedListLeftSide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a66b236354f1_83232743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '998c9fe1a2887e2a18015edb9f8a01bb234726ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RelatedListLeftSide.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a66b236354f1_83232743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'LINKS_BUTTONS' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\998c9fe1a2887e2a18015edb9f8a01bb234726ba_0.file.RelatedListLeftSide.tpl.php',
    'uid' => '998c9fe1a2887e2a18015edb9f8a01bb234726ba',
    'call_name' => 'smarty_template_function_LINKS_BUTTONS_18325006165a66b234145b6_07590429',
  ),
));
?><!-- tpl-Base-RelatedListLeftSide --><?php if (!empty($_smarty_tpl->tpl_vars['IS_FAVORITES']->value)) {
$_smarty_tpl->_assignInScope('RECORD_IS_FAVORITE', (int)in_array($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId(),$_smarty_tpl->tpl_vars['FAVORITES']->value));?><div><a class="favorites btn btn-light btn-sm" data-state="<?php echo $_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value;?>
"><span title="<?php echo \App\Language::translate('LBL_REMOVE_FROM_FAVORITES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="fas fa-star  <?php if (!$_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value) {?>d-none<?php }?>"></span><span title="<?php echo \App\Language::translate('LBL_ADD_TO_FAVORITES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="far fa-star  <?php if ($_smarty_tpl->tpl_vars['RECORD_IS_FAVORITE']->value) {?>d-none<?php }?>"></span></a></div><?php }
$_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getRecordRelatedListViewLinksLeftSide($_smarty_tpl->tpl_vars['VIEW_MODEL']->value));
$_smarty_tpl->_assignInScope('NEXT_LINKS', array());
if ((isset($_smarty_tpl->tpl_vars['LINKS']->value['BUTTONS']))) {
$_smarty_tpl->_assignInScope('NEXT_LINKS', $_smarty_tpl->tpl_vars['LINKS']->value['BUTTONS']);
$_smarty_tpl->_assignInScope('LINKS', array_diff_key($_smarty_tpl->tpl_vars['LINKS']->value,array('BUTTONS'=>'')));
}
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'LINKS_BUTTONS', array('LINKS'=>$_smarty_tpl->tpl_vars['LINKS']->value), true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEXT_LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'LINKS_BUTTONS', array('LINKS'=>array($_smarty_tpl->tpl_vars['LINK']->value)), true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (App\Config::module('ModTracker','UNREVIEWED_COUNT') && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isPermitted('ReviewingUpdates') && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isTrackingEnabled() && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><div><a href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getUpdatesUrl();?>
" class="unreviewed alignMiddle d-none"aria-label="<?php echo \App\Language::translate('LBL_NOTIFICATIONS');?>
"><span class="badge bgDanger c-badge--md all" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
"aria-label="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
"></span><span class="badge bgBlue c-badge--md mail noLeftRadius noRightRadius" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
"aria-label="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
"></span></a></div><?php }?><!-- /tpl-Base-RelatedListLeftSide -->
<?php }
/* smarty_template_function_LINKS_BUTTONS_18325006165a66b234145b6_07590429 */
if (!function_exists('smarty_template_function_LINKS_BUTTONS_18325006165a66b234145b6_07590429')) {
function smarty_template_function_LINKS_BUTTONS_18325006165a66b234145b6_07590429(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('LINKS'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
$_smarty_tpl->_assignInScope('ONLY_ONE', count($_smarty_tpl->tpl_vars['LINKS']->value) == 1);?><div class="actions"><?php if ($_smarty_tpl->tpl_vars['ONLY_ONE']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="dropright u-remove-dropdown-icon"><button class="btn btn-sm btn-light toolsAction dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-wrench" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ACTIONS');?>
</span></button><div class="dropdown-menu" aria-label="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div><?php }
}}
/*/ smarty_template_function_LINKS_BUTTONS_18325006165a66b234145b6_07590429 */
}
