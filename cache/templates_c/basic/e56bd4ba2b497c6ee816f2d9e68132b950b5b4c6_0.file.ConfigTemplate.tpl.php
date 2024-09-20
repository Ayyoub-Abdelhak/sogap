<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:30:14
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\ConfigEditor\ConfigTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818cd6059102_64421557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56bd4ba2b497c6ee816f2d9e68132b950b5b4c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\ConfigEditor\\ConfigTemplate.tpl',
      1 => 1702905760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818cd6059102_64421557 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-ConfigEditor-ConfigTemplate --><div><form class="js-form-ajax-submit js-validate-form"><input name="module" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input name="parent" type="hidden" value="Settings" /><input name="action" type="hidden" value="SaveAjax" /><input name="type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG_NAME']->value;?>
" /><?php $_smarty_tpl->_assignInScope('CONFIG_MODEL', Settings_ConfigEditor_Module_Model::getInstance()->init($_smarty_tpl->tpl_vars['CONFIG_NAME']->value));?><div class="p-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CONFIG_MODEL']->value->getEditFields($_smarty_tpl->tpl_vars['CONFIG_NAME']->value), 'FIELD_LABEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_LABEL']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['CONFIG_MODEL']->value->getFieldInstanceByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value));
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {?><div class="form-group row mb-2"><label class="col-form-label col-md-4 u-text-small-bold text-left text-lg-right text-md-right"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip')) {?><div class="js-popover-tooltip ml-1 d-inline my-auto u-h-fit u-cursor-pointer" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div><?php }?>:</label><div class="col-md-8 fieldValue m-auto"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'RECORD'=>null), 0, true);
?></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="c-form__action-panel"><button class="btn btn-success js-save" type="submit"><span class="fas fa-check mr-2"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div><!-- /tpl-Settings-ConfigEditor-ConfigTemplate -->
<?php }
}
