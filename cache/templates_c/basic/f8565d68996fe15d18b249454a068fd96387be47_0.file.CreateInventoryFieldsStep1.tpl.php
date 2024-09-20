<?php
/* Smarty version 4.2.0, created on 2023-12-26 21:09:26
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\CreateInventoryFieldsStep1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658b32f6113170_65858191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8565d68996fe15d18b249454a068fd96387be47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\CreateInventoryFieldsStep1.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658b32f6113170_65858191 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-CreateInventoryFieldsStep1 --><div class="modal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_CREATING_INVENTORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><input type="hidden" value="step1" id="mode" /><div class="form-horizontal"><div class="form-group row align-items-center"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_SELECT_TYPE_OF_INVENTORY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-7"><select name="type" class="select2 form-control type" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODELS']->value, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
$_smarty_tpl->_assignInScope('COLUMN', $_smarty_tpl->tpl_vars['ITEM']->value->getColumnName());
if ((!(isset($_smarty_tpl->tpl_vars['FIELDS_EXISTS']->value[$_smarty_tpl->tpl_vars['COLUMN']->value])) || !$_smarty_tpl->tpl_vars['ITEM']->value->isOnlyOne()) && in_array($_smarty_tpl->tpl_vars['BLOCK']->value,$_smarty_tpl->tpl_vars['ITEM']->value->getBlocks())) {?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value->getType();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value->getDefaultLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="well well-small"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODELS']->value, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
$_smarty_tpl->_assignInScope('COLUMN', $_smarty_tpl->tpl_vars['ITEM']->value->getColumnName());
if ((!(isset($_smarty_tpl->tpl_vars['FIELDS_EXISTS']->value[$_smarty_tpl->tpl_vars['COLUMN']->value])) || !$_smarty_tpl->tpl_vars['ITEM']->value->isOnlyOne()) && in_array($_smarty_tpl->tpl_vars['BLOCK']->value,$_smarty_tpl->tpl_vars['ITEM']->value->getBlocks())) {?><h5><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value->getDefaultLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><p><?php echo \App\Language::translate(($_smarty_tpl->tpl_vars['ITEM']->value->getDefaultLabel()).('_DESC'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p><hr /><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="modal-footer"><div class="float-right cancelLinkContainer"><button class="btn btn-success mr-1 js-next-button" type="submit" data-js="click"><span class="fas fa-lg fa-arrow-circle-right mr-1"></span><b><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></button><button class="btn btn-danger" type="reset" data-dismiss="modal" <?php echo ' ';?>
title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span class="fas fa-times mr-1"></span><b><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></button></div></div></div></div></div><!-- /tpl-Settings-LayoutEditor-CreateInventoryFieldsStep1 -->
<?php }
}
