<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:25
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\Activities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658191553e2404_25824316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7310ddaa63ac3123d73bfb84cc50f3dd9087f68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\Activities.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658191553e2404_25824316 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-Widget-Activities --><?php ob_start();
echo \App\Layout::getUniqueId(($_smarty_tpl->tpl_vars['WIDGET']->value['id']).('_'));
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable5);?><div class="c-detail-widget js-detail-widget activityWidgetContainer" data-js="container"><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['url']);?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
"><div class="c-detail-widget__header js-detail-widget-header collapsed" data-js="container|value"><div class="c-detail-widget__header__container d-flex w-100 align-items-center py-1"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse"data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="u-transform_rotate-180deg mdi mdi-chevron-down" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0 modCT_Calendar" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php if (empty($_smarty_tpl->tpl_vars['WIDGET']->value['label'])) {
echo App\Language::translate('LBL_ACTIVITIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
} else {
echo App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></h5></div><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench q-icon"></i></div></button><div class="u-hidden-block items-center js-comment-actions"><?php if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']))) {?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="options-option1" data-js="change" data-on-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"data-params="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array('orderby'=>array('date_start'=>'ASC','time_start'=>'ASC'))));?>
"data-on-val="<?php if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']['on']))) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']['on']);
}?>"data-basic-text="<?php echo App\Language::translate('LBL_CURRENT');?>
" autocomplete="off" checked="checked" data-urlparams="search_params"><?php echo App\Language::translate('LBL_CURRENT');?>
</label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="options-option2" data-js="change" data-basic-text="<?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-text="data-off-text <?php echo App\Language::translate('LBL_HISTORY');?>
"data-params="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array('orderby'=>array('date_start'=>'DESC','time_start'=>'DESC'))));?>
"data-off-val="<?php if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']['off']))) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchTypeInHeader']['off']);
}?>"autocomplete="off" data-urlparams="search_params"> <?php echo App\Language::translate('LBL_HISTORY');?>
</label></div><?php }
if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><button class="btn btn-sm btn-light addButton createActivity" data-url="sourceModule=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
&sourceRecord=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
&relationOperation=true"type="button" title="<?php echo App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-plus"></span></button><?php }?></div></div></div></div><div class="c-detail-widget__content js-detail-widget-collapse js-detail-widget-content collapse multi-collapse" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-js="container|value"></div></div></div><!-- /tpl-Base-Detail-Widget-Activities -->
<?php }
}
