<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:25:20
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ConditionBuilder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658199c020ede5_56168896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fddf9f7c1a325f62192dea354dcb1ea61f6698b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ConditionBuilder.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658199c020ede5_56168896 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ConditionBuilder --><div class="c-condition-builder js-condition-builder" data-js="container"><div class="js-condition-builder-group-template hide" data-js="template"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilderGroup.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilderGroup.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CONDITIONS_GROUP'=>$_smarty_tpl->tpl_vars['ADVANCE_CRITERIA']->value,'ROOT_ITEM'=>true), 0, true);
?></div><!-- /tpl-Base-ConditionBuilder -->
<?php }
}
