<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:52:30
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Calendar\Edit\Field\ActivityType.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953c6e53efb9_28186949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ead0004d5e9ba3982e08f137c8c18e4dfb04a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Calendar\\Edit\\Field\\ActivityType.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953c6e53efb9_28186949 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Calendar-Edit-Field-ActivityType --><div class="text-center"><div class="btn-group-toggle" data-toggle="buttons"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
$_smarty_tpl->_assignInScope('CHECK', trim($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value)) == trim($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value));
$_smarty_tpl->_assignInScope('VALUE', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value));?><label class="btn u-border-bottom-5px c-btn-outline-done mr-1 mb-1 picklistCBr_Calendar_activitytype_<?php echo $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['CHECK']->value) {?>active<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"id="option_<?php echo $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value;?>
"value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
"data-validation-engine="validate[<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?> required,<?php }?>funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-fieldinfo='<?php echo htmlspecialchars((string)\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), ENT_QUOTES, 'UTF-8', true);?>
'<?php if ($_smarty_tpl->tpl_vars['CHECK']->value) {?> checked <?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditableReadOnly()) {?>readonly="readonly" <?php }?>title="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"><?php $_smarty_tpl->_assignInScope('ACTIVITYTYPE_ICON', \App\Fields\Picklist::getIcon($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value));
if (!empty($_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value)) {
if ($_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value['type'] == 'icon') {?><span class="<?php echo $_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value['name'];?>
 mr-1"></span><?php } elseif ($_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value['type'] == 'image' && \App\Layout\Media::getImageUrl($_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value['name'])) {?><img class="icon-img--picklist mr-1" src="<?php echo \App\Layout\Media::getImageUrl($_smarty_tpl->tpl_vars['ACTIVITYTYPE_ICON']->value['name']);?>
"><?php }
}?><span><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</span></label><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><!-- /tpl-Calendar-Edit-Field-ActivityType -->
<?php }
}
