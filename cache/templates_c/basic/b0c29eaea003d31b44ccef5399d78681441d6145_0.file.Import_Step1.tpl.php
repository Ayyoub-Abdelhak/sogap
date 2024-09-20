<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:37:22
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Step1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818e82030f28_02008944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c29eaea003d31b44ccef5399d78681441d6145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Step1.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818e82030f28_02008944 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="100%" cellspacing="0" cellpadding="2"><tr><td><strong><?php echo \App\Language::translate('LBL_IMPORT_STEP_1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong></td><td><?php echo \App\Language::translate('LBL_IMPORT_STEP_1_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td colspan='2' data-import-upload-size="<?php echo $_smarty_tpl->tpl_vars['IMPORT_UPLOAD_SIZE']->value;?>
" data-import-upload-size-mb="<?php echo $_smarty_tpl->tpl_vars['IMPORT_UPLOAD_SIZE_MB']->value;?>
"><input type="hidden" name="type" value="csv" /><input type="hidden" name="is_scheduled" value="1" /><input type="file" name="import_file" id="import_file" title="<?php echo \App\Language::translate('LBL_SELECT_FILE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" accept="<?php echo $_smarty_tpl->tpl_vars['SUPPORTED_FILE_TYPES_TEXT']->value;?>
" onchange="ImportJs.checkFileType()" /><!-- input type="hidden" name="userfile_hidden" value=""/ --></td></tr><tr><td>&nbsp;</td><td colspan='2'><?php echo \App\Language::translate('LBL_IMPORT_SUPPORTED_FILE_TYPES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['SUPPORTED_FILE_TYPES_TEXT']->value;?>
</td></tr></table>
<?php }
}
