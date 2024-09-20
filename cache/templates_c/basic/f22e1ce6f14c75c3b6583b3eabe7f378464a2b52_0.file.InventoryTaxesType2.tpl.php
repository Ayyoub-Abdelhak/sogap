<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:13:53
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryTaxesType2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585d1e15882f2_37138454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f22e1ce6f14c75c3b6583b3eabe7f378464a2b52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryTaxesType2.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585d1e15882f2_37138454 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card js-panel  mb-2" data-js="class: js-active"><div class="card-header py-1"><strong><?php echo \App\Language::translate('LBL_INDIVIDUAL_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="individual" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><div class="container-fluid"><div class="row"><div class="input-group individualTaxContainer"><input type="text" name="individualTax" class="form-control individualTaxValue" value="0" data-validation-engine="validate[required,min[0]]" data-js="focusout"><div class="input-group-append"><span class="input-group-text">%</span></div></div></div></div></div></div>
<?php }
}
