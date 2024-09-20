<?php
/* Smarty version 4.2.0, created on 2023-12-27 17:48:58
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\Modals\HelpInfoFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658c557ad10ef1_33399977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b6e25033ee96e43fc7be4cce3bc240ee66665dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\Modals\\HelpInfoFooter.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658c557ad10ef1_33399977 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-Modals-HelpInfoFooter --><div class="tpl-Modals-Footer modal-footer"><?php if (!empty($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value)) {?><button class="btn btn-success" type="submit" name="saveButton" data-js="click"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_SUCCESS']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><button class="btn btn-info" type="submit" name="saveCloseButton" data-js="click"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE_AND_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php if (!empty($_smarty_tpl->tpl_vars['BTN_DANGER']->value) && empty($_smarty_tpl->tpl_vars['LOCK_EXIT']->value)) {?><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BTN_DANGER']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?></div></form><!-- /tpl-Settings-LayoutEditor-Modals-HelpInfoFooter -->
<?php }
}
