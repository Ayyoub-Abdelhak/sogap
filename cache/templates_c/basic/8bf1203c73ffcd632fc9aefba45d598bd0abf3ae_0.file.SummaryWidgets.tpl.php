<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:28
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\SummaryWidgets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819158258fb8_16202272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bf1203c73ffcd632fc9aefba45d598bd0abf3ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\SummaryWidgets.tpl',
      1 => 1702905742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819158258fb8_16202272 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-SummaryWidgets js-list__form" data-js="container"><input type="hidden" name="page" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('page');?>
"/><input type="hidden" name="pageLimit" value="<?php echo $_smarty_tpl->tpl_vars['LIMIT']->value;?>
"/><input type="hidden" name="col" value="<?php echo $_smarty_tpl->tpl_vars['COLUMNS']->value;?>
"/><input type="hidden" name="relatedModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"/><input type="hidden" name="relatedModuleName" class="relatedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"/><input type="hidden" id="relationId" value="<?php echo $_smarty_tpl->tpl_vars['RELATION_ID']->value;?>
"/><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value && $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath("SummaryWidgetsContent.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RELATED_RECORDS'=>$_smarty_tpl->tpl_vars['RELATED_RECORDS']->value), 0, true);
} elseif ($_smarty_tpl->tpl_vars['PAGING_MODEL']->value->get('nrt') == 1) {?><div class="summaryWidgetContainer"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RELATED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</p></div><?php }
if ($_smarty_tpl->tpl_vars['NO_RESULT_TEXT']->value && $_smarty_tpl->tpl_vars['RELATED_ENTIRES_COUNT']->value == 0) {?><div class="summaryWidgetContainer js-no-comments-msg-container p-md-2 p-1"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RECORDS_FOUND',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }
if ($_smarty_tpl->tpl_vars['LIMIT']->value != 0 && $_smarty_tpl->tpl_vars['RELATED_ENTIRES_COUNT']->value >= $_smarty_tpl->tpl_vars['LIMIT']->value) {?><div class="d-flex py-1"><div class="ml-auto"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {?><button type="button" class="btn btn-primary btn-sm moreRecentRecords" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATION_ID']->value;?>
"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php } elseif (!empty($_smarty_tpl->tpl_vars['PARENT_RECORD']->value)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value->getDetailViewUrl();?>
" class="btn btn-primary btn-xs moreRecentRecords" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"><?php echo \App\Language::translate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php }?></div></div><?php }?></div>
<?php }
}
