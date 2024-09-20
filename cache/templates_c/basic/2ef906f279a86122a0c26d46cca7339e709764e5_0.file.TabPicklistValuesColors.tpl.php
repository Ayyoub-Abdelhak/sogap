<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:07:13
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Colors\TabPicklistValuesColors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9a517b3457_54506460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ef906f279a86122a0c26d46cca7339e709764e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Colors\\TabPicklistValuesColors.tpl',
      1 => 1702905765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9a517b3457_54506460 (Smarty_Internal_Template $_smarty_tpl) {
?><br /><div class="form-row"><label class="fieldLabel col-md-2"><strong><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </strong></label><div class="col-md-4 fieldValue pickListModulesSelectContainer"><select class="select2 form-control js-selected-module" data-js="change"><optgroup><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Fields\Picklist::getModules(), 'PICKLIST_MODULE', false, 'PICKLIST_MODULE_ID');
$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_MODULE_ID']->value => $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->do_else = false;
?><option <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value == $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value['tabname']) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value['tabname'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value['tablabel'],$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value['tabname']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div><?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?><label class="fieldLabel col-md-2"><strong><?php echo \App\Language::translate('LBL_SELECT_PICKLIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class="col-md-4 fieldValue pickListModulesPicklistSelectContainer"><select class="select2 form-control modulePickList" id="modulePickList"><optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value, 'FIELD_MODEL', false, 'PICKLIST_FIELD');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><option <?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELD_ID']->value == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId()) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div><?php }?></div><br /><div class="row"><?php if ($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value) {?><div class="col-md-12 u-text-ellipsis"><?php if ($_smarty_tpl->tpl_vars['COLOR_NO_COLUMN']->value) {?><div class="alert alert-warning" role="alert"><strong><?php echo \App\Language::translate('LBL_WARNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
!</strong> <?php echo \App\Language::translate('LBL_PICKLIST_COLOR_COL_NOT_FOUND',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<br /><br /><button data-module="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" data-fieldId="<?php echo $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELD_ID']->value;?>
" class="btn btn-sm btn-primary addPicklistColorColumn"><?php echo \App\Language::translate('LBL_UPDATE_COLOR_COLUMN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><?php } else { ?><table id="pickListValuesTable" class="table customTableRWD table-bordered table-sm listViewEntriesTable"><thead><tr class="listViewHeaders"><th><strong><?php echo \App\Language::translate('LBL_ITEM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php $_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_ALL_VALUES']->value);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_KEY');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><tr class="pickListValue"><td class="u-text-ellipsis"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['picklistValue'],$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</td><td id="calendarColorPreviewPicklistValue<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['picklistValueId'];?>
" data-fieldId="<?php echo $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELD_ID']->value;?>
" data-fieldValueId="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['picklistValueId'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['color'];?>
" class="calendarColor" style="background: #<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['color'];?>
 !important;"></td><td><button data-fieldId="<?php echo $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELD_ID']->value;?>
" data-fieldValueId="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['picklistValueId'];?>
" data-type="PicklistItem" class="btn btn-sm btn-danger mr-1 float-right removePicklistValueColor"><span class="fas fa-trash-alt"></span> <?php echo \App\Language::translate('LBL_REMOVE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button data-fieldId="<?php echo $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELD_ID']->value;?>
" data-fieldValueId="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['picklistValueId'];?>
" data-type="PicklistItem" class="btn btn-sm btn-primary mr-1 float-right updatePicklistValueColor"><span class="yfi yfi-full-editing-view"></span> <?php echo \App\Language::translate('LBL_UPDATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-fieldId="<?php echo $_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELD_ID']->value;?>
" data-fieldValueId="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['picklistValueId'];?>
" data-type="PicklistItem" class="btn btn-sm btn-warning mr-1 float-right generatePicklistValueColor"><span class="fas fa-redo-alt"></span> <?php echo \App\Language::translate('LBL_GENERATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><?php }?></div><?php }?></div>
<?php }
}
