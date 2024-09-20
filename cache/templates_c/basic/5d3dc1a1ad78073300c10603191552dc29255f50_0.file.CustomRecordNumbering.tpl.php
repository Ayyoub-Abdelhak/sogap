<?php
/* Smarty version 4.2.0, created on 2023-12-21 15:06:52
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\RecordNumbering\CustomRecordNumbering.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6584467cd2b805_31086124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d3dc1a1ad78073300c10603191552dc29255f50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\RecordNumbering\\CustomRecordNumbering.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6584467cd2b805_31086124 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-RecordNumbering-CustomRecordNumbering --><?php if (!empty($_smarty_tpl->tpl_vars['SHOW_BODY_HEADER']->value)) {?><div class="o-breadcrumb widget_header row mb-3"><div class="col-6 col-xl-9 col-12"><div class="o-breadcrumb widget_header mb-2 d-flex justify-content-between px-2 w-100"><div class="o-breadcrumb__container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="col-6 col-xl-3 col-12 d-flex align-items-center mb-xl-0 mb-3 pt-md-0 pt-1"><button type="button" class="btn btn-info float-right" name="updateRecordWithSequenceNumber"><span class="fas fa-exchange-alt u-mr-5px"></span><?php echo \App\Language::translate('LBL_UPDATE_MISSING_RECORD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div><?php }?><div class="<?php if (!$_smarty_tpl->tpl_vars['IS_AJAX']->value) {?>js-container<?php }?>"><form id="EditView" method="POST"><div class="row"><div class="col-md-12"><table class="table table-bordered"><?php $_smarty_tpl->_assignInScope('DEFAULT_MODULE_NAME', $_smarty_tpl->tpl_vars['DEFAULT_MODULE_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('DEFAULT_MODULE_DATA', \App\Fields\RecordNumber::getInstance($_smarty_tpl->tpl_vars['DEFAULT_MODULE_NAME']->value));?><thead><tr><th width="30%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_CUSTOMIZE_RECORD_NUMBERING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th width="70%"></th></tr></thead><tbody><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0 position-relative"><select class="select2 form-control" name="sourceModule"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value, 'MODULE_MODEL', false, 'index');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?><option value=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['DEFAULT_MODULE_NAME']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate('LBL_USE_PREFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><a href="#" class="js-popover-tooltip ml-2" data-js="popover" data-trigger="focus hover" data-content="<?php echo \App\Language::translate('LBL_USE_PREFIX_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0 position-relative"><input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('prefix');?>
"placeholder="<?php echo \App\Language::translate('LBL_NO_PREFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-old-prefix="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('prefix');?>
" name="prefix" data-validation-engine="validate[funcCall[Vtiger_AlphaNumericWithSlashesCurlyBraces_Validator_Js.invokeValidation]]" /></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate("LBL_LEADING_ZEROS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><a href="#" class="js-popover-tooltip ml-2" data-js="popover" data-trigger="focus hover" data-content="<?php echo \App\Language::translate('LBL_LEADING_ZEROS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0 position-relative"><select class="select2" name="leading_zeros"><option value="0"<?php if (empty($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros'))) {?>selected="selected" <?php }?>><?php echo \App\Language::translate('LBL_NO_LEADING_ZEROS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;(<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;2, 6, 88, 954, 1549)</option><option value="2"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros') === 2) {?>selected="selected" <?php }?>>2 (<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;02, 06, 88, 954, 1549)</option><option value="3"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros') === 3) {?>selected="selected" <?php }?>>3 (<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;002, 006, 088, 954, 1549)</option><option value="4"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros') === 4) {?>selected="selected" <?php }?>>4 (<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;0002, 0006, 0088, 0954, 1549)</option><option value="5"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros') === 5) {?>selected="selected" <?php }?>>5 (<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;00002, 00006, 00088, 00954, 01549)</option><option value="6"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros') === 6) {?>selected="selected" <?php }?>>6 (<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;000002, 000006, 000088, 000954, 001549)</option><option value="7"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros') === 7) {?>selected="selected" <?php }?>>7 (<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;0000002, 0000006, 0000088, 0000954, 0001549)</option><option value="8"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros') === 8) {?>selected="selected" <?php }?>>8 (<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;00000002, 00000006, 00000088, 00000954, 00001549)</option><option value="9"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('leading_zeros') === 9) {?>selected="selected" <?php }?>>9 (<?php echo \App\Language::translate('LBL_FOR_EXAMPLE_SHORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;000000002, 000000006, 000000088, 000000954, 000001549)</option></select></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate('LBL_USE_POSTFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><a href="#" class="js-popover-tooltip ml-2" data-js="popover" data-trigger="focus hover" data-content="<?php echo \App\Language::translate('LBL_USE_POSTFIX_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0 position-relative"><input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('postfix');?>
"placeholder="<?php echo \App\Language::translate('LBL_NO_POSTFIX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-old-postfix="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('postfix');?>
" name="postfix" data-validation-engine="validate[funcCall[Vtiger_AlphaNumericWithSlashesCurlyBraces_Validator_Js.invokeValidation]]" /></td></tr></tbody></table></div></div><div class="row"><div class="col-md-12"><table class="table table-bordered"><thead><tr><th width="30%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_CUSTOMIZE_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th></th></tr></thead><tbody><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate('LBL_START_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><span class="redColor">*</span><a href="#" class="js-popover-tooltip ml-2" data-js="popover" data-trigger="focus hover" data-content="<?php echo \App\Language::translate('LBL_START_SEQUENCE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0 position-relative"><div class="input-group w-100"><input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('cur_id');?>
"data-old-sequence-number="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('cur_id');?>
"name="sequenceNumber" data-validation-engine="validate[required,funcCall[Vtiger_WholeNumber_Validator_Js.invokeValidation]]" /><div class="input-group-append"><button class="btn btn-success float-right js-adavanced-sequence d-none" type="button" title="<?php echo \App\Language::translate('LBL_SHOW_ADVANCED_SEQUENCE_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-js="click"><span class="yfi yfi-system-configuration"></span></button></div></div></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate('LBL_RS_RESET_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><a href="#" class="js-popover-tooltip ml-2" data-js="popover" data-trigger="focus hover" data-content="<?php echo \App\Language::translate('LBL_RS_RESET_SEQUENCE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0 position-relative"><select class="select2" name="reset_sequence" manddata-placeholder="<?php echo \App\Language::translate('LBL_RS_RESET_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option value="n"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('reset_sequence') === 'n' || empty($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('reset_sequence'))) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_RS_DO_NOT_RESET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="Y" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('reset_sequence') === 'Y') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_RS_YEAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="M" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('reset_sequence') === 'M') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_RS_MONTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="D" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULE_DATA']->value->get('reset_sequence') === 'D') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_RS_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></td></tr></tbody></table></div></div><div class="row"><div class="col-md-12"><table id="customRecordNumbering" class="table table-bordered"><thead><tr><th width="30%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_USE_CUSTOM_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th width="70%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0"></th></tr></thead><tbody><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate('LBL_CUSTOM_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><a href="#" class="js-popover-tooltip ml-2" data-js="popover" data-trigger="focus hover" data-content="<?php echo \App\Language::translate('LBL_CUSTOM_VARIABLES_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0"><div class="form-inline"><div class="input-group w-100"><select class="select2 form-control" id="customVariables" name="custom_variables"><option value="YYYY"><?php echo \App\Language::translate('LBL_CV_FULL_YEAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="YY"><?php echo \App\Language::translate('LBL_CV_YEAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="MM"><?php echo \App\Language::translate('LBL_CV_FULL_MONTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="M"><?php echo \App\Language::translate('LBL_CV_MONTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="DD"><?php echo \App\Language::translate('LBL_CV_FULL_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="D"><?php echo \App\Language::translate('LBL_CV_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select><div class="input-group-append"><input type="hidden" value="" id="customVariable" /><button class="btn btn-sm btn-info float-right" id="customVariableCopy" type="button" title="<?php echo \App\Language::translate('LBL_COPY_CV',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-copy"></span> <?php echo \App\Language::translate('LBL_COPY_CV',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate('LBL_PICKLIST_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><a href="#" class="js-popover-tooltip ml-2" data-js="popover" data-trigger="focus hover" data-content="<?php echo \App\Language::translate('LBL_PICKLIST_VARIABLES_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0"><div class="form-inline"><div class="input-group w-100"><select class="select2 form-control" id="picklistVariables" name="picklistVariables"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLISTS']->value, 'PICKLIST');
$_smarty_tpl->tpl_vars['PICKLIST']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST']->value) {
$_smarty_tpl->tpl_vars['PICKLIST']->do_else = false;
?><option value="picklist:<?php echo $_smarty_tpl->tpl_vars['PICKLIST']->value->getFieldName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['DEFAULT_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><input type="hidden" value="" id="picklistVariable" /><button class="btn btn-sm btn-info float-right" id="picklistVariableCopy" type="button" title="<?php echo \App\Language::translate('LBL_COPY_CV',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-copy"></span> <?php echo \App\Language::translate('LBL_COPY_CV',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></td></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="float-right"><b><?php echo \App\Language::translate('LBL_REFERENCE_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><a href="#" class="js-popover-tooltip ml-2" data-js="popover" data-trigger="focus hover" data-content="<?php echo \App\Language::translate('LBL_REFERENCE_VARIABLES_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 border-left-0"><div class="form-inline"><div class="input-group w-100"><select class="select2 form-control" id="referenceVariables" name="referenceVariables"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['REFERENCE_FIELDS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'LABEL', false, 'VAL');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VAL']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['VAL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><input type="hidden" value="" id="referenceVariable" /><button class="btn btn-sm btn-info float-right" id="referenceVariableCopy" type="button" title="<?php echo \App\Language::translate('LBL_COPY_CV',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-copy"></span> <?php echo \App\Language::translate('LBL_COPY_CV',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></td></tr></tbody></table></div></div><div class="row"><div class="col-md-12 float-right"><div class="float-right"><button class="btn btn-success saveButton" type="submit" disabled="disabled"><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="cancelLink btn btn-warning" type="reset" onclick="javascript:window.history.back();"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></form></div><!-- /tpl-Settings-RecordNumbering-CustomRecordNumbering -->
<?php }
}
