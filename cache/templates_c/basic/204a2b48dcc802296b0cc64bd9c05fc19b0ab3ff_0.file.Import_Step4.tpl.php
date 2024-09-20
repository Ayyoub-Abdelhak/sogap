<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:38:45
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Step4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818ed5a99dc1_17336555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '204a2b48dcc802296b0cc64bd9c05fc19b0ab3ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Step4.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818ed5a99dc1_17336555 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Import-Import_Step4 -->
<table width="100%" cellspacing="0" cellpadding="10" class="table importContents">
	<tr>
		<td>
			<strong><?php echo \App\Language::translate('LBL_IMPORT_STEP_4',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong>
		</td>
		<td>
			<span><?php echo \App\Language::translate('LBL_IMPORT_STEP_4_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
		</td>
		<td>
			<div id="savedMapsContainer" class="textAlignRight float-right input-group">
				<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Saved_Maps.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<input type="hidden" name="field_mapping" id="field_mapping" value="" />
			<input type="hidden" name="inventory_field_mapping" id="inventory_field_mapping" value="" />
			<input type="hidden" name="default_values" id="default_values" value="" />
			<table width="100%" cellspacing="0" cellpadding="2"
				class="listRow table table-bordered table-sm listViewEntriesTable">
				<thead>
					<tr class="listViewHeaders">
						<?php if ($_smarty_tpl->tpl_vars['HAS_HEADER']->value == true) {?>
							<th width="25%"><a><?php echo \App\Language::translate('LBL_FILE_COLUMN_HEADER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></th>
						<?php }?>
						<th width="25%"><a><?php echo \App\Language::translate('LBL_ROW_1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></th>
						<th width="23%"><a><?php echo \App\Language::translate('LBL_CRM_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></th>
						<th width="27%"><a><?php echo \App\Language::translate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></th>
					</tr>
				</thead>
				<tbody>
					<?php $_smarty_tpl->_assignInScope('_COUNTER', 0);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROW_1_DATA']->value, 'FIELDS_DATA', false, 'TYPE_NAME', 'rowData', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['FIELDS_DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TYPE_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS_DATA']->value) {
$_smarty_tpl->tpl_vars['FIELDS_DATA']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rowData']->value['iteration']++;
?>
						<?php if (in_array($_smarty_tpl->tpl_vars['USER_INPUT']->value->get('type'),array('xml','zip'))) {
$_smarty_tpl->_assignInScope('_COUNTER', 0);
}?>
						<tr class="">
							<td class="textAlignCenter bg-primary"
								colspan="4"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TYPE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
						</tr>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_rowData']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rowData']->value['iteration'] : null) > 1) {?>
							<?php $_smarty_tpl->_assignInScope('TYPE_AVAILABLE_BLOCKS', $_smarty_tpl->tpl_vars['INVENTORY_BLOCKS']->value);?>
							<?php $_smarty_tpl->_assignInScope('PREFIX', 'inventory_');?>
							<?php $_smarty_tpl->_assignInScope('INVENTORY_FIELDS', Vtiger_Inventory_Model::getInstance($_smarty_tpl->tpl_vars['FOR_MODULE']->value)->getAllColumns());?>
							<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['INVENTORY_FIELDS']) ? $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "recordIteration";
$_smarty_tpl->_assignInScope('INVENTORY_FIELDS', $_tmp_array);?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('TYPE_AVAILABLE_BLOCKS', $_smarty_tpl->tpl_vars['AVAILABLE_BLOCKS']->value);?>
							<?php $_smarty_tpl->_assignInScope('PREFIX', '');?>
						<?php }?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_DATA']->value, '_FIELD_VALUE', false, '_HEADER_NAME', 'headerIterator', array (
));
$_smarty_tpl->tpl_vars['_FIELD_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_HEADER_NAME']->value => $_smarty_tpl->tpl_vars['_FIELD_VALUE']->value) {
$_smarty_tpl->tpl_vars['_FIELD_VALUE']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('HEADER_FIELD_LABELS', '');?>
							<?php if (strpos($_smarty_tpl->tpl_vars['_HEADER_NAME']->value,'::') !== false) {?>
								<?php $_smarty_tpl->_assignInScope('HEADER_FIELD_LABELS', explode('::',$_smarty_tpl->tpl_vars['_HEADER_NAME']->value));?>
							<?php }?>
							<?php $_smarty_tpl->_assignInScope('_COUNTER', $_smarty_tpl->tpl_vars['_COUNTER']->value+1);?>
							<?php if ($_smarty_tpl->tpl_vars['PREFIX']->value && is_numeric($_smarty_tpl->tpl_vars['_HEADER_NAME']->value)) {?> <?php continue 1;?> <?php }?>
							<tr class="fieldIdentifier <?php if ($_smarty_tpl->tpl_vars['PREFIX']->value && in_array($_smarty_tpl->tpl_vars['_HEADER_NAME']->value,$_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value)) {?> d-none <?php }?>"
								id="fieldIdentifier<?php echo $_smarty_tpl->tpl_vars['_COUNTER']->value;?>
" data-typename="<?php echo $_smarty_tpl->tpl_vars['TYPE_NAME']->value;?>
">
								<?php if ($_smarty_tpl->tpl_vars['HAS_HEADER']->value == true) {?>
									<td class="cellLabel">
										<span name="header_name"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['_HEADER_NAME']->value);?>
</span>
									</td>
								<?php }?>
								<td class="cellLabel">
									<span><?php echo \App\Purifier::encodeHtml(\App\TextUtils::textTruncate($_smarty_tpl->tpl_vars['_FIELD_VALUE']->value));?>
</span>
								</td>
								<td class="cellLabel">
									<input type="hidden" name="row_counter" value="<?php echo $_smarty_tpl->tpl_vars['_COUNTER']->value;?>
" />

									<br>
									<select name="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
mapped_fields"
										class="txtBox select2 form-control <?php if ($_smarty_tpl->tpl_vars['PREFIX']->value) {?>inventory<?php }?>"
										onchange="ImportJs.loadDefaultValueWidget('fieldIdentifier<?php echo $_smarty_tpl->tpl_vars['_COUNTER']->value;?>
')">
										<option value=""><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TYPE_AVAILABLE_BLOCKS']->value, '_FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['_FIELDS']->value) {
$_smarty_tpl->tpl_vars['_FIELDS']->do_else = false;
?>
											<?php $_smarty_tpl->_assignInScope('TRANSLATED_BLOCK', \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value));?>
											<optgroup label="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_BLOCK']->value;?>
">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_FIELDS']->value, '_FIELD_INFO', false, '_FIELD_NAME');
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = false;
?>
													<?php $_smarty_tpl->_assignInScope('_TRANSLATED_FIELD_LABEL', \App\Purifier::decodeHtml(\App\Language::translate($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->get('label'),$_smarty_tpl->tpl_vars['FOR_MODULE']->value)));?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"
														<?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD_LABELS']->value && App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['HEADER_FIELD_LABELS']->value[0]) == $_smarty_tpl->tpl_vars['TRANSLATED_BLOCK']->value && App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['HEADER_FIELD_LABELS']->value[1]) == $_smarty_tpl->tpl_vars['_TRANSLATED_FIELD_LABEL']->value) {?> selected <?php } elseif (!$_smarty_tpl->tpl_vars['HEADER_FIELD_LABELS']->value && App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['_HEADER_NAME']->value) == $_smarty_tpl->tpl_vars['_TRANSLATED_FIELD_LABEL']->value) {?> selected <?php }?>
														data-label="<?php echo $_smarty_tpl->tpl_vars['_TRANSLATED_FIELD_LABEL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_TRANSLATED_FIELD_LABEL']->value;?>

														<?php if ($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->isMandatory() == 'true') {?>&nbsp; (*)<?php }?></option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</optgroup>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
								<td class="cellLabel border-top-1 border-bottom-0"
									name="default_value_container">&nbsp;
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align="right" colspan="2">
			<div class="row">
				<div class="col-8">
					<input type="checkbox" title="<?php echo \App\Language::translate('LBL_SAVE_AS_CUSTOM_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"
						name="save_map"
						id="save_map" />&nbsp;<?php echo \App\Language::translate('LBL_SAVE_AS_CUSTOM_MAPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;
				</div>
				<div class="col-4">
					<input class="form-control" type="text" name="save_map_as" id="save_map_as" />
				</div>
			</div>
		</td>
	</tr>
</table>
<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Import_Default_Values_Widget.tpl','Import'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!-- /tpl-Import-Import_Step4 -->
<?php }
}
