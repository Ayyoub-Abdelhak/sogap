<?php
/* Smarty version 4.2.0, created on 2024-01-03 16:07:53
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\Modals\CreateSystemFields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65957849993a10_80848394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a02106d8e1d24a91c96604ff97b9350ac13c6c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\Modals\\CreateSystemFields.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65957849993a10_80848394 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-Modals-CreateSystemFields --><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['FIELDS']->value) {
echo App\Language::translate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<br /><select class="select2 form-control js-system-fields" data-js="value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullLabelTranslation();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php } else { ?><div class="alert alert-warning text-center" role="alert"><span class="fas fa-info-circle u-mr-5px mr-2"></span><strong><?php echo App\Language::translate('LBL_NO_FIELDS_ADD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><?php }?></div><!-- /tpl-Settings-LayoutEditor-Modals-CreateSystemFields -->
<?php }
}
