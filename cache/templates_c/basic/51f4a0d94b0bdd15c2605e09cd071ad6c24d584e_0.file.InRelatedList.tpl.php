<?php
/* Smarty version 4.2.0, created on 2023-12-28 22:21:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Calendar\InRelatedList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658de6f421bc72_05999034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51f4a0d94b0bdd15c2605e09cd071ad6c24d584e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Calendar\\InRelatedList.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658de6f421bc72_05999034 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-RelatedList relatedContainer js-list__form" data-js="container"><?php $_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));
$_smarty_tpl->_assignInScope('INVENTORY_MODULE', $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isInventory());?><input type="hidden" name="currentPageNum" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getCurrentPage();?>
" /><input type="hidden" name="relatedModuleName" class="relatedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name');?>
" /><input type="hidden" id="orderBy" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ORDER_BY']->value));?>
"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_ENTIRES_COUNT']->value;?>
" id="noOfEntries" /><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit' /><input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['TOTAL_ENTRIES']->value;?>
" id='totalCount' /><input type="hidden" id="autoRefreshListOnChange" value="<?php echo App\Config::performance('AUTO_REFRESH_RECORD_LIST_ON_SELECT_CHANGE');?>
" /><input type="hidden" id="search_params" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
"><input type="hidden" class="js-empty-fields" data-js="value" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['LOCKED_EMPTY_FIELDS']->value));?>
" /><div class="relatedHeader calendarRelatedHeader mb-1"><div class="row"><div class="col-sm-6 col-md-6"><?php if (count($_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS']) > 0) {?><div class="btn-group pr-2 relatedViewGroup"><?php $_smarty_tpl->_assignInScope('TEXT_HOLDER', '');
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
"></span><?php } else { ?><span class="fas fa-list"></span><?php }?>&nbsp;<span class="textHolder"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEXT_HOLDER']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>&nbsp;<span class="caret"></span></button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['RELATEDLIST_VIEWS'], 'RELATEDLIST_VIEW');
$_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value) {
$_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->do_else = false;
?><li><a class="dropdown-item" href="#" data-view="<?php echo $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('view');?>
"><?php if ($_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon') != '') {?><span class="<?php echo $_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->get('linkicon');?>
"></span>&nbsp;&nbsp;<?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATEDLIST_VIEW']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LIST_LINKS']->value['LISTVIEWBASIC'], 'RELATED_LINK');
$_smarty_tpl->tpl_vars['RELATED_LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->value) {
$_smarty_tpl->tpl_vars['RELATED_LINK']->do_else = false;
ob_start();
echo \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,'CreateView');
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?><div class="btn-group pr-2"><?php ob_start();
echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_selectRelation');
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('IS_SELECT_BUTTON', $_prefixVariable2);?><button type="button" class="btn btn-light addButton<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?> selectRelation <?php }?> modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->linkqcs == true) {?>quickCreateSupported<?php }?>"<?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?>data-moduleName=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('_module')->get('name');?>
 <?php }
if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->isPageLoadLink())) {
if ($_smarty_tpl->tpl_vars['RELATION_FIELD']->value) {?> data-name="<?php echo $_smarty_tpl->tpl_vars['RELATION_FIELD']->value->getName();?>
" <?php }?>data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
"<?php }
if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value != true) {?>name="addButton" <?php }?>><?php if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == false) {?><span class="fas fa-plus"></span><?php }
if ($_smarty_tpl->tpl_vars['IS_SELECT_BUTTON']->value == true) {?><span class="fas fa-search"></span><?php }?>&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
</strong></button></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['TIME']->value == 'current') {?>active<?php }?>"><input class="js-switch--calendar" type="radio" name="options" id="calendar-option1" title="<?php echo \App\Language::translate('LBL_CHANGE_ACTIVITY_TYPE');?>
"data-js="change"data-on-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['TIME']->value == 'current') {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_CURRENT');?>
</label><label class="btn btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['TIME']->value != 'current') {?>active<?php }?>"><input class="js-switch--calendar" type="radio" name="options" id="calendar-option2" title="<?php echo \App\Language::translate('LBL_CHANGE_ACTIVITY_TYPE');?>
"data-js="change"data-off-text="<?php echo App\Language::translate('LBL_HISTORY');?>
"autocomplete="off"<?php if ($_smarty_tpl->tpl_vars['TIME']->value != 'current') {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_HISTORY');?>
</label></div></div><div class="col-12 col-sm-6 col-md-6"><div class="float-right"><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value) {?><div class="float-right pl-1"><?php $_smarty_tpl->_assignInScope('COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><input type="hidden" class="entityState" value="<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->has('entityState')) {
echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
} else { ?>Active<?php }?>" /><div class="dropdown dropdownEntityState u-remove-dropdown-icon"><button class="btn btn-light dropdown-toggle" type="button" id="dropdownEntityState" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'Archived') {?><span class="fas fa-archive"></span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'Trash') {?><span class="fas fa-trash-alt"></span><?php } elseif ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') === 'All') {?><span class="fas fa-bars"></span><?php } else { ?><span class="fas fa-undo-alt"></span><?php }?></button><ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownEntityState"><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Active']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Active'];?>
;" <?php }?>><a class="dropdown-item<?php if (!$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') || $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Active') {?> active<?php }?>"href="#" data-value="Active"><span class="fas fa-undo-alt"></span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_ENTITY_STATE_ACTIVE');?>
</a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Archived']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Archived'];?>
;" <?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Archived') {?> active<?php }?>"href="#" data-value="Archived"><span class="fas fa-archive"></span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');?>
</a></li><li <?php if ($_smarty_tpl->tpl_vars['COLOR']->value['Trash']) {?>style="border-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value['Trash'];?>
;" <?php }?>><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'Trash') {?> active<?php }?>"href="#" data-value="Trash"><span class="fas fa-trash-alt"></span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');?>
</a></li><li><a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState') == 'All') {?> active<?php }?>"href="#" data-value="All"><span class="fas fa-bars"></span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_ALL');?>
</a></li></ul></div></div><?php }?></div><div class="paginationDiv float-right"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Pagination.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('VIEWNAME'=>'related'), 0, true);
?></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['RELATED_VIEW']->value === 'ListPreview') {?><div class="relatedContents"><div class="d-flex"><input type="hidden" id="defaultDetailViewName" value="<?php echo App\Config::module($_smarty_tpl->tpl_vars['MODULE']->value,'defaultDetailViewName');?>
" /><div class="c-side-block c-side-block--left js-side-block js-fixed-scroll" data-js="css: height;/scroll"><div class="u-rotate-90"><div class="font-weight-bold text-center"><?php echo \App\Language::translate('LBL_VIEW_LIST');?>
</div></div></div><div class="c-list-preview js-list-preview js-fixed-scroll" data-js="scroll"><div class="c-list-preview__content js-list-preview--scroll" data-js="perfectScrollbar"><div id="recordsList"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath("RelatedListContents.tpl",$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name')), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="c-detail-preview js-detail-preview "><iframe class="listPreviewframe border1px" frameborder="0"></iframe></div><div class="c-side-block c-side-block--right js-side-block js-fixed-scroll" data-js="css: height;/scroll"><div class="u-rotate-90"><div class="font-weight-bold text-center"><?php echo \App\Language::translate('LBL_VIEW_DETAIL');?>
</div></div></div></div></div><?php } else { ?><div class="relatedContents"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath("RelatedListContents.tpl",$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name')), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }?></div>
<?php }
}
