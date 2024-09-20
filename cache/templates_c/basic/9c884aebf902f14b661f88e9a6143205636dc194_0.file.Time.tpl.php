<?php
/* Smarty version 4.2.0, created on 2024-01-03 12:00:21
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\List\Field\Time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953e458ffd82_98619048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c884aebf902f14b661f88e9a6143205636dc194' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\List\\Field\\Time.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953e458ffd82_98619048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']);
} else {
$_smarty_tpl->_assignInScope('FIELD_VALUE', '');
}
$_smarty_tpl->_assignInScope('TIME_FORMAT', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('hour_format'));?><div class="tpl-List-Field-Time picklistSearchField"><input type="text" data-format="<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
" class="form-control clockPicker listSearchContributor"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
"name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?>data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }?> autocomplete="off" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?> /></div>
<?php }
}
