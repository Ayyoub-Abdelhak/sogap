<?php
/* Smarty version 4.2.0, created on 2023-12-28 22:17:57
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\InterestsConflict\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658de6050ced30_92989299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84bbe61f99049170a5fb035803226faaee52ac1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\InterestsConflict\\Index.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658de6050ced30_92989299 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-InterestsConflict-Index --><div><div class="o-breadcrumb widget_header row mb-2"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div><ul id="tabs" class="nav nav-tabs my-2 mr-0" data-tabs="tabs"><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Config') {?>active<?php }?>" href="#Config" data-toggle="tab" data-name="Config"><span class="fas fa-sliders-h mr-2"></span><?php echo \App\Language::translate('LBL_MAIN_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Modules') {?>active<?php }?>" href="#Modules" data-toggle="tab" data-name="Modules"><span class="fas fa-boxes mr-2"></span><?php echo \App\Language::translate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Confirmations') {?>active<?php }?>" href="#Confirmations" data-toggle="tab" data-name="Confirmations"><span class="fas fa-history mr-2"></span><?php echo \App\Language::translate('LBL_CONFIRMATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Unlock') {?>active<?php }?>" href="#Unlock" data-toggle="tab" data-name="Unlock"><span class="fas fa-unlock mr-2"></span><?php echo \App\Language::translate('LBL_UNLOCK_REQUESTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li></ul></div><div id="my-tab-content" class="tab-content"><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Config') {?>active<?php }?>" id="Config" data-name="Config" data-js="data"><form class="js-filter-form"><div class="js-config-table table-responsive" data-js="container"><table class="table table-bordered table-sm"><thead><tr class="blockHeader"><th colspan="2" class="mediumWidthType"><span class="fas fa-sliders-h mr-2"></span><?php echo \App\Language::translate('LBL_MAIN_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_IS_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="border-left-0 px-3 align-middle"><input name="isActive" type="checkbox" class="form-control" data-js="is" <?php if (!empty($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['isActive'])) {?>checked<?php }?> value="true"></td></tr><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_INTERVAL_TIME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="fas fa-info-circle text-primary js-popover-tooltip ml-2" data-content="<?php echo \App\Language::translate('LBL_INTERVAL_TIME_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></label></td><td class="border-left-0 px-3"><div class="input-group"><input name="confirmationTimeInterval" type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG_DATA']->value['confirmationTimeInterval'];?>
" <?php if ($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['confirmationTimeIntervalList'] === '-') {?>disabled="disabled" <?php }?> data-validation-engine="validate[required, custom[number],min[1]]" /><div class="input-group-append col-md-4 p-0"><select class="form-control select2" name="confirmationTimeIntervalList"><option value="-" <?php if ($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['confirmationTimeIntervalList'] === '-') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_INDEFINITELY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="days" <?php if ($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['confirmationTimeIntervalList'] === 'days') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_DAYS');?>
</option><option value="month" <?php if ($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['confirmationTimeIntervalList'] === 'month') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_MONTHS');?>
</option><option value="years" <?php if ($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['confirmationTimeIntervalList'] === 'years') {?>selected<?php }?>><?php echo \App\Language::translate('LBL_YEARS');?>
</option></select></div></div></td></tr><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold" id="confirmUsersAccess"><?php echo \App\Language::translate('LBL_USERS_CONFIRMATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="border-left-0 px-3"><select id="confirmUsersAccessList" class="form-control select2" multiple="true" name="confirmUsersAccess[]" aria-describedby="confirmUsersAccess"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS']->value, 'USER', false, 'USER_ID');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USER_ID']->value => $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['USER_ID']->value,$_smarty_tpl->tpl_vars['CONFIG_DATA']->value['confirmUsersAccess'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['USER']->value->getDisplayName();?>
 (<?php echo $_smarty_tpl->tpl_vars['USER']->value->getRoleDetail()->get('rolename');?>
)</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold" id="unlockUsersAccess"><?php echo \App\Language::translate('LBL_USERS_UNLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="border-left-0 px-3"><select id="unlockUsersAccessList" class="form-control select2" multiple="true" name="unlockUsersAccess[]" aria-describedby="unlockUsersAccess"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS']->value, 'USER', false, 'USER_ID');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USER_ID']->value => $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['USER_ID']->value,$_smarty_tpl->tpl_vars['CONFIG_DATA']->value['unlockUsersAccess'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['USER']->value->getDisplayName();?>
 (<?php echo $_smarty_tpl->tpl_vars['USER']->value->getRoleDetail()->get('rolename');?>
)</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_NOTIFICATIONS_EMAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="border-left-0 px-3"><input name="notificationsEmails" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG_DATA']->value['notificationsEmails'];?>
" /></td></tr><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_SEND_MAIL_DURING_ACCESS_REQUEST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="fas fa-info-circle text-primary js-popover-tooltip ml-2" data-content="<?php echo \App\Language::translate('LBL_SEND_MAIL_DURING_ACCESS_REQUEST_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></label></td><td class="border-left-0 px-3 align-middle"><input name="sendMailAccessRequest" type="checkbox" class="form-control" data-js="is" <?php if (!empty($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['sendMailAccessRequest'])) {?>checked<?php }?> value="true"></td></tr><tr><td class="u-w-37per px-2"><label class="muted float-right col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_SEND_MAIL_DURING_ACCESS_RESPONSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="fas fa-info-circle text-primary js-popover-tooltip ml-2" data-content="<?php echo \App\Language::translate('LBL_SEND_MAIL_DURING_ACCESS_RESPONSE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></label></td><td class="border-left-0 px-3 align-middle"><input name="sendMailAccessResponse" type="checkbox" class="form-control" data-js="is" <?php if (!empty($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['sendMailAccessResponse'])) {?>checked<?php }?> value="true"></td></tr></tbody></table></div><button class="btn btn-success float-right js-save" type="button"><span class="fas fa-check mr-2"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></form></div><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Modules') {?>active<?php }?>" id="Modules" data-name="Modules" data-js="data"><form class="js-filter-form"><table class="table table-bordered table-sm u-fs-sm js-confirm-table"><thead><tr class="blockHeader"><th class="text-center"><strong><?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_RELATIONSHIPS_BASED_ON_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_RELATIONSHIP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Components\InterestsConflict::getModules(), 'ROW', false, 'KEY');
$_smarty_tpl->tpl_vars['ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->tpl_vars['ROW']->do_else = false;
?><tr><td class="text-center"><input class="js-change align-middle" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['key'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['CONFIG_DATA']->value['modules'][$_smarty_tpl->tpl_vars['ROW']->value['key']]))) {?>checked="" <?php }?> value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['value']);?>
" data-js="change"></td><td><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['ROW']->value['target'];?>
 mx-2"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROW']->value['target'],$_smarty_tpl->tpl_vars['ROW']->value['target']);?>
</td><td><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['ROW']->value['base'];?>
 mx-2"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROW']->value['base'],$_smarty_tpl->tpl_vars['ROW']->value['base']);?>
</td><td class="pl-2"><?php echo $_smarty_tpl->tpl_vars['ROW']->value['map'];?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></form></div><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Confirmations') {?>active<?php }?>" id="Confirmations" data-name="Confirmations" data-js="data"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('InterestsConflictConfirmations.tpl','AppComponents'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="js-tab tab-pane <?php if ($_smarty_tpl->tpl_vars['ACTIVE_TAB']->value == 'Unlock') {?>active<?php }?>" id="Unlock" data-name="Unlock" data-js="data"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('InterestsConflictUnlock.tpl','AppComponents'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><!-- /tpl-Settings-InterestsConflict-Index -->
<?php }
}
