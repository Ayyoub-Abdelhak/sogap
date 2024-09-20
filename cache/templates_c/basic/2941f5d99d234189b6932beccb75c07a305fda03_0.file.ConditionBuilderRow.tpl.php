<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:45:31
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ConditionBuilderRow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f8538b1c5991_53034744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2941f5d99d234189b6932beccb75c07a305fda03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ConditionBuilderRow.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f8538b1c5991_53034744 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-ConditionBuilderRow c-condition-builder__row d-flex pt-2 form-group-sm js-condition-builder-conditions-row" data-js="container"><?php if (empty($_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value) && !empty($_smarty_tpl->tpl_vars['CONDITIONS_ROW']->value)) {
$_smarty_tpl->_assignInScope('SELECTED_FIELD_MODEL', Vtiger_Field_Model::getInstanceFromFilter($_smarty_tpl->tpl_vars['CONDITIONS_ROW']->value['fieldname']));
$_smarty_tpl->_assignInScope('OPERATORS', $_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value->getRecordOperators());
}
if (empty($_smarty_tpl->tpl_vars['SELECTED_OPERATOR']->value) && !empty($_smarty_tpl->tpl_vars['CONDITIONS_ROW']->value)) {
$_smarty_tpl->_assignInScope('SELECTED_OPERATOR', $_smarty_tpl->tpl_vars['CONDITIONS_ROW']->value['operator']);
}
if (empty($_smarty_tpl->tpl_vars['FIELD_INFO']->value) && !empty($_smarty_tpl->tpl_vars['CONDITIONS_ROW']->value)) {
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['CONDITIONS_ROW']->value['fieldname']);
}
$_smarty_tpl->_assignInScope('SELECTED_RELATED_FIELD_NAME', '');?><div class="col-4"><select class="select2 form-control js-conditions-fields" data-js="change"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {
continue 1;
}?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewSelectColumnName();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewSelectColumnName()) {?> selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
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
$_smarty_tpl->_assignInScope('RELATED_FIELD_LABEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value)->getFieldByName($_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value)->getFieldLabel());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
&nbsp;-&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_KEY']->value,$_smarty_tpl->tpl_vars['MODULE_KEY']->value);?>
&nbsp;-&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_KEY']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {
continue 1;
}?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewSelectColumnName($_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewSelectColumnName($_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value)) {?> selected="selected"<?php $_smarty_tpl->_assignInScope('SELECTED_RELATED_FIELD_NAME', $_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value);
}?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
&nbsp;-&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_KEY']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-3"><select class="select2 form-control js-conditions-operator" data-js="change"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OPERATORS']->value, 'OPERATOR', false, 'OP');
$_smarty_tpl->tpl_vars['OPERATOR']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OP']->value => $_smarty_tpl->tpl_vars['OPERATOR']->value) {
$_smarty_tpl->tpl_vars['OPERATOR']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OP']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_OPERATOR']->value == $_smarty_tpl->tpl_vars['OP']->value) {?>selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['OPERATOR']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-4"><?php $_smarty_tpl->_assignInScope('TEMPLATE_NAME', $_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value->getOperatorTemplateName($_smarty_tpl->tpl_vars['SELECTED_OPERATOR']->value));
if (!empty($_smarty_tpl->tpl_vars['TEMPLATE_NAME']->value)) {
if ((isset($_smarty_tpl->tpl_vars['CONDITIONS_ROW']->value['value']))) {
$_smarty_tpl->_assignInScope('CONDITION_ROW_VALUE', \App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['CONDITIONS_ROW']->value['value']));
} else {
$_smarty_tpl->_assignInScope('CONDITION_ROW_VALUE', '');
}
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value->getConditionBuilderField($_smarty_tpl->tpl_vars['SELECTED_OPERATOR']->value));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['TEMPLATE_NAME']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'VALUE'=>$_smarty_tpl->tpl_vars['CONDITION_ROW_VALUE']->value), 0, true);
}?></div><div class="col-1 d-flex justify-content-end"><button type="button" class="btn btn-sm btn-danger js-condition-delete" data-js="click"><span class="fas fa-trash"></span></button></div></div>
<?php }
}
