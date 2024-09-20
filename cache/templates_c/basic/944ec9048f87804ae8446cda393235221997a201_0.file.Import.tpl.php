<?php
/* Smarty version 4.2.0, created on 2024-05-14 12:29:13
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PDF\Import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66434b09297598_88451792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '944ec9048f87804ae8446cda393235221997a201' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PDF\\Import.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66434b09297598_88451792 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="o-breadcrumb widget_header row mb-2"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="importTemplateDiv" id="importTemplateContainer"><?php if ((isset($_smarty_tpl->tpl_vars['UPLOAD']->value))) {
if ($_smarty_tpl->tpl_vars['UPLOAD']->value == true) {?><p class="bgMessage bgOK"><?php echo \App\Language::translate('LBL_UPLOAD_OK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <a class="tdUnderline" href="index.php?module=PDF&parent=Settings&view=Edit&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
"> <?php echo \App\Language::translate('LBL_GO_TO_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></p><?php } elseif ($_smarty_tpl->tpl_vars['UPLOAD']->value == false) {?><p class="bgMessage bgERROR"><?php echo \App\Language::translate('LBL_UPLOAD_ERROR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <a class="tdUnderline" href="<?php echo Settings_PDF_Module_Model::getDefaultUrl();?>
"> <?php echo \App\Language::translate('LBL_RETURN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></p><?php }
} else { ?><form name="ImportPdfTemplate" class="form-horizontal js-validation-engine" action="index.php" method="post" enctype="multipart/form-data"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="module" value="PDF" /><input type="hidden" name="view" value="Import" /><input type="hidden" name="upload" value="true" /><div name="uploadPdfTemplate"><table class="massEditTable table table-bordered"><thead><tr class="blockHeader"><th class="fieldLabel"><strong><?php echo \App\Language::translate('LBL_IMPORT_VIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 (<?php echo \App\Language::translate('LBL_TEMPLATE_XML',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
)</strong></th></tr></thead><tbody><tr><td><div class="fieldValue position-relative"><input type="file" name="imported_xml" accept="text/xml" data-validation-engine='validate[required]' id="imported_xml" /></div></td></tr></tbody></table></div><div class="float-right"><button class="btn btn-success" type="submit"><strong><?php echo \App\Language::translate('LBL_UPLOAD_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<a href="<?php echo Settings_PDF_Module_Model::getDefaultUrl();?>
" class="btn btn-warning" type="button"><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></form><?php }?></div>
<?php }
}
