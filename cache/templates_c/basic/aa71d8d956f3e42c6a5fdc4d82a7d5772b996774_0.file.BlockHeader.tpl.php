<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:27:42
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\BlockHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818c3e8ee8f4_99945996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa71d8d956f3e42c6a5fdc4d82a7d5772b996774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\BlockHeader.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818c3e8ee8f4_99945996 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-BlockHeader.tpl --><div class="mb-2 mb-lg-0 mx-2 mx-lg-0"><label class="text-md-right u-text-small-bold pt-1 mb-0"><span class="copyAddressLabel col-form-label mr-2"><?php echo \App\Language::translate('COPY_ADRESS_FROM');?>
</span></label><?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value != 'LBL_ADDRESS_SHIPPING' && !empty($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ADDRESS_SHIPPING'])) {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromDelivery mr-2 mb-1 mb-md-0" type="button" data-label="LBL_ADDRESS_SHIPPING" data-js="class: d-none"><strong><?php echo \App\Language::translate('LBL_ADDRESS_SHIPPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value != 'LBL_ADDRESS_BILLING' && !empty($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ADDRESS_BILLING'])) {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromDelivery mr-2 mb-1 mb-md-0" type="button" data-label="LBL_ADDRESS_BILLING" data-js="class: d-none"><strong><?php echo \App\Language::translate('LBL_ADDRESS_BILLING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value != 'LBL_ADDRESS_INFORMATION' && !empty($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ADDRESS_INFORMATION'])) {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromMain mr-2 mb-1 mb-md-0" type="button" data-label="LBL_ADDRESS_INFORMATION" data-js="class: d-none"><strong><?php echo \App\Language::translate('LBL_ADDRESS_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value != 'LBL_ADDRESS_MAILING_INFORMATION' && !empty($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ADDRESS_MAILING_INFORMATION'])) {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromMailing mr-2 mb-1 mb-md-0" type="button" data-label="LBL_ADDRESS_MAILING_INFORMATION" data-js="class: d-none"><strong><?php echo \App\Language::translate('LBL_ADDRESS_MAILING_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }
if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value != 'LBL_ADDRESS_DELIVERY_INFORMATION' && !empty($_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value['LBL_ADDRESS_DELIVERY_INFORMATION'])) {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromDelivery mr-2 mb-1 mb-md-0" type="button" data-label="LBL_ADDRESS_DELIVERY_INFORMATION" data-js="class: d-none"><strong><?php echo \App\Language::translate('LBL_ADDRESS_DELIVERY_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromAccount mr-2 mb-1 mb-md-0 d-none" type="button" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
" data-js="class: d-none"><strong><?php echo \App\Language::translate('SINGLE_Accounts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromLead mr-2 mb-1 mb-md-0 d-none" type="button" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
" data-js="class: d-none"><strong><?php echo \App\Language::translate('SINGLE_Leads','Contacts');?>
</strong></button><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromVendor mr-2 mb-1 mb-md-0 d-none" type="button" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
" data-js="class: d-none"><strong><?php echo \App\Language::translate('SINGLE_Vendors','Contacts');?>
</strong></button><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != 'Contacts') {?><button class="btn btn-sm btn-primary c-btn-block-sm-down copyAddressFromContact mr-2 mb-1 mb-md-0 d-none" type="button" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
" data-js="class: d-none"><strong><?php echo \App\Language::translate('SINGLE_Contacts',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?></div><?php if ($_smarty_tpl->tpl_vars['SEARCH_ADDRESS']->value && $_smarty_tpl->tpl_vars['PROVIDER']->value) {?><div class="d-flex justify-content-center col-lg-8 mx-1 mx-lg-0"><div class="js-search-address input-group input-group-sm c-btn-block-sm-down" data-js="container"><div class="input-group-prepend<?php if (count($_smarty_tpl->tpl_vars['PROVIDER']->value) == 1) {?> d-none<?php }?>"><select class="select2 js-select-operator" data-dropdown-auto-width="true" data-js="value"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PROVIDER']->value, 'ROW');
$_smarty_tpl->tpl_vars['ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->tpl_vars['ROW']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
" <?php if (\App\Map\Address::getDefaultProvider() == $_smarty_tpl->tpl_vars['ROW']->value) {?>selected<?php }?>><?php echo \App\Language::translate(mb_strtoupper(('LBL_PROVIDER_').($_smarty_tpl->tpl_vars['ROW']->value), 'UTF-8'),'Settings:ApiAddress');?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php $_smarty_tpl->_assignInScope('ADDRESS_FINDER_CONFIG', \App\Map\Address::getConfig());?><input title="<?php echo \App\Language::translate('LBL_ADDRESS_INFORMATION');?>
" type="search"placeholder="<?php echo \App\Language::translate('LBL_ENTER_SEARCHED_ADDRESS');?>
"data-min="<?php echo $_smarty_tpl->tpl_vars['ADDRESS_FINDER_CONFIG']->value['global']['min_length'];?>
"class="js-autoload-address form-control" data-js="autocomplete" /><div class="input-group-append"><span class="input-group-text"><span class="fas fa-search fa-fw"></span><span class="sr-only"><?php echo App\Language::translate('LBL_SEARCH');?>
</span></span></div></div></div><?php }?><!-- /tpl-Base-BlockHeader.tpl -->
<?php }
}
