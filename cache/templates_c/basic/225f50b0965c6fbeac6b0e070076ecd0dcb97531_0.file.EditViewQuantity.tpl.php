<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewQuantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf6652bbc0_48156159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '225f50b0965c6fbeac6b0e070076ecd0dcb97531' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewQuantity.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf6652bbc0_48156159 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewQuantity --><?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
$_smarty_tpl->_assignInScope('VALIDATION_ENGINE', 'validate[required,funcCall[Vtiger_NumberUserFormat_Validator_Js.invokeValidation]]');?><div class="input-group input-group-sm"><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" type="text" class="qty smallInputBox form-control form-control-sm"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD']->value->getFieldInfo()));?>
"data-maximumlength="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getRangeValues();?>
" data-validation-engine="<?php echo $_smarty_tpl->tpl_vars['VALIDATION_ENGINE']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
"title="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?> /><?php $_smarty_tpl->_assignInScope('QTY_PARAM', '');
if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value['name'])) && ($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value === 'Products' || $_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value === 'Services')) {
$_smarty_tpl->_assignInScope('REFERENCE_RECORD', Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['ITEM_DATA']->value['name'],$_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value));
if ($_smarty_tpl->tpl_vars['REFERENCE_RECORD']->value && $_smarty_tpl->tpl_vars['REFERENCE_RECORD']->value->has('qty_per_unit')) {
$_smarty_tpl->_assignInScope('QTY_PARAM', $_smarty_tpl->tpl_vars['REFERENCE_RECORD']->value->getDisplayValue('qty_per_unit'));
if (in_array($_smarty_tpl->tpl_vars['REFERENCE_RECORD']->value->getDisplayValue('usageunit'),array('pcs','pack'))) {
$_smarty_tpl->_assignInScope('VALIDATION_ENGINE', 'validate[required,funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation]]');
}
}
}?><div class="input-group-append"><span class="input-group-text js-popover-tooltip qtyParamInfo <?php if (!$_smarty_tpl->tpl_vars['QTY_PARAM']->value) {?>d-none<?php }?>" title="<?php echo \App\Language::translate('Qty/Unit','Products');?>
"data-content="<?php echo $_smarty_tpl->tpl_vars['QTY_PARAM']->value;?>
" data-js="popover"><i class="fas fa-info-circle"></i></span></div></div><!-- /tpl-Base-inventoryfields-EditViewQuantity -->
<?php }
}
