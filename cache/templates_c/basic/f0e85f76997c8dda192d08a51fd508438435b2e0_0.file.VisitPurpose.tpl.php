<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:02:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\VisitPurpose.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658051028cd0d4_44506557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0e85f76997c8dda192d08a51fd508438435b2e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\VisitPurpose.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658051028cd0d4_44506557 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-VisitPurpose --><form name="VisitPurpose" class="form-horizontal validateForm"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="VisitPurpose" /><div class="modal-body"><div class="row"><div class="col-md-12"><textarea id="visitPurpose" maxlength="501" class="" name="visitPurpose" data-validation-engine="validate[required,maxSize[500]]"></textarea></div></div><?php if (!$_smarty_tpl->tpl_vars['CURRENT_USER']->value->isSuperUser()) {?><div class="alert alert-primary" role="alert"><span class="mdi mdi-information-outline u-fs-4x mr-2 float-left"></span><?php echo \App\Language::translate("LBL_VISIT_PURPOSE_ALERT");?>
</div><?php }?></div></form><!-- /tpl-Users-VisitPurpose -->
<?php }
}
