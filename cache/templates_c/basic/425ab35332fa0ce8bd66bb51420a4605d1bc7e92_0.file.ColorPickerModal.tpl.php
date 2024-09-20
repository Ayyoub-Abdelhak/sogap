<?php
/* Smarty version 4.2.0, created on 2023-12-29 11:06:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\components\ColorPickerModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658e9a4086d4e1_21803674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '425ab35332fa0ce8bd66bb51420a4605d1bc7e92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\components\\ColorPickerModal.tpl',
      1 => 1702905740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658e9a4086d4e1_21803674 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Components-ColorPickerModal--><div class="modal-body"><form class="form-horizontal"><div class="form-group form-row"><div class="col-12 d-flex align-items-center flex-wrap"><span class="col-form-label u-text-small-bold"><?php echo \App\Language::translate('LBL_SELECT_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><span class="ml-auto mr-2"><?php echo \App\Language::translate('LBL_PREVIOUS_COLOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span><span class="c-circle d-inline-flex" style="background-color: #<?php echo $_smarty_tpl->tpl_vars['COLOR']->value;?>
"></span></div><div class=" col-12 controls"><input type="hidden" class="selectedColor" value="<?php echo $_smarty_tpl->tpl_vars['COLOR']->value;?>
" /><div class="js-color-picker" data-js="color-picker"></div></div></div></form></div><!-- /tpl-Components-ColorPickerModal-->
<?php }
}
