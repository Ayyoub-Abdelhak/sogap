<?php
/* Smarty version 4.2.0, created on 2023-12-25 15:44:27
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\ImportSchedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6589954b9b6437_43636674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '949ca47675f72cc881366a505782c46e89783154' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\ImportSchedule.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6589954b9b6437_43636674 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Import-ImportSchedule pt-5"><table class="u-w-90per m-auto searchUIBasic well"><tr><td class="font-x-large text-center"><h3><strong><?php echo \App\Language::translate('LBL_IMPORT_SCHEDULED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></h3</td></tr><?php if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)) {?><tr><td class="text-center"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</td></tr><?php }?><tr><td><table class="text-center w-100 bg-light text-dark dvtSelectedCell thickBorder importContents"><tr><td><?php echo \App\Language::translate('LBL_SCHEDULED_IMPORT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td></tr></table></td></tr><tr><td class="float-right"><button class="btn btn-danger btn-sm delete" value="<?php echo \App\Language::translate('LBL_CANCEL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" name="cancel"onclick="location.href = 'index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=Import&mode=cancelImport&import_id=<?php echo $_smarty_tpl->tpl_vars['IMPORT_ID']->value;?>
'"><span class="font-weight-bold"><?php echo \App\Language::translate('LBL_CANCEL_IMPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></button><a class="btn btn-success btn-sm ml-1" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=List"><span class="font-weight-bold"><?php echo \App\Language::translate('LBL_OK_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a></td></tr></table></div>
<?php }
}
