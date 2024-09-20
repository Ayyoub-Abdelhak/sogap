<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:17:23
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Groups\Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953433c96656_23502045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'deb9ddfd5223c6f9f26a1294e2e81f63bc609177' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Groups\\Edit.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953433c96656_23502045 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Groups-Edit --><div class="editViewContainer"><form name="EditGroup" action="index.php" method="post" id="EditView" class="form-horizontal"><input type="hidden" name="module" value="Groups"><input type="hidden" name="action" value="Save" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId();?>
"><div class="o-breadcrumb widget_header row mb-3"><div class="col-12 d-flex"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'structre', array (
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value === 'modules') {?><div class="col-md-8 text-right mb-2"><button class="btn btn-success mr-1 btn-sm js-modules-select-all" data-js="click" type="button"><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-danger btn-sm js-modules-deselect-all" data-js="click" type="button"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_DESELECT_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><?php }?><div class="form-group row"><label class="u-font-weight-600 col-lg-2 textAlignRight align-self-center"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><span class="redColor">*</span><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip')) {?><div class="js-popover-tooltip ml-1 d-inline my-auto u-h-fit u-cursor-pointer" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('tooltip'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fas fa-info-circle"></span></div><?php }?>:</label><div class="fieldValue col-lg-6"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD_MODEL']->value), 0, true);
?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="form-group row"><div class="text-right col-lg-8"><button class="btn btn-success mr-1 c-btn-block-sm-down mb-1 mb-md-0" type="submit"><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-danger c-btn-block-sm-down" type="reset" onclick="javascript:window.history.back();"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></form></div><!-- /tpl-Settings-Groups-Edit -->
<?php }
}
