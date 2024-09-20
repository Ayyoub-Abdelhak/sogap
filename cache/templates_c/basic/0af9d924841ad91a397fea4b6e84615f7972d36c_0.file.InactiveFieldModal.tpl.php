<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:35:57
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\InactiveFieldModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818e2d781ce7_46513090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0af9d924841ad91a397fea4b6e84615f7972d36c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\InactiveFieldModal.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818e2d781ce7_46513090 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal inactiveFieldsModal fade" tabindex="-1"><div class="modal-dialog modal-md"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><span class="fas fa-ban mr-2"></span><?php echo App\Language::translate('LBL_INACTIVE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form class="form-horizontal inactiveFieldsForm" method="POST"><div class="modal-body"><div class="inActiveList"></div></div><div class="modal-footer"><button class="btn btn-success mr-2" type="submit" name="reactivateButton"><span class="fa fa-check mr-2"></span><?php echo App\Language::translate('LBL_REACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><div class="cancelLinkContainer"><a class="cancelLink btn btn-warning" type="reset" data-dismiss="modal"><span class="fas fa-times mr-2"></span><?php echo App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></form></div></div></div>
<?php }
}
