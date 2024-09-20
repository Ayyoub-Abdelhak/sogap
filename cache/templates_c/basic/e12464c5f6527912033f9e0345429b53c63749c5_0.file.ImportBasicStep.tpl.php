<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:37:21
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\ImportBasicStep.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818e81e46206_60326824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e12464c5f6527912033f9e0345429b53c63749c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\ImportBasicStep.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818e81e46206_60326824 (Smarty_Internal_Template $_smarty_tpl) {
?><div><form onsubmit="" action="index.php" enctype="multipart/form-data" method="POST" name="importBasic"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><input type="hidden" name="view" value="Import" /><input type="hidden" name="mode" value="uploadAndParse" /><input type="hidden" name="src_record" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('src_record');?>
" /><input type="hidden" name="relationId" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('relationId');?>
" /><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="col-12 searchUIBasic px-0 m-0"><?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value != '') {?><div class="col-12"><div class="style1"><span class="alert-warning"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</span></div></div><?php }?><div class="importContents col-12 mt-2"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Step1.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="importContents col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Step2.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php if (empty($_smarty_tpl->tpl_vars['DUPLICATE_HANDLING_NOT_SUPPORTED']->value)) {?><div class="importContents col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Step3.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }?><div class="col-12 pb-3"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Basic_Buttons.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></form></div>
<?php }
}
