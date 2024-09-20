<?php
/* Smarty version 4.2.0, created on 2023-12-25 14:30:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Picklist\Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658983e84d05d9_02850066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ced1aac67d09a2fe2f4f636fcfb9394fb04c550' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Picklist\\Edit.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658983e84d05d9_02850066 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Picklist-Edit --><div class="modal-body js-modal-body" data-js="container"><form id="renameItemForm" class="form-horizontal validateForm" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="edit" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" /><?php if ($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {?><input type="hidden" name="primaryKeyId" value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['picklistValueId'];?>
" /><input type="hidden" name="picklist_valueid" value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value['picklist_valueid'];?>
" /><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITEM_MODEL']->value->getEditFields(), 'FIELD_MODEL', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="form-group row align-items-center"><label class="u-font-weight-600 col-lg-3 textAlignRight align-self-center col-form-label"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip')) {?><div class="js-popover-tooltip ml-1 d-inline my-auto u-h-fit u-cursor-pointer" data-js="popover" data-trigger="hover focus" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div><?php }?>:</label><div class="fieldValue col-lg-9"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?><input type="text" disabled="disabled" class="form-control-plaintext" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),false,false,true));?>
" /><?php } else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'RECORD'=>null), 0, true);
}?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></form></div><!-- /tpl-Settings-Picklist-Edit -->
<?php }
}
