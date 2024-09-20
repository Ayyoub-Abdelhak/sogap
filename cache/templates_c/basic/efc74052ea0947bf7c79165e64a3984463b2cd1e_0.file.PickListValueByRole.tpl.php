<?php
/* Smarty version 4.2.0, created on 2024-01-03 15:48:49
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Picklist\PickListValueByRole.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659573d1012576_57245253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efc74052ea0947bf7c79165e64a3984463b2cd1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Picklist\\PickListValueByRole.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659573d1012576_57245253 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row mt-3"><div class="col-md-2">&nbsp;</div><div class="col-md-4 well-md" style="overflow: hidden"><div id="assignToRolepickListValuesTable" class="fontBold textAlignCenter"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><div data-id="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" class="valuesAssignedToRole u-cursor-pointer js-picklist-value-role <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['ROLE_PICKLIST_VALUES']->value)) {?>selectedCell<?php }?>"><?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['ROLE_PICKLIST_VALUES']->value)) {?><i class="fas fa-check float-left"></i><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="col-md-6 mt-2"><div><span class="fas fa-info-circle"></span>&nbsp;&nbsp;<span class="selectedCell p-1"><?php echo \App\Language::translate('LBL_SELECTED_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;<span><?php echo \App\Language::translate('LBL_SELECTED_VALUES_MESSGAE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div><span class="fas fa-info-circle"></span>&nbsp;&nbsp;<span><?php echo \App\Language::translate('LBL_ENABLE/DISABLE_MESSGAE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><br />&nbsp;&nbsp;<button id="saveOrder" disabled="" class="btn btn-success js-role-order"><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div>
<?php }
}
