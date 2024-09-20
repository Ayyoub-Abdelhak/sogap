<?php
/* Smarty version 4.2.0, created on 2024-05-09 17:38:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\ImportUndoResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663cfbfa316963_88130105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1ae8af267e534db7d9a029a9d3c0d0fd326d829' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\ImportUndoResult.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663cfbfa316963_88130105 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Import-ImportUndoResult --><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="col-md-3 col-sm-2"></div><div class="col-md-6 col-sm-8 col-12"><div class="js-toggle-panel c-panel" data-js="click"><div class="card-header"><h4 class="card-title"><?php echo \App\Language::translate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
- <?php echo \App\Language::translate('LBL_UNDO_RESULT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></div><div class="card-body form-horizontal font-larger"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</div><?php }?><div class="form-group row"><div class="col-md-7 col-sm-6 col-8 textAlignRight fontBold"><?php echo \App\Language::translate('LBL_TOTAL_RECORDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</div><div class="col-md-5 col-sm-6 col-4"><?php echo $_smarty_tpl->tpl_vars['TOTAL_RECORDS']->value;?>
</div></div><div class="form-group row"><div class="col-md-7 col-sm-6 col-8 textAlignRight fontBold"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_DELETED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</div><div class="col-md-5 col-sm-6 col-4"><?php echo $_smarty_tpl->tpl_vars['DELETED_RECORDS_COUNT']->value;?>
</div></div></div><div class="modal-footer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Done_Buttons.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="col-md-3 col-sm-2"></div><!-- /tpl-Import-ImportUndoResult -->
<?php }
}
