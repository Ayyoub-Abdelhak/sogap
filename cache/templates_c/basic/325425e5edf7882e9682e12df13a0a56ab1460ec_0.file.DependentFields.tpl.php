<?php
/* Smarty version 4.2.0, created on 2024-09-12 15:26:47
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PickListDependency\DependentFields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66e2fa279870d1_58090607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '325425e5edf7882e9682e12df13a0a56ab1460ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PickListDependency\\DependentFields.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e2fa279870d1_58090607 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-PickListDependency-DependentFields --><div class="form-group row mb-0"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value, 'FIELD_MODEL', false, NULL, 'field', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="col-12 col-md-4 mb-2 js-field-container"><label class="u-text-small-bold mb-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip')) {?><div class="js-popover-tooltip ml-1 d-inline my-auto u-h-fit u-cursor-pointer" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div><?php }?>:</label><div class="fieldValue m-auto"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'RECORD'=>null), 0, true);
?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-Settings-PickListDependency-DependentFields -->
<?php }
}
