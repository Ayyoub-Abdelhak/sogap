<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewUnitPrice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf66681267_75220733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '171f59916087348d6e45c9869bcd482cb4fcf7c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewUnitPrice.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf66681267_75220733 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewUnitPrice --><?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));?><div class="input-group input-group-sm"><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" type="text"data-maximumlength="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getRangeValues();?>
"data-validation-engine="validate[required,funcCall[Vtiger_Currency_Validator_Js.invokeValidation]]"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD']->value->getFieldInfo()));?>
"class="unitPrice smallInputBox form-control form-control-sm" list-info="" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?> /><?php $_smarty_tpl->_assignInScope('PRICEBOOK_MODULE_MODEL', Vtiger_Module_Model::getInstance('PriceBooks'));
if ($_smarty_tpl->tpl_vars['PRICEBOOK_MODULE_MODEL']->value->isPermitted('DetailView')) {?><div class="input-group-append"><button class="btn btn-light js-price-book-modal js-popover-tooltip" data-js="popover|click" data-content="<?php echo \App\Language::translate('PriceBooks',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button"><span class="yfm-PriceBooks" data-popup="Popup" data-module-name="PriceBooks" alt="<?php echo \App\Language::translate('PriceBooks',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" /></button></span></div><?php }?></div><!-- /tpl-Base-inventoryfields-EditViewUnitPrice -->
<?php }
}
