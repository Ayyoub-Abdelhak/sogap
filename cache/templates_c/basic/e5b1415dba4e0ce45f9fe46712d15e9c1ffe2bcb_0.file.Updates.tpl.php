<?php
/* Smarty version 4.2.0, created on 2023-12-19 17:02:55
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\Updates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581beaf5b5233_04209102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5b1415dba4e0ce45f9fe46712d15e9c1ffe2bcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\Updates.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581beaf5b5233_04209102 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-Widget-Updates --><?php ob_start();
echo \App\Layout::getUniqueId(($_smarty_tpl->tpl_vars['WIDGET']->value['id']).('_'));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable1);?><div class="tpl-Detail-Widget-Updates c-detail-widget js-detail-widget" data-js="container"><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['url']);?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['type'];?>
"><div class="c-detail-widget__header js-detail-widget-header collapsed" data-js="container|value"><div class="c-detail-widget__header__container d-flex align-items-center py-1 pr-3"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse" data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="u-transform_rotate-180deg mdi mdi-chevron-down" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0 modCT_<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['moduleBaseName'];?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench"></i></div></button><div class="u-hidden-block items-center js-comment-actions"><?php if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']))) {?><div class="btn-group btn-group-toggle ml-auto" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="condition-option1" data-js="change" data-on-val="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['on'];?>
" data-urlparams="whereCondition" autocomplete="off" checked> <span class="fas fa-redo" title="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeaderLables']['on'];?>
"></span></label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="condition-option2" data-js="change" data-off-val="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['off'];?>
" data-urlparams="whereCondition" autocomplete="off"><span class="fas fa-history" title="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeaderLables']['off'];?>
"></span></label></div><?php }
if ($_smarty_tpl->tpl_vars['WIDGET']->value['newChanege'] && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isPermitted('ReviewingUpdates') && $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['USER_MODEL']->value->getRealId()) {?><div class="btn-group"><button id="btnChangesReviewedOn" type="button" class="btn btn-success btn-sm btnChangesReviewedOn ml-1" title="<?php echo \App\Language::translate('BTN_CHANGES_REVIEWED_ON',$_smarty_tpl->tpl_vars['WIDGET']->value['moduleBaseName']);?>
"><span class="far fa-check-circle"></span></button></div><?php }?></div></div></div></div><div class="c-detail-widget__content js-detail-widget-collapse js-detail-widget-content collapse multi-collapse" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-js="container|value"></div></div></div><!-- /tpl-Base-Detail-Widget-Updates -->
<?php }
}
