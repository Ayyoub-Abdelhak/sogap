<?php
/* Smarty version 4.2.0, created on 2024-07-17 12:23:02
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\SummaryWidgetsContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6697a99663c893_64687441',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7b12b1cc7ca177d7c7f9336df78a1a6fa45d126' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\SummaryWidgetsContent.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6697a99663c893_64687441 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('IS_INVENTORY', ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isInventory() && !empty($_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value)));
if (!$_smarty_tpl->tpl_vars['TYPE_VIEW']->value || $_smarty_tpl->tpl_vars['TYPE_VIEW']->value == 'List') {?><input type="hidden" class="relatedView" value="List"><div class="listViewEntriesDiv relatedContents table-responsive"><table class="table c-detail-widget__table listViewEntriesTable"><thead><tr class="text-left"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><th class="noWrap p-1"></th><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
?><th nowrap class="p-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getModuleName());?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_CREATED_TIME',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_CREATED_USER',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_COMMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><th class="noWrap p-1"></th><?php }?></tr></thead><?php $_smarty_tpl->_assignInScope('COUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD');
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = false;
?><tr class="listViewEntries js-list__row" data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?>data-recordUrl="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
" <?php }?> data-js="container"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><td class="noWrap leftRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListLeftSide.tpl',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
$_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="text-left <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;
if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType() == 'documentsFileUpload' && $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isEditable() && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isEditable() && 'I' === $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getValueByField('filelocationtype')) {?> js-drop-container<?php }?>"data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->getName();?>
"data-field-name="<?php echo $_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value;?>
"data-field-type="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType();?>
"nowrap><?php if (($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isNameField() == true || $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getUIType() == '4') && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
 js-popover-tooltip--record" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('fromOutsideList') == true) {
echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value));
} else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);
}?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-left" data-field-type="rel_created_time"nowrap><?php echo App\Fields\DateTime::formatToDisplay($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_time'));?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-left" data-field-type="rel_created_user"nowrap><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_user'));?>
</td><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-left" data-field-type="rel_comment" nowrap><?php if (strlen($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment')) > App\Config::relation('COMMENT_MAX_LENGTH')) {?><a class="js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');?>
"><?php echo App\TextUtils::textTruncate($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment'),App\Config::relation('COMMENT_MAX_LENGTH'));?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');
}?>&nbsp;&nbsp;<span class="actionImages"><a class="showModal" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getModuleName();?>
&view=RelatedCommentModal&record=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getId();?>
&relid=<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
&relmodule=<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name');?>
"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></a></span></td><?php }
if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);?><td nowrap><button type="button" class="btn btn-sm btn-info js-popover-tooltip js-toggle-hidden-row" data-js="popover" data-placement="left" data-element="inventory" data-content="<?php echo \App\Language::translate('LBL_SHOW_INVENTORY_ROW');?>
"><span class="fas fa-arrows-alt-v"></span></button></td><?php }?></tr><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {
$_smarty_tpl->_assignInScope('INVENTORY_DATA', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getInventoryData());
$_smarty_tpl->_assignInScope('INVENTORY_MODEL', Vtiger_Inventory_Model::getInstance($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getModuleName()));?><tr class="js-hidden-row d-none"><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isQuickSearchEnabled()) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
}?><td colspan="<?php echo $_smarty_tpl->tpl_vars['COUNT']->value+1;?>
" class="backgroundWhiteSmoke"><div class="js-hidden-row__block d-none" data-element="inventory"><table class="table table-sm no-margin d-none" data-element="inventory"><thead><tr><?php
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
?><tr><?php if ($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']) {
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></td></tr><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div><?php } elseif ($_smarty_tpl->tpl_vars['TYPE_VIEW']->value == 'Summary') {?><div class="listViewEntriesDiv relatedContents table-responsive"><div class="carousel slide" data-interval="false" data-ride="carousel"><div class="carousel-inner" role="listbox"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD', false, NULL, 'recordlist', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['index'];
?><div class="carousel-item  js-carousel-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['first'] : null)) {?>active<?php }?>"data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
" data-js="click"><table class="c-detail-widget__table u-table-fixed"><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
?><tr class="c-table__row--hover border-bottom"><td class="u-w-40per <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"><label class="font-weight-bold mb-0"><?php $_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getIcon('Summary'));
if ((isset($_smarty_tpl->tpl_vars['ICON']->value['name']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value['name'];?>
 mr-2"></span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</label></td><?php $_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"><div class="value u-word-break pr-0"><?php if (($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isNameField() == true) && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
 js-popover-tooltip--record" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);
}?></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="float-right py-1"><?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="addButton" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getFullDetailViewUrl();?>
"><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" type="button"><span title="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="fas fa-th-list"></span></button></a><?php }
if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isEditable()) {?><a class="addButton" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getEditViewUrl();?>
"><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" type="button"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="yfi yfi-full-editing-view"></span></button></a><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isQuickCreateSupported()) {?><button type="button" class="btn btn-sm btn-light js-quick-edit-modal js-popover-tooltip" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getModuleName();?>
" data-record="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
" data-content="<?php echo \App\Language::translate('LBL_QUICK_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-js="click|popover"><span title="<?php echo \App\Language::translate('LBL_QUICK_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="yfi yfi-quick-creation "></span></button><?php }
}?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php } else { ?><div class="listViewEntriesDiv relatedContents table-responsive"><table class="table c-detail-widget__table listViewEntriesTable"><thead><tr class="text-center"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><th class="noWrap p-1">&nbsp;</th><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
?><th nowrap class="p-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_CREATED_TIME',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_CREATED_USER',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><th class="p-1"><?php echo \App\Language::translate('LBL_RELATION_COMMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }?></tr></thead><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD');
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = false;
?><tr class="listViewEntries showSummaryRelRecord" data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?>data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
'<?php }?>><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><td class="noWrap leftRecordActions listButtons <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListLeftSide.tpl',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD');
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
$_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="text-center <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType();?>
"nowrap><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_created_time"nowrap><?php echo App\Fields\DateTime::formatToDisplay($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_time'));?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_created_user"nowrap><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_user'));?>
</td><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_comment" nowrap><?php if (strlen($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment')) > App\Config::relation('COMMENT_MAX_LENGTH')) {?><a class="js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');?>
"><?php echo vtlib\Functions::textLength($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment'),App\Config::relation('COMMENT_MAX_LENGTH'));?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');
}?>&nbsp;&nbsp;<span class="actionImages"><a class="showModal" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getModuleName();?>
&view=RelatedCommentModal&record=<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getId();?>
&relid=<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
&relmodule=<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name');?>
"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></a></span></td><?php }?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD', false, NULL, 'recordlist', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->tpl_vars['RELATED_RECORD']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_recordlist']->value['index'];
$_smarty_tpl->_assignInScope('ID', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId());?><div class="hide summaryRelRecordView summaryRelRecordView<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"><table class="c-detail-widget__table u-table-fixed"><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_SUMMARY_HEADERS']->value, 'HEADER_FIELD');
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->do_else = false;
?><tr class="c-table__row--hover border-bottom"><td class="u-w-40per <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"><label class="font-weight-bold mb-0"><?php $_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getIcon('Summary'));
if ((isset($_smarty_tpl->tpl_vars['ICON']->value['name']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value['name'];?>
 mr-2"></span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</label></td><?php $_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());?><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"><div class="value u-word-break pr-0"><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);?>
</div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="float-right py-1"><?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="addButton" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><button type="button" class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span title="<?php echo \App\Language::translate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="fas fa-th-list"></span></button></a><?php }
if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isEditable()) {?><a class="addButton" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getEditViewUrl();?>
"><button type="button" class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="yfi yfi-full-editing-view"></span></button></a><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isQuickCreateSupported()) {?><button type="button" class="btn btn-sm btn-light js-quick-edit-modal js-popover-tooltip" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getModuleName();?>
" data-record="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
" data-content="<?php echo \App\Language::translate('LBL_QUICK_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-js="click|popover"><span title="<?php echo \App\Language::translate('LBL_QUICK_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="yfi yfi-quick-creation "></span></button><?php }
}?><button type="button" class="btn btn-sm btn-light js-popover-tooltip"><span class="far fa-times-circle hideSummaryRelRecordView u-cursor-pointer"></span></button></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
}
