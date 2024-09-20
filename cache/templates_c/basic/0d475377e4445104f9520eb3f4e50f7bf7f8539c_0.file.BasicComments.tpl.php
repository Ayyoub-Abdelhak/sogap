<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:26
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\BasicComments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819156183899_66711722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d475377e4445104f9520eb3f4e50f7bf7f8539c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\BasicComments.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819156183899_66711722 (Smarty_Internal_Template $_smarty_tpl) {
ob_start();
echo \App\Layout::getUniqueId(($_smarty_tpl->tpl_vars['WIDGET']->value['id']).('_'));
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable7);
$_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']);?><div class="tpl-Detail-Widget-BasicComments c-detail-widget js-detail-widget BasicComments updatesWidgetContainer" data-js=”container”><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['url']);?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
"data-limit="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['limit'];?>
" data-js="data-url|data-type|data-limit"><div class="c-detail-widget__header js-detail-widget-header collapsed" data-js="container|value"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
" /><div class="c-detail-widget__header__container d-flex align-items-center my-1"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse"data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="u-transform_rotate-180deg mdi mdi-chevron-down" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0 modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] == '') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></h5></div><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench q-icon"></i></div></button><div class="u-hidden-block items-center js-comment-actions d-lg-flex"><?php if ($_smarty_tpl->tpl_vars['HIERARCHY']->value !== false && $_smarty_tpl->tpl_vars['HIERARCHY']->value < 2) {?><div class="mr-1"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="js-hierarchy-comments-btn u-text-ellipsis btn-sm mt-1 mt-sm-0 btn btn-outline-primary <?php if (in_array('current',$_smarty_tpl->tpl_vars['HIERARCHY_VALUE']->value)) {?>active<?php }?>"title="<?php echo \App\Language::translate('LBL_COMMENTS_0','ModComments');?>
" data-js="click"><input name="options" type="checkbox" class="js-hierarchy-comments" data-js="val" value="current"<?php if (in_array('current',$_smarty_tpl->tpl_vars['HIERARCHY_VALUE']->value)) {?> checked="checked" <?php }?>autocomplete="off" /><?php echo \App\Language::translate('LBL_COMMENTS_0','ModComments');?>
</label><label class="js-hierarchy-comments-btn u-text-ellipsis btn-sm mt-1 mt-sm-0 btn btn-outline-primary <?php if (in_array('related',$_smarty_tpl->tpl_vars['HIERARCHY_VALUE']->value)) {?>active<?php }?>"title="<?php echo \App\Language::translate('LBL_ALL_RECORDS','ModComments');?>
" data-js="click"><input name="options" type="checkbox" class="js-hierarchy-comments" data-js="val" value="related"<?php if (in_array('related',$_smarty_tpl->tpl_vars['HIERARCHY_VALUE']->value)) {?> checked="checked" <?php }?>autocomplete="off" /><?php echo \App\Language::translate('LBL_ALL_RECORDS','ModComments');?>
</label></div></div><?php }?><div class="input-group input-group-sm"><input type="text" class="js-comment-search form-control" placeholder="<?php echo \App\Language::translate('LBL_COMMENTS_SEARCH','ModComments');?>
"aria-describedby="commentSearchAddon" data-container="widget" data-js="keypress|data"><div class="input-group-append"><button class="btn btn-light js-search-icon" type="button" data-js="click"><span class="fas fa-search fa-fw" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></button></div></div></div></div></div></div><div class="c-detail-widget__content js-detail-widget-collapse js-detail-widget-content collapse multi-collapse" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-js="container|value"></div></div></div>
<?php }
}
