<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:25:19
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\CustomView\AdvCondBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658199bfce3173_80525088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05eaddf89ce69cd8a8c88349b826e6ba60a487a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\CustomView\\AdvCondBody.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658199bfce3173_80525088 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-CustomView-AdvCondBody --><div class="c-panel"><?php if (!empty($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationColumns'])) {
$_smarty_tpl->_assignInScope('RELATION_COLUMNS', $_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationColumns']);
} else {
$_smarty_tpl->_assignInScope('RELATION_COLUMNS', array());
}
$_smarty_tpl->_assignInScope('HIDE_CUSTOM_RELATION', !empty($_smarty_tpl->tpl_vars['HIDDE_BLOCKS']->value) && empty($_smarty_tpl->tpl_vars['RELATION_COLUMNS']->value));?><div class="blockHeader c-panel__header py-2 js-toggle-block" data-js="click"><span class="js-toggle-icon fas <?php if ($_smarty_tpl->tpl_vars['HIDE_CUSTOM_RELATION']->value) {?>fa-chevron-right<?php } else { ?>fa-chevron-down<?php }?> fa-xs m-1 mt-2 mr-3" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down" data-js="container"></span><h5><span class="yfi-relationship-as-custom-column mr-2" aria-hidden="true"></span><?php echo \App\Language::translate('LBL_CUSTOM_RELATION_COLUMN','CustomView');?>
<a href="#" class="js-popover-tooltip float-right u-cursor-pointer ml-2" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_CUSTOM_RELATION_COLUMN_DESC','CustomView');?>
"><span class="fas fa-info-circle"></span></a></h5></div><div class="c-panel__body py-1 <?php if ($_smarty_tpl->tpl_vars['HIDE_CUSTOM_RELATION']->value) {?>d-none<?php }?>"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATIONS']->value, 'RELATION');
$_smarty_tpl->tpl_vars['RELATION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATION']->value) {
$_smarty_tpl->tpl_vars['RELATION']->do_else = false;
?><div class="form-group form-check mb-2"><input type="checkbox" class="form-check-input u-ml-minus-5px u-cursor-pointer js-relation-checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->getId();?>
" <?php if (in_array($_smarty_tpl->tpl_vars['RELATION']->value->getId(),$_smarty_tpl->tpl_vars['RELATION_COLUMNS']->value)) {?>checked="checked" <?php }?> id="relationCheckbox<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->getId();?>
" data-js="value" <?php if (!method_exists($_smarty_tpl->tpl_vars['RELATION']->value->getTypeRelationModel(),'loadAdvancedConditionsByColumns')) {?>disabled="disabled" <?php }?> /><label class=" form-check-label ml-4 u-cursor-pointer" for="relationCheckbox<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->getId();?>
"><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->getRelationModuleName();?>
 mr-2"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATION']->value->get('label'),$_smarty_tpl->tpl_vars['RELATION']->value->getRelationModuleName());?>
</label></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="c-panel js-toggle-panel" data-js="container"><?php if (!empty($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationId'])) {
$_smarty_tpl->_assignInScope('RELATION_ID', $_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationId']);
$_smarty_tpl->_assignInScope('RELATION_ADVANCE_CRITERIA', array());
if (!empty($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationConditions'])) {
$_smarty_tpl->_assignInScope('RELATION_ADVANCE_CRITERIA', $_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value['relationConditions']);
}
} else {
$_smarty_tpl->_assignInScope('RELATION_ID', 0);
}
$_smarty_tpl->_assignInScope('HIDE_CUSTOM_CONDITIONS', !empty($_smarty_tpl->tpl_vars['HIDDE_BLOCKS']->value) && empty($_smarty_tpl->tpl_vars['RELATION_ID']->value));?><div class="blockHeader c-panel__header py-2 js-toggle-block" data-js="click"><span class="js-toggle-icon fas <?php if ($_smarty_tpl->tpl_vars['HIDE_CUSTOM_CONDITIONS']->value) {?>fa-chevron-right<?php } else { ?>fa-chevron-down<?php }?> fa-xs m-1 mt-2 mr-3" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down" data-js="container"></span><h5><span class="yfi-conditions-for-filtering-related-records mr-2" aria-hidden="true"></span><?php echo \App\Language::translate('LBL_CUSTOM_CONDITIONS','CustomView');?>
<a href="#" class="js-popover-tooltip float-right u-cursor-pointer ml-2" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_CUSTOM_CONDITIONS_DESC','CustomView');?>
"><span class="fas fa-info-circle"></span></a></h5></div><div class="c-panel__body py-1 <?php if ($_smarty_tpl->tpl_vars['HIDE_CUSTOM_CONDITIONS']->value) {?>d-none<?php }?>"><div class="col-auto my-1"><select class="select2 form-control js-relation-select"><option value="0">-</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATIONS']->value, 'RELATION');
$_smarty_tpl->tpl_vars['RELATION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATION']->value) {
$_smarty_tpl->tpl_vars['RELATION']->do_else = false;
if ($_smarty_tpl->tpl_vars['RELATION']->value->getId() == $_smarty_tpl->tpl_vars['RELATION_ID']->value) {
$_smarty_tpl->_assignInScope('RELATION_MODULE', $_smarty_tpl->tpl_vars['RELATION']->value->getRelationModuleName());
}
if (method_exists($_smarty_tpl->tpl_vars['RELATION']->value->getTypeRelationModel(),'loadAdvancedConditionsByRelationId')) {?><option value="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->getId();?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['RELATION']->value->getRelationModuleName();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATION']->value->getId() == $_smarty_tpl->tpl_vars['RELATION_ID']->value) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATION']->value->get('label'),$_smarty_tpl->tpl_vars['RELATION']->value->getRelationModuleName());?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="form-group"><div class="col-12 js-adv-condition-builder-view" data-js="container"><?php if ((isset($_smarty_tpl->tpl_vars['RELATION_MODULE']->value))) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilder.tpl',$_smarty_tpl->tpl_vars['RELATION_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SOURCE_MODULE'=>$_smarty_tpl->tpl_vars['RELATION_MODULE']->value,'RECORD_STRUCTURE_RELATED_MODULES'=>array(),'RECORD_STRUCTURE'=>Vtiger_RecordStructure_Model::getInstanceForModule(\Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATION_MODULE']->value))->getStructure(),'ADVANCE_CRITERIA'=>$_smarty_tpl->tpl_vars['RELATION_ADVANCE_CRITERIA']->value), 0, true);
}?></div></div></div></div><!-- /tpl-Base-CustomView-AdvCondBody -->
<?php }
}
