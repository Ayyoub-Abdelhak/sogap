<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:57:23
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PDF\EditHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ea613ccfa31_18967139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '148980019a90e8f3214ce11105a399819e0703ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PDF\\EditHeader.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ea613ccfa31_18967139 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row widget_header mb-2"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="editContainer"><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step zIndex1" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_BASIC_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex2" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_CONTENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex3" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo \App\Language::translate('LBL_DOCUMENT_EXCEPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div><div class="clearfix"></div></div>
<?php }
}
