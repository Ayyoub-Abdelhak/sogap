<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:50:49
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Workflows\Step3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d48409041b25_91017453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd044a15a5411ae8fd70d42a156619c201f1c0992' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Workflows\\Step3.tpl',
      1 => 1702905760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d48409041b25_91017453 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="EditWorkflow" action="index.php" method="post" id="workflow_step3" class="tpl-Settings-Workflows-Step3 form-horizontal"><input type="hidden" name="module" value="Workflows"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
"/><input type="hidden" class="step" value="3"/><div class="btn-group"><a class="btn dropdown-toggle btn-light addButton" data-toggle="dropdown" href="#"><strong><?php echo \App\Language::translate('LBL_ADD_TASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>&nbsp;</a><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TASK_RECORDS']->value, 'TASK_RECORD');
$_smarty_tpl->tpl_vars['TASK_RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TASK_RECORD']->value) {
$_smarty_tpl->tpl_vars['TASK_RECORD']->do_else = false;
?><li><a class="u-cursor-pointer dropdown-item" data-url="<?php echo $_smarty_tpl->tpl_vars['TASK_RECORD']->value->getEditViewUrl();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TASK_RECORD']->value->getTaskType()->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><div id="taskListContainer"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('TasksList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><br/><div class="float-right"><button class="btn btn-secondary backStep mr-1" type="button"><strong><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="btn btn-success" href="index.php?module=Workflows&parent=Settings&view=List" title="<?php echo \App\Language::translate('LBL_GO_TO_RECORDS_LIST');?>
"alt="<?php echo \App\Language::translate('LBL_GO_TO_RECORDS_LIST');?>
"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><div class="clearfix"></div></form>
<?php }
}
