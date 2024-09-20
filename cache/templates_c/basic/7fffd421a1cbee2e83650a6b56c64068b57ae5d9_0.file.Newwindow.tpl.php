<?php
/* Smarty version 4.2.0, created on 2024-02-20 12:28:40
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Menu\fields\Newwindow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d48ce8221e31_54289500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fffd421a1cbee2e83650a6b56c64068b57ae5d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Menu\\fields\\Newwindow.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d48ce8221e31_54289500 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_NEW_WINDOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7 checkboxForm">
		<input name="newwindow" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value && $_smarty_tpl->tpl_vars['RECORD']->value->get('newwindow') == 1) {?> checked="checked" <?php }?> />
	</div>
</div>
<?php }
}
