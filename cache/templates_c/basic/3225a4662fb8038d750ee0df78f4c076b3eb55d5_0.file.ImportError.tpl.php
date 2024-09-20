<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:07:34
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\ImportError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658195967de673_29882239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3225a4662fb8038d750ee0df78f4c076b3eb55d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\ImportError.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658195967de673_29882239 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Import-ImportError --><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div><?php if ((isset($_smarty_tpl->tpl_vars['FOR_MODULE']->value))) {?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
"/><?php }?><table class="u-w-90per m-auto searchUIBasic well"><tr><td class="font-x-large text-center"><h3><strong><?php echo \App\Language::translate('LBL_IMPORT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
- <?php echo \App\Language::translate('LBL_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></h3></td></tr><tr><td class="d-flex justify-content-center"><table class="text-center w-100 dvtSelectedCell thickBorder importContents redColor"><tr><td class="text-center p-3"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
</td></tr><?php if (!empty($_smarty_tpl->tpl_vars['ERROR_DETAILS']->value)) {?><tr><td class="errorMessage d-flex justify-content-center"><?php echo \App\Language::translate('ERR_DETAILS_BELOW',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<table class="d-flex justify-content-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ERROR_DETAILS']->value, '_VALUE', false, '_TITLE');
$_smarty_tpl->tpl_vars['_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_TITLE']->value => $_smarty_tpl->tpl_vars['_VALUE']->value) {
$_smarty_tpl->tpl_vars['_VALUE']->do_else = false;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['_TITLE']->value;?>
</td><td>-</td><td><?php echo $_smarty_tpl->tpl_vars['_VALUE']->value;?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></td></tr><?php }?></table></td></tr><tr><td align="right"><?php if ($_smarty_tpl->tpl_vars['CUSTOM_ACTIONS']->value != '') {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_ACTIONS']->value, '_ACTION', false, '_LABEL');
$_smarty_tpl->tpl_vars['_ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_LABEL']->value => $_smarty_tpl->tpl_vars['_ACTION']->value) {
$_smarty_tpl->tpl_vars['_ACTION']->do_else = false;
?><button class="create btn btn-danger u-mr-5px btn-sm" name="<?php echo $_smarty_tpl->tpl_vars['_LABEL']->value;?>
" onclick="<?php echo $_smarty_tpl->tpl_vars['_ACTION']->value;?>
"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><button class="edit btn btn-success btn-sm" name="goback" onclick="window.history.back()"><strong><?php echo \App\Language::translate('LBL_GO_BACK',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button></td></tr></table></div><!-- /tpl-Import-ImportError -->
<?php }
}
