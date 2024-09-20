<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:45:37
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\GlobalPermission\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a69691b80450_37884098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e08554be81e30f233fdb09cdc93cc93b511bd18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\GlobalPermission\\Index.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a69691b80450_37884098 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" LangManagement"><div class="o-breadcrumb widget_header row"><div class="col-md-10"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-md-2"></div></div><div class=""><table class="table table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th><strong><?php echo \App\Language::translate('LBL_PROFILE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_VIEW_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_EDIT_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GLOBALPERMISSIONS']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><tr data-pid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="js-row" data-js="data/checked"><td><?php echo $_smarty_tpl->tpl_vars['item']->value['profilename'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td><td class="textAlignCenter"><input class="js-save" data-js="change" type="checkbox" data-globalactionid="1" title="<?php echo \App\Language::translate('LBL_VIEW_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['gp_1'] == Settings_Profiles_Module_Model::IS_PERMITTED_VALUE) {?>checked<?php }?>></td><td class="textAlignCenter"><input class="js-save" data-js="change" type="checkbox" title="<?php echo \App\Language::translate('LBL_EDIT_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-globalactionid="2" <?php if ($_smarty_tpl->tpl_vars['item']->value['gp_2'] == Settings_Profiles_Module_Model::IS_PERMITTED_VALUE) {?>checked<?php }?>></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div>
<?php }
}
