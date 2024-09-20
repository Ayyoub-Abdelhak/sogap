<?php
/* Smarty version 4.2.0, created on 2023-12-19 15:37:39
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\List\Field\Date.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581aab398c7d8_35321023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83ca4149f928a1c7bef03303c460c8a35c20b7ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\List\\Field\\Date.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581aab398c7d8_35321023 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-List-Field-Date --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('dateFormat', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format'));
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']);
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', '');
}?><div class="picklistSearchField u-min-w-150pxr"><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" class="listSearchContributor dateRangeField form-control datepicker"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule()->getName());?>
"type="text" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_VALUES']->value;?>
" data-date-format="<?php echo $_smarty_tpl->tpl_vars['dateFormat']->value;?>
" data-calendar-type="range"data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?>data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
"data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }?> autocomplete="off" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?> /></div><!-- /tpl-Base-List-Field-Date -->
<?php }
}
