<?php
/* Smarty version 4.2.0, created on 2023-12-19 17:35:29
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Project\gantt\GanttContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581c6518e3740_96031378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '968ec8ee2a49cc52b8d51f87c23eefd8c9443081' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Project\\gantt\\GanttContents.tpl',
      1 => 1702905766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581c6518e3740_96031378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('gantt/GanttHeader.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="tpl-Project-gantt-GanntContents c-gantt" data-js="container"><input type="hidden" name="projectId" value="<?php echo $_smarty_tpl->tpl_vars['PROJECTID']->value;?>
"><div id="gantt_<?php echo $_smarty_tpl->tpl_vars['PROJECTID']->value;?>
" class="js-gantt__container" data-js="container"></div></div>
<?php }
}
