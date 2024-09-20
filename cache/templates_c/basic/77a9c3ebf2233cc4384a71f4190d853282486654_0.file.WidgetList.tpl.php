<?php
/* Smarty version 4.2.0, created on 2024-05-10 17:59:22
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Widgets\WidgetList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e526a70f5e5_09747721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a9c3ebf2233cc4384a71f4190d853282486654' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Widgets\\WidgetList.tpl',
      1 => 1702905759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e526a70f5e5_09747721 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='modelContainer modal fade' tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-modalAddWidget">
				<div class="modal-header">
					<h5 class="modal-title">
						<span class="fas fa-plus mr-1"></span>
						<?php echo \App\Language::translate('Add widget',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-Fields">
						<div class="row align-items-center">
							<div class="col-md-4"><?php echo \App\Language::translate('LBL_WIDGET_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div>
							<div class="col-md-8">
								<select name="type" class="select2 col-md-3 marginLeftZero form-control">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getType($_smarty_tpl->tpl_vars['SOUNRCE_MODULE']->value), 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['item']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success" type="submit" name="saveButton">
						<strong>
							<span class="fas fa-check mr-1"></span>
							<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</strong>
					</button>
					<button class="btn btn-danger" type="reset" data-dismiss="modal">
						<strong>
							<span class="fas fa-times mr-1"></span>
							<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</strong>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php }
}
