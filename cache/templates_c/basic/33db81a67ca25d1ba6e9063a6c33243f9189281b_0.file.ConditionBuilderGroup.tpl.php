<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:25:20
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\ConditionBuilderGroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658199c02db946_69372733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33db81a67ca25d1ba6e9063a6c33243f9189281b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\ConditionBuilderGroup.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658199c02db946_69372733 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ConditionBuilderGroup --><div class="c-condition-builder__group pt-2 js-condition-builder-group-container"><div class="btn-group btn-group-toggle js-condition-switch mr-2" data-toggle="buttons"><?php $_smarty_tpl->_assignInScope('GROUP_OPTION_ACTIVE', empty($_smarty_tpl->tpl_vars['CONDITIONS_GROUP']->value['condition']) || ($_smarty_tpl->tpl_vars['CONDITIONS_GROUP']->value['condition'] == 'AND'));?><label class="btn btn-sm btn-outline-primary js-condition-switch-value <?php if ($_smarty_tpl->tpl_vars['GROUP_OPTION_ACTIVE']->value) {?> active <?php }?>"><input type="radio" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['GROUP_OPTION_ACTIVE']->value) {?> checked <?php }?>>AND</label><?php $_smarty_tpl->_assignInScope('GROUP_OPTION_ACTIVE', !empty($_smarty_tpl->tpl_vars['CONDITIONS_GROUP']->value['condition']) && $_smarty_tpl->tpl_vars['CONDITIONS_GROUP']->value['condition'] == 'OR');?><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['GROUP_OPTION_ACTIVE']->value) {?> active <?php }?>"><input type="radio" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['GROUP_OPTION_ACTIVE']->value) {?> checked <?php }?>>OR</label></div><div class="btn-group btn-group-toggle"><button type="button" class="btn btn-sm btn-success js-condition-add" data-js="click"><span class="yfi yfi-users-2 mr-1"></span><?php echo \App\Language::translate('LBL_ADD_CONDITION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><button type="button" class="btn btn-sm c-btn-light-green js-group-add" data-js="click"><span class="adminIcon-groups mr-1"></span><?php echo \App\Language::translate('LBL_ADD_CONDITION_GROUP',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php if (empty($_smarty_tpl->tpl_vars['ROOT_ITEM']->value)) {?><button type="button" class="btn btn-sm btn-danger js-group-delete" data-js="click"><span class="fa fa-trash"></span></button><?php }?></div><div class="js-condition-builder-conditions-container"><?php if (!empty($_smarty_tpl->tpl_vars['CONDITIONS_GROUP']->value['condition']) && !empty($_smarty_tpl->tpl_vars['CONDITIONS_GROUP']->value['rules'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONDITIONS_GROUP']->value['rules'], 'CONDITION_ITEM');
$_smarty_tpl->tpl_vars['CONDITION_ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CONDITION_ITEM']->value) {
$_smarty_tpl->tpl_vars['CONDITION_ITEM']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['CONDITION_ITEM']->value['condition']))) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilderGroup.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CONDITIONS_GROUP'=>$_smarty_tpl->tpl_vars['CONDITION_ITEM']->value,'ROOT_ITEM'=>false), 0, true);
} else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ConditionBuilderRow.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CONDITIONS_ROW'=>$_smarty_tpl->tpl_vars['CONDITION_ITEM']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></div><!-- /tpl-Base-ConditionBuilderGroup -->
<?php }
}
