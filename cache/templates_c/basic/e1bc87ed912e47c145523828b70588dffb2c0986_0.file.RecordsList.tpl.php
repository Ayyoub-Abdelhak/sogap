<?php
/* Smarty version 4.2.0, created on 2023-12-19 15:45:12
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\RecordsList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581ac78a13560_51386617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1bc87ed912e47c145523828b70588dffb2c0986' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\RecordsList.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581ac78a13560_51386617 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Modals-RecordsList modal-body js-modal-body" data-js="container"><input type="hidden" class="js-parent-module" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" class="js-source-record" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
" /><input type="hidden" class="js-source-field" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_FIELD']->value;?>
" /><input type="hidden" class="js-related-parent-module" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_MODULE']->value;?>
" /><input type="hidden" class="js-related-parent-id" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_PARENT_ID']->value;?>
" /><input type="hidden" class="js-multi-select" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['MULTI_SELECT']->value;?>
" /><input type="hidden" id="orderBy" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ORDER_BY']->value));?>
"><input type='hidden' class='js-page-number' data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
"><input type="hidden" class="js-total-count" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type='hidden' class="js-page-limit" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" /><input type="hidden" class="js-no-entries" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
"><input type="hidden" class="js-additional-informations" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['ADDITIONAL_INFORMATIONS']->value;?>
"><input type="hidden" id="autoRefreshListOnChange" data-js="value" value="<?php echo App\Config::performance('AUTO_REFRESH_RECORD_LIST_ON_SELECT_CHANGE');?>
" /><input type="hidden" class="js-filter-fields" data-js="value" value="<?php echo App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FILTER_FIELDS']->value));?>
"><input type="hidden" id="search_params" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewAlphabet.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><input type="hidden" class="js-locked-fields" data-js="value" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['LOCKED_FIELDS']->value));?>
" /><input type="hidden" class="js-empty-fields" data-js="value" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['LOCKED_EMPTY_FIELDS']->value));?>
" /><div class="table-responsive"><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center"><?php if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value) {?><input type="checkbox" title="<?php echo App\Language::translate('LBL_SELECT_ALL_CURRENTPAGE');?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_SELECTED']->value) {?> checked="checked" <?php }?>class="js-select-checkbox u-cursor-pointer" data-type="all" data-js="click" /><?php }?></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER');
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFullName());?><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;
if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {?> columnSorted<?php }?>"><span class="listViewHeaderValues float-left <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isListviewSortable()) {?> js-change-order u-cursor-pointer<?php }?>"data-nextsortorderval="<?php if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value])) && $_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value] == \App\Db::ASC) {
echo \App\Db::DESC;
} else {
echo \App\Db::ASC;
}?>"data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
"data-js="click"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFullLabelTranslation($_smarty_tpl->tpl_vars['MODULE_MODEL']->value);
if ((isset($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {?>&nbsp;&nbsp;<span class="fas <?php if ($_smarty_tpl->tpl_vars['ORDER_BY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value] == \App\Db::DESC) {?>fa-chevron-down<?php } else { ?>fa-chevron-up<?php }?>"></span><?php }?></span><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType() == 'tree' || $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType() == 'categoryMultipicklist') {?><div class="d-flex align-items-center"><input name="searchInSubcategories" value="1" type="checkbox" class="searchInSubcategories mr-1 ml-1" id="searchInSubcategories<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
" title="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName();?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]['specialOption'])) {?> checked <?php }?>><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-content="<?php echo \App\Language::translate('LBL_SEARCH_IN_SUBCATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div><?php }?></th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><tbody><tr><td class="listSearchTd"><button class="btn btn-light" data-trigger="listSearch"><span class="fas fa-search"></span></button></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER');
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
?><td><?php $_smarty_tpl->_assignInScope('FIELD_UI_TYPE_MODEL', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUITypeModel());
$_smarty_tpl->_assignInScope('LISTVIEW_HEADER_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName());
if ((isset($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]))) {
$_smarty_tpl->_assignInScope('SEARCH_INFO', $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value]);
} else {
$_smarty_tpl->_assignInScope('SEARCH_INFO', array());
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_INFO']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value), 0, true);
?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY');
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = false;
?><tr class="u-cursor-pointer js-select-row listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" data-js="click"data-name='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getName();?>
'><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 u-cursor-auto text-center"><?php if ($_smarty_tpl->tpl_vars['MULTI_SELECT']->value) {?><input class="js-select-checkbox" title="<?php echo App\Language::translate('LBL_SELECT_RECORD');?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_SELECTED']->value) {?> checked="checked" <?php }?>type="checkbox" data-type="row" data-js="click" /><?php }?></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER');
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->_assignInScope('LISTVIEW_HEADERNAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldName());?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value;?>
"data-type="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldDataType();?>
"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('fromOutsideList') == true) {
echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value));
} else {
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value);
}?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><div><div class="emptyRecordsDiv"><?php echo App\Language::translate('LBL_NO_RELATED_RECORDS_FOUND',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div></div><?php }?></div></div>
<?php }
}
