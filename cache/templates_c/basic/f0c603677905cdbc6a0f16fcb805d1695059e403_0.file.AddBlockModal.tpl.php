<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:35:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\AddBlockModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818e2c3850b6_55134558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c603677905cdbc6a0f16fcb805d1695059e403' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\AddBlockModal.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818e2c3850b6_55134558 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal addBlockModal fade tpl-Settings-LayoutEditor-AddBlockModal"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5><?php echo App\Language::translate('LBL_ADD_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal addCustomBlockForm"><div class="modal-body"><div class="form-group"><div class="col-md-3 col-form-label"><span class="redColor">*</span><span><?php echo App\Language::translate('LBL_BLOCK_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-md-8 controls"><input type="text" name="label" class="form-control" data-validation-engine="validate[required]" /></div></div><div class="form-group"><div class="col-md-3 col-form-label"><?php echo App\Language::translate('LBL_ADD_AFTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-8 controls"><select class="form-control" name="beforeBlockId"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_BLOCK_LABELS']->value, 'BLOCK_LABEL', false, 'BLOCK_ID');
$_smarty_tpl->tpl_vars['BLOCK_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_ID']->value => $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value) {
$_smarty_tpl->tpl_vars['BLOCK_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div>
<?php }
}
