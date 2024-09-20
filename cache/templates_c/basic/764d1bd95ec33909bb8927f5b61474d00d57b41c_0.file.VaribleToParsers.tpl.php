<?php
/* Smarty version 4.2.0, created on 2024-04-30 12:03:58
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\VaribleToParsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6630d01e829e39_98513573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '764d1bd95ec33909bb8927f5b61474d00d57b41c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\VaribleToParsers.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630d01e829e39_98513573 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-VaribleToParsers --><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_CUSTOM_VARIABLES','Other::TextParser');?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body row"><div class="col-md-12"><select class="col-md-2 select2" name="varibles" data-validation-engine="validate[required]" data-fieldinfo='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VARIBLES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->do_else = false;
?><option value=""><?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_VALUE']->value == $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {?> selected="" <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value,'Other::TextParser');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></div></div><!-- /tpl-Settings-LayoutEditor-VaribleToParsers -->
<?php }
}
