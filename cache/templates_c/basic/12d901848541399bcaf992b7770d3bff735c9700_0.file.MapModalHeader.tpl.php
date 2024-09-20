<?php
/* Smarty version 4.2.0, created on 2024-01-16 11:46:51
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\OpenStreetMap\MapModalHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a65e9b5dde73_96578413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12d901848541399bcaf992b7770d3bff735c9700' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\OpenStreetMap\\MapModalHeader.tpl',
      1 => 1702905766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a65e9b5dde73_96578413 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-OpenStreetMap-MapModalHeader --><div class="modal js-modal-data <?php if ($_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?>static" data-keyboard="false<?php }?>" tabindex="-1" data-js="data" role="dialog" <?php
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
 type="text/javascript">app.registerModalController('<?php echo $_smarty_tpl->tpl_vars['MODAL_ID']->value;?>
');<?php echo '</script'; ?>
><?php }?><div class="modal-header<?php if ((isset($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass))) {?> <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->headerClass;
}?>"><h4 class="modal-title"><?php if ($_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon) {?><span class="modal-header-icon <?php echo $_smarty_tpl->tpl_vars['MODAL_VIEW']->value->modalIcon;?>
 mr-2"></span><?php }
echo $_smarty_tpl->tpl_vars['MODAL_TITLE']->value;?>
</h4><div class="col-md-10 mx-auto"><div class="input-group"><div class="input-group-prepend<?php if (count($_smarty_tpl->tpl_vars['ADDRESS_PROVIDERS']->value) == 1) {?> d-none<?php }?>"><select class="select2 js-select-operator" data-dropdown-auto-width="true" data-js="value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADDRESS_PROVIDERS']->value, 'ROW');
$_smarty_tpl->tpl_vars['ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->tpl_vars['ROW']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
" <?php if (\App\Map\Address::getDefaultProvider() == $_smarty_tpl->tpl_vars['ROW']->value) {?>selected<?php }?>><?php echo \App\Language::translate(mb_strtoupper(('LBL_PROVIDER_').($_smarty_tpl->tpl_vars['ROW']->value), 'UTF-8'),'Settings:ApiAddress');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><input type="text" class="js-search-address form-control" placeholder="<?php echo \App\Language::translate('LBL_SEARCH_ADDRESS_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" /><input type="text" class="form-control u-max-w-150px js-radius" data-js="val" size="6" placeholder="<?php echo \App\Language::translate('LBL_IN_RADIUS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" /><div class="input-group-append"><button class="btn btn-success input-group-btn js-search-btn" data-js="click"><span class="fas fa-search fa-fw mr-2"></span><?php echo \App\Language::translate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></button></div></div></div><div class="col-md-1 mx-auto"><button class="btn btn-warning js-popover-tooltip js-my-location-btn" data-label="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_MY_LOCATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_SEARCH_MY_LOCATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
"><span class="fas fa-location-crosshairs"></span></button></div><?php if (!$_smarty_tpl->tpl_vars['LOCK_EXIT']->value) {?><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CANCEL');?>
"><span aria-hidden="true">&times;</span></button><?php }?></div><!-- /tpl-OpenStreetMap-MapModalHeader -->
<?php }
}
