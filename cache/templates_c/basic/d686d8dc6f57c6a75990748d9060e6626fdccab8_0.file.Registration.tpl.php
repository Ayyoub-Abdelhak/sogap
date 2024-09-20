<?php
/* Smarty version 4.2.0, created on 2024-03-29 11:31:04
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\SystemWarnings\YetiForce\Registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6606a678e01b78_18514884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd686d8dc6f57c6a75990748d9060e6626fdccab8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\SystemWarnings\\YetiForce\\Registration.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606a678e01b78_18514884 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-SystemWarnings-YetiForce-Registration -->
<h6 class="h3"><?php echo App\Language::translate('LBL_REGISTRATION','Settings:SystemWarnings');?>
</h6><p><?php ob_start();
echo \App\Language::translate('LBL_YETIFORCE_REGISTRATION_CHECK_STATUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_prefixVariable1=ob_get_clean();
echo \App\Language::translateArgs('LBL_YETIFORCE_REGISTRATION_ERROR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value,"<a href=\"index.php?module=Companies&parent=Settings&view=List&displayModal=online\">".$_prefixVariable1."</a>");?>
</p><form class="validateForm" method="post" action="index.php"><div class="float-right mr-2"><a href="index.php?module=Companies&parent=Settings&view=List&displayModal=online" target="_blank" class="btn btn-success mr-1"><span class="fas fa-check mr-1"></span><?php echo App\Language::translate('LBL_COMPANY_DATA','Settings:SystemWarnings');?>
</a><button type="button" class="btn btn-danger cancel"><span class="fas fa-ban mr-1"></span><?php echo App\Language::translate('LBL_REMIND_LATER','Settings:SystemWarnings');?>
</button></div></form>
<!-- /tpl-Settings-SystemWarnings-YetiForce-Registration -->
<?php }
}
