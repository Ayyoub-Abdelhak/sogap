<?php
/* Smarty version 4.2.0, created on 2024-07-08 16:26:39
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\SummaryCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_668c052f573583_33846852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e00f1eec55d4249a5c97105966b124c9a19b553a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\SummaryCategory.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668c052f573583_33846852 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-Widget-SummaryCategory --><?php ob_start();
echo \App\Layout::getUniqueId(($_smarty_tpl->tpl_vars['WIDGET']->value['id']).('_'));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable1);?><div class="tpl-Detail-Widget-SummaryCategory c-detail-widget c-detail-widget--summmary-category mb-1 js-detail-widget recordDetails" data-js="container"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] != ' ' && $_smarty_tpl->tpl_vars['WIDGET']->value['label'] != '') {?><div class="c-detail-widget__header js-detail-widget-header collapsed" data-js="container|value"><div class="c-detail-widget__header__container d-flex align-items-center py-1 w-100"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse"data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="u-transform_rotate-180deg mdi mdi-chevron-down" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div></div></div><?php }?><div class="c-detail-widget__content js-detail-widget-collapse js-detail-widget-content collapse multi-collapse" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-js="container|value"><div class="px-0"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD']->value->getSummaryInfo(), 'SUMMARY_CATEGORY');
$_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->value) {
$_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->do_else = false;
?><div class="d-flex text-center o-summary-category__row mb-2 px-0"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->value, 'FIELD_VALUE');
$_smarty_tpl->tpl_vars['FIELD_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_VALUE']->value) {
$_smarty_tpl->tpl_vars['FIELD_VALUE']->do_else = false;
?><div class="card col mx-1 px-0" data-reference="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value['reference'];?>
"><div class="card-header p-1"><label class="card-text small text-md-nowrap"><?php if ((isset($_smarty_tpl->tpl_vars['FIELD_VALUE']->value['icon']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value['icon'];?>
 mr-1"></span><?php }?><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_VALUE']->value['name'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></label></div><div class="card-body bg-light rounded px-0 pt-1 pb-2 d-flex align-items-center justify-content-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_VALUE']->value['data'], 'DATA');
$_smarty_tpl->tpl_vars['DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DATA']->value) {
$_smarty_tpl->tpl_vars['DATA']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['FIELD_VALUE']->value['type'])) && $_smarty_tpl->tpl_vars['FIELD_VALUE']->value['type'] == 'badge') {?><div class="col px-1"><div class="px-0"><div class="card-text small"><?php echo $_smarty_tpl->tpl_vars['DATA']->value['label'];?>
</div><div class="card-text mt-1"><a class="badge <?php echo $_smarty_tpl->tpl_vars['DATA']->value['class'];?>
 px-2 u-fs-lg" <?php if ((isset($_smarty_tpl->tpl_vars['DATA']->value['badgeLink']))) {?> href="<?php echo $_smarty_tpl->tpl_vars['DATA']->value['badgeLink'];?>
" <?php }?>><?php echo $_smarty_tpl->tpl_vars['DATA']->value['value'];?>
</a></div></div></div><?php } else { ?><label class="card-text small text-md-nowrap text-center"><?php if (!empty($_smarty_tpl->tpl_vars['DATA']->value)) {
echo $_smarty_tpl->tpl_vars['DATA']->value;
} else { ?>0<?php }?></label><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><!-- /tpl-Base-Detail-Widget-SummaryCategory -->
<?php }
}
