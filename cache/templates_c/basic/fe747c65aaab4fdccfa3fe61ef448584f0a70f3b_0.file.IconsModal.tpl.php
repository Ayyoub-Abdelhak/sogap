<?php
/* Smarty version 4.2.0, created on 2024-04-30 15:09:50
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Vtiger\IconsModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6630fbaebea7e1_21877211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe747c65aaab4fdccfa3fe61ef448584f0a70f3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Vtiger\\IconsModal.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630fbaebea7e1_21877211 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_SELECT_ICON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div><div class="modal-body col-md-12"><input type="hidden" id="iconType" value="-" /><input type="hidden" id="iconName" value="-" /><div><select class="form-control" id="iconsList" name="type"></select></div><br /><div><div class="row"><div class="col-sm-5 d-flex"><strong class="ml-sm-auto"><?php echo \App\Language::translate('LBL_ICON_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></div><div class="col-sm-7 d-flex"><div class="iconName m-sm-auto"></div></div></div><div class="row"><div class="col-sm-5 d-flex"><strong class="ml-sm-auto my-sm-auto"><?php echo \App\Language::translate('LBL_ICON_EXAMPLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</strong></div><div class="col-sm-7 d-flex"><div class="iconExample m-sm-auto u-fs-38px"></div></div></div></div></div><div class="modal-footer"><button class="btn btn-success" type="submit" name="saveButton" data-dismiss="modal"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div>
<?php }
}
