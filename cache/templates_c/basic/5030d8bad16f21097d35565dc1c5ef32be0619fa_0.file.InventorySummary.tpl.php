<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:19
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\InventorySummary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf672900c1_97475121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5030d8bad16f21097d35565dc1c5ef32be0619fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\InventorySummary.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf672900c1_97475121 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-InventorySummary --><div class="row mb-2"><?php if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('discount') && $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('discountmode')) {?><div class="col-md-4"><div class="card mb-3 mb-md-0 inventorySummaryContainer inventorySummaryDiscounts"><div class="card-header"><div class="form-row"><div class="col-12 col-lg-9 mb-1 p-0 u-text-ellipsis"><span class="mr-1 small"><span class="fas fa-long-arrow-alt-down"></span><span class="fas fa-percent"></span></span><?php echo \App\Language::translate('LBL_DISCOUNTS_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value['discountmode']))) {
$_smarty_tpl->_assignInScope('DISCOUNT_MODE', $_smarty_tpl->tpl_vars['ITEM_DATA']->value['discountmode']);
} else {
$_smarty_tpl->_assignInScope('DISCOUNT_MODE', $_smarty_tpl->tpl_vars['DISCOUNTS_CONFIG']->value['default_mode']);
}?><div class="col-12 col-lg-3 p-0 groupDiscount js-change-discount <?php if ($_smarty_tpl->tpl_vars['DISCOUNT_MODE']->value == 1) {?>d-none<?php }?>"><button type="button" class="btn btn-primary btn-sm c-btn-block-md-down float-right u-white-space-nowrap"><span class="fas fa-sliders-h mr-2"></span><?php echo \App\Language::translate('LBL_SET_GLOBAL_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div><div class="card-body js-panel__body m-0 p-0" data-js="value"><div class="form-group p-1 m-0"><div class="input-group"><input type="text" class="form-control text-right" readonly="readonly" /><div class="input-group-append"><?php if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('currency')) {?><div class="input-group-text currencySymbol"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['currency_symbol'];?>
</div><?php }?></div></div></div></div></div></div><?php }
if (($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('tax') || $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('tax_percent')) && $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('taxmode')) {?><div class="col-md-4"><div class="card mb-3 mb-md-0 inventorySummaryContainer inventorySummaryTaxes"><div class="card-header"><div class="form-row"><div class="col-12 col-lg-9 mb-1 p-0 u-text-ellipsis"><span class="mr-1 small"><span class="fas fa-long-arrow-alt-up"></span><span class="fas fa-percent"></span></span><?php echo \App\Language::translate('LBL_TAX_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value['taxmode']))) {
$_smarty_tpl->_assignInScope('TAX_MODE', $_smarty_tpl->tpl_vars['ITEM_DATA']->value['taxmode']);
} else {
$_smarty_tpl->_assignInScope('TAX_MODE', $_smarty_tpl->tpl_vars['TAXS_CONFIG']->value['default_mode']);
}?><div class="col-12 col-lg-3 p-0 groupTax changeTax <?php if ($_smarty_tpl->tpl_vars['TAX_MODE']->value == 1) {?>d-none<?php }?>"><button type="button" class="btn btn-primary btn-sm float-right c-btn-block-md-down u-white-space-nowrap"><span class="fas fa-sliders-h mr-2"></span><?php echo \App\Language::translate('LBL_SET_GLOBAL_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div><div class="card-body js-panel__body p-0 m-0 js-default-tax" data-js="data-tax-default-value|value" data-tax-default-value="<?php if ($_smarty_tpl->tpl_vars['TAX_DEFAULT']->value) {
echo $_smarty_tpl->tpl_vars['TAX_DEFAULT']->value['value'];
}?>"></div><div class="card-footer js-panel__footer p-1 m-0 " data-js="value"><div class="form-group m-0 p-0"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text percent u-w-85px d-flex justify-content-center"><?php echo \App\Language::translate('LBL_AMOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><input type="text" class="form-control text-right" readonly="readonly" /><div class="input-group-append"><?php if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('currency')) {?><div class="input-group-text currencySymbol"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['currency_symbol'];?>
</div><?php }?></div></div></div></div><div class="d-none"><div class="form-group m-1"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text percent u-w-85px d-flex justify-content-center"></div></div><input type="text" class="form-control text-right" readonly="readonly" /><div class="input-group-append"><?php if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('currency')) {?><div class="input-group-text currencySymbol"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['currency_symbol'];?>
</div><?php }?></div></div></div></div></div></div><div class="col-md-4"><div class="card mb-3 mb-md-0 inventorySummaryContainer inventorySummaryCurrencies"><div class="card-header u-text-ellipsis"><span class="small mr-1"><span class="fas fa-dollar-sign"></span></span><?php echo \App\Language::translate('LBL_CURRENCIES_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="card-body js-panel__body p-0 m-0"></div><div class="card-footer js-panel__footer p-1" data-js="value"><div class="form-group m-0 p-0"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text percent u-w-85px d-flex justify-content-center"><?php echo \App\Language::translate('LBL_AMOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><input type="text" class="form-control text-right" readonly="readonly" /><div class="input-group-append"><?php if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('currency')) {?><div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol'];?>
</div><?php }?></div></div></div></div><div class="d-none"><div class="form-group m-1"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text percent u-w-85px d-flex justify-content-center"></div></div><input type="text" class="form-control text-right" readonly="readonly" /><div class="input-group-append"><?php if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('currency')) {?><div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol'];?>
</div><?php }?></div></div></div></div></div></div><?php }?></div><!-- /tpl-Base-Edit-InventorySummary -->
<?php }
}
