<?php
/* Smarty version 4.2.0, created on 2023-12-19 14:42:54
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RelatedTreeContent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65819dde126fc2_38930225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '706b448502beffb5f15400c6fca156687bb34433' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RelatedTreeContent.tpl',
      1 => 1702905743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65819dde126fc2_38930225 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['RELATED_RECORDS']->value) > 0) {?><div class="listViewEntriesDiv u-overflow-scroll-non-desktop contents-bottomscroll"><table class="table noStyle"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER');
$_smarty_tpl->tpl_vars['HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HEADER']->value) {
$_smarty_tpl->tpl_vars['HEADER']->do_else = false;
?><th nowrap class="p-1 text-center"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><th class="p-1 text-center"><?php echo \App\Language::translate('LBL_RELATION_CREATED_TIME',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><th class="p-1 text-center"><?php echo \App\Language::translate('LBL_RELATION_CREATED_USER',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><th class="p-1 text-center"><?php echo \App\Language::translate('LBL_RELATION_COMMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php }?></tr></thead><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RECORD');
$_smarty_tpl->tpl_vars['RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->tpl_vars['RECORD']->do_else = false;
?><tr class="listViewEntries"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER', false, 'NAME');
$_smarty_tpl->tpl_vars['HEADER']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['HEADER']->value) {
$_smarty_tpl->tpl_vars['HEADER']->do_else = false;
?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" nowrap><?php echo $_smarty_tpl->tpl_vars['RECORD']->value[$_smarty_tpl->tpl_vars['NAME']->value];?>
</td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_created_time" nowrap><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['rel_created_time'];?>
</td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_created_user" nowrap><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['rel_created_user'];?>
</td><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 text-center" data-field-type="rel_comment" nowrap><?php if (strlen($_smarty_tpl->tpl_vars['RECORD']->value['rel_comment']) > App\Config::relation('COMMENT_MAX_LENGTH')) {?><a class="js-popover-tooltip" data-js="popover" data-placement="top" data-content="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['rel_comment'];?>
"><?php echo App\TextUtils::textTruncate($_smarty_tpl->tpl_vars['RECORD']->value['rel_comment'],App\Config::relation('COMMENT_MAX_LENGTH'));?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['RECORD']->value['rel_comment'];
}?>&nbsp;&nbsp;<span class="actionImages"><a class="showModal" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=RelatedCommentModal&record=<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
&relid=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['id'];?>
&relmodule=<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
"><span class="yfi yfi-full-editing-view" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></a></span></td><?php }?></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table></div><?php } else { ?><div class="summaryWidgetContainer js-no-comments-msg-container"><p class="textAlignCenter"><?php echo \App\Language::translate('LBL_NO_RECORDS_FOUND',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }
}
}
