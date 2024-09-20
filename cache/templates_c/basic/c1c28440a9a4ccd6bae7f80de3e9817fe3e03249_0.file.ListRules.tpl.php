<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:17:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\SharingAccess\ListRules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6595344675ced3_32998377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1c28440a9a4ccd6bae7f80de3e9817fe3e03249' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\SharingAccess\\ListRules.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6595344675ced3_32998377 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ruleListContainer"><div class="title row"><div class="rulehead col-md-6"><!-- Check if the module should the for module to get the translations--><strong><?php echo \App\Language::translate('LBL_SHARING_RULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo \App\Language::translate('LBL_FOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['FOR_MODULE']->value == 'Accounts') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);
}?>:</strong></div><div class="col-md-6"><button class="btn btn-success js-add-custom-rule float-right" data-js="click" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRuleUrl();?>
"><strong><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD_CUSTOM_RULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div><hr><div class="contents p-3"><?php if ($_smarty_tpl->tpl_vars['RULE_MODEL_LIST']->value) {?><table class="table table-bordered table-sm js-custom-rule-table" data-js="container"><thead><tr class="js-custom-rule-headers" data-js="remove"><th><?php echo \App\Language::translate('LBL_RULE_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><!-- Check if the module should the for module to get the translations --><th><?php if ($_smarty_tpl->tpl_vars['FOR_MODULE']->value == 'Accounts') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['FOR_MODULE']->value);
}?>&nbsp;<?php echo \App\Language::translate('LBL_OF',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_CAN_ACCESSED_BY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_PRIVILEGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RULE_MODEL_LIST']->value, 'RULE_MODEL', false, 'RULE_ID', 'customRuleIterator', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['RULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RULE_ID']->value => $_smarty_tpl->tpl_vars['RULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['RULE_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_customRuleIterator']->value['index']++;
?><tr class="js-custom-rule-entries" data-js="container"><td class="js-sequence-number" data-js="text"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_customRuleIterator']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_customRuleIterator']->value['index'] : null)+1;?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getSourceDetailViewUrl();?>
"><?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getSourceMemberName()),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getSourceMember()->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></td><td><a href="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getTargetDetailViewUrl();?>
"><?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getTargetMemberName()),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getTargetMember()->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></td><td><?php if ($_smarty_tpl->tpl_vars['RULE_MODEL']->value->isReadOnly()) {
echo \App\Language::translate('Read Only',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate('Read Write',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?><div class="float-right"><button type="button" class="js-edit btn btn-sm btn-primary mr-2" data-js="click" data-url="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getEditViewUrl();?>
"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="yfi yfi-full-editing-view"></span></button><button type="button" class="js-delete btn btn-sm btn-danger" data-js="click" data-url="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getDeleteActionUrl();?>
"><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fas fa-trash-alt"></span></button></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="js-record-details d-none" data-js="removeClass:d-none"><p class="text-center"><?php echo \App\Language::translate('LBL_CUSTOM_ACCESS_MESG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.<!--<a href=""><?php echo \App\Language::translate('LBL_CLICK_HERE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>&nbsp;<?php echo \App\Language::translate('LBL_CREATE_RULE_MESG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
--></p></div><?php } else { ?><div class="js-record-details" data-js="removeClass:d-none"><p class="text-center"><?php echo \App\Language::translate('LBL_CUSTOM_ACCESS_MESG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.<!--<a href=""><?php echo \App\Language::translate('LBL_CLICK_HERE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>&nbsp;<?php echo \App\Language::translate('LBL_CREATE_RULE_MESG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
--></p></div><?php }?></div></div>
<?php }
}
