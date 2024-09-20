<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:46:43
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\AdminAccess\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a696d3803d24_92247431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c56c4612bdaac5d0dd7a144909f29d75f5f979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\AdminAccess\\Index.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a696d3803d24_92247431 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-AdminAccess-Index --><div><div class="o-breadcrumb widget_header row mb-2"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div><ul id="tabs" class="nav nav-tabs my-2 mr-0" data-tabs="tabs"><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TAB']->value === 'permissions') {?>active<?php }?>" href="#permissions" data-toggle="tab" data-name="permissions"><span class="yfi-advanced-permission mr-2"></span><?php echo \App\Language::translate('LBL_PERMISSIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['TAB']->value === 'visitPurpose') {?>active<?php }?>" href="#historyAdminsVisitPurpose" data-toggle="tab" data-name="historyAdminsVisitPurpose"><span class="fas fa-history mr-2"></span><?php echo \App\Language::translate('LBL_HISTORY_ADMINS_VISIT_PURPOSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li></ul></div><div id="my-tab-content" class="tab-content ml-1 mr-1"><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['TAB']->value === 'permissions') {?>active<?php }?> font-weight-normal" id="permissions" data-js="data"></div><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['TAB']->value === 'visitPurpose') {?>active<?php }?> font-weight-normal" id="historyAdminsVisitPurpose" data-js="data"></div></div></div><!-- /tpl-Settings-AdminAccess-Index -->
<?php }
}
