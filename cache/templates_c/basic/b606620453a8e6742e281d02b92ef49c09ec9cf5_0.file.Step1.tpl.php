<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:49:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Workflows\Step1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d483ab239783_38391910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b606620453a8e6742e281d02b92ef49c09ec9cf5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Workflows\\Step1.tpl',
      1 => 1702905760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d483ab239783_38391910 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Workflows-Step1 workFlowContents"><form name="EditWorkflow" action="index.php" method="post" id="workflow_step1" class="form-horizontal"><input type="hidden" name="module" value="Workflows"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step2"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" class="step" value="1"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
"/><input type="hidden" id="weekStartDay" data-value='<?php echo $_smarty_tpl->tpl_vars['WEEK_START_ID']->value;?>
'/><div class="u-p-1per border"><label><strong><?php echo \App\Language::translate('LBL_STEP_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo \App\Language::translate('LBL_ENTER_BASIC_DETAILS_OF_THE_WORKFLOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br/><div class="form-group form-row"><label class="col-sm-3 col-form-label u-text-small-bold text-right"><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><?php if ((isset($_smarty_tpl->tpl_vars['MODE']->value)) && $_smarty_tpl->tpl_vars['MODE']->value == 'edit') {?><input type='text' disabled='disabled' class="form-control" value="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
"><input type='hidden' name='module_name' value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
"><?php } else { ?><select class="select2 form-control" id="moduleName" name="module_name" required="true" data-placeholder="Select Module..."><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE_MODEL', false, 'TABID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
" <?php if ((isset($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value)) && $_smarty_tpl->tpl_vars['SELECTED_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php }?></div></div><div class="form-group form-row"><label class="col-sm-3 col-form-label u-text-small-bold text-right"><?php echo \App\Language::translate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><input type="text" name="summary" class="form-control" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->get('summary');?>
"id="summary"/></div></div><div class="form-group form-row"><label class="col-sm-3 col-form-label u-text-small-bold text-right"><?php echo \App\Language::translate('LBL_SPECIFY_WHEN_TO_EXECUTE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls js-wf-executions-container" data-js="container"><?php $_smarty_tpl->_assignInScope('WORKFLOW_MODEL_OBJ', $_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getWorkflowObject());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TRIGGER_TYPES']->value, 'LABEL', false, 'LABEL_ID');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LABEL_ID']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
$_smarty_tpl->_assignInScope('EXECUTION_CONDITION', $_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->executionCondition);?><div class="js-wf-execution-container" data-js="container"><label><input type="radio" class="alignTop" name="execution_condition" <?php if ($_smarty_tpl->tpl_vars['EXECUTION_CONDITION']->value == $_smarty_tpl->tpl_vars['LABEL_ID']->value) {?> checked="checked" <?php }?>	value="<?php echo $_smarty_tpl->tpl_vars['LABEL_ID']->value;?>
"/>&nbsp;&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><br/><?php $_smarty_tpl->_assignInScope('PARAMS', array());
if (!empty($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->params)) {
$_smarty_tpl->_assignInScope('PARAMS', \App\Json::decode($_smarty_tpl->tpl_vars['WORKFLOW_MODEL_OBJ']->value->params));
}
if ($_smarty_tpl->tpl_vars['LABEL_ID']->value == 8) {?><div class="col-12 mb-2 js-wf-execution-item<?php if ($_smarty_tpl->tpl_vars['EXECUTION_CONDITION']->value != $_smarty_tpl->tpl_vars['LABEL_ID']->value) {?> d-none <?php }?>" data-js="container"><div class="form-check"><input type="hidden" name="params[showTasks]" value="0"><input class="form-check-input" type="checkbox" value="1" id="showTasks" name="params[showTasks]" <?php if (!empty($_smarty_tpl->tpl_vars['PARAMS']->value['showTasks'])) {?> checked="checked" <?php }?>><label class="form-check-label" for="showTasks"><?php echo \App\Language::translate('LBL_WORKFLOW_TRIGGER_SHOW_TASKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="form-check"><input type="hidden" name="params[enableTasks]" value="0"><input class="form-check-input" type="checkbox" value="1" id="enableTasks" name="params[enableTasks]"<?php if (!empty($_smarty_tpl->tpl_vars['PARAMS']->value['enableTasks'])) {?> checked="checked" <?php }?>><label class="form-check-label" for="enableTasks"><?php echo \App\Language::translate('LBL_WORKFLOW_TRIGGER_ENABLE_DEACTIVATION_TASKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><?php } elseif ($_smarty_tpl->tpl_vars['LABEL_ID']->value == 6) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ScheduleBox.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><br/><div class="float-right mb-4"><button class="btn btn-success mr-1" type="submit" disabled="disabled"><strong><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-danger cancelLink" type="reset" onclick="javascript:window.history.back();"><strong><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></form></div>
<?php }
}
