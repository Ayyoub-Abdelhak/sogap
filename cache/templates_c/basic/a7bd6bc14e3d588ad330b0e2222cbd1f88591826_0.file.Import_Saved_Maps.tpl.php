<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:38:45
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Saved_Maps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818ed5e57095_38902926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7bd6bc14e3d588ad330b0e2222cbd1f88591826' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Saved_Maps.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818ed5e57095_38902926 (Smarty_Internal_Template $_smarty_tpl) {
?>
<select name="saved_maps" id="saved_maps" class="font-x-small select2" onchange="ImportJs.loadSavedMap();"
		data-placeholder="--<?php echo \App\Language::translate('LBL_SELECT_SAVED_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
--"
		data-select="allowClear">
	<optgroup class="p-0">
		<option id="-1" value="" selected>--<?php echo \App\Language::translate('LBL_SELECT_SAVED_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
--</option>
	</optgroup>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SAVED_MAPS']->value, '_MAP', false, '_MAP_ID');
$_smarty_tpl->tpl_vars['_MAP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_MAP_ID']->value => $_smarty_tpl->tpl_vars['_MAP']->value) {
$_smarty_tpl->tpl_vars['_MAP']->do_else = false;
?>
		<option id="<?php echo $_smarty_tpl->tpl_vars['_MAP_ID']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['_MAP']->value->getStringifiedContent();?>
"><?php echo $_smarty_tpl->tpl_vars['_MAP']->value->getValue('name');?>
</option>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<div id="delete_map_container" style="display:none;" class="input-group-append">
	<button type="button" class="btn btn-outline-secondary">
		<span class="fas fa-trash-alt u-cursor-pointer" onclick="ImportJs.deleteMap('<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
');"
	   alt="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
"></span>
	</button>
</div>
<?php }
}
