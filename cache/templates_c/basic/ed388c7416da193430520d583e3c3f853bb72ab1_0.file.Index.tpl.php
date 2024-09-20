<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:30:49
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\SalesProcesses\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818cf94fa104_38886468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed388c7416da193430520d583e3c3f853bb72ab1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\SalesProcesses\\Index.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818cf94fa104_38886468 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="" id="salesProcessesContainer"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><ul id="tabs" class="nav nav-tabs mt-1 layoutTabs massEditTabs" data-tabs="tabs"><li class="nav-item"><a class="nav-link active" href="#popup" data-toggle="tab"><?php echo \App\Language::translate('LBL_PRODUCTS_AND_SERVICES_POPUP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </a></li></ul><?php $_smarty_tpl->_assignInScope('CONFIG', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getConfig());?><div class="tab-content layoutContent"><div class="tab-pane active" id="popup"><?php $_smarty_tpl->_assignInScope('POPUP', $_smarty_tpl->tpl_vars['CONFIG']->value['popup']);?><div class="btn-group-toggle" data-toggle="buttons"><label class="btn <?php if ($_smarty_tpl->tpl_vars['POPUP']->value['limit_product_service'] == 'true') {?>btn-success active<?php } else { ?>btn-light<?php }?> btn-block"><span class="far <?php if ($_smarty_tpl->tpl_vars['POPUP']->value['limit_product_service'] == 'true') {?>fa-check-square<?php } else { ?>fa-square<?php }?> float-left"></span><input id="limit_product_service" autocomplete="off" class="configField" type="checkbox" name="limit_product_service" data-type="popup" <?php if ($_smarty_tpl->tpl_vars['POPUP']->value['limit_product_service'] == 'true') {?>checked="" <?php }?>><div class="u-white-space-n"><?php echo \App\Language::translate('LBL_LIMIT_PRODUCT_AND_SERVICE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></label></div></div></div></div>
<?php }
}
