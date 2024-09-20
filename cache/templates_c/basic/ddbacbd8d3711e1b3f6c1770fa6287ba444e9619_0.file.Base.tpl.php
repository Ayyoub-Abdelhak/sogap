<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:49:20
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ConditionBuilder\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f854704da126_02335490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddbacbd8d3711e1b3f6c1770fa6287ba444e9619' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ConditionBuilder\\Base.tpl',
      1 => 1702905749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f854704da126_02335490 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ConditionBuilder-Base --><div class="input-group input-group-sm"><input class="form-control js-condition-builder-value" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['VALUE']->value);?>
" autocomplete="off"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));?>
"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-js="value" /></div><!-- /tpl-Base-ConditionBuilder-Base -->
<?php }
}
