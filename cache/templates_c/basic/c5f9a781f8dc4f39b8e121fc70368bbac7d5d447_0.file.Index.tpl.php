<?php
/* Smarty version 4.2.0, created on 2023-12-21 15:07:23
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Widgets\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6584469bc56557_19664149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f9a781f8dc4f39b8e121fc70368bbac7d5d447' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Widgets\\Index.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6584469bc56557_19664149 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="filterAll" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FILTERS']->value);?>
'><input type="hidden" id="checkboxAll" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CHECKBOXS']->value);?>
'><input type="hidden" id="switchHeaderAll" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SWITCHES_HEADER']->value);?>
'><input type="hidden" id="customView" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value);?>
'><div class="WidgetsManage"><input type="hidden" name="tabid" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE']->value;?>
"><div class="o-breadcrumb widget_header row"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="float-right col-md-4 mt-2"><select class="select2 col-md-3 form-control js-module__list" data-js="change|value" name="ModulesList"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModulesList(), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SOURCE']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['tablabel'],$_smarty_tpl->tpl_vars['item']->value['name']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="row my-2"><div class="col-md-8"><h4><?php echo \App\Language::translate('List of widgets for the module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCEMODULE']->value,$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
</h4></div><div class="col-md-4"><button class="btn btn-success js-widget__add float-md-right float-left" data-js="click" type="button"><i class="fas fa-plus mr-1"></i><strong><?php echo \App\Language::translate('Add widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></div><div class="blocks-content padding1per"><div class="row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGETCOL', false, 'column');
$_smarty_tpl->tpl_vars['WIDGETCOL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value => $_smarty_tpl->tpl_vars['WIDGETCOL']->value) {
$_smarty_tpl->tpl_vars['WIDGETCOL']->do_else = false;
?><div class="blocksSortable col-md-4" data-column="<?php echo $_smarty_tpl->tpl_vars['column']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETCOL']->value, 'WIDGET', false, 'key');
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
?><div class="blockSortable" data-id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><div class="padding1per border1px"><div class="row"><div class="col-md-4"><img class="alignMiddle" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" /> &nbsp;&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['type'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-4"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value['label'] == '' && (isset($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']))) {
echo \App\Language::translate(\App\Module::getModuleName($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']),\App\Module::getModuleName($_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule']));
} elseif ($_smarty_tpl->tpl_vars['WIDGET']->value['label']) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['SOURCEMODULE']->value);?>
&nbsp;<?php }?></div><div class="col-md-4"><span class="float-right"><button class="btn btn-sm btn-primary js-widget__edit mr-1" data-js="click"><i class="u-cursor-pointer yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('Edit',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></button><button class="btn btn-sm btn-danger js-widget__remove" data-js="click"><i class="u-cursor-pointer fas fa-times" title="<?php echo \App\Language::translate('Remove',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i></button></span></div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="clearfix"></div>
<?php }
}
