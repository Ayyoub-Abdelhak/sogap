<?php
/* Smarty version 4.2.0, created on 2024-02-20 12:28:37
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Menu\CreateMenuStep1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65d48ce57506d3_24360654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaed867b8fb1f51554bd0725b9c62dc2cc198692' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Menu\\CreateMenuStep1.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65d48ce57506d3_24360654 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Menu-CreateMenuStep1 modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><span class="fa fa-plus u-mr-5px"></span><?php echo \App\Language::translate('LBL_CREATING_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php $_smarty_tpl->_assignInScope('MENU_TYPES', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMenuTypes());?>
				<input type="hidden" id="mode" value="step1" />
				<div class="row">
					<div class="col-md-5 mx-0"><?php echo \App\Language::translate('LBL_SELECT_TYPE_OF_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div>
					<div class="col-md-7">
						<select name="type" class="select2 type">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU_TYPES']->value, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php echo \App\Language::translate(('LBL_').(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
				<br />
				<div class="well well-small mb-0 bg-light" style="max-height: 280px;overflow-y: scroll;">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENU_TYPES']->value, 'ITEM', false, 'KEY');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?>
						<h5><?php echo \App\Language::translate(('LBL_').(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value)),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
						<p><?php echo \App\Language::translate((('LBL_').(strtoupper($_smarty_tpl->tpl_vars['ITEM']->value))).('_DESC'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<div class="modal-footer">
				<div class="float-right cancelLinkContainer mt-0">
					<button class="btn btn-success nextButton" type="submit">
						<strong>
							<span class="fas fa-caret-right mr-1"></span>
							<?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</strong>
					</button>
					<button class="btn cancelLink btn-warning" type="reset" data-dismiss="modal">
						<span class="fas fa-times mr-1"></span>
						<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
