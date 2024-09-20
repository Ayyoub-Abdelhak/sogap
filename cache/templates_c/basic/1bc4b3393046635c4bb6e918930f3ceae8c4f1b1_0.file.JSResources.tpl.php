<?php
/* Smarty version 4.2.0, created on 2023-12-18 13:57:06
  from 'C:\xampp\htdocs\yetiforce\install\tpl\JSResources.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65804fb21ca8f3_30884630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bc4b3393046635c4bb6e918930f3ceae8c4f1b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\install\\tpl\\JSResources.tpl',
      1 => 1702905790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65804fb21ca8f3_30884630 (Smarty_Internal_Template $_smarty_tpl) {
?><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_SCRIPTS']->value, 'jsModel', false, 'index');
$_smarty_tpl->tpl_vars['jsModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
$_smarty_tpl->tpl_vars['jsModel']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="../<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
<?php }
}
