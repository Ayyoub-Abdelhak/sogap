<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:41:05
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Filters\Groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659539c1109c13_25943150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ab593e2571e98f90d090c09a7ad893146db35d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Filters\\Groups.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659539c1109c13_25943150 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Filters-Groups --><?php if (!empty($_smarty_tpl->tpl_vars['FILTER_DATA']->value)) {
$_smarty_tpl->_assignInScope('SELECT_ALL_BY_DEFAULT', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('calendar_all_users_by_default'));?><div class="js-filter__container"><?php if (!App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {?><div class="input-group input-group-sm mb-3"><div class="input-group-prepend"><span class="input-group-text"><span class="fas fa-search fa-fw"></span></span></div><input type="text" class="form-control js-filter__search" placeholder="<?php echo \App\Language::translate('LBL_GROUP_NAME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></div><ul class="nav form-row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTER_DATA']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><li class="js-filter__item__container m-0 p-0 col-12 mb-1" data-js="classs: d-none"><div class="mr-0 pr-0 col-12 form-row d-flex align-items-center"><div class="mr-2"><input value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" type="checkbox" id="ownerId<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"class="js-input-user-owner-id alignMiddle mr-2"<?php if ((empty($_smarty_tpl->tpl_vars['HISTORY_USERS']->value) && $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['OWNER_ID']->value) || ((isset($_smarty_tpl->tpl_vars['HISTORY_USERS']->value['selectedIds'][0])) && (($_smarty_tpl->tpl_vars['HISTORY_USERS']->value['selectedIds'][0] == 'all' || in_array($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['HISTORY_USERS']->value['selectedIds'])) && !in_array($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['HISTORY_USERS']->value['excludedIds']))) || $_smarty_tpl->tpl_vars['SELECT_ALL_BY_DEFAULT']->value == '1') {?>checked<?php }?>></div><label class="m-0 p-0 col-9 col-xxl-10 js-filter__item__value u-text-ellipsis" for="ownerId<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
"><div class="ownerCBg_<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
 d-inline-block align-middle mr-1 u-w-1em u-h-1em"></div><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</label></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } else { ?><select class="js-input-role-owner-id-ajax form-control" data-validation-engine="validate[required]" title="<?php echo \App\Language::translate('LBL_TRANSFER_OWNERSHIP',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"name="transferRoleOwnerId" id="transferRoleOwnerId" multiple="multiple"data-ajax-search="1"data-ajax-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&action=Fields&mode=getOwners&fieldName=assigned_user_id&result[]=groups"data-minimum-input="<?php echo App\Config::performance('OWNER_MINIMUM_INPUT_LENGTH');?>
"><option value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('id');?>
"data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</option></select><?php }?></div><?php }?><!-- /tpl-Base-Filters-Groups -->
<?php }
}
