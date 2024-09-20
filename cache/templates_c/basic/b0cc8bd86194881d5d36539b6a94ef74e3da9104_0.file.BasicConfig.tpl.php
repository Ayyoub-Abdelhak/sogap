<?php
/* Smarty version 4.2.0, created on 2024-05-10 17:59:38
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\BasicConfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e527ac46db7_40252690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0cc8bd86194881d5d36539b6a94ef74e3da9104' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\BasicConfig.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e527ac46db7_40252690 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><form class="form-modalAddWidget"><?php if (!empty($_smarty_tpl->tpl_vars['WID']->value)) {?><input type="hidden" name="wid" value="<?php echo $_smarty_tpl->tpl_vars['WID']->value;?>
" /><?php }?><input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" /><div class="modal-header"><h5 id="massEditHeader" class="modal-title"><?php echo \App\Language::translate('Add widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" data-dismiss="modal" class="close" title="<?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">&times;</button></div><div class="modal-body"><div class="modal-Fields"><div class="row"><div class="col-md-3 marginLeftZero"><strong><?php echo \App\Language::translate('Type widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>:</div><div class="col-md-7"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-3 marginLeftZero"><label class=""><?php echo \App\Language::translate('Label',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></div><div class="col-md-7"><input name="label" class="form-control" type="text" data-validation-engine="validate[required]" value="<?php echo $_smarty_tpl->tpl_vars['WIDGETINFO']->value['label'];?>
" /></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div>
<?php }
}
