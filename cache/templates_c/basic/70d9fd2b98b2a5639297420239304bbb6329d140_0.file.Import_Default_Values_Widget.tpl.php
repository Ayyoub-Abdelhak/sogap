<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:38:46
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Default_Values_Widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818ed6054191_20950995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70d9fd2b98b2a5639297420239304bbb6329d140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Default_Values_Widget.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818ed6054191_20950995 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="d-none" id="defaultValuesElementsContainer">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVAILABLE_BLOCKS']->value, '_FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['_FIELDS']->value) {
$_smarty_tpl->tpl_vars['_FIELDS']->do_else = false;
?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_FIELDS']->value, '_FIELD_INFO', false, '_FIELD_NAME');
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = false;
?>
			<div id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue_container" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="small col-md-11">
				<?php $_smarty_tpl->_assignInScope('_FIELD_TYPE', $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldDataType());?>
				<?php if ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'picklist' || $_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'multipicklist') {?>
					<select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="small select2">
						<option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION','Vtiger');?>
</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getPicklistValues(), 'LABEL', false, 'VALUE');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?>
							<option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LABEL']->value);?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'integer') {?>
					<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="small defaultInputTextContainer form-control" value="" />
				<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'owner' || $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getUIType() == '52') {?>
					<select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="small select2">
						<option value="">--<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
--</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS_LIST']->value, '_NAME', false, '_ID');
$_smarty_tpl->tpl_vars['_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_ID']->value => $_smarty_tpl->tpl_vars['_NAME']->value) {
$_smarty_tpl->tpl_vars['_NAME']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_NAME']->value;?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php if ($_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getUIType() == '53') {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS_LIST']->value, '_NAME', false, '_ID');
$_smarty_tpl->tpl_vars['_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_ID']->value => $_smarty_tpl->tpl_vars['_NAME']->value) {
$_smarty_tpl->tpl_vars['_NAME']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_NAME']->value;?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</select>
				<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'date') {?>
					<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue"
						data-date-format="<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
" class="defaultInputTextContainer form-control col-md-2 dateField" value="" />
				<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'datetime') {?>
					<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue"
						class="defaultInputTextContainer form-control small col-md-2" value="" data-date-format="<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
" />
				<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'boolean') {?>
					<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="small" />
				<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value == 'reference') {?>
					<select id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="small select2">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_FIELDS']->value[$_smarty_tpl->tpl_vars['_FIELD_NAME']->value]->getReferenceList(), '_REFERENCE_DETAILS');
$_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value) {
$_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('REFERENCE_MODULE', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value));?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value,$_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value);?>
</option>
							<?php if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value && \App\Privilege::isPermitted($_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value)) {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value;?>
::id">
									<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value,$_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value);?>
: <?php echo \App\Language::translate('LBL_SELF_ID',$_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value);?>

								</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value->getFieldsByType(array('string','recordNumber'),true), 'REFERENCE_FIELD');
$_smarty_tpl->tpl_vars['REFERENCE_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value) {
$_smarty_tpl->tpl_vars['REFERENCE_FIELD']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value;?>
::<?php echo $_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->getName();?>
">
										<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value,$_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value);?>
: <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['REFERENCE_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['_REFERENCE_DETAILS']->value);?>

									</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php } elseif ($_smarty_tpl->tpl_vars['_FIELD_TYPE']->value != 'reference') {?>
					<input type="input" id="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" name="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
_defaultvalue" class="defaultInputTextContainer form-control small" />
				<?php }?>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
