<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:45:31
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ConditionBuilder\Picklist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f8538b62e968_90626543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15798cc1d22a51c548b9546671569814dbf477e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ConditionBuilder\\Picklist.tpl',
      1 => 1702905749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f8538b62e968_90626543 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-ConditionBuilder-PickList"><?php $_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('FIELD_VALUES', explode('##',$_smarty_tpl->tpl_vars['VALUE']->value));?><select class="js-picklist-field select2 form-control js-condition-builder-value" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
"multiple="multiple" data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,$_smarty_tpl->tpl_vars['FIELD_VALUES']->value)) {?>selected<?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div>
<?php }
}
