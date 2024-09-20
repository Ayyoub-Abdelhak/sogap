<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:13:50
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Users\SwitchUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a68f1e543367_36826623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3410006efe3e597479393829c13fcd7b0ee172ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Users\\SwitchUsers.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a68f1e543367_36826623 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Users-SwitchUsers --><input type="hidden" id="suCount" value="<?php echo count($_smarty_tpl->tpl_vars['SWITCH_USERS']->value);?>
" /><?php $_smarty_tpl->_assignInScope('USERS', Users_Record_Model::getAll());
$_smarty_tpl->_assignInScope('ROLES', Settings_Roles_Record_Model::getAll());?><div class="tpl-Settings-Users-SwitchUsers widget_header row"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><hr><table class="switchUsersTable table table-bordered"><thead><tr class="listViewHeaders"><th class="u-w-37per"><?php echo \App\Language::translate('LBL_SU_BASE_ACCESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="w-50"><?php echo \App\Language::translate('LBL_SU_AVAILABLE_ACCESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_TOOLS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SWITCH_USERS']->value, 'SUSERS', false, 'ID');
$_smarty_tpl->tpl_vars['SUSERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['SUSERS']->value) {
$_smarty_tpl->tpl_vars['SUSERS']->do_else = false;
if (\App\User::isExists($_smarty_tpl->tpl_vars['ID']->value)) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('SwitchUsersItem.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECT'=>true), 0, true);
} else { ?><tr><td colspan="3"><s class="color-red-500"><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['ID']->value);?>
</s></td></tr><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="float-right"><button class="btn btn-primary addItem mr-3"><span class="fa fa-plus u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-success saveItems"><strong><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><table class="table table-bordered cloneItem d-none"><?php $_smarty_tpl->_assignInScope('SUSERS', array());
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('SwitchUsersItem.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECT'=>false), 0, true);
?></table><!-- /tpl-Settings-Users-SwitchUsers -->
<?php }
}
