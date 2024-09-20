<?php
/* Smarty version 4.2.0, created on 2024-01-03 12:47:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\inventoryTypes\Comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6595493d7cb835_02740720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '799f919a511370444fc726863b9f08b126f007dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\inventoryTypes\\Comment.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6595493d7cb835_02740720 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-inventoryTypes-Comment --><div class="form-group row align-items-center"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-7"><?php $_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getDefaultLabel());
if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('label')) {
$_smarty_tpl->_assignInScope('LABEL', $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('label'));
}?><input name="label" value="<?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
" type="text" class="form-control" data-validation-engine="validate[required]" /></div></div><div class="form-group row align-items-center"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_DISPLAY_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-7"><select class='form-control select2' name="displayType" data-validation-engine="validate[required]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->displayTypeBase(), 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ITEM']->value == $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->get('displayType')) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['KEY']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><?php if ($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getParams()) {?><div class="paramsJson"><input value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getParams()));?>
'type="hidden" id="params" /><div class="form-group paramsJson"><div class="form-group row"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_COLSPAN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-7"><div class=" input-group"><input name="width" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getWidth();?>
" type="text" class="form-control" data-validation-engine="validate[required, custom[integer]]" /><div class="input-group-append"><div class="input-group-text js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo App\Language::translate('LBL_MAX_WIDTH_COLUMN_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div></div></div></div></div></div><div class="form-group paramsJson"><div class="form-group row"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_HEIGHT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-7"><div class=" input-group"><input name="height" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getHeight();?>
" type="text" class="form-control" data-validation-engine="validate[required, custom[integer]]" /></div></div></div></div></div><?php }?><!-- /tpl-Settings-LayoutEditor-inventoryTypes-Comment -->
<?php }
}
