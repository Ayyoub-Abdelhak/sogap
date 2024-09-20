<?php
/* Smarty version 4.2.0, created on 2024-03-14 11:59:25
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PDF\Step3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f2e69d3ebdf3_80890144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea63f7c96eecf95e2c07135908e954e80d1ecb6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PDF\\Step3.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f2e69d3ebdf3_80890144 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-PDF-Step3 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step3" class="form-horizontal" enctype="multipart/form-data"><input type="hidden" name="module" value="PDF"><input type="hidden" name="action" value="Save" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="3" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><input type="hidden" name="conditions" id="advanced_filter" value='' /><div class="row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilterExpressions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="float-right mb-2"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success mr-1" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><a class="btn btn-primary mr-1" href="index.php?module=PDF&parent=Settings&page=1&view=List"><span class="fas fa-angle-double-left mr-1"></span><?php echo \App\Language::translate('LBL_RETURN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></div></form></div>
<?php }
}
