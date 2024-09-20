<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:07:33
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PublicHoliday\Configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9a65acc946_59628964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '526f3c69ada5b539a228f2eef7f3a50d2ed1dc1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PublicHoliday\\Configuration.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9a65acc946_59628964 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-PublicHoliday-Configuration --><div class="o-breadcrumb widget_header row"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="contents tabbable"><div class="tab-content themeTableColor overflowVisible"><div><div id="moduleBlocks"><button type="button" class="btn btn-success addPublicHoliday my-2"><span class="fas fa-plus"></span>&nbsp;<?php echo \App\Language::translate('LBL_ADD_HOLIDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><div class="editFieldsTable block_1 mb-3"><div class="border border-bottom-0 bg-light p-2"><div class="row"><div class="col-12"><h4><?php echo \App\Language::translate('LBL_HOLIDAY_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div></div></div><div class="row responsive-table-header-for-small"><div class="col-sm-8 text-right order-sm-2"><form><div class="row text-right float-right"><label><?php echo \App\Language::translate('LBL_DATE_RANGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="input-group input-group-sm col"><input type="text" class="ml-1 dateRangeField dateFilter text-center form-control" data-date-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format');?>
"data-calendar-type="range" value="<?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
"data-validation-engine="validate[funcCall[Vtiger_Date_Validator_Js.invokeValidation]]" /><div class="input-group-append" title="<?php echo \App\Language::translate('LBL_ALL');?>
"><button type="button" class="btn btn-sm btn-default js-range-reset" title="<?php echo \App\Language::translate('LBL_ALL');?>
"><span class="fas fa-lg fa-window-close"></span></button></div></div></div></form></div><div class="col-sm-4 order-sm-1"><div class="row"><div class="col-xs-4"><input type="checkbox" class="selectall" title="<?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div><div class="col-xs-8"><button class="masscopy btn btn-info btn-xs text-white mr-2" title="<?php echo \App\Language::translate('LBL_DUPLICATE_SELECTED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-clone alignMiddle"></span></button><button class="massdelete btn btn-danger btn-xs text-white ml-2" title="<?php echo \App\Language::translate('LBL_DELETE_SELECTED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-trash-alt"></span></button></div></div></div></div><table class="table responsive-table table-bordered"><thead class="text-capitalize text-center"><tr><th class="font-weight-normal"><button class="masscopy btn btn-info btn-xs" title="<?php echo \App\Language::translate('LBL_DUPLICATE_SELECTED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-clone"></span></button><button class="massdelete btn btn-danger btn-xs text-white ml-2" title="<?php echo \App\Language::translate('LBL_DELETE_SELECTED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-trash-alt"></span></button></th><th colspan="5" class="text-right font-weight-normal"><form><div class="row text-right float-right"><?php echo \App\Language::translate('LBL_DATE_RANGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<div class="input-group input-group-sm col"><input type="text" class="ml-1 dateRangeField dateFilter text-center form-control" data-date-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format');?>
"data-calendar-type="range" value="<?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
"data-validation-engine="validate[funcCall[Vtiger_Date_Validator_Js.invokeValidation]]" /><div class="input-group-append" title="<?php echo \App\Language::translate('LBL_ALL');?>
"><button type="button" class="btn btn-sm btn-default js-range-reset" title="<?php echo \App\Language::translate('LBL_ALL');?>
"><span class="fas fa-lg fa-window-close"></span></button></div></div></div></form></th></tr><tr><th scope="col"><input type="checkbox" class="selectall" title="<?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></th><th scope="col"><?php echo \App\Language::translate('LBL_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th scope="col"><?php echo \App\Language::translate('LBL_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th scope="col"><?php echo \App\Language::translate('LBL_DAY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th scope="col"><?php echo \App\Language::translate('LBL_HOLIDAY_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th scope="col"></th></tr></thead><tbody id="itemsContainer"><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('ConfigurationItems.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('HOLIDAYS'=>$_smarty_tpl->tpl_vars['HOLIDAYS']->value), 0, true);
?></tbody></table></div></div><div class="publicHolidayModal modal fade" tabindex="-1"><div class="modal-dialog modal-md"><div class="modal-content"><div class="modal-header"><span class="fa fa-plus mt-2 u-mr-5px"></span><h5 class="modal-title"><?php echo \App\Language::translate('LBL_ADD_NEW_HOLIDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><form class="form-horizontal"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="Holiday" /><input type="hidden" name="mode" value="save" /><input type="hidden" name="holidayId" value="" /><div class="form-group form-row"><div class="col-sm-4 col-form-label u-text-small-bold text-right"><span class="redColor">*</span><span><?php echo \App\Language::translate('LBL_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-sm-6 controls"><input type="text" name="holidayDate" class="dateField form-control" data-date-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format');?>
"data-validation-engine="validate[required,funcCall[Vtiger_Date_Validator_Js.invokeValidation]]" /></div></div><div class="form-group form-row"><div class="col-sm-4 col-form-label u-text-small-bold text-right"><span><?php echo \App\Language::translate('LBL_HOLIDAY_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-sm-6 controls"><select name="holidayType" class="form-control"><option value="national"><?php echo \App\Language::translate('LBL_NATIONAL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="ecclesiastical"><?php echo \App\Language::translate('LBL_ECCLESIASTICAL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group form-row"><div class="col-sm-4 col-form-label u-text-small-bold text-right"><span class="redColor">*</span><span><?php echo \App\Language::translate('LBL_DAY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-sm-6 controls"><input type="text" name="holidayName" value="" class="form-control" placeholder="<?php echo \App\Language::translate('LBL_DAY_NAME_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div></div><div class="publicHolidayModalMassDuplicate modal fade" tabindex="-1"><div class="modal-dialog modal-md"><div class="modal-content"><div class="modal-header"><span class="far fa-clone mt-2 u-mr-5px"></span><h5 class="modal-title"><?php echo \App\Language::translate('LBL_DUPLICATE_HOLIDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><form class="form-horizontal"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="Holiday" /><input type="hidden" name="mode" value="duplicate" /><input type="hidden" name="holidayIds" value="" /><div class="form-group form-row"><div class="col-sm-4 col-form-label u-text-small-bold text-right"><span><?php echo \App\Language::translate('LBL_DUPLICATE_YEAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="col-sm-6 controls"><select name="targetYear" class="form-control" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><option></option><?php
$_smarty_tpl->tpl_vars['Y'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['Y']->step = 1;$_smarty_tpl->tpl_vars['Y']->total = (int) ceil(($_smarty_tpl->tpl_vars['Y']->step > 0 ? $_smarty_tpl->tpl_vars['YEAR']->value+10+1 - ($_smarty_tpl->tpl_vars['YEAR']->value) : $_smarty_tpl->tpl_vars['YEAR']->value-($_smarty_tpl->tpl_vars['YEAR']->value+10)+1)/abs($_smarty_tpl->tpl_vars['Y']->step));
if ($_smarty_tpl->tpl_vars['Y']->total > 0) {
for ($_smarty_tpl->tpl_vars['Y']->value = $_smarty_tpl->tpl_vars['YEAR']->value, $_smarty_tpl->tpl_vars['Y']->iteration = 1;$_smarty_tpl->tpl_vars['Y']->iteration <= $_smarty_tpl->tpl_vars['Y']->total;$_smarty_tpl->tpl_vars['Y']->value += $_smarty_tpl->tpl_vars['Y']->step, $_smarty_tpl->tpl_vars['Y']->iteration++) {
$_smarty_tpl->tpl_vars['Y']->first = $_smarty_tpl->tpl_vars['Y']->iteration === 1;$_smarty_tpl->tpl_vars['Y']->last = $_smarty_tpl->tpl_vars['Y']->iteration === $_smarty_tpl->tpl_vars['Y']->total;?><option value="<?php echo $_smarty_tpl->tpl_vars['Y']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['Y']->value;?>
</option><?php }
}
?></select></div></div><?php $_smarty_tpl->_subTemplateRender(App\Layout::getTemplatePath('Modals/Footer.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_DUPLICATE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div></div></div></div></div><!-- /tpl-Settings-PublicHoliday-Configuration -->
<?php }
}
