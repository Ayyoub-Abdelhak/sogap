<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:07:34
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Result_Details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819596201dc5_97008687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a4f9887d1f6afa9a3691cc3e7d7afda542992de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Result_Details.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819596201dc5_97008687 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="tpl-Import-Import_Result_Details w-100 dvtSelectedCell thickBorder importContents"><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_TOTAL_RECORDS_IMPORTED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="pr-3 u-w-30per"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['IMPORTED'];?>
 / <?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['TOTAL'];?>
</td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_CREATED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="pr-3 u-w-30per"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['CREATED'];?>
</td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_UPDATED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="pr-3 u-w-30per"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['UPDATED'];?>
</td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_SKIPPED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="pr-3 u-w-30per"><span class="<?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['FAILED'] != '0') {?> mr-2 <?php }?>"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['SKIPPED'];?>
</span><?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['SKIPPED'] != '0') {?><a class="u-cursor-pointer js-open-list-in-modal" data-js="click" data-module-name="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-type="skipped" data-for-user="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"data-for-module="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
"> <?php echo \App\Language::translate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php }?></td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_NUMBER_OF_RECORDS_MERGED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="u-w-10per">:</td><td class="pr-3 u-w-30per"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['MERGED'];?>
</td></tr><tr><td class="pl-3"><?php echo \App\Language::translate('LBL_TOTAL_RECORDS_FAILED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td>:</td><td class="pr-3 u-w-30per"><span class="<?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['FAILED'] != '0') {?> mr-2 <?php }?>"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['FAILED'];?>
/ <?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['TOTAL'];?>
</span><?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['FAILED'] != '0') {?><a class="u-cursor-pointer js-open-list-in-modal" data-js="click" data-module-name="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-type="failed" data-for-user="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"data-for-module="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
"> <?php echo \App\Language::translate('LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php }?></td></tr></table><?php }
}
