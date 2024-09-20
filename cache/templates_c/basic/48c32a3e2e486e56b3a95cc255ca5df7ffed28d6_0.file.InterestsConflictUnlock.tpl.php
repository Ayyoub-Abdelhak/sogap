<?php
/* Smarty version 4.2.0, created on 2023-12-28 22:17:57
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\components\InterestsConflictUnlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658de605842d54_38668481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48c32a3e2e486e56b3a95cc255ca5df7ffed28d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\components\\InterestsConflictUnlock.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658de605842d54_38668481 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-AppComponents-InterestsConflictUnlock--><form class="js-filter-form form-inline" data-js="container"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="unlockInputDate"><span class="fas fa-calendar-alt mr-2"></span><?php echo \App\Language::translate('LBL_DATE');?>
</span></div><input name="date" type="text" class="dateRangeField dateFilter form-control text-center" data-calendar-type="range" value="<?php echo $_smarty_tpl->tpl_vars['DATE']->value;?>
" aria-describedby="unlockInputDate" /></div><div class="input-group ml-3"><div class="input-group-prepend"><span class="input-group-text" id="unlockStatusListDESC"><span class="fas fa-stream mr-2"></span><?php echo \App\Language::translate('Status');?>
</span></div><select id="unlockStatusList" class="form-control select2" multiple="true" name="status[]" aria-describedby="unlockStatusListDESC"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['UNLOCK_STATUS_LIST']->value, 'STATUS', false, 'KEY');
$_smarty_tpl->tpl_vars['STATUS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['STATUS']->value) {
$_smarty_tpl->tpl_vars['STATUS']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="input-group ml-3"><div class="input-group-prepend"><span class="input-group-text" id="unlockRelatedDesc"><span class="fas fa-link mr-2"></span><?php echo \App\Language::translate('LBL_RELATED_RECORD');?>
</span></div><input name="related" type="text" class="form-control text-center" placeholder="<?php echo \App\Language::translate('LBL_STARTS_WITH');?>
" value="" aria-describedby="unlockRelatedDesc" /></div><div class="input-group ml-3"><div class="input-group-prepend"><span class="input-group-text" id="unlocUsersListDesc"><span class="yfi yfi-users-2 mr-2"></span><?php echo \App\Language::translate('LBL_USER');?>
</span></div><select id="unlocUsersList" class="form-control select2" multiple="true" name="users[]" aria-describedby="unlocUsersListDesc"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USERS']->value, 'USER', false, 'USER_ID');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['USER_ID']->value => $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['USER']->value->getDisplayName();?>
 (<?php echo $_smarty_tpl->tpl_vars['USER']->value->getRoleDetail()->get('rolename');?>
)</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></form><table id="js-unlock-table" class="table table-sm table-striped display js-unlock-table text-center mt-2"><thead><tr><th><?php echo \App\Language::translate('LBL_DATE');?>
</th><th><?php echo \App\Language::translate('LBL_USER');?>
</th><th><?php echo \App\Language::translate('Status');?>
</th><th><?php echo \App\Language::translate('LBL_RELATED_RECORD');?>
</th><th><?php echo \App\Language::translate('LBL_COMMENT');?>
</th><th><?php echo \App\Language::translate('LBL_ACTIONS');?>
</th></tr></thead></table><!-- /tpl-AppComponents-InterestsConflictUnlock-->
<?php }
}
