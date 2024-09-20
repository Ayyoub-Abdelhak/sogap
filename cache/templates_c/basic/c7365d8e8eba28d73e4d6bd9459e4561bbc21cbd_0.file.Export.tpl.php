<?php
/* Smarty version 4.2.0, created on 2023-12-19 17:08:05
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581bfe56bca30_85749677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7365d8e8eba28d73e4d6bd9459e4561bbc21cbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Export.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581bfe56bca30_85749677 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='widget_header row '><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div><form id="exportForm" class="form-horizontal row" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="ExportData" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['VIEWID']->value;?>
" /><input type="hidden" name="selected_ids" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value));?>
"><input type="hidden" name="excluded_ids" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value));?>
"><input type="hidden" id="page" name="page" value="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value;?>
" /><input type="hidden" name="search_key" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" /><input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" name="search_params" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['SEARCH_PARAMS']->value));?>
" /><input type="hidden" name="entityState" value="<?php echo $_smarty_tpl->tpl_vars['ENTITY_STATE']->value;?>
" /><input type="hidden" name="advancedConditions" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ADVANCED_CONDITIONS']->value));?>
" /><div class="col-md-8"><div class="p-3 card bg-light exportContents ml-0 my-2"><div class="radio"><label title="<?php echo \App\Language::translate('LBL_EXPORT_SELECTED_RECORDS');?>
"><input class="mr-1" type="radio" name="mode" id="optionsRadios1" value="ExportSelectedRecords" <?php if (!empty($_smarty_tpl->tpl_vars['SELECTED_IDS']->value)) {?> checked="checked" <?php } else { ?> disabled="disabled" <?php }?>><?php echo \App\Language::translate('LBL_EXPORT_SELECTED_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);
if (empty($_smarty_tpl->tpl_vars['SELECTED_IDS']->value)) {?>&nbsp; - <span class="redColor"><?php echo \App\Language::translate('LBL_NO_RECORD_SELECTED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><?php }?></label></div><div class="radio"><label title="<?php echo \App\Language::translate('LBL_EXPORT_DATA_IN_CURRENT_PAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><input class="mr-1" type="radio" name="mode" id="optionsRadios2" value="ExportCurrentPage"><?php echo \App\Language::translate('LBL_EXPORT_DATA_IN_CURRENT_PAGE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="radio"><label title="<?php echo \App\Language::translate('LBL_EXPORT_ALL_DATA',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><input class="mr-1" type="radio" name="mode" id="optionsRadios3" value="ExportAllData" <?php if (empty($_smarty_tpl->tpl_vars['SELECTED_IDS']->value)) {?> checked="checked" <?php }?>><?php echo \App\Language::translate('LBL_EXPORT_ALL_DATA',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><br /><hr><div class="row"><div class="col-md-6"><label class=""><?php echo \App\Language::translate('LBL_EXPORT_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class=""><select class="select2" id="exportType" name="export_type"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EXPORT_TYPE']->value, 'TYPE', false, 'LABEL');
$_smarty_tpl->tpl_vars['TYPE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->value => $_smarty_tpl->tpl_vars['TYPE']->value) {
$_smarty_tpl->tpl_vars['TYPE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['LABEL']->value;
$_prefixVariable1 = ob_get_clean();
echo \App\Language::translate($_prefixVariable1,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php if ($_smarty_tpl->tpl_vars['XML_TPL_LIST']->value) {?><div class="col-md-6 d-none xml-tpl"><label class=""><?php echo \App\Language::translate('LBL_XML_EXPORT_TPL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class=""><select class="select2" id="xmlExportType" name="xmlExportType"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['XML_TPL_LIST']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value;
$_prefixVariable2 = ob_get_clean();
echo \App\Language::translate($_prefixVariable2,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php }?></div></div><div class="float-left"><button class="btn btn-success saveButton mr-3" type="submit"><strong><span class="fas fa-upload mr-2"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" onclick='window.history.back()'><span class="fas fa-times mr-2"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></form></div>
<?php }
}
