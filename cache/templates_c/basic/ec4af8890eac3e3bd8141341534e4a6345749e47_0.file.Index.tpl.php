<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:26:03
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\FinancialProcesses\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65859c7be01642_22105364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec4af8890eac3e3bd8141341534e4a6345749e47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\FinancialProcesses\\Index.tpl',
      1 => 1702905765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65859c7be01642_22105364 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="supportProcessesContainer"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><ul id="tabs" class="nav nav-tabs mt-2 mr-0" data-tabs="tabs"><li class="nav-item"><a class="nav-link active" href="#configuration" data-toggle="tab"><?php echo \App\Language::translate('LBL_GENERAL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </a></li></ul><br /><div class="tab-content"><div class='editViewContainer tab-pane active' id="configuration"></div></div></div>
<?php }
}
