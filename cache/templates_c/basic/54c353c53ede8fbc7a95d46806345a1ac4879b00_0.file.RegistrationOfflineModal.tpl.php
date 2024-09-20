<?php
/* Smarty version 4.2.0, created on 2023-12-26 13:02:22
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\YetiForce\RegistrationOfflineModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ac0ce3b5ce4_33478291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c353c53ede8fbc7a95d46806345a1ac4879b00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\YetiForce\\RegistrationOfflineModal.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ac0ce3b5ce4_33478291 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-YetiForce-RegistrationOfflineModal modal-body"><div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p><?php echo \App\Language::translateArgs('LBL_REGISTRATION_OFFLINE_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'registration@yetiforce.com');?>
</p></div><textarea rows="14" readonly="readonly"><?php echo $_smarty_tpl->tpl_vars['EXAMPLE']->value;?>
</textarea><form><div class="form-group form-row"><label class="col-form-label u-text-small-bold text-right col-lg-5"><?php echo \App\Language::translate('LBL_REGISTRATION_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor"> *</span>:</label><div class="fieldValue col-lg-7"><input type="text" class="form-control registrationKey" data-validation-engine="validate[required,custom[onlyLetterNumber],minSize[40],maxSize[40]]"></div></div></form></div>
<?php }
}
