<?php
/* Smarty version 4.2.0, created on 2024-09-12 15:26:47
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PickListDependency\ConditionList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66e2fa27a52d17_67386286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9c7cee9167120259a6531e4e62c355be36d5edf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PickListDependency\\ConditionList.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e2fa27a52d17_67386286 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-PickListDependency-ConditionList --><div><div class="m-0"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_PICKLIST_VALUES']->value, 'item', false, 'key', 'source_base_loop', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->_assignInScope('SHOW_BLOCK', (isset($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value[$_smarty_tpl->tpl_vars['key']->value])));?><div class="js-toggle-panel c-panel" data-js="click"><div class="blockHeader c-panel__header py-2"><span class="iconToggle fas <?php if ($_smarty_tpl->tpl_vars['SHOW_BLOCK']->value) {?>fa-chevron-down<?php } else { ?>fa-chevron-right<?php }?> fa-xs m-2" data-hide="fas fa-chevron-right" data-show="fas fa-chevron-down"></span><h5><span class=" mr-2" aria-hidden="true"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</h5></div><div class="c-panel__body p-2 js-block-content <?php if (!$_smarty_tpl->tpl_vars['SHOW_BLOCK']->value) {?>d-none<?php }?>"><div class="col-12 js-field-container"><input type="hidden" name="conditions[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" class="js-condition-value" value="[]" /><?php $_smarty_tpl->_assignInScope('ADVANCE_CRITERIA', array());
if ((isset($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value[$_smarty_tpl->tpl_vars['key']->value]))) {
$_smarty_tpl->_assignInScope('ADVANCE_CRITERIA', \App\Json::decode($_smarty_tpl->tpl_vars['MAPPED_VALUES']->value[$_smarty_tpl->tpl_vars['key']->value]));
}?><div class="js-condition-builder-container"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilder.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'ADVANCE_CRITERIA'=>$_smarty_tpl->tpl_vars['ADVANCE_CRITERIA']->value), 0, true);
?></div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><div class="c-form__action-panel"><button class="btn btn-success js-pd-save" type="button"><span class="fas fa-check mr-2"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-danger ml-2" type="reset" onclick="javascript:window.history.back();"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><!-- /tpl-Settings-PickListDependency-ConditionList -->
<?php }
}
