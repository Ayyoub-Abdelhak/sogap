<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:57:24
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\VariablePanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ea61476fa08_93682129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '721c18168e2ad67475ab1c4c3e4135584bef26cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\VariablePanel.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ea61476fa08_93682129 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['TEXT_PARSER']->value)) {
$_smarty_tpl->_assignInScope('TEXT_PARSER', \App\TextParser::getInstance($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value));
}
if (!empty($_smarty_tpl->tpl_vars['PARSER_TYPE']->value)) {
$_smarty_tpl->_assignInScope('TEXT_PARSER', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->setType($_smarty_tpl->tpl_vars['PARSER_TYPE']->value));
}
if ($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value && App\Module::getEntityInfo($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value)) {?><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_MODULE_FIELDS','Other.TextParser');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2 form-control" id="recordVariable" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getRecordVariable(), 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
"data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['label'],$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#recordVariable" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button><button type="button" class="btn btn-success clipboard" data-copy-target="#recordVariable" data-copy-type="label" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
  - <?php echo \App\Language::translate('LBL_COPY_LABEL','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php $_smarty_tpl->_assignInScope('RELATED_VARIABLE', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getRelatedVariable());
if ($_smarty_tpl->tpl_vars['RELATED_VARIABLE']->value) {?><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_DEPENDENT_MODULE_FIELDS','Other.TextParser');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2 form-control" id="relatedVariable" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_VARIABLE']->value, 'FIELDS');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'RELATED_FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['RELATED_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['RELATED_FIELDS']->value) {
$_smarty_tpl->tpl_vars['RELATED_FIELDS']->do_else = false;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_FIELDS']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['label'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#relatedVariable" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button><button type="button" class="btn btn-success clipboard" data-copy-target="#relatedVariable" data-copy-type="label" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
  - <?php echo \App\Language::translate('LBL_COPY_LABEL','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }
$_smarty_tpl->_assignInScope('RELATED_LEVEL_VARIABLE', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getRelatedLevelVariable());
if ($_smarty_tpl->tpl_vars['RELATED_LEVEL_VARIABLE']->value) {?><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_DEPENDENT_NEXT_LEVEL_MODULE_FIELDS','Other.TextParser');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2 form-control" id="relatedRecordLevel" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LEVEL_VARIABLE']->value, 'RELATED_FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['RELATED_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['RELATED_FIELDS']->value) {
$_smarty_tpl->tpl_vars['RELATED_FIELDS']->do_else = false;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_FIELDS']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['label'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#relatedRecordLevel" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button><button type="button" class="btn btn-success clipboard" data-copy-target="#relatedRecordLevel" data-copy-type="label" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
  - <?php echo \App\Language::translate('LBL_COPY_LABEL','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }
$_smarty_tpl->_assignInScope('SOURCE_VARIABLE', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getSourceVariable());
if ($_smarty_tpl->tpl_vars['SOURCE_VARIABLE']->value) {?><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_SOURCE_MODULE_FIELDS','Other.TextParser');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2" id="sourceVariable" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_VARIABLE']->value, 'BLOCKS', false, 'SOURCE_MODULE');
$_smarty_tpl->tpl_vars['BLOCKS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value => $_smarty_tpl->tpl_vars['BLOCKS']->value) {
$_smarty_tpl->tpl_vars['BLOCKS']->do_else = false;
if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'LBL_ENTITY_VARIABLES') {?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,'Other.TextParser');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
"data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['label'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php } else {
$_smarty_tpl->_assignInScope('SOURCE_LABEL', \App\Language::translate(\App\Language::getSingularModuleName($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['SOURCE_LABEL']->value;?>
 - <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
"data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo $_smarty_tpl->tpl_vars['SOURCE_LABEL']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['ITEM']->value['label'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#sourceVariable" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button><button type="button" class="btn btn-success clipboard" data-copy-target="#sourceVariable" data-copy-type="label" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
  - <?php echo \App\Language::translate('LBL_COPY_LABEL','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }
if (!(isset($_smarty_tpl->tpl_vars['RELATED_LISTS']->value))) {
$_smarty_tpl->_assignInScope('RELATED_LISTS', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getRelatedListVariable());
}
if ($_smarty_tpl->tpl_vars['RELATED_LISTS']->value) {?><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_RELATED_RECORDS_LIST','Other.TextParser');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2 form-control" id="relatedLists" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LISTS']->value, 'MODULE_LIST');
$_smarty_tpl->tpl_vars['MODULE_LIST']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_LIST']->value) {
$_smarty_tpl->tpl_vars['MODULE_LIST']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_LIST']->value['key'];?>
"><?php echo $_smarty_tpl->tpl_vars['MODULE_LIST']->value['label'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#relatedLists" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }
}
if (!(isset($_smarty_tpl->tpl_vars['BASE_LISTS']->value))) {
$_smarty_tpl->_assignInScope('BASE_LISTS', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getBaseListVariable());
}
if ($_smarty_tpl->tpl_vars['BASE_LISTS']->value) {?><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_RECORDS_LIST');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2 form-control" id="recordList" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BASE_LISTS']->value, 'MODULE_LIST');
$_smarty_tpl->tpl_vars['MODULE_LIST']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_LIST']->value) {
$_smarty_tpl->tpl_vars['MODULE_LIST']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_LIST']->value['key'];?>
"><?php echo $_smarty_tpl->tpl_vars['MODULE_LIST']->value['label'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#recordList" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }?><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_ADDITIONAL_VARIABLES','Other.TextParser');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2 form-control" id="generalVariable" data-container-class-css="form-control" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getGeneralVariable(), 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,'Other.TextParser');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'LABEL', false, 'VARIABLE');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VARIABLE']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['VARIABLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#generalVariable" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_ORGANIZATION','Other.TextParser');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2 form-control js-company-list" id="companyList" data-container-class-css="form-control" data-width="style" data-js="val"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\MultiCompany::getAll(), 'DATA', false, 'KEY');
$_smarty_tpl->tpl_vars['DATA']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['DATA']->value) {
$_smarty_tpl->tpl_vars['DATA']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value['multicompanyid'];?>
"><?php echo $_smarty_tpl->tpl_vars['DATA']->value['company_name'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="col-sm-6 row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_COMPANY_VARIABLES','Other.TextParser');?>
</label><div class="medium w-100 col-lg-12 col-xl-9 fieldValue"><div class="input-group"><select class="select2 form-control js-company-variable" id="companyVariable" data-container-class-css="form-control" data-width="style" data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \Vtiger_Module_Model::getInstance('MultiCompany')->getBlocks(), 'BLOCK_OBJ', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['BLOCK_OBJ']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['BLOCK_OBJ']->value) {
$_smarty_tpl->tpl_vars['BLOCK_OBJ']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,'MultiCompany');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_OBJ']->value->getFields(), 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><option value="$(organization : 1|<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getFieldName();?>
)$"data-value-template="$(organization :__X__|<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getFieldName();?>
)$"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),'MultiCompany');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#companyVariable" title="<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
"><span class="fas fa-copy"></span></button></div></div></div></div>
<?php }
}
