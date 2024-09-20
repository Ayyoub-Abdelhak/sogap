<?php
/* Smarty version 4.2.0, created on 2023-12-21 12:17:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\List\Field\UserRole.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65841ebce862d6_92742187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd004caf28775585fa41858c612795cededa2371' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\List\\Field\\UserRole.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65841ebce862d6_92742187 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-List-Field-UserRole --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', explode('##',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUE', array());
}
$_smarty_tpl->_assignInScope('SEARCH_VALUES', array_map("trim",$_smarty_tpl->tpl_vars['SEARCH_VALUE']->value));?><div class="picklistSearchField u-min-w-150pxr"><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" class="select2noactive listSearchContributor form-control"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
" multiple="multiple" data-fieldinfo="<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
"<?php if (App\Config::performance('SEARCH_ROLES_BY_AJAX')) {?>data-ajax-search="1" data-ajax-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=Fields&mode=getUserRole&fieldName=<?php ob_start();
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" data-minimum-input="<?php echo App\Config::performance('ROLE_MINIMUM_INPUT_LENGTH');?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?>data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?>><?php if (App\Config::performance('SEARCH_ROLES_BY_AJAX')) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCH_VALUES']->value, 'PICKLIST_VALUE');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
" selected><?php echo \App\Purifier::encodeHtml(\App\PrivilegeUtil::getRoleName($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value));?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), 'PICKLIST_NAME', false, 'PICKLIST_VALUE');
$_smarty_tpl->tpl_vars['PICKLIST_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value => $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_NAME']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected <?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></select></div><!-- /tpl-Base-List-Field-UserRole -->
<?php }
}
