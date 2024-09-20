<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:21:52
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Profiles\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953540e6cc50_62740443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50ccc4858b49f904e2f8e48622527f3e862e8568' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Profiles\\DetailView.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953540e6cc50_62740443 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Profiles-DetailView --><div class=""><div class="o-breadcrumb widget_header row"><div class="col-md-10"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-md-2"><button class="btn btn-info float-right mt-1" type="button" onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getEditViewUrl();?>
"'><?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div><div class="clearfix"></div><div class="profileDetailView"><div><div class="row"><div class="col-md-12"><label class="muted"><span class="redColor">*</span><?php echo \App\Language::translate('LBL_PROFILE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </label>&nbsp;<span name="profilename" id="profilename" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
"><strong><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
</strong></span></div></div><div class="row"><div class="col-md-12"><label class="muted"><?php echo \App\Language::translate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label>&nbsp;<span name="description" id="description"><strong><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDescription();?>
</strong></span></div></div><?php $_smarty_tpl->_assignInScope('ENABLE_CLASS_ICON', "fas fa-check text-success");
$_smarty_tpl->_assignInScope('DISABLE_CLASS_ICON', "fas fa-times text-danger");?><div class="summaryWidgetContainer"><div class="row "><div class="col-md-3"><span class="mr-2 mt-1 <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasGlobalReadPermission()) {
echo $_smarty_tpl->tpl_vars['ENABLE_CLASS_ICON']->value;
} else {
echo $_smarty_tpl->tpl_vars['DISABLE_CLASS_ICON']->value;
}?>"></span><?php echo \App\Language::translate('LBL_VIEW_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9"><i class="fas fa-info-circle mt-1"></i><span class="ml-2"><?php echo \App\Language::translate('LBL_VIEW_ALL_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><div class="row"><div class="col-md-3"><span class="mr-2 mt-1 <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasGlobalWritePermission()) {
echo $_smarty_tpl->tpl_vars['ENABLE_CLASS_ICON']->value;
} else {
echo $_smarty_tpl->tpl_vars['DISABLE_CLASS_ICON']->value;
}?>"></span><?php echo \App\Language::translate('LBL_EDIT_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-9"><i class="fas fa-info-circle mt-1"></i><span class="ml-2"><?php echo \App\Language::translate('LBL_EDIT_ALL_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div></div><table class="table customTableRWD table-striped table-bordered"><thead><tr><th width="27%"><?php echo \App\Language::translate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide="phone" width="11%"><span class="horizontalAlignCenter">&nbsp;<?php echo \App\Language::translate('LBL_VIEW_PRIVILEGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th data-hide="phone" width="12%"><span class="horizontalAlignCenter">&nbsp;<?php echo \App\Language::translate('LBL_CREATE_PRIVILIGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th data-hide="phone" width="12%"><span class="horizontalAlignCenter">&nbsp;<?php echo \App\Language::translate('LBL_EDIT_PRIVILIGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th data-hide="phone" width="11%"><span class="horizontalAlignCenter"><?php echo \App\Language::translate('LBL_DELETE_PRIVILIGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></th><th width="39%" nowrap="nowrap"><?php echo \App\Language::translate('LBL_FIELD_AND_TOOL_PRVILIGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getModulePermissions(), 'PROFILE_MODULE', false, 'TABID');
$_smarty_tpl->tpl_vars['PROFILE_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['PROFILE_MODULE']->value) {
$_smarty_tpl->tpl_vars['PROFILE_MODULE']->do_else = false;
?><tr data-name="<?php echo $_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getName();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"><td><span class="mr-2 mt-1 <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value)) {
echo $_smarty_tpl->tpl_vars['ENABLE_CLASS_ICON']->value;
} else {
echo $_smarty_tpl->tpl_vars['DISABLE_CLASS_ICON']->value;
}?>"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->get('label'),$_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getName());?>
</td><?php $_smarty_tpl->_assignInScope('BASIC_ACTION_ORDER', array(2,3,0,1));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BASIC_ACTION_ORDER']->value, 'ACTION_ID');
$_smarty_tpl->tpl_vars['ACTION_ID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_ID']->value) {
$_smarty_tpl->tpl_vars['ACTION_ID']->do_else = false;
?><td class="text-center"><?php $_smarty_tpl->_assignInScope('ACTION_MODEL', $_smarty_tpl->tpl_vars['ALL_BASIC_ACTIONS']->value[$_smarty_tpl->tpl_vars['ACTION_ID']->value]);
if ($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->isModuleEnabled($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value)) {?><span class="mr-2 mt-1 <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value,$_smarty_tpl->tpl_vars['ACTION_MODEL']->value)) {
echo $_smarty_tpl->tpl_vars['ENABLE_CLASS_ICON']->value;
} else {
echo $_smarty_tpl->tpl_vars['DISABLE_CLASS_ICON']->value;
}?>"></span><?php }?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><td style="border-left: 1px solid #DDD !important;"><?php if ($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getFields() || $_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->isUtilityActionEnabled()) {?><div class="row"><span class="col-md-4">&nbsp;</span><span class="col-md-4"><button type="button" data-handlerfor="fields" data-togglehandler="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-fields" class="btn btn-sm btn-light" style="padding-right: 20px; padding-left: 20px;"><i class="fas fa-chevron-down"></i></button></span></div><?php }?></td></tr><tr class="d-none"><td colspan="6" data-toggle-visible="false"><div data-togglecontent="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-fields"><?php if ($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getFields()) {?><div class="col-md-12"><label class="themeTextColor font-x-large float-left"><strong><?php echo \App\Language::translate('LBL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class="float-right"><span class="mini-slider-control ui-slider" data-value="0"><a style="margin-top: 4px;" class="ui-slider-handle"></a></span><span style="margin-left:25px;margin-right: 15px;"><?php echo \App\Language::translate('LBL_INVISIBLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;<span class="mini-slider-control ui-slider" data-value="1"><a style="margin-top: 4px;" class="ui-slider-handle"></a></span><span style="margin-left:25px;margin-right: 15px;"><?php echo \App\Language::translate('LBL_READ_ONLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;<span class="mini-slider-control ui-slider" data-value="2"><a style="margin-top: 4px;" class="ui-slider-handle"></a></span><span style="margin-left:25px;margin-right: 15px;"><?php echo \App\Language::translate('LBL_WRITE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;</div><div class="clearfix"></div></div><table class="table table-bordered table-striped col-12"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getFields(), 'FIELD_MODEL', false, 'FIELD_NAME', 'fields', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['total'];
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveField()) {
$_smarty_tpl->_assignInScope('FIELD_ID', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId());
if ($_smarty_tpl->tpl_vars['COUNTER']->value%3 == 0) {?><tr><?php }?><td><?php $_smarty_tpl->_assignInScope('DATA_VALUE', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getModuleFieldPermissionValue($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value));
if ($_smarty_tpl->tpl_vars['DATA_VALUE']->value == 0) {?><span class="mini-slider-control ui-slider" data-value="0"><a style="margin-top: 4px;" class="ui-slider-handle"></a></span><?php } elseif ($_smarty_tpl->tpl_vars['DATA_VALUE']->value == 1) {?><span class="mini-slider-control ui-slider" data-value="1"><a style="margin-top: 4px;" class="ui-slider-handle"></a></span><?php } else { ?><span class="mini-slider-control ui-slider" data-value="2"><a style="margin-top: 4px;" class="ui-slider-handle"></a></span><?php }?><span style="margin-left: 25px"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><span class="redColor">*</span><?php }?> <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getName());?>
</span></td><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['last'] : null) || ($_smarty_tpl->tpl_vars['COUNTER']->value+1)%3 == 0) {?></tr><?php }
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div></ul><?php }?></div></td></tr><tr class="d-none"><td colspan="6" data-toggle-visible="false"><div data-togglecontent="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-fields"><div class="col-md-12"><label class="themeTextColor font-x-large float-left"><strong><?php echo \App\Language::translate('LBL_TOOLS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><table class="table table-bordered table-striped"><?php $_smarty_tpl->_assignInScope('UTILITY_ACTION_COUNT', 0);
$_smarty_tpl->_assignInScope('ALL_UTILITY_ACTIONS_ARRAY', array());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_UTILITY_ACTIONS']->value, 'ACTION_MODEL');
$_smarty_tpl->tpl_vars['ACTION_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_MODEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->isModuleEnabled($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value)) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['ALL_UTILITY_ACTIONS_ARRAY']) ? $_smarty_tpl->tpl_vars['ALL_UTILITY_ACTIONS_ARRAY']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['ACTION_MODEL']->value;
$_smarty_tpl->_assignInScope('ALL_UTILITY_ACTIONS_ARRAY', $_tmp_array);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_UTILITY_ACTIONS_ARRAY']->value, 'ACTION_MODEL', false, NULL, 'actions', array (
  'index' => true,
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['ACTION_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_MODEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['total'];
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index'] : null)%3 == 0) {?><tr><?php }
$_smarty_tpl->_assignInScope('ACTION_ID', $_smarty_tpl->tpl_vars['ACTION_MODEL']->value->get('actionid'));?><td <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last'] : null) && (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index'] : null)+1)%3 != 0)) {
$_smarty_tpl->_assignInScope('index', ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index'] : null)+1)%3);
$_smarty_tpl->_assignInScope('colspan', 4-$_smarty_tpl->tpl_vars['index']->value);?>colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"<?php }?>><span class="mr-2 mt-1 <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value,$_smarty_tpl->tpl_vars['ACTION_ID']->value)) {
echo $_smarty_tpl->tpl_vars['ENABLE_CLASS_ICON']->value;
} else {
echo $_smarty_tpl->tpl_vars['DISABLE_CLASS_ICON']->value;
}?>" data-id="<?php echo $_smarty_tpl->tpl_vars['ACTION_ID']->value;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['ACTION_MODEL']->value->get('actionname');?>
"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last'] : null) || ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index'] : null)+1)%3 == 0) {?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div><br /></div><!-- /tpl-Settings-Profiles-DetailView -->
<?php }
}
