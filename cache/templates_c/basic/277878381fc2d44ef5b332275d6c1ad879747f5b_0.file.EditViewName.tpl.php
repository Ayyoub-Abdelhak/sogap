<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:18
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewName.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf660fd4e8_12925440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '277878381fc2d44ef5b332275d6c1ad879747f5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewName.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf660fd4e8_12925440 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewName --><?php if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value) {?><div class="rowName"><?php $_smarty_tpl->_assignInScope('FIELD_NAME', "inventory[".((string)$_smarty_tpl->tpl_vars['ROW_NO']->value)."][".((string)$_smarty_tpl->tpl_vars['FIELD']->value->getColumnName())."]");
$_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD']->value->get('params')));?><div class="invUitype_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
 input-group input-group-sm u-min-w-300pxr"><div class="input-group-prepend"><span class="input-group-text js-popover-tooltip" data-js="popover" data-content=" <?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value),$_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value);?>
"><span class="js-module-icon yfm-<?php echo $_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value;?>
" data-js="class: yfm-"></span></span></div><input name="popupReferenceModule" type="hidden" data-multi-reference="1" value="<?php echo $_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value;?>
" /><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_display" type="text"title="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value);?>
"class="marginLeftZero form-control autoComplete recordLabel js-<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
_display"<?php if (!empty($_smarty_tpl->tpl_vars['ITEM_VALUE']->value)) {?>readonly="true" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value);?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isMandatory()) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo="<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?> readonly="readonly" <?php } else { ?> placeholder="<?php echo \App\Language::translate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" <?php }?> /><input name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['ITEM_VALUE']->value;?>
"class="sourceField js-<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
" data-type="inventory"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' data-columnname="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?> /><div class="input-group-append"><?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?><button class="btn btn-light clearReferenceSelection u-cursor-pointer js-popover-tooltip" type="button" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_clear" class="fas fa-times-circle"></span></button><?php }
if (!$_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?><button class="btn btn-light relatedPopup u-cursor-pointer js-popover-tooltip" type="button" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_select" class="fas fa-search"></span></button><?php }
$_smarty_tpl->_assignInScope('REFERENCE_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value));
if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE_MODEL']->value->isQuickCreateSupported() && !$_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?><button class="btn btn-light u-cursor-pointer createReferenceRecord js-popover-tooltip" type="button" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span id="<?php echo $_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
_create" class="fas fa-plus"></span></button><?php }?></div></div><div class="subProductsContainer"><ul class="float-left"></ul></div></div><?php }?><!-- /tpl-Base-inventoryfields-EditViewName -->
<?php }
}
