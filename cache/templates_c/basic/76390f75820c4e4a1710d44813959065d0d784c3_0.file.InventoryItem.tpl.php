<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:17
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\InventoryItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf65db4272_35552846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76390f75820c4e4a1710d44813959065d0d784c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\InventoryItem.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf65db4272_35552846 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-InventoryItem --><?php if (!empty($_smarty_tpl->tpl_vars['ITEM_DATA']->value['name'])) {
$_smarty_tpl->_assignInScope('REFERENCE_MODULE', \App\Record::getType($_smarty_tpl->tpl_vars['ITEM_DATA']->value['name']));
} elseif ($_smarty_tpl->tpl_vars['MAIN_PARAMS']->value) {
$_smarty_tpl->_assignInScope('REFERENCE_MODULE', $_smarty_tpl->tpl_vars['REFERENCE_MODULE_DEFAULT']->value);
}?><tr class="inventoryRow" numrow="<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
"><td class="u-white-space-nowrap u-w-1per-45px"><?php if ($_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->isField('seq')) {?><a class="dragHandle mx-1"><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0"alt="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" /></a><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][seq]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" class="sequence" /><?php }?><button type="button" class="btn btn-sm btn-danger fas fa-trash-alt deleteRow" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></button><?php if ($_smarty_tpl->tpl_vars['COUNT_FIELDS2']->value > 0 && $_smarty_tpl->tpl_vars['IS_VISIBLE_COMMENTS']->value) {?><button type="button" class="btn btn-sm btn-light toggleVisibility ml-1 js-toggle-icon__container" data-status="<?php echo $_smarty_tpl->tpl_vars['IS_OPENED_COMMENTS']->value;?>
"href="#" data-js="click"><span class="js-toggle-icon fas fa-angle-<?php if ($_smarty_tpl->tpl_vars['IS_OPENED_COMMENTS']->value) {?>up<?php } else { ?>down<?php }?>" data-active="fa-angle-up" data-inactive="fa-angle-down" data-js="click"></span></button><?php }
if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value['id']))) {?><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][id]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ITEM_DATA']->value['id'];?>
" /><?php }
if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[0]))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[0], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" value="" type="hidden" class="js-sync" data-sync-id="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
" data-js="container|data" /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD']->value->getCustomColumn(), 'item', false, 'CUSTOM_FIELD_NAME');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><input name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['CUSTOM_FIELD_NAME']->value;?>
]" value="" type="hidden" class="js-sync" data-sync-id="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_FIELD_NAME']->value;?>
" data-js="container|data" /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><td <?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?>colspan="0" <?php }?>class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getType();
if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?> d-none<?php }?> text-right fieldValue"><?php $_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('EditView',$_smarty_tpl->tpl_vars['MODULE']->value)));
$_smarty_tpl->_assignInScope('COLUMN_NAME', $_smarty_tpl->tpl_vars['FIELD']->value->get('columnName'));
if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]))) {
$_smarty_tpl->_assignInScope('ITEM_VALUE', $_smarty_tpl->tpl_vars['ITEM_DATA']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]);
} elseif ((isset($_smarty_tpl->tpl_vars['DEFAULT_INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]))) {
$_smarty_tpl->_assignInScope('ITEM_VALUE', $_smarty_tpl->tpl_vars['DEFAULT_INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]);
} else {
$_smarty_tpl->_assignInScope('ITEM_VALUE', NULL);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php if ($_smarty_tpl->tpl_vars['IS_VISIBLE_COMMENTS']->value) {?><tr class="inventoryRowExpanded numRow<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['IS_OPENED_COMMENTS']->value) {?>d-none<?php }?>" numrowex="<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
"><td class="colExpanded" colspan="<?php echo $_smarty_tpl->tpl_vars['COUNT_FIELDS1']->value+1;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[2], 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('EditView',$_smarty_tpl->tpl_vars['MODULE']->value)));
$_smarty_tpl->_assignInScope('COLUMN_NAME', $_smarty_tpl->tpl_vars['FIELD']->value->get('columnName'));
if ((isset($_smarty_tpl->tpl_vars['ITEM_DATA']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]))) {
$_smarty_tpl->_assignInScope('ITEM_VALUE', $_smarty_tpl->tpl_vars['ITEM_DATA']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]);
} elseif ((isset($_smarty_tpl->tpl_vars['DEFAULT_INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]))) {
$_smarty_tpl->_assignInScope('ITEM_VALUE', $_smarty_tpl->tpl_vars['DEFAULT_INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['COLUMN_NAME']->value]);
} else {
$_smarty_tpl->_assignInScope('ITEM_VALUE', NULL);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td></tr><?php }?><!-- /tpl-Base-Edit-InventoryItem -->
<?php }
}
