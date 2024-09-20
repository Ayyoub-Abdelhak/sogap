<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:41:04
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Filters\Users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659539c0ef1502_66791262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bf1ea7fdd5a5c6136954ab401d772697684dc24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Filters\\Users.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659539c0ef1502_66791262 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Filters-Users --><?php if (!empty($_smarty_tpl->tpl_vars['FILTER_DATA']->value)) {
$_smarty_tpl->_assignInScope('SELECT_ALL_BY_DEFAULT', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('calendar_all_users_by_default'));
$_smarty_tpl->_assignInScope('PIN_USER', App\Config::module($_smarty_tpl->tpl_vars['MODULE_NAME']->value,'showPinUser'));?><div class="js-filter__container"><div class="form-row d-flex align-items-center m-0"><input type="checkbox" class="alignMiddle js-select-all mr-2" title="<?php echo \App\Language::translate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['SELECT_ALL_BY_DEFAULT']->value == '1') {?> checked <?php }?>><h6 class="boxFilterTitle mt-2 mx-auto"><?php echo \App\Language::translate('LBL_SELECT_CALENDAR',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></div><?php if (!App\Config::performance('SEARCH_OWNERS_BY_AJAX')) {?><div class="input-group input-group-sm mb-3"><div class="input-group-prepend"><span class="input-group-text"><span class="fas fa-search fa-fw"></span></span></div><input type="text" class="form-control js-filter__search" placeholder="<?php echo \App\Language::translate('LBL_USER_NAME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" aria-describedby="search-icon"></div><ul class="nav form-row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTER_DATA']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?><li class="js-filter__item__container m-0 p-0 col-12 mb-1" data-js="classs: d-none"><div class="mr-0 pr-0 col-12 form-row d-flex align-items-center"><div class="mr-2"><input value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" type="checkbox" id="ownerId<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" class="js-input-user-owner-id alignMiddle mr-2"<?php if ((empty($_smarty_tpl->tpl_vars['HISTORY_USERS']->value) && $_smarty_tpl->tpl_vars['USER_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['OWNER_ID']->value) || ((isset($_smarty_tpl->tpl_vars['HISTORY_USERS']->value['selectedIds'][0])) && (($_smarty_tpl->tpl_vars['HISTORY_USERS']->value['selectedIds'][0] == 'all' || in_array($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['HISTORY_USERS']->value['selectedIds'])) && !in_array($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['HISTORY_USERS']->value['excludedIds']))) || (empty($_smarty_tpl->tpl_vars['HISTORY_USERS']->value) && $_smarty_tpl->tpl_vars['SELECT_ALL_BY_DEFAULT']->value == '1')) {?>checked<?php }?>><?php if (!empty($_smarty_tpl->tpl_vars['PIN_USER']->value)) {?><div class="js-pin-user d-inline-block align-middle text-center" data-elementid="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-js="click|data-elementid"><span class="<?php if (empty($_smarty_tpl->tpl_vars['FAVORITES_USERS']->value[$_smarty_tpl->tpl_vars['OWNER_ID']->value])) {?>far<?php } else { ?>fas<?php }?> fa-star js-pin-icon u-cursor-pointer" data-js="class: fas | far"></span></div><?php }?></div><label class="m-0 p-0 col-9 col-xxl-10 js-filter__item__value u-text-ellipsis--no-hover" for="ownerId<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" title="<?php echo App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['OWNER_NAME']->value);?>
"><div class="ownerCBg_<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
 d-inline-block align-middle mr-1 u-w-1em u-h-1em"></div><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</label></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php } else { ?><select class="js-input-user-owner-id-ajax form-control" data-validation-engine="validate[required]" title="<?php echo \App\Language::translate('LBL_TRANSFER_OWNERSHIP',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"name="transferOwnerId" id="transferOwnerId" multiple="multiple"data-ajax-search="1"data-ajax-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&action=Fields&mode=getOwners&fieldName=assigned_user_id&result[]=users"data-minimum-input="<?php echo App\Config::performance('OWNER_MINIMUM_INPUT_LENGTH');?>
"><option value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('id');?>
"data-picklistvalue="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</option></select><?php }?></div><?php }?><!-- tpl-Base-Filters-Users -->
<?php }
}
