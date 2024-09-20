<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:45:30
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\FieldsDependency\DynamicBlocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f8538aeacc54_67110896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811116731cf7ceabf05eed55bc52a607ebd195ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\FieldsDependency\\DynamicBlocks.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f8538aeacc54_67110896 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-FieldsDependency-DynamicBlocks --><div class="form-group row"><label for="inputFields" class="col-sm-3 col-form-label text-right"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-popover-tooltip ml-2" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_FIELDS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a></label><div class="col-sm-9"><select name="fields[]" class="select2 form-control" id="inputFields" multiple="multiple" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['FIELDS']->value)) {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullLabelTranslation();?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><p class="border-top mb-1"><?php echo \App\Language::translate('LBL_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</p><div class="js-condition-builder-view" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilder.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><!-- /tpl-Settings-FieldsDependency-DynamicBlocks -->
<?php }
}
