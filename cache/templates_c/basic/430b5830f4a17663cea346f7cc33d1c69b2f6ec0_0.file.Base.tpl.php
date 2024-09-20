<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Field\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b1c9e614_21624922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '430b5830f4a17663cea346f7cc33d1c69b2f6ec0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\Base.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b1c9e614_21624922 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Detail-Field-Base u-paragraph-m-0 u-word-break">
<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

</div>
<?php }
}
