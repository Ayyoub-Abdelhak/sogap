<?php
/* Smarty version 4.2.0, created on 2023-12-25 17:08:56
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6589a9188c9ce5_13190031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52db1356a5a38a993dd8a03f26466cade93cd39c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Comments.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6589a9188c9ce5_13190031 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-Comments --><ul class="Comments px-0 mb-0"><?php if ($_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value) {
$_smarty_tpl->_assignInScope('CHILDS_ROOT_PARENT_MODEL', $_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value);
$_smarty_tpl->_assignInScope('CURRENT_COMMENT_PARENT_MODEL', $_smarty_tpl->tpl_vars['CURRENT_COMMENT']->value->getParentCommentModel());
while ($_smarty_tpl->tpl_vars['CURRENT_COMMENT_PARENT_MODEL']->value != false) {
$_smarty_tpl->_assignInScope('TEMP_COMMENT', $_smarty_tpl->tpl_vars['CURRENT_COMMENT_PARENT_MODEL']->value);
$_smarty_tpl->_assignInScope('CURRENT_COMMENT_PARENT_MODEL', $_smarty_tpl->tpl_vars['CURRENT_COMMENT_PARENT_MODEL']->value->getParentCommentModel());
if ($_smarty_tpl->tpl_vars['CURRENT_COMMENT_PARENT_MODEL']->value == false) {
$_smarty_tpl->_assignInScope('CHILDS_ROOT_PARENT_MODEL', $_smarty_tpl->tpl_vars['TEMP_COMMENT']->value);
}
}
}
if (!empty($_smarty_tpl->tpl_vars['SHOW_CHILD_COMMENTS']->value) && !empty($_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value)) {?><li class="js-comment-details commentDetails" data-js="container|append"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comment.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('COMMENT'=>$_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value,'COMMENT_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value), 0, true);
if (!empty($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value)) {
if ($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getId() == $_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value->getId()) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('CommentsListIteration.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('CHILD_COMMENTS_MODEL'=>$_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getChildComments()), 0, true);
}
}?></li><?php } else {
if (is_array($_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value, 'COMMENT', false, 'Index');
$_smarty_tpl->tpl_vars['COMMENT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Index']->value => $_smarty_tpl->tpl_vars['COMMENT']->value) {
$_smarty_tpl->tpl_vars['COMMENT']->do_else = false;
?><li class="js-comment-details commentDetails" data-js="container|append"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comment.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('COMMENT'=>$_smarty_tpl->tpl_vars['COMMENT']->value,'COMMENT_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value,'PARENT_COMMENT_ID'=>$_smarty_tpl->tpl_vars['COMMENT']->value->getId()), 0, true);
?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Comment.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('COMMENT'=>$_smarty_tpl->tpl_vars['PARENT_COMMENTS']->value), 0, true);
}
}?></ul><!-- /tpl-Base-Comments -->
<?php }
}
