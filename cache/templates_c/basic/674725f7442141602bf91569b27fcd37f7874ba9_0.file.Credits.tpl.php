<?php
/* Smarty version 4.2.0, created on 2023-12-26 13:02:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Dependencies\Credits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658ac0f0841fc0_96206948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '674725f7442141602bf91569b27fcd37f7874ba9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Dependencies\\Credits.tpl',
      1 => 1702905764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658ac0f0841fc0_96206948 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-Dependencies-Credits --><div class="settingsIndexPage"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-12"><?php echo \App\Language::translate('LBL_CREDITS_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><div class="js-table-container mt-4 mb-5" data-js="container"><table class="table table-sm table-bordered dataTableWithRecords"><thead><th class="p-2"><?php echo \App\Language::translate('LBL_LIBRARY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="p-2"><?php echo \App\Language::translate('LBL_VERSION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="p-2"><?php echo \App\Language::translate('LBL_LICENSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="p-2"></th></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LIBRARIES']->value, 'ITEMS', false, 'TYPE');
$_smarty_tpl->tpl_vars['ITEMS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->value => $_smarty_tpl->tpl_vars['ITEMS']->value) {
$_smarty_tpl->tpl_vars['ITEMS']->do_else = false;
if ($_smarty_tpl->tpl_vars['ITEMS']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITEMS']->value, 'ITEM');
$_smarty_tpl->tpl_vars['ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
$_smarty_tpl->tpl_vars['ITEM']->do_else = false;
?><tr data-name="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM']->value['name']);?>
"><td><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];
if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['description'])) {?>&nbsp;(<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['description'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
)<?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['version'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['license'];?>
</td><td><?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['homepage'])) {?><a title="<?php echo \App\Language::translate('LBL_LIBRARY_HOMEPAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" href="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['homepage'];?>
" target="_blank" rel="noreferrer noopener"><span class="fas fa-link mr-2"></span></a><?php }
if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['licenseError'])) {?><span title="<?php echo \App\Language::translate('LBL_LICENSE_ERROR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="fas fa-exclamation text-danger mr-2 u-cursor-pointer"></span><?php }
if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['packageFileMissing'])) {?><span title="<?php echo \App\Language::translate('LBL_MISSING_PACKAGE_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="fas fa-file-code text-danger mr-2 u-cursor-pointer"></span><?php } elseif (!empty($_smarty_tpl->tpl_vars['ITEM']->value['notPackageFile'])) {
} else { ?><span title="<?php echo \App\Language::translate('LBL_SHOW_MORE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" data-library-name="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['name'];?>
" class="fas fa-info-circle text-dark u-cursor-pointer js-show-more mr-2" data-js="click"></span><?php }
if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['license']) && !empty($_smarty_tpl->tpl_vars['ITEM']->value['showLicenseModal'])) {?><span title="<?php echo \App\Language::translate('LBL_LICENSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-license="<?php if (!empty($_smarty_tpl->tpl_vars['ITEM']->value['licenseToDisplay'])) {
echo $_smarty_tpl->tpl_vars['ITEM']->value['licenseToDisplay'];
} else {
echo $_smarty_tpl->tpl_vars['ITEM']->value['license'];
}?>" class="fab fa-wpforms text-dark u-cursor-pointer js-show-license mr-2" data-js="click"></span><?php }?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?><div class="p-3 mb-2 bg-danger text-white"><span class="fas fa-exclamation-triangles mr-2"></span><?php echo \App\Language::translate('LBL_MISSING_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
</div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div><!-- /tpl-Settings-Dependencies-Credits -->
<?php }
}
