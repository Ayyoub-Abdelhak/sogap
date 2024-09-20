<?php
/* Smarty version 4.2.0, created on 2024-01-16 14:21:57
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\List\Field\SharedOwner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a682f5c0e091_36480236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38bf900fdb0f84cbe6e8c26e63dee5adc8f426d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\List\\Field\\SharedOwner.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a682f5c0e091_36480236 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-List-Field-SharedOwner --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
if (!(isset($_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value))) {
$_smarty_tpl->_assignInScope('CURRENT_USER_ID', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId());
}?><div class="picklistSearchField u-min-w-150pxr"><?php $_smarty_tpl->_assignInScope('ASSIGNED_USER_ID', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', explode('##',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']));
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', array());
}
$_smarty_tpl->_assignInScope('SEARCH_VALUES', array_map("trim",$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value));
if (!empty($_smarty_tpl->tpl_vars['VIEWID']->value) && App\Config::performance('SEARCH_SHOW_OWNER_ONLY_IN_LIST') && !\App\Config::module($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName(),'DISABLED_SHOW_OWNER_ONLY_IN_LIST',false)) {
$_smarty_tpl->_assignInScope('USERS_GROUP_LIST', Vtiger_SharedOwner_UIType::getSearchViewList($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['VIEWID']->value,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullName()));
$_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', $_smarty_tpl->tpl_vars['USERS_GROUP_LIST']->value['users']);
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', $_smarty_tpl->tpl_vars['USERS_GROUP_LIST']->value['group']);
} else {
$_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', \App\Fields\Owner::getInstance()->getAccessibleUsers());
$_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', \App\Fields\Owner::getInstance()->getAccessibleGroups());
}?><select class="select2noactive listSearchContributor <?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
 form-control"name="<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" multiple="multiple" data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?>data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }
if (App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {?>data-ajax-search="1" data-ajax-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&action=Fields&mode=getOwners&fieldName=<?php echo $_smarty_tpl->tpl_vars['ASSIGNED_USER_ID']->value;?>
" data-minimum-input="<?php echo App\Config::performance('OWNER_MINIMUM_INPUT_LENGTH');?>
"<?php }
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?>><?php if (App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCH_VALUES']->value, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_ID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value) {
$_smarty_tpl->tpl_vars['OWNER_ID']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['OWNER_ID']->value)) {
$_smarty_tpl->_assignInScope('OWNER_NAME', \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['OWNER_ID']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-picklistvalue="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
"selected="selected" data-userId="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><optgroup label="<?php echo \App\Language::translate('LBL_USERS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEUSER_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"data-picklistvalue='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
' <?php if (in_array($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected <?php }?>data-userId="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php if (count($_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value) > 0) {?><optgroup label="<?php echo \App\Language::translate('LBL_GROUPS');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"data-picklistvalue="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
" <?php if (in_array(trim($_smarty_tpl->tpl_vars['OWNER_ID']->value),$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)) {?> selected <?php }?>><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php }
}?></select></div><!-- /tpl-Base-List-Field-SharedOwner -->
<?php }
}
