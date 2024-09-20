<?php
/* Smarty version 4.2.0, created on 2024-01-16 15:46:03
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\RecordAllocation\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a696ab10ea98_29713045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a3da85852261c62d15f06d78194670217b90711' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\RecordAllocation\\Index.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a696ab10ea98_29713045 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="fieldType" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" /><?php $_smarty_tpl->_assignInScope('ALL_ACTIVEUSER_LIST', \App\Fields\Owner::getInstance()->getAccessibleUsers('Public'));
$_smarty_tpl->_assignInScope('ALL_MODULE_LIST', Vtiger_Module_Model::getAll(array(0),array(),true));?><div class="mt-2"><div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert">&times;</a><?php echo \App\Language::translate('LBL_SORTING_SETTINGS_WORNING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 (<a href="index.php?module=Roles&parent=Settings&view=Index"><?php echo \App\Language::translate('LBL_GO_TO_PANEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>)</div></div><div class=""><button class="btn btn-success js-add-panel" data-js="click" type="button"></span> <?php echo \App\Language::translate('LBL_ADD_PANEL_TO_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><br /><div class="js-panels-container" data-js="container"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULE_LIST']->value, 'MODULE_MODEL', false, 'MODULE_ID', 'modules', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_ID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_modules']->value['iteration']++;
$_smarty_tpl->_assignInScope('INDEX', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_modules']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_modules']->value['iteration'] : null));
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('DATA', Settings_RecordAllocation_Module_Model::getRecordAllocationByModule($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value));
if ($_smarty_tpl->tpl_vars['DATA']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AddPanel.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="js-modal-add-panel modal fade in" data-js="modal"><div class="modal-dialog modal-sm"><div class="modal-content"><form><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><select class="js-modules-list form-control" name="modules" data-validation-engine="validate[required]" data-js="value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULE_LIST']->value, 'MODULE_MODEL', false, 'TABID');
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['MODULE_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="modal-footer"><button type="submit" class="btn btn-success saveButton"><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><button type="button" class="btn btn-danger dismiss" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></form></div></div></div>
<?php }
}
