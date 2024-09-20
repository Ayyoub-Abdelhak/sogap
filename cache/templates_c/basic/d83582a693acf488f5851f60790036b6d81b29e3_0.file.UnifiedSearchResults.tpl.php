<?php
/* Smarty version 4.2.0, created on 2023-12-26 18:46:46
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\UnifiedSearchResults.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658b118610b069_31551762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd83582a693acf488f5851f60790036b6d81b29e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\UnifiedSearchResults.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658b118610b069_31551762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('totalCount', 0);
$_smarty_tpl->_assignInScope('totalModulesSearched', count($_smarty_tpl->tpl_vars['MATCHING_RECORDS']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MATCHING_RECORDS']->value, 'searchRecords', false, 'module');
$_smarty_tpl->tpl_vars['searchRecords']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['searchRecords']->value) {
$_smarty_tpl->tpl_vars['searchRecords']->do_else = false;
$_smarty_tpl->_assignInScope('modulesCount', count($_smarty_tpl->tpl_vars['searchRecords']->value));
$_smarty_tpl->_assignInScope('totalCount', $_smarty_tpl->tpl_vars['totalCount']->value+$_smarty_tpl->tpl_vars['modulesCount']->value);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="tpl-UnifiedSearchResults globalSearchResults modal fade" tabindex="-1" role="dialog"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header padding1per"><div class="form-row w-100 m-0"><div class="col-6 u-text-ellipsis"><strong><span class="fas fa-search fa-fw"></span> <?php echo \App\Language::translate('LBL_SEARCH_RESULTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['totalCount']->value;?>
)</strong></div><div class="col-6"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><?php if ($_smarty_tpl->tpl_vars['IS_ADVANCE_SEARCH']->value) {?><span class="col-12"><span class="float-left"><a href="javascript:void(0);" id="showFilter"><?php echo \App\Language::translate('LBL_SAVE_MODIFY_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></span><?php }?></div></div><div class="contents modal-body"><?php if ($_smarty_tpl->tpl_vars['totalCount']->value == 100) {?><div class='alert alert-info fade in'><button type=button class="close" data-dismiss="alert">&times;</button><?php if ($_smarty_tpl->tpl_vars['SEARCH_MODULE']->value) {
echo \App\Language::translate('LBL_GLOBAL_SEARCH_MAX_MESSAGE_FOR_MODULE','Vtiger');
} else {
echo \App\Language::translate('LBL_GLOBAL_SEARCH_MAX_MESSAGE','Vtiger');
}?></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MATCHING_RECORDS']->value, 'searchRecords', false, 'module', 'matchingRecords', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['searchRecords']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['searchRecords']->value) {
$_smarty_tpl->tpl_vars['searchRecords']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_matchingRecords']->value['index']++;
$_smarty_tpl->_assignInScope('modulesCount', count($_smarty_tpl->tpl_vars['searchRecords']->value));?><form method="POST" action="index.php?module=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&view=List" name="form_<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
"enctype="multipart/form-data"><input type="hidden" id="recordList" name="searchResult" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array_keys($_smarty_tpl->tpl_vars['searchRecords']->value)));?>
" /><div class="clearfix"><span onclick="form_<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
.submit()"><span class="fas fa-list mr-1"></span> <strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['module']->value,$_smarty_tpl->tpl_vars['module']->value);?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['modulesCount']->value;?>
)</strong></span><!-- &nbsp;&nbsp;<i title="" class="fas fa-th-list alignMiddle"></i> --><?php ob_start();
echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_matchingRecords']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_matchingRecords']->value['index'] : null)+1;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?><div class="float-right"><p class="muted"><?php echo \App\Language::translate('LBL_CREATED_ON',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</small></p></div><?php }?></div><ul class="nav d-flex justify-content-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchRecords']->value, 'recordObject', false, NULL, 'globalSearch', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['recordObject']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['recordObject']->value) {
$_smarty_tpl->tpl_vars['recordObject']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_globalSearch']->value['index']++;
$_smarty_tpl->_assignInScope('ID', ((string)$_smarty_tpl->tpl_vars['module']->value)."_globalSearch_row_".((string)((isset($_smarty_tpl->tpl_vars['__smarty_foreach_globalSearch']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_globalSearch']->value['index'] : null)+1)));
$_smarty_tpl->_assignInScope('DETAILVIEW_URL', $_smarty_tpl->tpl_vars['recordObject']->value->getDetailViewUrl());
if ($_smarty_tpl->tpl_vars['recordObject']->value->get('permitted')) {?><li id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" class="col-12 form-row px-0"><a target="_blank" id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
_link"class="u-cursor-pointer col-12 form-row py-1" <?php if (stripos($_smarty_tpl->tpl_vars['DETAILVIEW_URL']->value,'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['DETAILVIEW_URL']->value,strlen("javascript:"));?>
' <?php } else { ?> onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['DETAILVIEW_URL']->value;?>
"'<?php }?>><span class="col-8 text-left u-text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['recordObject']->value->getName();?>
 <?php if ($_smarty_tpl->tpl_vars['recordObject']->value->get('assigned_user_id')) {?>(<?php echo $_smarty_tpl->tpl_vars['recordObject']->value->getDisplayValue('assigned_user_id',$_smarty_tpl->tpl_vars['ID']->value,true);?>
)<?php }?></span><span id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
_time"class="col-4 text-right px-0 u-text-ellipsis"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['recordObject']->value->get('createdtime'));?>
</span></a></li><?php } else { ?><li id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><a class="cursorDefault"><span><?php echo $_smarty_tpl->tpl_vars['recordObject']->value->getName();?>
 <?php if ($_smarty_tpl->tpl_vars['recordObject']->value->get('assigned_user_id')) {?>(<?php echo $_smarty_tpl->tpl_vars['recordObject']->value->getDisplayValue('assigned_user_id',$_smarty_tpl->tpl_vars['ID']->value,true);?>
)<?php }?></span>&nbsp;<span class="fas fa-exclamation-circle"></span><span id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
_time"class="float-right"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['recordObject']->value->get('createdtime'));?>
</span></a></li><?php }
}
if ($_smarty_tpl->tpl_vars['recordObject']->do_else) {
?><li><?php echo \App\Language::translate('LBL_NO_RECORDS',$_smarty_tpl->tpl_vars['module']->value);?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></form><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div>
<?php }
}
