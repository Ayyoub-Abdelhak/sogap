<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:15:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LangManagement\Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053f6df9674_63338936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a95e368ac69a6ef2fa9b65cfe9cdabe2616a4896' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LangManagement\\Edit.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053f6df9674_63338936 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="">
	<div class="form-horizontal">
		<div class="form-group row">
			<label for="langs_list" class="col-form-label col-md-1"><?php echo \App\Language::translate('Language',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
			<div class="col-md-3">
				<select multiple="multiple" class="form-control select2" id="langs_list">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGS']->value, 'LABEL', false, 'PREFIX');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PREFIX']->value,$_smarty_tpl->tpl_vars['SELECTED_LANGS']->value)) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<label class="col-md-1 col-form-label"><?php echo \App\Language::translate('Module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
			<div class="col-md-3">
				<select class="form-control mods_list select2" id="mods_list">
					<optgroup label="<?php echo \App\Language::translate('Modules',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODS']->value['mods'], 'MOD', false, 'ID');
$_smarty_tpl->tpl_vars['MOD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['MOD']->value) {
$_smarty_tpl->tpl_vars['MOD']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['SELECTED_MODE']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MOD']->value,$_smarty_tpl->tpl_vars['MOD']->value);?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</optgroup>
					<optgroup label="<?php echo \App\Language::translate('LBL_SYSTEM_SETTINGS','Vtiger');?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODS']->value['settings'], 'MOD', false, 'ID');
$_smarty_tpl->tpl_vars['MOD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['MOD']->value) {
$_smarty_tpl->tpl_vars['MOD']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ID']->value == $_smarty_tpl->tpl_vars['SELECTED_MODE']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MOD']->value,$_smarty_tpl->tpl_vars['MOD']->value);?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</optgroup>
				</select>
			</div>
			<div class="checkbox col-md-2">
				<label class="">
					<input type="checkbox" class="show_differences" name="show_differences" <?php if ($_smarty_tpl->tpl_vars['SD']->value == 1) {?>checked<?php }?> value="1">&nbsp;<?php echo \App\Language::translate('LBL_SHOW_MISSING_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

				</label>
			</div>
			<div>
				<button class="btn btn-primary js-add-translation <?php if (empty($_smarty_tpl->tpl_vars['SELECTED_LANGS']->value)) {?>d-none<?php }?>" type="button" data-js="click"><?php echo \App\Language::translate('LBL_ADD_Translate',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
	</div>
</div>
<br />
<?php if ($_smarty_tpl->tpl_vars['DATA']->value) {?>
	<div class="">
		<table class="table table-bordered table-sm listViewEntriesTable">
			<thead>
				<tr class="blockHeader">
					<th><strong><?php echo \App\Language::translate('LBL_variable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATA']->value['langs'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
						<th><strong><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</strong></th>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php if ($_smarty_tpl->tpl_vars['DATA']->value['php']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATA']->value['php'], 'langs', false, 'LANG_KEY');
$_smarty_tpl->tpl_vars['langs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LANG_KEY']->value => $_smarty_tpl->tpl_vars['langs']->value) {
$_smarty_tpl->tpl_vars['langs']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('TEMPDATA', 1);?>
						<?php if ($_smarty_tpl->tpl_vars['SD']->value == 1) {?>
							<?php $_smarty_tpl->_assignInScope('TEMPDATA', 0);?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'item', false, 'lang');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?>
									<?php $_smarty_tpl->_assignInScope('TEMPDATA', 1);?>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['TEMPDATA']->value == 1) {?>
							<tr data-langkey="<?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
" data-type="php">
								<td><?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'item', false, 'lang');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
									<td><input
											data-lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"
											data-type="php"
											name="<?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
"
											class="translation form-control <?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?>empty_value<?php }?>"
											<?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?> placeholder="<?php echo \App\Language::translate('LBL_NoTranslation',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php }?>
											type="text"
											value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" />
									</td>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<td>
									<?php if ((isset($_smarty_tpl->tpl_vars['CUSTOM_DATA']->value['php'][$_smarty_tpl->tpl_vars['LANG_KEY']->value]))) {?>
										<button type="button" class="btn btn-light js-delete" data-js="click" title="<?php echo \App\Language::translate('LBL_DELETE');?>
">
											<span class="fas fa-trash-alt"></span>
										</button>
									<?php }?>
								</td>
							</tr>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['DATA']->value['js']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DATA']->value['js'], 'langs', false, 'LANG_KEY');
$_smarty_tpl->tpl_vars['langs']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LANG_KEY']->value => $_smarty_tpl->tpl_vars['langs']->value) {
$_smarty_tpl->tpl_vars['langs']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('TEMPDATA', 1);?>
						<?php if ($_smarty_tpl->tpl_vars['SD']->value == 1) {?>
							<?php $_smarty_tpl->_assignInScope('TEMPDATA', 0);?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'item', false, 'lang');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?>
									<?php $_smarty_tpl->_assignInScope('TEMPDATA', 1);?>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['TEMPDATA']->value == 1) {?>
							<tr data-langkey="<?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
" data-type="js">
								<td><?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'item', false, 'lang');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
									<td><input
											data-lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"
											data-type="js"
											name="<?php echo $_smarty_tpl->tpl_vars['LANG_KEY']->value;?>
"
											class="translation form-control <?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?>empty_value<?php }?>"
											<?php if ($_smarty_tpl->tpl_vars['item']->value == NULL) {?> placeholder="<?php echo \App\Language::translate('LBL_NoTranslation',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php }?>
											type="text"
											value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" />
									</td>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<td>
									<?php if ((isset($_smarty_tpl->tpl_vars['CUSTOM_DATA']->value['js'][$_smarty_tpl->tpl_vars['LANG_KEY']->value]))) {?>
										<button type="button" class="btn btn-light js-delete" data-js="click" title="<?php echo \App\Language::translate('LBL_DELETE');?>
">
											<span class="fas fa-trash-alt"></span>
										</button>
									<?php }?>
								</td>
							</tr>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</tbody>
		</table>
	</div>
<?php }
}
}
