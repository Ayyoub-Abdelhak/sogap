<?php
/* Smarty version 4.2.0, created on 2023-12-19 15:11:05
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\PermissionInspector\UserListModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581a479602ee4_26899788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4321e4a6f15b6c6eb36cdaef6c7d58fc28747f5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\PermissionInspector\\UserListModal.tpl',
      1 => 1702905766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581a479602ee4_26899788 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-PermissionInspector-Modals-UserListModal --><div class="modal-header"><h5 class="modal-title"><span class="fas fa-user-secret mr-1"></span><?php echo \App\Language::translate('LBL_INSPECTION_PERMISSION_HEADER',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">&times;</span></button></div><div class="modal-body"><table class="table-responsive table table-sm js-modal-data-table"><thead><tr><?php if ($_smarty_tpl->tpl_vars['WATCHDOG']->value || $_smarty_tpl->tpl_vars['SRC_RECORD_ID']->value != 0) {?><th class="u-w-60px text-left"></th><?php }?><th class="text-center"><?php echo \App\Language::translate('LBL_FULL_USER_NAME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th><th class="text-center"><?php echo \App\Language::translate('LBL_VIEW_PRVILIGE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th><th class="text-center"><?php echo \App\Language::translate('LBL_CREATE_PRIVILIGE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th><th class="text-center"><?php echo \App\Language::translate('LBL_EDIT_PRIVILIGE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th><th class="text-center"><?php echo \App\Language::translate('LBL_DELETE_PRIVILIGE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS_PERMISSION']->value, 'ITEM', false, 'USER_ID');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USER_ID']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-id="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['WATCHDOG']->value || $_smarty_tpl->tpl_vars['SRC_RECORD_ID']->value != 0) {?><th scope="row" class="text-center"><?php if ($_smarty_tpl->tpl_vars['WATCHDOG']->value) {
if ($_smarty_tpl->tpl_vars['ITEM']->value['watchdog']['active']) {?><button type="button" class="btn btn-info btn-xs" data-off="btn-sm btn-light" data-on="btn-sm btn-info" data-value="0" data-user="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"data-record="<?php echo $_smarty_tpl->tpl_vars['SRC_RECORD_ID']->value;?>
"onclick="Vtiger_Index_Js.changeWatching(this);"><span class="fas fa-eye"></span></button><?php } else { ?><button type="button" class="btn btn-light btn-xs" data-off="btn-sm btn-light" data-on="btn-sm btn-info" data-value="1" data-user="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"data-record="<?php echo $_smarty_tpl->tpl_vars['SRC_RECORD_ID']->value;?>
"onclick="Vtiger_Index_Js.changeWatching(this);"><span class="far fa-eye-slash"></span></button><?php }
}
if (!empty($_smarty_tpl->tpl_vars['UNREVIEWED_CHANGES']->value[$_smarty_tpl->tpl_vars['USER_ID']->value]['a'])) {?><span class="badge bgDanger ml-1" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_CHANGES','ModTracker');?>
"><?php echo $_smarty_tpl->tpl_vars['UNREVIEWED_CHANGES']->value[$_smarty_tpl->tpl_vars['USER_ID']->value]['a'];?>
</span><?php }
if (!empty($_smarty_tpl->tpl_vars['UNREVIEWED_CHANGES']->value[$_smarty_tpl->tpl_vars['USER_ID']->value]['m'])) {?><span class="badge bgBlue mail ml-1" title="<?php echo \App\Language::translate('LBL_NUMBER_UNREAD_MAILS','ModTracker');?>
"><?php echo $_smarty_tpl->tpl_vars['UNREVIEWED_CHANGES']->value[$_smarty_tpl->tpl_vars['USER_ID']->value]['m'];?>
</span><?php }?></th><?php }?><th scope="row" class="text-center"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['userName'];?>
</th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITEM']->value['privileges'], 'ACTION');
$_smarty_tpl->tpl_vars['ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION']->value) {
$_smarty_tpl->tpl_vars['ACTION']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['ACTION']->value['param'])) {
$_smarty_tpl->_assignInScope('ACCESSLOG', \App\Language::translate($_smarty_tpl->tpl_vars['ACTION']->value['accessLog'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['ACTION']->value['param']));
} else {
$_smarty_tpl->_assignInScope('ACCESSLOG', \App\Language::translate($_smarty_tpl->tpl_vars['ACTION']->value['accessLog'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
}?><td class="text-center <?php if (!empty($_smarty_tpl->tpl_vars['ACTION']->value['text'])) {
echo $_smarty_tpl->tpl_vars['ACTION']->value['text'];
}?>"><span class="u-cursor-pointer js-popover-tooltip" data-js="popover"<?php if ($_smarty_tpl->tpl_vars['ACTION']->value['profiles']) {?>title="<?php echo \App\Language::translate('LBL_PROFILES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['ACTION']->value['profiles'];?>
" <?php }?>data-content="<?php echo $_smarty_tpl->tpl_vars['ACCESSLOG']->value;?>
" data-placement="top"><?php if ($_smarty_tpl->tpl_vars['ACTION']->value['isPermitted']) {?><span class="fas fa-check text-success" aria-hidden="true"></span><span class="d-none" aria-hidden="true">1</span><?php } else { ?><span class="fas fa-times text-danger" aria-hidden="true"></span><span class="d-none" aria-hidden="true">0</span><?php }?></span></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><div class="modal-footer"><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button></div><!-- /tpl-PermissionInspector-Modals-UserListModal -->
<?php }
}
