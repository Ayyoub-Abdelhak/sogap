<?php
/* Smarty version 4.2.0, created on 2024-01-03 11:41:04
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Filters\ActivityTypes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659539c0e1b553_72700682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5435db96d6be2c9b0c6f1199757a53846998cd36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Filters\\ActivityTypes.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659539c0e1b553_72700682 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Filters-ActivityTypes --><?php if (!empty($_smarty_tpl->tpl_vars['FILTER_DATA']->value)) {?><div class="card"><div class="card-header p-1 pl-2"><?php echo \App\Language::translate('LBL_TYPE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</div><div class="card-body row p-1"><div class="col-12"><select class="select2 form-control col-12 js-calendar__filter__select" name="types" data-cache="calendar-types" data-name="type" multiple="multiple" data-js="data | value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTER_DATA']->value, 'ITEM', false, 'ITEM_ID');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM_ID']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM_ID']->value);?>
" class="mb-1"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><?php }?><!-- tpl-Base-Filters-ActivityTypes -->
<?php }
}
