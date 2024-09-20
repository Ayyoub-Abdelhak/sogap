<?php
/* Smarty version 4.2.0, created on 2024-03-29 11:34:14
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\Modals\LoginHistoryModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6606a736a4ed36_19432016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '516ff41c43004c64ae70df5f9ac8725a84356aa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\Modals\\LoginHistoryModal.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606a736a4ed36_19432016 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Modals-LoginHistoryModal --><div class="modal-body pb-3"><table class="table table-bordered u-fs-13px"><thead><tr class="listViewEntries"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABLE_COLUMNS']->value, 'LISTVIEW_ENTRY_COLUMN', false, 'LISTVIEW_ENTRY_COLUMN_NAME');
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN_NAME']->value => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN']->do_else = false;
?><th class="noWrap <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><tbody><div class="alert alert-info"><?php echo \App\Language::translateArgs('LBL_LIMIT_INFO',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,30);?>
</div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LOGIN_HISTORY_ENTRIES']->value, 'LISTVIEW_ENTRY');
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->do_else = false;
?><tr class="listViewEntries"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TABLE_COLUMNS']->value, 'LISTVIEW_ENTRY_COLUMN', false, 'LISTVIEW_ENTRY_COLUMN_NAME');
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN_NAME']->value => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN']->do_else = false;
?><td class="noWrap <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN_NAME']->value])) {
if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN_NAME']->value === 'status') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN_NAME']->value],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
} else {
echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value[$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY_COLUMN_NAME']->value];
}
} else { ?>--<?php }?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><!-- /tpl-Users-Modals-LoginHistoryModal -->
<?php }
}
