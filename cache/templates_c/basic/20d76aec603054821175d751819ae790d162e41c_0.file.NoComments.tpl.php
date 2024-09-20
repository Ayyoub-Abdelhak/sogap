<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\NoComments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819158aba335_45248382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d76aec603054821175d751819ae790d162e41c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\NoComments.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819158aba335_45248382 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-NoComments js-no-comments-msg-container summaryWidgetContainer p-md-2 p-1" data-js="container"><p class="textAlignCenter"> <?php echo \App\Language::translate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div>
<?php }
}
