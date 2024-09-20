<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Field\UserRole.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b1d4a7e9_86200859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e20dc2ed44bc7d32e070b9a44c989386f06739ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\UserRole.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b1d4a7e9_86200859 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-UserRole u-paragraph-m-0">
	<?php $_smarty_tpl->_assignInScope('ROLE_LABEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value));?>
	<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser() && !empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))) {?>
		<a href="<?php echo Settings_Roles_Record_Model::getInstanceById($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'))->getEditViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['ROLE_LABEL']->value;?>
</a>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['ROLE_LABEL']->value;?>

	<?php }?>
</div>
<?php }
}
