<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\Detail\FullContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b15f4523_81498935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a859da6b620dba91bb111910bd62a2af1de7e859' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\Detail\\FullContents.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b15f4523_81498935 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Detail-FullContents --><input type="hidden" name="timeFormatOptions" data-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['DAY_STARTS']->value);?>
" /><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'DetailTop'), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Detail/BlocksView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewBlockLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TYPE_VIEW'=>'DetailBottom'), 0, true);
?><!-- /tpl-Users-Detail-FullContents -->
<?php }
}
