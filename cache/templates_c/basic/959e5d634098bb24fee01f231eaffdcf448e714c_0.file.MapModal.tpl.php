<?php
/* Smarty version 4.2.0, created on 2024-01-16 11:46:51
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\OpenStreetMap\MapModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a65e9b9d7207_71673089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959e5d634098bb24fee01f231eaffdcf448e714c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\OpenStreetMap\\MapModal.tpl',
      1 => 1702905766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a65e9b9d7207_71673089 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-OpenStreet-MapModal --><div class="modal-body row pt-2 openStreetMapModalBody"><input type="hidden" class="js-tile-layer-server" value="<?php echo \App\Map\Layer::getTileServer();?>
" data-js="val"><div class="col-lg-9 pr-0"><div id="mapid"></div></div><div class="col-lg-3"><div class="js-toggle-panel c-panel" data-js="click"><div class="card-header blockHeader p-2 font-weight-bold"><span class="fas fa-search mr-2"></span><?php echo \App\Language::translate('LBL_SEARCH_COMPANY_INPUT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<div class="js-popover-tooltip u-cursor-pointer ml-2" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_SEARCH_COMPANY_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
"><span class="fas fa-info-circle"></span></div><div class="ml-auto"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right d-none" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show"></span></div></div><div class="card-body blockContent input-group p-2"><input type="text" class="form-control js-search-company" placeholder="<?php echo \App\Language::translate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" /><div class="input-group-btn"><select class="select2 searchModule col-6"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALLOWED_MODULES']->value, 'ALLOWED_MODULE_NAME');
$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div><div class="js-toggle-panel c-panel" data-js="click"><div class="card-header blockHeader p-2 font-weight-bold"><span class="fas fa-palette mr-2"></span><?php echo \App\Language::translate('LBL_GROUP_POINTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<div class="js-popover-tooltip u-cursor-pointer ml-2" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_GROUP_POINTS_DESC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
"><span class="fas fa-info-circle"></span></div><div class="ml-auto"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right d-none" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show"></span></div></div><div class="card-body blockContent input-group p-2"><div class="input-group-prepend col p-0"><select class="select2 form-control fieldsToGroup"><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SRC_MODULE']->value,$_smarty_tpl->tpl_vars['SRC_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS_TO_GROUP']->value, 'FIELD_MODEL');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SRC_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></optgroup></select></div><div class="input-group-append"><span class="input-group-text"><input class="js-popover-tooltip groupNeighbours" data-js="popover" type="checkbox" checked="checked" data-content="<?php echo \App\Language::translate('LBL_GROUP_NEIGHBOURS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="groupNeighbours" /></span><button class="btn btn-primary groupBy"><?php echo \App\Language::translate('LBL_GROUP_BY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></div></div><div class="js-toggle-panel c-panel" data-js="click"><div class="card-header blockHeader p-2 font-weight-bold"><span class="fas fa-route mr-2"></span><?php echo \App\Language::translate('LBL_CALCULATE_ROUTE_HEADER_BLOCK',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<div class="ml-auto"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right d-none" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show"></span></div></div><div class="card-body blockContent track p-2"><div class="input-group group-btn input-group-sm form-group mb-2 startContainer"><input type="text" readonly="readonly" class="form-control start" /><div class="input-group-btn"><button class="btn btn-success btn-sm setView"><span class="fas fa-truck"></span></button></div></div><div class="input-group group-btn input-group-sm form-group mb-2 indirectContainer indirectTemplate d-none"><input type="text" readonly="readonly" class="form-control indirect " /><div class="input-group-btn"><button class="btn btn-warning btn-sm setView"><span class="fas fa-flag"></span></button><button class="btn btn-success btn-sm moveUp"><span class="fas fa-upload"></span></button><button class="btn btn-success  btn-sm moveDown"><span class="fas fa-download"></span></button><button class="btn btn-danger btn-sm removeIndirect"><span class="fas fa-times"></span></button></div></div><div class="input-group group-btn input-group-sm form-group mb-0"><input type="text" readonly="readonly" class="form-control end" /><div class="input-group-btn"><button class="btn btn-danger btn-sm setView"><span class="fas fa-flag-checkered"></span></button></div></div><div class="float-right mt-2 d-none"><button class="btn btn-primary btn-sm js-calculate-route"><span class="fas fa-road mr-2"></span><?php echo \App\Language::translate('LBL_CALCULATE_TRACK',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></div></div><div class="js-toggle-panel c-panel d-none  js-description-container" data-js="click"><div class="card-header blockHeader p-2 font-weight-bold"><span class="fas fa-route mr-2"></span><?php echo \App\Language::translate('LBL_ROUTE_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<div class="ml-auto"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right d-none" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show"></span></div></div><div class="card-body blockContent descriptionContainer p-2"><b><?php echo \App\Language::translate('LBL_DISTANCE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:&nbsp;</b><span class="distance"></span><br /><b><?php echo \App\Language::translate('LBL_TRAVEL_TIME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:&nbsp;</b><span class="travelTime"></span><br /><b class="js-instruction_block"><?php echo \App\Language::translate('LBL_INSTRUCTION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:&nbsp;</b><br /><span class="js-instruction_body"></span></div></div><div class="js-toggle-panel c-panel" data-js="click"><div class="card-header blockHeader p-2 font-weight-bold"><span class="fas fa-download mr-2"></span><?php echo \App\Language::translate('LBL_CLIPBOARD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<div class="js-popover-tooltip u-cursor-pointer ml-2" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_CLIPBOARD_DESC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
"><span class="fas fa-info-circle"></span></div><div class="ml-auto"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right d-none" data-js="click" alt="<?php echo \App\Language::translate('LBL_EXPAND_BLOCK');?>
" data-mode="hide"></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down" data-js="click" alt="<?php echo \App\Language::translate('LBL_COLLAPSE_BLOCK');?>
" data-mode="show"></span></div></div><div class="card-body blockContent cacheContent p-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALLOWED_MODULES']->value, 'ALLOWED_MODULE_NAME');
$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value) {
$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->do_else = false;
?><div class="cacheModuleContainer row mb-1"><div class="col-8"><label><input type="checkbox" class="showRecordsFromCache mr-2" data-module="<?php echo $_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value;?>
" /><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value);?>
<span class="badge badge-info badge-pill ml-2 countRecords<?php echo $_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value;?>
"><?php if (!empty($_smarty_tpl->tpl_vars['CACHE_GROUP_RECORDS']->value[$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value])) {
echo $_smarty_tpl->tpl_vars['CACHE_GROUP_RECORDS']->value[$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value];
}?></span></label></div><div class="col-4"><button class="btn btn-sm btn-success addAllRecords js-popover-tooltip float-right ml-2" data-module="<?php echo $_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value;?>
" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate('BTN_LOAD_ALL_CLIPBOARD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
"><span class="fas fa-download"></span></button><button class="btn btn-sm btn-danger js-delete-clip-board js-popover-tooltip float-right <?php if (empty($_smarty_tpl->tpl_vars['CACHE_GROUP_RECORDS']->value[$_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value])) {?>d-none<?php }?>" data-module="<?php echo $_smarty_tpl->tpl_vars['ALLOWED_MODULE_NAME']->value;?>
" data-content="<?php echo \App\Purifier::encodeHtml(App\Language::translate('BTN_DELETE_CLIPBOARD',$_smarty_tpl->tpl_vars['MODULE_NAME']->value));?>
"><span class="fas fa-trash-alt"></span></button></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><button class="btn btn-success btn-sm copyToClipboard float-right"><span class="fas fa-paste"></span>&nbsp;<?php echo \App\Language::translate('BTN_COPY_TO_CLIPBOARD');?>
</button></div></div></div><div class="js-legend-container" data-js="html"></div></div><!-- /tpl-OpenStreet-MapModal -->
<?php }
}
