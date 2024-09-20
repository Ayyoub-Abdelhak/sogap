<?php
/* Smarty version 4.2.0, created on 2024-02-20 12:28:40
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Menu\types\Module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d48ce8052cc5_94336711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ae4de102c34108d502d9edd78856883c4fcc7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Menu\\types\\Module.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d48ce8052cc5_94336711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<select name="module" class="select2 type form-control" asfsadf>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModulesList(), 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['tabid'];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value && $_smarty_tpl->tpl_vars['ITEM']->value['tabid'] == $_smarty_tpl->tpl_vars['RECORD']->value->get('module')) {?> selected="" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['name'],$_smarty_tpl->tpl_vars['ITEM']->value['name']);?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
	</div>
</div>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<input name="label" class="form-control" type="text" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->get('label');
}?>" />
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('fields/Newwindow.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('fields/Hotkey.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_assignInScope('FILTERS', explode(',',$_smarty_tpl->tpl_vars['RECORD']->value->get('filters')));?>
<div class="form-group row">
	<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_AVAILABLE_FILTERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
	<div class="col-md-7">
		<div class="input-group">
			<select name="filters" multiple class="select2 type form-control">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCustomViewList(), 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['cvid'];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value && in_array($_smarty_tpl->tpl_vars['ITEM']->value['cvid'],$_smarty_tpl->tpl_vars['FILTERS']->value)) {?> selected="" <?php }?> data-tabid="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['tabid'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['viewname'],$_smarty_tpl->tpl_vars['ITEM']->value['entitytype']);?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
			<span class="input-group-append">
				<button class="btn btn-light js-popover-tooltip" type="button" data-content="<?php echo \App\Language::translate('LBL_CUSTOM_VIEW_FILTER_RESTRICTIONS_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
					<span class="fas fa-info-circle"></span>
				</button>
			</span>
		</div>
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
			<span class="input-group-append">
				<button id="selectIconButton" class="btn btn-light" title="<?php echo \App\Language::translate('LBL_SELECT_ICON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="button"><span class="fas fa-info-circle"></span></button>
			</span>
		</div>
	</div>
</div>
<?php }
}
