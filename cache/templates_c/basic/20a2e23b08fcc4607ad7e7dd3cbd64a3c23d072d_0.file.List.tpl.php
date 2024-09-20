<?php
/* Smarty version 4.2.0, created on 2023-12-21 15:07:20
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\ModTracker\List.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658446981ccd31_31018274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20a2e23b08fcc4607ad7e7dd3cbd64a3c23d072d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\ModTracker\\List.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658446981ccd31_31018274 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modTrackerContainer"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="contents"><div class="contents tabbable mt-2"><table class="table table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th><strong><?php echo \App\Language::translate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModTrackerModules(), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="js-row" data-js="data"><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['module'],$_smarty_tpl->tpl_vars['item']->value['module']);?>
</td><td><input class="js-active-modtracker" data-js="change" type="checkbox" name="active" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>checked="" <?php }?>></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><div class="clearfix"></div></div></div>
<?php }
}
