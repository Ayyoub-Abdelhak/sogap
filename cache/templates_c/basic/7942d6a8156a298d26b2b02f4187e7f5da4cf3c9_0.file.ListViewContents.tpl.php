<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:47:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\TreesManager\ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585a173e0dd52_09513461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7942d6a8156a298d26b2b02f4187e7f5da4cf3c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\TreesManager\\ListViewContents.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585a173e0dd52_09513461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- tpl-Settings-TreesMangager-ListViewContents --><input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" /><input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" id='pageNumber'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" id="noOfEntries"><div class="listViewEntriesDiv u-overflow-scroll-non-desktop u-overflow-auto"><span class="listViewLoadingImageBlock d-none modal" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo \App\Layout::getImagePath('loading.gif');?>
" alt="no-image" title="<?php echo \App\Language::translate('LBL_LOADING');?>
" /><p class="listViewLoadingMsg"><?php echo \App\Language::translate('LBL_LOADING_LISTVIEW_CONTENTS');?>
........</p></span><?php $_smarty_tpl->_assignInScope('NAME_FIELDS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields());
ob_start();
echo 99/(count($_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value));
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('WIDTH', $_prefixVariable1);?><table class="table table-bordered table-sm listViewEntriesTable"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListView/TableHeader.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY');
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = false;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" <?php if (method_exists($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value,'getDetailViewUrl')) {?>data-recordurl="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
" <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_3_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
$_smarty_tpl->_assignInScope('LISTVIEW_HEADERNAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name'));
$_smarty_tpl->_assignInScope('LAST_COLUMN', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last);?><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
%" nowrap>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);
if ($_smarty_tpl->tpl_vars['LAST_COLUMN']->value && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks()) {?></td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="float-right actions"><span class="actionImages"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks(), 'RECORD_LINK', true);
$_smarty_tpl->tpl_vars['RECORD_LINK']->iteration = 0;
$_smarty_tpl->tpl_vars['RECORD_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_LINK']->value) {
$_smarty_tpl->tpl_vars['RECORD_LINK']->do_else = false;
$_smarty_tpl->tpl_vars['RECORD_LINK']->iteration++;
$_smarty_tpl->tpl_vars['RECORD_LINK']->last = $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration === $_smarty_tpl->tpl_vars['RECORD_LINK']->total;
$__foreach_RECORD_LINK_4_saved = $_smarty_tpl->tpl_vars['RECORD_LINK'];
$_smarty_tpl->_assignInScope('RECORD_LINK_URL', $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getUrl());?><a class="<?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('access') == '0' && $_smarty_tpl->tpl_vars['RECORD_LINK']->value->get('linklabel') == 'LBL_DELETE') {?> d-none <?php }?> <?php echo $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getClassName();?>
" <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:') === 0) {?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
;if (event.stopPropagation){event.stopPropagation();} else{event.cancelBubble = true;}" <?php } else { ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>><span class="<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getIcon();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><?php if (!$_smarty_tpl->tpl_vars['RECORD_LINK']->last) {?>&nbsp;&nbsp;<?php }
$_smarty_tpl->tpl_vars['RECORD_LINK'] = $__foreach_RECORD_LINK_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></div></td><?php }?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_NO_RECORDS_FOUND',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr></tbody></table><?php }?></div><!-- /tpl-Settings-TreesMangager-ListViewContents -->
<?php }
}
