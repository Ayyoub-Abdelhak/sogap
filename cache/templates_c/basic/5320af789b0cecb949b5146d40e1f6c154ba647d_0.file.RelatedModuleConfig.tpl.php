<?php
/* Smarty version 4.2.0, created on 2024-05-10 17:59:17
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\RelatedModuleConfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e5265cc7d79_63273128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5320af789b0cecb949b5146d40e1f6c154ba647d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\RelatedModuleConfig.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e5265cc7d79_63273128 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl--Base-Detail-Widget-RelatedModuleConfig --><div class="modal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><form class="form-modalAddWidget form-horizontal validateForm"><?php if (!empty($_smarty_tpl->tpl_vars['WID']->value)) {?><input type="hidden" name="wid" value="<?php echo $_smarty_tpl->tpl_vars['WID']->value;?>
" /><?php }?><input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" /><div class="modal-header"><h5 id="massEditHeader" class="modal-title"><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('Add widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><?php if (empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relatedmodule'])) {
$_smarty_tpl->_assignInScope('RELATED_MODULE_ID', 0);
} else {
$_smarty_tpl->_assignInScope('RELATED_MODULE_ID', $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relatedmodule']);
}
if (empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relation_id'])) {
$_smarty_tpl->_assignInScope('RELATED_ID', 0);
} else {
$_smarty_tpl->_assignInScope('RELATED_ID', $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relation_id']);
}?><div class="form-container-sm"><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('Type widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7 col-form-label"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('Label',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7 py-1"><input name="label" class="form-control form-control-sm" data-validation-engine="validate[required]" type="text" value="<?php echo $_smarty_tpl->tpl_vars['WIDGETINFO']->value['label'];?>
" /></div></div><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('Related module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('Related module info',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('Related module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><select name="relation_id" <?php if ($_smarty_tpl->tpl_vars['RELATED_ID']->value) {?> readonly="readonly" <?php }?> class="select2 form-control form-control-sm" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATEDMODULES']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['relation_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['RELATED_ID']->value == $_smarty_tpl->tpl_vars['item']->value['relation_id']) {?>selected <?php }?> data-relatedmodule="<?php echo $_smarty_tpl->tpl_vars['item']->value['related_tabid'];?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['item']->value['related_modulename'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['label'],$_smarty_tpl->tpl_vars['item']->value['related_modulename']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><input name="relatedmodule" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_ID']->value;?>
" data-module-name="<?php echo \App\Module::getModuleName($_smarty_tpl->tpl_vars['RELATED_MODULE_ID']->value);?>
" /></div></div><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_SELECTING_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_SELECTING_FIELDS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('LBL_SELECTING_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><select name="relatedfields" multiple class="select2 form-control form-control-sm" data-validation-engine="validate[required]" data-select-cb="registerSelectSortable"><?php $_smarty_tpl->_assignInScope('MODULES', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATEDMODULES']->value, 'RELATED_MODULE', false, 'key');
$_smarty_tpl->tpl_vars['RELATED_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['RELATED_MODULE']->value) {
$_smarty_tpl->tpl_vars['RELATED_MODULE']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['MODULES']->value[$_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_tabid']]))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_modulename'])->getFieldsByBlocks(), 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_modulename']);?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_tabid'];?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('VALUE_NAME', ((string)$_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_tabid'])."::".((string)$_smarty_tpl->tpl_vars['FIELD_NAME']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE_NAME']->value;?>
" <?php echo ' ';
if (!empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relatedfields']) && in_array($_smarty_tpl->tpl_vars['VALUE_NAME']->value,$_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relatedfields'])) {?>selected="selected" data-sort-index="<?php echo array_search($_smarty_tpl->tpl_vars['VALUE_NAME']->value,$_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relatedfields']);?>
"<?php }?> data-module="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_tabid'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_modulename']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_tmp_array = isset($_smarty_tpl->tpl_vars['MODULES']) ? $_smarty_tpl->tpl_vars['MODULES']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_tabid']] = $_smarty_tpl->tpl_vars['RELATED_MODULE']->value['relation_id'];
$_smarty_tpl->_assignInScope('MODULES', $_tmp_array);
}
$_smarty_tpl->_assignInScope('RELATION_FIELDS', Vtiger_Relation_Model::getInstanceById($_smarty_tpl->tpl_vars['RELATED_MODULE']->value['relation_id'])->getRelationFields());
if ($_smarty_tpl->tpl_vars['RELATION_FIELDS']->value) {?><optgroup label="<?php echo \App\Language::translate('LBL_RELATED_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_tabid'];?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATION_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('VALUE_NAME', ((string)$_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_tabid'])."::".((string)$_smarty_tpl->tpl_vars['FIELD_NAME']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE_NAME']->value;?>
" <?php echo ' ';
if (!empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relatedfields']) && in_array($_smarty_tpl->tpl_vars['VALUE_NAME']->value,$_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relatedfields'])) {?>selected="selected"data-sort-index="<?php echo array_search($_smarty_tpl->tpl_vars['VALUE_NAME']->value,$_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['relatedfields']);?>
"<?php }?> data-module="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value['related_tabid'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_VIEW_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_VIEW_TYPE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('LBL_VIEW_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><select name="viewtype" class="select2"><option value="List" <?php if (!empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['viewtype']) && $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['viewtype'] == 'List') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="Summary" <?php if (!empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['viewtype']) && $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['viewtype'] == 'Summary') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_SUMMARY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="ListWithSummary" <?php if (!empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['viewtype']) && $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['viewtype'] == 'ListWithSummary') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_LIST_WITH_SUMMARY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_CUSTOM_VIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_CUSTOM_VIEW_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('LBL_CUSTOM_VIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><select name="customView" multiple class="select2" data-js="container"></select><input class="js-custom-view" type="hidden" value="<?php if (!empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['customView'])) {
echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['customView']));
}?>" data-js="value" /></div></div><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('Limit entries',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('Limit entries info',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('Limit entries',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><input name="limit" class="form-control form-control-sm" type="text" data-validation-engine="validate[required,custom[integer],min[1]]" value="<?php echo $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['limit'];?>
" /></div></div><div class="form-group form-group-sm form-switch-mini row"><label class="col-md-5 col-form-label"><?php echo \App\Language::translate('Add button',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('Add button info',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('Add button',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7"><?php $_smarty_tpl->_assignInScope('ACTION_STATUS', (isset($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['action'])) && $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['action'] == 1);?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['ACTION_STATUS']->value) {?> active<?php }?>"><input type="radio" name="action" id="action1" autocomplete="off" value="1" <?php if ($_smarty_tpl->tpl_vars['ACTION_STATUS']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['ACTION_STATUS']->value) {?> active<?php }?>"><input type="radio" name="action" id="action2" autocomplete="off" value="0" <?php if (!$_smarty_tpl->tpl_vars['ACTION_STATUS']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div></div><div class="form-group form-group-sm form-switch-mini row"><label class="col-md-5 col-form-label"><?php echo \App\Language::translate('Select button',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_SELECT_BUTTON_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('Select button',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><?php $_smarty_tpl->_assignInScope('ACTION_SELECT_STATUS', (isset($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['actionSelect'])) && $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['actionSelect'] == 1);?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['ACTION_SELECT_STATUS']->value) {?> active<?php }?>"><input type="radio" name="actionSelect" id="actionSelect1" autocomplete="off" value="1" <?php if ($_smarty_tpl->tpl_vars['ACTION_SELECT_STATUS']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['ACTION_SELECT_STATUS']->value) {?> active<?php }?>"><input type="radio" name="actionSelect" id="actionSelect2" autocomplete="off" value="0" <?php if (!$_smarty_tpl->tpl_vars['ACTION_SELECT_STATUS']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div></div><div class="form-group form-group-sm form-switch-mini row"><label class="col-md-5 col-form-label"><?php echo \App\Language::translate('No message',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('No message info',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('No message',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><?php $_smarty_tpl->_assignInScope('NO_RESULT_TEXT', (isset($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['no_result_text'])) && $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['no_result_text'] == 1);?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['NO_RESULT_TEXT']->value) {?> active<?php }?>"><input type="radio" name="no_result_text" id="option1" autocomplete="off" value="1" <?php if ($_smarty_tpl->tpl_vars['NO_RESULT_TEXT']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['NO_RESULT_TEXT']->value) {?> active<?php }?>"><input type="radio" name="no_result_text" id="option2" autocomplete="off" value="0" <?php if (!$_smarty_tpl->tpl_vars['NO_RESULT_TEXT']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div></div><div class="form-group form-group-sm d-none row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_SHITCH_HEADER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_SHITCH_HEADER_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('LBL_SHITCH_HEADER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7"><input type="hidden" id="switchHeader_selected" value="<?php echo $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['switchHeader'];?>
"><select name="switchHeader" class="select2 form-control form-control-sm"><option value="-"><?php echo \App\Language::translate('None',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('Filter',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('Filter info',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('Filter',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><input type="hidden" id="filter_selected" value="<?php echo $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['filter'];?>
"><select name="filter" class="select2 form-control form-control-sm"><option value="-"><?php echo \App\Language::translate('None',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group form-group-sm row"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('Switch',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-help-info" title="" data-placement="top" data-content="<?php echo \App\Language::translate('Switch info',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-original-title="<?php echo \App\Language::translate('Switch',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a>:</label><div class="col-md-7 py-1"><input type="hidden" id="checkbox_selected" value="<?php echo $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['checkbox'];?>
"><select name="checkbox" class="select2 form-control form-control-sm"><option value="-"><?php echo \App\Language::translate('None',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group form-group-sm row relatedContainer"><label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_SORTING_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label><div class="col-md-7 py-1"><?php if (empty($_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['orderby'])) {
$_smarty_tpl->_assignInScope('ORDER_BY', array());
} else {
$_smarty_tpl->_assignInScope('ORDER_BY', $_smarty_tpl->tpl_vars['WIDGETINFO']->value['data']['orderby']);
}?><input type="hidden" id="orderBy" name="orderby" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ORDER_BY']->value));?>
"><button type="button" class="ml-2 btn btn-info btn-xs js-sort-modal" data-url="index.php?view=SortOrderModal&fromView=Detail" data-modalid="sortOrderModal-<?php echo \App\Layout::getUniqueId();?>
"><span class="fas fa-sort"></span></button></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div><!-- /tpl--Base-Detail-Widget-RelatedModuleConfig -->
<?php }
}
