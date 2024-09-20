<?php
/* Smarty version 4.2.0, created on 2023-12-28 21:15:26
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\QuickEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658dd75e00d867_58228827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04745c6afc07481e769d4c7e7882910ca8b7aad6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\QuickEdit.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658dd75e00d867_58228827 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-QuickEdit --><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="fromView" value="QuickEdit" /><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value && !empty($_smarty_tpl->tpl_vars['RECORD_ACTIVITY_NOTIFIER']->value)) {?><input type="hidden" id="recordActivityNotifier" data-interval="<?php echo App\Config::performance('recordActivityNotifierInterval',10);?>
" data-record="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><?php }?><input type="hidden" id="preSaveValidation" value="<?php echo !empty(\App\EventHandler::getByType(\App\EventHandler::EDIT_VIEW_PRE_SAVE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
" /><input type="hidden" class="js-change-value-event" value="<?php echo \App\EventHandler::getVarsByType(\App\EventHandler::EDIT_VIEW_CHANGE_VALUE,$_smarty_tpl->tpl_vars['MODULE_NAME']->value,array($_smarty_tpl->tpl_vars['RECORD']->value,'QuickEdit'));?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input type="hidden" name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
' /><?php }
if (!empty($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value)) {?><input type="hidden" name="listFilterFields" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LIST_FILTER_FIELDS']->value);?>
' /><?php }
if (!empty($_smarty_tpl->tpl_vars['CHANGED_FIELDS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHANGED_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['SHOW_ALERT_NO_POWERS']->value) {?><div class="alert alert-danger mx-4 mt-4" role="alert"><?php echo \App\Language::translate('LBL_PERMISSION_DENIED_CERTAIN_FIELDS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><?php }?><div class="quickCreateContent"><div class="modal-body m-0"><?php if ($_smarty_tpl->tpl_vars['LAYOUT']->value === 'blocks') {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) <= 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('BLOCK', $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]);
$_smarty_tpl->_assignInScope('IS_DYNAMIC', $_smarty_tpl->tpl_vars['BLOCK']->value->isDynamic());?><div class="js-toggle-panel c-panel c-panel--edit mb-3" data-js="click|data-dynamic" <?php if ($_smarty_tpl->tpl_vars['IS_DYNAMIC']->value) {?> data-dynamic="true" <?php }?>data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><div class="blockHeader c-panel__header align-items-center"><?php if (in_array($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['ADDRESS_BLOCK_LABELS']->value)) {
$_smarty_tpl->_assignInScope('SEARCH_ADDRESS', TRUE);
} else {
$_smarty_tpl->_assignInScope('SEARCH_ADDRESS', FALSE);
}?><h5 class="ml-2"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body c-panel__body--edit blockContent js-block-content" data-js="display"><div class="row"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_start' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_end') && ($_smarty_tpl->tpl_vars['MODULE_NAME']->value === 'OSSTimeControl' || $_smarty_tpl->tpl_vars['MODULE_NAME']->value === 'Reservations')) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {
if ($_smarty_tpl->tpl_vars['COUNTER']->value == '1') {?></div><div class="row"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
}
}
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {?></div><div class="row"><?php $_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}
if ((isset($_smarty_tpl->tpl_vars['RECORD_STRUCTURE_RIGHT']->value))) {?><div class="col-sm-12  row form-group align-items-center my-1"><?php } else { ?><div class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label') == "FL_REAPEAT") {?> col-sm-3<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label') == "FL_RECURRENCE") {?> col-sm-9<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != "300") {?>col-sm-6<?php } else { ?> col-md-12 m-auto<?php }?>  row form-group align-items-center my-1 js-field-block-column<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('hideField')) {?> d-none<?php }?>" data-field="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" data-js="container"><?php }
$_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));?><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != "300") {?> text-xl-right <?php }?> u-text-small-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
"data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName());?>
"><span class="fas fa-info-circle"></span></a><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 w-100 <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != "300") {?> col-lg-12 col-xl-9 <?php }?> fieldValue" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20') {?> colspan="3" <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
} elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> colspan="4" <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);?> <?php }?>><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value), 0, true);
?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['LAYOUT']->value === 'vertical') {?><div class="massEditTable border-0 px-1 mx-auto m-0"><div class="col-12 form-row d-flex justify-content-center px-0 m-0 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['NO_FIELD_ACCESS']->value)) {?><div class="alert alert-warning w-100 mt-2"><div class="font-weight-bold d-flex align-items-center"><span class="mdi mdi-alert-outline mr-2 u-fs-2em float-left"></span><?php echo \App\Language::translate('LBL_NO_FIELD_ACCESS');?>
</div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NO_FIELD_ACCESS']->value, 'FIELD_VALUE', false, 'FIELD_LABEL');
$_smarty_tpl->tpl_vars['FIELD_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_LABEL']->value => $_smarty_tpl->tpl_vars['FIELD_VALUE']->value) {
$_smarty_tpl->tpl_vars['FIELD_VALUE']->do_else = false;
?><div class="w-100 row"><span class="col-4"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span><span class="col-8"><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
</span></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if (!empty($_smarty_tpl->tpl_vars['CHANGED_FIELDS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHANGED_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="fieldLabel col-lg-12 col-xl-3 text-lg-left text-xl-right u-text-ellipsis mt-1 text-wrap"><span class="text-right muted small font-weight-bold"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></div><div class="fieldValue col-lg-12 col-xl-9 px-0 px-sm-1 mt-1"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD_ID']->value,$_smarty_tpl->tpl_vars['RECORD']->value);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="fieldLabel col-lg-12 col-xl-3 mt-1 text-lg-left text-xl-right u-text-ellipsis text-wrap"><?php $_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));?><label class="text-right muted small font-weight-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
" data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div class="fieldValue col-lg-12 col-xl-9 mt-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php } else { ?><div class="massEditTable border-0 px-1 mx-auto m-0"><div class="px-0 m-0 form-row d-flex justify-content-center"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if (($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_start' || $_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'time_end') && ($_smarty_tpl->tpl_vars['MODULE_NAME']->value === 'OSSTimeControl' || $_smarty_tpl->tpl_vars['MODULE_NAME']->value === 'Reservations')) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {?></div><div class="col-12 form-row d-flex justify-content-center px-0 m-0"><?php $_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}?><div class="col-md-6 py-2 form-row d-flex justify-content-center px-0 m-0 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 "><div class="fieldLabel col-lg-12 col-xl-3 pl-0 text-lg-left text-xl-right u-text-ellipsis"><?php $_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));?><label class="text-right muted small font-weight-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
"data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div class="fieldValue col-lg-12 col-xl-9 px-0 px-sm-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 1) {?><div class="col-md-6 form-row align-items-center p-1 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"></div><?php }?></div></div><?php }?></div></div></form><!-- /tpl-Base-Modals-QuickEdit -->
<?php }
}
