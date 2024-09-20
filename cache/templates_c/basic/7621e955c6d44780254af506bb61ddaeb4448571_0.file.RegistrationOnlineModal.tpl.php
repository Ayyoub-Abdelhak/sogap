<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:02:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\YetiForce\RegistrationOnlineModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65805102bba935_59406465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7621e955c6d44780254af506bb61ddaeb4448571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\YetiForce\\RegistrationOnlineModal.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65805102bba935_59406465 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-YetiForce-RegistrationOnlineModal --><div class="modal-body"><input type="hidden" name="module" value="YetiForce" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Register" /><input type="hidden" name="mode" value="online" /><?php $_smarty_tpl->_assignInScope('QUALIFIED_MODULE', "Settings::Companies");?><div class="alert alert-info" role="alert"><span class="u-fs-13px"><?php $_smarty_tpl->_assignInScope('CREDITS_LINK', '');
if (\App\Security\AdminAccess::isPermitted('Dependencies')) {
$_smarty_tpl->_assignInScope('CREDITS_LINK', "<a target=\"_blank\" href=\"index.php?module=Dependencies&view=Credits&parent=Settings&displayLicenseModal=YetiForce\">Link</a>");
}
echo \App\Language::translateArgs('LBL_CONDITIONS_OF_REGISTRATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['CREDITS_LINK']->value,\App\Language::translate('LBL_CHANGING_ENTITY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</span></div><div class="alert alert-info" role="alert"><a target="_blank" rel="noreferrer noopener" href="https://github.com/YetiForceCompany/YetiForceCRM/blob/<?php echo \App\Version::getShort();?>
.0/licenses/<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value['fileName'];?>
">licenses/<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value['fileName'];?>
</a><pre class="u-pre"><?php echo $_smarty_tpl->tpl_vars['LICENSE']->value['text'];?>
</pre></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REGISTER_COMPANIES']->value, 'COMPANIES', false, 'TYPE_LABEL');
$_smarty_tpl->tpl_vars['COMPANIES']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TYPE_LABEL']->value => $_smarty_tpl->tpl_vars['COMPANIES']->value) {
$_smarty_tpl->tpl_vars['COMPANIES']->do_else = false;
?><form><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMPANIES']->value, 'COMPANY_ROW');
$_smarty_tpl->tpl_vars['COMPANY_ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['COMPANY_ROW']->value) {
$_smarty_tpl->tpl_vars['COMPANY_ROW']->do_else = false;
?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['COMPANY_ROW']->value['id'];?>
" /><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Form.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('COMPANY_ID'=>$_smarty_tpl->tpl_vars['COMPANY_ROW']->value['id']), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></form><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-Settings-YetiForce-RegistrationOnlineModal -->
<?php }
}
