<?php
/* Smarty version 4.2.0, created on 2023-12-22 15:25:01
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\Modals\TreeModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65859c3d0aafd8_18204046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7c25f8818a49aa173f2319b8391ce4ccc881e4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\Modals\\TreeModal.tpl',
      1 => 1702905750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65859c3d0aafd8_18204046 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Modals-TreeModal modal-body js-modal-body" id="treePopupContainer" data-js="container"><input type="hidden" class="js-multiple" value="<?php echo $_smarty_tpl->tpl_vars['IS_MULTIPLE']->value;?>
" data-js="value" /><input type="hidden" class="js-tree-value" value="<?php echo App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['TREE']->value);?>
" data-js="value" /><div class="js-tree-contents" data-js="container"></div></div>
<?php }
}
