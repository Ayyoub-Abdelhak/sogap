<?php
/* Smarty version 4.2.0, created on 2023-12-28 22:22:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RecentActivitiesHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658de7013236d8_99339514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f7bdd75e9e2c86532543a00f0b48967955492e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RecentActivitiesHeader.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658de7013236d8_99339514 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-RecentActivitiesHeader row marginBottom10px"><div class="col-md-12 btn-toolbar justify-content-end"><?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['USER_MODEL']->value->getRealId() && $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isPermitted('ReviewingUpdates') && ModTracker_Record_Model::isNewChange($_smarty_tpl->tpl_vars['PARENT_RACORD_ID']->value,$_smarty_tpl->tpl_vars['USER_MODEL']->value->getRealId())) {?><button id="btnChangesReviewedOn" type="button" class="btn btn-success btn-sm btnChangesReviewedOn mr-1" title="<?php echo \App\Language::translate('BTN_CHANGES_REVIEWED_ON',$_smarty_tpl->tpl_vars['MODULE_BASE_NAME']->value);?>
"><span class="far fa-check-circle"></span></button><?php }?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['TYPE']->value == 'changes') {?>active<?php }?>"><input class="js-switch--recentActivities" type="radio" name="options" id="activities-option1" data-js="change" data-on-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"data-on-val="changes"data-basic-text="<?php echo App\Language::translate('LBL_CURRENT');?>
"data-urlparams="whereCondition"autocomplete="off"> <?php echo \App\Language::translate('LBL_UPDATES',$_smarty_tpl->tpl_vars['MODULE_BASE_NAME']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['TYPE']->value != 'changes') {?>active<?php }?>"><input class="js-switch--recentActivities" type="radio" name="options" id="activities-option2" data-js="change" data-basic-text="<?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-text="data-off-text <?php echo App\Language::translate('LBL_HISTORY');?>
"data-off-val="review"data-urlparams="whereCondition"autocomplete="off"> <?php echo \App\Language::translate('LBL_REVIEW_HISTORY',$_smarty_tpl->tpl_vars['MODULE_BASE_NAME']->value);?>
</label></div></div></div>
<?php }
}
