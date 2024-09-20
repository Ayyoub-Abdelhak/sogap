<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:13:53
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\InventoryTaxesType1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585d1e145d948_29000536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3edfc3cebb72b09783c1c695c148286f806d14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\InventoryTaxesType1.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585d1e145d948_29000536 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-InventoryTaxesType1 --><?php if ($_smarty_tpl->tpl_vars['TAX_TYPE']->value == '0' && $_smarty_tpl->tpl_vars['TAX_FIELD']->value && $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->_assignInScope('RECORD_MODEL', Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['RECORD']->value));
$_smarty_tpl->_assignInScope('SELECTED_TAXES', Vtiger_Taxes_UIType::getValues($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['TAX_FIELD']->value)));
if (count($_smarty_tpl->tpl_vars['SELECTED_TAXES']->value) > 0) {?><div class="card js-panel  mb-2" data-js="class: js-active"><div class="card-header py-1"><strong><?php echo \App\Language::translate('LBL_GROUP_TAXS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong><div class="float-right"><input type="<?php echo $_smarty_tpl->tpl_vars['AGGREGATION_INPUT_TYPE']->value;?>
" name="aggregationType" value="group" class="activeCheckbox"></div></div><div class="card-body js-panel__body d-none" data-js="class: d-none"><div><p><?php echo \App\Language::translate('LBL_TAX_FOR_MODULE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECORD_MODULE']->value,$_smarty_tpl->tpl_vars['RECORD_MODULE']->value);?>
:<br><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDisplayName();?>
</p><select class="select2 groupTax" name="groupTax" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_TAXES']->value, 'TAX');
$_smarty_tpl->tpl_vars['TAX']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAX']->value) {
$_smarty_tpl->tpl_vars['TAX']->do_else = false;
$_smarty_tpl->_assignInScope('VALUE', CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['TAX']->value['value'],null,true));?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
% - <?php ob_start();
echo $_smarty_tpl->tpl_vars['TAX']->value['name'];
$_prefixVariable1 = ob_get_clean();
echo \App\Language::translate($_prefixVariable1,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><?php }
}?><!-- /tpl-Base-InventoryTaxesType1 -->
<?php }
}
