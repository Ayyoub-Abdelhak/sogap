<?php
/* Smarty version 4.2.0, created on 2023-12-21 12:17:17
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\List\Field\Boolean.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65841ebd28ac04_35586545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4bf7d08a096eb95586c3663ac42eee244694ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\List\\Field\\Boolean.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65841ebd28ac04_35586545 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-List-Field-Boolean --><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
if ((isset($_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']))) {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']);
} else {
$_smarty_tpl->_assignInScope('SEARCH_VALUES', '');
}?><div class="boolenSearchField u-min-w-150pxr"><select name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" class="select2noactive select2 listSearchContributor"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' data-allow-clear="true"<?php if (!empty($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name'))) {?>data-source-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
" data-module-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName();?>
"<?php }
if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveSearchView()) {?>disabled<?php }?>><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION','Vtiger');?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value == 1) {?> selected<?php }?>><?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="0" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value == '0') {?> selected<?php }?>><?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div><!-- /tpl-Base-List-Field-Boolean -->
<?php }
}
