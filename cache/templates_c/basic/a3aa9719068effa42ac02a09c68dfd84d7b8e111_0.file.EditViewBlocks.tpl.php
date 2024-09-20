<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:45:30
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\FieldsDependency\EditViewBlocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f8538acde137_27750974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3aa9719068effa42ac02a09c68dfd84d7b8e111' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\FieldsDependency\\EditViewBlocks.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f8538acde137_27750974 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-FieldsDependency-EditViewBlocks --><div class="verticalScroll"><div class="editViewContainer"><form class="form-horizontal recordEditView" id="EditView" name="EditView" method="post" action="index.php" enctype="multipart/form-data"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
" /><input type="hidden" name="conditions" value="" /><input type="hidden" name="action" value="Save" /><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)) {?><input type="hidden" name="record" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><?php }?><div class="o-breadcrumb widget_header row mb-3"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="card"><div class="card-header"><?php if (!empty($_smarty_tpl->tpl_vars['RECORD']->value->getId())) {?><span class="yfi yfi-full-editing-view mr-2"></span><?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();
} else { ?><span class="fas fa-plus mr-2"></span><?php echo \App\Language::translate('LBL_CREATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></div><div class="card-body"><div class="form-group row"><label for="inputName" class="col-sm-3 col-form-label text-right"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-9"><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
" class="form-control" id="inputName" data-validation-engine="validate[required,maxSize[100]]"></div></div><div class="form-group row"><label for="inputSourceModule" class="col-sm-3 col-form-label text-right"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_SOURCE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-9"><select name="tabid" class="select2 form-control" data-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" id="inputSourceModule" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES']->value, 'MODULE');
$_smarty_tpl->tpl_vars['MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE']->value) {
$_smarty_tpl->tpl_vars['MODULE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value['tabid'];?>
" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('tabid') === $_smarty_tpl->tpl_vars['MODULE']->value['tabid']) {?>selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value['name'],$_smarty_tpl->tpl_vars['MODULE']->value['name']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row"><label for="inputStatus" class="col-sm-3 col-form-label text-right"><?php echo \App\Language::translate('FL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-9"><div class="form-check mt-1"><input type="checkbox" name="status" value="1" class="form-check-input" id="inputStatus" <?php if (!$_smarty_tpl->tpl_vars['RECORD']->value->get('status')) {?>checked<?php }?>></div></div></div><div class="form-group row"><label for="inputViews" class="col-sm-3 col-form-label text-right"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_VIEWS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-popover-tooltip ml-2" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_VIEWS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a></label><div class="col-sm-9"><select name="views[]" class="select2 form-control" id="inputViews" multiple="multiple" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\FieldsDependency::VIEWS, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['KEY']->value,$_smarty_tpl->tpl_vars['VIEWS']->value)) {?>selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row"><label for="inputGui" class="col-sm-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_GUI',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-popover-tooltip ml-2" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_GUI_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a></label><div class="col-sm-9"><div class="form-check mt-1"><input type="checkbox" name="gui" value="1" class="form-check-input" id="inputGui" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('gui')) {?>checked<?php }?>></div></div></div><div class="form-group row mb-1"><label for="inputMandatory" class="col-sm-3 col-form-label text-right"><?php echo \App\Language::translate('LBL_MANDATORY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-popover-tooltip ml-2" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_MANDATORY_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a></label><div class="col-sm-9"><div class="form-check mt-1"><input type="checkbox" name="mandatory" value="1" class="form-check-input" id="inputMandatory" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('mandatory')) {?>checked<?php }?>></div></div></div><div class="pt-3 border-top js-dynamic-blocks" data-js="container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DynamicBlocks.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><!-- /tpl-Settings-FieldsDependency-EditViewBlocks -->
<?php }
}
