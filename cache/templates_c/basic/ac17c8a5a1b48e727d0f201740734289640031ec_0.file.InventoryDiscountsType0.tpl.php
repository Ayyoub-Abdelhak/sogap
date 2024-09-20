<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:04:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryDiscountsType0.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cfc8eeab89_21650968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac17c8a5a1b48e727d0f201740734289640031ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryDiscountsType0.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cfc8eeab89_21650968 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-InventoryDiscountsType0 --><?php if (count($_smarty_tpl->tpl_vars['GLOBAL_DISCOUNTS']->value) > 0) {?><div class="card js-panel mb-2" data-js="class: js-active"><div class="card-header py-1"><span class="adminIcon-discount-base mr-2"></span><strong><?php echo \App\Language::translate('LBL_AVAILABLE_DICOUNTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="global" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><select class="select2 globalDiscount" name="globalDiscount" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GLOBAL_DISCOUNTS']->value, 'ITEM', false, 'NAME');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['ITEM']->value['value'],null,true);?>
"><?php echo App\Fields\Double::formatToDisplay($_smarty_tpl->tpl_vars['ITEM']->value['value']);?>
% - <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['name'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php }?><!-- /tpl-Base-InventoryDiscountsType0 -->
<?php }
}
