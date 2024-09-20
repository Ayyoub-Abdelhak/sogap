<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:37:22
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Step3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818e82479342_12532783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea898df618976068b7be9338fea981716511371b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Step3.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818e82479342_12532783 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-12 row"><div class="col-2 px-0"><strong><?php echo \App\Language::translate('LBL_IMPORT_STEP_3',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong>&nbsp;&nbsp;&nbsp;<input name="auto_merge" value="1" type="checkbox" class="font-x-small" id="auto_merge" title="<?php echo \App\Language::translate('LBL_IMPORT_STEP_3',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" onclick="ImportJs.toogleMergeConfiguration();" /></div><div class="col-10"><span><?php echo \App\Language::translate('LBL_IMPORT_STEP_3_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><span class="font-x-small">(<?php echo \App\Language::translate('LBL_IMPORT_STEP_3_DESCRIPTION_DETAILED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
).</span></div><div class="col-12"><div class="row" id="duplicates_merge_configuration" style="display:none;"><div class='col-12 my-4'><div class="row px-3"><div class="col-md-6 px-0"><span class="font-x-small"><?php echo \App\Language::translate('LBL_SPECIFY_MERGE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><a class="js-popover-tooltip m-2" onclick="javascript:void(0)" data-content="<?php echo \App\Language::translate('LBL_MERGE_TYPE_INFO','Import');?>
"><span class="fas fa-info-circle"></span></a></div><div class="col-md-6 px-0"><select name="merge_type" id="merge_type" class="font-x-small form-control" title="<?php echo \App\Language::translate('LBL_SPECIFY_MERGE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AUTO_MERGE_TYPES']->value, '_MERGE_TYPE_LABEL', false, '_MERGE_TYPE');
$_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value => $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value) {
$_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="col-12"><div class="font-x-small"><?php echo \App\Language::translate('LBL_SELECT_MERGE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class="col-12"><div class="row calDayHour"><div class="col-12"><div><strong><?php echo \App\Language::translate('LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div><div><strong><?php echo \App\Language::translate('LBL_SELECTED_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div></div><div class="col-12 row"><div class="col-5"><select id="available_fields" multiple size="10" name="available_fields" title="<?php echo \App\Language::translate('LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
'" class="txtBox select2" style="width: 100%"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVAILABLE_BLOCKS']->value, '_FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['_FIELDS']->value) {
$_smarty_tpl->tpl_vars['_FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_FIELDS']->value, '_FIELD_INFO', false, '_FIELD_NAME');
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-1"><div align="center"><input type="button" name="Button" value="&nbsp;&rsaquo;&rsaquo;&nbsp;" onClick="ImportJs.copySelectedOptions('#available_fields', '#selected_merge_fields')" class="crmButton font-x-small importButton" /><br /><br /><input type="button" name="Button1" value="&nbsp;&lsaquo;&lsaquo;&nbsp;" onClick="ImportJs.removeSelectedOptions('#selected_merge_fields')" class="crmButton font-x-small importButton" /><br /><br /></div></div><div class="col-5"><input type="hidden" id="merge_fields" size="10" name="merge_fields" value="" /><select id="selected_merge_fields" size="10" name="selected_merge_fields" title="<?php echo \App\Language::translate('lBL_SELECTED_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple class="txtBox select2" style="width: 100%"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOR_MODULE_MODEL']->value->getNameFields(), 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value) {
$_smarty_tpl->tpl_vars['FIELD_NAME']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD', $_smarty_tpl->tpl_vars['FOR_MODULE_MODEL']->value->getFieldByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div></div></div></div></div>
<?php }
}
