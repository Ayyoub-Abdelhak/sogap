<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:06:32
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Inventory\Config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9a28657972_91398941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f245f16049c382c8ff7b22894ec8232a5978b8ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Inventory\\Config.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9a28657972_91398941 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="configForm"><input type="hidden" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" /><div class="mb-5"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="row"><div class="col-md-6"><div class="contents py-3 form-horizontal"><div class="form-group form-row"><label class="col-md-3 u-text-small-bold col-form-label text-md-right form-control-plaintext"><?php echo \App\Language::translate('LBL_SUMMATION_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-6"><select class="select2 form-control" name="aggregation"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Inventory_Module_Model::getPicklistValues('aggregation'), 'LABEL', false, 'KEY');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['KEY']->value == $_smarty_tpl->tpl_vars['CONFIG']->value['aggregation']) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group form-row"><?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'DiscountConfiguration') {
$_smarty_tpl->_assignInScope('FIELD', 'discounts');
} else {
$_smarty_tpl->_assignInScope('FIELD', 'taxs');
}
if ($_smarty_tpl->tpl_vars['CONFIG']->value[$_smarty_tpl->tpl_vars['FIELD']->value] != '') {
$_smarty_tpl->_assignInScope('FIELD_VALUE', explode(',',$_smarty_tpl->tpl_vars['CONFIG']->value[$_smarty_tpl->tpl_vars['FIELD']->value]));
} else {
$_smarty_tpl->_assignInScope('FIELD_VALUE', array());
}?><label class="col-md-3 col-form-label u-text-small-bold text-md-right form-control-plaintext"><span class="redColor">*</span><?php echo \App\Language::translate(('LBL_AVAILABLE_').(strtoupper($_smarty_tpl->tpl_vars['FIELD']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-9"><select class="select2 form-control" multiple name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
" data-prevvalue='<?php echo implode(',',$_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
' data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Inventory_Module_Model::getPicklistValues($_smarty_tpl->tpl_vars['FIELD']->value), 'LABEL', false, 'KEY');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['KEY']->value);?>
" <?php if (in_array($_smarty_tpl->tpl_vars['KEY']->value,$_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {?> selected <?php }?>><?php echo \App\Language::translate((((string)$_smarty_tpl->tpl_vars['LABEL']->value)."_").(strtoupper($_smarty_tpl->tpl_vars['FIELD']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group form-row"><label class="col-md-3 u-text-small-bold col-form-label text-md-right form-control-plaintext"><?php echo \App\Language::translate('LBL_DEFAULT_MODE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-md-9"><select class="select2 form-control" name="default_mode"><option value="0" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['default_mode'] == 0) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_GROUP');?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['default_mode'] == 1) {?>selected<?php }?>><?php echo \App\Language::translate('LBL_INDIVIDUAL');?>
</option></select></div></div></div></div><div class="col-md-6"><?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'DiscountConfiguration') {?><div class="alert alert-info"><h5 class="alert-heading"><?php echo \App\Language::translate('LBL_ALERT_DISCOUNT_CONFIG_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><p><?php echo \App\Language::translate('LBL_ALERT_DISCOUNT_CONFIG_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><?php } elseif ($_smarty_tpl->tpl_vars['VIEW']->value == 'TaxConfiguration') {?><div class="alert alert-info"><h5 class="alert-heading"><?php echo \App\Language::translate('LBL_ALERT_TAX_CONFIG_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><p><?php echo \App\Language::translate('LBL_ALERT_TAX_CONFIG_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><?php }?></div></div></div></form>
<?php }
}
