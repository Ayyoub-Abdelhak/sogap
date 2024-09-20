<?php
/* Smarty version 4.2.0, created on 2024-03-18 14:51:51
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Picklist\Import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f8550722fae9_92772065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df95458011533884adedadf82e3c590a2265330f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Picklist\\Import.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f8550722fae9_92772065 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Picklist-Import --><div class="modal-body js-modal-body pb-0" data-js="container"><form class="form-horizontal validateForm" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="source_module" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="import" /><input type="hidden" name="picklistName" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" /><div class="form-group row"><div class="input-group col-12"><div class="input-group-prepend"><button type="button" class=" btn btn-default  "><span class="fas fa-info-circle js-popover-tooltip u-cursor-pointer" data-js="popover" data-trigger="hover focus" data-content="<?php echo \App\Language::translate('LBL_CSV_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></button></div><input type="file" name="file" accept=".csv" class="form-control" data-validation-engine="validate[required]" /></div></div><div class="form-group row js-summary d-none mb-0"><label for="allNumber" class="col-sm-5 col-form-label"><?php echo \App\Language::translate('LBL_NUMBER_OF_ALL_ENTRIES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-7"><input type="text" readonly class="form-control-plaintext js-all-number" id="allNumber" /></div></div><div class="form-group row js-summary d-none mb-0"><label for="errorsNumber" class="col-sm-5 col-form-label"><?php echo \App\Language::translate('LBL_NUMBER_OF_ERRORS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-7"><input type="text" readonly class="form-control-plaintext js-errors-number" id="errorsNumber" /></div></div><div class="form-group row js-summary d-none mb-0"><label for="importedNumber" class="col-sm-5 col-form-label"><?php echo \App\Language::translate('LBL_NUMBER_OF_IMPORTED_ENTRIES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-7"><input type="text" readonly class="form-control-plaintext js-imported-number" id="importedNumber" /></div></div><div class="form-group row js-summary d-none mb-0"><div class="col-sm-12"><textarea readonly class="form-control-plaintext js-errors"></textarea></div></div></form></div><!-- /tpl-Settings-Picklist-Import -->
<?php }
}
