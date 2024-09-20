<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:07:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Calendar\UserColors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9a60501574_56117959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04510e7c3f81aabfb8f92627f27e2f13a96f2dc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Calendar\\UserColors.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9a60501574_56117959 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Calendar-UsersColors UserColors"><div class="o-breadcrumb widget_header row mb-2"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_CALENDAR_CONFIG_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#calendarConfig"><strong><?php echo \App\Language::translate('LBL_CALENDAR_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#workingDays"><strong><?php echo \App\Language::translate('LBL_NOTWORKING_DAYS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent pt-2"><div class="tab-pane paddingTop20 active" id="calendarConfig"><table class="table table-sm border listViewEntriesTable"><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCalendarConfig('reminder'), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><tr data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" data-color="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
"><td class="w-25"><p class="paddingTop10"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value['label'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></td><td><input class="marginTop10" type="checkbox" id="update_event" name="update_event" data-metod="updateCalendarConfig" value=1 <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] == 1) {?> checked<?php }?> /></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><div class="tab-pane paddingTop20" id="workingDays"><table class="table table-sm border listViewEntriesTable workingDaysTable"><tbody><tr><td class="w-25"><p style="padding-top:10px;"><?php echo \App\Language::translate('LBL_NOTWORKEDDAYS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></td><td><div class="col-md-4"><select class="select2 workignDaysField float-left" multiple="multiple" id="update_workingdays" name="notworkingdays" data-metod="updateNotWorkingDays"><option value="1" <?php if (in_array(1,$_smarty_tpl->tpl_vars['NOTWORKINGDAYS']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_MONDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="2" <?php if (in_array(2,$_smarty_tpl->tpl_vars['NOTWORKINGDAYS']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_TUESDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="3" <?php if (in_array(3,$_smarty_tpl->tpl_vars['NOTWORKINGDAYS']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_WEDNESDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="4" <?php if (in_array(4,$_smarty_tpl->tpl_vars['NOTWORKINGDAYS']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_THURSDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="5" <?php if (in_array(5,$_smarty_tpl->tpl_vars['NOTWORKINGDAYS']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_FRIDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="6" <?php if (in_array(6,$_smarty_tpl->tpl_vars['NOTWORKINGDAYS']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_SATURDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="7" <?php if (in_array(7,$_smarty_tpl->tpl_vars['NOTWORKINGDAYS']->value)) {?> selected <?php }?>><?php echo \App\Language::translate('PLL_SUNDAY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></td></tr></tbody></table></div></div></div></div>
<?php }
}
