<?php
/* Smarty version 4.2.0, created on 2024-04-30 15:19:48
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Menu\EditMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6630fe043c5320_86656193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caf39b8ed685b0b3402012a250e359a788c42fec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Menu\\EditMenu.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6630fe043c5320_86656193 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Menu-EditMenu modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><span class="yfi yfi-full-editing-view u-mr-5px"></span><?php echo \App\Language::translate('LBL_EDITION_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
">
					<span aria-hidden="true" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php $_smarty_tpl->_assignInScope('MENU_TYPES', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMenuTypes());?>
				<?php $_smarty_tpl->_assignInScope('MENU_TYPE', $_smarty_tpl->tpl_vars['MENU_TYPES']->value[$_smarty_tpl->tpl_vars['RECORD']->value->get('type')]);?>
				<form class="form-horizontal">
					<input type="hidden" id="menuType" value="<?php echo $_smarty_tpl->tpl_vars['MENU_TYPE']->value;?>
" />
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
					<input type="hidden" name="role" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('role');?>
" />
					<div class="form-group row">
						<label class="col-md-4 col-form-label"><?php echo \App\Language::translate('LBL_TYPE_OF_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label>
						<div class="col-md-7 form-control-plaintext">
							<?php echo \App\Language::translate(('LBL_').(strtoupper($_smarty_tpl->tpl_vars['MENU_TYPE']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</div>
					</div>
					<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath((('types/').($_smarty_tpl->tpl_vars['MENU_TYPE']->value)).('.tpl'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</form>
			</div>
			<div class="modal-footer">
				<div class="float-right cancelLinkContainer" style="margin-top:0px;">

					<button class="btn btn-success saveButton"><span class="fa fa-check u-mr-5px"></span><strong><?php echo \App\Language::translate('LBL_SAVE_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
					<button class="btn btn-warning" type="reset"
						data-dismiss="modal"><span class="fa fa-times u-mr-5px"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
