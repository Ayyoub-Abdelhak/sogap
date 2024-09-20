<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:09:16
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Profiles\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9acc2173f7_05720525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7895ab4e06755129c5675836a0b0807c2e7fe0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Profiles\\EditView.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9acc2173f7_05720525 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Profiles-EditView"><form id="EditView" name="EditProfile" action="index.php" method="post" class="form-horizontal"><div class="o-breadcrumb widget_header row"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-md-4 text-right mt-1"><button class="btn btn-success" type="submit"><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="cancelLink btn btn-warning" onclick="javascript:window.history.back();" type="button" title="<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div><input type="hidden" name="module" value="Profiles" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="parent" value="Settings" /><?php $_smarty_tpl->_assignInScope('RECORD_ID', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId());
if ($_smarty_tpl->tpl_vars['RECORD_ID']->value) {?><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><?php }
if ($_smarty_tpl->tpl_vars['MODE']->value) {?><input type="hidden" name="mode" value="<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
" /><?php }?><input type="hidden" name="viewall" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasGlobalReadPermission()) {?>value="1"<?php } else { ?>value="0"<?php }?> /><input type="hidden" name="editall" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasGlobalWritePermission()) {?>value="1"<?php } else { ?>value="0"<?php }?> /><div class="mt-2"><div class="row"><label class="col-md-2"><span class="redColor">*</span><strong><?php echo \App\Language::translate('LBL_PROFILE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label><div class="col-md-8"><input type="text" class="fieldValue form-control" name="profilename" id="profilename" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
" data-validation-engine="validate[required]" /></div></div><br /><div class="row"><label class="col-md-2"><strong><?php echo \App\Language::translate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-8"><textarea class="input-xxlarge fieldValue form-control" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDescription();?>
</textarea></div></div><br /><div class=""><label class=""><strong><?php echo \App\Language::translate('LBL_EDIT_PRIVILIGES_FOR_THIS_PROFILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><br /><table class="table customTableRWD table-bordered profilesEditView"><thead><tr class="blockHeader"><th width="30%" style="border-left: 1px solid #DDD !important;"><input checked="true" class="alignTop" type="checkbox" id="mainModulesCheckBox" />&nbsp;<?php echo \App\Language::translate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide='phone' width="14%" style="border-left: 1px solid #DDD !important;"><input <?php if (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && empty($_smarty_tpl->tpl_vars['IS_DUPLICATE_RECORD']->value)) {?> class="alignTop" checked="true" <?php }?>type="checkbox" id="mainAction4CheckBox" />&nbsp;<?php echo \App\Language::translate('LBL_VIEW_PRIVILEGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide='phone' width="14%" style="border-left: 1px solid #DDD !important;"><input <?php if (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && empty($_smarty_tpl->tpl_vars['IS_DUPLICATE_RECORD']->value)) {?> class="alignTop" checked="true" <?php }?>type="checkbox" id="mainAction7CheckBox" />&nbsp;<?php echo \App\Language::translate('LBL_CREATE_PRIVILIGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide='phone' width="14%" style="border-left: 1px solid #DDD !important;"><input <?php if (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && empty($_smarty_tpl->tpl_vars['IS_DUPLICATE_RECORD']->value)) {?> class="alignTop" checked="true" <?php }?>type="checkbox" id="mainAction1CheckBox" />&nbsp;<?php echo \App\Language::translate('LBL_EDIT_PRIVILIGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide='phone' width="14%" style="border-left: 1px solid #DDD !important;"><input checked="true" class="alignTop" type="checkbox" id="mainAction2CheckBox" />&nbsp;<?php echo \App\Language::translate('LBL_DELETE_PRIVILIGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th width="28%" style="border-left: 1px solid #DDD !important;"><?php echo \App\Language::translate('LBL_FIELD_AND_TOOL_PRVILIGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php $_smarty_tpl->_assignInScope('PROFILE_MODULES', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getModulePermissions());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROFILE_MODULES']->value, 'PROFILE_MODULE', false, 'TABID');
$_smarty_tpl->tpl_vars['PROFILE_MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['PROFILE_MODULE']->value) {
$_smarty_tpl->tpl_vars['PROFILE_MODULE']->do_else = false;
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getName());?><tr><td><div class="float-left mr-1"><input class="modulesCheckBox alignTop" type="checkbox" name="permissions[<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
][is_permitted]"data-value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"data-module-state=""<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value)) {?>checked="true"<?php } else { ?>data-module-unchecked="true" <?php }?>></div><div class="u-w-30per-18rem"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->get('label'),$_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getName());?>
</div></td><?php $_smarty_tpl->_assignInScope('BASIC_ACTION_ORDER', array(2,3,0,1));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BASIC_ACTION_ORDER']->value, 'ORDERID');
$_smarty_tpl->tpl_vars['ORDERID']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ORDERID']->value) {
$_smarty_tpl->tpl_vars['ORDERID']->do_else = false;
?><td style="border-left: 1px solid #DDD !important;"><?php $_smarty_tpl->_assignInScope('ACTION_MODEL', $_smarty_tpl->tpl_vars['ALL_BASIC_ACTIONS']->value[$_smarty_tpl->tpl_vars['ORDERID']->value]);
$_smarty_tpl->_assignInScope('ACTION_ID', $_smarty_tpl->tpl_vars['ACTION_MODEL']->value->get('actionid'));
if ($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->isModuleEnabled($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value)) {?><input style="margin-left: 45% !important" class="action<?php echo $_smarty_tpl->tpl_vars['ACTION_ID']->value;?>
CheckBox"type="checkbox" name="permissions[<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
][actions][<?php echo $_smarty_tpl->tpl_vars['ACTION_ID']->value;?>
]"data-action-state="<?php echo $_smarty_tpl->tpl_vars['ACTION_MODEL']->value->getName();?>
"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value,$_smarty_tpl->tpl_vars['ACTION_MODEL']->value)) {?>checked="true"<?php } elseif (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && empty($_smarty_tpl->tpl_vars['IS_DUPLICATE_RECORD']->value)) {?>checked="true" <?php } else { ?> data-action<?php echo $_smarty_tpl->tpl_vars['ACTION_ID']->value;?>
-unchecked="true"<?php }?>><?php }?></td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><td style="border-left: 1px solid #DDD !important;"><?php if ($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getFields() || $_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->isUtilityActionEnabled()) {?><div class="row"><span class="col-md-12 text-center"><button type="button" data-handlerfor="fields" data-togglehandler="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-fields"class="btn btn-sm btn-light" style="padding-right: 20px; padding-left: 20px;"><i class="fas fa-chevron-down"></i></button></span></div><?php }?></td></tr><?php if ($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value->getFields()) {?><tr class="d-none"><td colspan="6" data-toggle-visible="false"><div data-togglecontent="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-fields"><div class="col-md-12"><label class="themeTextColor font-x-large float-left"><strong><?php echo \App\Language::translate('LBL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div class="float-right"><span class="mini-slider-control ui-slider" data-value="0"><a style="margin-top: 3px;" class="ui-slider-handle"></a></span><span style="margin: 0 20px;"><?php echo \App\Language::translate('LBL_INVISIBLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;&nbsp;<span class="mini-slider-control ui-slider" data-value="1"><a style="margin-top: 3px;" class="ui-slider-handle"></a></span><span style="margin: 0 20px;"><?php echo \App\Language::translate('LBL_READ_ONLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;&nbsp;<span class="mini-slider-control ui-slider" data-value="2"><a style="margin-top: 3px;" class="ui-slider-handle"></a></span><span style="margin: 0 20px;"><?php echo \App\Language::translate('LBL_WRITE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><div class="clearfix"></div></div><div class="col-12 paddingLRZero marginBottom10px"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
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
if ($_smarty_tpl->tpl_vars['COUNTER']->value%3 == 0) {?><div class='col-md-12 row'><?php }?><div class='col-md-4 col-sm-6 col-12 div-bordered padding10' style="border-left: 1px solid #DDD !important;"><?php $_smarty_tpl->_assignInScope('FIELD_LOCKED', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->isModuleFieldLocked($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value));?><input type="hidden" name="permissions[<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
][fields][<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
]"data-range-input="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getModuleFieldPermissionValue($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value);?>
"readonly="true"><div class="mini-slider-control editViewMiniSlider float-left" data-locked="<?php echo $_smarty_tpl->tpl_vars['FIELD_LOCKED']->value;?>
" data-range="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"data-value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getModuleFieldPermissionValue($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value,$_smarty_tpl->tpl_vars['FIELD_MODEL']->value);?>
"></div><div class="float-left"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><span class="redColor">*</span><?php }?><span class="mr-2"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span><span class="text-muted align-text-top u-fs-10px">(<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getBlockName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
)</span></div></div><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_fields']->value['last'] : null) || ($_smarty_tpl->tpl_vars['COUNTER']->value+1)%3 == 0) {?></div><?php }
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></ul></div></td></tr><?php }
$_smarty_tpl->_assignInScope('UTILITY_ACTION_COUNT', 0);
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
if ($_smarty_tpl->tpl_vars['ALL_UTILITY_ACTIONS_ARRAY']->value) {?><tr class="d-none"><td colspan="6" data-toggle-visible="false"><div data-togglecontent="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
-fields"><div class="col-12 paddingLRZero"><label class="themeTextColor font-x-large float-left"><strong><?php echo \App\Language::translate('LBL_TOOLS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="col-md-12 paddingLRZero marginBottom10px"><?php
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
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index'] : null)%3 == 0) {?><div class="col-md-12 row"><?php }
$_smarty_tpl->_assignInScope('ACTIONID', $_smarty_tpl->tpl_vars['ACTION_MODEL']->value->get('actionid'));?><div class='col-md-4 col-sm-6 col-12 padding10' <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last'] : null) && (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index'] : null)+1)%3 != 0)) {
$_smarty_tpl->_assignInScope('index', ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index'] : null)+1)%3);
$_smarty_tpl->_assignInScope('colspan', 4-$_smarty_tpl->tpl_vars['index']->value);?>colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"<?php }?>><input type="checkbox" class="alignTop" name="permissions[<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
][actions][<?php echo $_smarty_tpl->tpl_vars['ACTIONID']->value;?>
]"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['PROFILE_MODULE']->value,$_smarty_tpl->tpl_vars['ACTIONID']->value)) {?>checked="true"<?php } elseif (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value) && empty($_smarty_tpl->tpl_vars['IS_DUPLICATE_RECORD']->value)) {?>checked="true" <?php }?>> <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ACTION_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['last'] : null) || ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_actions']->value['index'] : null)+1)%3 == 0) {?></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></td></tr><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div><br /><div class="float-right"><button class="btn btn-success" type="submit"><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink btn btn-warning" onclick="javascript:window.history.back();" type="reset" title="<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><br /><br /></div></form></div>
<?php }
}
