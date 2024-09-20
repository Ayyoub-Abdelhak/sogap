<?php
/* Smarty version 4.2.0, created on 2024-01-03 15:21:36
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\ExportRecords.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65956d704cea79_26040393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c36c89d9e51f0e261b41366507922867016a90f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\ExportRecords.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65956d704cea79_26040393 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-ExportRecords --><div class="modal-body mb-0"><div class="alert alert-info"><span class="mdi mdi-information-outline mr-2 u-fs-4x float-left"></span><?php echo \App\Language::translate('LBL_EXPORT_USER_FORMAT_ALERT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<br /><?php echo \App\Language::translate('LBL_USER_FORMAT_DATA_CANNOT_BE_IMPORTED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<br /><?php echo \App\Language::translate('LBL_EXPORT_LIMIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
: <?php echo \App\Config::performance('MAX_NUMBER_EXPORT_RECORDS');?>
</div><form class="form-horizontal js-modal-form js-validate-form" data-js="container|validate"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="QuickExportData" /><input type="hidden" name="quickExport" value="true" /><label class="col-form-label"><span class="fas fa-file-import mr-2"></span><?php echo \App\Language::translate('LBL_EXPORT_TYPE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-sm-12 p-0"><select name="export_type" class="select2 form-control"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EXPORT_TYPE']->value, 'TYPE', false, 'NAME');
$_smarty_tpl->tpl_vars['TYPE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['TYPE']->value) {
$_smarty_tpl->tpl_vars['TYPE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><label class=" col-form-label"><span class="fas fa-columns mr-2"></span><?php echo \App\Language::translate('LBL_CHOOSE_COLUMNS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<span class="js-popover-tooltip ml-1" data-toggle="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_QUICK_EXPORT_INFO',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-js="popover"><span class="fas fa-info-circle"></span></span></label><div class="columnsSelectDiv col-md-12 p-0"><div><select name="exportColumns[]" multiple="multiple" data-placeholder="<?php echo \App\Language::translate('LBL_ADD_MORE_COLUMNS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"class="select2 form-control" data-select-cb="registerSelectSortable" id="viewColumnsSelect" data-js="appendTo | select2 | sortable"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isExportable()) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewSelectColumnName();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-js="data-sort-index|data-field-name"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_RELATED_MODULES']->value, 'RECORD_STRUCTURE_FIELD', false, 'MODULE_KEY');
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_KEY']->value => $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_FIELD']->value) {
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE_FIELD']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_FIELD']->value, 'RECORD_STRUCTURE', false, 'RELATED_FIELD_NAME');
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value) {
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->do_else = false;
$_smarty_tpl->_assignInScope('RELATED_FIELD_LABEL', Vtiger_Field_Model::getInstance($_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value,Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['MODULE_NAME']->value))->getFieldLabel());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;-&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_KEY']->value,$_smarty_tpl->tpl_vars['MODULE_KEY']->value);?>
&nbsp;-&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_KEY']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isExportable()) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewSelectColumnName($_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value);?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-js="data-sort-index|data-field-name"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;-&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_KEY']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div></form></div><!-- /tpl-Base-Modals-ExportRecords -->
<?php }
}
