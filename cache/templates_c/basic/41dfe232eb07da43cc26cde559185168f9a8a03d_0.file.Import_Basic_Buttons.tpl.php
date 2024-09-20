<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:37:22
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Basic_Buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818e82655ec4_65201416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41dfe232eb07da43cc26cde559185168f9a8a03d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Basic_Buttons.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818e82655ec4_65201416 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Import-Import_Basic_Buttons --><button type="submit" name="next" class="btn btn-success" onclick="return ImportJs.uploadAndParse();"><span class="fas fa-angle-double-right mr-2"></span><strong><?php echo \App\Language::translate('LBL_NEXT_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-danger" type="reset" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getUrl();?>
'" ><span class="fas fa-times mr-2"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><!-- /tpl-Import-Import_Basic_Buttons -->
<?php }
}
