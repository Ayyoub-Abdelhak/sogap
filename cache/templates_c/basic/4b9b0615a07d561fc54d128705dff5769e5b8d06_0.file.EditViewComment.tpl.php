<?php
/* Smarty version 4.2.0, created on 2023-12-22 19:03:19
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\inventoryfields\EditViewComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6585cf67160600_25115440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b9b0615a07d561fc54d128705dff5769e5b8d06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewComment.tpl',
      1 => 1702905747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6585cf67160600_25115440 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-inventoryfields-EditViewComment --><?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));?><label class="my-0 fieldLabel u-text-small-bold"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><textarea name="inventory[<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
]" title="<?php echo \App\Language::translate("LBL_ROW_COMMENT",$_smarty_tpl->tpl_vars['MODULE']->value);?>
"id="editView_comment<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();
echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(array('mandatory'=>false)));?>
"data-height="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getHeight();?>
px" data-width="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getWidth();?>
%" data-emoji-enabled="true" data-mentions-enabled="true"class="comment js-inventory-item-comment form-control js-editor js-editor--basic" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isReadOnly()) {?>readonly="readonly" <?php }?> data-purify-mode="Html" data-js="ckeditor"><?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
</textarea><!-- tpl-Base-inventoryfields-EditViewComment -->
<?php }
}
