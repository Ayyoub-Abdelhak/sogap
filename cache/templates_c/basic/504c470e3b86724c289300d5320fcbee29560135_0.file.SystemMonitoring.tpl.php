<?php
/* Smarty version 4.2.0, created on 2023-12-26 13:01:37
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Vtiger\DashBoard\SystemMonitoring.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ac0a158fcf4_48858342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '504c470e3b86724c289300d5320fcbee29560135' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Vtiger\\DashBoard\\SystemMonitoring.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ac0a158fcf4_48858342 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Base-DashBoard-SystemMonitoring  --><div class="mb-3 d-flex flex-wrap mr-n3"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SYSTEM_MONITORING']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
$_smarty_tpl->_assignInScope('TRANSLATION', \App\Language::translatePluralized($_smarty_tpl->tpl_vars['ITEM']->value['LABEL'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,$_smarty_tpl->tpl_vars['ITEM']->value['VALUE']));?><div class="dashboardWidget px-1 pt-1 pb-4 mt-3 mr-3 flex-grow-1"><div class="pl-3 d-flex flex-nowrap justify-content-center"><div class="d-flex u-fs-50px pb-1 mr-2"><span class="mt-auto mb-2 <?php echo $_smarty_tpl->tpl_vars['ITEM']->value['ICON'];?>
"></span></div><div class="display-3 u-font-weight-350" <?php if (strlen($_smarty_tpl->tpl_vars['ITEM']->value['VALUE']) > 3) {?>title="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['VALUE'];?>
">999+<?php } else { ?>><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['VALUE'];
}?></div></div><div class="px-3"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DashBoard/WidgetTitle.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CLASS'=>'text-center','TITLE'=>$_smarty_tpl->tpl_vars['TRANSLATION']->value), 0, true);
if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['HREF'])) {?><a href="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['HREF'];?>
" class="btn btn-dark btn-block mt-2"><?php echo \App\Language::translate('LBL_MORE');?>
</a><?php }?></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-Settings-Base-DashBoard-SystemMonitoring  -->
<?php }
}
