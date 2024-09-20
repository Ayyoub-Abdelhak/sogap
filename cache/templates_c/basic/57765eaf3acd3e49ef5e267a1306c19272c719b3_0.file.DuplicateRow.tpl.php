<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:25:19
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\CustomView\DuplicateRow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658199bfb95263_32272588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57765eaf3acd3e49ef5e267a1306c19272c719b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\CustomView\\DuplicateRow.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658199bfb95263_32272588 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-CustomView-DuplicateRow d-flex my-1"><div class="col-5"><select class="form-control js-duplicates-field" data-js="select2|val"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
" <?php if ((isset($_smarty_tpl->tpl_vars['FIELD']->value['fieldid'])) && $_smarty_tpl->tpl_vars['FIELD']->value['fieldid'] == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId()) {?> selected="selected" <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="col-5 mt-2"><label><?php echo \App\Language::translate('LBL_IGNORE_EMPTY_VALUES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<input type="checkbox" class="ml-2 js-duplicates-ignore" data-js="is"<?php if ((isset($_smarty_tpl->tpl_vars['FIELD']->value['ignore'])) && $_smarty_tpl->tpl_vars['FIELD']->value['ignore']) {?>checked<?php }?>></label></div><div class="col-2"><button type="button" class="btn btn-sm btn-danger js-duplicates-remove" data-js="click"><span class="fa fa-trash"></span></button></div></div>
<?php }
}
