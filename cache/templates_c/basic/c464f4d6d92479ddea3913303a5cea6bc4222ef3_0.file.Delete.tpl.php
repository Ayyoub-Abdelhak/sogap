<?php
/* Smarty version 4.2.0, created on 2024-01-03 15:54:54
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Picklist\Delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6595753e286ff7_92931094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c464f4d6d92479ddea3913303a5cea6bc4222ef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Picklist\\Delete.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6595753e286ff7_92931094 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Picklist-Delete --><div class="modal-body js-modal-body pb-0" data-js="container"><form class="form-horizontal validateForm" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="remove" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" /><input type="hidden" name="primaryKeyId" value="<?php echo $_smarty_tpl->tpl_vars['ITEM_MODEL']->value->getId();?>
" /><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_REPLACE_IT_WITH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="col-md-9 controls"><select id="replaceValue" name="replace_value" class="select2 form-control" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EDITABLE_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_VALUE_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
if ($_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value != $_smarty_tpl->tpl_vars['ITEM_MODEL']->value->getId()) {?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NON_EDITABLE_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_VALUE_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
if ($_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value != $_smarty_tpl->tpl_vars['ITEM_MODEL']->value->getId()) {?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE_KEY']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php if ($_smarty_tpl->tpl_vars['NON_EDITABLE_VALUES']->value) {?><div class="form-group row align-items-center"><div class="col-md-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_NON_EDITABLE_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9 controls nonEditableValuesDiv"><ul class="nonEditablePicklistValues list-unstyled"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NON_EDITABLE_VALUES']->value, 'NON_EDITABLE_VALUE', false, 'NON_EDITABLE_VALUE_KEY');
$_smarty_tpl->tpl_vars['NON_EDITABLE_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NON_EDITABLE_VALUE_KEY']->value => $_smarty_tpl->tpl_vars['NON_EDITABLE_VALUE']->value) {
$_smarty_tpl->tpl_vars['NON_EDITABLE_VALUE']->do_else = false;
?><li><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['NON_EDITABLE_VALUE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php }?></form></div><!-- /tpl-Settings-Picklist-Delete -->
<?php }
}
