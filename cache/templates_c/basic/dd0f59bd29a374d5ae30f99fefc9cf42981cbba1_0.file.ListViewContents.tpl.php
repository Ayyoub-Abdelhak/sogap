<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:30:39
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Currency\ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818cef762e45_95469253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd0f59bd29a374d5ae30f99fefc9cf42981cbba1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Currency\\ListViewContents.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818cef762e45_95469253 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Currency-ListViewContents --><input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
"/><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
"/><input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
"/><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
"/><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder"/><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
"/><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" id='pageNumber'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" id="noOfEntries"><div class="listViewEntriesDiv u-overflow-scroll-non-desktop" style='overflow-x:auto;'><span class="listViewLoadingImageBlock d-none modal" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo \App\Layout::getImagePath('loading.gif');?>
" alt="no-image"title="<?php echo \App\Language::translate('LBL_LOADING');?>
"/><p class="listViewLoadingMsg"><?php echo \App\Language::translate('LBL_LOADING_LISTVIEW_CONTENTS');?>
........</p></span><?php $_smarty_tpl->_assignInScope('NAME_FIELDS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields());
ob_start();
echo 99/(count($_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value));
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('WIDTH', $_prefixVariable1);?><table class="table tableRWD table-bordered table-sm listViewEntriesTable"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListView/TableHeader.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('EMPTY_COLUMN'=>1), 0, true);
?><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY');
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = false;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
"<?php if (method_exists($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value,'getDetailViewUrl')) {?>data-recordurl="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
"<?php }?>><td width="1%" nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['MODULE']->value) && $_smarty_tpl->tpl_vars['MODULE']->value == 'CronTasks') {?><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" class="alignTop"title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/><?php }?></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_4_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
$_smarty_tpl->_assignInScope('LISTVIEW_HEADERNAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name'));
$_smarty_tpl->_assignInScope('LAST_COLUMN', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last);?><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
%" nowrap><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value == 'currency_status') {
ob_start();
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 'Active') {?>&nbsp;<?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else { ?>&nbsp;<?php echo \App\Language::translate('LBL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}
} elseif ($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value == 'currency_name') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue('currency_code'),'Other.Currency');
} else { ?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);
}
if ($_smarty_tpl->tpl_vars['LAST_COLUMN']->value) {?></td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php $_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks());
if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {?><div class="actions"><div class="float-right"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic','MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></td><?php }?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_EQ_ZERO');?>
 <?php echo \App\Language::translate('MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate('LBL_FOUND');?>
</td></tr></tbody></table><?php }?></div><!-- /tpl-Settings-Currency-ListViewContents -->
<?php }
}
