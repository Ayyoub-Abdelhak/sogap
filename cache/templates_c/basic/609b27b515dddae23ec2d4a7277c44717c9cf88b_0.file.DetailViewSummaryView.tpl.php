<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:25
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\DetailViewSummaryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581915513f274_86865388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609b27b515dddae23ec2d4a7277c44717c9cf88b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\DetailViewSummaryView.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581915513f274_86865388 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-DetailViewSummaryView -->
<div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'SummaryTop'), 0, true);
?></div><div class="o-detail-widgets row no-gutters mx-n1"><?php if (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value[3])) {
$_smarty_tpl->_assignInScope('span', '4');
} elseif (!empty($_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value[2])) {
$_smarty_tpl->_assignInScope('span', '6');
} else {
$_smarty_tpl->_assignInScope('span', '12');
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_WIDGETS']->value, 'WIDGETCOLUMN');
$_smarty_tpl->tpl_vars['WIDGETCOLUMN']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGETCOLUMN']->value) {
$_smarty_tpl->tpl_vars['WIDGETCOLUMN']->do_else = false;
?><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['span']->value;?>
 px-1"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETCOLUMN']->value, 'WIDGET', false, 'key');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
$_smarty_tpl->_assignInScope('FILE', ('Detail/Widget/').($_smarty_tpl->tpl_vars['WIDGET']->value['tpl']));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FILE']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'SummaryBottom'), 0, true);
?></div><!-- /tpl-Base-DetailViewSummaryView -->
<?php }
}
