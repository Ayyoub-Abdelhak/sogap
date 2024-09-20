<?php
/* Smarty version 4.2.0, created on 2024-05-10 18:06:00
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\GenerateModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e53f8abfa08_24296078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c3120cc1b4611f9e5c6ca76554ca572954a913' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\GenerateModal.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e53f8abfa08_24296078 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-GenerateModal --><div class="modal-header align-items-center"><h5 class="modal-title"><span class="fas fa-plus-circle mr-2"></span><?php echo \App\Language::translate('LBL_GENERATE_RECORD_FOR_MODULE',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'List') {?><input type="hidden" name="all_records" id="all_records" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ALL_RECORDS']->value));?>
" /><div class="form-group form-row d-flex justify-content-center"><div class="radio-inline mr-3"><label><input type="radio" class="mr-1" name="method" id="optionsRadios1" value="0"><?php echo \App\Language::translate('LBL_AUTOGENERATE',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
&nbsp;</label><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_AUTOGENERATE_INFO',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div><div class="radio-inline"><label><input type="radio" class="mr-1" name="method" id="optionsRadios2" value="1" checked><?php echo \App\Language::translate('LBL_OPEN_NEW_WINDOWS',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
&nbsp;</label><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_OPEN_NEW_WINDOWS_INFO',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div><?php }?><div class="w-75 float-left"><select class="select2 form-control js-generate-mapping" data-template-result="prependDataTemplate" data-template-selection="prependDataTemplate" data-js="select"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES']->value, 'TEMPLATE');
$_smarty_tpl->tpl_vars['TEMPLATE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TEMPLATE']->value) {
$_smarty_tpl->tpl_vars['TEMPLATE']->do_else = false;
$_smarty_tpl->_assignInScope('RELATED_MODEL', $_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedModule());
$_smarty_tpl->_assignInScope('RELATED_MODULE_NAME', \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedName(),$_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedName()));?><option data-id="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODEL']->value->getName();?>
"data-url="<?php echo ($_smarty_tpl->tpl_vars['RELATED_MODEL']->value->getCreateRecordUrl()).("&reference_id=".((string)$_smarty_tpl->tpl_vars['RECORD']->value));?>
"data-template="<span><span class='yfm-<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedName();?>
 mr-1'></span><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
</span>"><?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="text-right float-right w-25 pl-2"><button class="btn btn-success js-genetate-button border w-100" data-js="click"><?php echo \App\Language::translate('LBL_GENERATE');?>
</button></div></div><div class="modal-footer"></div><!-- /tpl-Base-GenerateModal -->
<?php }
}
