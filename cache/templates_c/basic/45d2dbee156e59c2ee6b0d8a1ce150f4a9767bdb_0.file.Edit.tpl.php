<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:30:13
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\ConfigEditor\Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818cd5dd7c72_12312195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45d2dbee156e59c2ee6b0d8a1ce150f4a9767bdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\ConfigEditor\\Edit.tpl',
      1 => 1702905760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818cd5dd7c72_12312195 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-ConfigEditor-Edit --><div><form id="ConfigEditorForm" class="form-horizontal js-form-ajax-submit js-validate-form" data-detail-url="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDetailViewUrl();?>
" method="POST"><input name="module" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input name="parent" type="hidden" value="Settings" /><input name="action" type="hidden" value="SaveAjax" /><input name="type" type="hidden" value="Main" /><table class="table table-bordered table-sm themeTableColor"><thead><tr class="blockHeader"><th colspan="2" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_MAIN_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODEL']->value->listFields, 'FIELD_LABEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_LABEL']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_MODEL', $_smarty_tpl->tpl_vars['MODEL']->value->getFieldInstanceByName($_smarty_tpl->tpl_vars['FIELD_NAME']->value)->set('fieldvalue',$_smarty_tpl->tpl_vars['MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)));?><tr><td width="30%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 textAlignRight"><div class="form-row"><label class="col-form-label col-md-4 u-text-small-bold text-left text-md-right"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'upload_maxsize') {?><div class="input-group col-md-3 fieldValue"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'RECORD'=>null), 0, true);
?><div class="input-group-append"><span class="input-group-text"><?php echo \App\Language::translate('LBL_MB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><label class="col-form-label">(upload_max_filesize: <?php echo vtlib\Functions::showBytes(\App\Config::getMaxUploadSize(false));?>
)</label><?php } else { ?><div class="col-md-3 fieldValue"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'RECORD'=>null), 0, true);
?></div><?php }?></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="c-form__action-panel"><button class="btn btn-success js-save" type="submit"><span class="fas fa-check mr-2"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div><!-- /tpl-Settings-ConfigEditor-Edit -->
<?php }
}
