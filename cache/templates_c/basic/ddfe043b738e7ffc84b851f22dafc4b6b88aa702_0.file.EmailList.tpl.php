<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:26
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Detail\Widget\EmailList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658191563b81a8_83750668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddfe043b738e7ffc84b851f22dafc4b6b88aa702' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Detail\\Widget\\EmailList.tpl',
      1 => 1702905751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658191563b81a8_83750668 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Detail-Widget-EmailList --><?php ob_start();
echo \App\Layout::getUniqueId(($_smarty_tpl->tpl_vars['WIDGET']->value['id']).('_'));
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_assignInScope('WIDGET_UID', "id-".$_prefixVariable8);
$_smarty_tpl->_assignInScope('CONFIG', OSSMail_Module_Model::getComposeParameters());?><div class="c-detail-widget js-detail-widget" data-js="container"><div class="widgetContainer_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 widgetContentBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['url'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['label'];?>
"data-type="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['type'];?>
"><div class="c-detail-widget__header js-detail-widget-header collapsed c-detail-widget__header__container d-flex align-items-center py-1 flex-wrap" data-js="container|value"><div class="c-detail-widget__header__container d-flex w-100 align-items-center"><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule'];?>
" /><div class="c-detail-widget__toggle collapsed" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
" data-toggle="collapse"data-target="#<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"><span class="u-transform_rotate-180deg mdi mdi-chevron-down" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
"></span></div><div class="c-detail-widget__header__title"><h5 class="mb-0 modCT_<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['data']['relatedmodule'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="row inline justify-center js-hb__container ml-auto"><button type="button" tabindex="0" class="btn js-hb__btn u-hidden-block-btn text-grey-6 py-0 px-1"><div class="text-center col items-center justify-center row"><i aria-hidden="true" class="mdi mdi-wrench q-icon"></i></div></button><div class="u-hidden-block items-center js-comment-actions"><div class="ml-auto"><button type="button" class="btn btn-sm btn-light showMailsModal mr-2" data-url="index.php?module=OSSMailView&view=MailsPreview&smodule=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&srecord=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
&mode=showEmailsList"><span class="body-icon fas fa-search" title="<?php echo \App\Language::translate('LBL_SHOW_PREVIEW_EMAILS','OSSMailView');?>
"></span></button><?php if (\App\Mail::checkMailClient()) {
if (\App\Mail::checkInternalMailClient()) {
$_smarty_tpl->_assignInScope('URLDATA', OSSMail_Module_Model::getComposeUrl($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RECORD']->value->getId(),'Detail','new'));?><button type="button" class="btn btn-sm btn-light sendMailBtn" data-url="<?php echo $_smarty_tpl->tpl_vars['URLDATA']->value;?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" data-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" data-popup="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['popup'];?>
"title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"><span class="fas fa-envelope" title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"></span></button>&nbsp;<?php } else {
$_smarty_tpl->_assignInScope('URLDATA', OSSMail_Module_Model::getExternalUrl($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RECORD']->value->getId(),'Detail','new'));
if ($_smarty_tpl->tpl_vars['URLDATA']->value) {?><a class="btn btn-sm btn-light" href="<?php echo $_smarty_tpl->tpl_vars['URLDATA']->value;?>
" title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"><span class="fas fa-envelope" title="<?php echo \App\Language::translate('LBL_CREATEMAIL','OSSMailView');?>
"></span></a>&nbsp;<?php }
}
}
if (\App\Privilege::isPermitted('OSSMailView','ReloadRelationRecord')) {?><button type="button" class="btn btn-sm btn-light resetRelationsEmail"><span class="body-icon fas fa-retweet" title="<?php echo \App\Language::translate('BTN_RESET_RELATED_MAILS','OSSMailView');?>
"></span></button><?php }?></div></div></div></div></div><div class="d-none modalView"><div class="modelContainer modal fade" tabindex="-1"><div class="modal-dialog modal-blg"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value['label'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">&times;</span></button></div><div class="modal-body modalViewBody">_modalContent_</div></div></div></div></div><div class="c-detail-widget__content js-detail-widget-collapse collapse multi-collapse" id="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
-collapse"data-storage-key="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value['id'];?>
" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['WIDGET_UID']->value;?>
"><div class="row no-gutters mb-0"><?php if (!empty($_smarty_tpl->tpl_vars['WIDGET']->value['data']['filter'])) {?><div class="col-6 pr-2"><div class="input-group input-group-sm"><select name="mail-type" title="<?php echo \App\Language::translate('LBL_CHANGE_MAIL_TYPE');?>
"class="form-control select2"><option value="All"><?php echo \App\Language::translate('LBL_ALL','OSSMailView');?>
</option><option value="0"><?php echo \App\Language::translate('LBL_OUTCOMING','OSSMailView');?>
</option><option value="1"><?php echo \App\Language::translate('LBL_INCOMING','OSSMailView');?>
</option><option value="2"><?php echo \App\Language::translate('LBL_INTERNAL','OSSMailView');?>
</option></select></div></div><div class="col-6"><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Accounts') {?><div class="input-group input-group-sm"><select name="mailFilter" title="<?php echo \App\Language::translate('LBL_CHANGE_FILTER','OSSMailView');?>
"class="form-control select2"><option value="All"><?php echo \App\Language::translate('LBL_FILTER_ALL','OSSMailView');?>
</option><option value="Accounts"><?php echo \App\Language::translate('LBL_FILTER_ACCOUNTS','OSSMailView');?>
</option><option value="Contacts"><?php echo \App\Language::translate('LBL_FILTER_CONTACTS','OSSMailView');?>
</option></select></div><?php }?></div><?php }?></div><div class="widgetContent mailsList js-detail-widget-content" data-js="container|value"></div></div></div></div><!-- /tpl-Base-Detail-Widget-EmailList -->
<?php }
}
