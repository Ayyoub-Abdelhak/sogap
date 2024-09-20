<?php
/* Smarty version 4.2.0, created on 2024-02-20 12:28:40
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Menu\fields\Hotkey.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d48ce82b7ce4_99897553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9172b564298f1dc1965678ca0f97b2b3bb5f1a5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Menu\\fields\\Hotkey.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d48ce82b7ce4_99897553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_HOTKEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<div class="input-group">
			<input name="hotkey" class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('hotkey');
}?>" />
			<div class="input-group-append">
				<a class="btn btn-default testBtn" role="button" data-toggle="button"><?php echo \App\Language::translate('LBL_TEST_IT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
			</div>
			<a class="input-group-append js-popover-tooltip" data-js="popover" target="_blank" href="https://github.com/ccampbell/mousetrap"
				rel="noreferrer noopener" data-toggle="popover"
				data-content="<?php echo \App\Language::translate('LBL_MORE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
				<div class="input-group-text">
					<span class="fas fa-info-circle"></span>
				</div>
			</a>
		</div>
	</div>
</div>
<?php }
}
