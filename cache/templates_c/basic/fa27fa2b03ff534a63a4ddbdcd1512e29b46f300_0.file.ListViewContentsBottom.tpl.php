<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:16:25
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ListViewContentsBottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6580543949c951_93648236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa27fa2b03ff534a63a4ddbdcd1512e29b46f300' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ListViewContentsBottom.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6580543949c951_93648236 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ListViewContentsBottom --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_RECORDS_NO_FOUND');?>
. <?php if ($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
"><?php echo \App\Language::translate('LBL_CREATE_SINGLE_RECORD');?>
</a><?php }?></td></tr></tbody></table><?php }?><!-- /tpl-Base-ListViewContentsBottom -->
<?php }
}
