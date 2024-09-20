<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:07:31
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\ImportStatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819593a55b55_19438479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3212f08f2a968c759325f693a7f2a6bb194ff5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\ImportStatus.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819593a55b55_19438479 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Import-ImportStatus --><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div>
		<?php echo '<script'; ?>
 type="text/javascript">
			jQuery(document).ready(function() {
				setTimeout(function() {
					jQuery("[name=importStatusForm]").get(0).submit();
				}, 2000);
			});
		<?php echo '</script'; ?>
>
	<div><form onsubmit="VtigerJS_DialogBox.block();" action="index.php" enctype="multipart/form-data" method="POST" name="importStatusForm"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><input type="hidden" name="view" value="Import" /><?php if ($_smarty_tpl->tpl_vars['CONTINUE_IMPORT']->value == 'true') {?><input type="hidden" name="mode" value="continueImport" /><?php } else { ?><input type="hidden" name="mode" value="" /><?php }?></form><table class="u-w-90per m-auto searchUIBasic well"><tr><td class="font-x-large text-center"><h3><strong><?php echo \App\Language::translate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</strong></h3></td></tr><tr><td class="font-x-large text-center"><span class="redColor"><?php echo \App\Language::translate('LBL_RUNNING',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 ... </span></td></tr><?php if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)) {?><tr><td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</td></tr><?php }?><tr><td><table class="w-100 dvtSelectedCell thickBorder importContents"><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_TOTAL_RECORDS_IMPORTED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="u-w-30per pr-3"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['IMPORTED'];?>
 / <?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['TOTAL'];?>
</td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_CREATED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="u-w-10per pr-3"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['CREATED'];?>
</td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_UPDATED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="u-w-10per pr-3"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['UPDATED'];?>
</td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_SKIPPED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="u-w-10per pr-3"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['SKIPPED'];?>
</td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_MERGED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="u-w-10per pr-3"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['MERGED'];?>
</td></tr></table></td></tr><tr><td class="float-right"><button class="delete btn btn-danger btn-sm" name="cancel" onclick="location.href = 'index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import&mode=cancelImport&import_id=<?php echo $_smarty_tpl->tpl_vars['IMPORT_ID']->value;?>
'"><strong><?php echo \App\Language::translate('LBL_CANCEL_IMPORT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button></td></tr></table></div><!-- /tpl-Import-ImportStatus -->
<?php }
}
