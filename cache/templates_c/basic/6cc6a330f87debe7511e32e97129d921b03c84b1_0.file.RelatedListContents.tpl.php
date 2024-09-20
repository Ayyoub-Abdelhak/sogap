<?php
/* Smarty version 4.2.0, created on 2023-12-26 18:39:41
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RelatedListContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658b0fddf2b743_99965415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cc6a330f87debe7511e32e97129d921b03c84b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RelatedListContents.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658b0fddf2b743_99965415 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="selectAllMsgDiv" class="alert-block msgDiv"><strong><a href="#" id="selectAllMsg"><?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
 (<span id="totalRecordsCount"></span>)</a></strong></div><div id="deSelectAllMsgDiv" class="alert-block msgDiv"><strong><a id="deSelectAllMsg"><?php echo \App\Language::translate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></strong></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewAlphabet.tpl',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE']->value), 0, true);
$_smarty_tpl->_assignInScope('IS_INVENTORY', ($_smarty_tpl->tpl_vars['RELATED_VIEW']->value === 'List' && !empty($_smarty_tpl->tpl_vars['INVENTORY_MODULE']->value) && !empty($_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value)));?><div class="listViewEntriesDiv u-overflow-scroll-non-desktop table-responsive"><table class="table tableBorderHeadBody listViewEntriesTable <?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value && !$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->isEmpty('entityState')) {?>listView<?php echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
}?>"><thead><tr class="listViewHeaders"><?php $_smarty_tpl->_assignInScope('COUNT', 0);?><th class="noWrap"><div class="d-flex align-items-center"><?php if ((isset($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_MASSACTIONS']))) {?><label class="sr-only" for="relatedListViewEntriesMainCheckBox"><?php echo \App\Language::translate('LBL_SELECT_ALL');?>
</label><input type="checkbox" title="<?php echo \App\Language::translate('LBL_SELECT_ALL');?>
" id="relatedListViewEntriesMainCheckBox" /><?php }
if ((!$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->has('advSortEnabled') || ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->has('advSortEnabled') && $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('advSortEnabled'))) && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isAdvSortEnabled()) {?><button type="button" class="ml-2 btn btn-info btn-xs js-show-modal" data-url="index.php?view=SortOrderModal&fromView=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
&module=<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"data-modalid="sortOrderModal-<?php echo \App\Layout::getUniqueId();?>
"><span class="fas fa-sort"></span></button><?php }?><div class="js-list-reload" data-js="click"></div></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD', true);
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration = 0;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration === $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
$__foreach_HEADER_FIELD_5_saved = $_smarty_tpl->tpl_vars['HEADER_FIELD'];
if (!empty($_smarty_tpl->tpl_vars['COLUMNS']->value) && $_smarty_tpl->tpl_vars['COUNT']->value == $_smarty_tpl->tpl_vars['COLUMNS']->value) {
break 1;
}
$_smarty_tpl->_assignInScope('HEADER_FIELD_NAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFullName());
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);?><th <?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->last) {?> colspan="2" <?php }?> nowrap class="<?php if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD_NAME']->value]))) {?>columnSorted <?php }?>js-list__row" data-js="container"><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getColumnName() == 'access_count' || $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getColumnName() == 'idlists') {?><a href="javascript:void(0);" class="noSorting"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</a><?php } else { ?><span class="listViewHeaderValues float-left  <?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isListviewSortable()) {?> js-change-order u-cursor-pointer<?php }?>"data-nextsortorderval="<?php if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD_NAME']->value])) && $_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD_NAME']->value] == \App\Db::ASC) {
echo \App\Db::DESC;
} else {
echo \App\Db::ASC;
}?>"data-columnname="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD_NAME']->value;?>
"data-js="click"><?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFullLabelTranslation($_smarty_tpl->tpl_vars['RELATED_MODULE']->value);
if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD_NAME']->value]))) {?>&nbsp;&nbsp;<span class="fas <?php if ($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD_NAME']->value] == \App\Db::DESC) {?>fa-chevron-down<?php } else { ?>fa-chevron-up<?php }?>"></span><?php }?></span><?php }
if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType() == 'tree' || $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType() == 'categoryMultipicklist') {?><div class="d-flex align-items-center"><input name="searchInSubcategories" value="1" type="checkbox" class="searchInSubcategories mr-1 ml-1" id="searchInSubcategories<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD_NAME']->value;?>
" title="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-columnname="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getColumnName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD_NAME']->value]['specialOption'])) {?> checked <?php }?>><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-content="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div><?php }?></th><?php
$_smarty_tpl->tpl_vars['HEADER_FIELD'] = $__foreach_HEADER_FIELD_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('ADDITIONAL_TD', 0);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {
$_smarty_tpl->_assignInScope('ADDITIONAL_TD', $_smarty_tpl->tpl_vars['ADDITIONAL_TD']->value+2);?><th><?php echo \App\Language::translate('LBL_RELATION_CREATED_TIME',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><th><?php echo \App\Language::translate('LBL_RELATION_CREATED_USER',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {
$_smarty_tpl->_assignInScope('ADDITIONAL_TD', $_smarty_tpl->tpl_vars['ADDITIONAL_TD']->value+1);?><th><?php echo \App\Language::translate('LBL_RELATION_COMMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value || $_smarty_tpl->tpl_vars['IS_WIDGETS']->value) {?><th></th><?php }?></tr></thead><tbody><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->isQuickSearchEnabled() && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isQuickSearchEnabled()) {?><tr><td class="listViewSearchTd"><div class="flexWrapper"><a class="btn btn-light" role="button" data-trigger="listSearch" href="javascript:void(0);"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></a><button type="button" class="btn btn-light removeSearchConditions"><span class="fas fa-times" title="<?php echo \App\Language::translate('LBL_CLEAR_SEARCH');?>
"></span></button></div></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD', true);
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration = 0;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration === $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
$__foreach_HEADER_FIELD_6_saved = $_smarty_tpl->tpl_vars['HEADER_FIELD'];
?><td><?php $_smarty_tpl->_assignInScope('FIELD_UI_TYPE_MODEL', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getUITypeModel());
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFullName());
if ((isset($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {
$_smarty_tpl->_assignInScope('SEARCH_INFO', $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]);
} else {
$_smarty_tpl->_assignInScope('SEARCH_INFO', array());
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['HEADER_FIELD']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_INFO']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE']->value,'MODULE'=>$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), 0, true);
?></td><?php
$_smarty_tpl->tpl_vars['HEADER_FIELD'] = $__foreach_HEADER_FIELD_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><td class="reducePadding" colspan="<?php echo $_smarty_tpl->tpl_vars['ADDITIONAL_TD']->value+1;?>
"></td></tr><?php }
$_smarty_tpl->_assignInScope('RELATED_HEADER_COUNT', count($_smarty_tpl->tpl_vars['RELATED_HEADERS']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD');
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = false;
$_smarty_tpl->_assignInScope('RECORD_COLORS', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewColor());?><tr class="listViewEntries js-list__row" data-js="each" data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?>data-recordUrl="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"<?php }?>><?php $_smarty_tpl->_assignInScope('COUNT', 0);?><td class="noWrap leftRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['RECORD_COLORS']->value['leftBorder']) {?>style="border-left-color: <?php echo $_smarty_tpl->tpl_vars['RECORD_COLORS']->value['leftBorder'];?>
;" <?php }?>><div class="d-flex align-items-center"><?php if ((isset($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_MASSACTIONS']))) {?><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
"title="<?php echo \App\Language::translate('LBL_SELECT_SINGLE_ROW');?>
"class="relatedListViewEntriesCheckBox" /><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListLeftSide.tpl',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD', true, NULL, 'listHeaderForeach', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration = 0;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration === $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
$_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['iteration']++;
$__foreach_HEADER_FIELD_8_saved = $_smarty_tpl->tpl_vars['HEADER_FIELD'];
if (!empty($_smarty_tpl->tpl_vars['COLUMNS']->value) && $_smarty_tpl->tpl_vars['COUNT']->value == $_smarty_tpl->tpl_vars['COLUMNS']->value) {
break 1;
}
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
$_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType();?>
" nowrap<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['RELATED_HEADER_COUNT']->value) {?> colspan="2" <?php }?>><?php if (empty($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('source_field_name')) && ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isNameField() == true || $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getUIType() == '4') && $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isListViewNameFieldNavigationEnabled() && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
 js-list__field js-popover-tooltip--record" data-js="width" title="" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['HEADER_FIELD']->value);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('fromOutsideList') == true) {
if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('isEditable')) {?><input name="<?php echo $_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value;?>
"class="form-control form-control-sm js-edit-<?php echo $_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('class');?>
"title="<?php echo App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldInfo()));?>
"value="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value));?>
"data-js="change" /><?php } else {
echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getUITypeModel()->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value));
}
} else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['HEADER_FIELD']->value);
}
if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->last) {?></td><?php }?></td><?php
$_smarty_tpl->tpl_vars['HEADER_FIELD'] = $__foreach_HEADER_FIELD_8_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><td class="medium" data-field-type="rel_created_time" nowrap><?php echo App\Fields\DateTime::formatToDisplay($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_time'));?>
</td><td class="medium" data-field-type="rel_created_user" nowrap><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_user'));?>
</td><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><td class="medium" data-field-type="rel_comment" nowrap><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');?>
</td><?php }
if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value || $_smarty_tpl->tpl_vars['IS_WIDGETS']->value) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);?><td class="rightRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><button type="button" class="btn btn-sm btn-info float-right js-popover-tooltip js-toggle-hidden-row <?php if ($_smarty_tpl->tpl_vars['IS_WIDGETS']->value) {?>ml-2<?php }?>" data-element="inventory" data-js="popover|click" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_SHOW_INVENTORY_ROW');?>
"><span class="fas fa-arrows-alt-v"></span></button><?php }
if ($_smarty_tpl->tpl_vars['IS_WIDGETS']->value) {?><button type="button" class="btn btn-sm btn-info float-right js-popover-tooltip js-toggle-hidden-row" data-element="widgets" data-js="popover|click" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_SHOW_WIDGETS_ROW');?>
"><span class="fas fa-caret-square-down"></span></button><?php }?></td><?php }?></tr><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value || $_smarty_tpl->tpl_vars['IS_WIDGETS']->value) {?><tr class="js-hidden-row <?php if (!$_smarty_tpl->tpl_vars['SHOW_RELATED_WIDGETS']->value) {?>d-none<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
"><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isQuickSearchEnabled()) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+2);
}?><td colspan="<?php echo $_smarty_tpl->tpl_vars['COUNT']->value+$_smarty_tpl->tpl_vars['ADDITIONAL_TD']->value;?>
" class="backgroundWhiteSmoke"><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><div class="js-hidden-row__block d-none" data-element="inventory"><?php $_smarty_tpl->_assignInScope('INVENTORY_DATA', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getInventoryData());
$_smarty_tpl->_assignInScope('INVENTORY_MODEL', Vtiger_Inventory_Model::getInstance($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getModuleName()));?><table class="table table-sm no-margin"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value, 'FIELD', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><th class="medium" nowrap><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_DATA']->value, 'INVENTORY_ROW');
$_smarty_tpl->tpl_vars['INVENTORY_ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value) {
$_smarty_tpl->tpl_vars['INVENTORY_ROW']->do_else = false;
?><tr><?php if (!empty($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name'])) {
$_smarty_tpl->_assignInScope('ROW_MODULE', \App\Record::getType($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']));
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value, 'FIELD', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('DetailView',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value)));?><td><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['FIELD']->value->getColumnName()]), 0, true);
?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><?php }
if ($_smarty_tpl->tpl_vars['IS_WIDGETS']->value) {
$_smarty_tpl->_assignInScope('RELATED_WIDGETS', $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->getWidgets($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId()));
$_smarty_tpl->_assignInScope('RECORD', Vtiger_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value));?><div class="js-hidden-row__block <?php if (!$_smarty_tpl->tpl_vars['SHOW_RELATED_WIDGETS']->value) {?>d-none<?php }?>" data-element="widgets"><?php if ($_smarty_tpl->tpl_vars['RELATED_WIDGETS']->value) {?><div class="o-detail-widgets row no-gutters mx-n1"><?php if (!empty($_smarty_tpl->tpl_vars['RELATED_WIDGETS']->value[3])) {
$_smarty_tpl->_assignInScope('span', '4');
} elseif (!empty($_smarty_tpl->tpl_vars['RELATED_WIDGETS']->value[2])) {
$_smarty_tpl->_assignInScope('span', '6');
} else {
$_smarty_tpl->_assignInScope('span', '12');
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_WIDGETS']->value, 'WIDGETCOLUMN');
$_smarty_tpl->tpl_vars['WIDGETCOLUMN']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGETCOLUMN']->value) {
$_smarty_tpl->tpl_vars['WIDGETCOLUMN']->do_else = false;
?><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['span']->value;?>
 px-1"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETCOLUMN']->value, 'WIDGET', false, 'key');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
$_smarty_tpl->_assignInScope('FILE', ('Detail/Widget/').($_smarty_tpl->tpl_vars['WIDGET']->value['tpl']));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FILE']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,'MODULE'=>$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,'MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php }?></td></tr><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody><?php if (!empty($_smarty_tpl->tpl_vars['SHOW_SUMMATION_ROW']->value)) {?><tfoot class="listViewSummation"><tr><td></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD', true);
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration = 0;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration === $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
$__foreach_HEADER_FIELD_14_saved = $_smarty_tpl->tpl_vars['HEADER_FIELD'];
?><td <?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->last) {?> colspan="2" <?php }?> class="noWrap <?php if (!empty($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isCalculateField())) {?>border<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isCalculateField())) {?><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" type="button" data-operator="sum" data-field="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getName();?>
" data-content="<?php echo \App\Language::translate('LBL_CALCULATE_SUM_FOR_THIS_FIELD');?>
"><span class="fas fa-signal"></span></button><span class="calculateValue"></span><?php }?></td><?php
$_smarty_tpl->tpl_vars['HEADER_FIELD'] = $__foreach_HEADER_FIELD_14_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></tfoot><?php }?></table></div>
<?php }
}
