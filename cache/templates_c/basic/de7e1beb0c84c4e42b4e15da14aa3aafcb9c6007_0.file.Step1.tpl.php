<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:57:23
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PDF\Step1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ea613dfe515_35311993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7e1beb0c84c4e42b4e15da14aa3aafcb9c6007' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PDF\\Step1.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/basic/modules/Vtiger/VariablePanel.tpl' => 1,
  ),
),false)) {
function content_658ea613dfe515_35311993 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-PDF-Step1 --><?php if (empty($_smarty_tpl->tpl_vars['RECORDID']->value)) {
$_smarty_tpl->_assignInScope('RECORDID', '');
}?><div class="pdfTemplateContents" data-js="container"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step1" class="form-horizontal" data-js="container"><input type="hidden" name="module" value="PDF"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step2" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="1" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><div class="row"><div class="col-12 mb-3"><div class="card"><div class="card-header"><span class="fa fa-copy mr-2"></span><?php echo \App\Language::translate('LBL_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body"><div class="row js-variable-panel" data-js="container"><?php $_smarty_tpl->_subTemplateRender('file:layouts/basic/modules/Vtiger/VariablePanel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECTED_MODULE'=>$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value,'PARSER_TYPE'=>'pdf'), 0, false);
?></div></div></div></div><div class="col-xs-12 col-xl-6 col-xxl-4 mb-3"><div class="card"><div class="card-header"><span class="fa fa-edit mr-2"></span><?php echo \App\Language::translate('LBL_ENTER_BASIC_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body"><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><select class="select2 form-control" id="status" name="status" required="true"><option value="1" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('status') == 1) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="0" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('status') == 0) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_GENERATOR_ENGINE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><div class="input-group"><select class="select2 form-control" id="generator" name="generator" required="true"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Pdf\Pdf::getSupportedDrivers(), 'DRIVER_LABEL', false, 'DRIVER_NAME');
$_smarty_tpl->tpl_vars['DRIVER_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['DRIVER_NAME']->value => $_smarty_tpl->tpl_vars['DRIVER_LABEL']->value) {
$_smarty_tpl->tpl_vars['DRIVER_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['DRIVER_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('generator') == $_smarty_tpl->tpl_vars['DRIVER_NAME']->value) {?>selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DRIVER_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><span class="input-group-text js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_GENERATOR_ENGINE_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_PRIMARY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><div class="input-group"><input type="text" name="primary_name" class="form-control" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('primary_name');?>
" id="primary_name" /><div class="input-group-append"><span class="input-group-text js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_USE_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_SECONDARY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><div class="input-group"><input type="text" name="secondary_name" class="form-control" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('secondary_name');?>
" id="secondary_name" /><div class="input-group-append"><span class="input-group-text js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_USE_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><select class="select2 form-control" id="moduleName" name="module_name" required="required" data-validation-engine="validate[required]" data-js="change"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE_MODEL', false, 'TABID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value == $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_METATAGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><input type="checkbox" name="metatags_status" id="metatags_status" value="1" class="checkboxForm" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>checked="checked" <?php }?> data-js="click" /></div></div><div class="form-group row metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_META_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><div class="input-group"><input type="text" name="meta_title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_title');?>
" id="meta_title" /><div class="input-group-append"><span class="input-group-text js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_USE_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div></div></div><div class="form-group row metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_META_AUTHOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><div class="input-group"><input type="text" name="meta_author" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_author');?>
" id="meta_author" /><div class="input-group-append"><span class="input-group-text js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_USE_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div></div></div><div class="form-group row metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_META_SUBJECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><div class="input-group"><input type="text" name="meta_subject" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_subject');?>
" id="meta_subject" /><div class="input-group-append"><span class="input-group-text js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_USE_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div></div></div><div class="form-group row metatags <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('metatags_status') == true || $_smarty_tpl->tpl_vars['RECORDID']->value == '') {?>d-none<?php }?>"><label class="col-sm-12 col-form-label"><?php echo \App\Language::translate('LBL_META_KEYWORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-12 controls"><?php $_smarty_tpl->_assignInScope('KEYWORDS', explode(',',$_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('meta_keywords')));?><select class="select2 form-control" id="meta_keywords" name="meta_keywords" data-select="tags" multiple="multiple"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['KEYWORDS']->value, 'KEYWORD');
$_smarty_tpl->tpl_vars['KEYWORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEYWORD']->value) {
$_smarty_tpl->tpl_vars['KEYWORD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEYWORD']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['KEYWORD']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div></div></div><div class="col-xs-12 col-xl-6 col-xxl-4 mb-3 order-1 order-xl-2 order-xxl-1"><div class="card"><div class="card-header"><span class="fa fa-cogs mr-2"></span> <?php echo \App\Language::translate('LBL_DOCUMENT_SETTINGS_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body"><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_PAGE_FORMAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-6 controls"><select class="select2 form-control rtl" id="page_format" name="page_format" data-validation-engine="validate[required]"><option value="" selected=""><?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Pdf\Pdf::getPageFormats(), 'FORMAT');
$_smarty_tpl->tpl_vars['FORMAT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FORMAT']->value) {
$_smarty_tpl->tpl_vars['FORMAT']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FORMAT']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('page_format') == $_smarty_tpl->tpl_vars['FORMAT']->value) {?> selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FORMAT']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_MAIN_MARGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_chkbox') === 1) {
$_smarty_tpl->_assignInScope('MARGIN_CHECKED', 'true');
} else {
$_smarty_tpl->_assignInScope('MARGIN_CHECKED', 'false');
}?><div class="col-sm-6"><input type="checkbox" id="margin_chkbox" name="margin_chkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['MARGIN_CHECKED']->value == 'true') {?>checked="checked" <?php }?> data-js="click" /></div></div><div class="form-group row margin_inputs <?php if ($_smarty_tpl->tpl_vars['MARGIN_CHECKED']->value == 'true') {?>d-none<?php }?>"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_MARGIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6"><div class="form-row d-flex justify-content-center mx-auto"><div class="col-md-6 mb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="margin_top"><span class="fas fa-arrow-up" title="<?php echo \App\Language::translate('LBL_TOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></span></div><input type="text" class="form-control" aria-describedby="margin_top" name="margin_top" id="margin_top" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_top');?>
" placeholder="<?php echo \App\Language::translate('LBL_TOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_TOP_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div><div class="col-md-6 mb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="margin_right"><span class="fas fa-arrow-right" title="<?php echo \App\Language::translate('LBL_RIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></span></div><input type="text" class="form-control" aria-describedby="margin_right" name="margin_right" id="margin_right" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_right');?>
" placeholder="<?php echo \App\Language::translate('LBL_RIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_RIGHT_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div><div class="col-md-6 mb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="margin_bottom"><span class="fas fa-arrow-down" title="<?php echo \App\Language::translate('LBL_BOTTOM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></span></div><input type="text" class="form-control" aria-describedby="margin_bottom" name="margin_bottom" id="margin_bottom" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_bottom');?>
" placeholder="<?php echo \App\Language::translate('LBL_BOTTOM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_BOTTOM_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div><div class="col-md-6 mb-2"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="margin_left"><span class="fas fa-arrow-left" title="<?php echo \App\Language::translate('LBL_LEFT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></span></div><input type="text" class="form-control" aria-describedby="margin_left" name="margin_left" id="margin_left" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('margin_left');?>
" placeholder="<?php echo \App\Language::translate('LBL_LEFT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_LEFT_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div></div><div class="form-row"><div class="col-12  col-lg-6 mb-2"><label class="col-form-label text-center u-text-ellipsis--no-hover"><?php echo \App\Language::translate('LBL_HEADER_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><input type="text" class="form-control" name="header_height" id="header_height" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('header_height');?>
" placeholder="<?php echo \App\Language::translate('LBL_HEADER_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_HEADER_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div><div class="col-md-12 col-lg-6 mb-2"><label class="col-form-label text-center u-text-ellipsis--no-hover"><?php echo \App\Language::translate('LBL_FOOTER_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><input type="text" class="form-control" name="footer_height" id="footer_height" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('footer_height');?>
" placeholder="<?php echo \App\Language::translate('LBL_FOOTER_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" title="<?php echo \App\Language::translate('LBL_FOOTER_IN_MILIMETERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></div></div></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_PAGE_ORIENTATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><select class="select2 form-control" id="page_orientation" name="page_orientation"><option value="PLL_PORTRAIT" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('page_orientation') == 'PLL_PORTRAIT') {?> selected="selected" <?php }?>><?php echo \App\Language::translate('PLL_PORTRAIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_LANDSCAPE" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('page_orientation') == 'PLL_LANDSCAPE') {?> selected="selected" <?php }?>><?php echo \App\Language::translate('PLL_LANDSCAPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_LANGUAGE_CHOICE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><select class="select2 form-control" id="language" name="language"><option value=""><?php echo \App\Language::translate('LBL_DEFAULT');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Language::getAll(), 'NAME', false, 'CODE');
$_smarty_tpl->tpl_vars['NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CODE']->value => $_smarty_tpl->tpl_vars['NAME']->value) {
$_smarty_tpl->tpl_vars['NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CODE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('language') == $_smarty_tpl->tpl_vars['CODE']->value) {?> selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_FILENAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6 controls"><div class="input-group"><input type="text" name="filename" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('filename');?>
" id="filename" /><div class="input-group-append"><span class="input-group-text js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_USE_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_DEFAULT_TPL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-6"><input type="checkbox" id="default" name="default" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('default'))) {?>checked="checked" <?php }?> /></div></div><div class="form-group row"><label class="col-sm-6 col-form-label"><?php echo \App\Language::translate('LBL_GENERATE_ONE_PDF',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_GENERATE_ONE_PDF_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle ml-1"></span></span></label><div class="col-sm-6"><?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('one_pdf') == 0) {
$_smarty_tpl->_assignInScope('ONE_PDF', 'false');
} else {
$_smarty_tpl->_assignInScope('ONE_PDF', 'true');
}?><input type="checkbox" id="one_pdf" name="one_pdf" value="1" <?php if ($_smarty_tpl->tpl_vars['ONE_PDF']->value == 'true') {?>checked="checked" <?php }?> /></div></div></div></div></div><div class="col-xs-12 col-xl-6 col-xxl-4 mb-2  order-2 order-xl-1 order-xxl-2"><div class="card"><div class="card-header"><span class="fa fa-user-shield mr-2"></span> <?php echo \App\Language::translate('LBL_PERMISSIONS_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body"><div class="form-group row"><div class="col-md-12 col-form-label"><?php echo \App\Language::translate('LBL_GROUP_MEMBERS','Settings:Groups');?>
</div><div class="col-md-12 controls"><select class="select2 form-control" multiple="true" name="template_members[]" data-placeholder="<?php echo \App\Language::translate('LBL_ADD_USERS_ROLES','Settings:Groups');?>
"><?php $_smarty_tpl->_assignInScope('TEMPLATE_MEMBERS', explode(',',$_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('template_members')));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Groups_Member_Model::getAll(false), 'ALL_GROUP_MEMBERS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value) {
$_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_GROUP_MEMBERS']->value, 'MEMBER');
$_smarty_tpl->tpl_vars['MEMBER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MEMBER']->value) {
$_smarty_tpl->tpl_vars['MEMBER']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value->get('id');?>
" data-member-type="<?php echo $_smarty_tpl->tpl_vars['GROUP_LABEL']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['MEMBER']->value->get('id'),$_smarty_tpl->tpl_vars['TEMPLATE_MEMBERS']->value)) {?>selected="true" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MEMBER']->value->get('name'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row"><label class="col-sm-12 col-form-label"><?php echo \App\Language::translate('LBL_VISIBILITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-12 controls"><?php $_smarty_tpl->_assignInScope('VISIBILITY', explode(',',$_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('visibility')));?><select class="select2 form-control rtl" id="visibility" name="visibility" multiple data-validation-engine="validate[required]"><option value="PLL_DETAILVIEW" <?php if (in_array('PLL_DETAILVIEW',$_smarty_tpl->tpl_vars['VISIBILITY']->value)) {?>selected="selected" <?php }?>><?php echo \App\Language::translate('PLL_DETAILVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_LISTVIEW" <?php if (in_array('PLL_LISTVIEW',$_smarty_tpl->tpl_vars['VISIBILITY']->value)) {?>selected="selected" <?php }?>><?php echo \App\Language::translate('PLL_LISTVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="PLL_RELATEDLISTVIEW" <?php if (in_array('PLL_RELATEDLISTVIEW',$_smarty_tpl->tpl_vars['VISIBILITY']->value)) {?>selected="selected" <?php }?>><?php echo \App\Language::translate('PLL_RELATEDLISTVIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div></div></div></div><div class="col-12 mb-3 order-5"><div class="card"><div class="card-header"><span class="fas fa-tint mr-2"></span> <?php echo \App\Language::translate('LBL_WATERMARK_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body"><div class="row"><div class="form-group col-12 col-xl-6 col-xxl-4"><div class="row"><div class="col-12 col-sm-6"><label class="col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-sm-6 controls"><select class="select2 form-control" id="watermark_type" name="watermark_type" required="true" data-js="change"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PDF_MODEL']->value->getWatermarkType(), 'LABEL', false, 'VALUE');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_type') == $_smarty_tpl->tpl_vars['VALUE']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="form-group col-12 col-sm-6 col-xl-6 col-xxl-4 watertext <?php if (!$_smarty_tpl->tpl_vars['PDF_MODEL']->value->isEmpty('watermark_type')) {?>d-none<?php }?>"><div class="row"><div class="col-12 col-sm-6"><label class="col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_ANGLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-sm-6 controls"><input type="number" name="watermark_angle" class="form-control" value="<?php echo intval($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_angle'));?>
" id="watermark_angle" min="0" max="360" /></div></div></div><div class="form-group col-12 watertext <?php if (!$_smarty_tpl->tpl_vars['PDF_MODEL']->value->isEmpty('watermark_type')) {?>d-none<?php }?>"><div class="row"><div class="col-12"><label class="col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="ml-2 js-popover-tooltip" data-content="<?php echo \App\Language::translate('LBL_USE_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></span></label></div><div class="col-12 controls"><textarea name="watermark_text" class="form-control js-editor" id="watermark_text" data-purify-mode="Html"><?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_text');?>
</textarea></div></div></div><div class="form-group col-12 col-xl-4 waterimage <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->isEmpty('watermark_type')) {?>d-none<?php }?>"><div class="row"><div class="col-12 col-sm-4"><label class="col-form-label"><?php echo \App\Language::translate('LBL_WATERMARK_IMAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-sm-8 controls"><div class="row"><div id="watermark" class="col-3"><?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_image')) {?><img src="<?php echo \App\Fields\File::getImageBaseData($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_image'));?>
" class="w-100" /><?php }?></div><div class="col-9"><input type="file" name="watermark_image_file" accept="images/*" class="form-control" id="watermark_image" /></div></div></div></div></div><div class="form-group col-12 col-xxl-4 pt-2 pt-xxl-0 text-center waterimage <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->isEmpty('watermark_type')) {?>d-none<?php }?>"><button id="deleteWM" class="btn btn-danger <?php if ($_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('watermark_image') == '') {?>d-none<?php }?>"><?php echo \App\Language::translate('LBL_DELETE_WM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div></div></div><div class="float-right mb-2"><button class="btn btn-success mr-1" type="submit" disabled><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-danger cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div><!-- /tpl-Settings-PDF-Step1 -->
<?php }
}
