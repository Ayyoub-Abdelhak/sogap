<?php
/* Smarty version 4.2.0, created on 2023-12-29 16:00:09
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\PDF\Step2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658edef9d9ca24_10517641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '223909c86ab4a15924095631b51c48025fa89fd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\PDF\\Step2.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/basic/modules/Vtiger/VariablePanel.tpl' => 1,
  ),
),false)) {
function content_658edef9d9ca24_10517641 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-PDF-Step2 pdfTemplateContents"><form name="EditPdfTemplate" action="index.php" method="post" id="pdf_step2" class="form-horizontal"><input type="hidden" name="module" value="PDF"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step3" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="2" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><input type="hidden" name="module_name" value="<?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('module_name');?>
" /><input type="hidden" name="watermark_image" value="" /><?php $_smarty_tpl->_assignInScope('FIELD_INFO', \App\Purifier::encodeHtml('{"maximumlength":"16777215","type":"text"}'));?><div class="row"><div class="col-12 mb-3"><div class="card"><div class="card-header"><span class="fa fa-copy"></span> <?php echo \App\Language::translate('LBL_VARIABLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body"><div class="row js-variable-panel" data-js="container"><?php $_smarty_tpl->_subTemplateRender('file:layouts/basic/modules/Vtiger/VariablePanel.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('SELECTED_MODULE'=>$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value,'PARSER_TYPE'=>'pdf'), 0, false);
?></div></div></div></div><div class="col-12"><div class="mb-3"><div class="card"><div class="card-header"><span class="yfi yfi-full-editing-view mr-2"></span> <?php echo \App\Language::translate('LBL_HEADER_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body p-0"><div class="controls"><textarea class="form-control w-100 js-editor" name="header_content" id="header_content" data-js="ckeditor" data-purify-mode="Html" data-validation-engine="validate[funcCall[Vtiger_MaxSizeInByte_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('header_content');?>
</textarea></div></div></div></div><div class="mb-3"><div class="card"><div class="card-header"><span class="yfi yfi-full-editing-view mr-2"></span> <?php echo \App\Language::translate('LBL_BODY_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body p-0"><div class="controls"><textarea class="form-control w-100 js-editor" name="body_content" id="body_content" data-js="ckeditor" data-purify-mode="Html" data-validation-engine="validate[funcCall[Vtiger_MaxSizeInByte_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('body_content');?>
</textarea></div></div></div></div><div class="mb-3"><div class="card"><div class="card-header"><span class="yfi yfi-full-editing-view mr-2"></span> <?php echo \App\Language::translate('LBL_FOOTER_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body p-0"><div class="controls"><textarea class="form-control js-editor" name="footer_content" id="footer_content" data-js="ckeditor" data-purify-mode="Html" data-validation-engine="validate[funcCall[Vtiger_MaxSizeInByte_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('footer_content');?>
</textarea></div></div></div></div><div class="mb-3"><div class="card"><div class="card-header"><span class="yfi yfi-full-editing-view mr-2"></span> <?php echo \App\Language::translate('LBL_CUSTOM_STYLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="card-body p-0"><div class="controls"><textarea class="form-control" name="styles" id="styles"><?php echo $_smarty_tpl->tpl_vars['PDF_MODEL']->value->get('styles');?>
</textarea></div></div></div></div></div></div><div class="float-right mb-2"><button class="btn btn-danger backStep mr-1" type="button"><span class="fas fa-caret-left mr-1"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-success mr-1" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></form></div>
<?php }
}
