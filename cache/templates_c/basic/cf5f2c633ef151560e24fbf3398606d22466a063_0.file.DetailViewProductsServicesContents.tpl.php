<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:42:53
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\DetailViewProductsServicesContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819ddd364197_83378240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf5f2c633ef151560e24fbf3398606d22466a063' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\DetailViewProductsServicesContents.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819ddd364197_83378240 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-DetailViewProductsServicesContents"><?php if ((isset($_smarty_tpl->tpl_vars['RELATIONS']->value['Products']))) {?><div class="c-detail-widget js-detail-widget" data-js="container"><div class="widgetContainer_products hideActionImages" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=Products&mode=showRelatedRecords&page=1&limit=<?php echo $_smarty_tpl->tpl_vars['LIMIT']->value;?>
"data-name="LBL_RELATED_PRODUCTS"><div class="c-detail-widget__header js-detail-widget-header" data-js="container|value"><div class="form-row align-items-center py-1"><input type="hidden" name="relatedModule" value="Products" /><div class="col-10 col-sm-10 col-md-9 margin0px"><h5 class="mb-0"><?php echo \App\Language::translate('Interested products',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="col-1 col-md-3 summaryWidgetIcon"><div class="float-right"><?php if (!$_smarty_tpl->tpl_vars['RELATIONS']->value['Products']->isTreeRelation()) {
$_smarty_tpl->_assignInScope('VIEW', 'RecordsList');
} else {
$_smarty_tpl->_assignInScope('VIEW', 'TreeCategoryModal');
}?><button class="btn btn-light <?php if (!$_smarty_tpl->tpl_vars['RELATIONS']->value['Products']->isTreeRelation()) {?>js-widget-products-services<?php } else { ?>showModal<?php }?>" type="button"data-modalid="ProductsModal"data-url="index.php?module=Products&view=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
&src_module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&src_record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&multi_select=true"><span class="fas fa-search-plus" title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></div></div></div><hr class="widgetHr"></div><div class="c-detail-widget__content"><table class="table mb-0 mt-1 border-0"><thead><tr><th class="py-0 border-0"><h6 class="py-1 my-0"><?php echo \App\Language::translate('Products',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></th></tr></thead></table></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div><?php if ($_smarty_tpl->tpl_vars['RELATIONS']->value['Products']->isTreeRelation()) {?><div class="widgetContainer_productsCategory" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=Products&mode=showRelatedTree"data-name="LBL_RELATED_PRODUCTS"><div class="c-detail-widget__content"><table class="table mb-0 mt-1 border-0"><thead><tr><th class="py-0 border-0"><h6 class="py-1 my-0"><?php echo \App\Language::translate('LBL_CATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></th></tr></thead></table></div><div class="c-detail-widget__header js-detail-widget-header form-row" data-js="container|value"><input type="hidden" name="relatedModule" value="Products" /></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div><?php }?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['RELATIONS']->value['OutsourcedProducts']))) {?><div class="c-detail-widget js-detail-widget" data-js="container"><div class="widgetContainer_assets" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=OutsourcedProducts&mode=showRelatedRecords&page=1&limit=<?php echo $_smarty_tpl->tpl_vars['LIMIT']->value;?>
"data-name="LBL_RELATED_OP"><div class="c-detail-widget__header js-detail-widget-header" data-js="container|value"><div class="form-row align-items-center py-1"><input type="hidden" name="relatedModule" value="OutsourcedProducts" /><div class="col-10 col-sm-10 col-md-9 margin0px"><h5 class="mb-0"><?php echo \App\Language::translate('LBL_RELATED_OP',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="col-1 col-md-3 summaryWidgetIcon"><div class="float-right"><?php if (!$_smarty_tpl->tpl_vars['RELATIONS']->value['OutsourcedProducts']->isTreeRelation()) {
$_smarty_tpl->_assignInScope('VIEW', 'RecordsList');
} else {
$_smarty_tpl->_assignInScope('VIEW', 'TreeCategoryModal');
}?><button class="btn btn-light <?php if (!$_smarty_tpl->tpl_vars['RELATIONS']->value['OutsourcedProducts']->isTreeRelation()) {?>js-widget-products-services<?php } else { ?>showModal<?php }?>" type="button"data-modalid="OutsourcedProductsModal" data-module="OutsourcedProducts"data-url="index.php?module=OutsourcedProducts&view=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
&src_module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&src_record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&multi_select=true"><span class="fas fa-search-plus" title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></div></div></div><hr class="widgetHr"></div><div class="c-detail-widget__content"><table class="table mb-0 mt-1 border-0"><thead><tr><th class="py-0 border-0"><h6 class="py-1 my-0"><?php echo \App\Language::translate('Products',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></th></tr></thead></table></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div><?php if ($_smarty_tpl->tpl_vars['RELATIONS']->value['OutsourcedProducts']->isTreeRelation()) {?><div class="widgetContainer_productsCategory" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=OutsourcedProducts&mode=showRelatedTree"data-name="LBL_RELATED_OP"><div class="c-detail-widget__content"><table class="table mb-0 mt-1 border-0"><thead><tr><th class="py-0 border-0"><h6 class="py-1 my-0"><?php echo \App\Language::translate('LBL_CATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></th></tr></thead></table></div><div class="c-detail-widget__header js-detail-widget-header form-row" data-js="container|value"><input type="hidden" name="relatedModule" value="OutsourcedProducts" /></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div><?php }?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['RELATIONS']->value['Assets']))) {
$_smarty_tpl->_assignInScope('REL_RELATION', $_smarty_tpl->tpl_vars['RELATIONS']->value['Assets']);
$_smarty_tpl->_assignInScope('CREATE_RECORD_URL', $_smarty_tpl->tpl_vars['REL_RELATION']->value->getCreateViewUrl());?><div class="c-detail-widget js-detail-widget" data-js="container"><div class="widgetContainer_assets2" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=Assets&mode=showRelatedRecords&page=1&limit=<?php echo $_smarty_tpl->tpl_vars['LIMIT']->value;?>
"data-name="LBL_RELATED_ASSETS"><div class="c-detail-widget__header js-detail-widget-header" data-js="container|value"><div class="form-row align-items-center py-1"><input type="hidden" name="relatedModule" value="Assets" /><div class="col-10 col-sm-10 col-md-9 margin0px"><h5 class="mb-0"><?php echo \App\Language::translate('LBL_RELATED_ASSETS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="col-1 col-md-3 summaryWidgetIcon"><?php ob_start();
echo \App\Privilege::isPermitted('Assets','CreateView');
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?><span class="float-right"><button class="btn btn-light <?php if (false !== strpos($_smarty_tpl->tpl_vars['CREATE_RECORD_URL']->value,'view=QuickCreateAjax')) {?>createRecordFromFilter<?php } else { ?>createInventoryRecordFromFilter<?php }?>" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['CREATE_RECORD_URL']->value;?>
"><span class="fas fa-plus-circle" title="<?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></span><?php }?></div></div><hr class="widgetHr"></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div></div><?php }
if ((isset($_smarty_tpl->tpl_vars['RELATIONS']->value['Services']))) {?><div class="c-detail-widget js-detail-widget" data-js="container"><div class="widgetContainer_service hideActionImages" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=Services&mode=showRelatedRecords&page=1&limit=<?php echo $_smarty_tpl->tpl_vars['LIMIT']->value;?>
"data-name="LBL_RELATED_SERVICES"><div class="c-detail-widget__header js-detail-widget-header" data-js="container|value"><div class="form-row align-items-center py-1"><input type="hidden" name="relatedModule" value="Services" /><div class="col-10 col-sm-10 col-md-9 margin0px"><h5 class="mb-0"><?php echo \App\Language::translate('Interested services',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="col-1 col-md-3 summaryWidgetIcon"><span class="float-right"><?php if (!$_smarty_tpl->tpl_vars['RELATIONS']->value['Services']->isTreeRelation()) {
$_smarty_tpl->_assignInScope('VIEW', 'RecordsList');
} else {
$_smarty_tpl->_assignInScope('VIEW', 'TreeCategoryModal');
}?><button class="btn btn-light <?php if (!$_smarty_tpl->tpl_vars['RELATIONS']->value['Services']->isTreeRelation()) {?>js-widget-products-services<?php } else { ?>showModal<?php }?>" type="button" data-modalid="ServicesModal"data-url="index.php?module=Services&view=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
&src_module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&src_record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&multi_select=true"><span class="fas fa-search-plus" title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></span></div></div><hr class="widgetHr"></div><div class="c-detail-widget__content"><table class="table mb-0 mt-1 border-0"><thead><tr><th class="py-0 border-0"><h6 class="py-1 my-0"><?php echo \App\Language::translate('Services',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></th></tr></thead></table></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div><?php if ($_smarty_tpl->tpl_vars['RELATIONS']->value['Services']->isTreeRelation()) {?><div class="widgetContainer_productsCategory" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=Services&mode=showRelatedTree"data-name="LBL_RELATED_SERVICES"><div class="c-detail-widget__content"><table class="table mb-0 mt-1 border-0"><thead><tr><th class="py-0 border-0"><h6 class="py-1 my-0"><?php echo \App\Language::translate('LBL_CATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></th></tr></thead></table></div><div class="c-detail-widget__header js-detail-widget-header form-row" data-js="container|value"><input type="hidden" name="relatedModule" value="Services" /></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div><?php }?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['RELATIONS']->value['OSSOutsourcedServices']))) {?><div class="c-detail-widget js-detail-widget" data-js="container"><div class="widgetContainer_service" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=OSSOutsourcedServices&mode=showRelatedRecords&page=1&limit=<?php echo $_smarty_tpl->tpl_vars['LIMIT']->value;?>
"data-name="LBL_RELATED_OSSOS"><div class="c-detail-widget__header js-detail-widget-header" data-js="container|value"><div class="form-row align-items-center py-1"><input type="hidden" name="relatedModule" value="OSSOutsourcedServices" /><div class="col-10 col-sm-10 col-md-9 margin0px"><h5 class="mb-0"><?php echo \App\Language::translate('LBL_RELATED_OSSOS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="col-1 col-md-3 summaryWidgetIcon"><div class="float-right"><?php if (!$_smarty_tpl->tpl_vars['RELATIONS']->value['OSSOutsourcedServices']->isTreeRelation()) {
$_smarty_tpl->_assignInScope('VIEW', 'RecordsList');
} else {
$_smarty_tpl->_assignInScope('VIEW', 'TreeCategoryModal');
}?><button class="btn btn-light <?php if (!$_smarty_tpl->tpl_vars['RELATIONS']->value['OSSOutsourcedServices']->isTreeRelation()) {?>js-widget-products-services<?php } else { ?>showModal<?php }?>" type="button"data-modalid="OSSOutsourcedServicesModal"data-module="OSSOutsourcedServices"data-url="index.php?module=OSSOutsourcedServices&view=<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
&src_module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&src_record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&multi_select=true"><span class="fas fa-search-plus" title="<?php echo \App\Language::translate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></div></div></div><hr class="widgetHr"></div><div class="c-detail-widget__content"><table class="table mb-0 mt-1 border-0"><thead><tr><th class="py-0 border-0"><h6 class="py-1 my-0"><?php echo \App\Language::translate('Services',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></th></tr></thead></table></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div><?php if ($_smarty_tpl->tpl_vars['RELATIONS']->value['OSSOutsourcedServices']->isTreeRelation()) {?><div class="widgetContainer_productsCategory" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=OSSOutsourcedServices&mode=showRelatedTree"data-name="LBL_RELATED_OSSOS"><div class="c-detail-widget__content"><table class="table mb-0 mt-1 border-0"><thead><tr><th class="py-0 border-0"><h6 class="py-1 my-0"><?php echo \App\Language::translate('LBL_CATEGORIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h6></th></tr></thead></table></div><div class="c-detail-widget__header js-detail-widget-header form-row" data-js="container|value"><input type="hidden" name="relatedModule" value="OSSOutsourcedServices" /></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div><?php }?></div><?php }
if ((isset($_smarty_tpl->tpl_vars['RELATIONS']->value['OSSSoldServices']))) {
$_smarty_tpl->_assignInScope('REL_RELATION', $_smarty_tpl->tpl_vars['RELATIONS']->value['OSSSoldServices']);
$_smarty_tpl->_assignInScope('CREATE_RECORD_URL', $_smarty_tpl->tpl_vars['REL_RELATION']->value->getCreateViewUrl());?><div class="c-detail-widget js-detail-widget" data-js="container"><div class="widgetContainer_service" data-url="module=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relatedModule=OSSSoldServices&mode=showRelatedRecords&page=1&limit=<?php echo $_smarty_tpl->tpl_vars['LIMIT']->value;?>
"data-name="LBL_RELATED_OSSSS"><div class="c-detail-widget__header js-detail-widget-header" data-js="container|value"><div class="form-row align-items-center py-1"><input type="hidden" name="relatedModule" value="OSSSoldServices" /><div class="col-10 col-sm-10 col-md-9"><h5 class="mb-0"><?php echo \App\Language::translate('LBL_RELATED_OSSSS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div><div class="col-1 col-md-3 summaryWidgetIcon"><?php ob_start();
echo \App\Privilege::isPermitted('OSSSoldServices','CreateView');
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?><span class="float-right"><button class="btn btn-light <?php if (false !== strpos($_smarty_tpl->tpl_vars['CREATE_RECORD_URL']->value,'view=QuickCreateAjax')) {?>createRecordFromFilter<?php } else { ?>createInventoryRecordFromFilter<?php }?>" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['CREATE_RECORD_URL']->value;?>
"><span class="fas fa-plus-circle" title="<?php echo \App\Language::translate('LBL_ADD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></button></span><?php }?></div></div><hr class="widgetHr"></div><div class="c-detail-widget__content js-detail-widget-content" data-js="container|value"></div></div></div><?php }?></div>
<?php }
}
