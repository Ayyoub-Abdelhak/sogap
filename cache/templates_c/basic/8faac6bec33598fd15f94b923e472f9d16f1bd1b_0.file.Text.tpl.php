<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:10
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Field\Text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b21bd5b9_49422301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8faac6bec33598fd15f94b923e472f9d16f1bd1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\Text.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b21bd5b9_49422301 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Detail-Field-Text --><?php $_smarty_tpl->_assignInScope('SIZE', 'mini');
if ($_smarty_tpl->tpl_vars['SOURCE_TPL']->value == 'BlockView') {
$_smarty_tpl->_assignInScope('SIZE', 'medium');
}?><div class="u-paragraph-m-0 u-word-break"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value,false,$_smarty_tpl->tpl_vars['SIZE']->value);?>
</div><!-- /tpl-Detail-Field-Text -->
<?php }
}
