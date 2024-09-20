<?php
/* Smarty version 4.2.0, created on 2024-05-27 10:03:49
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\OSSEmployees\EmployeeHierarchy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66544c75372465_50244626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c8776a804ea22929fb2a89bf4cd610884d50e63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\OSSEmployees\\EmployeeHierarchy.tpl',
      1 => 1702905753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66544c75372465_50244626 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="accountHierarchyContainer" class="modelContainer modal fade" taindex="-1"><div class="modal-dialog modal-xl"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_SHOW_EMPLOYEES_HIERARCHY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body pb-0"><div class="table-responsive maxHeightModal"><table class="table table-bordered"><thead><tr class="blockHeader"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EMPLOYEES_HIERARCHY']->value['header'], 'HEADERNAME');
$_smarty_tpl->tpl_vars['HEADERNAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADERNAME']->value) {
$_smarty_tpl->tpl_vars['HEADERNAME']->do_else = false;
?><th><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADERNAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EMPLOYEES_HIERARCHY']->value['entries'], 'ENTRIES');
$_smarty_tpl->tpl_vars['ENTRIES']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ENTRIES']->value) {
$_smarty_tpl->tpl_vars['ENTRIES']->do_else = false;
?><tbody><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ENTRIES']->value, 'LISTFIELDS');
$_smarty_tpl->tpl_vars['LISTFIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTFIELDS']->value) {
$_smarty_tpl->tpl_vars['LISTFIELDS']->do_else = false;
?><td><?php echo $_smarty_tpl->tpl_vars['LISTFIELDS']->value;?>
</td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></tbody><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div></div><div class="modal-footer"><div class="float-right cancelLinkContainer"><button class="btn btn-primary" type="reset" data-dismiss="modal"><strong><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div></div>
<?php }
}
