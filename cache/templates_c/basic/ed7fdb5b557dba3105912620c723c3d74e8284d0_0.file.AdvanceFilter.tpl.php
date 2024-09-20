<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:50:20
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\AdvanceFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d483ec788d97_81703078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed7fdb5b557dba3105912620c723c3d74e8284d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\AdvanceFilter.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d483ec788d97_81703078 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['ADVANCE_CRITERIA']->value[1])) {
$_smarty_tpl->_assignInScope('ALL_CONDITION_CRITERIA', $_smarty_tpl->tpl_vars['ADVANCE_CRITERIA']->value[1]);
}
if (!empty($_smarty_tpl->tpl_vars['ADVANCE_CRITERIA']->value[2])) {
$_smarty_tpl->_assignInScope('ANY_CONDITION_CRITERIA', $_smarty_tpl->tpl_vars['ADVANCE_CRITERIA']->value[2]);
}
if (empty($_smarty_tpl->tpl_vars['ALL_CONDITION_CRITERIA']->value)) {
$_smarty_tpl->_assignInScope('ALL_CONDITION_CRITERIA', array());
}
if (empty($_smarty_tpl->tpl_vars['ANY_CONDITION_CRITERIA']->value)) {
$_smarty_tpl->_assignInScope('ANY_CONDITION_CRITERIA', array());
}?><div class="filterContainer"><input type="hidden" name="date_filters" data-value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['DATE_FILTERS']->value));?>
"/><input type="hidden" name="advanceFilterOpsByFieldType" data-value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS_BY_TYPE']->value));?>
"/><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS']->value, 'ADVANCE_FILTER_OPTION', false, 'ADVANCE_FILTER_OPTION_KEY');
$_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION_KEY']->value => $_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION']->value) {
$_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION']->do_else = false;
ob_start();
echo \App\Language::translate($_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION']->value,$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS']) ? $_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['ADVANCE_FILTER_OPTION_KEY']->value] = htmlspecialchars((string)$_prefixVariable1, ENT_QUOTES, 'UTF-8', true);
$_smarty_tpl->_assignInScope('ADVANCED_FILTER_OPTIONS', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><input type="hidden" name="advanceFilterOptions" data-value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ADVANCED_FILTER_OPTIONS']->value));?>
"/><div class="allConditionContainer mb-3 conditionGroup bg-white border well"><div class="header"><span><strong><?php echo \App\Language::translate('LBL_ALL_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span>&nbsp;<span>(<?php echo \App\Language::translate('LBL_ALL_CONDITIONS_DESC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
)</span></div><div class="contents"><div class="conditionList"><?php if (!empty($_smarty_tpl->tpl_vars['ALL_CONDITION_CRITERIA']->value['columns'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_CONDITION_CRITERIA']->value['columns'], 'CONDITION_INFO');
$_smarty_tpl->tpl_vars['CONDITION_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CONDITION_INFO']->value) {
$_smarty_tpl->tpl_vars['CONDITION_INFO']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilterCondition.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'CONDITION_INFO'=>$_smarty_tpl->tpl_vars['CONDITION_INFO']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><div class="d-none basic"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilterCondition.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'CONDITION_INFO'=>array(),'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value,'NOCHOSEN'=>true), 0, true);
?></div><div class="addCondition"><button type="button" class="btn btn-light pushDown"><strong><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD_CONDITION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div class="groupCondition"><?php if (!empty($_smarty_tpl->tpl_vars['ALL_CONDITION_CRITERIA']->value['condition'])) {
$_smarty_tpl->_assignInScope('GROUP_CONDITION', $_smarty_tpl->tpl_vars['ALL_CONDITION_CRITERIA']->value['condition']);
} else {
$_smarty_tpl->_assignInScope('GROUP_CONDITION', "and");
}?><input type="hidden" name="condition" value="<?php echo $_smarty_tpl->tpl_vars['GROUP_CONDITION']->value;?>
"/></div></div></div><div class="anyConditionContainer conditionGroup bg-white border mb-3 well"><div class="header"><span><strong><?php echo \App\Language::translate('LBL_ANY_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span>&nbsp;<span>(<?php echo \App\Language::translate('LBL_ANY_CONDITIONS_DESC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
)</span></div><div class="contents"><div class="conditionList"><?php if (!empty($_smarty_tpl->tpl_vars['ANY_CONDITION_CRITERIA']->value['columns'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ANY_CONDITION_CRITERIA']->value['columns'], 'CONDITION_INFO');
$_smarty_tpl->tpl_vars['CONDITION_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CONDITION_INFO']->value) {
$_smarty_tpl->tpl_vars['CONDITION_INFO']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilterCondition.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'CONDITION_INFO'=>$_smarty_tpl->tpl_vars['CONDITION_INFO']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value,'CONDITION'=>"or"), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><div class="d-none basic"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilterCondition.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value,'CONDITION_INFO'=>array(),'CONDITION'=>"or",'NOCHOSEN'=>true), 0, true);
?></div><div class="addCondition"><button type="button" class="btn btn-light pushDown"><strong><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD_CONDITION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div class="groupCondition"><?php if (!empty($_smarty_tpl->tpl_vars['ANY_CONDITION_CRITERIA']->value['condition'])) {
$_smarty_tpl->_assignInScope('GROUP_CONDITION', $_smarty_tpl->tpl_vars['ANY_CONDITION_CRITERIA']->value['condition']);
} else {
$_smarty_tpl->_assignInScope('GROUP_CONDITION', "and");
}?><input type="hidden" name="condition" value="<?php echo $_smarty_tpl->tpl_vars['GROUP_CONDITION']->value;?>
"/></div></div></div></div>
<?php }
}
