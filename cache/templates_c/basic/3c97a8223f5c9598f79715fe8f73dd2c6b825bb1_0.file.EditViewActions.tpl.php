<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:45:31
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Vtiger\EditViewActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f8538ba1b986_19319604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c97a8223f5c9598f79715fe8f73dd2c6b825bb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Vtiger\\EditViewActions.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f8538ba1b986_19319604 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-EditViewActions c-form__action-panel"><?php $_smarty_tpl->_assignInScope('SINGLE_MODULE_NAME', ('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value));?><button class="btn btn-success js-form-submit-btn" type="submit"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger ml-2" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php if ((isset($_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_HEADER']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EDITVIEW_LINKS']->value['EDIT_VIEW_HEADER'], 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'editViewHeader'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></form></div></div>
<?php }
}
