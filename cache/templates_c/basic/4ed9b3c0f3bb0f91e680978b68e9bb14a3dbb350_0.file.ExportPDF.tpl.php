<?php
/* Smarty version 4.2.0, created on 2023-12-25 20:59:14
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ExportPDF.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6589df12365d95_93687854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ed9b3c0f3bb0f91e680978b68e9bb14a3dbb350' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ExportPDF.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6589df12365d95_93687854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'TEMPLATE_USER_VARIABLE' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\4ed9b3c0f3bb0f91e680978b68e9bb14a3dbb350_0.file.ExportPDF.tpl.php',
    'uid' => '4ed9b3c0f3bb0f91e680978b68e9bb14a3dbb350',
    'call_name' => 'smarty_template_function_TEMPLATE_USER_VARIABLE_14959622556589df1210d4c4_63943072',
  ),
  'TEMPLATE_LIST' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\4ed9b3c0f3bb0f91e680978b68e9bb14a3dbb350_0.file.ExportPDF.tpl.php',
    'uid' => '4ed9b3c0f3bb0f91e680978b68e9bb14a3dbb350',
    'call_name' => 'smarty_template_function_TEMPLATE_LIST_14959622556589df1210d4c4_63943072',
  ),
  'TEMPLATE_LIST_DYNAMIC' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\4ed9b3c0f3bb0f91e680978b68e9bb14a3dbb350_0.file.ExportPDF.tpl.php',
    'uid' => '4ed9b3c0f3bb0f91e680978b68e9bb14a3dbb350',
    'call_name' => 'smarty_template_function_TEMPLATE_LIST_DYNAMIC_14959622556589df1210d4c4_63943072',
  ),
));
?><!-- tpl-Base-ExportPDF --><form id="pdfExportModal" action="index.php" target="_blank" method="POST"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-file-pdf mr-1"></span><?php echo \App\Language::translate('LBL_GENERATE_PDF_FILE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="PDF" /><input type="hidden" name="mode" value="generate" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" name="fromview" value="<?php echo $_smarty_tpl->tpl_vars['FROM_VIEW']->value;?>
" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['VIEW_NAME']->value;?>
" /><input type="hidden" name="entityState" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ENTITY_STATE']->value);?>
" /><?php if ((isset($_smarty_tpl->tpl_vars['RELATED_MODULE']->value))) {?><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
" /><input type="hidden" name="relationId" value="<?php echo $_smarty_tpl->tpl_vars['RELATION_ID']->value;?>
" /><input type="hidden" name="cvId" value="<?php echo $_smarty_tpl->tpl_vars['CV_ID']->value;?>
" /><?php }?><input type="hidden" name="search_key" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" /><input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" name="search_params" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
" /><input type="hidden" name="selected_ids" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value));?>
"><input type="hidden" name="excluded_ids" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value));?>
"><input type="hidden" name="orderby" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ORDER_BY']->value));?>
" /><input type="hidden" name="advancedConditions" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value));?>
" /><input type="hidden" name="single_pdf" value="0" /><input type="hidden" name="email_pdf" value="0" /><input type="hidden" name="isSortActive" value="1" /><?php if ($_smarty_tpl->tpl_vars['DYNAMIC_TEMPLATES']->value && $_smarty_tpl->tpl_vars['STANDARD_TEMPLATES']->value) {?><ul class="nav nav-tabs" id="generate-pdf-tab" role="tablist"><li class="nav-item"><a class="nav-link <?php if (!$_smarty_tpl->tpl_vars['ACTIVE_DYNAMIC']->value) {?> active <?php }?>" id="home-tab" data-toggle="tab" href="#standard" role="tab" aria-controls="standard" aria-selected="true"><span class="mr-2 js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_STANDARD_TEMPLATES_DESC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span><?php echo \App\Language::translate('LBL_STANDARD_TEMPLATES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_DYNAMIC']->value) {?> active <?php }?>" id="profile-tab" data-toggle="tab" href="#dynamic" role="tab" aria-controls="dynamic" aria-selected="false"><span class="mr-2 js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Language::translate('LBL_DYNAMIC_TEMPLATES_DESC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span><?php echo \App\Language::translate('LBL_DYNAMIC_TEMPLATES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li></ul><div class="tab-content p-3 border-left border-right border-bottom mb-3" id="generate-pdf-tab-content"><div class="tab-pane fade <?php if (!$_smarty_tpl->tpl_vars['ACTIVE_DYNAMIC']->value) {?> active show <?php }?> js-content-templates-standard" id="standard" role="tabpanel" aria-labelledby="standard-tab"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'TEMPLATE_LIST', array('STANDARD_TEMPLATES'=>$_smarty_tpl->tpl_vars['STANDARD_TEMPLATES']->value), true);?>
</div><div class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['ACTIVE_DYNAMIC']->value) {?> active show <?php }?> js-content-templates-dynamic" id="dynamic" role="tabpanel" aria-labelledby="dynamic-tab"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'TEMPLATE_LIST_DYNAMIC', array('DYNAMIC_TEMPLATES'=>$_smarty_tpl->tpl_vars['DYNAMIC_TEMPLATES']->value), true);?>
</div></div><?php } else { ?><div class="card"><div class="card-header"><?php echo \App\Language::translate('LBL_AVAILABLE_TEMPLATES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><div class="card-body"><?php if ($_smarty_tpl->tpl_vars['STANDARD_TEMPLATES']->value) {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'TEMPLATE_LIST', array('STANDARD_TEMPLATES'=>$_smarty_tpl->tpl_vars['STANDARD_TEMPLATES']->value), true);
} else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'TEMPLATE_LIST_DYNAMIC', array('DYNAMIC_TEMPLATES'=>$_smarty_tpl->tpl_vars['DYNAMIC_TEMPLATES']->value), true);
}?></div></div></div><?php }?><span class="js-records-info pl-3 text-info d-none" data-js="text"></span><div class="modal-footer"><div class="btn-group mr-0"><button id="generate_pdf" type="submit" class="btn btn-success js-submit-button" <?php if (!$_smarty_tpl->tpl_vars['ACTIVE']->value) {?> disabled="disabled" <?php }?> data-js="click"><span class="fas fa-file-pdf mr-1"></span><?php echo \App\Language::translate('LBL_GENERATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><button type="button" class="btn btn-success dropdown-toggle js-submit-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php if (!$_smarty_tpl->tpl_vars['ACTIVE']->value) {?> disabled="disabled" <?php }?>></button><ul class="dropdown-menu"><li><a class="dropdown-item" href="#" id="single_pdf"><?php echo \App\Language::translate('LBL_GENERATE_SINGLE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li></ul></div><?php if (\App\Mail::checkInternalMailClient()) {?><button id="email_pdf" type="submit" class="btn btn-info mr-0 js-submit-button" <?php if (!$_smarty_tpl->tpl_vars['ACTIVE']->value) {?> disabled="disabled" <?php }?>><span class="fas fa-envelope mr-1"></span><?php echo \App\Language::translate('LBL_SEND_EMAIL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php }?><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></form><!-- /tpl-Base-ExportPDF -->
<?php }
/* smarty_template_function_TEMPLATE_USER_VARIABLE_14959622556589df1210d4c4_63943072 */
if (!function_exists('smarty_template_function_TEMPLATE_USER_VARIABLE_14959622556589df1210d4c4_63943072')) {
function smarty_template_function_TEMPLATE_USER_VARIABLE_14959622556589df1210d4c4_63943072(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
<div class="js-pdf-user-variable row col-12<?php if (!$_smarty_tpl->tpl_vars['TEMPLATE']->value->get('default')) {?> d-none<?php }?>"><?php $_smarty_tpl->_assignInScope('TEMPLATE_CONTENT', ((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value->getBody()).((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value->getHeader()).((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value->getFooter()));
$_smarty_tpl->_assignInScope('TEMPLATE_USER_VARIABLES', $_smarty_tpl->tpl_vars['TEMPLATE']->value->getParser()->getUserVariables($_smarty_tpl->tpl_vars['TEMPLATE_CONTENT']->value));
if ($_smarty_tpl->tpl_vars['TEMPLATE_USER_VARIABLES']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_USER_VARIABLES']->value, 'USER_VARIABLE', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['USER_VARIABLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['USER_VARIABLE']->value) {
$_smarty_tpl->tpl_vars['USER_VARIABLE']->do_else = false;
?><div class="col-md-6 mb-1"><input type="text" name="userVariables[<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
][<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
]"class="form-control form-control-sm"title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['USER_VARIABLE']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"placeholder="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['USER_VARIABLE']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"value="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['USER_VARIABLE']->value['default'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" /></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php
}}
/*/ smarty_template_function_TEMPLATE_USER_VARIABLE_14959622556589df1210d4c4_63943072 */
/* smarty_template_function_TEMPLATE_LIST_14959622556589df1210d4c4_63943072 */
if (!function_exists('smarty_template_function_TEMPLATE_LIST_14959622556589df1210d4c4_63943072')) {
function smarty_template_function_TEMPLATE_LIST_14959622556589df1210d4c4_63943072(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('STANDARD_TEMPLATES'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STANDARD_TEMPLATES']->value, 'TEMPLATE');
$_smarty_tpl->tpl_vars['TEMPLATE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TEMPLATE']->value) {
$_smarty_tpl->tpl_vars['TEMPLATE']->do_else = false;
?><div class="js-pdf-template-content form-group row" data-js="container"><label class="col-sm-11 col-form-label text-left pt-0" for="pdfTpl<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE']->value->get('primary_name'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<span class="secondaryName ml-2">[ <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE']->value->get('secondary_name'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 ]</span></label><div class="col-sm-1"><input type="<?php echo $_smarty_tpl->tpl_vars['SELECT_MODE']->value;?>
" id="pdfTpl<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
" name="pdf_template[]" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['TEMPLATE']->value->get('default') == 1) {?>checked="checked" <?php }?> /></div><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'TEMPLATE_USER_VARIABLE', array(), true);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_TEMPLATE_LIST_14959622556589df1210d4c4_63943072 */
/* smarty_template_function_TEMPLATE_LIST_DYNAMIC_14959622556589df1210d4c4_63943072 */
if (!function_exists('smarty_template_function_TEMPLATE_LIST_DYNAMIC_14959622556589df1210d4c4_63943072')) {
function smarty_template_function_TEMPLATE_LIST_DYNAMIC_14959622556589df1210d4c4_63943072(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('DYNAMIC_TEMPLATES'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DYNAMIC_TEMPLATES']->value, 'TEMPLATE', false, NULL, 'dynamicTemplates', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['TEMPLATE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TEMPLATE']->value) {
$_smarty_tpl->tpl_vars['TEMPLATE']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_dynamicTemplates']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_dynamicTemplates']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_dynamicTemplates']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_dynamicTemplates']->value['total'];
?><div class="dynamic-template-container" data-js="container"><div class="js-pdf-template-content form-group row" data-js="container"><label class="col-sm-11 col-form-label text-left pt-0" for="pdfTpl<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE']->value->get('primary_name'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<span class="secondaryName ml-2">[ <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE']->value->get('secondary_name'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 ]</span></label><div class="col-sm-1"><input type="<?php echo $_smarty_tpl->tpl_vars['SELECT_MODE']->value;?>
" id="pdfTpl<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
" name="pdf_template[]" class="checkbox dynamic-template" data-dynamic="1" value="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['TEMPLATE']->value->get('default') == 1) {?>checked="checked" <?php }?> data-js="change" /></div><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'TEMPLATE_USER_VARIABLE', array(), true);?>
</div><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_dynamicTemplates']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_dynamicTemplates']->value['last'] : null)) {?><h6 class="pt-4 border-top"><label><input type="checkbox" name="isCustomMode" class="mr-2 checkbox" value="1" <?php if (!$_smarty_tpl->tpl_vars['CAN_CHANGE_SCHEME']->value) {?> disabled="disabled" <?php }?>><?php echo \App\Language::translate('LBL_SELECT_COLUMNS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></h6><div class="form-group row"><div class="col"><select class="select2" name="inventoryColumns[]" multiple="multiple" data-select-cb="registerSelectSortable" disabled="disabled" data-js="select2 | sortable"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_INVENTORY_COLUMNS']->value, 'NAME');
$_smarty_tpl->tpl_vars['NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value) {
$_smarty_tpl->tpl_vars['NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
" selected="selected"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ALL_INVENTORY_COLUMNS']->value[$_smarty_tpl->tpl_vars['NAME']->value],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_INVENTORY_COLUMNS']->value, 'LABEL', false, 'NAME');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
if (!in_array($_smarty_tpl->tpl_vars['NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_INVENTORY_COLUMNS']->value)) {?><option value="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php if ($_smarty_tpl->tpl_vars['CAN_CHANGE_SCHEME']->value) {?><div class="row"><div class="col"><button class="btn btn-success js-save-scheme w-100" disabled="disabled" data-js="click"><span class="fas fa-save"></span> <?php echo \App\Language::translate('LBL_SAVE_SCHEME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></div><?php }
}?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_TEMPLATE_LIST_DYNAMIC_14959622556589df1210d4c4_63943072 */
}
