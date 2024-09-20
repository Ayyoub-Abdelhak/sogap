<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:44:03
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Leads\LeadMappingEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f85333558246_21920675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12b7896d5e4513e8399c37ad391bbeba0924a3b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Leads\\LeadMappingEdit.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f85333558246_21920675 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=""><form id="leadsMapping" method="POST"><div class="row widget_header settingsHeader mb-1 align-items-center"><span class="col-sm-12 col-12 col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></span><span class="col-12 col-sm-12 col-md-4 "><span class="float-right"><button type="submit" class="btn btn-success"><strong><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="cancelLink btn btn-danger" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></span></span></div><div class="contents table-responsive" id="detailView"><table class="table customTableRWD table-bordered" id="convertLeadMapping"><thead><tr class="blockHeader"><th data-hide='phone,' class="blockHeader"><?php echo \App\Language::translate('LBL_FIELD_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide='phone' class="blockHeader"><?php echo \App\Language::translate('LBL_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide='phone' class="blockHeader"><?php echo \App\Language::translate('LBL_MAPPING_WITH_OTHER_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getHeaders(), 'LABEL', false, 'key', 'header', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_header']->value['iteration']++;
?><th <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_header']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_header']->value['iteration'] : null) > 2) {?>data-hide='phone' <?php }?>><b><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['LABEL']->value);?>
</b></th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMapping(), 'MAPPING_ARRAY', false, 'MAPPING_ID', 'mappingLoop', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING_ID']->value => $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value) {
$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']++;
?><tr class="listViewEntries" sequence-number="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration'] : null);?>
"><td><input type="hidden" name="mapping[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration'] : null);?>
][mappingId]" value="<?php echo $_smarty_tpl->tpl_vars['MAPPING_ID']->value;?>
" /><select class="leadsFields select2" name="mapping[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration'] : null);?>
][lead]"><option data-type="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0" label="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getFields(), 'FIELDS_INFO', false, 'FIELD_TYPE');
$_smarty_tpl->tpl_vars['FIELDS_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->value => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value) {
$_smarty_tpl->tpl_vars['FIELDS_INFO']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_INFO']->value, 'FIELD_OBJECT', false, 'FIELD_ID');
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_ID']->value => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value) {
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->do_else = false;
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_ID']->value == $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Leads']['id']) {?> selected <?php }?> label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td><td class="selectedFieldDataType textAlignCenter"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Leads']['fieldDataType'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td><select class="accountsFields select2" name="mapping[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration'] : null);?>
][account]"><option data-type="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0" label="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getFields(), 'FIELDS_INFO', false, 'FIELD_TYPE');
$_smarty_tpl->tpl_vars['FIELDS_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->value => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value) {
$_smarty_tpl->tpl_vars['FIELDS_INFO']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_INFO']->value, 'FIELD_OBJECT', false, 'FIELD_ID');
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_ID']->value => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value) {
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->do_else = false;
if ($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Leads']['fieldDataType'] == $_smarty_tpl->tpl_vars['FIELD_TYPE']->value) {?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Accounts']['id'])) && $_smarty_tpl->tpl_vars['FIELD_ID']->value == $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value['Accounts']['id']) {?> selected <?php }?> label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><tr class="d-none newMapping listViewEntries bg-warning"><td><select class="leadsFields newSelect"><option data-type="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0" label="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getFields(), 'FIELDS_INFO', false, 'FIELD_TYPE');
$_smarty_tpl->tpl_vars['FIELDS_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->value => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value) {
$_smarty_tpl->tpl_vars['FIELDS_INFO']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_INFO']->value, 'FIELD_OBJECT', false, 'FIELD_ID');
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_ID']->value => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value) {
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->do_else = false;
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td><td class="selectedFieldDataType textAlignCenter alignMiddle"></td><td><select class="accountsFields newSelect"><option data-type="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" label="<?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="0"><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getFields(), 'FIELDS_INFO', false, 'FIELD_TYPE');
$_smarty_tpl->tpl_vars['FIELDS_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->value => $_smarty_tpl->tpl_vars['FIELDS_INFO']->value) {
$_smarty_tpl->tpl_vars['FIELDS_INFO']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_INFO']->value, 'FIELD_OBJECT', false, 'FIELD_ID');
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_ID']->value => $_smarty_tpl->tpl_vars['FIELD_OBJECT']->value) {
$_smarty_tpl->tpl_vars['FIELD_OBJECT']->do_else = false;
?><option data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_OBJECT']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr></tbody></table></div><div class="row pushDown"><span class="col-md-4"><button id="addMapping" class="btn btn-info addButton" type="button"><span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_ADD_MAPPING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><span class="col-md-8"><span class="float-right"><button type="submit" class="btn btn-success"><strong><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="cancelLink btn btn-danger" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></span></span></div></form></div><br />
<?php }
}
