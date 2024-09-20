<?php
/* Smarty version 4.2.0, created on 2023-12-26 21:09:08
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\inventoryTypes\Base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658b32e4ec9781_63721960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14032db6eac3068b1219ccc01ab75d5dd8c7d649' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\inventoryTypes\\Base.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658b32e4ec9781_63721960 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-inventoryTypes-Base --><div class="form-group row align-items-center"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group row"><div class="col-md-4 col-form-label text-right"><?php echo \App\Language::translate('LBL_COLSPAN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-7"><div class=" input-group"><input name="colSpan" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_INSTANCE']->value->getColSpan();?>
" type="text" class="form-control" data-validation-engine="validate[required, custom[integer]]" /><div class="input-group-append"><div class="input-group-text js-popover-tooltip u-cursor-pointer" data-js="popover" data-placement="top" data-content="<?php echo App\Language::translate('LBL_MAX_WIDTH_COLUMN_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div></div></div></div></div><!-- /tpl-Settings-LayoutEditor-inventoryTypes-Base -->
<?php }
}
