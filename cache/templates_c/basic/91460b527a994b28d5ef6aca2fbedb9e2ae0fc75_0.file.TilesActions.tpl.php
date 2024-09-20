<?php
/* Smarty version 4.2.0, created on 2024-01-03 12:15:33
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\TilesActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659541d57881b5_06991483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91460b527a994b28d5ef6aca2fbedb9e2ae0fc75' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\TilesActions.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659541d57881b5_06991483 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-TilesActions --><div class="d-flex c-tiles-actions-container"><div><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox mt-1 ml-1" title="<?php echo \App\Language::translate('LBL_SELECT_SINGLE_ROW');?>
" /></div><?php $_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordListViewLinksLeftSide());
if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
$_smarty_tpl->_assignInScope('ONLY_ONE', count($_smarty_tpl->tpl_vars['LINKS']->value) == 1);?><div class="actions"><?php if ($_smarty_tpl->tpl_vars['ONLY_ONE']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="dropright u-remove-dropdown-icon"><button class="btn btn-xs  toolsAction dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-wrench" title="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"></span></button><div class="dropdown-menu p-1" aria-label="<?php echo \App\Language::translate('LBL_ACTIONS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listViewBasic','BTN_CLASS'=>'btn-xs'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?></div><?php }?></div><!-- /tpl-Base-TilesActions -->
<?php }
}
