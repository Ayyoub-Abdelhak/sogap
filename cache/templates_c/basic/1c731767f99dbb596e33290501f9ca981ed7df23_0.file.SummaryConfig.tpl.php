<?php
/* Smarty version 4.2.0, created on 2024-05-10 18:00:24
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\SummaryConfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e52a81f7199_54246030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c731767f99dbb596e33290501f9ca981ed7df23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\SummaryConfig.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e52a81f7199_54246030 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><form class="form-modalAddWidget"><?php if (!empty($_smarty_tpl->tpl_vars['WID']->value)) {?><input type="hidden" name="wid" value="<?php echo $_smarty_tpl->tpl_vars['WID']->value;?>
" /><?php }?><input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" /><div class="modal-header"><h5 id="massEditHeader" class="modal-title"><?php echo \App\Language::translate('Add widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" data-dismiss="modal" class="close" title="<?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">&times;</button></div><div class="modal-body"><div class="modal-Fields"><div class="row"><div class="col-md-12"><p class="float-left"> <strong><?php echo \App\Language::translate('Type widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>: </p><p class="float-left">&nbsp; <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </p></div></div></div></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></form></div></div></div>
<?php }
}
