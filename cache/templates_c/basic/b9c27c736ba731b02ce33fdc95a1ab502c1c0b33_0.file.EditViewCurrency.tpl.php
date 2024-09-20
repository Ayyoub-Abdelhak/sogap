<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:17
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewCurrency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf65b282c6_57214359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9c27c736ba731b02ce33fdc95a1ab502c1c0b33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewCurrency.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf65b282c6_57214359 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewCurrency --><?php $_smarty_tpl->_assignInScope('CURRENCIES', \App\Fields\Currency::getAll(true));
$_smarty_tpl->_assignInScope('SELECTED_CURRENCY', $_smarty_tpl->tpl_vars['ITEM_VALUE']->value);
if ($_smarty_tpl->tpl_vars['SELECTED_CURRENCY']->value == '') {
$_smarty_tpl->_assignInScope('USER_CURRENCY_ID', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_id'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'CURRENCY');
$_smarty_tpl->tpl_vars['CURRENCY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY']->value) {
$_smarty_tpl->tpl_vars['CURRENCY']->do_else = false;
if ($_smarty_tpl->tpl_vars['CURRENCY']->value['id'] == $_smarty_tpl->tpl_vars['USER_CURRENCY_ID']->value) {
$_smarty_tpl->_assignInScope('SELECTED_CURRENCY', $_smarty_tpl->tpl_vars['CURRENCY']->value['id']);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('CURRENCY_PARAMS', $_smarty_tpl->tpl_vars['FIELD']->value->getCurrencyParam($_smarty_tpl->tpl_vars['CURRENCIES']->value));
} else {
$_smarty_tpl->_assignInScope('CURRENCY_PARAMS', $_smarty_tpl->tpl_vars['FIELD']->value->getCurrencyParam($_smarty_tpl->tpl_vars['CURRENCIES']->value,$_smarty_tpl->tpl_vars['ITEM_DATA']->value['currencyparam']));
}?><input <?php if ($_smarty_tpl->tpl_vars['ROW_NO']->value) {?> name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][currencyparam]" <?php }?> type="hidden" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['CURRENCY_PARAMS']->value));?>
"class="js-currencyparam" data-js="" /><select class="select2 js-currency" data-minimum-results-for-search="-1" data-old-value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_CURRENCY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['ROW_NO']->value) {?> name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" <?php }?>title="<?php echo \App\Language::translate('LBL_CURRENCY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'CURRENCY', false, 'count');
$_smarty_tpl->tpl_vars['CURRENCY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['count']->value => $_smarty_tpl->tpl_vars['CURRENCY']->value) {
$_smarty_tpl->tpl_vars['CURRENCY']->do_else = false;
$_smarty_tpl->_assignInScope('CURRENCY_PARAM', $_smarty_tpl->tpl_vars['CURRENCY_PARAMS']->value[$_smarty_tpl->tpl_vars['CURRENCY']->value['id']]);?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value['id'];?>
" class="textShadowNone" data-conversion-rate="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_PARAM']->value['conversion'];?>
"data-conversion-date="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_PARAM']->value['date'];?>
"data-conversion-symbol="<?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol'];?>
"data-base-currency="<?php if ($_smarty_tpl->tpl_vars['CURRENCY']->value['defaultid'] < 0) {?>1<?php } else { ?>0<?php }?>"<?php if ($_smarty_tpl->tpl_vars['SELECTED_CURRENCY']->value == $_smarty_tpl->tpl_vars['CURRENCY']->value['id']) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CURRENCY']->value['currency_code'],'Other.Currency');?>
 (<?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol'];?>
)</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="modelContainer modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-euro-sign mr-1"></span><?php echo \App\Language::translate('LBL_CHANGE_CURRENCY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['CURRENCY_PARAMS']->value == false) {?><div class="alert alert-warning" role="alert"><?php echo \App\Language::translate('LBL_NO_EXCHANGE_RATES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php } else { ?><div class="alert alert-warning" role="alert"><?php echo \App\Language::translate('LBL_CHANGE_CURRENCY_INFO',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><div><?php echo \App\Language::translate('Currency Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:<strong class="currencyName"></strong></div><div><?php echo \App\Language::translate('LBL_EXCHANGE_DATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <strong class="currencyDate"></strong></div><div><div class="input-group"><span class="input-group-prepend"><span class="input-group-text"><?php echo \App\Language::translate('LBL_EXCHANGE_RATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span></span><input type="text" class="form-control currencyRate" value="" aria-label="<?php echo \App\Language::translate('LBL_EXCHANGE_RATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="input-group-append"><span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol'];?>
</span></span></div></div><?php }?><div class="modal-footer"><?php if ($_smarty_tpl->tpl_vars['CURRENCY_PARAMS']->value != false) {?><button class="btn btn-success" type="submit"><strong><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }?><button class="btn btn-danger" type="reset" data-dismiss="modal"><strong><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button></div></div></div></div></div><!-- /tpl-Base-inventoryfields-EditViewCurrency -->
<?php }
}
