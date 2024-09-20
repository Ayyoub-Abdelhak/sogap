<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:02:41
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Vtiger\ListView\TableHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658051012bec30_95475309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '133a1698cb0291e4f6fe1e6022ae9898918c5d25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Vtiger\\ListView\\TableHeader.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658051012bec30_95475309 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-ListView-TableHeader --><thead><tr class="listViewHeaders"><?php if ((isset($_smarty_tpl->tpl_vars['EMPTY_COLUMN']->value)) && 1 === $_smarty_tpl->tpl_vars['EMPTY_COLUMN']->value) {?><th width="1%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></th><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value, 'LISTVIEW_HEADER', true);
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration = 0;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->do_else = false;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
$__foreach_LISTVIEW_HEADER_5_saved = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'];
if (empty($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('moduleName'))) {
$_smarty_tpl->_assignInScope('MODULE_NAME_FOR_LABEL', $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
$_smarty_tpl->_assignInScope('MODULE_NAME_FOR_LABEL', $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('moduleName'));
}?><th width="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
%" nowrap <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last) {?>colspan="2" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><a <?php if (!($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->has('sort'))) {?> class="listViewHeaderValues u-cursor-pointer js-listview_header" data-js="click" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')) {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME_FOR_LABEL']->value);
if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')) {?>&nbsp;&nbsp;<span class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
"></span><?php }?></a></th><?php
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = $__foreach_LISTVIEW_HEADER_5_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><!-- /tpl-Settings-Base-ListView-TableHeader -->
<?php }
}
