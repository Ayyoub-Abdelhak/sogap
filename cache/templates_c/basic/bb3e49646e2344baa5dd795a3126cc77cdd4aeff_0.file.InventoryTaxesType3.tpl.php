<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:13:53
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryTaxesType3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585d1e1621283_38287347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3e49646e2344baa5dd795a3126cc77cdd4aeff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryTaxesType3.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585d1e1621283_38287347 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['GROUP_TAXS']->value) {?><div class="card js-panel  mb-2" data-js="class: js-active"><div class="card-header py-1"><strong><?php echo \App\Language::translate('LBL_REGIONAL_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="regional" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><div><p><?php echo \App\Language::translate('LBL_TAX_FOR_ACCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['ACCOUNT_NAME']->value;?>
</p><select class="select2 regionalTax" name="regionalTax" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_TAXS']->value, 'TAX');
$_smarty_tpl->tpl_vars['TAX']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAX']->value) {
$_smarty_tpl->tpl_vars['TAX']->do_else = false;
$_smarty_tpl->_assignInScope('VALUE', CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TAX']->value['value'],null,true));?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
% - <?php ob_start();
echo $_smarty_tpl->tpl_vars['TAX']->value['name'];
$_prefixVariable2 = ob_get_clean();
echo \App\Language::translate($_prefixVariable2,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><?php }
}
}
