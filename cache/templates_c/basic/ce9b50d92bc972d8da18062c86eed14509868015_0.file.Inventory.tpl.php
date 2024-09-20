<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:05:34
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\Tabs\Inventory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cfee15e2a1_70549954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce9b50d92bc972d8da18062c86eed14509868015' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\Tabs\\Inventory.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cfee15e2a1_70549954 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-Tabs-Inventory --><?php $_smarty_tpl->_assignInScope('INVENTORY_BLOKS', $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getFieldsByBlocks());?><div class="moduleBlocks inventoryBlock" data-block-id="0"><div class="editFieldsTable block card card-default mb-2"><div class="card-header px-2"><div class="float-right"><button class="btn btn-sm btn-success pr-1 saveFieldSequence invisible inventorySequence" type="button"><strong><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-success addInventoryField" type="button"><strong><span class="fas fa-plus fa-fw"></span><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php echo App\Language::translate('LBL_HEADLINE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="blockFieldsList card-body"><ul name="sortable1" class="connectedSortable m-0 list-unstyled"><?php if ((isset($_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[0]))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[0], 'FIELD_MODEL', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><li><div class="opacity editFields border mb-1 u-cursor-grab" data-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getType();?>
"><a><img class="mb-1" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" title="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a>&nbsp;&nbsp;<span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</span><span class="ml-3 badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</span><div class="float-right actions"><a href="#" class="editInventoryField mr-1"><span class="yfi yfi-full-editing-view" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="deleteInventoryField mr-1" href="#"><span title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></a></div></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></ul></div></div></div><div class="moduleBlocks inventoryBlock" data-block-id="1"><div class="editFieldsTable block card card-default mb-2"><div class="card-header px-2"><div class="float-right"><button class="btn btn-sm btn-success saveFieldSequence invisible inventorySequence mr-1" type="button"><strong><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-success addInventoryField" type="button"><strong><span class="fas fa-plus fa-fw"></span><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php echo App\Language::translate('LBL_BASIC_VERSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="blockFieldsList card-body"><ul name="sortable1" class="connectedSortable m-0 list-unstyled"><?php if ((isset($_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[1]))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[1], 'FIELD_MODEL', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><li><div class="opacity editFields border mb-1" data-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getType();?>
"><a><img class="mb-1" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" title="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a>&nbsp;&nbsp;<span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</span><span class="ml-3 badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</span><span class="btn-group float-right actions"><a href="#" class="editInventoryField mr-1"><span class="yfi yfi-full-editing-view" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="deleteInventoryField mr-1" href="#"><span title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></a></span></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></ul></div></div></div><div class="moduleBlocks inventoryBlock" data-block-id="2"><div class="editFieldsTable block card card-default mb-2"><div class="card-header px-2"><div class="float-right"><button class="btn btn-sm btn-success saveFieldSequence invisible inventorySequence" type="button"><strong><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-success addInventoryField" type="button"><strong><span class="fas fa-plus fa-fw"></span><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php echo App\Language::translate('LBL_ADDITIONAL_VERSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="blockFieldsList card-body"><ul name="sortable1" class="connectedSortable m-0 list-unstyled"><?php if ((isset($_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[2]))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[2], 'FIELD_MODEL', false, 'NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><li><div class="opacity editFields border mb-1" data-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getType();?>
"><a><img class="mb-1" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" title="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a>&nbsp;&nbsp;<span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</span><span class="ml-3 badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</span><span class="btn-group float-right actions"><a href="#" class="editInventoryField mr-1"><span class="yfi yfi-full-editing-view" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="deleteInventoryField mr-1" href="#"><span title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></a></span></div></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></ul></div></div></div><li class="d-none newLiElement"><div class="opacity editFields border mb-1" data-name="" data-id="" data-sequence="" data-type=""><a><img class="mb-1" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0"title="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /></a>&nbsp;&nbsp;<span class="fieldLabel"></span><span class="btn-group float-right actions"><a href="#" class="editInventoryField mr-1"><span class="yfi yfi-full-editing-view" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="deleteInventoryField mr-1" href="#"><span title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></a></span></div></li><!-- /tpl-Settings-LayoutEditor-Tabs-Inventory -->
<?php }
}
