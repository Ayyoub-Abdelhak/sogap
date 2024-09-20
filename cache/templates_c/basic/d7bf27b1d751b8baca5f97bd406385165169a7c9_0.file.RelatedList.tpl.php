<?php
/* Smarty version 4.2.0, created on 2023-12-26 18:39:41
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RelatedList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658b0fdd899935_55908603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7bf27b1d751b8baca5f97bd406385165169a7c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RelatedList.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658b0fdd899935_55908603 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-RelatedList --><div class="RelatedList relatedContainer"><?php $_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));
$_smarty_tpl->_assignInScope('INVENTORY_MODULE', $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isInventory());
$_smarty_tpl->_assignInScope('RELATION_MODEL', $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->getRelationModel());?><input type="hidden" name="currentPageNum" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getCurrentPage();?>
"><input type="hidden" name="relatedModuleName" class="relatedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name');?>
"><input type="hidden" id="orderBy" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ORDER_BY']->value));?>
"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_ENTIRES_COUNT']->value;?>
" id="noOfEntries"><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['TOTAL_ENTRIES']->value;?>
" id='totalCount'><input type="hidden" id="autoRefreshListOnChange" value="<?php echo App\Config::performance('AUTO_REFRESH_RECORD_LIST_ON_SELECT_CHANGE');?>
"><input type="hidden" class="relatedView" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_VIEW']->value;?>
"><input type="hidden" id="selectedIds" name="selectedIds" data-selected-ids=""><input type="hidden" id="excludedIds" name="excludedIds" data-excluded-ids=""><input type="hidden" id="recordsCount" value="" /><input type="hidden" id="tab_label" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RELATION_MODEL']->value->get('label'));?>
" /><input type="hidden" id="relationId" value="<?php echo $_smarty_tpl->tpl_vars['RELATION_MODEL']->value->getId();?>
" /><input type="hidden" id="search_params" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
"><input type="hidden" class="js-empty-fields" data-js="value" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['LOCKED_EMPTY_FIELDS']->value));?>
" /><?php if ($_smarty_tpl->tpl_vars['SHOW_HEADER']->value) {
$_smarty_tpl->_assignInScope('CUSTOM_VIEW_LIST', $_smarty_tpl->tpl_vars['RELATION_MODEL']->value->getCustomViewList());?><div class="relatedHeader mt-1"><div class="d-inline-flex flex-wrap w-100 justify-content-between"><div class="u-w-sm-down-100 d-flex flex-wrap flex-sm-nowrap mb-1 <?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW_LIST']->value) {?>mb-lg-0<?php } else { ?>mb-md-0<?php }?>"><?php if ((isset($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS'])) && count($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS']) > 0) {?><div class="btn-group mr-sm-1 relatedViewGroup c-btn-block-sm-down mb-1 mb-sm-0"><?php $_smarty_tpl->_assignInScope('TEXT_HOLDER', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS'], 'RELATEDLIST_VIEW');
$_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value) {
$_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->do_else = false;
if ($_smarty_tpl->tpl_vars['RELATED_VIEW']->value == $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('view')) {
$_smarty_tpl->_assignInScope('TEXT_HOLDER', $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->getLabel());
if ($_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon') != '') {
$_smarty_tpl->_assignInScope('BTN_ICON', $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon'));
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><button class="btn btn-light dropdown-toggle relatedViewBtn" data-toggle="dropdown"><?php if ($_smarty_tpl->tpl_vars['BTN_ICON']->value) {?><span class="<?php echo $_smarty_tpl->tpl_vars['BTN_ICON']->value;?>
 mr-1"></span><?php } else { ?><span class="fas fa-list mr-1"></span><?php }?><span class="textHolder"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEXT_HOLDER']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS'], 'RELATEDLIST_VIEW');
$_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value) {
$_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->do_else = false;
?><li><a class="dropdown-item js-change-related-view" href="#" data-view="<?php echo $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('view');?>
" data-js="click"><?php if ($_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon') != '') {?><span class="<?php echo $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon');?>
 mr-1"></span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
if ((isset($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_MASSACTIONS']))) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_MASSACTIONS'],'TEXT_HOLDER'=>'LBL_ACTIONS','BTN_ICON'=>'fa fa-list','CLASS'=>'btn-group mr-sm-1 relatedViewGroup c-btn-block-sm-down mb-1 mb-sm-0'), 0, true);
}
if ((isset($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['LISTVIEWBASIC']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['LISTVIEWBASIC'], 'RELATED_LINK');
$_smarty_tpl->tpl_vars['RELATED_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->value) {
$_smarty_tpl->tpl_vars['RELATED_LINK']->do_else = false;
ob_start();
echo \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,'CreateView');
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?><div class="btn-group mr-md-1 c-btn-block-sm-down"><?php ob_start();
echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_selectRelation');
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('IS_SELECT_BUTTON', $_prefixVariable2);?><button type="button" class="btn btn-light addButton<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?> selectRelation <?php }?> modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
 <?php if (!empty($_smarty_tpl->tpl_vars['RELATED_LINK']->value->linkqcs)) {?>quickCreateSupported<?php }?>" <?php echo ' ';
if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?> data-moduleName=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_module')->get('name');?>
 <?php }
echo ' ';
if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->isPageLoadLink())) {
echo ' ';
if ($_smarty_tpl->tpl_vars['RELATION_FIELD']->value) {?> data-name="<?php echo $_smarty_tpl->tpl_vars['RELATION_FIELD']->value->getName();?>
" <?php }
echo ' ';?>
data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
"<?php } else { ?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl(),strlen("javascript:"));?>
;'<?php }
echo ' ';
if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value != true && stripos($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl(),'javascript:') !== 0) {?>name="addButton" <?php }?>><?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == false) {?><span class="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getIcon();?>
 mr-1"></span><?php }
if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?><span class="fas fa-search mr-1"></span><?php }
echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
</button></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ((isset($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_BASIC']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_BASIC'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'relatedListView','CLASS'=>'mr-sm-1 c-btn-block-sm-down'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW_LIST']->value) {?><div class="mr-auto col-xl-2 col-md-4 col-12 px-0 mb-md-0 mb-1"><?php if (count($_smarty_tpl->tpl_vars['CUSTOM_VIEW_LIST']->value) === 1) {?><input type="hidden" class="js-relation-cv-id" value="<?php echo array_key_first($_smarty_tpl->tpl_vars['CUSTOM_VIEW_LIST']->value);?>
" data-js="value" /><?php } else { ?><div class="input-group"><div class="input-group-prepend"><div class="input-group-text"><span class="fas fa-filter"></span></div></div><select class="form-control select2 js-relation-cv-id" data-js="change|select2|value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEW_LIST']->value, 'CV_NAME', false, 'CV_ID');
$_smarty_tpl->tpl_vars['CV_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CV_ID']->value => $_smarty_tpl->tpl_vars['CV_NAME']->value) {
$_smarty_tpl->tpl_vars['CV_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CV_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CV_ID']->value == $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('viewId')) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['CV_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?></div><?php }?><div class="d-flex flex-wrap u-w-sm-down-100 justify-content-between justify-content-md-end"><div class="paginationDiv"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Pagination.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('VIEWNAME'=>'related'), 0, true);
?></div><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value) {?><div class="ml-1"><?php $_smarty_tpl->_assignInScope('COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><input type="hidden" class="entityState" value="<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->has('entityState')) {
echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
} else { ?>Active<?php }?>"><div class="dropdown dropdownEntityState u-remove-dropdown-icon"><button class="btn btn-light dropdown-toggle" type="button" id="dropdownEntityState" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'Archived') {?><span class="fas fa-archive"></span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'Trash') {?><span class="fas fa-trash-alt"></span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'All') {?><span class="fas fa-bars"></span><?php } else { ?><span class="fas fa-undo-alt"></span><?php }?></button><ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownEntityState"><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Active']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Active'];?>
;" <?php }?>><a class="dropdown-item<?php if (!$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') || $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Active') {?> active<?php }?>" href="#" data-value="Active"><span class="fas fa-undo-alt mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_ACTIVE');?>
</a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Archived']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Archived'];?>
;" <?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Archived') {?> active<?php }?>" href="#" data-value="Archived"><span class="fas fa-archive mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');?>
</a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Trash']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Trash'];?>
;" <?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Trash') {?> active<?php }?>" href="#" data-value="Trash"><span class="fas fa-trash-alt mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');?>
</a></li><li><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'All') {?> active<?php }?>" href="#" data-value="All"><span class="fas fa-bars mr-2"></span><?php echo \App\Language::translate('LBL_ALL');?>
</a></li></ul></div></div><?php }?></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['RELATED_VIEW']->value === 'ListPreview') {?><div class="relatedContents mt-1"><input type="hidden" id="defaultDetailViewName" value="<?php echo App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'defaultDetailViewName');?>
" /><div class="c-side-block c-side-block--left js-side-block js-fixed-scroll" data-js="css: height;/scroll"><div class="u-rotate-90"><div class="font-weight-bold text-center"><?php echo \App\Language::translate('LBL_VIEW_LIST');?>
</div></div></div><div class="c-list-preview js-list-preview js-fixed-scroll" data-js="scroll"><div class="c-list-preview__content js-list-preview--scroll" data-js="perfectScrollbar"><div id="recordsList"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath("RelatedListContents.tpl",$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name')), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="c-detail-preview js-detail-preview"><iframe class="listPreviewframe" frameborder="0"></iframe></div><div class="c-side-block c-side-block--right js-side-block js-fixed-scroll" data-js="css: height;/scroll"><div class="u-rotate-90"><div class="font-weight-bold text-center"><?php echo \App\Language::translate('LBL_VIEW_DETAIL');?>
</div></div></div></div><?php } else { ?><div class="relatedContents mt-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath("RelatedListContents.tpl",$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name')), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }?></div><!-- /tpl-Base-RelatedList -->
<?php }
}
