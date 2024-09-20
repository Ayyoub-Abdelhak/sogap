<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\OSSMailView\widgets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819158e77c56_52356892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9cf1086afc7ff9a3f6b568dbec217a3db02ac1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\OSSMailView\\widgets.tpl',
      1 => 1702905765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819158e77c56_52356892 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-OSSMailView-widgets --><div class="container-fluid px-0"><?php $_smarty_tpl->_assignInScope('COUNT', count($_smarty_tpl->tpl_vars['RECOLDLIST']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECOLDLIST']->value, 'ROW', false, 'KEY');
$_smarty_tpl->tpl_vars['ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->tpl_vars['ROW']->do_else = false;
?><div class="content js-mail-row <?php if ($_smarty_tpl->tpl_vars['KEY']->value%2 != 0) {?> even<?php }?> mb-1 py-0 px-2 <?php if ($_smarty_tpl->tpl_vars['ROW']->value['firstLetterBg'] == 'bg-warning') {?> border border-warning <?php }?>"><div class="form-row px-1"><div class="d-flex col-xl-8 col-lg-12 col-md-12 col-sm-8 col-12 pr-0 pl-0   mb-1"><div class="firstLetter <?php echo $_smarty_tpl->tpl_vars['ROW']->value['firstLetterBg'];?>
 d-lg-block d-md-none d-sm-block d-none mr-2 u-box-shadow-light"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['firstLetter'];?>
</div><div class="col-lg-10 col-md-12 px-0"><p class="mb-0 u-fs-15px u-lh-12 u-text-ellipsis"><?php echo \App\Language::translate('LBL_FROM','Settings:Mail');?>
: <?php echo $_smarty_tpl->tpl_vars['ROW']->value['from'];?>
</p><p class="mb-0 u-fs-15px u-lh-12 u-text-ellipsis"><?php echo \App\Language::translate('LBL_TO','Settings:Mail');?>
: <?php echo $_smarty_tpl->tpl_vars['ROW']->value['to'];?>
</p><p class="font-small mb-0 text-truncate mb-0 u-fs-15px u-lh-12 u-text-ellipsis"><?php if (\App\Privilege::isPermitted('OSSMailView','DetailView',$_smarty_tpl->tpl_vars['ROW']->value['id'])) {?><a type="button" href="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['url'];?>
" class="showMailModal" data-url="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['url'];?>
"><?php echo \App\Language::translate('LBL_SUBJECT');?>
: <?php echo $_smarty_tpl->tpl_vars['ROW']->value['subjectRaw'];?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 2) {
echo \App\Language::translate('LBL_SUBJECT');?>
: <?php echo $_smarty_tpl->tpl_vars['ROW']->value['subjectRaw'];
}?></p></div></div><div class="d-flex flex-xl-column flex-lg-row  flex-md-row flex-sm-column justify-content-md-end justify-content-sm-between justify-content-end align-items-sm-stretch align-items-center col-xl-4 col-lg-12 col-md-12 col-sm-4 col-12 pr-0 pl-0"><div class="bd-highlight d-flex justify-content-end mr-1"><?php if ($_smarty_tpl->tpl_vars['ROW']->value['attachments'] == 1) {?><span class="fas align-self-center fa-xs fa-paperclip mr-1"></span><?php }
if ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 0) {?><span class="fas align-self-center fa-xs fa-arrow-up text-success"></span><?php } elseif ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 1) {?><span class="fas align-self-center fa-xs fa-arrow-down text-danger"></span><?php } elseif ($_smarty_tpl->tpl_vars['ROW']->value['type'] == 2) {?><span class="fas align-self-center fa-xs fa-retweet text-primary"></span><?php }?><small class="text-muted ml-1 text-truncate"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['ROW']->value['date']);?>
</small></div><div class="bd-highlight mailActions d-flex justify-content-end"><div class="btn-group" role="group"><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['SMODULENAME']->value,'RemoveRelation')) {
if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'MoveToTrash',$_smarty_tpl->tpl_vars['ROW']->value['id'])) {
$_smarty_tpl->_assignInScope('LINK', Vtiger_Link_Model::getInstanceFromValues(array('linkclass'=>'btn-xs btn-secondary relationDelete entityStateBtn { }','linklabel'=>'LBL_REMOVE_RELATION','linkicon'=>'fas fa-unlink','linkdata'=>array('content'=>\App\Language::translate('LBL_REMOVE_RELATION'),'confirm'=>\App\Language::translate('LBL_REMOVE_RELATION_CONFIRMATION'),'id'=>$_smarty_tpl->tpl_vars['ROW']->value['id'],'url'=>$_smarty_tpl->tpl_vars['RELATION_MODEL']->value->getDeleteUrl($_smarty_tpl->tpl_vars['ROW']->value['id'])))));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
}
if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'Delete',$_smarty_tpl->tpl_vars['ROW']->value['id'])) {
$_smarty_tpl->_assignInScope('LINK', Vtiger_Link_Model::getInstanceFromValues(array('dataUrl'=>"index.php?module=".((string)$_smarty_tpl->tpl_vars['MODULE_NAME']->value)."&action=Delete&record=".((string)$_smarty_tpl->tpl_vars['ROW']->value['id']),'linktype'=>'LIST_VIEW_ACTIONS_RECORD_LEFT_SIDE','linklabel'=>'LBL_DELETE_RECORD_COMPLETELY','linkicon'=>"fas fa-eraser",'linkdata'=>array('confirm'=>\App\Language::translate('LBL_DELETE_RECORD_COMPLETELY_DESC')),'linkclass'=>'btn-xs btn-dark relationDelete entityStateBtn')));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
}
}?></div></div><div class="bd-highlight mailActions d-flex justify-content-end px-0"><?php if (\App\Mail::checkMailClient()) {
if (\App\Mail::checkInternalMailClient()) {
$_smarty_tpl->_assignInScope('COMPOSE_URL', OSSMail_Module_Model::getComposeUrl($_smarty_tpl->tpl_vars['SMODULENAME']->value,$_smarty_tpl->tpl_vars['SRECORD']->value,'Detail'));?><button type="button" class="btn btn-xs btn-outline-success sendMailBtn ml-1" data-url="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['ROW']->value['id'];?>
&type=reply" data-popup="<?php echo $_smarty_tpl->tpl_vars['POPUP']->value;?>
"><span class="fas fa-reply" title="<?php echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><button type="button" class="btn btn-xs btn-outline-secondary sendMailBtn ml-1" data-url="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['ROW']->value['id'];?>
&type=replyAll" data-popup="<?php echo $_smarty_tpl->tpl_vars['POPUP']->value;?>
"><span class="fas fa-reply-all" title="<?php echo \App\Language::translate('LBL_REPLYALLL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><button type="button" class="btn btn-xs btn-outline-primary sendMailBtn ml-1" data-url="<?php echo $_smarty_tpl->tpl_vars['COMPOSE_URL']->value;?>
&mid=<?php echo $_smarty_tpl->tpl_vars['ROW']->value['id'];?>
&type=forward" data-popup="<?php echo $_smarty_tpl->tpl_vars['POPUP']->value;?>
"><span class="fas fa-share" title="<?php echo \App\Language::translate('LBL_FORWARD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button><?php } else { ?><a class="btn btn-xs btn-outline-success ml-1" role="button" href="<?php echo OSSMail_Module_Model::getExternalUrlForWidget($_smarty_tpl->tpl_vars['ROW']->value,'reply',$_smarty_tpl->tpl_vars['SRECORD']->value,$_smarty_tpl->tpl_vars['SMODULENAME']->value);?>
" rel="noreferrer noopener"><span class="fas fa-reply" title="<?php echo \App\Language::translate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><a class="btn btn-xs btn-outline-secondary ml-1" role="button" href="<?php echo OSSMail_Module_Model::getExternalUrlForWidget($_smarty_tpl->tpl_vars['ROW']->value,'replyAll',$_smarty_tpl->tpl_vars['SRECORD']->value,$_smarty_tpl->tpl_vars['SMODULENAME']->value);?>
" rel="noreferrer noopener"><span class="fas fa-reply-all" title="<?php echo \App\Language::translate('LBL_REPLYALLL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><a class="btn btn-xs btn-outline-primary ml-1" role="button" href="<?php echo OSSMail_Module_Model::getExternalUrlForWidget($_smarty_tpl->tpl_vars['ROW']->value,'forward',$_smarty_tpl->tpl_vars['SRECORD']->value,$_smarty_tpl->tpl_vars['SMODULENAME']->value);?>
" rel="noreferrer noopener"><span class="fas fa-share" title="<?php echo \App\Language::translate('LBL_FORWARD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><?php }?><a class="js-toggle-icon__container showMailBody btn btn-xs btn-outline-dark ml-1" role="button" data-js="click"><span class="js-toggle-icon body-icon fas fa-caret-down" data-active="fa-caret-up" data-inactive="fa-caret-down" data-js="click" aria-label="<?php echo \App\Language::translate('LBL_SHOW_PREVIEW_EMAIL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></a><?php }?></div></div></div><div class="col-12 px-0"><div class="mailTeaser u-fs-13px"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['teaser'];?>
</div></div><div class="col-12 mailBody px-0 d-none"><div class="mailBodyContent"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['body'];?>
</div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['COUNT']->value == 0) {?><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_MAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p><?php }?></div><!-- /tpl-OSSMailView-widgets -->
<?php }
}
