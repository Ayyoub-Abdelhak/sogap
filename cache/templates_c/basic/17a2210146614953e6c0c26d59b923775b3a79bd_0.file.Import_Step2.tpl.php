<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:37:22
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Import\Import_Step2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818e8214e460_46975155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a2210146614953e6c0c26d59b923775b3a79bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Import\\Import_Step2.tpl',
      1 => 1702905741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818e8214e460_46975155 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='col-md-12 px-0'><div><div><strong><?php echo \App\Language::translate('LBL_IMPORT_STEP_2',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: </strong> <?php echo \App\Language::translate('LBL_IMPORT_STEP_2_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div>&nbsp;</div></div><div class="form-row pb-2"><div class="col-md-4 px-4"><span><?php echo \App\Language::translate('LBL_FILE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-md-6"><select name="type" class="form-control js-type" data-js="value" title="<?php echo \App\Language::translate('LBL_FILE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" onchange="ImportJs.handleFileTypeChange();"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_FILE_TYPES']->value, '_FILE_TYPE');
$_smarty_tpl->tpl_vars['_FILE_TYPE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_FILE_TYPE']->value) {
$_smarty_tpl->tpl_vars['_FILE_TYPE']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['_FILE_TYPE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_FILE_TYPE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-row pb-2"><div class="col-md-4 px-4"><span><?php echo \App\Language::translate('LBL_CHARACTER_ENCODING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-md-6"><select name="file_encoding" class="form-control" title="<?php echo \App\Language::translate('LBL_CHARACTER_ENCODING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_FILE_ENCODING']->value, '_FILE_ENCODING_LABEL', false, '_FILE_ENCODING');
$_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_FILE_ENCODING']->value => $_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->value) {
$_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['_FILE_ENCODING']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_FILE_ENCODING_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-row pb-2 js-delimiter-container" data-js="class: d-none"><div class="col-md-4 px-4"><span><?php echo \App\Language::translate('LBL_DELIMITER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-md-6"><select name="delimiter" class="form-control" title="<?php echo \App\Language::translate('LBL_DELIMITER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUPPORTED_DELIMITERS']->value, '_DELIMITER_LABEL', false, '_DELIMITER');
$_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_DELIMITER']->value => $_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->value) {
$_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['_DELIMITER']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['_DELIMITER_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-row pb-2 js-zip-extension d-none" data-js="class: d-none"><div class="col-md-4 px-4"><span><?php echo \App\Language::translate('LBL_EXTENSION_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-md-6"><select name="extension" class="select2" title="<?php echo \App\Language::translate('LBL_EXTENSION_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Import_ZipReader_Reader::getAllowedExtension(), 'EXTENSION_NAME', false, 'EXTENSION_VALUE');
$_smarty_tpl->tpl_vars['EXTENSION_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['EXTENSION_VALUE']->value => $_smarty_tpl->tpl_vars['EXTENSION_NAME']->value) {
$_smarty_tpl->tpl_vars['EXTENSION_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION_VALUE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['EXTENSION_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-row pb-2 js-xml-tpl d-none" data-js="class: d-none"><div class="col-md-4 px-4"><span><?php echo \App\Language::translate('LBL_XML_EXPORT_TPL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-md-6"><select name="xml_import_tpl" class="select2" title="<?php echo \App\Language::translate('LBL_XML_EXPORT_TPL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><option value="0"><?php echo \App\Language::translate('LBL_DEFAULT');?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['XML_IMPORT_TPL']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value,'Import');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-row pb-2 js-has-header-container" data-js="class: d-none"><div class="col-md-4 px-4"><span><?php echo \App\Language::translate('LBL_HAS_HEADER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div><div class="col-md-6"><input type="checkbox" id="has_header" name="has_header" title="<?php echo \App\Language::translate('LBL_HAS_HEADER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" checked /></div></div></div>
<?php }
}
