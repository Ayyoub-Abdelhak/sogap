<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:07:36
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Search\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9a68e47484_73679596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b52c08c82b4e6ce7dbcba37c57eccd229c88dd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Search\\Index.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9a68e47484_73679596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('MODULESENTITY', Settings_Search_Module_Model::getModulesEntity(false,true));
$_smarty_tpl->_assignInScope('FIELDS_MODULES', Settings_Search_Module_Model::getFieldFromModule());?><div class="tpl-Settings-Search-Index SearchFieldsEdit"><div class="o-breadcrumb widget_header row"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="btn-toolbar"><span class="float-right group-desc"><button class="btn btn-success saveModuleSequence d-none mt-2" type="button"><strong><?php echo \App\Language::translate('LBL_SAVE_MODULE_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><div class="clearfix"></div></div><div class="contents tabbable table-responsive"><table class="table table-responsive table-bordered table-sm listViewEntriesTable my-2" id="modulesEntity"><thead><tr class="blockHeader"><th class="noWrap"><?php echo \App\Language::translate('Module',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide="phone"><?php echo \App\Language::translate('LabelFields',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide="phone"><?php echo \App\Language::translate('SearchFields',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide="tablet" colspan="3"><?php echo \App\Language::translate('Tools',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULESENTITY']->value, 'item', false, 'KEY');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->_assignInScope('BLOCKS', $_smarty_tpl->tpl_vars['FIELDS_MODULES']->value[$_smarty_tpl->tpl_vars['KEY']->value]);?><tr data-tabid="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><td class="alignMiddle widthMin noWrap"><span>&nbsp;<a><img src="<?php echo \Vtiger_Theme::getImagePath('drag.png');?>
" alt="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a>&nbsp;</span><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['modulename'],$_smarty_tpl->tpl_vars['item']->value['modulename']);?>
</strong></td><td class="alignMiddle"><div class="elementLabels<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
 paddingLR5"><?php $_smarty_tpl->_assignInScope('VALUE', explode(',',$_smarty_tpl->tpl_vars['item']->value['fieldname']));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VALUE']->value, 'NAME', false, NULL, 'valueLoop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value) {
$_smarty_tpl->tpl_vars['NAME']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['total'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[$_smarty_tpl->tpl_vars['NAME']->value]))) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELDS']->value[$_smarty_tpl->tpl_vars['NAME']->value]['fieldlabel'],$_smarty_tpl->tpl_vars['item']->value['modulename']);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['last'] : null)) {?>,&nbsp;<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="d-none elementEdit<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><select multiple class="form-control fieldname" data-select-cb="registerSelectSortable" data-js="sortable | select2" name="fieldname" data-tabid="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['KEY']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'fieldTab');
$_smarty_tpl->tpl_vars['fieldTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fieldTab']->value) {
$_smarty_tpl->tpl_vars['fieldTab']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['fieldTab']->value['columnname'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['fieldTab']->value['columnname'],$_smarty_tpl->tpl_vars['VALUE']->value)) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['fieldTab']->value['fieldlabel'],$_smarty_tpl->tpl_vars['item']->value['modulename']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></td><td class="alignMiddle"><div class="elementLabels<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
 paddingLR5"><?php $_smarty_tpl->_assignInScope('VALUE', explode(',',$_smarty_tpl->tpl_vars['item']->value['searchcolumn']));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VALUE']->value, 'NAME', false, NULL, 'valueLoop', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value) {
$_smarty_tpl->tpl_vars['NAME']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['total'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['FIELDS']->value[$_smarty_tpl->tpl_vars['NAME']->value]))) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELDS']->value[$_smarty_tpl->tpl_vars['NAME']->value]['fieldlabel'],$_smarty_tpl->tpl_vars['item']->value['modulename']);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_valueLoop']->value['last'] : null)) {?>,&nbsp;<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="d-none elementEdit<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><select multiple class="form-control searchcolumn" data-select-cb="registerSelectSortable" data-js="sortable | select2" name="searchcolumn" data-tabid="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'FIELDS', false, 'BLOCK_NAME');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['KEY']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'fieldTab');
$_smarty_tpl->tpl_vars['fieldTab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fieldTab']->value) {
$_smarty_tpl->tpl_vars['fieldTab']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['fieldTab']->value['columnname'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['fieldTab']->value['columnname'],$_smarty_tpl->tpl_vars['VALUE']->value)) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['fieldTab']->value['fieldlabel'],$_smarty_tpl->tpl_vars['item']->value['modulename']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></td><td class="alignMiddle widthMin"><button class="btn editLabels btn-info noWrap" data-tabid="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><span class="fa fa-edit u-mr-5px"></span><?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></td><td class="alignMiddle widthMin"><button class="btn updateLabels btn-primary noWrap" data-tabid="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><span class="fas fa-exchange-alt u-mr-5px"></span><?php echo \App\Language::translate('Update labels',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></td><td class="alignMiddle widthMin"><button name="turn_off" class="noWrap btn turn_off <?php if ($_smarty_tpl->tpl_vars['item']->value['turn_off'] == 1) {?>btn-danger<?php } else { ?>btn-success<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['turn_off'];?>
" data-tabid="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><span class="fas fa-power-off u-mr-5px"></span><?php if ($_smarty_tpl->tpl_vars['item']->value['turn_off'] == 1) {
echo \App\Language::translate('LBL_TURN_OFF',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo \App\Language::translate('LBL_TURN_ON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></button></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><div class="clearfix"></div>
<?php }
}
