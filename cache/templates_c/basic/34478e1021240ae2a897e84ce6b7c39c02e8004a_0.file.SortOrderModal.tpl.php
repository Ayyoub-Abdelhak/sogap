<?php
/* Smarty version 4.2.0, created on 2024-05-22 16:31:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\CustomView\SortOrderModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_664e0fc3e91036_19966119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34478e1021240ae2a897e84ce6b7c39c02e8004a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\CustomView\\SortOrderModal.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664e0fc3e91036_19966119 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-CustomView-SortOrderModal --><div class="col-md-12"><div class="alert alert-danger alert-dismissible fade show mb-0" role="alert"><h4 class="alert-heading"><?php echo \App\Language::translate('LBL_ATTENTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4><?php echo \App\Language::translate('LBL_SORTING_SETTINGS_WORNING',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div></div><form class="js-sorting-form" data-js="submit"><input type="hidden" id="cvid" name="cvid" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" id="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" id="orderBy" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SORT_ORDER_BY']->value));?>
"></form><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/SortOrderModal.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- /tpl-Settings-CustomView-SortOrderModal -->
<?php }
}
