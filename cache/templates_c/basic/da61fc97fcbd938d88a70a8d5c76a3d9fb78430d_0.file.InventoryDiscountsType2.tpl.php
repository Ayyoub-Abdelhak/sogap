<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:04:57
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryDiscountsType2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cfc919d925_20198497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da61fc97fcbd938d88a70a8d5c76a3d9fb78430d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryDiscountsType2.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cfc919d925_20198497 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-InventoryDiscountsType2 --><div class="card js-panel mb-2" data-js="class: js-active"><div class="card-header py-1"><span class="fas fa-percent mr-2"></span><strong><?php echo \App\Language::translate('LBL_CUSTOM_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="individual" class="activeCheckbox"></div></div><div class=" card-body js-panel__body d-none" data-js="class: d-none"><div class="container-fluid"><div class="form-row"><div class="col-md-6 text-center"><div class="radio align-items-center"><input type="radio" name="individualDiscountType" value="percentage" class="individualDiscountType mr-2" data-symbol="%" checked><label><?php echo \App\Language::translate('LBL_PERCENTAGE_DISCOUNTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></div><?php if ($_smarty_tpl->tpl_vars['DISCOUNT_TYPE']->value == '0') {?><div class="col-md-6 text-center"><div class="radio align-items-center"><input type="radio" name="individualDiscountType" value="amount" class="individualDiscountType mr-2  ml-2" data-symbol="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
"><label><?php echo \App\Language::translate('LBL_AMOUNT_DISCOUNTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></div><?php }?></div><div class="row"><div class="input-group individualDiscountContainer"><input type="text" name="individualDiscount" class="form-control individualDiscountValue" value="0" data-validation-engine="validate[required]"><div class="input-group-append"><span class="input-group-text">%</span></div></div></div></div></div></div><!-- /tpl-Base-InventoryDiscountsType2 -->
<?php }
}
