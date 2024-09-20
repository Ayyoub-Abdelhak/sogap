<?php
/* Smarty version 4.2.0, created on 2024-01-16 11:39:54
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\MassEditForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a65cfaee68a9_76484046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24636ed3db4de65ab2fbfc8acf34fc66126aa49e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\MassEditForm.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a65cfaee68a9_76484046 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['SCRIPTS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SCRIPTS']->value, 'jsModel', false, 'index');
$_smarty_tpl->tpl_vars['jsModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
$_smarty_tpl->tpl_vars['jsModel']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><div id="massEditContainer" class="modal" tabindex="-1" role="dialog"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><i class="fa fa-edit"></i><?php echo \App\Language::translate('LBL_MASS_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><form id="massEdit" name="MassEdit" method="post" action="index.php"><?php if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input type="hidden" name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
' /><?php }
if (!empty($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value)) {?><input type="hidden" name="listFilterFields" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value);?>
' /><?php }?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="MassSave" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" name="selected_ids" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value));?>
"><input type="hidden" name="excluded_ids" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value));?>
"><input type="hidden" name="search_key" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" /><input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" name="search_params" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
" /><input type="hidden" name="advancedConditions" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value));?>
" /><div class="modal-body"><ul class="nav nav-tabs massEditTabs"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL', 'blockIterator', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_blockIterator']->value['iteration']++;
if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) > 0) {?><li class="nav-item col-6 col-sm-4 p-0 text-center"><a class="nav-link<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_blockIterator']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blockIterator']->value['iteration'] : null) == 1) {?> active<?php }?>"href="#block_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_blockIterator']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blockIterator']->value['iteration'] : null);?>
"data-toggle="tab"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><div class="tab-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL', 'blockIterator', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_blockIterator']->value['iteration']++;
if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) > 0) {
$_smarty_tpl->_assignInScope('BLOCK_INDEX', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_blockIterator']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_blockIterator']->value['iteration'] : null));?><div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['BLOCK_INDEX']->value == 1) {?> show active<?php }?>"id="block_<?php echo $_smarty_tpl->tpl_vars['BLOCK_INDEX']->value;?>
" role="tabpanel"><div class="p-3"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != 104 && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()) {?><div class="form-row mb-2 js-form-row-container" data-js="container"><div class="col-sm-6 col-lg-4"><div class="d-flex flex-row"><div class="btn-group-toggle mt-1 w-100" data-toggle="buttons"><label class="btn btn-sm btn-outline-secondary w-100 text-right" id="block-<?php echo $_smarty_tpl->tpl_vars['BLOCK_INDEX']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
-label"><input aria-pressed="false" autocomplete="off" type="checkbox" id="selectRow<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"title="<?php echo \App\Language::translate('LBL_SELECT_SINGLE_ROW');?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"class="selectRow" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?> disabled<?php }?>>&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</label></div><?php if (method_exists($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel(),'setValueFromMassEdit')) {
$_smarty_tpl->_assignInScope('MASS_EDIT_SPECIAL_FIELD_NAME', "overwritten_".((string)$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()));?><div class="btn-group-toggle mt-1 js-popover-tooltip" data-js="popover" data-toggle="buttons" data-trigger="hover focus" data-content="<?php echo \App\Language::translate("LBL_MASS_EDIT_INCLUDE_INFO");?>
"><label class="btn btn-outline-info btn-sm"><span class="fas fa-plus"></span><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['MASS_EDIT_SPECIAL_FIELD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['MASS_EDIT_SPECIAL_FIELD_NAME']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['MASS_EDIT_SPECIAL_FIELD_NAME']->value;?>
"></label></div><?php }?></div></div><div class="col-sm-6 col-lg-8"><div class="fieldValue" id="block-<?php echo $_smarty_tpl->tpl_vars['BLOCK_INDEX']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
-input"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('VIEW'=>'MassEdit','RECORD'=>null), 0, true);
?></div></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div>
<?php }
}
