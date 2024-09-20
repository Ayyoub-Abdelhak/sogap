<?php
/* Smarty version 4.2.0, created on 2024-01-16 11:19:22
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\DetailViewMap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65a6582a2a1835_03863229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92415609f054029d0a95fb9c03e400db479f98c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\DetailViewMap.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a6582a2a1835_03863229 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-DetailViewMap --><input type="hidden" id="coordinates" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['COORRDINATES']->value));?>
"><input type="hidden" class="js-tile-layer-server" value="<?php echo \App\Map\Layer::getTileServer();?>
" data-js="val"><div id="mapid" class="u-min-h-85vh"></div><!-- /tpl-Base-DetailViewMap -->
<?php }
}
