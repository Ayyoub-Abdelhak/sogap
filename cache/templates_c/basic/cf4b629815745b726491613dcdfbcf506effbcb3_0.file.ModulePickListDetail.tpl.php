<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:46:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Picklist\ModulePickListDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585a144499497_28507213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf4b629815745b726491613dcdfbcf506effbcb3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Picklist\\ModulePickListDetail.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585a144499497_28507213 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group row"><label class="col-form-label col-md-3"><strong><?php echo \App\Language::translate('LBL_SELECT_PICKLIST_IN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</strong></label><div class="col-md-4"><select class="select2 form-control js-picklist-field" id="modulePickList" data-allow-clear="true"><optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value, 'FIELD_MODEL', false, 'PICKLIST_FIELD');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['PICKLIST_INTERDEPENDENT']->value[$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()]) && count($_smarty_tpl->tpl_vars['PICKLIST_INTERDEPENDENT']->value[$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()]) > 1) {?> data-confirmation="<?php echo \App\Language::translateArgs('LBL_CONFIRM_BEFORE_MODIFY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,implode(', ',$_smarty_tpl->tpl_vars['PICKLIST_INTERDEPENDENT']->value[$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName()]));?>
" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div></div><!-- /tpl-Settings-Picklist-ModulePickListDetail -->
<?php }
}
