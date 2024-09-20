<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:07:34
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\ImportResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581959610f234_60823429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '081e4eba3ac82fca8119fdc2e15cb5ad07c93dbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\ImportResult.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581959610f234_60823429 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Import-ImportResult --><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
"/><table class="searchUIBasic well col-12 m-0"><tr><td class="font-x-large text-center"><h3><strong><?php echo \App\Language::translate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
- <?php echo \App\Language::translate('LBL_RESULT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></h3></td></tr><?php if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)) {?><tr><td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</td></tr><?php }?><tr><td><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Result_Details.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td></tr><tr><td class="float-right"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Finish_Buttons.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td></tr></table></div><!-- /tpl-Import-ImportResult -->
<?php }
}
