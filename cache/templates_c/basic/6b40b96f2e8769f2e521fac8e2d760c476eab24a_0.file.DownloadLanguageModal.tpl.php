<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:47
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\YetiForce\DownloadLanguageModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053d7842c46_40317125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b40b96f2e8769f2e521fac8e2d760c476eab24a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\YetiForce\\DownloadLanguageModal.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053d7842c46_40317125 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-YetiForce-DownloadLanguageModal --><div class="modal-body p-0"><table class="table mb-0 mx-auto"><?php $_smarty_tpl->_assignInScope('INDEX', 0);
if (\App\RequestUtil::isNetConnection()) {?><thead><tr><th class="text-center border-top-0"><?php echo App\Language::translate('LBL_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="text-center border-top-0"><?php echo App\Language::translate('LBL_Lang_prefix','Settings:LangManagement');?>
</th><th class="text-center border-top-0"><?php echo App\Language::translate('LBL_TRANSLATED_WORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="text-center border-top-0"><?php echo App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'DETAILS', false, 'PREFIX');
$_smarty_tpl->tpl_vars['DETAILS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['DETAILS']->value) {
$_smarty_tpl->tpl_vars['DETAILS']->do_else = false;
if (!\App\Installer\Languages::exists($_smarty_tpl->tpl_vars['PREFIX']->value)) {
$_smarty_tpl->_assignInScope('NAME', \App\Language::getDisplayName($_smarty_tpl->tpl_vars['PREFIX']->value));?><tr><td class="align-middle<?php if ($_smarty_tpl->tpl_vars['INDEX']->value == 0) {?> border-top-0<?php }?> u-white-space-normal u-white-space-lg-nowrap text-truncate" title="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['NAME']->value);?>
"><strong><?php echo \App\Purifier::encodeHtml(\App\TextUtils::textTruncate($_smarty_tpl->tpl_vars['NAME']->value,20));?>
</strong></td><td class="align-middle<?php if ($_smarty_tpl->tpl_vars['INDEX']->value == 0) {?> border-top-0<?php }?> u-white-space-normal u-white-space-lg-nowrap"><strong><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PREFIX']->value);?>
</strong></td><td class="align-middle u-table-column__vw-20 u-table-column__before-block<?php if ($_smarty_tpl->tpl_vars['INDEX']->value == 0) {?> border-top-0<?php }?> w-100"><div class="progress position-relative u-h-line-normal"><div class="progress-bar bg-color-blue-100" role="progressbar" style="width: <?php echo $_smarty_tpl->tpl_vars['DETAILS']->value['progress'];?>
%;"aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['DETAILS']->value['progress'];?>
" aria-valuemin="0" aria-valuemax="100"></div><div class="position-absolute w-100 text-center"><?php echo $_smarty_tpl->tpl_vars['DETAILS']->value['progress'];?>
%</div></div></td><td class="align-middle <?php if ($_smarty_tpl->tpl_vars['INDEX']->value == 0) {?> border-top-0<?php }?>"><button class="js-download btn btn-sm btn-outline-success" data-prefix="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PREFIX']->value);?>
" data-js="click | data"><span class="fas fa-download fa-xs mr-1"></span><?php echo \App\Language::translate('LBL_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></td></tr><?php $_smarty_tpl->_assignInScope('INDEX', $_smarty_tpl->tpl_vars['INDEX']->value+1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['INDEX']->value == 0) {?><div class="alert alert-warning" role="alert"><div><h5><span class="fas fa-exclamation-circle mr-2"></span><?php echo App\Language::translate('LBL_NO_LANGUAGES_TO_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div></div><?php }
} else { ?><div class="alert alert-danger" role="alert"><div><h5><span class="fas fa-exclamation-circle mr-2"></span><?php echo App\Language::translate('LBL_NO_INTERNET_CONNECTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5></div></div><?php }?></table></div><!-- /tpl-Settings-YetiForce-DownloadLanguageModal -->
<?php }
}
