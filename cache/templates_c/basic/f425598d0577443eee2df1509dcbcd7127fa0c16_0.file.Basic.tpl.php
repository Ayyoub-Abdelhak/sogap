<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:25
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\Basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819155744f69_51124348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f425598d0577443eee2df1509dcbcd7127fa0c16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\Basic.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819155744f69_51124348 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-Widget-Basic --><?php ob_start();
echo \App\Layout::getUniqueId(($_smarty_tpl->tpl_vars['WIDGET']->value['id']).('_'));
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable6);
$_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', App\Module::getModuleName($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']));
$_smarty_tpl->_assignInScope('RELATION_ID', null);
if ($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value) {
if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relation_id']))) {
$_smarty_tpl->_assignInScope('RELATION_ID', $_smarty_tpl->tpl_vars['WIDGET']->value['data']['relation_id']);
}?><div class="c-detail-widget js-detail-widget" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['RELATION_ID']->value) {?>data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATION_ID']->value;?>
" <?php }?>data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" data-js="container"><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['url']);?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
"><div class="c-detail-widget__header js-detail-widget-header collapsed border-bottom-0" data-js="container|value"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
" /><div class="c-detail-widget__header__container d-flex align-items-center py-1"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse"data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="u-transform_rotate-180deg mdi mdi-chevron-down" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0 text-truncate modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] == '') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
}?></h5></div><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench q-icon"></i></div></button><div class="u-hidden-block items-center js-comment-actions"><?php if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']))) {?><div class="ml-auto btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="search_params-option1" data-js="change" data-on-val='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['on']);?>
'data-urlparams="search_params" autocomplete="off" checked><?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeaderLables']['on'];?>
</label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="search_params-option2" data-js="change" data-off-val='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['switchHeader']['off']);?>
'data-urlparams="search_params" autocomplete="off"><?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['switchHeaderLables']['off'];?>
</label></div><?php }?><div class="btn-group"><?php if (!empty($_smarty_tpl->tpl_vars['WIDGET']->value['data']['viewtype']) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['viewtype'] == 'Summary') {?><div class="btn-group control-widget"><button class="btn btn-sm btn-light prev disabled" type="button" title="<?php echo \App\Language::translate('LBL_PREV',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-angle-left"></span></button><button class="btn btn-sm btn-light next" type="button" title="<?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-angle-right"></span></button></div><?php }
if (empty($_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) && ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['actionSelect'])) || (isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['action'])))) {
$_smarty_tpl->_assignInScope('VRM', Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('VRMM', Vtiger_RelationListView_Model::getInstance($_smarty_tpl->tpl_vars['VRM']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATION_ID']->value));
$_smarty_tpl->_assignInScope('RELATIONMODEL', $_smarty_tpl->tpl_vars['VRMM']->value->getRelationModel());
if (!empty($_smarty_tpl->tpl_vars['WIDGET']->value['data']['actionSelect']) && $_smarty_tpl->tpl_vars['VRMM']->value->getSelectRelationLinks()) {
$_smarty_tpl->_assignInScope('RESTRICTIONS_FIELD', $_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getRestrictionsPopupField($_smarty_tpl->tpl_vars['VRM']->value));?><button class="btn btn-sm btn-light selectRelation js-popover-tooltip ml-1" type="button" data-placement="top" data-modulename="<?php echo $_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getRelationModuleName();?>
"<?php if ($_smarty_tpl->tpl_vars['RESTRICTIONS_FIELD']->value) {?>data-rf='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['RESTRICTIONS_FIELD']->value));?>
'<?php }?>data-content="<?php echo \App\Language::translate('LBL_SELECT_RELATION',$_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getRelationModuleName());?>
"><span class="fas fa-search"></span></button><?php }
if (!empty($_smarty_tpl->tpl_vars['WIDGET']->value['data']['action']) && $_smarty_tpl->tpl_vars['VRMM']->value->getAddRelationLinks()) {
$_smarty_tpl->_assignInScope('AUTOCOMPLETE_FIELD', $_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getAutoCompleteField($_smarty_tpl->tpl_vars['VRM']->value));?><button class="btn btn-sm btn-light <?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['isQuickCreateSupport']) {?>createInventoryRecordFromFilter<?php } else { ?>createRecordFromFilter<?php }?> js-popover-tooltip ml-1"type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['actionURL'];?>
" <?php if ($_smarty_tpl->tpl_vars['AUTOCOMPLETE_FIELD']->value) {?>data-acf='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['AUTOCOMPLETE_FIELD']->value));?>
' <?php }?>data-placement="top"data-content="<?php echo \App\Language::translate('LBL_ADD_RELATION',$_smarty_tpl->tpl_vars['RELATIONMODEL']->value->getRelationModuleName());?>
"><span class="fas fa-plus"></span></button><?php }
if (!empty($_smarty_tpl->tpl_vars['WIDGET']->value['buttonHeader'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGET']->value['buttonHeader'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'detailViewBasic','MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}?></div></div></div></div></div><div class="c-detail-widget__content js-detail-widget-collapse collapse multi-collapse pt-0" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
"><div class="<?php if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox'])) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox'] != '-') {?> pb-2 <?php }?> d-flex m-0"><?php if (((isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter'])) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter'] != '-') && ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox'])) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox'] != '-')) {
$_smarty_tpl->_assignInScope('span', 'col-6');
} else {
$_smarty_tpl->_assignInScope('span', 'col-12');
}
$_smarty_tpl->_assignInScope('RELATED_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value));
if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter'])) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter'] != '-') {?><div class="form-group-sm w-100 mr-2"><?php $_smarty_tpl->_assignInScope('FILTER', $_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter']);
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['FILTER']->value));
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());?><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" class="select2 form-control form-control-sm js-filter_field"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?>data-fieldlable='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
'data-filter="<?php echo $_smarty_tpl->tpl_vars['FILTER']->value;?>
" data-urlparams="search_params" data-js="change"><option><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') == $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value) {?>selected<?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }
if (!empty($_smarty_tpl->tpl_vars['WIDGET']->value['data']['customView'])) {
if (count($_smarty_tpl->tpl_vars['WIDGET']->value['data']['customView']) > 1) {
$_smarty_tpl->_assignInScope('CUSTOM_VIEWS_DETAILS', \App\CustomView::getInstance($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value)->getFilters());?><div class="form-group-sm w-100 mb-1"><select class="select2 form-control form-control-sm js-filter_field" data-urlparams="cvId" data-return="value" data-js="change|value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGET']->value['data']['customView'], 'CV_ID');
$_smarty_tpl->tpl_vars['CV_ID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CV_ID']->value) {
$_smarty_tpl->tpl_vars['CV_ID']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['CUSTOM_VIEWS_DETAILS']->value[$_smarty_tpl->tpl_vars['CV_ID']->value]))) {?><option value="<?php echo $_smarty_tpl->tpl_vars['CV_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CUSTOM_VIEWS_DETAILS']->value[$_smarty_tpl->tpl_vars['CV_ID']->value]['viewname'],$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }
}
if ((isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox'])) && $_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox'] != '-') {
$_smarty_tpl->_assignInScope('checkbox', $_smarty_tpl->tpl_vars['WIDGET']->value['data']['checkbox']);
$_smarty_tpl->_assignInScope('FIELD_NAME', explode('.',$_smarty_tpl->tpl_vars['checkbox']->value));?><div class="js-popover-tooltip ml-auto btn-group btn-group-toggle" data-toggle="buttons"<?php if (!empty($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFieldByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value[1]))) {?> data-js="popover"data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFieldByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value[1])->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
"<?php }?>><label class="btn btn-sm btn-outline-primary active"><input class="js-switch" type="radio" name="options" id="option1" data-js="change" data-on-val='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['checkbox']['on']);?>
'data-urlparams="search_params" autocomplete="off" checked> <span class="far fa-check-circle fa-lg" title="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['checkboxLables']['on'];?>
"></label><label class="btn btn-sm btn-outline-primary"><input class="js-switch" type="radio" name="options" id="option2" data-js="change" data-off-val='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['WIDGET']->value['checkbox']['off']);?>
'data-urlparams="search_params" autocomplete="off"> <span class="far fa-times-circle fa-lg" title="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['checkboxLables']['off'];?>
"></span></label></div><?php }
if (!empty($_smarty_tpl->tpl_vars['WIDGET']->value['instance']) && method_exists($_smarty_tpl->tpl_vars['WIDGET']->value['instance'],'getCustomFields')) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGET']->value['instance']->getCustomFields(), 'FIELD_MODEL');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));?><div class="form-group-sm w-100 mr-1 mb-1"><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"class="select2 form-control form-control-sm js-filter_field"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value));?>
' <?php }?> data-return="value" data-urlparams="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" data-js="change"><optgroup class="p-0"><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION');?>
</option></optgroup><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') == $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value) {?>selected<?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><div class="js-detail-widget-content" data-js="container|value"></div></div></div></div><?php }?><!-- /tpl-Base-Detail-Widget-Basic -->
<?php }
}
