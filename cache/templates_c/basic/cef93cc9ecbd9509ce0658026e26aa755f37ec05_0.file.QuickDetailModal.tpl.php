<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:54:00
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\QuickDetailModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953cc81cf860_21834866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cef93cc9ecbd9509ce0658026e26aa755f37ec05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\QuickDetailModal.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953cc81cf860_21834866 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-Modals-QuickDetailModal modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static<?php }?>" tabindex="-1" data-js="data"role="dialog" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalData, 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><div class="modal-dialog <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalSize;?>
" role="document"><div class="modal-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_CSS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
?><link rel="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getHref();?>
" /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_SCRIPTS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '<script'; ?>
 type="text/javascript">
					app.registerModalController();
				<?php echo '</script'; ?>
><div class="modal-body col-md-12 js-scrollbar" data-js="perfectscrollbar"><div class="float-right text-xl-right"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>''), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><button class="cancelLink btn btn-sm btn-danger" data-dismiss="modal" type="button" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span class="fas fa-times"></span></button></div><div class="quickDetailContent"><div class="row"><div class="col-md-12"><div class="moduleIcon"><span class="o-detail__icon js-detail__icon yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"></span></div><div class="paddingLeft5px"><h4 class="recordLabel u-text-ellipsis pushDown marginbottomZero" title='<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
'><span class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</span></h4><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value) {?><div class="paddingLeft5px"><span class="muted"><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('assigned_user_id');
$_smarty_tpl->_assignInScope('SHOWNERS', $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('shownerid'));
if ($_smarty_tpl->tpl_vars['SHOWNERS']->value != '') {?><br /><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['SHOWNERS']->value;
}?></span></div><?php }?></div></div></div><div class="row"><div class="col-md-12"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET', false, 'key');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
?><div class="quickDetailWidget"><?php if (!empty($_smarty_tpl->tpl_vars['WIDGET']->value['title'])) {
ob_start();
echo \App\Layout::getUniqueId(($_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['id']).('_'));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable1);?><div class="c-detail-widget js-detail-widget" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['title'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['data']['relation_id']))) {?> data-relation-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['data']['relation_id'];?>
" <?php }?> data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['id'];?>
" data-js="container"><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['url']);?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['title'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['id'];?>
"><div class="c-detail-widget__header js-detail-widget-header collapsed border-bottom-0" data-js="container|value"><div class="c-detail-widget__header__container d-flex align-items-center py-1"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse" data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="true" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="u-transform_rotate-180deg mdi mdi-chevron-down" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['label']) {
$_smarty_tpl->_assignInScope('TITLE', \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
} else {
$_smarty_tpl->_assignInScope('TITLE', $_smarty_tpl->tpl_vars['WIDGET']->value['title']);
}?><h5 class="mb-0 text-truncate modCT_<?php echo \App\Module::getModuleName($_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['tabid']);?>
"><?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>
</h5></div></div></div><div class="c-detail-widget__content js-detail-widget-collapse collapse multi-collapse pt-0" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['widgetData']['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['content'];?>
</div></div></div></div><?php } else { ?><div><?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['content'];?>
</div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div></div></div></div>
<?php }
}
