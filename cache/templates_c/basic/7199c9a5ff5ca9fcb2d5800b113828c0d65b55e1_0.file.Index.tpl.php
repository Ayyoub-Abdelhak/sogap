<?php
/* Smarty version 4.2.0, created on 2024-08-05 11:29:41
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\SupportProcesses\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66b0a995dce1e5_64142726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7199c9a5ff5ca9fcb2d5800b113828c0d65b55e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\SupportProcesses\\Index.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66b0a995dce1e5_64142726 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" supportProcessesContainer"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><ul id="tabs" class="nav nav-tabs mt-2 mr-0" data-tabs="tabs"><li class="nav-item"><a class="nav-link active" href="#general_configuration" data-toggle="tab"><?php echo \App\Language::translate('LBL_GENERAL_CONFIGURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </a></li></ul><div class="tab-content"><div class="editViewContainer tab-pane active" id="general_configuration"><table class="table tableRWD table-bordered table-sm themeTableColor userTable my-2"><thead><tr class="blockHeader"><th class="mediumWidthType"><?php echo \App\Language::translate('LBL_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="mediumWidthType"><?php echo \App\Language::translate('LBL_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><tr data-id="<?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['user_id'])) {
echo $_smarty_tpl->tpl_vars['ITEM']->value['user_id'];
}?>"><td class="w-25"><label><?php echo \App\Language::translate('LBL_TICKET_STATUS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td><select class="select2 js-config-field form-control status" data-js="change" name="status" multiple><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TICKETSTATUS']->value, 'STATUS');
$_smarty_tpl->tpl_vars['STATUS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['STATUS']->value) {
$_smarty_tpl->tpl_vars['STATUS']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['STATUS']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['STATUS']->value,$_smarty_tpl->tpl_vars['TICKETSTATUSNOTMODIFY']->value)) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['STATUS']->value,'HelpDesk');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td></tr></tbody></table></div></div></div>
<?php }
}
