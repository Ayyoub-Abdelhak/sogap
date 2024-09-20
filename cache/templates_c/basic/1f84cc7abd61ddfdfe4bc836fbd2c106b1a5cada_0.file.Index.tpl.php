<?php
/* Smarty version 4.2.0, created on 2024-05-22 16:30:59
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\CustomView\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_664e0fb3cb80b7_57088152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f84cc7abd61ddfdfe4bc836fbd2c106b1a5cada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\CustomView\\Index.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664e0fb3cb80b7_57088152 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="customViewList"><div class="o-breadcrumb widget_header row mb-2"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="panel panel-default"><div class="panel-heading mb-2"><div class="row"><div class="col-md-4 col-sm-4 col-6"><select class="select2 js-module-filter" data-js="change" name="moduleFilter"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_MODELS']->value, 'SUPPORTED_MODULE_NAME');
$_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->do_else = false;
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value;?>
"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SUPPORTED_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-md-8 col-sm-8 col-6"><button class="btn btn-success float-right js-create-filter" data-js="click" type="button" data-editurl="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateFilterUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value);?>
"><span class="fas fa-plus"></span> <?php echo App\Language::translate('LBL_ADD_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div><div class="panel-body"><div class="indexContents"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('IndexContents.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="clearfix"></div></div>
<?php }
}
