<?php
/* Smarty version 4.2.0, created on 2023-12-19 17:02:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RecentActivitiesTimeLine.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581beb008d0b9_44106430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3036f11ac2979c89fad54f137c1c25dbf4a11501' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RecentActivitiesTimeLine.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581beb008d0b9_44106430 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Base-RecentActivitiesTimeLine recentActivitiesContainer pt-sm-1 pt-0"><input type="hidden" id="updatesCurrentPage" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page');?>
" /><input type="hidden" id="updatesPageLimit" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['RECENT_ACTIVITIES']->value)) {
$_smarty_tpl->_assignInScope('LIST_ENTITY_STATE_COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><div id="updates" class="w-100"><ul class="timeline"><?php $_smarty_tpl->_assignInScope('COUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITIES']->value, 'RECENT_ACTIVITY', false, NULL, 'recentActivites', array (
));
$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value) {
$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->do_else = false;
$_smarty_tpl->_assignInScope('PROCEED', TRUE);
if (($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isRelationLink()) || ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isRelationUnLink())) {
$_smarty_tpl->_assignInScope('RELATION', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getRelationInstance());
if (!($_smarty_tpl->tpl_vars['RELATION']->value->getValue())) {
$_smarty_tpl->_assignInScope('PROCEED', FALSE);
}
}
if ($_smarty_tpl->tpl_vars['PROCEED']->value) {
$_smarty_tpl->_assignInScope('MODIFIER_IMAGE', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifiedBy()->getImage());
$_smarty_tpl->_assignInScope('MODIFIER_NAME', \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getModifierName()));?><li><?php if ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isReviewed() && !($_smarty_tpl->tpl_vars['COUNT']->value == 0 && $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page') == 1)) {
$_smarty_tpl->_assignInScope('NEW_CHANGE', false);?><div class="lineOfText"><div><?php echo \App\Language::translate('LBL_REVIEWED',$_smarty_tpl->tpl_vars['MODULE_BASE_NAME']->value);?>
</div></div><?php }
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
if ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isCreate()) {?><div class="d-flex"><span class="c-circle-icon mt-2 bg-success d-sm-inline d-none text-center" style="background-color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 !important;"><span class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 fa-fw text-light mt-2"></span></span><div class="flex-grow-1 ml-1 p-1 timeline-item <?php if ($_smarty_tpl->tpl_vars['NEW_CHANGE']->value) {?> bgWarning<?php }?> isCreate"><div class="float-sm-left imageContainer d-sm-block d-none text-center"><?php if ($_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><strong><?php echo $_smarty_tpl->tpl_vars['MODIFIER_NAME']->value;?>
</strong>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
<div class="float-right time text-muted ml-1"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getParent()->get('createdtime'));?>
</div><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getFieldInstances(), 'FIELDMODEL');
$_smarty_tpl->tpl_vars['FIELDMODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELDMODEL']->value) {
$_smarty_tpl->tpl_vars['FIELDMODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance() && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->isViewable() && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getDisplayType() != '5') {?><div class='font-x-small updateInfoContainer d-flex flex-wrap'><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>:&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') != '') {?><strong><?php echo $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getNewValue();?>
</strong><?php }?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RecentActivitiesInventory.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isUpdate() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isTransferEdit()) {?><div class="d-flex"><div class="c-circle-icon mt-2 d-sm-inline d-none text-center" style="background-color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"><div class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 fa-fw text-light mt-2 mx-auto"></div></div><div class="flex-grow-1 ml-sm-1 ml-0 p-1 timeline-item<?php if ($_smarty_tpl->tpl_vars['NEW_CHANGE']->value) {?> bgWarning<?php }?> isUpdate"><div class="float-sm-left imageContainer d-sm-block d-none text-center"><?php if ($_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><strong><?php echo $_smarty_tpl->tpl_vars['MODIFIER_NAME']->value;?>
&nbsp;</strong> <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
<div class="float-right time text-muted ml-1"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</div><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getFieldInstances(), 'FIELDMODEL');
$_smarty_tpl->tpl_vars['FIELDMODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELDMODEL']->value) {
$_smarty_tpl->tpl_vars['FIELDMODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance() && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->isViewable() && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getDisplayType() != '5') {?><div class="font-x-small updateInfoContainer"><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>:&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('prevalue') != '' && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') != '' && !($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getFieldDataType() == 'reference' && ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') == '0' || $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('prevalue') == '0'))) {?>&nbsp;<?php echo \App\Language::translate('LBL_FROM');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') != '') {?><strong><?php echo $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getOldValue();?>
</strong><?php }
} elseif ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') != '' && ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getFieldDataType() == 'reference' && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') == '0')) {?>&nbsp;<strong><?php echo \App\Language::translate('LBL_DELETED','ModTracker');?>
</strong>&nbsp;(<del><?php echo Vtiger_Util_Helper::toVtiger6SafeHTML($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getOldValue());?>
</del>)<?php } elseif ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') == '') {?>&nbsp;<strong><?php echo \App\Language::translate('LBL_DELETED_VALUE','ModTracker');?>
</strong>&nbsp;(<del><?php echo Vtiger_Util_Helper::toVtiger6SafeHTML($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getOldValue());?>
</del>)<?php } else { ?>&nbsp;<?php echo \App\Language::translate('LBL_CHANGED');
}
if ($_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') != '' && !($_smarty_tpl->tpl_vars['FIELDMODEL']->value->getFieldInstance()->getFieldDataType() == 'reference' && $_smarty_tpl->tpl_vars['FIELDMODEL']->value->get('postvalue') == '0')) {?>&nbsp;<?php echo \App\Language::translate('LBL_TO');?>
&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['FIELDMODEL']->value->getNewValue();?>
</strong><?php }?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RecentActivitiesInventory.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div></div><?php } elseif (($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isRelationLink() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isRelationUnLink() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isTransferLink() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isTransferUnLink())) {?><div class="d-flex"><div class="c-circle-icon mt-2 d-sm-inline d-none text-center" style="background-color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"><div class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 fa-fw text-light mt-2 mx-auto"></div></div><div class="flex-grow-1 ml-1 p-1 timeline-item<?php if ($_smarty_tpl->tpl_vars['NEW_CHANGE']->value) {?> bgWarning<?php }?> isRelationLink isRelationUnLink"><div class="float-sm-left imageContainer d-sm-block d-none text-center"><?php if ($_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><div class="float-right time text-muted ml-1"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</div><span><strong><?php echo $_smarty_tpl->tpl_vars['MODIFIER_NAME']->value;?>
&nbsp;</strong></span><?php $_smarty_tpl->_assignInScope('RELATION', $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getRelationInstance());?><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
&nbsp;</span><span><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['RELATION']->value->get('targetmodule'),'DetailView',$_smarty_tpl->tpl_vars['RELATION']->value->get('targetid'))) {?><strong class="js-more-content"><span class="teaserContent"><?php echo \App\Utils\Completions::decode(Vtiger_Util_Helper::toVtiger6SafeHTML(\App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['RELATION']->value->getValue())));?>
</span><?php if ($_smarty_tpl->tpl_vars['RELATION']->value->has('fullValue')) {?><span class="fullContent d-none"><?php echo $_smarty_tpl->tpl_vars['RELATION']->value->get('fullValue');?>
</span><a href="#" class="js-more font-weight-lighter"><?php echo \App\Language::translate('LBL_MORE_BTN');?>
</a><?php }?></strong><?php }?></span><span>&nbsp;(<?php echo \App\Language::translate(('SINGLE_').($_smarty_tpl->tpl_vars['RELATION']->value->get('targetmodule')),$_smarty_tpl->tpl_vars['RELATION']->value->get('targetmodule'));?>
)</span></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isChangeState() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isTransferDelete()) {?><div class="d-flex"><div class="c-circle-icon mt-2 d-sm-inline d-none text-center" style="background-color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"><div class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 fa-fw text-light mt-2 mx-auto"></div></div><div class="flex-grow-1 ml-1 p-1 timeline-item isDisplayed"><div class="imageContainer float-left d-sm-block d-none text-center"><?php if ($_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><div class="float-right time text-muted ml-1"><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</div><div><strong><?php echo $_smarty_tpl->tpl_vars['MODIFIER_NAME']->value;?>
</strong>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
</div></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isConvertToAccount()) {?><div class="d-flex"><div class="c-circle-icon mt-2 d-sm-inline d-none text-center" style="background-color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"><div class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 fa-fw text-light mt-2 mx-auto"></div></div><div class="flex-grow-1 ml-1 p-1 timeline-item<?php if ($_smarty_tpl->tpl_vars['NEW_CHANGE']->value) {?> bgWarning<?php }?> isConvertToAccount"><div class="float-left imageContainer d-sm-block d-none text-center"><?php if ($_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><div><strong><?php echo $_smarty_tpl->tpl_vars['MODIFIER_NAME']->value;?>
</strong>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
</div><span class="time float-right"><span><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</span></span></div></div></div><?php } elseif ($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isDisplayed() || $_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->isShowHiddenData()) {?><div class="d-flex"><div class="c-circle-icon mt-2 d-sm-inline d-none text-center" style="background-color: <?php echo ModTracker::$colorsActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
;"><div class="<?php echo ModTracker::$iconActions[$_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->get('status')];?>
 fa-fw text-light mt-2 mx-auto"></div></div><div class="flex-grow-1 ml-1 p-1 timeline-item isDisplayed"><div class="float-left imageContainer d-sm-block d-none text-center"><?php if ($_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value) {?><img class="userImage" src="<?php echo $_smarty_tpl->tpl_vars['MODIFIER_IMAGE']->value['url'];?>
"><?php } else { ?><span class="fas fa-user userImage"></span><?php }?></div><div class="timeline-body small"><div class="float-left"><strong><?php echo $_smarty_tpl->tpl_vars['MODIFIER_NAME']->value;?>
</strong>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getStatusLabel(),'ModTracker');?>
</div><span class="time float-right"><span><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['RECENT_ACTIVITY']->value->getActivityTime());?>
</span></span></div></div></div><?php }?></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div><?php } else { ?><div class="summaryWidgetContainer"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RECENT_UPDATES');?>
</p></div><?php }?><input type="hidden" id="newChange" value="<?php echo $_smarty_tpl->tpl_vars['NEW_CHANGE']->value;?>
" /><div class="d-flex pt-0 pb-2 px-0 js-more-link"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()) {?><div class="ml-auto"><button type="button" class="btn btn-link btn-sm moreRecentUpdates"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 ..</button></div><?php }?></div></div>
<?php }
}
