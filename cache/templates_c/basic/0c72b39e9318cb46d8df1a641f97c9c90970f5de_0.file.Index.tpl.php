<?php
/* Smarty version 4.2.0, created on 2024-01-03 15:42:55
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\QuickCreateEditor\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6595726fe2ddc2_27354726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c72b39e9318cb46d8df1a641f97c9c90970f5de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\QuickCreateEditor\\Index.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6595726fe2ddc2_27354726 (Smarty_Internal_Template $_smarty_tpl) {
?><style type="text/css">
	.fieldDetailsForm .zeroOpacity {
		display: none;
	}

	.visibility {
		visibility: hidden;
	}

	.paddingNoTop20 {
		padding: 0 20px 20px 20px;
	}
</style>
<div class="tpl-Settings-QuickCreateEditor-Index" id="quickCreateEditorContainer"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><div class="o-breadcrumb widget_header row align-items-center"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="float-right col-md-4 h3"><select class="select2 form-control" name="quickCreateEditorModules"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'moduleModel', false, 'mouleName');
$_smarty_tpl->tpl_vars['moduleModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mouleName']->value => $_smarty_tpl->tpl_vars['moduleModel']->value) {
$_smarty_tpl->tpl_vars['moduleModel']->do_else = false;
if ($_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView')) {
$_smarty_tpl->_assignInScope('quickCreateModule', $_smarty_tpl->tpl_vars['moduleModel']->value->isQuickCreateSupported());
$_smarty_tpl->_assignInScope('singularLabel', $_smarty_tpl->tpl_vars['moduleModel']->value->getSingularLabelKey());
if ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Calendar') {
$_smarty_tpl->_assignInScope('singularLabel', 'LBL_EVENT_OR_TASK');
}
if ($_smarty_tpl->tpl_vars['quickCreateModule']->value == '1') {?><option value="<?php echo $_smarty_tpl->tpl_vars['mouleName']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['mouleName']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['mouleName']->value);?>
</option><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#detailViewLayout"><strong><?php echo \App\Language::translate('LBL_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent paddingNoTop20 themeTableColor overflowVisible"><div class="tab-pane active" id="detailViewLayout"><div class="btn-toolbar justify-content-end"><button class="btn btn-success saveFieldSequence visibility mt-2 mb-2" type="button"><span class="fa fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div id="moduleBlocks"><input value="<?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
" type="hidden" id="quickCreateLayout" /><?php if ($_smarty_tpl->tpl_vars['LAYOUT']->value != 'blocks') {?><div class="editFieldsTable block marginBottom10px border1px blockSortable rounded bg-white"><div class="row layoutBlockHeader no-margin"><div class="blockLabel col-md-5 marginLeftZero pt-1 pb-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</div></div><div class="blockFieldsList row no-margin padding5"><ul name="sortable1" class="connectedSortable col-md-6 list-unstyled"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'fieldlist', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']++;
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index'] : null)%2 == 0) {?><li><div class="opacity editFields marginLeftZero border1px" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="row padding1per"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());?><div class="col-sm-1 col-2 col-md-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a><?php }?></div><div class="col-sm-11 col-10 col-md-10 marginLeftZero text-break"><span class="fieldLabel"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }?></span></div></div></div></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><ul name="sortable2" class="connectedSortable col-md-6 list-unstyled"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, NULL, 'fieldlist1', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']++;
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index'] : null)%2 != 0) {?><li><div class="opacity editFields marginLeftZero border1px" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-sequence="$FIELD_MODEL->get'sequence')}"><div class="row padding1per"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());?><span class="col-sm-1 col-2 col-md-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a><?php }?></span><div class="col-sm-11 col-10 col-md-10 marginLeftZero text-break"><span class="fieldLabel"><?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;</span></div></div></div></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'BLOCK_MODEL', false, 'BLOCK_LABEL_KEY');
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value => $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value) {
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('FIELDS_LIST', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->getLayoutBlockActiveFields());
$_smarty_tpl->_assignInScope('BLOCK_ID', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id'));
$_smarty_tpl->_assignInScope('BLOCK_ICON', $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('icon'));
$_tmp_array = isset($_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']) ? $_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['BLOCK_ID']->value] = $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value;
$_smarty_tpl->_assignInScope('ALL_BLOCK_LABELS', $_tmp_array);?><div id="block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"class="editFieldsTable block block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
 mb-2 border1px"data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-sequence="<?php echo $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('sequence');?>
"><div class="layoutBlockHeader d-flex flex-wrap justify-content-between m-0 p-1 pt-1 w-100"><div class="blockLabel u-white-space-nowrap"><strong class="align-middle"><?php if (!empty($_smarty_tpl->tpl_vars['BLOCK_ICON']->value)) {?><span class="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ICON']->value;?>
 mr-2"></span><?php }
echo App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</strong></div></div><div class="blockFieldsList blockFieldsSortable row m-0 p-1 u-min-height-50"><ul name="<?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isFieldsSortableAllowed($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value)) {?>sortable1<?php }?>"class="sortTableUl js-sort-table1 connectedSortable col-md-6 mb-0" data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'FIELD_MODEL', false, NULL, 'fieldlist', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist']->value['index'] : null)%2 == 0) {?><li><div class="opacity editFields ml-0 border1px" data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="row p-2"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());?><div class="col-2 col-sm-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
"border="0"alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a><?php }?></div><div class="col-10 col-sm-10 ml-0 fieldContainer text-break"><span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
]<?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }?></span></div></div></div></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><ul <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_MODEL']->value->isFieldsSortableAllowed($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value)) {?>name="sortable2" <?php }?>class="connectedSortable js-sort-table2 sortTableUl col-md-6 mb-0"data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_LIST']->value, 'FIELD_MODEL', false, NULL, 'fieldlist1', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fieldlist1']->value['index'] : null)%2 != 0) {?><li><div class="opacity editFields ml-0 border1px" data-block-id="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"><div class="row p-2"><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());?><div class="col-2 col-sm-2">&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><a><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
"border="0"alt="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a><?php }?></div><div class="col-10 col-sm-10 ml-0 fieldContaine text-break"><span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;[<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
]<?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?><span class="redColor">*</span><?php }?></span></div></div></div></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></div></div></div></div>
<?php }
}
