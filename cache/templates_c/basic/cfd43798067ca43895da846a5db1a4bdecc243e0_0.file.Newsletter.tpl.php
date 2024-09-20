<?php
/* Smarty version 4.2.0, created on 2024-03-29 11:31:05
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\SystemWarnings\YetiForce\Newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6606a679066661_86626485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd43798067ca43895da846a5db1a4bdecc243e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\SystemWarnings\\YetiForce\\Newsletter.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606a679066661_86626485 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-SystemWarnings-YetiForce-Newsletter -->
<h6 class="h3"><?php echo App\Language::translate('LBL_NEWSLETTER','Settings:SystemWarnings');?>
</h6><p><strong><?php echo App\Language::translate('LBL_NEWSLETTER_NO_COMPANY_DATA','Settings:SystemWarnings');?>
</strong></p><p><?php echo App\Language::translate('LBL_EMAIL_NEWSLETTER_INFO','Settings:Companies');?>
</p><form class="validateForm" method="post" action="index.php"><div class="float-right mr-2"><?php if (\App\Security\AdminAccess::isPermitted('Companies')) {?><a href="index.php?module=Companies&parent=Settings&view=List&displayModal=online" target="_blank" class="btn btn-success mr-1"><span class="fas fa-check mr-1"></span><?php echo App\Language::translate('LBL_COMPANY_DATA','Settings:SystemWarnings');?>
</a><?php }?><button type="button" class="btn btn-danger cancel"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div></form>
<!-- /tpl-Settings-SystemWarnings-YetiForce-Newsletter -->
<?php }
}
