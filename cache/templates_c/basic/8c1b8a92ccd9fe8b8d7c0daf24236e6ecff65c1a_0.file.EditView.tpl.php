<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:14
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b6f22372_11169214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c1b8a92ccd9fe8b8d7c0daf24236e6ecff65c1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\EditView.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b6f22372_11169214 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-EditView --><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('QUALIFIED_MODULE', $_prefixVariable1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewBlocks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><input type="hidden" name="isPreference" value="<?php echo $_smarty_tpl->tpl_vars['IS_PREFERENCE']->value;?>
" /><input type="hidden" name="timeFormatOptions" data-value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['DAY_STARTS']->value);?>
" /><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Users-EditView -->
<?php }
}
