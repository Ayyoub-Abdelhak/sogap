<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:50:49
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Workflows\TasksList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d4840916e694_43167023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810ba1c52796657a8a557649477d3ee39d5d4a1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Workflows\\TasksList.tpl',
      1 => 1702905760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d4840916e694_43167023 (Smarty_Internal_Template $_smarty_tpl) {
?><br /><div><table class="table table-bordered table-sm listViewEntriesTable js-workflow-tasks-list"><thead><tr class="listViewHeaders"><th width="10%"><?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th width="30%"><?php echo \App\Language::translate('LBL_TASK_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th width="60%"><?php echo \App\Language::translate('LBL_TASK_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TASK_LIST']->value, 'TASK');
$_smarty_tpl->tpl_vars['TASK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TASK']->value) {
$_smarty_tpl->tpl_vars['TASK']->do_else = false;
?><tr class="listViewEntries js-workflow-task" data-id="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getId();?>
"><td width="10%"><a class="px-2 u-cursor-move js-drag" data-js="ui-sortable-handle"><img class="align-baseline" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a> <input type="checkbox" class="taskStatus" data-statusurl="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getChangeStatusUrl();?>
" <?php if ($_smarty_tpl->tpl_vars['TASK']->value->isActive()) {?> checked="" <?php }?> /></td><td width="30%"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TASK']->value->getTaskType()->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td width="60%"><?php echo $_smarty_tpl->tpl_vars['TASK']->value->getName();?>
<div class="float-right actions"><span class="actionImages"><?php if ($_smarty_tpl->tpl_vars['TASK']->value->isEditable()) {?><a data-url="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getEditViewUrl();?>
"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a>&nbsp;&nbsp;<?php } else { ?><div class="js-popover-tooltip mr-2 d-inline text-danger" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_ERROR_DELETE_ENTRY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-info-circle"></span></div><?php }?><a class="deleteTask" data-deleteurl="<?php echo $_smarty_tpl->tpl_vars['TASK']->value->getDeleteActionUrl();?>
"><span class="fas fa-trash-alt" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a></span></div></td><tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><?php if (empty($_smarty_tpl->tpl_vars['TASK_LIST']->value)) {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_NO_TASKS_ADDED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr></tbody></table><?php }?></div>
<?php }
}
