<?php
/* Smarty version 4.2.0, created on 2024-01-03 14:57:27
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Colors\TabFieldColors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659567c7893dd7_69156751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76b83a4f71ff82c133dbf022ab0c040733fb2437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Colors\\TabFieldColors.tpl',
      1 => 1702905765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659567c7893dd7_69156751 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Colors-TabFieldColors"><div class="form-row"><label class="fieldLabel col-md-2"><strong><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </strong></label><div class="col-md-4 fieldValue pickListModulesSelectContainer"><select class="select2 form-control js-selected-module" data-js="change"><optgroup><option value=""><?php echo \App\Language::translate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVE_MODULES']->value, 'MODULE');
$_smarty_tpl->tpl_vars['MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE']->value) {
$_smarty_tpl->tpl_vars['MODULE']->do_else = false;
?><option <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value == $_smarty_tpl->tpl_vars['MODULE']->value['name']) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value['name'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value['name'],$_smarty_tpl->tpl_vars['MODULE']->value['name']);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div></div><?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value && $_smarty_tpl->tpl_vars['SELECTED_MODULE_FIELDS']->value) {?><div class="mt-3"><table class="table table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th><strong><?php echo \App\Language::translate('LBL_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_TOOLS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SELECTED_MODULE_FIELDS']->value, 'FIELD');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
$_smarty_tpl->_assignInScope('FIELD_ID', $_smarty_tpl->tpl_vars['FIELD']->value->getId());?><tr data-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->get('color');?>
"><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</td><td class="js-color-preview" data-js="container" data-color="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->get('color');?>
" data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
" style="background: <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->get('color');?>
;"></td><td><button data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"class="btn btn-sm btn-danger mr-1 float-right js-remove-color" data-js="click"><span class="fas fa-trash-alt"></span> <?php echo \App\Language::translate('LBL_REMOVE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"class="btn btn-sm btn-primary mr-1 float-right js-update-color" data-js="click"><span class="fas fa-edit"></span> <?php echo \App\Language::translate('LBL_UPDATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>&ensp;<button data-field-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"class="btn btn-sm btn-warning mr-1 float-right js-generate-color" data-js="click"><span class="fas fa-redo-alt"></span> <?php echo \App\Language::translate('LBL_GENERATE_COLOR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><?php }?></div></div>
<?php }
}
