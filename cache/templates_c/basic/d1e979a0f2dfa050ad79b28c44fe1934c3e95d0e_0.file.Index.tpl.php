<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:30:53
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\MarketingProcesses\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818cfd4d97e5_61387781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1e979a0f2dfa050ad79b28c44fe1934c3e95d0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\MarketingProcesses\\Index.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818cfd4d97e5_61387781 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="supportProcessesContainer" class=" supportProcessesContainer">
	<div class="o-breadcrumb widget_header row">
		<div class="col-12">
			<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</div>
	</div>
	<ul id="tabs" class="nav nav-tabs my-2 mr-0" data-tabs="tabs">
		<li class="nav-item"><a class="nav-link active" href="#conversiontoaccount" data-toggle="tab"><?php echo \App\Language::translate('LBL_CONVERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </a></li>
		<li class="nav-item"><a class="nav-link" href="#lead_configuration" data-toggle="tab"><?php echo \App\Language::translate('LBL_LEADS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="conversiontoaccount">
			<?php $_smarty_tpl->_assignInScope('CONVERSION', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getConfig('conversion'));?>
			<div class="well">
				<div class="row">
					<div class="col-3"><label class=""><?php echo \App\Language::translate('LBL_CONVERSION_TO_ACCOUNT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div>
					<div class="col-1"><input class="configField" type="checkbox" data-type="conversion" name="change_owner" value="1" <?php if ($_smarty_tpl->tpl_vars['CONVERSION']->value['change_owner'] == 'true') {?>checked="" <?php }?> /></div>
					<div class="col-8">
						<span class="alert alert-info float-right no-margin">
							<?php echo \App\Language::translate('LBL_CONVERSION_TO_ACCOUNT_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</span>
					</div>
				</div>
			</div>
			<div class="well">
				<div class="row">
					<div class="col-3"><label class=""><?php echo \App\Language::translate('LBL_CONVERT_LEAD_MERGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div>
					<div class="col-1"><input class="configField" type="checkbox" data-type="conversion" name="create_always" value="1" <?php if ($_smarty_tpl->tpl_vars['CONVERSION']->value['create_always'] == 'true') {?>checked="" <?php }?> /></div>
					<div class="col-8">
						<span class="alert alert-info float-right no-margin">
							<?php echo \App\Language::translate('LBL_CONVERT_LEAD_MERGE_ALERT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</span>
					</div>
				</div>
				<div class="mappingTable<?php if ($_smarty_tpl->tpl_vars['CONVERSION']->value['create_always'] != 'true') {?> d-none<?php }?>">
					<br />
					<input class="configField" type="hidden" data-type="conversion" name="mapping" value="">
					<div class="paddingBottom10">
						<button id="addMapping" class="btn btn-success addButton" type="button">
							<span class="fas fa-plus"></span>&nbsp;<strong><?php echo \App\Language::translate('LBL_CONDITION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>
						</button>
						<button id="addMapping" class="float-right btn btn-success saveMapping" type="button">
							<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>
						</button>
					</div>
					<table class="table table-bordered" id="convertLeadMapping">
						<tbody>
							<tr class="blockHeader">
								<th class="blockHeader"><?php echo \App\Language::translate('Leads',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th>
								<th class="blockHeader"><?php echo \App\Language::translate('Accounts',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th>
							</tr>
							<?php $_smarty_tpl->_assignInScope('MAPPING', \App\Json::decode($_smarty_tpl->tpl_vars['CONVERSION']->value['mapping']));?>
							<?php $_smarty_tpl->_assignInScope('LEAD_FIELDS', $_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getFields());?>
							<?php $_smarty_tpl->_assignInScope('ACCOUNT_FIELDS', $_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getFields());?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAPPING']->value, 'MAPPING_ARRAY', false, NULL, 'mappingLoop', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value) {
$_smarty_tpl->tpl_vars['MAPPING_ARRAY']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']++;
?>
								<tr class="listViewEntries" sequence-number="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration'] : null);?>
">
									<td>
										<select class="leadsFields select2 form-control-sm" name="mapping[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration'] : null);?>
][lead]">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LEAD_FIELDS']->value, 'FIELD_INFO', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['FIELD_INFO']->do_else = false;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == key($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value)) {?> selected <?php }?>>
													<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_INFO']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>

												</option>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</select>
									</td>
									<td>
										<div class="row">
											<div class="col-11">
												<select class="accountsFields select2 form-control-sm" name="mapping[<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mappingLoop']->value['iteration'] : null);?>
][account]">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACCOUNT_FIELDS']->value, 'FIELD_INFO', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['FIELD_INFO']->do_else = false;
?>
														<option <?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == current($_smarty_tpl->tpl_vars['MAPPING_ARRAY']->value)) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
">
															<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_INFO']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>

														</option>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</select>
											</div>
											<div class="actionImages">
												<a class='btn'><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fas fa-trash-alt deleteMapping"></span></a>
											</div>
										</div>
									</td>
								</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<tr class="d-none newMapping listViewEntries">
								<td>
									<select class="leadsFields newSelect">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LEAD_FIELDS']->value, 'FIELD_INFO', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['FIELD_INFO']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
">
												<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_INFO']->value->get('label'),$_smarty_tpl->tpl_vars['LEADS_MODULE_MODEL']->value->getName());?>

											</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
								<td>
									<div class="row">
										<div class="col-11">
											<select class="accountsFields newSelect">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACCOUNT_FIELDS']->value, 'FIELD_INFO', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['FIELD_INFO']->do_else = false;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
">
														<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_INFO']->value->get('label'),$_smarty_tpl->tpl_vars['ACCOUNTS_MODULE_MODEL']->value->getName());?>

													</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										</div>
										<div class="actionImages">
											<a class='btn'><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fas fa-trash-alt deleteMapping"></span></a>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class='tab-pane' id="lead_configuration">
			<?php $_smarty_tpl->_assignInScope('LEAD', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getConfig('lead'));?>
			<table class="table tableRWD table-bordered table-sm themeTableColor userTable">
				<thead>
					<tr class="blockHeader">
						<th class="mediumWidthType">
							<span><?php echo \App\Language::translate('LBL_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
						</th>
						<th class="mediumWidthType">
							<span><?php echo \App\Language::translate('LBL_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label><?php echo \App\Language::translate('LBL_GROUPS_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td>
						<td class="w-50">
							<?php $_smarty_tpl->_assignInScope('ALL_ACTIVEGROUP_LIST', \App\Fields\Owner::getInstance('Leads')->getAccessibleGroups());?>
							<select class="select2 configField" name="groups" data-type="lead" multiple>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_ACTIVEGROUP_LIST']->value, 'OWNER_NAME', false, 'OWNER_ID');
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_ID']->value => $_smarty_tpl->tpl_vars['OWNER_NAME']->value) {
$_smarty_tpl->tpl_vars['OWNER_NAME']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['OWNER_ID']->value,$_smarty_tpl->tpl_vars['LEAD']->value['groups'])) {?>selected<?php }?>>
										<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>

									</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</td>
					</tr>
					<tr>
						<td><label><?php echo \App\Language::translate('LBL_LEAD_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td>
						<td class="w-50">
							<select class="select2 configField" multiple data-type="lead" name="status">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, App\Fields\Picklist::getValuesName('leadstatus'), 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['ITEM']->value,$_smarty_tpl->tpl_vars['LEAD']->value['status'])) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value,'Leads');?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</td>
					</tr>
					<tr>
						<td><label><?php echo \App\Language::translate('LBL_LEAD_CONVERT_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></td>
						<td class="w-50">
							<select class="select2 configField" multiple data-type="lead" name="convert_status">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, App\Fields\Picklist::getValuesName('leadstatus'), 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['ITEM']->value,$_smarty_tpl->tpl_vars['LEAD']->value['convert_status'])) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value,'Leads');?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php }
}
