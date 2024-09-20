<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:30:13
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\ConfigEditor\Detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818cd5c39ba5_15773057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b82d787cc62549daf64c70ae1c303f8382977d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\ConfigEditor\\Detail.tpl',
      1 => 1702905760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818cd5c39ba5_15773057 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-ConfigEditor-Detail --><div class="verticalScroll"><div class="o-breadcrumb widget_header row"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div><ul id="tabs" class="nav nav-tabs my-2 mr-0" data-tabs="tabs"><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Main') {?>active<?php }?>" href="#Main" data-toggle="tab" data-name="Main"><span class="fas fa-sliders-h mr-2"></span><?php echo \App\Language::translate('LBL_MAIN_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Relation') {?>active<?php }?>" href="#Relation" data-toggle="tab" data-name="Relation"><span class="adminIcon-modules-relations mr-2"></span><?php echo \App\Language::translate('LBL_RELATION_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Performance') {?>active<?php }?>" href="#Performance" data-toggle="tab" data-name="Performance"><span class="fa-solid fa-gauge-high mr-2"></span><?php echo \App\Language::translate('LBL_PERFORMANCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li></ul></div><div id="my-tab-content" class="tab-content"><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Main') {?>active<?php }?>" id="Main" data-name="Main" data-js="data"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Edit.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONFIG_NAMES']->value, 'CONFIG_NAME');
$_smarty_tpl->tpl_vars['CONFIG_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CONFIG_NAME']->value) {
$_smarty_tpl->tpl_vars['CONFIG_NAME']->do_else = false;
?><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == $_smarty_tpl->tpl_vars['CONFIG_NAME']->value) {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['CONFIG_NAME']->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['CONFIG_NAME']->value;?>
" data-js="data"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConfigTemplate.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CONFIG_NAME'=>$_smarty_tpl->tpl_vars['CONFIG_NAME']->value), 0, true);
?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><!-- /tpl-Settings-ConfigEditor-Detail -->
<?php }
}
