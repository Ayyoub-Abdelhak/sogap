<?php
/* Smarty version 4.2.0, created on 2024-05-22 16:31:00
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\CustomView\IndexContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_664e0fb40ef3f6_03320248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26d31675c0865e0ddcf0f984f9135336490a9eeb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\CustomView\\IndexContents.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664e0fb40ef3f6_03320248 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-CustomView-IndexContents"><input id="js-add-filter-url" type="hidden" data-js="value" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateFilterUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value);?>
" /><div class="table-responsive"><table class="table table-striped table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th></th><th><?php echo \App\Language::translate('ViewName',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('SetDefault',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_PRIVILEGES_TO_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_PRIVILEGES_TO_VIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<a href="#" class="js-popover-tooltip ml-2" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_PRIVILEGES_TO_VIEW_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><i class="fas fa-info-circle"></i></a></th><th><?php echo \App\Language::translate('LBL_FEATURED_LABELS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_SORTING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('LBL_CREATED_BY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th><?php echo \App\Language::translate('Actions',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, \App\CustomView::getFiltersByModule($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
if ($_smarty_tpl->tpl_vars['item']->value['presence'] === 2) {
continue 1;
}?><tr class="js-filter-row" data-js="data" data-cvid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-mod="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"><td><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
"title="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></td><?php if ($_smarty_tpl->tpl_vars['item']->value['viewname'] == 'All') {?><td><?php echo \App\Language::translate('All',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</td><?php } else { ?><td><?php echo $_smarty_tpl->tpl_vars['item']->value['viewname'];?>
</td><?php }?><td><div class="btn-group btn-group-toggle <?php if ($_smarty_tpl->tpl_vars['item']->value['setdefault']) {?> u-disabled<?php }?>"data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['item']->value['setdefault']) {?> active<?php }?>"><input class="js-update-field" type="radio" name="setdefault" id="setdefault1" autocomplete="off" value="1"<?php if ($_smarty_tpl->tpl_vars['item']->value['setdefault']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['item']->value['setdefault']) {?> active <?php }?>"><input class="js-update-field" type="radio" name="setdefault" id="setdefault2" autocomplete="off" value="0"<?php if (!$_smarty_tpl->tpl_vars['item']->value['setdefault']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><button type="button" class="btn btn-light btn-sm showModal" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getUrlDefaultUsers($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value,$_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['item']->value['setdefault']);?>
"><span class="fas fa-user"></span></button></td><td><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['item']->value['privileges']) {?> active<?php }?>"><input class="js-switch js-update-field" type="radio" name="privileges" data-js="change" id="privileges1" autocomplete="off" value="1"<?php if ($_smarty_tpl->tpl_vars['item']->value['privileges']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['item']->value['privileges']) {?> active <?php }?>"><input class="js-switch js-update-field" type="radio" name="privileges" data-js="change" id="privileges2" autocomplete="off" value="0"<?php if (!$_smarty_tpl->tpl_vars['item']->value['privileges']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></td><td><?php $_smarty_tpl->_assignInScope('IS_PRIVATE', $_smarty_tpl->tpl_vars['item']->value['status'] === \App\CustomView::CV_STATUS_PRIVATE);
$_smarty_tpl->_assignInScope('IS_PUBLIC', $_smarty_tpl->tpl_vars['item']->value['status'] === \App\CustomView::CV_STATUS_PUBLIC || $_smarty_tpl->tpl_vars['item']->value['presence'] === 0);?><div class="btn-group btn-group-toggle <?php if ($_smarty_tpl->tpl_vars['item']->value['presence'] === 0) {?> u-disabled<?php }?>"data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['IS_PUBLIC']->value) {?> active<?php }?>"><input class="js-update-field" type="radio" name="status" id="status1" autocomplete="off" value="<?php echo \App\CustomView::CV_STATUS_PUBLIC;?>
"<?php if ($_smarty_tpl->tpl_vars['IS_PUBLIC']->value) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_PUBLIC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['IS_PRIVATE']->value) {?> active <?php }?>"><input class="js-update-field" type="radio" name="status" id="status2" autocomplete="off" value="<?php echo \App\CustomView::CV_STATUS_PRIVATE;?>
"<?php if ($_smarty_tpl->tpl_vars['IS_PRIVATE']->value) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_PRIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><?php if ($_smarty_tpl->tpl_vars['IS_PRIVATE']->value) {?><button type="button" id="permissions" name="permissions" class="btn btn-light btn-sm js-show-modal" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getPrivilegesUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value,$_smarty_tpl->tpl_vars['key']->value);?>
"><span class="fas fa-user"></span></button><?php }?></td><td><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['item']->value['featured']) {?> active<?php }?>"><input class="js-update-field" data-js="change" type="radio" name="featured" id="featured1" autocomplete="off" value="1"<?php if ($_smarty_tpl->tpl_vars['item']->value['featured']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_YES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['item']->value['featured']) {?> active <?php }?>"><input class="js-update-field" data-js="change" type="radio" name="featured" id="featured2" autocomplete="off" value="0"<?php if (!$_smarty_tpl->tpl_vars['item']->value['featured']) {?>checked<?php }?>> <?php echo \App\Language::translate('LBL_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><button type="button" class="btn btn-light btn-sm showModal" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFeaturedFilterUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value,$_smarty_tpl->tpl_vars['key']->value);?>
"><span class="fas fa-user"></span></button></td><td><button type="button" id="sort" name="sort" class="btn btn-light btn-sm showModal" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getSortingFilterUrl($_smarty_tpl->tpl_vars['SOURCE_MODULE_ID']->value,$_smarty_tpl->tpl_vars['key']->value);?>
"><span class="fas fa-sort"></span></button></td><td><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['item']->value['userid']);?>
</td><td><button class="btn btn-primary btn-sm js-update mr-1" data-js="click" data-cvid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"data-editurl="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getUrlToEdit($_smarty_tpl->tpl_vars['item']->value['entitytype'],$_smarty_tpl->tpl_vars['key']->value);?>
"><span class="fa fa-edit u-mr-5px"></span><?php echo \App\Language::translate('Edit',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php if ($_smarty_tpl->tpl_vars['item']->value['presence'] == 1) {?><button class="btn btn-danger btn-sm mr-2 js-delete-filter" data-js="click" data-cvid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><span class="fa fa-trash u-mr-5px"></span><?php echo \App\Language::translate('Delete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div>
<?php }
}
