<?php
/* Smarty version 4.2.0, created on 2023-12-26 18:46:36
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\AdvanceSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658b117cf2d683_01017759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7090168b2155ef44b297d01951eb328c786b56f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\AdvanceSearch.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658b117cf2d683_01017759 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-AdvanceSearch modal fade" tabindex="-1" role="dialog" id="advanceSearchContainer"><div class="modal-dialog modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-th-large mr-1"></span><?php echo \App\Language::translate('LBL_ADVANCED_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button></div><div class="modal-body"><div class="form-group form-row"><label for="searchModuleList" class="col-md-12 col-lg-2 pl-2 col-form-label d-flex justify-content-start"><strong class="float-right"><?php echo \App\Language::translate('LBL_SEARCH_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></label><div class="col-md-12 col-lg-10"><select class="select2 form-control" id="searchModuleList" title="<?php echo \App\Language::translate('LBL_SELECT_MODULE');?>
"data-placeholder="<?php echo \App\Language::translate('LBL_SELECT_MODULE');?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value, 'fieldObject', false, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['fieldObject']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value => $_smarty_tpl->tpl_vars['fieldObject']->value) {
$_smarty_tpl->tpl_vars['fieldObject']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) {?>selected="selected"<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="filterElements" id="searchContainer"><form name="advanceFilterForm"><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'Home') {?><div class="textAlignCenter"><?php echo \App\Language::translate('LBL_PLEASE_SELECT_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php } else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilder.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,'ADVANCE_CRITERIA'=>array()), 0, true);
}?></form></div></div><div class="actions modal-footer d-flex justify-content-center justify-content-lg-end"><div class="form-row w-100 d-flex justify-content-center justify-content-lg-end"><?php if ($_smarty_tpl->tpl_vars['SAVE_FILTER_PERMITTED']->value) {?><div class="col-md-6 col-lg-2 mb-1 mb-md-2 mb-lg-0 pl-0 pr-0 pr-lg-0 pr-md-1 d-none js-name-filter" data-js="class: .js-name-filter"><input class="form-control" type="text" title="<?php echo \App\Language::translate('LBL_FILTER_NAME');?>
" value="" name="viewname"placeholder="<?php echo \App\Language::translate('LBL_FILTER_NAME');?>
"/></div><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,'CreateCustomFilter')) {?><button class="btn btn-success u-text-ellipsis col-lg-5 mb-1 mb-md-2 mb-lg-0" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'Home') {?> disabled="" <?php }?>id="advanceIntiateSave"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE_AS_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><div class="d-none ml-lg-2 mb-1 mb-md-2 mb-lg-0 pr-0 pl-0 pl-lg-0 pl-md-1 col-md-6 col-lg-2" id="advanceSave"><button class="btn btn-success col-12" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'Home') {?> disabled="" <?php }?> ><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><?php }?><div class="ml-lg-2 pl-0 pr-0 pr-lg-0 pr-md-1 col-md-6 col-lg-2 mb-1 mb-md-0"><button class="btn btn-info col-12" id="advanceSearchButton" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'Home') {?> disabled="" <?php }?>type="submit"><span class="fas fa-search mr-1"></span><strong><?php echo \App\Language::translate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div class="ml-lg-2 pr-0 pl-0 pl-lg-0 pl-md-1 col-md-6 col-lg-2"><button class="cancelLink btn btn-danger col-12" role="button" id="advanceSearchCancel" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div></div></div></div>
<?php }
}
