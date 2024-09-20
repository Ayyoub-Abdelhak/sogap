<?php
/* Smarty version 4.2.0, created on 2023-12-19 15:45:12
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\RecordsListHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581ac786d1076_54909180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '601419b3fa0a53c419180826c04ce900e82ade63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\RecordsListHeader.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581ac786d1076_54909180 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Modals-RecordsListHeader modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static<?php }?>" tabindex="-1" data-js="data"role="dialog" <?php
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="modal-header d-flex justify-content-between flex-wrap flex-lg-nowrap"><h5 class="modal-title mr-2 my-auto text-nowrap"><?php if ($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon) {?><span class="<?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon;?>
 mr-2"></span><?php }
echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><div class="d-flex justify-content-center justify-content-sm-between w-100 mt-2 mt-lg-0 mx-lg-2 order-3 order-lg-0 flex-wrap"><div class="mb-2 mb-sm-0 btn-toolbar u-w-sm-down-100"><?php if (!empty($_smarty_tpl->tpl_vars['SWITCH']->value)) {?><div class="mr-2 mb-2 mb-sm-0 <?php if ((isset($_smarty_tpl->tpl_vars['MODAL_PARAMS']->value['hideSwitch'])) && $_smarty_tpl->tpl_vars['MODAL_PARAMS']->value['hideSwitch'] == 'true') {?> d-none <?php }?>"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-outline-primary active"><input class="js-hierarchy-records" data-js="value|change" type="radio" name="hierarchyRecords" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value;?>
" checked=""><?php echo $_smarty_tpl->tpl_vars['SWITCH_ON_TEXT']->value;?>
</label><label class="btn btn-outline-primary"><input class="js-hierarchy-records" data-js="value|change" type="radio" name="hierarchyRecords" value="0"><?php echo App\Language::translate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><a href="#" class="js-popover-tooltip" data-js="popover" title="" data-placement="auto" data-content="<?php echo App\Language::translate('LBL_POPUP_NARROW_DOWN_RECORDS_LIST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"data-original-title="<?php echo App\Language::translate('LBL_POPUP_SWITCH_BUTTON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle ml-1"></span></a></div><?php }
if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value && !empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value)) {?><button class="js-selected-rows btn btn-outline-secondary c-btn-block-sm-down" data-js="click"><strong><span class="fas fa-check mr-2"></span><?php echo App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }?></div><div class="customFilterMainSpan mb-2 mb-sm-0"><?php if (!empty($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value)) {?><select id="customFilter" class="col-md-12"><option value="0" <?php if (empty($_smarty_tpl->tpl_vars['CV_ID']->value)) {?> selected="selected" <?php }?>>&nbsp;<?php echo \App\Language::translate('LBL_SELECT');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value, 'GROUP_CUSTOM_VIEWS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value) {
$_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value, 'CUSTOM_VIEW');
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value) {
$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->do_else = false;
?><option id="filterOptionId_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
"value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
"class="filterOptionId_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
"data-id="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['CV_ID']->value == $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId()) {?> selected="selected" <?php }?>>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getModule()->getName());
if ($_smarty_tpl->tpl_vars['GROUP_LABEL']->value != 'Mine') {?> [ <?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getOwnerName();?>
 ] <?php }?></option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><span class="filterImage"><span class="fas fa-filter"></span></span><?php } else { ?><input type="hidden" value="0" id="customFilter" /><?php }?></div><div class="js-pagination-container" data-js="container"><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Pagination.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('VIEWNAME'=>'recordsList'), 0, true);
?></div></div><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo App\Language::translate('LBL_CANCEL');?>
"><span aria-hidden="true">&times;</span></button></div>
<?php }
}
