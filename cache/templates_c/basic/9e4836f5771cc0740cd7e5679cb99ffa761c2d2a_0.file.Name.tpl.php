<?php
/* Smarty version 4.2.0, created on 2024-02-20 11:41:14
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\inventoryTypes\Name.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d481caf26f46_90771926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e4836f5771cc0740cd7e5679cb99ffa761c2d2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\inventoryTypes\\Name.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d481caf26f46_90771926 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-inventoryTypes-Name --><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('inventoryTypes/Base.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getParams()) {?><div class="paramsJson"><input value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getParams()));?>
' type="hidden" id="params" /><?php $_smarty_tpl->_assignInScope('PARAMS', \App\Json::decode($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('params')));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getParams(), 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><div class="form-group row align-items-center"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate(('LBL_PARAMS_').(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><?php $_smarty_tpl->_assignInScope('functionName', ($_smarty_tpl->tpl_vars['ITEM']->value).('Values'));?><div class="col-md-7"><div class="input-group"><select class="select2" name="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value == 'modules') {?> data-validation-engine="validate[required]" multiple <?php }?>><?php $_prefixVariable1 = $_smarty_tpl->tpl_vars['functionName']->value;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->$_prefixVariable1(), 'ITEMS', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEMS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEMS']->value) {
$_smarty_tpl->tpl_vars['ITEMS']->do_else = false;
$_smarty_tpl->_assignInScope('CONDITION', 0);
if ((isset($_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value]))) {
if (is_array($_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value]) && in_array($_smarty_tpl->tpl_vars['ITEMS']->value['id'],$_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value])) {
$_smarty_tpl->_assignInScope('CONDITION', 1);
} elseif (!(is_array($_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value])) && $_smarty_tpl->tpl_vars['ITEMS']->value['id'] == $_smarty_tpl->tpl_vars['PARAMS']->value[$_smarty_tpl->tpl_vars['ITEM']->value]) {
$_smarty_tpl->_assignInScope('CONDITION', 1);
}
}?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEMS']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['CONDITION']->value) {?>selected<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['ITEMS']->value['module']))) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEMS']->value['name'],$_smarty_tpl->tpl_vars['ITEMS']->value['module']);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEMS']->value['name'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php if ($_smarty_tpl->tpl_vars['ITEM']->value == 'limit') {?><div class="input-group-append"><?php $_smarty_tpl->_assignInScope('GROSS_PRICE', $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getFieldCleanInstance('GrossPrice'));?><div class="input-group-text js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_PARAMS_LIMIT_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['GROSS_PRICE']->value->getDefaultLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div></div><?php }
if ($_smarty_tpl->tpl_vars['ITEM']->value == 'mandatory') {?><div class="input-group-append"><div class="input-group-text js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_EDIT_MANDATORY_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div></div><?php }?></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?><!-- /tpl-Settings-LayoutEditor-inventoryTypes-Name -->
<?php }
}
