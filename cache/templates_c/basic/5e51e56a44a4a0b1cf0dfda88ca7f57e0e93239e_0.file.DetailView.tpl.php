<?php
/* Smarty version 4.2.0, created on 2023-12-26 13:01:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Companies\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ac0a652c696_36944889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e51e56a44a4a0b1cf0dfda88ca7f57e0e93239e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Companies\\DetailView.tpl',
      1 => 1702905761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ac0a652c696_36944889 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Companies-DetailView --><div class="o-breadcrumb widget_header row"><div class="col-md-12 align-items-center flex-wrap"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="ml-auto"><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getEditViewUrl();?>
" class="btn btn-info float-right ml-2" role="button"><span class="yfi yfi-full-editing-view"></span> <?php echo App\Language::translate('LBL_EDIT_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php if ($_smarty_tpl->tpl_vars['REMOVE_BTN']->value) {?><button type="button" class="btn btn-danger float-right js-remove" data-js="click" data-record-id="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getId();?>
"><span class="fas fa-trash-alt mr-1"></span><?php echo App\Language::translate('LBL_DELETE_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?></div></div></div><div class="detailViewInfo" id="groupsDetailContainer"><div class=""><form id="detailView" class="form-horizontal" method="POST"><table class="table table-bordered"><thead><tr class="blockHeader"><th colspan="2" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo App\Language::translate('LBL_COMPANY_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getModule()->getNameFields(), 'COLUMN');
$_smarty_tpl->tpl_vars['COLUMN']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['COLUMN']->value) {
$_smarty_tpl->tpl_vars['COLUMN']->do_else = false;
?><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 w-25"><label class="float-right"><?php echo App\Language::translate(mb_strtoupper(('LBL_').($_smarty_tpl->tpl_vars['COLUMN']->value), 'UTF-8'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['COLUMN']->value);?>
</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></form></div></div><!-- /tpl-Settings-Companies-DetailView -->
<?php }
}
