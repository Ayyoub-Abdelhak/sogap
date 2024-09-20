<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:45:50
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Users\Locks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a6969eddec95_19118911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0da3d73428208abbf0747025f69eeba9aee51d7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Users\\Locks.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a6969eddec95_19118911 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="js-lock-count" data-js="value" value="<?php echo count($_smarty_tpl->tpl_vars['LOCKS']->value);?>
" /><?php $_smarty_tpl->_assignInScope('USERS', Users_Record_Model::getAll());
$_smarty_tpl->_assignInScope('ROLES', Settings_Roles_Record_Model::getAll());?><div class="o-breadcrumb widget_header row"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><span><?php echo \App\Language::translate('LBL_LOCKS_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><table class="js-locks-table table table-bordered" data-js="data"><thead><tr class="listViewHeaders"><th class="w-25"><?php echo \App\Language::translate('LBL_USER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_LOCKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_TOOLS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LOCKS']->value, 'LOCK', false, 'ID');
$_smarty_tpl->tpl_vars['LOCK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['LOCK']->value) {
$_smarty_tpl->tpl_vars['LOCK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('LocksItem.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECT'=>true), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="mt-3"><button class="btn btn-info js-add-item mr-2" data-js="click"><span class="fas fa-plus mr-1"></span><strong><?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-success js-save-items" data-js="click"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><table class="table table-bordered js-clone-item d-none" data-js="clone"><?php $_smarty_tpl->_assignInScope('LOCK', array());
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('LocksItem.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECT'=>false), 0, true);
?></table>
<?php }
}
