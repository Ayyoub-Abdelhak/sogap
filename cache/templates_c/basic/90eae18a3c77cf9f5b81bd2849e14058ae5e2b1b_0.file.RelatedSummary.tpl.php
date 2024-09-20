<?php
/* Smarty version 4.2.0, created on 2024-05-06 12:09:40
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\OSSTimeControl\RelatedSummary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6638ba74bfddb9_71617083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90eae18a3c77cf9f5b81bd2849e14058ae5e2b1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\OSSTimeControl\\RelatedSummary.tpl',
      1 => 1702905754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6638ba74bfddb9_71617083 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sumaryRelatedTimeControl"><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getPublicUrl('libraries/chart.js/dist/Chart.js');?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getPublicUrl('libraries/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.js');?>
"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getLayoutFile('modules/OSSTimeControl/resources/InRelation.js');?>
"><?php echo '</script'; ?>
><?php if (count($_smarty_tpl->tpl_vars['RELATED_SUMMARY']->value['userTime']['datasets'][0]['data']) > 0) {?><div class="row"><div class="col-md-12"><button class="btn btn-sm btn-default float-left mr-2 switchChartContainer" type="button"><span class="fa fa-chevron-up"></span></button><h5><?php echo \App\Language::translate('LBL_SUM_OF_WORKING_TIME_DIVIDED_INTO_USERS',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
:</h5></div></div><div class="row chartContainer"><div class="col-md-12"><input class="widgetData" type="hidden" value='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['RELATED_SUMMARY']->value['userTime']));?>
' /><div class="chartBlock chart-container" style="position: relative; height:200px; width:100%"><canvas id="related-summary-chart-canvas"></canvas></div></div></div><hr /><?php }?></div>
<?php }
}
