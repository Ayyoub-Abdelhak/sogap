<?php
/* Smarty version 4.2.0, created on 2024-05-14 15:19:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\MappedFields\Step3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6643730cd8e3a4_45846859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '778b1ccf45927b667284bfebaeec41b52e14c5de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\MappedFields\\Step3.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6643730cd8e3a4_45846859 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mfTemplateContents"><form name="editMFTemplate" action="index.php" method="post" id="mf_step3" class="form-horizontal"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->getName();?>
"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step4" /><input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->getParentName();?>
" /><input type="hidden" class="step" value="3" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><input type="hidden" name="conditions" id="advanced_filter" value='' /><div class="col-md-12 px-0"><div class="panel panel-default"><div class="panel-body p-0"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilterExpressions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="panel-footer clearfix"><div class="btn-toolbar float-right"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div></form></div>
<?php }
}
