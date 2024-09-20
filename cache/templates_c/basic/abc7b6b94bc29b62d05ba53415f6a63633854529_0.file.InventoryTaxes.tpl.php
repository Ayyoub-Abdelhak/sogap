<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:13:53
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryTaxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585d1e1214247_26526773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abc7b6b94bc29b62d05ba53415f6a63633854529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryTaxes.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585d1e1214247_26526773 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-InventoryTaxes --><?php $_smarty_tpl->_assignInScope('AGGREGATION', $_smarty_tpl->tpl_vars['CONFIG']->value['aggregation']);?><div class="modelContainer modal fade"><div class="modal-dialog"><form class="modal-content"><div class="modal-header align-items-center"><span class="mr-2 small"><span class="fas fa-long-arrow-alt-up"></span><span class="fas fa-percent"></span></span><h5 class="modal-title"><?php echo \App\Language::translate('LBL_SELECT_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><input type="hidden" class="taxsType" value="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_TYPE']->value;?>
" /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONFIG']->value['taxs'], 'TAXID');
$_smarty_tpl->tpl_vars['TAXID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAXID']->value) {
$_smarty_tpl->tpl_vars['TAXID']->do_else = false;
$_smarty_tpl->_assignInScope('TAX_TYPE_TPL', (("InventoryTaxesType").($_smarty_tpl->tpl_vars['TAXID']->value)).(".tpl"));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['TAX_TYPE_TPL']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><hr /><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_TAX_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="taxValue js-tax-value">0</span> %</strong></div></div><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_PRICE_BEFORE_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valueNetPrice"><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TOTAL_PRICE']->value,null,true);?>
</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
 </strong></div></div><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_TAX_IN_TOTAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valueTax" data-js="text">0</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
 </strong></div></div><div class="row"><div class="col-md-6"><?php echo \App\Language::translate('LBL_PRICE_AFTER_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><div class="col-md-6 text-right"><strong><span class="valuePrices"><?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TOTAL_PRICE']->value,null,true);?>
</span> <?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOL']->value;?>
</span></strong></div></div></div><div class="modal-footer"><button class="btn btn-success js-save-taxs" type="button" data-js="click"><strong><span class=" fas fa-check mr-2"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" data-dismiss="modal"><strong><span class="fas fa-times mr-2"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></form></div></div><!-- /tpl-Base-InventoryTaxes -->
<?php }
}
