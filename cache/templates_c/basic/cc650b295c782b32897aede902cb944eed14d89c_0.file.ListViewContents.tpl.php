<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:31:03
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\BusinessHours\ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818d076a6985_35702421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc650b295c782b32897aede902cb944eed14d89c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\BusinessHours\\ListViewContents.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818d076a6985_35702421 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-BusinessHours-ListViewContents --><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" id="noOfEntries"><input type="hidden" value="1" id="pageNumber"><input type="hidden" value="0" id="totalCount"><input type="hidden" id="previousPageExist" value="false" /><input type="hidden" id="nextPageExist" value="false" /><div class="listViewEntriesDiv u-overflow-scroll-non-desktop"><?php ob_start();
echo 99/(count($_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value));
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('WIDTH', $_prefixVariable1);?><table class="table tableRWD table-bordered table-sm listViewEntriesTable"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListView/TableHeader.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value, 'LISTVIEW_ENTRY');
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = false;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
"<?php if (method_exists($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value,'getDetailViewUrl')) {?>data-recordurl="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
" <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_1_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
$_smarty_tpl->_assignInScope('LISTVIEW_HEADERNAME', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name'));
$_smarty_tpl->_assignInScope('LAST_COLUMN', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last);?><td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
%" nowrap><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value === 'default_times') {?><span class="mr-2"><?php echo App\Language::translate('LBL_REACTION_TIME','ServiceContracts');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue('reaction_time');?>
<br /><span class="mr-2"><?php echo App\Language::translate('LBL_IDLE_TIME','ServiceContracts');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue('idle_time');?>
<br /><span class="mr-2"><?php echo App\Language::translate('LBL_RESOLVE_TIME','ServiceContracts');?>
:</span> <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue('resolve_time');
} else {
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);
if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value === 'working_days' && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue('holidays')) {?>, <?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue('holidays');
}
}
if ($_smarty_tpl->tpl_vars['LAST_COLUMN']->value && $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks()) {?></td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="float-right actions"><span class="actionImages"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks(), 'RECORD_LINK', true);
$_smarty_tpl->tpl_vars['RECORD_LINK']->iteration = 0;
$_smarty_tpl->tpl_vars['RECORD_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_LINK']->value) {
$_smarty_tpl->tpl_vars['RECORD_LINK']->do_else = false;
$_smarty_tpl->tpl_vars['RECORD_LINK']->iteration++;
$_smarty_tpl->tpl_vars['RECORD_LINK']->last = $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration === $_smarty_tpl->tpl_vars['RECORD_LINK']->total;
$__foreach_RECORD_LINK_2_saved = $_smarty_tpl->tpl_vars['RECORD_LINK'];
$_smarty_tpl->_assignInScope('RECORD_LINK_URL', $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getUrl());?><a class="<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getClassName();?>
" <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:') === 0) {?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
;if (event.stopPropagation){event.stopPropagation();} else{event.cancelBubble = true;}" <?php } else { ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>><span class="<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getIcon();?>
" title="<?php echo App\Language::translate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><?php if (!$_smarty_tpl->tpl_vars['RECORD_LINK']->last) {?> <?php }
$_smarty_tpl->tpl_vars['RECORD_LINK'] = $__foreach_RECORD_LINK_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></span></div></td><?php }?></td><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><!--added this div for Temporarily --><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value) == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo App\Language::translate('LBL_NO_RECORDS_FOUND',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr></tbody></table><?php }?></div><!-- /tpl-Settings-BusinessHours-ListViewContents -->
<?php }
}
