<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:38:45
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\ImportAdvanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818ed5895258_96757771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '889441bc9e969a1a0fbca2f8016d5b869a6c9fa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\ImportAdvanced.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818ed5895258_96757771 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div><form action="index.php" enctype="multipart/form-data" method="POST" name="importAdvanced"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><input type="hidden" name="view" value="Import" /><input type="hidden" name="mode" value="import" /><input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['USER_INPUT']->value->get('type');?>
" /><input type="hidden" name="extension" value="<?php echo $_smarty_tpl->tpl_vars['USER_INPUT']->value->get('extension');?>
" /><input type="hidden" name="has_header" value='<?php echo $_smarty_tpl->tpl_vars['HAS_HEADER']->value;?>
' /><input type="hidden" name="file_encoding" value='<?php echo $_smarty_tpl->tpl_vars['USER_INPUT']->value->get('file_encoding');?>
' /><input type="hidden" name="delimiter" value='<?php echo $_smarty_tpl->tpl_vars['USER_INPUT']->value->get('delimiter');?>
' /><input type="hidden" name="merge_type" value='<?php echo $_smarty_tpl->tpl_vars['USER_INPUT']->value->get('merge_type');?>
' /><input type="hidden" name="merge_fields" value='<?php echo $_smarty_tpl->tpl_vars['MERGE_FIELDS']->value;?>
' /><input type="hidden" id="mandatory_fields" name="mandatory_fields" value='<?php echo $_smarty_tpl->tpl_vars['ENCODED_MANDATORY_FIELDS']->value;?>
' /><input type="hidden" name="src_record" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('src_record');?>
" /><input type="hidden" name="relationId" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('relationId');?>
" /><table class="searchUIBasic col-12 no-margin paddingLRZero"><?php if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)) {?><tr><td class="style1" align="left" colspan="2"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</td></tr><?php }?><tr><td class="leftFormBorder1" colspan="2" valign="top"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Step4.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td></tr><tr><td align="right" colspan="2"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Advanced_Buttons.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td></tr></table></form>
<?php }
}
