<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:26:13
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Inventory\Taxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65859c8552cdf5_14325169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd4dc71d9f89f93472fcd21537159cdee2d5fa13' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Inventory\\Taxes.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65859c8552cdf5_14325169 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="hidden" id="view" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" /><div class="tpl-Settings-Inventory-Taxes" id="inventory"><div class="o-breadcrumb widget_header form-row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="contents form-row"><div class="col-md-12"><button type="button" class="btn btn-success addInventory my-2" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getCreateUrl();?>
" data-type="0"><span class="fas fa-plus mr-1"></span><?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['PAGE_LABELS']->value['title_single'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><table class="table tableRWD table-bordered inventoryTable themeTableColor"><thead><tr class="blockHeader"><th class="themeTextColor textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="themeTextColor textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="themeTextColor textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="themeTextColor textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_DATA']->value, 'RECORD');
$_smarty_tpl->tpl_vars['RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->tpl_vars['RECORD']->do_else = false;
?><tr class="opacity" data-id="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"><td class="textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="name"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
</label></td><td class="textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="value"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getValue();?>
 <?php if (empty($_smarty_tpl->tpl_vars['CURRENCY_BOOL']->value)) {?>%<?php } else {
echo $_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol'];
}?></span></td><td class="textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input type="checkbox" data-field-name="status" class="status js-update-field my-2"<?php if (!$_smarty_tpl->tpl_vars['RECORD']->value->getStatus()) {?>checked="checked" <?php }?> /></td><td class="textAlignCenter <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="float-right w-50 d-flex justify-content-between mr-2"><input type="checkbox" data-field-name="default" class="default js-update-field my-2"<?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getDefault()) {?>checked<?php }?> /><div class="actions"><button class="btn btn-info btn-sm text-white editInventory u-cursor-pointer mr-1" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getEditUrl();?>
"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="yfi yfi-full-editing-view alignBottom"></span></button><button class="removeInventory u-cursor-pointer btn btn-danger btn-sm text-white" data-url="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getEditUrl();?>
"><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"class="fas fa-trash-alt alignBottom"></span></button></div></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div></div>
<?php }
}
