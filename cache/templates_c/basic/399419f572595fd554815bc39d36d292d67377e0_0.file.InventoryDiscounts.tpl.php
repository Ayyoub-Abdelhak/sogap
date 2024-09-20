<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:04:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryDiscounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cfc8d4d2b1_43805778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '399419f572595fd554815bc39d36d292d67377e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryDiscounts.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cfc8d4d2b1_43805778 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-InventoryDiscounts --><?php $_smarty_tpl->_assignInScope('AGGREGATION', $_smarty_tpl->tpl_vars['CONFIG']->value['aggregation']);?><div class="modelContainer modal fade"><div class="modal-dialog"><form class="modal-content"><div class="modal-header align-items-center"><span class="mr-2 small"><span class="fas fa-long-arrow-alt-down"></span><span class="fas fa-percent"></span></span><h5 class="modal-title"><?php echo \App\Language::translate('LBL_SELECT_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo \App\Language::translate("SINGLE_".((string)$_smarty_tpl->tpl_vars['MODULE_NAME']->value),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><input type="hidden" class="discountsType" value="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_TYPE']->value;?>
" /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONFIG']->value['discounts'], 'DISCOUNTID');
$_smarty_tpl->tpl_vars['DISCOUNTID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DISCOUNTID']->value) {
$_smarty_tpl->tpl_vars['DISCOUNTID']->do_else = false;
$_smarty_tpl->_assignInScope('DISCOUNT_TYPE_TPL', (("InventoryDiscountsType").($_smarty_tpl->tpl_vars['DISCOUNTID']->value)).(".tpl"));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['DISCOUNT_TYPE_TPL']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (count($_smarty_tpl->tpl_vars['GLOBAL_DISCOUNTS']->value) == 0 && $_smarty_tpl->tpl_vars['GROUP_DISCOUNT']->value == 0 && $_smarty_tpl->tpl_vars['DISCOUNT_TYPE']->value != '0') {?><div class="alert alert-danger" role="alert"><?php echo \App\Language::translate('LBL_NO_DISCOUNTS');?>
</div><?php }?><hr /><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_PRICE_BEFORE_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valueTotalPrice"><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TOTAL_PRICE']->value,null,true);?>
</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</strong></div></div><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_DISCOUNT_IN_TOTAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valueDiscount">0</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</strong></div></div><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_PRICE_AFTER_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valuePrices"><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TOTAL_PRICE']->value,null,true);?>
</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</span></strong></div></div></div><div class="modal-footer"><?php if (count($_smarty_tpl->tpl_vars['GLOBAL_DISCOUNTS']->value) > 0 || $_smarty_tpl->tpl_vars['GROUP_DISCOUNT']->value != 0 || $_smarty_tpl->tpl_vars['DISCOUNT_TYPE']->value == '0' || ($_smarty_tpl->tpl_vars['DISCOUNT_TYPE']->value == '1' && in_array(2,$_smarty_tpl->tpl_vars['CONFIG']->value['discounts']))) {?><button class="btn btn-success js-save-discount" type="button" data-js="click"><strong><span class="fas fa-check mr-2"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><button class="btn btn-danger" type="reset" data-dismiss="modal"><strong><span class="fas fa-times mr-2"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></form></div></div><!-- /tpl-Base-InventoryDiscounts -->
<?php }
}
