<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:54:35
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Kanban\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d484ebc3bb04_18429550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b8f39762a847766d153a959b3619892a17cf8b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Kanban\\Index.tpl',
      1 => 1702905761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d484ebc3bb04_18429550 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Kanban-Index --><input id="js-module-name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" data-js="value" /><div class="o-breadcrumb widget_header row align-items-lg-center"><div class="col-md-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-md-6"><div class="btn-toolbar justify-content-end form-row"><button class="btn btn-primary float-right mr-2 js-add-board" type="button"><span class="fas fa-plus mr-2"></span><?php echo \App\Language::translate('LBL_ADD_BOARD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><div class="btn-group col-5 float-right px-1"><select class="select2 form-control js-module-list" data-js="change"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['MODULE_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div></div><?php if (!\App\YetiForce\Register::isRegistered()) {?><div class="col-md-12"><div class="alert alert-danger"><span class="yfi yfi-yeti-register-alert color-red-600 u-fs-5x mr-4 float-left"></span><h1 class="alert-heading"><?php echo \App\Language::translate('LBL_YETIFORCE_NOT_REGISTRATION_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h1><?php echo \App\Language::translate('LBL_YETIFORCE_NOT_REGISTRATION_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php } else {
$_smarty_tpl->_assignInScope('CHECK_ALERT', \App\YetiForce\Shop::checkAlert('YetiForceKanban'));
if ($_smarty_tpl->tpl_vars['CHECK_ALERT']->value) {?><div class="alert alert-warning mt-2"><span class="yfi-premium mr-2 u-fs-2em color-red-600 float-left"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CHECK_ALERT']->value,'Settings::YetiForce');?>
 <a class="btn btn-primary btn-sm" href="index.php?parent=Settings&module=YetiForce&view=Shop&product=YetiForceKanban&mode=showProductModal"><span class="yfi yfi-shop mr-2"></span><?php echo \App\Language::translate('LBL_YETIFORCE_SHOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><?php }?><div class="js-fields-list" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Fields.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }?><!-- /tpl-Settings-Kanban-Index -->
<?php }
}
