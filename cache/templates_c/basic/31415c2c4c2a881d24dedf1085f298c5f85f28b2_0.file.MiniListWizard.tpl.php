<?php
/* Smarty version 4.2.0, created on 2024-02-12 14:45:20
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\dashboards\MiniListWizard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65ca20f073e605_03641213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31415c2c4c2a881d24dedf1085f298c5f85f28b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\dashboards\\MiniListWizard.tpl',
      1 => 1702905746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ca20f073e605_03641213 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Dashboards-MiniListWizard --><?php if ($_smarty_tpl->tpl_vars['WIZARD_STEP']->value == 'step1') {?><div id="minilistWizardContainer" class='modelContainer modal fade' tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="massEditHeader"><span class="fas fa-filter mr-1"></span><?php echo \App\Language::translate('LBL_MINI_LIST','Home');?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal" method="post" action="javascript:;"><div class="modal-body"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="MassSave" /><table class="table table-bordered"><tbody><tr><td class="fieldLabel alignMiddle textAlignCenter" nowrap><?php echo App\Language::translate('LBL_WIDGET_NAME','Home');?>
</td><td class="fieldValue position-relative"><input type="text" class="form-control" name="widgetTitle" value="<?php echo $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('title');?>
"data-validation-engine="validate[required]" <?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> disabled<?php }?>></td></tr><tr><td class="fieldLabel alignMiddle textAlignCenter" nowrap><?php echo App\Language::translate('LBL_SELECT_MODULE');?>
</td><td class="fieldValue"><?php $_smarty_tpl->_assignInScope('VALUE_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('module'));?><select class="form-control select2" name="module" <?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> disabled<?php }?>><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES']->value, 'MODULE_MODEL', false, 'MODULE_THIS_NAME');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_THIS_NAME']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value['name'] === $_smarty_tpl->tpl_vars['VALUE_FIELD']->value) {?> selected<?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value['name'],$_smarty_tpl->tpl_vars['MODULE_MODEL']->value['name']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr><tr><td class="fieldLabel alignMiddle textAlignCenter" nowrap><?php echo App\Language::translate('LBL_FILTER');?>
</td><td class="fieldValue"><?php $_smarty_tpl->_assignInScope('VALUE_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('filterid'));?><select class="form-control" name="filterid" <?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> disabled<?php }?>><option></option><?php if ($_smarty_tpl->tpl_vars['VALUE_FIELD']->value) {
$_smarty_tpl->_assignInScope('CV_DETAIL', \App\CustomView::getCVDetails($_smarty_tpl->tpl_vars['VALUE_FIELD']->value));?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE_FIELD']->value;?>
" selected><?php echo App\Language::translate($_smarty_tpl->tpl_vars['CV_DETAIL']->value['viewname']);?>
</option><?php }?></select></td></tr><tr><td class="fieldLabel alignMiddle textAlignCenter" nowrap><?php echo App\Language::translate('LBL_FIELDS');?>
</td><td class="fieldValue"><?php $_smarty_tpl->_assignInScope('VALUE_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('fields'));?><select class="form-control<?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> select2<?php }?>" name="fields" size="2" multiple="true"data-validation-engine="validate[required]" <?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> disabled<?php }?>><?php if ($_smarty_tpl->tpl_vars['VALUE_FIELD']->value) {
$_smarty_tpl->_assignInScope('WIDGET_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('module')));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VALUE_FIELD']->value, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value) {
$_smarty_tpl->tpl_vars['FIELD_NAME']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['WIDGET_MODULE_MODEL']->value->getFieldByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullLabelTranslation();?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><option></option><?php }?></select></td></tr><tr><td class="fieldLabel alignMiddle textAlignCenter" nowrap><?php echo App\Language::translate('LBL_FIELD_HREF');?>
&nbsp;<span class="js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_FIELD_HREF_TOOLTIP');?>
"><span class="fas fa-question-circle"></span></span></td><td class="fieldValue"><?php $_smarty_tpl->_assignInScope('VALUE_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('fieldHref'));?><select class="form-control<?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> select2<?php }?>" name="field_href" size="2" <?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> disabled<?php }?>><?php if ($_smarty_tpl->tpl_vars['VALUE_FIELD']->value) {
$_smarty_tpl->_assignInScope('WIDGET_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('module')));
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['WIDGET_MODULE_MODEL']->value->getFieldByName($_smarty_tpl->tpl_vars['VALUE_FIELD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE_FIELD']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullLabelTranslation();?>
</option><?php }
} else { ?><option></option><?php }?></select></td></tr><tr><td class="fieldLabel alignMiddle textAlignCenter" nowrap><?php echo App\Language::translate('LBL_FILTER_FIELD');?>
</td><td class="fieldValue"><?php $_smarty_tpl->_assignInScope('VALUE_FIELD', $_smarty_tpl->tpl_vars['WIDGET_MODEL']->value->getValueForEditView('filterFields'));?><select class="form-control<?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> select2<?php }?>" name="filter_fields" <?php if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {?> disabled<?php }?>><option></option><?php if ($_smarty_tpl->tpl_vars['VALUE_FIELD']->value) {
$_smarty_tpl->_assignInScope('FIELD_MODEL', Vtiger_Field_Model::getInstanceFromFieldId($_smarty_tpl->tpl_vars['VALUE_FIELD']->value));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE_FIELD']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullLabelTranslation();?>
</option><?php }
}?></select></td></tr></tbody></table></div><?php $_smarty_tpl->_assignInScope('BTN_SUCCESS', 'LBL_SAVE');
if ($_smarty_tpl->tpl_vars['WIDGET_ID']->value) {
$_smarty_tpl->_assignInScope('BTN_SUCCESS', '');
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>$_smarty_tpl->tpl_vars['BTN_SUCCESS']->value,'BTN_DANGER'=>'LBL_CANCEL','MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?></form></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['WIZARD_STEP']->value == 'step2') {?><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALLFILTERS']->value, 'FILTERS', false, 'FILTERGROUP');
$_smarty_tpl->tpl_vars['FILTERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FILTERGROUP']->value => $_smarty_tpl->tpl_vars['FILTERS']->value) {
$_smarty_tpl->tpl_vars['FILTERS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FILTERGROUP']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTERS']->value, 'FILTER', false, 'FILTERNAME');
$_smarty_tpl->tpl_vars['FILTER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FILTERNAME']->value => $_smarty_tpl->tpl_vars['FILTER']->value) {
$_smarty_tpl->tpl_vars['FILTER']->do_else = false;
if ($_smarty_tpl->tpl_vars['FILTER']->value->get('setmetrics') == 1) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FILTER']->value->getId();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FILTER']->value->get('viewname'),$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['WIZARD_STEP']->value == 'step3') {?><div><select class="form-control" name="fields" size="2" multiple="true"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LIST_VIEW_FIELDS']->value, 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><select class="form-control" name="filter_fields"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_BY_BLOCK']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD']->value->isActiveSearchView()) {?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getId();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php }?><!-- /tpl-Base-Dashboards-MiniListWizard -->
<?php }
}
