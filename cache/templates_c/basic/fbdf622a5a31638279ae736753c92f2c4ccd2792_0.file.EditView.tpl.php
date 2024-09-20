<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:16:52
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Roles\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65953414b7bde0_10416141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbdf622a5a31638279ae736753c92f2c4ccd2792' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Roles\\EditView.tpl',
      1 => 1702905765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65953414b7bde0_10416141 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Roles-EditView"><div class="row widget_header"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><form name="EditRole" action="index.php" method="post" id="EditView" class="form-horizontal"><input type="hidden" name="module" value="Roles"/><input type="hidden" name="action" value="Save"/><input type="hidden" name="parent" value="Settings"/><?php $_smarty_tpl->_assignInScope('RECORD_ID', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId());?><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"/><?php ob_start();
if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getParent()) {
echo "true";
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('HAS_PARENT', $_prefixVariable1);
if ($_smarty_tpl->tpl_vars['HAS_PARENT']->value) {?><input type="hidden" name="parent_roleid" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getParent()->getId();?>
"><?php }?><div class="mt-2"><div class="row mb-2"><div class="col-md-4"><label class=""><span class="redColor">*</span><strong><?php echo \App\Language::translate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label></div><div class=" col-md-7 "><input type="text" class="fieldValue form-control" name="rolename" id="profilename" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
" data-validation-engine="validate[required]"/></div></div><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_REPORTS_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label><div class="col-md-7 fieldValue"><input type="hidden" name="parent_roleid"<?php if ($_smarty_tpl->tpl_vars['HAS_PARENT']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getParent()->getId();?>
"<?php }?>><input type="text" class="form-control" name="parent_roleid_display"<?php if ($_smarty_tpl->tpl_vars['HAS_PARENT']->value) {?>value="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getParent()->getName(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"<?php }?>readonly></div></div><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_MULTI_COMPANY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label><div class="col-md-7 fieldValue"><select id="company" class="row select2 form-control" name="company"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getMultiCompany(), 'COMPANY');
$_smarty_tpl->tpl_vars['COMPANY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['COMPANY']->value) {
$_smarty_tpl->tpl_vars['COMPANY']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['COMPANY']->value['multicompanyid'];?>
"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('company') == $_smarty_tpl->tpl_vars['COMPANY']->value['multicompanyid']) {?>selected="true"<?php }?>><?php echo $_smarty_tpl->tpl_vars['COMPANY']->value['company_name'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_CAN_ASSIGN_OWNER_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label><div class="col-md-7 fieldValue"><select id="allowassignedrecordsto" class="row select2 form-control" name="allowassignedrecordsto"><option value="1"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('allowassignedrecordsto') == '1') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_ALL_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('allowassignedrecordsto') == '2') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_USERS_WITH_SAME_OR_LOWER_LEVEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('allowassignedrecordsto') == '3') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_USERS_WITH_LOWER_LEVEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="4"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('allowassignedrecordsto') == '4') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_JUST_ME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="5"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('allowassignedrecordsto') == '5') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_FROM_PANEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_CAN_ASSIGN_MULTIOWNER_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong></label><div class="col-md-7 fieldValue"><select id="assignedmultiowner" class="row select2 form-control" name="assignedmultiowner"><option value="1"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('assignedmultiowner') == '1') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_ALL_USERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('assignedmultiowner') == '2') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_USERS_WITH_SAME_OR_LOWER_LEVEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('assignedmultiowner') == '3') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_USERS_WITH_LOWER_LEVEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="4"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('assignedmultiowner') == '4') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_JUST_ME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="5"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('assignedmultiowner') == '5') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_FROM_PANEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="row mb-2"><label class="col-md-4"><span class="redColor">*</span><strong><?php echo \App\Language::translate('LBL_PROFILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><?php $_smarty_tpl->_assignInScope('ROLE_PROFILES', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getProfiles());?><select class="select2" multiple="true" id="profilesList" name="profiles[]" data-placeholder="<?php echo \App\Language::translate('LBL_CHOOSE_PROFILES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"data-validation-engine="validate[required]" style="width: 800px"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_PROFILES']->value, 'PROFILE');
$_smarty_tpl->tpl_vars['PROFILE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PROFILE']->value) {
$_smarty_tpl->tpl_vars['PROFILE']->do_else = false;
if ($_smarty_tpl->tpl_vars['PROFILE']->value->isDirectlyRelated() == false) {
$_smarty_tpl->_assignInScope('PROFILE_ID', $_smarty_tpl->tpl_vars['PROFILE']->value->getId());?><option value="<?php echo $_smarty_tpl->tpl_vars['PROFILE_ID']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['ROLE_PROFILES']->value[$_smarty_tpl->tpl_vars['PROFILE_ID']->value]))) {?>selected="true"<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PROFILE']->value->getName(),'Settings::Profiles');?>
</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="row"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_POSSIBLE_CHANGE_OWNER_OF_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><div class="float-left"><input type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('changeowner')) {?> checked="" <?php }?>name="changeowner" class="alignTop"/></div></div></div><hr/><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_PERMISSIONS_TO_LIST_RELATED_RECORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><select id="listRelatedRecord" class="row select2 form-control" name="listRelatedRecord"><option value="0"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('listrelatedrecord') == '0') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="1"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('listrelatedrecord') == '1') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_ONLY_PARENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('listrelatedrecord') == '2') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_ACCORDING_TO_HIERARCHY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_PERMISSIONS_TO_VIEW_RELATED_RECORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><select id="previewRelatedRecord" class="row select2 form-control" name="previewRelatedRecord"><option value="0"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('previewrelatedrecord') == '0') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="1"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('previewrelatedrecord') == '1') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_ONLY_PARENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('previewrelatedrecord') == '2') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_ACCORDING_TO_HIERARCHY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_PERMISSIONS_FIELD_RELATED_RECORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><?php if (!$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('permissionsrelatedfield')) {
$_smarty_tpl->_assignInScope('PERMISSIONS_RELATED_FIELD', array());
} else {
$_smarty_tpl->_assignInScope('PERMISSIONS_RELATED_FIELD', explode(',',$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('permissionsrelatedfield')));
}?><select id="permissionsRelatedField" class="row select2 form-control" name="permissionsRelatedField[]" multiple><option value="0"<?php if (in_array('0',$_smarty_tpl->tpl_vars['PERMISSIONS_RELATED_FIELD']->value)) {?>selected="true"<?php }?>><?php echo \App\Language::translate('Assigned To',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="1"<?php if (in_array('1',$_smarty_tpl->tpl_vars['PERMISSIONS_RELATED_FIELD']->value)) {?>selected="true"<?php }?>><?php echo \App\Language::translate('Share with users',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2"<?php if (in_array('2',$_smarty_tpl->tpl_vars['PERMISSIONS_RELATED_FIELD']->value)) {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_PERMITTED_BY_SHARING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3"<?php if (in_array('3',$_smarty_tpl->tpl_vars['PERMISSIONS_RELATED_FIELD']->value)) {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_PERMITTED_BY_READ_ACCESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="row"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_PERMISSIONS_TO_EDIT_RELATED_RECORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><div class="float-left"><input type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('editrelatedrecord')) {?> checked="" <?php }?>name="editRelatedRecord" class="alignTop"/></div></div></div><hr/><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_SEARCH_WITHOUT_PERMISSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><?php if (!$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('searchunpriv')) {
$_smarty_tpl->_assignInScope('SEARCH_MODULES', array());
} else {
$_smarty_tpl->_assignInScope('SEARCH_MODULES', explode(',',$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('searchunpriv')));
}?><select id="modulesList" class="row modules select2 form-control" multiple="true" name="searchunpriv[]"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Vtiger_Module_Model::getAll(array(0),array(),true), 'MODULE_MODEL', false, 'TABID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"<?php if (in_array($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['SEARCH_MODULES']->value)) {?>selected="true"<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_SHOW_GLOBAL_SEARCH_ADVANCED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><div class="float-left"><input type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('globalsearchadv')) {?> checked="" <?php }?>name="globalSearchAdvanced" class="alignTop"/></div></div></div><div class="row mb-2"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_BROWSING_OTHER_USERS_GRAPHICAL_CALENDAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><select id="clendarallorecords" class="row select2 form-control" name="clendarallorecords"><option value="1"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('clendarallorecords') == '1') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_CLENDAR_ALLO_RECORDS_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('clendarallorecords') == '2') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_CLENDAR_ALLO_RECORDS_2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3"<?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('clendarallorecords') == '3') {?>selected="true"<?php }?>><?php echo \App\Language::translate('LBL_CLENDAR_ALLO_RECORDS_3',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><hr><div class="form-group row"><label class="col-md-4"><strong><?php echo \App\Language::translate('LBL_AUTO_ASSIGN_RECORDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></label><div class="col-md-7 fieldValue"><div class="float-left"><input type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('auto_assign')) {?> checked="" <?php }?>name="auto_assign" class="alignTop"/></div></div></div></div><div class="float-right marginRight10px paddingTop20"><button class="btn btn-success" type="submit"><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><button class="cancelLink btn btn-warning" onclick="javascript:window.history.back();" type="reset"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><?php if (count($_smarty_tpl->tpl_vars['ROLE_USERS']->value) > 0) {?><hr/><h4><?php echo \App\Language::translate('LBL_USERS_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><br/><table class="table table-striped"><thead><tr><th><?php echo \App\Language::translate('User Name','Users');?>
</th><th><?php echo \App\Language::translate('First Name','Users');?>
</th><th><?php echo \App\Language::translate('Last Name','Users');?>
</th><th><?php echo \App\Language::translate('Email','Users');?>
</th><th><?php echo \App\Language::translate('Status','Users');?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLE_USERS']->value, 'USER', false, 'key');
$_smarty_tpl->tpl_vars['USER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['USER']->value) {
$_smarty_tpl->tpl_vars['USER']->do_else = false;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['USER']->value->get('user_name');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['USER']->value->get('first_name');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['USER']->value->get('last_name');?>
</td><td><?php echo $_smarty_tpl->tpl_vars['USER']->value->get('email1');?>
</td><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['USER']->value->get('status'),'Users');?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><?php }?></form></div>
<?php }
}
