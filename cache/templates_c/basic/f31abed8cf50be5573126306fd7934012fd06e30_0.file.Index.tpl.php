<?php
/* Smarty version 4.2.0, created on 2023-12-26 16:10:31
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Menu\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658aece71ee657_70027455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f31abed8cf50be5573126306fd7934012fd06e30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Menu\\Index.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658aece71ee657_70027455 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Menu-Index menuConfigContainer">
	<div class="o-breadcrumb widget_header row">
		<div class="col-md-7">
			<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</div>
		<div class="col-md-5 row mt-2">
			<div class="col-6 px-0">
				<button class="btn btn-outline-secondary addMenu float-right">
					<strong>
						<span class="fa fa-plus u-mr-5px"></span>
						<?php echo \App\Language::translate('LBL_ADD_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

					</strong>
				</button>
			</div>
			<div class="col-6 float-right">
				<select class="select2 form-control" name="roleMenu">
					<option value="0" <?php if ($_smarty_tpl->tpl_vars['ROLEID']->value == 0) {?> selected="" <?php }?>><?php echo \App\Language::translate('LBL_DEFAULT_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
					<optgroup label="<?php echo \App\Language::translate('LBL_ROLES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Roles_Record_Model::getAll(), 'ROLE', false, 'KEY');
$_smarty_tpl->tpl_vars['ROLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ROLE']->value) {
$_smarty_tpl->tpl_vars['ROLE']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ROLEID']->value === $_smarty_tpl->tpl_vars['KEY']->value) {?> selected="" <?php }?>>
								<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROLE']->value->getName());?>

							</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</optgroup>
					<optgroup label="<?php echo \App\Language::translate('WebserviceApps','Settings:WebserviceApps');?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_WebserviceApps_Module_Model::getServers(), 'SERVER', false, 'KEY');
$_smarty_tpl->tpl_vars['SERVER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['SERVER']->value) {
$_smarty_tpl->tpl_vars['SERVER']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['ROLEID']->value == $_smarty_tpl->tpl_vars['KEY']->value) {?> selected="" <?php }?>>
								<?php echo App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['SERVER']->value['name']);?>

							</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</optgroup>
				</select>
			</div>
		</div>
	</div>
	<input type="hidden" class="js-source" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE']->value;?>
" data-js="val">
	<hr>
	<?php if (!$_smarty_tpl->tpl_vars['DATA']->value) {?>
		<button class="btn btn-success copyMenu">
			<strong><?php echo \App\Language::translate('LBL_COPY_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
	<?php }?>
	<div class="treeMenuContainer">
		<input type="hidden" id="treeLastID" value="<?php echo $_smarty_tpl->tpl_vars['LASTID']->value;?>
" />
		<input type="hidden" name="tree" id="treeValues" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' />
		<div id="treeContent"></div>
	</div>
	<div class="modal fade copyMenuModal">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<form>
					<div class="modal-header">
						<h5 class="modal-title"><?php echo \App\Language::translate('LBL_COPY_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
						<button type="button" class="close" data-dismiss="modal"
							aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
">
							<span aria-hidden="true" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<select id="roleList" class="form-control" name="roles"
							data-validation-engine="validate[required]">
							<option value="0">
								<?php echo \App\Language::translate('LBL_DEFAULT_MENU',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

							</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROLES_CONTAIN_MENU']->value, 'ROLE', false, 'KEY');
$_smarty_tpl->tpl_vars['ROLE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ROLE']->value) {
$_smarty_tpl->tpl_vars['ROLE']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['roleId'];?>
">
									<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ROLE']->value['roleName']);?>

								</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
					<div class="modal-footer">
						<button type="submit"
							class="btn btn-success saveButton">
							<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</button>
						<button type="button" class="btn btn-warning dismiss"
							data-dismiss="modal">
							<?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal deleteAlert fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><?php echo \App\Language::translate('LBL_REMOVE_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5>
				<button type="button" class="close" data-dismiss="modal"
					aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
">
					<span aria-hidden="true" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p><?php echo \App\Language::translate('LBL_REMOVE_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p>
			</div>
			<div class="modal-footer">
				<div class="float-right">
					<button class="btn btn-warning cancelLink" type="reset" data-dismiss="modal">
						<?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

					</button>
				</div>
				<div class="float-right">
					<button class="btn btn-danger" data-dismiss="modal">
						<?php echo \App\Language::translate('LBL_REMOVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }
}
