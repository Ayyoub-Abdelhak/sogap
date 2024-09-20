<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:24
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\GeneralInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819154c0a5f7_64037812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b095bf5c53ce3fb65de0336d552813fdc947ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\GeneralInfo.tpl',
      1 => 1702905752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819154c0a5f7_64037812 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-Widget-GeneralInfo --><?php $_smarty_tpl->_assignInScope('TRANSLATED_LABEL', \App\Language::translate('LBL_RECORD_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?><div class="c-detail-widget c-detail-widget--general-info js-widget-general-info detailViewTable" data-js="edit/save"><div class="c-detail-widget__header js-detail-widget-header collapsed border-bottom-0"><div class="c-detail-widget__header__container d-flex align-items-center py-1"><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_LABEL']->value;?>
" data-toggle="collapse" data-target="#<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_LABEL']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_LABEL']->value;?>
-collapse"><span class="u-transform_rotate-180deg mdi mdi-chevron-down" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0" title="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_LABEL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TRANSLATED_LABEL']->value;?>
</h5></div><?php if (empty($_smarty_tpl->tpl_vars['IS_READ_ONLY']->value)) {?><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench"></i></div></button><div class="u-hidden-block items-center js-comment-actions"><?php $_smarty_tpl->_assignInScope('CURRENT_VIEW', "full");
ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo \App\Language::translate('LBL_COMPLETE_DETAILS',$_prefixVariable2);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('CURRENT_MODE_LABEL', $_prefixVariable3);?><button type="button" class="btn btn-sm btn-light changeDetailViewMode ml-auto"><span title="<?php echo \App\Language::translate('LBL_SHOW_FULL_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="fas fa-th-list"></span></button><?php ob_start();
echo ($_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl()).('&mode=showDetailViewByMode&requestMode=full');
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('FULL_MODE_URL', $_prefixVariable4);?><input type="hidden" name="viewMode" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_VIEW']->value;?>
" data-nextviewname="full" data-currentviewlabel="<?php echo $_smarty_tpl->tpl_vars['CURRENT_MODE_LABEL']->value;?>
" data-full-url="<?php echo $_smarty_tpl->tpl_vars['FULL_MODE_URL']->value;?>
" /></div></div><?php }?></div></div><div class="c-detail-widget__content js-detail-widget-collapse js-detail-widget-content collapse multi-collapse pt-0<?php if (!empty($_smarty_tpl->tpl_vars['IS_READ_ONLY']->value)) {?> show<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_LABEL']->value;?>
-collapse" data-storage-key="GeneralInfo" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['TRANSLATED_LABEL']->value;?>
"data-js="container|value"><table class="c-detail-widget__table u-table-fixed"><tbody><?php if (!empty($_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value['SUMMARY_FIELDS'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value['SUMMARY_FIELDS'], 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() != 'modifiedtime' && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() != 'createdtime') {?><tr class="c-table__row--hover <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('hideField')) {?> d-none<?php }?>"><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="font-weight-bold mb-0"><?php $_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getIcon('GeneralInfo'));
if ((isset($_smarty_tpl->tpl_vars['ICON']->value['name']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value['name'];?>
 mr-2"></span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_smarty_tpl->_assignInScope('HELPINFO_LABEL', \App\Language::getTranslateHelpInfo($_smarty_tpl->tpl_vars['FIELD_MODEL']->value,$_smarty_tpl->tpl_vars['VIEW']->value));
if ($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right u-cursor-pointer" title="" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value;?>
"data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }?></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 py-0 u-w-60per"><div class="c-detail-widget__header__container d-flex align-items-center px-0"><div class="value px-0 w-100" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '21') {?>style="word-wrap: break-word;white-space:pre-wrap;" <?php }?>><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value,'SOURCE_TPL'=>'GeneralInfoWidget'), 0, true);
?></div><?php if (empty($_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() == 'true' && ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() != Vtiger_Field_Model::REFERENCE_TYPE) && $_smarty_tpl->tpl_vars['IS_AJAX_ENABLED']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isAjaxEditable() == 'true') {?><div class="d-none edit input-group input-group-sm px-0"> <?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'boolean' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'picklist') {?><input type="hidden" class="fieldname" data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' /><?php } else {
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if (is_array($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {
$_smarty_tpl->_assignInScope('FIELD_VALUE', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));
}?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
' /><?php }?></div><div class="c-table__action--hover js-detail-quick-edit  u-cursor-pointer px-0 ml-1 u-w-fit" data-js="click"><button type="button" class="btn btn-sm btn-light float-right"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></div><?php }?></div></td></tr><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></tbody></table></div></div><!-- /tpl-Base-Detail-Widget-GeneralInfo -->
<?php }
}
