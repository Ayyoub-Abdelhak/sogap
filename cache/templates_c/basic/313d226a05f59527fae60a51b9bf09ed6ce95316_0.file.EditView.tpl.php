<?php
/* Smarty version 4.2.0, created on 2023-12-29 16:12:02
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Companies\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ee1c2b68c35_37397320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '313d226a05f59527fae60a51b9bf09ed6ce95316' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Companies\\EditView.tpl',
      1 => 1702905761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ee1c2b68c35_37397320 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Companies-EditView --><div class="row mb-2 widget_header"><div class="col-12 d-flex"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="editViewContainer container"><form name="EditCompanies" action="index.php" method="post" id="EditView" enctype="multipart/form-data"><input type="hidden" name="module" value="Companies"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="updateCompany"><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><?php if (!empty('RECORD_ID')) {?><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><?php }?><div class="alert alert-info" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="u-fs-13px"><?php echo \App\Language::translate('LBL_CHANGING_ENTITY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Form.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_NAME'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,'COMPANY_ID'=>$_smarty_tpl->tpl_vars['RECORD_ID']->value), 0, true);
?><div class="card-footer text-center"><button class="btn btn-success mr-1" type="submit"><span class="fa fa-check"></span> <?php echo App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="cancelLink btn btn-warning ml-1" type="reset" onclick="javascript:window.history.back();"><span class="fa fa-times"></span> <?php echo App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div><!-- /tpl-Settings-Companies-EditView -->
<?php }
}
