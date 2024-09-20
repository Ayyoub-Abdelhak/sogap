<?php
/* Smarty version 4.2.0, created on 2023-12-28 10:37:57
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Edit\DefaultField\Date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658d41f52d2e77_21994392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71cd4ba42522e1e4b9b2e30bb200aca141d85d90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Edit\\DefaultField\\Date.tpl',
      1 => 1702905748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658d41f52d2e77_21994392 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Edit-Field-DefaultDate --><?php $_smarty_tpl->_assignInScope('IS_CUSTOM_DEFAULT_VALUE', \App\TextParser::isVaribleToParse($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue')));
if (empty($_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value)) {
$_smarty_tpl->_assignInScope('TABINDEX_INCREMENT', 0);
}?><div class="js-base-element row <?php if ($_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {?> d-none<?php }?>" data-js="container|data-name"data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"><div class="col-10"><?php if (!$_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue')));
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName(),'RECORD'=>null), 0, true);
?></div><div class="col-2"><span class="input-group-prepend" title="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_CUSTOM_CONFIGURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><button type="button" class="btn btn-light configButton btn-outline-secondary" tabindex="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex') != 0) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex')+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['HIGHEST_TABINDEX']->value))) {
echo $_smarty_tpl->tpl_vars['HIGHEST_TABINDEX']->value+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
} else {
echo 0+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
}?>"><span class="fas fa-cog"></span></button></span></div></div><div class="input-group js-base-element <?php if (!$_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {?> d-none<?php }?>" data-js="container|data-name"data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"value="<?php if ($_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue');
}?>"type="text" tabindex="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex') != 0) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex')+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['HIGHEST_TABINDEX']->value))) {
echo $_smarty_tpl->tpl_vars['HIGHEST_TABINDEX']->value+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
} else {
echo 0+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
}?>"class="form-control" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue() || !$_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {?> disabled="disabled" <?php }?>data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo="<?php echo \App\Purifier::encodeHtml('{"type":"textParser"}');?>
" /><span class="input-group-prepend"><button class="btn btn-light varibleToParsers" type="button" tabindex="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex') != 0) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex')+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['HIGHEST_TABINDEX']->value))) {
echo $_smarty_tpl->tpl_vars['HIGHEST_TABINDEX']->value+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
} else {
echo 0+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
}?>"><span class="yfi yfi-full-editing-view"></span></button><button class="btn btn-light active configButton" type="button" tabindex="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex') != 0) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tabindex')+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
} elseif ((isset($_smarty_tpl->tpl_vars['HIGHEST_TABINDEX']->value))) {
echo $_smarty_tpl->tpl_vars['HIGHEST_TABINDEX']->value+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
} else {
echo 0+$_smarty_tpl->tpl_vars['TABINDEX_INCREMENT']->value;
}?>"title="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_CUSTOM_CONFIGURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-cog"></span></button></span></div>
<?php }
}
