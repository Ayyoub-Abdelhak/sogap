<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:49:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Workflows\EditHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d483ab0e8424_19479560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b3cf90bf17c093f0a95dc00849234272fbf8d30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Workflows\\EditHeader.tpl',
      1 => 1702905760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d483ab0e8424_19479560 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="editContainer"><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step" style="z-index:9" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo \App\Language::translate('SCHEDULE_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li style="z-index:8" class="step" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo \App\Language::translate('ADD_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step last" style="z-index:7" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo \App\Language::translate('ADD_TASKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div><div class="clearfix"></div></div>
<?php }
}
