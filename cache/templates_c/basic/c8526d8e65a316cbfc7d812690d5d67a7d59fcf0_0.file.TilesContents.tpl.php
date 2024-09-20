<?php
/* Smarty version 4.2.0, created on 2024-01-03 12:15:33
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\TilesContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659541d542efa4_90596522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8526d8e65a316cbfc7d812690d5d67a7d59fcf0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\TilesContents.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659541d542efa4_90596522 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-TilesContents --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewContentsTop.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><table class="table tableBorderHeadBody listViewEntriesTable <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value && !$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->isEmpty('entityState')) {?>listView<?php echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
}?> js-fixed-thead" data-js="floatThead"><thead><tr class="<?php if ((isset($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value)) && count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value) > 0) {?>c-tab--border-active<?php }?> listViewHeaders"><th class="p-2"><div class="d-flex align-items-center"><label class="sr-only" for="listViewEntriesMainCheckBox"><?php echo \App\Language::translate('LBL_SELECT_ALL');?>
</label><input type="checkbox" id="listViewEntriesMainCheckBox" title="<?php echo \App\Language::translate('LBL_SELECT_ALL');?>
" /><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isAdvSortEnabled()) {?><button type="button" class="ml-2 btn <?php if (!empty($_smarty_tpl->tpl_vars['ORDER_BY']->value)) {?>btn-info<?php } else { ?>btn-outline-info<?php }?> btn-xs js-show-modal"data-url="index.php?view=SortOrderModal&module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-modalid="sortOrderModal-<?php echo \App\Layout::getUniqueId();?>
" data-js="click"><span class="fas fa-sort"></span></button><?php }
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isCustomViewAdvCondEnabled()) {?><button type="button" class="ml-2 btn <?php if (!empty($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationId']) || (isset($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationColumns']))) {?>btn-primary<?php } else { ?>btn-outline-primary<?php }?> btn-xs js-custom-view-adv-cond-modal" title="<?php echo \App\Language::translate('LBL_CUSTOM_VIEW_ADV_COND');?>
" data-js="click"><span class="yfi-advenced-custom-view-conditions"></span></button><?php }?><div class="js-list-reload" data-js="click"></div></div></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER');
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFullName());?><th class="noWrap p-2 u-table-column__before-block<?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('maxwidthcolumn'))) {?> u-table-column__vw-<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('maxwidthcolumn');
}
if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {?> columnSorted<?php }?>"><span class="listViewHeaderValues float-left <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isListviewSortable()) {?> js-change-order u-cursor-pointer<?php }?>"data-nextsortorderval="<?php if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value])) && $_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value] == \App\Db::ASC) {
echo \App\Db::DESC;
} else {
echo \App\Db::ASC;
}?>"data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
"data-js="click"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFullLabelTranslation($_smarty_tpl->tpl_vars['MODULE_MODEL']->value);
if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {?>&nbsp;&nbsp;<span class="fas <?php if ($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value] == \App\Db::DESC) {?>fa-chevron-down<?php } else { ?>fa-chevron-up<?php }?>"></span><?php }?></span><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType() == 'tree' || $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType() == 'categoryMultipicklist') {
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName());?><div class="d-flex align-items-center"><input name="searchInSubcategories" value="1" type="checkbox" class="searchInSubcategories mr-1 ml-1" id="searchInSubcategories<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
" title="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]['specialOption'])) {?> checked <?php }?>><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-content="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div><?php }?></th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><th class="reducePadding"></th></tr><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isQuickSearchEnabled()) {?><tr class="bg-white"><td class="listViewSearchTd"><div class="flexWrapper"><a class="btn btn-light" role="button" data-trigger="listSearch" href="javascript:void(0);"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></a><a class="btn btn-light float-right listRemoveBtn" role="button" href="index.php?view=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
&module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><span class="fas fa-times" title="<?php echo \App\Language::translate('LBL_CLEAR_SEARCH');?>
"></span></a></div></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER');
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
?><td class="pl-1"><?php $_smarty_tpl->_assignInScope('FIELD_UI_TYPE_MODEL', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUITypeModel());
if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('source_field_name'))) {
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', ((string)$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()).":".((string)$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getModuleName()).":".((string)$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('source_field_name')));
} else {
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName());
}
if ((isset($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {
$_smarty_tpl->_assignInScope('SEARCH_INFO', $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]);
} else {
$_smarty_tpl->_assignInScope('SEARCH_INFO', array());
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_INFO']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value), 0, true);
?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><td class="reducePadding"></td></tr><?php }?></thead><tbody></tbody></table><div class="row m-0 mt-1 c-tiles-container h-100"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY', false, NULL, 'listview', array (
));
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = false;
$_smarty_tpl->_assignInScope('RECORD_ID', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId());?><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['TILE_COLUMN_SIZE']->value;?>
 col-sm-12 p-1 border-0 u-cursor-pointer c-tile-record-container  js-tile-container" data-record-id="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
'><div class="card js-tile-card justify-content-center c-tiles-container_<?php echo $_smarty_tpl->tpl_vars['TILE_SIZE']->value;?>
"><div class="w-100 h-100 c-tile-body border border-light bg-light"><div class="card-footer p-0 border-0 justify-content-center"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('TilesActions.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="card-body js-card-body justify-content-center h-100"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', false, NULL, 'listHeaderForeach', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['index'];
$_smarty_tpl->_assignInScope('FIELD_DATA_TYPE', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType());
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['first'] : null)) {?><h5 class="card-title text-center c-tile-value <?php if (in_array($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value,array('multiImage','image'))) {?> c-tile-image <?php }?>"><span class=" listViewEntryValue noWrap text-muted" data-field-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value;?>
"><?php if (empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('source_field_name')) && ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField() == true || $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUIType() == '4') && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isListViewNameFieldNavigationEnabled() == true && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isViewable()) {?><a <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField() == true) {?>class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
 js-list-field js-popover-tooltip--record" data-js="width" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
"><small> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getTilesDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value);?>
 </small></a><?php } else { ?><small><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getTilesDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value);?>
</small><?php }?></span></h5><?php } else {
if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('source_field_name'))) {
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', ((string)$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()).":".((string)$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getModuleName()).":".((string)$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('source_field_name')));
} else {
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName());
}?><div class="text-center u-text-ellipsis"><span class=" text-muted"> <small> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFullLabelTranslation($_smarty_tpl->tpl_vars['MODULE_MODEL']->value);?>
: </small> </span><span class=" listViewEntryValue noWrap text-muted c-tile-value" data-field-type="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType();?>
"><?php if (empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('source_field_name')) && ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField() == true || $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUIType() == '4') && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isListViewNameFieldNavigationEnabled() == true && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->isViewable()) {?><a <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isNameField() == true) {?>class="modCT_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
 js-list-field js-popover-tooltip--record" data-js="width" <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
"><small> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getTilesDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value);?>
 </small></a><?php } else { ?><small> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getTilesDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value);?>
 </small><?php }?></span></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewContentsBottom.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></><!-- /tpl-Base-TilesContents -->
<?php }
}
