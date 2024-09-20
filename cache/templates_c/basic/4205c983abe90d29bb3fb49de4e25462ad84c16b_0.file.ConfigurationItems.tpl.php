<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:07:33
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PublicHoliday\ConfigurationItems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9a65e13b96_36114949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4205c983abe90d29bb3fb49de4e25462ad84c16b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PublicHoliday\\ConfigurationItems.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9a65e13b96_36114949 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-PublicHoliday-ConfigurationItems --><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOLIDAYS']->value, 'HOLIDAY');
$_smarty_tpl->tpl_vars['HOLIDAY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HOLIDAY']->value) {
$_smarty_tpl->tpl_vars['HOLIDAY']->do_else = false;
?><tr class="holidayElement" data-holiday-id="<?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getId();?>
"data-holiday-type="<?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getType();?>
" data-holiday-name="<?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getName();?>
"data-holiday-date="<?php echo \App\Fields\Date::formatToDisplay($_smarty_tpl->tpl_vars['HOLIDAY']->value->getDate());?>
"><td data-label=""><div><div><input type="checkbox" class="mass-selector" data-id="<?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getId();?>
" /></div><div><button data-holiday-id="<?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getId();?>
"class="editHoliday mr-1 text-white btn btn-xs btn-info"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="yfi yfi-full-editing-view"></span></button><button data-holiday-id="<?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getId();?>
"class="deleteHoliday text-white btn btn-xs btn-danger"><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></button></div></div></td><td data-label="<?php echo \App\Language::translate('LBL_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span><?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getDisplayValue('holidaydate');?>
</span></td><td data-label="<?php echo \App\Language::translate('LBL_DAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HOLIDAY']->value->getDayOfWeek(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></td><td data-label="<?php echo \App\Language::translate('LBL_DAY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span><?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getDisplayValue('holidayname');?>
</span></td><td data-label="<?php echo \App\Language::translate('LBL_HOLIDAY_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><span><?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getDisplayValue('holidaytype');?>
</span></td><td data-label=""><div class="text-center"><button data-holiday-id="<?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getId();?>
"class="editHoliday mr-1 text-white btn btn-sm btn-info"><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="yfi yfi-full-editing-view"></span></button><button data-holiday-id="<?php echo $_smarty_tpl->tpl_vars['HOLIDAY']->value->getId();?>
"class="deleteHoliday text-white btn btn-sm btn-danger"><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></button></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><!-- /tpl-Settings-PublicHoliday-ConfigurationItems -->
<?php }
}
