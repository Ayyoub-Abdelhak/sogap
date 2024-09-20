<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\BlocksView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b18cf610_66241902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '723dadbfe4e1a68eb6e97c3e2ac34aa67519532b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\BlocksView.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b18cf610_66241902 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-BlocksView --><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL_LIST', false, 'BLOCK_LABEL_KEY');
$_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->do_else = false;
$_smarty_tpl->_assignInScope('BLOCK', $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value]);
if ($_smarty_tpl->tpl_vars['BLOCK']->value == null || count($_smarty_tpl->tpl_vars['FIELD_MODEL_LIST']->value) <= 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('IS_HIDDEN', $_smarty_tpl->tpl_vars['BLOCK']->value->isHidden());
$_smarty_tpl->_assignInScope('IS_DYNAMIC', $_smarty_tpl->tpl_vars['BLOCK']->value->isDynamic());
$_smarty_tpl->_assignInScope('BLOCK_ICON', $_smarty_tpl->tpl_vars['BLOCK']->value->get('icon'));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/BlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><!-- /tpl-Base-Detail-BlocksView -->
<?php }
}
