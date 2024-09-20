<?php
/* Smarty version 4.2.0, created on 2023-12-28 22:18:07
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\EventHandler\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658de60fbc0098_47774298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abfef153ec61f6eec27f3671cb0645cd3fbbd72f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\EventHandler\\Index.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658de60fbc0098_47774298 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-EventHandler-Index --><div><?php $_smarty_tpl->_assignInScope('HANDLER_TYPES', \App\EventHandler::HANDLER_TYPES);?><div class="o-breadcrumb widget_header row mb-2"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div><ul id="tabs" class="nav nav-tabs my-2 mr-0" data-tabs="tabs"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HANDLER_TYPES']->value, 'ITEM', false, 'INDEX');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['INDEX']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['HANDLERS']->value[$_smarty_tpl->tpl_vars['INDEX']->value]))) {?> <?php continue 1;?> <?php }?><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == $_smarty_tpl->tpl_vars['INDEX']->value) {?> active<?php }?>" href="#<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" data-toggle="tab"><?php if ((isset($_smarty_tpl->tpl_vars['ITEM']->value['icon']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['icon'];?>
 mr-2"></span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><div id="my-tab-content" class="tab-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HANDLER_TYPES']->value, 'ITEM', false, 'INDEX');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['INDEX']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
if (!(isset($_smarty_tpl->tpl_vars['HANDLERS']->value[$_smarty_tpl->tpl_vars['INDEX']->value]))) {?> <?php continue 1;?> <?php }?><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == $_smarty_tpl->tpl_vars['INDEX']->value) {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" data-js="data"><form class="js-validation-form"><div class="js-config-table table-responsive" data-js="container"><table class="table table-bordered"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HANDLER_TYPES']->value[$_smarty_tpl->tpl_vars['INDEX']->value]['columns'], 'ITEM', false, 'NAME');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><th data-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
" class="text-center" scope="col"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HANDLERS']->value[$_smarty_tpl->tpl_vars['INDEX']->value], 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr><th scope="row"><?php echo \App\Language::translate(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value['handler_class']),'Other.EventHandler');?>
</th><td><?php echo \App\Language::translate(strtoupper(((string)$_smarty_tpl->tpl_vars['ITEM']->value['handler_class'])."_DESC"),'Other.EventHandler');?>
</td><td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['ITEM']->value['include_modules']), 'VALUE', false, NULL, 'LIST', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['total'];
echo \App\Language::translate($_smarty_tpl->tpl_vars['VALUE']->value,$_smarty_tpl->tpl_vars['VALUE']->value);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, explode(',',$_smarty_tpl->tpl_vars['ITEM']->value['exclude_modules']), 'VALUE', false, NULL, 'LIST', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['total'];
echo \App\Language::translate($_smarty_tpl->tpl_vars['VALUE']->value,$_smarty_tpl->tpl_vars['VALUE']->value);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_LIST']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td><td class="text-center"><input name="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['handler_class'];?>
" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value['privileges'] == \App\EventHandler::SYSTEM) {?> disabled <?php }?>value="1" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value['is_active'] == 1) {?>checked<?php }?>></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></form></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><!-- /tpl-Settings-EventHandler-Index -->
<?php }
}
