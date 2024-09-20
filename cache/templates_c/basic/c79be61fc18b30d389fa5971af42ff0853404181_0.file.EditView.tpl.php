<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:25:19
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\CustomView\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658199bf5b2e97_22488633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c79be61fc18b30d389fa5971af42ff0853404181' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\CustomView\\EditView.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658199bf5b2e97_22488633 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-CustomView-EditView modal fade js-filter-modal__container" data-js="container"><div class="modal-dialog modal-fullscreen"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-filter fa-sm mr-1"></span><?php echo \App\Language::translate('LBL_CREATE_NEW_FILTER');?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal" id="CustomView" name="CustomView" method="post" action="index.php"><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><?php }
if (!empty($_smarty_tpl->tpl_vars['MID']->value)) {?><input type="hidden" name="mid" value="<?php echo $_smarty_tpl->tpl_vars['MID']->value;?>
" /><?php }?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" id="stdfilterlist" name="stdfilterlist" value="" /><input type="hidden" id="advfilterlist" name="advfilterlist" value="" /><input type="hidden" id="advancedConditions" name="advanced_conditions" value="" /><input type="hidden" id="status" name="status" value="<?php echo $_smarty_tpl->tpl_vars['CV_PRIVATE_VALUE']->value;?>
" /><input type="hidden" id="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><?php $_smarty_tpl->_assignInScope('CV_SELECTED_FIELDS', $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->getSelectedFields());
$_smarty_tpl->_assignInScope('SELECTED_FIELDS', array_keys($_smarty_tpl->tpl_vars['CV_SELECTED_FIELDS']->value));?><div class="modal-body"><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader c-panel__header py-2 js-toggle-block" data-js="click"><span class="js-toggle-icon fas fa-chevron-down fa-xs m-1 mt-2 mr-3" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down" data-js="container"></span><h5><span class="fas fa-columns mr-2" aria-hidden="true"></span><?php echo \App\Language::translate('LBL_BASIC_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body py-1"><div class="form-row"><div class="d-flex col-md-5"><label class="float-left col-form-label "><span class="redColor">*</span> <?php echo \App\Language::translate('LBL_VIEW_NAME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-md-7"><input type="text" id="viewname" class="form-control" data-validation-engine="validate[required]" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('viewname');?>
" /></div></div><div class="d-flex col-md-5"><label class="float-left col-form-label "><?php echo \App\Language::translate('LBL_COLOR_VIEW',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</label><div class="col-md-7"><?php $_smarty_tpl->_assignInScope('COLOR', $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('color'));?><div class="input-group js-color-picker" data-js="color-picker"><input type="text" class="form-control js-color-picker__field" name="color" value="<?php echo $_smarty_tpl->tpl_vars['COLOR']->value;?>
" /><div class="input-group-append"><div class="input-group-text"><span class="c-circle c-circle--small js-color-picker__color" style="background-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value;?>
"></span></div></div></div></div></div></div><div class="form-group"><label class=" col-form-label"><span class="redColor">*</span> <?php echo \App\Language::translate('LBL_CHOOSE_COLUMNS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><div class="columnsSelectDiv col-md-12"><?php $_smarty_tpl->_assignInScope('MANDATORY_FIELDS', array());?><div class=""><select data-placeholder="<?php echo \App\Language::translate('LBL_ADD_MORE_COLUMNS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"multiple="multiple"class="select2 form-control js-view-columns-select"data-select-cb="registerSelectSortable"id="viewColumnsSelect"data-js="appendTo | select2 | sortable"><?php
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
$_smarty_tpl->_assignInScope('CUSTOM_VIEW_COLUMN_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewSelectColumnName());
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['MANDATORY_FIELDS']) ? $_smarty_tpl->tpl_vars['MANDATORY_FIELDS']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value;
$_smarty_tpl->_assignInScope('MANDATORY_FIELDS', $_tmp_array);
}
$_smarty_tpl->_assignInScope('ELEMENT_POSITION_IN_ARRAY', array_search($_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value;?>
"data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"data-field-label="<?php ob_start();
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"data-custom-label="<?php if ((isset($_smarty_tpl->tpl_vars['CV_SELECTED_FIELDS']->value[$_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value]))) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CV_SELECTED_FIELDS']->value[$_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value]);
}?>"<?php if ($_smarty_tpl->tpl_vars['ELEMENT_POSITION_IN_ARRAY']->value !== false) {?>data-sort-index="<?php echo $_smarty_tpl->tpl_vars['ELEMENT_POSITION_IN_ARRAY']->value;?>
" selected="selected"<?php }?>data-js="data-sort-index|data-field-name"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span>*</span><?php }?></option><?php
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
$_smarty_tpl->_assignInScope('CUSTOM_VIEW_COLUMN_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getCustomViewSelectColumnName($_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value));
$_smarty_tpl->_assignInScope('ELEMENT_POSITION_IN_ARRAY', array_search($_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value;?>
"data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"data-field-label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
&nbsp;-&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_KEY']->value);?>
"data-custom-label="<?php if ((isset($_smarty_tpl->tpl_vars['CV_SELECTED_FIELDS']->value[$_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value]))) {
echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CV_SELECTED_FIELDS']->value[$_smarty_tpl->tpl_vars['CUSTOM_VIEW_COLUMN_NAME']->value]);
}?>"<?php if ($_smarty_tpl->tpl_vars['ELEMENT_POSITION_IN_ARRAY']->value !== false) {?>data-sort-index="<?php echo $_smarty_tpl->tpl_vars['ELEMENT_POSITION_IN_ARRAY']->value;?>
" selected="selected"<?php }?>data-js="data-sort-index|data-field-name"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
&nbsp;-&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_KEY']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><input type="hidden" name="columnslist" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value));?>
"class="js-columnslist" data-js="val" /><input id="mandatoryFieldsList" type="hidden" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['MANDATORY_FIELDS']->value));?>
" /></div></div></div></div><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader c-panel__header py-2 js-toggle-block" data-js="click"><span class="js-toggle-icon fas fa-chevron-right fa-xs m-1 mt-2 mr-3" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down" data-js="container"></span><h5><span class="yfi-company-detlis mr-2" aria-hidden="true"></span><?php echo \App\Language::translate('LBL_SET_CUSTOM_COLUMNS_LABEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body py-1 d-none"><input type="hidden" name="customFieldNames" value="" class="js-custom-field-names" data-js="val"><div class="js-custom-name-fields"></div></div></div><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader c-panel__header py-2 js-toggle-block" data-js="click"><span class="js-toggle-icon fas fa-chevron-right fa-xs m-1 mt-2 mr-3" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down" data-js="container"></span><h5><span class="yfi-company-detlis mr-2" aria-hidden="true"></span><?php echo \App\Language::translate('LBL_DESCRIPTION_INFORMATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body py-1 d-none"><textarea name="description" id="description" class="js-editor" data-purify-mode="Html" data-js="ckeditor"><?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('description');?>
</textarea></div></div><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader c-panel__header py-2 js-toggle-block" data-js="click"><span class="js-toggle-icon fas fa-chevron-right fa-xs m-1 mt-2 mr-3" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down" data-js="container"></span><h5><span class="mdi mdi-content-duplicate mr-2" aria-hidden="true"></span><?php echo \App\Language::translate('LBL_FIND_DUPLICATES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body py-1 d-none"><input type="hidden" name="duplicatefields" value=""><button type="button" class="btn btn-success btn-sm js-duplicate-add-field mb-1" data-js="click"><span class="fa fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><div class="js-duplicates-field-template js-duplicates-row d-none" data-js="container|clone"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DuplicateRow.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="js-duplicates-container" data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DUPLICATE_FIELDS']->value, 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><div class="js-duplicates-row my-1" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DuplicateRow.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CustomView/AdvCondBody.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('HIDDE_BLOCKS'=>true), 0, true);
?><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader c-panel__header py-2 js-toggle-block" data-js="click"><span class="js-toggle-icon fas fa-chevron-down fa-xs m-1 mt-2 mr-3" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down" data-js="container"></span><h5><span class="yfi yfi-users-2 mr-2"></span><?php echo \App\Language::translate('LBL_CHOOSE_FILTER_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</h5></div><div class="c-panel__body py-1"><div class="pb-0 js-condition-builder-view" data-js="container"><div class="row"><span class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilder.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value), 0, true);
?></span></div></div></div></div></div><div class="modal-footer d-flex flex-md-row flex-column justify-content-start"><div class="w-75 btn-group js-filter-preferences btn-group-toggle flex-wrap align-items-stretch m-0 mt-1 c-btn-block-sm-down pl-1 flex-xl-row flex-column" data-toggle="buttons" data-js="change"><label class="c-btn-block-sm-down btn btn-outline-dark<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isDefault()) {?> active<?php }?>" title="<?php echo \App\Language::translate('LBL_SET_AS_DEFAULT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><input name="setdefault" value="1" type="checkbox" class="js-filter-preference" data-js="change"<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isDefault()) {?>checked="checked" <?php }?>id="setdefault" autocomplete="off" /><span class="<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isDefault()) {?>fas<?php } else { ?>far<?php }?> fa-heart mr-1"data-check="fas fa-heart" data-unchecked="far fa-heart"></span><?php echo \App\Language::translate('LBL_SET_AS_DEFAULT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><label class="c-btn-block-sm-down mt-1 mt-sm-0 btn btn-outline-dark<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isSetPublic()) {?> active<?php }?>"title="<?php echo \App\Language::translate('LBL_SET_AS_PUBLIC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><input name="status" <?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isSetPublic()) {?> value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('status');?>
" checked="checked" <?php } else { ?> value="<?php echo $_smarty_tpl->tpl_vars['CV_PENDING_VALUE']->value;?>
" <?php }?>type="checkbox" class="js-filter-preference" data-js="change" id="status" autocomplete="off" /><span class="far <?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isSetPublic()) {?>fa-eye<?php } else { ?>fa-eye-slash<?php }?> mr-1"data-check="fa-eye" data-unchecked="fa-eye-slash"></span><?php echo \App\Language::translate('LBL_SET_AS_PUBLIC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><label class="c-btn-block-sm-down mt-1 mt-sm-0 btn btn-outline-dark<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isFeatured()) {?> active<?php }?>"title="<?php echo \App\Language::translate('LBL_FEATURED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><input name="featured" value="1" type="checkbox" class="js-filter-preference" data-js="change" id="featured"<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isFeatured()) {?> checked="checked" <?php }
if (!$_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isFeaturedEditable()) {?> disabled="disabled" <?php }?>autocomplete="off" /><span class="<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->isFeatured()) {?>fas<?php } else { ?>far<?php }?> fa-star mr-1"data-check="fas" data-unchecked="far"></span><?php echo \App\Language::translate('LBL_FEATURED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><label class="c-btn-block-sm-down mt-1 mt-sm-0 btn btn-outline-dark<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('setmetrics')) {?> active<?php }?>"title="<?php echo \App\Language::translate('LBL_LIST_IN_METRICS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><input name="setmetrics" value="1" type="checkbox" class="js-filter-preference" data-js="change"<?php if ($_smarty_tpl->tpl_vars['CUSTOMVIEW_MODEL']->value->get('setmetrics') == '1') {?>checked="checked" <?php }?>id="setmetrics" autocomplete="off" /><span class="c-icon--tripple mr-2"><span class="c-icon--tripple__top fas fa-chart-pie"></span><span class="c-icon--tripple__left fas fa-chart-line"></span><span class="c-icon--tripple__right fas fa-chart-area"></span></span><?php echo \App\Language::translate('LBL_LIST_IN_METRICS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div class="w-25 d-flex flex-wrap flex-md-nowrap justify-content-end m-0 pr-0 mt-1  c-btn-block-sm-down ml-0 pr-1 pr-md-0"><button class="btn btn-success mr-md-1" type="submit"><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><button class="btn btn-danger mt-1 mt-md-0" type="reset" data-dismiss="modal"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></div></form></div></div></div>
<?php }
}
