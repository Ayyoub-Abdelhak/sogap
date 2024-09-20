<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:07:34
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Finish_Buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658195964a8172_11690360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c861c076424db61d7dba1dd5614b22dc13ff18cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Finish_Buttons.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658195964a8172_11690360 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Import-Import_Finish_Buttons --><button class="create btn btn-success btn-sm mr-2 mb-sm-3 mb-md-0" name="next" onclick="location.href = 'index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import&return_module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&return_action=index'"><strong><span class="fas fa-file-import mr-2"></span><?php echo \App\Language::translate('LBL_IMPORT_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><button class="cancel btn btn-primary btn-sm mr-2 mb-sm-3 mb-md-0 js-show-modal" name="next" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&forModule=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=List&start=1&foruser=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><strong><span class="fas fa-list mr-2"></span><?php echo \App\Language::translate('LBL_VIEW_LAST_IMPORTED_RECORDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php if ($_smarty_tpl->tpl_vars['MERGE_ENABLED']->value == '0') {?><button class="delete btn btn-danger btn-sm mr-2 mb-sm-3 mb-md-0" name="next" onclick="location.href = 'index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import&mode=undoImport&foruser=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
'"><strong><span class="fas fa-history mr-2"></span><?php echo \App\Language::translate('LBL_UNDO_LAST_IMPORT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }?><button class="edit btn btn-success btn-sm mb-sm-3 mb-md-0" name="cancel" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getUrl();?>
'"<strong><span class="fas fa-angle-double-right mr-2"></span><?php echo \App\Language::translate('LBL_FINISH_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><!-- /tpl-Import-Import_Finish_Buttons -->
<?php }
}
