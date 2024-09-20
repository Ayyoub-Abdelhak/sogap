<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:25:00
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\TreeHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65859c3cdb45f7_54168666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2e8da59447939603fce8fe9521946aa4792dd8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\TreeHeader.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65859c3cdb45f7_54168666 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Modals-TreeHeader --><div class="modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static<?php }?>" tabindex="-1" data-js="data"role="dialog" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalData, 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?> data-<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>><div class="modal-dialog <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalSize;?>
" role="document"><div class="modal-content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_CSS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
?><link rel="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getRel();?>
" href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getHref();?>
" /><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODAL_SCRIPTS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['REGISTER_EVENTS']->value) {
echo '<script'; ?>
 type="text/javascript">
						app.registerModalController();
					<?php echo '</script'; ?>
><?php }?><div class="modal-header d-block"><div class="d-flex"><h5 class="modal-title"><?php if ($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon) {?><span class="<?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon;?>
 mr-2"></span><?php }
echo $_smarty_tpl->tpl_vars['MODAL_TITLE']->value;?>
</h5><?php if (!$_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CANCEL');?>
"><span aria-hidden="true">&times;</span></button><?php }?></div><div class="input-group pt-2"><input id="valueSearchTree" type="text" class="form-control" placeholder="<?php echo \App\Language::translate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 ..."><div class="input-group-append"><button id="btnSearchTree" class="btn btn-light" type="button"><span class="fas fa-search mr-2"></span><?php echo \App\Language::translate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div><!-- /tpl-Base-Modals-TreeHeader -->
<?php }
}
