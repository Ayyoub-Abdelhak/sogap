<?php
/* Smarty version 4.2.0, created on 2023-12-18 14:57:17
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\PageFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65804fbd416c38_30613001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f275f08ae2b4019f24ab247c1917243bd9de3c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\PageFooter.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65804fbd416c38_30613001 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-PageFooter --></div><input type="hidden" id="processEvents" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(App\Process::getEvents()));?>
" /><?php if ($_smarty_tpl->tpl_vars['SHOW_FOOTER']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (\App\Debuger::isDebugBar()) {
echo \App\Debuger::getDebugBar()->getJavascriptRenderer()->render();
}?></body></html><!-- /tpl-Base-PageFooter -->
<?php }
}
