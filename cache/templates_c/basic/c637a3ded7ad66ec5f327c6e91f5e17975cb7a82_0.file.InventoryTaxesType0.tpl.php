<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:13:53
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryTaxesType0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585d1e13793f5_65821142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c637a3ded7ad66ec5f327c6e91f5e17975cb7a82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryTaxesType0.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585d1e13793f5_65821142 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['GLOBAL_TAXES']->value) > 0) {?><div class="card js-panel mb-2"><div class="card-header py-1"><strong><?php echo \App\Language::translate('LBL_GLOBAL_TAXS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="global" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><select class="select2 globalTax" name="globalTax" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GLOBAL_TAXES']->value, 'ITEM', false, 'NAME');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['ITEM']->value['value'],null,true);?>
"><?php echo App\Fields\Double::formatToDisplay($_smarty_tpl->tpl_vars['ITEM']->value['value']);?>
% - <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['name'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php }
}
}
