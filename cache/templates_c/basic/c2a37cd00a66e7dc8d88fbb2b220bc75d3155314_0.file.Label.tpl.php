<?php
/* Smarty version 4.2.0, created on 2024-04-30 15:09:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Menu\types\Label.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6630fba658e2d7_81608911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2a37cd00a66e7dc8d88fbb2b220bc75d3155314' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Menu\\types\\Label.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630fba658e2d7_81608911 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<input name="label" class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('label');
}?>" data-validation-engine="validate[required]" />
	</div>
</div>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_ICON_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<div class="input-group">
			<input name="icon" class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('icon');
}?>" />
			<span class="input-group-btn">
				<button id="selectIconButton" class="btn btn-light" title="<?php echo \App\Language::translate('LBL_SELECT_ICON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button"><span class="fas fa-info-circle"></span></button>
			</span>
		</div>
	</div>
</div>
<?php }
}
