<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:47:26
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\TreesManager\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585a17e0906f7_15948292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '316510e283cf9a1e270e6aee2fe8e3bf034fb200' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\TreesManager\\EditView.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585a17e0906f7_15948292 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-TreesManager-EditView --><div class="editViewContainer"><form class="form-horizontal recordEditView" id="EditView" name="EditView" method="post" action="index.php" enctype="multipart/form-data"><input type="hidden" name="module" value="TreesManager" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" id="treeLastID" value="<?php echo $_smarty_tpl->tpl_vars['LAST_ID']->value;?>
" /><input type="hidden" id="access" value="<?php echo $_smarty_tpl->tpl_vars['ACCESS']->value;?>
" /><input type="hidden" name="tree" id="treeValues" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TREE']->value);?>
' /><input type="hidden" name="replace" id="replaceIds" value="" /><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="form-group row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getEditViewStructure(), 'FIELD_MODEL', false, 'FIELD_NAME', 'field', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="col-12 col-md-6 mb-2 js-field-container"><label class="u-text-small-bold  mb-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip')) {?><div class="js-popover-tooltip ml-1 d-inline my-auto u-h-fit u-cursor-pointer" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div><?php }?>:</label><div class="fieldValue m-auto"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?><input type="text" disabled="disabled" class="form-control" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()));?>
" /><?php } else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'RECORD'=>null), 0, true);
}?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><hr><div class="row align-items-center"><div class="col-md-3"><label class=""><strong><?php echo \App\Language::translate('LBL_ADD_ITEM_TREE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="col-md-8 d-flex"><input type="text" class="fieldValue col-md-4 addNewElement form-control"><button class="btn btn-primary addNewElementBtn ml-1 noWrap" type="button"><span class="fas fa-plus u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_ADD_TO_TREES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div><hr class="mt-1"><div class="modal-header" tabindex="-1"><div id="treeContents"></div></div><br /><div class="float-right"><button class="btn btn-success saveTree mr-1"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="cancelLink btn btn-danger" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times"></span>&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></div><!-- /tpl-Settings-TreesManager-EditView -->
<?php }
}
