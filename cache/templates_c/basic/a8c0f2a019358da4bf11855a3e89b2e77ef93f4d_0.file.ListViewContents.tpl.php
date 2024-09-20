<?php
/* Smarty version 4.2.0, created on 2023-12-21 12:17:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65841ebc759aa9_68781971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c0f2a019358da4bf11855a3e89b2e77ef93f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\ListViewContents.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65841ebc759aa9_68781971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'LINKS_BUTTONS' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\a8c0f2a019358da4bf11855a3e89b2e77ef93f4d_0.file.ListViewContents.tpl.php',
    'uid' => 'a8c0f2a019358da4bf11855a3e89b2e77ef93f4d',
    'call_name' => 'smarty_template_function_LINKS_BUTTONS_211767951065841ebc5df341_04464898',
  ),
));
?><input type="hidden" id="listViewEntriesCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" /><input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" /><input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" /><input type="hidden" id="pageNumberValue" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" /><input type="hidden" id="pageLimitValue" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" /><input type="hidden" id="numberOfEntries" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" /><input type="hidden" id="alphabetSearchKey" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getAlphabetSearchField();?>
" /><input type="hidden" id="Operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" id="alphabetValue" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type="hidden" id="listMaxEntriesMassEdit" value="<?php echo \App\Config::main('listMaxEntriesMassEdit');?>
" /><input type="hidden" id="autoRefreshListOnChange" value="<?php echo App\Config::performance('AUTO_REFRESH_RECORD_LIST_ON_SELECT_CHANGE');?>
" /><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" id='pageNumber'><input type="hidden" id="selectedIds" name="selectedIds" /><input type="hidden" id="excludedIds" name="excludedIds" /><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" id="noOfEntries"><input type="hidden" class="js-empty-fields" data-js="value" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['LOCKED_EMPTY_FIELDS']->value));?>
" /><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewAlphabet.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div id="selectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="selectAllMsg"><?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</a></strong></div><div id="deSelectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="deSelectAllMsg"><?php echo \App\Language::translate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></strong></div><div class="listViewEntriesDiv u-overflow-scroll-non-desktop"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder" /><span class="listViewLoadingImageBlock d-none modal" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo \App\Layout::getImagePath('loading.gif');?>
" alt="no-image"title="<?php echo \App\Language::translate('LBL_LOADING');?>
" /><p class="listViewLoadingMsg"><?php echo \App\Language::translate('LBL_LOADING_LISTVIEW_CONTENTS');?>
........</p></span><table class="table tableBorderHeadBody listViewEntriesTable <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 js-fixed-thead" data-js="floatThead"><thead><tr class="listViewHeaders"><th width="2%" colspan="2"><input type="checkbox" id="listViewEntriesMainCheckBox" title="<?php echo \App\Language::translate('LBL_SELECT_ALL');?>
" /></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_5_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><th class="noWrap <?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName()) {?>columnSorted<?php }?>"><a href="javascript:void(0);" class="listViewHeaderValues js-listview_header" data-js="click"<?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isListviewSortable()) {?>data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName()) {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>" <?php }?>data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getColumnName()) {?>&nbsp;&nbsp;<span class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
"></span><?php }?></a></th><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isQuickSearchEnabled()) {?><tr class="bg-white"><td class="listViewSearchTd" colspan="2"><div class="flexWrapper"><a class="btn btn-light" role="button" href="javascript:void(0);" data-trigger="listSearch"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_SEARCH');?>
</span></a><a class="btn btn-light float-right listRemoveBtn" role="button" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&parent=Settings&view=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
"><span class="fas fa-times" title="<?php echo \App\Language::translate('LBL_CLEAR_SEARCH');?>
"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_CLEAR_SEARCH');?>
</span></a></div></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true, NULL, 'SEARCH_HEADERS', array (
));
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_6_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><td><?php $_smarty_tpl->_assignInScope('FIELD_UI_TYPE_MODEL', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getUITypeModel());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName());
if (!empty($_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value])) {
$_smarty_tpl->_assignInScope('SEARCH_INFO', $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName()]);
} else {
$_smarty_tpl->_assignInScope('SEARCH_INFO', array());
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_INFO']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value), 0, true);
?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_6_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php }?></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY', false, NULL, 'listview', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index']++;
?><tr class="listViewEntries" data-id='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
'data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
'id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_row_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listview']->value['index'] : null)+1;?>
"><td class="noWrap leftRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php $_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordListViewLinksLeftSide());?><input type="hidden" name="deleteActionUrl" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDeleteUrl();?>
"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" title="<?php echo \App\Language::translate('LBL_SELECT_SINGLE_ROW');?>
" class="listViewEntriesCheckBox" /><?php $_smarty_tpl->_assignInScope('NEXT_LINKS', array());
if ((isset($_smarty_tpl->tpl_vars['LINKS']->value['BUTTONS']))) {
$_smarty_tpl->_assignInScope('NEXT_LINKS', $_smarty_tpl->tpl_vars['LINKS']->value['BUTTONS']);
$_smarty_tpl->_assignInScope('LINKS', array_diff_key($_smarty_tpl->tpl_vars['LINKS']->value,array('BUTTONS'=>'')));
}
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'LINKS_BUTTONS', array('LINKS'=>$_smarty_tpl->tpl_vars['LINKS']->value), true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEXT_LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'LINKS_BUTTONS', array('LINKS'=>array($_smarty_tpl->tpl_vars['LINK']->value)), true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="d-flex justify-content-center"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><div class="px-0"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"class="c-img__user rounded-circle" alt="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getName();?>
"title="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getName();?>
"></div><?php } else { ?><div class="px-0"><img class="c-img__user" alt="" src="<?php echo \App\Layout::getImagePath('DefaultUserIcon.png');?>
"></div><?php }?></div></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_9_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
$_smarty_tpl->_assignInScope('LISTVIEW_HEADERNAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getFieldName());?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>
</td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_9_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody><tfoot class="listViewSummation"><tr><td></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_10_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
?><td <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last) {?>colspan="2" <?php }?>class="noWrap <?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isCalculateField())) {?>border<?php }?>"><?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->isCalculateField())) {?><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" data-operator="sum" data-field="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->getName();?>
"data-content="<?php echo \App\Language::translate('LBL_CALCULATE_SUM_FOR_THIS_FIELD');?>
"><span class="fas fa-signal"></span></button><span class="calculateValue"></span><?php }?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_10_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></tfoot></table><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_NO_RECORDS_MATCHED_THIS_CRITERIA');?>
</td></tr></tbody></table><?php }?></div>
<?php }
/* smarty_template_function_LINKS_BUTTONS_211767951065841ebc5df341_04464898 */
if (!function_exists('smarty_template_function_LINKS_BUTTONS_211767951065841ebc5df341_04464898')) {
function smarty_template_function_LINKS_BUTTONS_211767951065841ebc5df341_04464898(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('LINKS'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
$_smarty_tpl->_assignInScope('ONLY_ONE', count($_smarty_tpl->tpl_vars['LINKS']->value) == 1);?><div class="actions"><?php if ($_smarty_tpl->tpl_vars['ONLY_ONE']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="dropright u-remove-dropdown-icon"><button class="btn btn-sm btn-light toolsAction dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-wrench" aria-hidden="true"></span><span class="sr-only"><?php echo \App\Language::translate('LBL_ACTIONS');?>
</span></button><div class="dropdown-menu" aria-label="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div><?php }
}}
/*/ smarty_template_function_LINKS_BUTTONS_211767951065841ebc5df341_04464898 */
}
