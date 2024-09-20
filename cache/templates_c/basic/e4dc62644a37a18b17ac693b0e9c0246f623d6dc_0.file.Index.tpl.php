<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:06:52
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Colors\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9a3c3fa547_68335449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4dc62644a37a18b17ac693b0e9c0246f623d6dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Colors\\Index.tpl',
      1 => 1702905765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9a3c3fa547_68335449 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Colors-Index UserColors"><div class="o-breadcrumb widget_header row"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="contents tabbable mt-2 js-colors-container" data-js="container"><ul class="nav nav-tabs layoutTabs massEditTabs js-colors-tab" data-js="container"><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#userColors"><strong><?php echo \App\Language::translate('LBL_USERS_COLORS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#groupsColors"><strong><?php echo \App\Language::translate('LBL_GROUPS_COLORS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#modulesColors"><strong><?php echo \App\Language::translate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item"><a class="nav-link js-change-tab" data-js="click" data-toggle="tab" href="#picklistsColors" data-mode="getPickListView" id="picklistsColorsTab"><strong><?php echo \App\Language::translate('LBL_PICKLISTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item"><a class="nav-link js-change-tab" data-js="click" data-toggle="tab" href="#fieldsColor" data-mode="getFieldsColorView" id="fieldsColorTab"><strong><?php echo \App\Language::translate('LBL_FIELDS_COLORS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent" style="padding-top: 10px;"><div class="tab-pane active" id="userColors"><table class="table customTableRWD table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th><strong><?php echo \App\Language::translate('First Name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('Last Name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th data-hide='phone'><strong><?php echo \App\Language::translate('LBL_TOOLS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Colors::getAllUserColor(), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['item']->value['first'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['last'];?>
</td><td id="calendarColorPreviewUser<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
"class="calendarColor" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
;"></td><td><button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-sm btn-danger mr-1 float-right removeUserColor"><span class="fas fa-trash-alt"></span><?php echo \App\Language::translate('LBL_REMOVE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-sm btn-primary mr-1 float-right updateUserColor"><span class="fas fa-edit"></span><?php echo \App\Language::translate('LBL_UPDATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-sm btn-warning mr-1 float-right generateUserColor"><span class="fas fa-redo-alt"></span><?php echo \App\Language::translate('LBL_GENERATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><div class="tab-pane" id="groupsColors"><table class="table customTableRWD table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th><strong><?php echo \App\Language::translate('LBL_GROUP_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th data-hide='phone'><strong><?php echo \App\Language::translate('LBL_TOOLS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Colors::getAllGroupColor(), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><tr><td><?php echo $_smarty_tpl->tpl_vars['item']->value['groupname'];?>
</td><td id="calendarColorPreviewGroup<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
"class="calendarColor" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
;"></td><td><button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"class="btn btn-sm btn-danger mr-1 float-right removeGroupColor"><span class="fas fa-trash-alt"></span> <?php echo \App\Language::translate('LBL_REMOVE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"class="btn btn-sm btn-primary mr-1 float-right updateGroupColor"><span class="fas fa-edit"></span> <?php echo \App\Language::translate('LBL_UPDATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"class="btn btn-sm btn-warning mr-1 float-right generateGroupColor"><span class="fas fa-redo-alt"></span> <?php echo \App\Language::translate('LBL_GENERATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><div class="tab-pane" id="modulesColors"><table class="table customTableRWD table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th><strong><?php echo \App\Language::translate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th data-hide='phone'><strong><?php echo \App\Language::translate('LBL_TOOLS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\Colors::getAllModuleColor(), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
"><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['module'],$_smarty_tpl->tpl_vars['item']->value['module']);?>
</td><td><input data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="activeModuleColor" type="checkbox"name="active" value="1" <?php if ($_smarty_tpl->tpl_vars['item']->value['active']) {?>checked="" <?php }?>></td><td id="calendarColorPreviewModule<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
"class="calendarColor" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value['color'];?>
;"></td><td><button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"class="btn btn-sm btn-danger mr-1 float-right removeModuleColor"><span class="fas fa-trash-alt"></span> <?php echo \App\Language::translate('LBL_REMOVE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"class="btn btn-sm btn-primary mr-1 float-right updateModuleColor"><span class="fas fa-edit"></span> <?php echo \App\Language::translate('LBL_UPDATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-record="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"class="btn btn-sm btn-warning mr-1 float-right generateModuleColor"><span class="fas fa-redo-alt"></span> <?php echo \App\Language::translate('LBL_GENERATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><div class="tab-pane" id="picklistsColors"><div class="listViewContentDiv picklistViewContentDiv js-color-contents" data-js="container"></div></div><div class="tab-pane" id="fieldsColor"><div class="js-color-contents" data-js="container"></div></div></div></div><div class="modal editColorContainer fade" tabindex="-1"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_EDIT_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><form class="form-horizontal"><div class="form-group form-row"><label class=" col-sm-4 col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_SELECT_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class=" col-sm-8 controls"><p class="js-color-picker" data-js="color-picker"><input type="hidden" class="selectedColor" value="" /></p></div></div></form></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?></div></div></div></div>
<?php }
}
