<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:02:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\\Companies\Form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65805102d2c733_78879054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c41bfebc8ddb45e6cdd030cfa7e13a77a3a6437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\\\Companies\\Form.tpl',
      1 => 1702905761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65805102d2c733_78879054 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Companies-Form  --><div class="card js-card-body mb-3" data-js="container"><div class="card-header"><span class="fas fa-globe mr-1"></span><?php echo App\Language::translate('LBL_REGISTRATION_DATA',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body"><?php if (!empty($_smarty_tpl->tpl_vars['COMPANY_ID']->value)) {
$_smarty_tpl->_assignInScope('RECORD', Settings_Companies_Record_Model::getInstance($_smarty_tpl->tpl_vars['COMPANY_ID']->value)->set('source',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
} else {
$_smarty_tpl->_assignInScope('RECORD', Settings_Companies_Record_Model::getCleanInstance()->set('source',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
}
$_smarty_tpl->_assignInScope('FORM_FIELDS', $_smarty_tpl->tpl_vars['RECORD']->value->getModule()->getFormFields());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORM_FIELDS']->value, 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
if (empty($_smarty_tpl->tpl_vars['FIELD']->value['registerView'])) {
continue 1;
}
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'spacer') {?><hr /><?php continue 1;
} elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'type') {
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RECORD']->value->getFieldInstanceByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value,mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['FIELD_NAME']->value), 'UTF-8'))->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)));?><div class="form-group row"><label class="col-lg-4 col-form-label text-left text-lg-right"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }?><b><?php echo App\Language::translate(mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['FIELD_NAME']->value), 'UTF-8'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><?php if ((isset($_smarty_tpl->tpl_vars['FIELD']->value['infoText']))) {?><div class="js-popover-tooltip ml-2 mr-2 d-inline mt-2 text-primary" data-js="popover" data-placement="top" data-class="u-min-w-470pxr" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value['infoText'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-info-circle"></span></div><?php }?></label><div class="col-lg-8"><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('type') === 1) {?> active<?php }?>" for="type-option1"><input value="1" type="radio" name="type" id="type-option1" data-validation-engine="validate[required]" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('type') == 1) {?> checked<?php }?>><?php echo \App\Language::translate('LBL_TYPE_TARGET_USER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('type') === 2) {?> active<?php }?>" for="type-option2"><input value="2" type="radio" name="type" id="type-option2" data-validation-engine="validate[required]" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('type') == 2) {?> checked<?php }?>><?php echo \App\Language::translate('LBL_TYPE_INTEGRATOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('type') === 3) {?> active<?php }?>" for="type-option3"><input value="3" type="radio" name="type" id="type-option3" data-validation-engine="validate[required]" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('type') == 3) {?> checked<?php }?>><?php echo \App\Language::translate('LBL_TYPE_PROVIDER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'logo') {?><div class="form-group row"><div class="col-lg-4 col-form-label text-left text-lg-right"><b><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
</b></div><div class="col-lg-8 d-flex"><div class="u-h-fit my-auto"><input type="file" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" />&nbsp;&nbsp;</div></div></div><?php } else {
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RECORD']->value->getFieldInstanceByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value,mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['FIELD_NAME']->value), 'UTF-8'))->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)));?><div class="form-group row"><label class="col-lg-4 col-form-label text-left text-lg-right"><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'newsletter') {?><div class="js-popover-tooltip ml-2 mr-2 d-inline mt-2 text-primary" data-js="popover" data-content="<?php ob_start();
echo App\Language::translate('LBL_PRIVACY_POLICY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable1=ob_get_clean();
echo \App\Purifier::encodeHtml(App\Language::translateArgs("LBL_EMAIL_NEWSLETTER_INFO",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,"<a href=\"https://yetiforce.com/pl/newsletter-info\">".$_prefixVariable1."</a>"));?>
"><span class="fas fa-info-circle"></span></div><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }?><b><?php echo App\Language::translate(mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['FIELD_NAME']->value), 'UTF-8'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b><?php if ((isset($_smarty_tpl->tpl_vars['FIELD']->value['infoText']))) {?><div class="js-popover-tooltip ml-2 mr-2 d-inline mt-2 text-primary" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value['infoText'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-info-circle"></span></div><?php }?></label><div class="col-lg-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0, true);
?></div></div><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'newsletter') {?><div class="js-newsletter-content <?php if (empty($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value))) {?>d-none<?php }?>" data-js="class:d-none"><div class="alert alert-warning" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="u-fs-13px"><?php echo App\Language::translate('LBL_NEWSLETTER_ALERT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'email') {?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value !== 'YetiForce') {?><div class="card mb-3" data-js="container"><div class="card-header"><span class="fas fa-globe mr-1"></span><?php echo App\Language::translate('LBL_BRAND_DATA',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<div class="js-popover-tooltip ml-2 mr-2 d-inline mt-2 text-primary" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_BRAND_DATA_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-info-circle"></span></div></div><div class="card-body"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FORM_FIELDS']->value, 'FIELD', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['FIELD']->value['brandBlock']))) {
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['RECORD']->value->getFieldInstanceByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value,mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['FIELD_NAME']->value), 'UTF-8'))->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)));?><div class="form-group row"><label class="col-lg-4 col-form-label text-left text-lg-right"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }?><b><?php echo App\Language::translate(mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['FIELD_NAME']->value), 'UTF-8'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label><div class="col-lg-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0, true);
?></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }?><!-- /tpl-Settings-Companies-Form  -->
<?php }
}
