<?php
/* Smarty version 4.2.0, created on 2023-12-21 12:17:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Users\ListViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65841ebc3416f4_94818501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61e3ae4994db635aaf09a1d0c3a847067bbe460e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Users\\ListViewHeader.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65841ebc3416f4_94818501 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-ListViewHeader --><div class="listViewPageDiv"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="listViewActionsDiv my-2 row"><div class="col-md-4 btn-toolbar"><span class="btn-group listViewMassActions"><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value) > 0 || count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW']) > 0) {?><button class="btn btn-light mr-1 dropdown-toggle" data-toggle="dropdown"><span class="fas fa-list mr-1"></span><?php echo \App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value, 'LISTVIEW_MASSACTION', false, NULL, 'actionCount', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_actionCount']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_actionCount']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_actionCount']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_actionCount']->value['total'];
?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getLabel());?>
"><a class="dropdown-item" href="javascript:void(0);"<?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl(),'javascript:') === 0) {?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?>onclick="Vtiger_List_Js.triggerMassAction('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl();?>
')" <?php }?>><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->get('linkicon') != '') {?><span class="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->get('linkicon');?>
"></span>&nbsp;&nbsp;<?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actionCount']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actionCount']->value['last'] : null) == true) {?><li class="dropdown-divider"></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW'], 'LISTVIEW_ADVANCEDACTIONS');
$_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->do_else = false;
?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_advancedAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel());?>
"><a class="dropdown-item" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl(),'javascript:') === 0) {?> href="javascript:void(0);" onclick="<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl(),strlen("javascript:"));?>
;" <?php } else { ?> href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getUrl();?>
" <?php }?>><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->get('linkicon') != '') {?><span class="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->get('linkicon');?>
"></span>&nbsp;&nbsp;<?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['LISTVIEW_ADVANCEDACTIONS']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }?></span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LISTVIEW_BASICACTION');
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value) {
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->do_else = false;
?><span class="btn-group"><button class="btn btn-light addButton" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:') === 0) {?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php } else { ?> onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
'"<?php }?>><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></span><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="col-md-4 btn-toolbar ml-0"><select class="select2 form-control" id="usersFilter" name="status"><option value='[[["status","e","Active"]]]'><?php echo \App\Language::translate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value='[[["status","e","Inactive"]]]'><?php echo \App\Language::translate('LBL_INACTIVE_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(Settings_Password_Record_Model::getPasswordChangeDateCondition()));?>
"><?php echo \App\Language::translate('LBL_USERS_NEED_CHANGE_PASSWORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div><div class=" col-md-4"><div class="float-right"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></div><div class="listViewContentDiv" id="listViewContents"><!-- /tpl-Users-ListViewHeader -->
<?php }
}
