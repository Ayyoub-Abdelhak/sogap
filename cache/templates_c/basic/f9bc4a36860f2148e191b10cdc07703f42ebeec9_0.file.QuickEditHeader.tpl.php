<?php
/* Smarty version 4.2.0, created on 2023-12-28 21:15:25
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\QuickEditHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658dd75db1d154_28372908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9bc4a36860f2148e191b10cdc07703f42ebeec9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\QuickEditHeader.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658dd75db1d154_28372908 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-QuickEditHeader --><div class=" modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static<?php }?>" tabindex="-1" data-js="data"role="dialog" <?php
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
><form class="form-horizontal recordEditView" name="QuickEdit" method="post" action="index.php" data-module-name="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><div class="modal-header align-items-center form-row d-flex justify-content-between py-2<?php if ((isset($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass))) {?> <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass;
}?>"><div class="col-xl-6 col-12"><h5 class="modal-title form-row text-center text-xl-left mb-2 mb-xl-0"><span class="col-12"><?php if ($_smarty_tpl->tpl_vars['MODAL_TITLE']->value) {?><strong class="mr-1"><?php echo $_smarty_tpl->tpl_vars['MODAL_TITLE']->value;?>
</strong><?php } else { ?><span class="yfi yfi-quick-creation mx-1"></span><strong class="mr-1"><?php echo \App\Language::translate('LBL_QUICK_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</strong><?php }?><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
 mx-1"></span><strong><?php echo \App\Language::translate("SINGLE_".((string)$_smarty_tpl->tpl_vars['MODULE_NAME']->value),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></span></h5></div><div class="col-xl-6 col-12 text-center text-xl-right"><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RecordCollector') && !empty($_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR'])) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit/RecordCollectors.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SHOW_BTN_LABEL'=>1,'RECORD_COLLECTOR'=>$_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['EDIT_VIEW_RECORD_COLLECTOR']), 0, true);
}
if (!empty($_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKEDIT_VIEW_HEADER'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKEDIT_VIEW_HEADER'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'quickcreateViewHeader','CLASS'=>'display-block-md','TABINDEX'=>Vtiger_Field_Model::$tabIndexLastSeq), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><button class="btn btn-success mr-1" type="submit" tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" title="<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><strong><span class="fas fa-check"></span></strong></button><button class="cancelLink btn btn-danger" tabindex="<?php echo Vtiger_Field_Model::$tabIndexLastSeq;?>
" data-dismiss="modal" type="button" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span class="fas fa-times"></span></button></div></div><!-- /tpl-Base-Modals-QuickEditHeader -->
<?php }
}
