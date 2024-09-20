<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:24:14
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\CurrenciesModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65859c0eb9efd1_11640058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf13a3fc2effda15c40299bda63bcf67e63cda1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\CurrenciesModal.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65859c0eb9efd1_11640058 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-Edit-CurrenciesModal js-currencies-modal modal fade" tabindex="-1" data-js="container"><div class="modal-dialog modal-lg"><div class="modal-content" data-js="container"><div class="modal-header"><h5 class="modal-title"><span class="adminIcon-currencies mr-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><table class="table table-bordered"><tr class="text-center"><td><strong><?php echo \App\Language::translate('LBL_CURRENCY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></td><td><strong><?php echo \App\Language::translate('LBL_PRICE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></td><td><strong><?php echo \App\Language::translate('LBL_CONVERSION_RATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></td><td><strong><?php echo \App\Language::translate('LBL_RESET_PRICE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></td><td><strong><?php echo \App\Language::translate('LBL_BASE_CURRENCY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></td></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRICE_DETAILS']->value, 'ITEM', false, 'CURRENCY_ID');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY_ID']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-currency-id="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
" data-currency-symbol="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['symbol'];?>
"><td class="align-middle text-nowrap"><span class="d-flex justify-content-between align-items-center"><span><span class="js-currency-name" data-js="text"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM']->value['currencyName']);?>
<span class="ml-1">(<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['symbol'];?>
)</span></span></span><span class="ml-1"><input type="checkbox" value="1" id="cur_<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
_check"class="small float-right js-enable-currency" data-js="change"></span></span></td><td class="align-middle"><div class="row justify-content-center"><input name="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
" type="text" value=""size="10" id="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
"class="col-md-9 js-format-numer js-converted-price form-control"data-validation-engine="validate[funcCall[Vtiger_Currency_Validator_Js.invokeValidation]]"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ITEM']->value['fieldInfo']));?>
"data-js="value" disabled="disabled" /></div></td><td class="align-middle"><div class="row justify-content-center"><input name="currencies[<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
][rate]"value="<?php echo App\Fields\Double::formatToDisplay($_smarty_tpl->tpl_vars['ITEM']->value['conversionRate'],false);?>
"class="col-md-9 js-conversion-rate form-control" type="text" size="10" readonly="readonly" disabled="disabled"></div></td><td class="align-middle"><div class="row justify-content-center"><button type="button" class="btn btn-light js-currency-reset resetButton" id="cur_reset<?php echo $_smarty_tpl->tpl_vars['CURRENCY_ID']->value;?>
"value="<?php echo \App\Language::translate('LBL_RESET',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"data-js="click"><span class="fas fa-undo mr-1"></span><?php echo \App\Language::translate('LBL_RESET',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></td><td class="align-middle"><div class="row justify-content-center"><input name="baseCurrencyRadio" value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
"class="js-base-currency" type="radio" disabled="disabled"title="<?php echo \App\Language::translate('LBL_BASE_CURRENCY');?>
"data-js="checked" /></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></div></div></div>
<?php }
}
