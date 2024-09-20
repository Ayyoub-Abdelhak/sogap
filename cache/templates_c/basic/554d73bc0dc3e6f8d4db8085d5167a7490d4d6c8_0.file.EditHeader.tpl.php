<?php
/* Smarty version 4.2.0, created on 2024-05-10 18:03:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\MappedFields\EditHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e536007db74_79659345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554d73bc0dc3e6f8d4db8085d5167a7490d4d6c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\MappedFields\\EditHeader.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e536007db74_79659345 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="editContainer col-md-12 paddingLRZero"><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step zIndex8" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo \App\Language::translate('LBL_MF_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex7" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo \App\Language::translate('LBL_MAPPING_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex3" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo \App\Language::translate('LBL_EXCEPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex2" id="step4"><a><span class="stepNum">4</span><span class="stepText"><?php echo \App\Language::translate('LBL_PERMISSIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div><div class="clearfix"></div></div>
<?php }
}
