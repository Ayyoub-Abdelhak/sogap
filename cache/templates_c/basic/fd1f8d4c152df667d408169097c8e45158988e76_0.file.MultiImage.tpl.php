<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:10
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Field\MultiImage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053b20ac3d5_26155879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd1f8d4c152df667d408169097c8e45158988e76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Field\\MultiImage.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053b20ac3d5_26155879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO_ARRAY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDisplayValueEncoded($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['FIELD_INFO_ARRAY']->value['limit']));
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO_ARRAY']->value)));?><div class="tpl-Detail-Field-MultiImage c-multi-image js-multi-image"><div name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' class="js-multi-image__values" data-js="value"></div><div class="d-inline js-multi-image__result" data-js="container" data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"></div></div>
<?php }
}
