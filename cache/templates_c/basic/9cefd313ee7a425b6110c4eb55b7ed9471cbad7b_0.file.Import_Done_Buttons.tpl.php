<?php
/* Smarty version 4.2.0, created on 2024-05-09 17:38:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Done_Buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663cfbfa44b314_17411506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cefd313ee7a425b6110c4eb55b7ed9471cbad7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Done_Buttons.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663cfbfa44b314_17411506 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Import-Import_Done_Buttons --><button class="btn btn-success btn-sm" name="ok" onclick="location.href = 'index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import'"><span class="font-weight-bold"><?php echo \App\Language::translate('LBL_OK_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button><!-- /tpl-Import-Import_Done_Buttons --><?php }
}
