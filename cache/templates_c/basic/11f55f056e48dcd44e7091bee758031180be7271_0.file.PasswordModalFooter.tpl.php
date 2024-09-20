<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:12:27
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\Modals\PasswordModalFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a68ecb7484e3_97997306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11f55f056e48dcd44e7091bee758031180be7271' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\Modals\\PasswordModalFooter.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a68ecb7484e3_97997306 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Modals-PasswordModalFooter --><div class="modal-footer"><?php if (($_smarty_tpl->tpl_vars['MODE']->value === 'massReset' || $_smarty_tpl->tpl_vars['MODE']->value === 'reset') && $_smarty_tpl->tpl_vars['ACTIVE_SMTP']->value) {?><button class="btn btn-success" type="submit" name="saveButton"<?php if (App\Config::main('systemMode') === 'demo') {?>disabled="disabled" <?php }?>><span class="fas fa-redo-alt mr-2"></span><strong><?php echo \App\Language::translate('BTN_RESET_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['MODE']->value === 'change') {?><button class="btn btn-success" type="submit" name="saveButton"<?php if (App\Config::main('systemMode') === 'demo') {?>disabled="disabled" <?php }?>><span class="fas fa-redo-alt mr-2"></span><strong><?php echo \App\Language::translate('LBL_CHANGE_PASSWORD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?><a class="btn btn-danger js-post-action" role="button" href="index.php?module=Users&amp;parent=Settings&amp;action=Logout"><span class="fas fa-power-off mr-2"></span><strong><?php echo \App\Language::translate('LBL_SIGN_OUT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></a><?php } else { ?><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-2"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php }?></div></form><!-- /tpl-Users-Modals-PasswordModalFooter -->
<?php }
}
