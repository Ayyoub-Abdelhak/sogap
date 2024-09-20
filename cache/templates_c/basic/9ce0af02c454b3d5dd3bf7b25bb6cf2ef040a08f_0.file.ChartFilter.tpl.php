<?php
/* Smarty version 4.2.0, created on 2024-05-14 14:58:05
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\dashboards\ChartFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66436dedcae452_50723717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ce0af02c454b3d5dd3bf7b25bb6cf2ef040a08f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\dashboards\\ChartFilter.tpl',
      1 => 1702905746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66436dedcae452_50723717 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-dashboards-ChartFilter --><?php $_smarty_tpl->_assignInScope('COL_LBL', "col-sm-12 col-md-4 col-lg-3 col-form-label");
$_smarty_tpl->_assignInScope('COL_CTRL', "col-sm-12 col-md-8 col-lg-9");
if ($_smarty_tpl->tpl_vars['WIZARD_STEP']->value == 'step1') {?><form class="validateForm u-word-break" method="post" action="javascript:;"><?php if ($_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getId()) {?><input type="hidden" name="templateId" class="js-widget-id" value="<?php echo $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getId();?>
"><?php }?><input type="hidden" name="linkId" class="js-link-id" value="<?php echo $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->get('linkid');?>
"><div class="modal-body"><div class="container-fluid pt-3"><input type="hidden" id="widgetStep" value="" /><div><div class="form-group row mb-2"><label class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><?php echo \App\Language::translate('LBL_WIDGET_NAME','Home');?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><input type="text" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('title');?>
"></div></div><div class="form-group row mb-2"><label class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_SELECT_CHART','Home');?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_CHART_TYPE', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('chartType'));?><select class="form-control select2 saveParam" name="chartType"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHART_TYPES']->value, 'TYPE', false, 'VALUE');
$_smarty_tpl->tpl_vars['TYPE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->value => $_smarty_tpl->tpl_vars['TYPE']->value) {
$_smarty_tpl->tpl_vars['TYPE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['VALUE']->value === $_smarty_tpl->tpl_vars['VALUE_CHART_TYPE']->value) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="step1"><div class="form-group row mb-2"><label class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_SELECT_MODULE');?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_MODULE', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('module'));?><select class="form-control saveParam" name="module"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES']->value, 'MODULE_MODEL', false, 'MODULE_THIS_NAME');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_THIS_NAME']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value['name'] === $_smarty_tpl->tpl_vars['VALUE_MODULE']->value) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value['name'],$_smarty_tpl->tpl_vars['MODULE_MODEL']->value['name']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="step2"></div><div class="step3"></div><div class="step4"></div><div class="step5"></div></div></div><div class="js-chart-footer" style="display: none;"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL','MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?></div></form><?php } elseif ($_smarty_tpl->tpl_vars['WIZARD_STEP']->value == 'step2') {?><div class="form-group row mb-2"><label class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_FILTER');?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_FILTER', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('filterid'));?><select class="form-control filtersId" <?php if ($_smarty_tpl->tpl_vars['CHART_TYPE']->value !== 'Funnel' && $_smarty_tpl->tpl_vars['CHART_TYPE']->value !== 'Table') {?>name="filtersId"multiple="multiple" <?php } else { ?>name="filtersId[]"<?php }?>data-validation-engine="validate[required]" data-maximum-selection-length="<?php echo \App\Config::performance('CHART_MULTI_FILTER_LIMIT');?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALLFILTERS']->value, 'FILTERS', false, 'FILTERGROUP');
$_smarty_tpl->tpl_vars['FILTERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FILTERGROUP']->value => $_smarty_tpl->tpl_vars['FILTERS']->value) {
$_smarty_tpl->tpl_vars['FILTERS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FILTERGROUP']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTERS']->value, 'FILTER', false, 'FILTERNAME');
$_smarty_tpl->tpl_vars['FILTER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FILTERNAME']->value => $_smarty_tpl->tpl_vars['FILTER']->value) {
$_smarty_tpl->tpl_vars['FILTER']->do_else = false;
if ($_smarty_tpl->tpl_vars['FILTER']->value->get('setmetrics') == 1) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FILTER']->value->getId();?>
" <?php if (in_array($_smarty_tpl->tpl_vars['FILTER']->value->getId(),$_smarty_tpl->tpl_vars['VALUE_FILTER']->value)) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FILTER']->value->get('viewname'),$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row mb-2"><label class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_VALUE_TYPE','Home');?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_TYPE', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('valueType'));?><select class="form-control valueType saveParam" name="valueType" size="2"><option value="count" <?php if ('count' === $_smarty_tpl->tpl_vars['VALUE_TYPE']->value) {?> selected<?php }?>><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS','Home');?>
</option><?php if ($_smarty_tpl->tpl_vars['IS_NUMERAL_VALUE']->value) {?><option value="sum" <?php if ('sum' === $_smarty_tpl->tpl_vars['VALUE_TYPE']->value) {?> selected<?php }?>><?php echo \App\Language::translate('LBL_SUM','Home');?>
</option><option value="avg" <?php if ('avg' === $_smarty_tpl->tpl_vars['VALUE_TYPE']->value) {?> selected<?php }?>><?php echo \App\Language::translate('LBL_AVG','Home');?>
</option><?php }?></select></div></div><?php } elseif ($_smarty_tpl->tpl_vars['WIZARD_STEP']->value == 'step3') {?><div class="form-group row mb-2"><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><span class="redColor">*</span><?php echo \App\Language::translate('LBL_GROUP_FIELD','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_GROUP_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('groupField'));?><select class="form-control groupField saveParam" name="groupField" size="2" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getFieldDataType();?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === $_smarty_tpl->tpl_vars['VALUE_GROUP_FIELD']->value) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php if ($_smarty_tpl->tpl_vars['VALUE_TYPE']->value !== 'count') {?><div class="form-group row mb-2"><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><span class="redColor">*</span><?php echo \App\Language::translate('LBL_VALUE_FIELD','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('valueField'));?><select class="form-control saveParam valueField" name="valueField" size="2" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
if (in_array($_smarty_tpl->tpl_vars['FIELD']->value->getFieldDataType(),$_smarty_tpl->tpl_vars['REQUIRED_FIELD_TYPE']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getFieldDataType();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === $_smarty_tpl->tpl_vars['VALUE_FIELD']->value) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php }
} elseif ($_smarty_tpl->tpl_vars['WIZARD_STEP']->value == 'step4') {
if ($_smarty_tpl->tpl_vars['SHOW_GROUP_VALUES']->value) {?><div class="form-group row mb-2"><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_GROUP_VALUES','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_SECTOR_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('sectorField'));?><select class="form-control select saveParam" data-select="tags" name="sectorField"><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_VALUES']->value, 'LABEL', false, 'KEY');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['KEY']->value === $_smarty_tpl->tpl_vars['VALUE_SECTOR_FIELD']->value) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php } elseif (in_array($_smarty_tpl->tpl_vars['CHART_TYPE']->value,array('Bar','Line','Pie','LinePlain','Donut','Horizontal','Table')) && count($_smarty_tpl->tpl_vars['FILTERS']->value) <= 1) {?><div class="form-group row mb-2"><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_DIVIDING_FIELD','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_DIVIDING_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('dividingField'));?><select class="form-control saveParam" name="dividingField" size="2" data-allow-clear="true"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getFieldDataType();?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === $_smarty_tpl->tpl_vars['VALUE_DIVIDING_FIELD']->value) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row d-none js-sector-container mb-2"><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_GROUP_VALUES','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_SECTOR_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('sectorField'));?><select class="form-control select saveParam" data-select="tags" name="sectorField" disabled><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_VALUES']->value, 'LABEL', false, 'KEY');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['KEY']->value === $_smarty_tpl->tpl_vars['VALUE_SECTOR_FIELD']->value) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php if ($_smarty_tpl->tpl_vars['CHART_TYPE']->value != 'Table') {?><div class="form-group row mb-2"><?php $_smarty_tpl->_assignInScope('VALUE_COLORS', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('colorsFromDividingField'));?><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_COLORS_FROM_DIVIDING_FIELD','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
 m-auto"><input type="hidden" name="colorsFromDividingField" value="0"><input type="checkbox" class="form-control saveParam" name="colorsFromDividingField" value="1" <?php if ($_smarty_tpl->tpl_vars['VALUE_COLORS']->value) {?> checked<?php }?>></div></div><?php }
}
if (in_array($_smarty_tpl->tpl_vars['CHART_TYPE']->value,array('Bar','Horizontal','Line','LinePlain'))) {?><div class="form-group row mb-2"><?php $_smarty_tpl->_assignInScope('VALUE_STACKED', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('stacked'));?><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_CHART_STACKED','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
 m-auto"><input type="hidden" name="stacked" value="0"><input type="checkbox" class="form-control saveParam" name="stacked" value="1" <?php if ($_smarty_tpl->tpl_vars['VALUE_STACKED']->value) {?> checked<?php }?>></div></div><?php }
if (count($_smarty_tpl->tpl_vars['FILTERS']->value) > 1) {?><div class="form-group row mb-2"><?php $_smarty_tpl->_assignInScope('VALUE_COLORS', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('colorsFromFilter'));?><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_CHART_COLORS_FROM_FILTER','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
 m-auto"><input type="hidden" name="colorsFromFilter" value="0"><input type="checkbox" class="form-control saveParam" name="colorsFromFilter" value="1" <?php if ($_smarty_tpl->tpl_vars['VALUE_COLORS']->value) {?> checked<?php }?>></div></div><?php }?><div class="form-group row mb-2"><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_ADDITIONAL_FILTERS','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_ADDITIONAL_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('additionalFiltersFields'));?><select class="form-control saveParam" name="additionalFiltersFields" size="2" multiple data-maximum-selection-length="<?php echo \App\Config::performance('CHART_ADDITIONAL_FILTERS_LIMIT');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getFieldDataType();?>
" <?php if (in_array($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['VALUE_ADDITIONAL_FIELD']->value)) {?> selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php if ($_smarty_tpl->tpl_vars['CHART_TYPE']->value == 'Table') {?><div class="form-group row mb-2"><?php $_smarty_tpl->_assignInScope('VALUE_SUMMARY', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('summary'));?><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_WIDGET_SHOW_SUMMARY','Home');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
 m-auto"><input type="hidden" name="summary" value="0"><input type="checkbox" class="form-control saveParam" name="summary" value="1" <?php if ($_smarty_tpl->tpl_vars['VALUE_SUMMARY']->value) {?> checked<?php }?>></div></div><?php }
} elseif ($_smarty_tpl->tpl_vars['WIZARD_STEP']->value == 'step5') {
if (in_array($_smarty_tpl->tpl_vars['CHART_TYPE']->value,array('Bar','Horizontal','Line','LinePlain')) && !$_smarty_tpl->tpl_vars['DIVIDING_FIELD']->value && !$_smarty_tpl->tpl_vars['STACKED']->value && !$_smarty_tpl->tpl_vars['SECTOR_FIELD']->value && count($_smarty_tpl->tpl_vars['FILTERS']->value) <= 1) {?><div class="form-group row mb-2"><div class="<?php echo $_smarty_tpl->tpl_vars['COL_LBL']->value;?>
"><label><?php echo \App\Language::translate('LBL_SORTING_SETTINGS');?>
</label></div><div class="<?php echo $_smarty_tpl->tpl_vars['COL_CTRL']->value;?>
"><?php $_smarty_tpl->_assignInScope('VALUE_SORT', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('sortOrder'));?><select class="form-control select saveParam" name="sortOrder"><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><option value="<?php echo \App\Db::DESC;?>
" <?php if (\App\Db::DESC === $_smarty_tpl->tpl_vars['VALUE_SORT']->value) {?> selected<?php }?>><?php echo \App\Language::translate('LBL_SORT_DESCENDING');?>
</option><option value="<?php echo \App\Db::ASC;?>
" <?php if (\App\Db::ASC === $_smarty_tpl->tpl_vars['VALUE_SORT']->value) {?> selected<?php }?>><?php echo \App\Language::translate('LBL_SORT_ASCENDING');?>
</option></select></div></div><?php }
}?><!-- /tpl-dashboards-ChartFilter -->
<?php }
}
