<?php
/* Smarty version 4.2.0, created on 2023-12-26 21:09:08
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\CreateInventoryFieldsStep2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658b32e4d9b8a6_63602941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '496935042a4236bde464126af7b4452b0e2ea35f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\CreateInventoryFieldsStep2.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658b32e4d9b8a6_63602941 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- /tpl-Settings-LayoutEditor-CreateInventoryFieldsStep2 --><div class="tpl-Settings-LayoutEditor-CreateInventoryFieldsStep2 modal fade" tabindex="-1" data-js="container"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><?php if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('id')) {?><h5 class="modal-title"><?php echo \App\Language::translate('LBL_EDITING_INVENTORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php } else { ?><h5 class="modal-title"><?php echo \App\Language::translate('LBL_CREATING_INVENTORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><?php }?><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal"><div class="modal-body"><input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('id');?>
" /><input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getType();?>
" /><input type="hidden" name="columnName" id="columnName" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getColumnName();?>
" /><div class="form-group row align-items-center"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_NAME_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-7 col-form-label"><b><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getType(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getEditTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div><!-- /tpl-Settings-LayoutEditor-CreateInventoryFieldsStep2 -->
<?php }
}
