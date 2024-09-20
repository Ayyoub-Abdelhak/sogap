<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:41:01
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\SortOrderModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819d6dc1dea6_53467678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cdbc73089ed26098492917112d13d03f01f8b41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\SortOrderModal.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819d6dc1dea6_53467678 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'SELECT_STRUCTURE' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\yetiforce\\cache\\templates_c\\basic\\0cdbc73089ed26098492917112d13d03f01f8b41_0.file.SortOrderModal.tpl.php',
    'uid' => '0cdbc73089ed26098492917112d13d03f01f8b41',
    'call_name' => 'smarty_template_function_SELECT_STRUCTURE_9358734065819d6dbdcf24_86587499',
  ),
));
?><!-- tpl-Base-Modals-SortOrderModal --><div class="modal-body js-modal-body" data-js="container"><div class="row"><div class="form-group col-12"><button type="button" class="btn btn-default js-add" data-js="click" title="<?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-plus"></span></button></div><div class="form-group col-12 mb-0"><div class="js-sort-container" id="js-sort-container" data-js="container"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'SELECT_STRUCTURE', array('RECORD_STRUCTURES'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURES']->value,'SOURCE_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value,'BASIC'=>true), true);?>
</div></div></div></div><!-- /tpl-Base-Modals-SortOrderModal -->
<?php }
/* smarty_template_function_SELECT_STRUCTURE_9358734065819d6dbdcf24_86587499 */
if (!function_exists('smarty_template_function_SELECT_STRUCTURE_9358734065819d6dbdcf24_86587499')) {
function smarty_template_function_SELECT_STRUCTURE_9358734065819d6dbdcf24_86587499(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('RECORD_STRUCTURES'=>array(),'SOURCE_MODULE_MODEL'=>'','BASIC'=>false), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>
<div class="input-group js-sort-container_element flex-nowrap mb-2<?php if ($_smarty_tpl->tpl_vars['BASIC']->value) {?> js-base-element d-none<?php }?>" data-js="container"><div class="input-group-prepend"><button type="button" class="btn btn-danger js-clear" data-js="click" title="<?php echo \App\Language::translate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"><span class="fas fa-times-circle"></span></button></div><select class="<?php if (!$_smarty_tpl->tpl_vars['BASIC']->value) {?>select2 <?php }?>form-control col-3 js-orderBy" name="orderBy" data-js="val"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURES']->value, 'RECORD_STRUCTURE_FIELD', false, 'MODULE_KEY');
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE_FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_KEY']->value => $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_FIELD']->value) {
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE_FIELD']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_FIELD']->value, 'RECORD_STRUCTURE', false, 'RELATED_FIELD_NAME');
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value) {
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->do_else = false;
$_smarty_tpl->_assignInScope('RELATED_FIELD', $_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value->getFieldByName($_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL');
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->do_else = false;
ob_start();
echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE_KEY']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('BLOCK_LABEL', $_prefixVariable1);
if ($_smarty_tpl->tpl_vars['RELATED_FIELD']->value) {
ob_start();
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_FIELD']->value->getModuleName());
$_prefixVariable2=ob_get_clean();
ob_start();
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_KEY']->value,$_smarty_tpl->tpl_vars['MODULE_KEY']->value);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('BLOCK_LABEL', $_prefixVariable2."&nbsp;-&nbsp;".$_prefixVariable3."&nbsp;-&nbsp;".((string)$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value));
}?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullName();?>
" data-exists="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('source_field_name');?>
"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFullLabelTranslation($_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><div class="input-group-append"><button type="button" class="btn btn-primary js-sort-order-button" data-js="click"><span class="fas fa-sort-amount-up js-sort-icon-active js-sort-icon" data-val="<?php echo \App\Db::ASC;?>
"title="<?php echo \App\Language::translate('LBL_SORT_ASCENDING',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span><span class="fas fa-sort-amount-down d-none js-sort-icon" data-val="<?php echo \App\Db::DESC;?>
"title="<?php echo \App\Language::translate('LBL_SORT_DESCENDING',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span><input type="hidden" class="js-sort-order" name="sortOrder" value="<?php echo \App\Db::ASC;?>
" data-js="val" /></button></div></div><?php
}}
/*/ smarty_template_function_SELECT_STRUCTURE_9358734065819d6dbdcf24_86587499 */
}
