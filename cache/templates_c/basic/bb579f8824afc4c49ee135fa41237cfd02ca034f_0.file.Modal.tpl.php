<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:26:54
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Inventory\Modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65859cae697116_22808385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb579f8824afc4c49ee135fa41237cfd02ca034f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Inventory\\Modal.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65859cae697116_22808385 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Inventory-Modal --><?php $_smarty_tpl->_assignInScope('EDIT_VIEW', true);
$_smarty_tpl->_assignInScope('ID', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId());
if (empty($_smarty_tpl->tpl_vars['ID']->value)) {
$_smarty_tpl->_assignInScope('EDIT_VIEW', false);
}
if ($_smarty_tpl->tpl_vars['TYPE']->value !== 'CreditLimits') {
$_smarty_tpl->_assignInScope('PERCENTAGE', true);
}?><div class="modelContainer modal fade" id="addInventory" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><?php if ($_smarty_tpl->tpl_vars['EDIT_VIEW']->value) {?><h5 class="modal-title"><span class="fa fa-edit u-mr-5px"></span><?php echo \App\Language::translate('LBL_EDITING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PAGE_LABELS']->value['title_single'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php } else { ?><h5 class="modal-title"><span class="fa fa-plus u-mr-5px"></span><?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PAGE_LABELS']->value['title_single'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php }?><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form id="formInventory" class="form-horizontal" method="POST"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" /><div class="modal-body"><div class=""><div class="form-group form-row"><label class="col-md-4 col-form-label u-text-small-bold text-md-right"><?php echo \App\Language::translate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 controls"><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
" class="form-control" placeholder="<?php echo \App\Language::translate('LBL_ENTER_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-validation-engine='validate[required]' /></div></div><?php if (empty($_smarty_tpl->tpl_vars['PERCENTAGE']->value)) {
$_smarty_tpl->_assignInScope('VALIDATOR', 'Vtiger_Integer_Validator_Js.invokeValidation');
} else {
$_smarty_tpl->_assignInScope('VALIDATOR', 'Vtiger_Percentage_Validator_Js.invokeValidation');
}?><div class="form-group form-row"><label class="col-md-4 col-form-label u-text-small-bold text-md-right"><?php echo \App\Language::translate('LBL_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 controls"><div class="input-group"><input type="text" name="value" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getValue();?>
" class="form-control js-format-numer" placeholder="<?php echo \App\Language::translate('LBL_ENTER_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-validation-engine='validate[required,min[0],funcCall[<?php echo $_smarty_tpl->tpl_vars['VALIDATOR']->value;?>
]]' data-js="focusout" /><span class="input-group-append"><span class="input-group-text"><?php if (!empty($_smarty_tpl->tpl_vars['PERCENTAGE']->value)) {?>%<?php } else {
echo $_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol'];
}?></span></span></div></div></div><?php if ($_smarty_tpl->tpl_vars['EDIT_VIEW']->value) {?><div class="form-group form-row"><label class="col-md-4 col-form-label u-text-small-bold text-md-right"><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 controls checkboxForm"><input type="hidden" name="status" value="1" /><input type="checkbox" name="status" value="0" class="status alignBottom" <?php if (!$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getStatus()) {?> checked <?php }?> /><span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_STATUS_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><?php } else { ?><input type="hidden" class="addView" value="true" /><input type="hidden" name="status" value="0" /><?php }
if ($_smarty_tpl->tpl_vars['TYPE']->value == 'Taxes') {?><div class="form-group form-row"><label class="col-md-4 col-form-label u-text-small-bold text-md-right"><?php echo \App\Language::translate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6 controls checkboxForm"><input type="hidden" name="default" value="0" /><input type="checkbox" name="default" value="1" class="status alignBottom" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDefault()) {?> checked <?php }?> /><span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_STATUS_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><?php }?></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div><!-- /tpl-Settings-Inventory-Modal -->
<?php }
}
