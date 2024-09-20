<?php
/* Smarty version 4.2.0, created on 2024-05-10 18:03:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\MappedFields\Step1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_663e53601543f5_32025219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae398270e552462027c02e278e9e4b20f6f5ebd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\MappedFields\\Step1.tpl',
      1 => 1702905763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663e53601543f5_32025219 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mfTemplateContents"><form name="editMFTemplate" action="index.php" method="post" id="mf_step1" class="form-horizontal"><input type="hidden" name="module" value="MappedFields"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step2" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="1" /><?php if ($_smarty_tpl->tpl_vars['RECORDID']->value) {?><input type="hidden" name="tabid" value="<?php echo $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('tabid');?>
" /><input type="hidden" name="reltabid" value="<?php echo $_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('reltabid');?>
" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><?php }?><div class="col-md-12 px-0"><div class="card"><div class="card-header"><label><strong><?php echo \App\Language::translateArgs('LBL_STEP_N',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,1);?>
: <?php echo \App\Language::translate('LBL_ENTER_BASIC_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="card-body"><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-8 controls"><select class="select2 form-control" id="status" name="status" required="true"><option value="1" <?php if ($_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('status')) {?>selected<?php }?>><?php echo \App\Language::translate('active',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="0" <?php if (!$_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('status')) {?>selected<?php }?>><?php echo \App\Language::translate('inactive',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option></select></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-8 controls"><select class="select2 form-control" id="tabid" name="tabid" required="true" data-validation-engine="validate[required]" <?php if ($_smarty_tpl->tpl_vars['RECORDID']->value) {?> disabled <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE', false, 'TABID');
$_smarty_tpl->tpl_vars['MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE']->value) {
$_smarty_tpl->tpl_vars['MODULE']->do_else = false;
if ($_smarty_tpl->tpl_vars['MODULE']->value->getName() == 'OSSMailView') {?> continue <?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('tabid') == $_smarty_tpl->tpl_vars['TABID']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_SELECT_REL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="col-sm-8 controls"><select class="select2 form-control" id="reltabid" name="reltabid" required="true" data-validation-engine="validate[required]" <?php if ($_smarty_tpl->tpl_vars['RECORDID']->value) {?> disabled <?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_MODULES']->value, 'MODULE', false, 'TABID');
$_smarty_tpl->tpl_vars['MODULE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TABID']->value => $_smarty_tpl->tpl_vars['MODULE']->value) {
$_smarty_tpl->tpl_vars['MODULE']->do_else = false;
if ($_smarty_tpl->tpl_vars['MODULE']->value->getName() == 'OSSMailView') {?> continue <?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MAPPEDFIELDS_MODULE_MODEL']->value->get('reltabid') == $_smarty_tpl->tpl_vars['TABID']->value) {?> selected <?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value->getName());?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="card-footer clearfix"><div class="btn-toolbar float-right"><button class="btn btn-success" type="submit"><span class="fas fa-caret-right mr-1"></span><?php echo \App\Language::translate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><button class="btn btn-warning cancelLink" type="reset"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div></form></div>
<?php }
}
