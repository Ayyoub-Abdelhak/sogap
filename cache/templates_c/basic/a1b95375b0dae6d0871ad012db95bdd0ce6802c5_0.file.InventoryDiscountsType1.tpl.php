<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:04:57
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryDiscountsType1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cfc907cc20_77771939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1b95375b0dae6d0871ad012db95bdd0ce6802c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryDiscountsType1.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cfc907cc20_77771939 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-InventoryDiscountsType1 --><?php if ($_smarty_tpl->tpl_vars['GROUP_DISCOUNT']->value != 0) {?><div class="card js-panel mb-2" data-js="class: js-active"><div class="card-header py-1"><span class="yfm-Accounts mr-2"></span><strong><?php echo \App\Language::translate('LBL_ACCOUNT_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="group" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><div><p><?php echo \App\Language::translate('LBL_DISCOUNT_FOR_ACCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['ACCOUNT_NAME']->value;?>
</p><div class="input-group"><span class="input-group-prepend"><div class="input-group-text"><input type="checkbox" name="groupCheckbox" value="on" class="groupCheckbox"></div></span><input type="text" class="form-control groupValue" name="groupDiscount" value="<?php echo App\Fields\Double::formatToDisplay($_smarty_tpl->tpl_vars['GROUP_DISCOUNT']->value);?>
" readonly="readonly" data-validation-engine="validate[required]"><div class="input-group-append"><span class="input-group-text">%</span></div></div></div></div></div><?php }?><!-- /tpl-Base-InventoryDiscountsType1 -->
<?php }
}
