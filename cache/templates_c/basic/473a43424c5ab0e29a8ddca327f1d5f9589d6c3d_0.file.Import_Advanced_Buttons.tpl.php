<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:38:46
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Advanced_Buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818ed66064d4_10043292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '473a43424c5ab0e29a8ddca327f1d5f9589d6c3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Advanced_Buttons.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818ed66064d4_10043292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" name="import" id="importButton" class="crmButton big edit btn btn-success" disabled>
	<span class="fas fa-file-import mr-2"></span>
	<?php echo \App\Language::translate('LBL_IMPORT_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

</button>
<button type="button" name="cancel" value="<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="cursorPointer cancelLink btn btn-danger" onclick="window.history.back()">
	<span class="fas fa-times mr-2"></span>
	<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

</button>
<?php }
}
