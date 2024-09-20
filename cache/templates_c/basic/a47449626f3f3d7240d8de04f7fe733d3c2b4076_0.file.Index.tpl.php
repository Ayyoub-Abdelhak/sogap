<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:17:36
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\SharingAccess\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953440339ab5_18605788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a47449626f3f3d7240d8de04f7fe733d3c2b4076' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\SharingAccess\\Index.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953440339ab5_18605788 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="" id="sharingAccessContainer"><div class="contents"><form name="EditSharingAccess" action="index.php" method="post" class="form-horizontal" id="js-edit-sharing-access" data-js="submit"><input type="hidden" name="module" value="SharingAccess" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="dependentModules" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['DEPENDENT_MODULES']->value));?>
' /><div class="o-breadcrumb widget_header row align-items-center"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-md-4"><button class="btn btn-success float-right d-none" type="submit" name="saveButton"><strong><?php echo \App\Language::translate('LBL_APPLY_NEW_SHARING_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div><table class="table tableRWD table-bordered table-sm sharingAccessDetails mt-2"><colgroup><col width="20%"><col width="15%"><col width="15%"><col width="20%"><col width="10%"><col width="20%"></colgroup><thead><tr class="blockHeader"><th><?php echo \App\Language::translate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIONS']->value, 'ACTION_MODEL', false, 'ACTION_ID');
$_smarty_tpl->tpl_vars['ACTION_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_ID']->value => $_smarty_tpl->tpl_vars['ACTION_MODEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_MODEL']->do_else = false;
?><th><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><th nowrap="nowrap"><?php echo \App\Language::translate('LBL_ADVANCED_SHARING_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE_MODEL', false, 'TABID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><tr data-module-name="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
"><td><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName() == 'Accounts') {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
}?></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIONS']->value, 'ACTION_MODEL', false, 'ACTION_ID');
$_smarty_tpl->tpl_vars['ACTION_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_ID']->value => $_smarty_tpl->tpl_vars['ACTION_MODEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_MODEL']->do_else = false;
?><td class=""><?php if ($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->isModuleEnabled($_smarty_tpl->tpl_vars['MODULE_MODEL']->value)) {?><div><input type="radio" name="permissions[<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
]" data-action-state="<?php echo $_smarty_tpl->tpl_vars['ACTION_MODEL']->value->getName();?>
" title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['ACTION_ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getPermissionValue() == $_smarty_tpl->tpl_vars['ACTION_ID']->value) {?>checked="true" <?php }?>></div><?php }?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><td class="triggerCustomSharingAccess"><div class="row"><div class="col-md-3">&nbsp;</div><div class="col-md-6"><button type="button" class="btn btn-sm btn-light vtButton arrowDown row" data-handlerfor="fields" data-togglehandler="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-rules"><img src="<?php echo \App\Layout::getImagePath('Arrow-down.png');?>
" alt=""></img></button><button type="button" class="btn btn-sm btn-light vtButton arrowUp row d-none" data-handlerfor="fields" data-togglehandler="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-rules"><img src="<?php echo \App\Layout::getImagePath('Arrow-up.png');?>
" alt=""></img></button></div></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div><div class="float-right"><button class="btn btn-success d-none" type="submit" name="saveButton"><strong><?php echo \App\Language::translate('LBL_APPLY_NEW_SHARING_RULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></form></div></div>
<?php }
}
