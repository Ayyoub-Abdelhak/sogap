<?php
/* Smarty version 4.2.0, created on 2023-12-27 17:48:58
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LayoutEditor\HelpInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658c557aab2209_91767073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaf0220fb81546c239c78888e6fad38af54913a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LayoutEditor\\HelpInfo.tpl',
      1 => 1702905762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658c557aab2209_91767073 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Settings-LayoutEditor-HelpInfo --><form><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
" name="field"><div class="modal-body"><div class="form-group"><label for="view-type"><?php echo \App\Language::translate('LBL_SHOW_IN_VIEWS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><select class="form-control select2" multiple name="views"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HELP_INFO_VIEWS']->value, 'VIEW_NAME', false, 'VIEW_LABEL');
$_smarty_tpl->tpl_vars['VIEW_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['VIEW_LABEL']->value => $_smarty_tpl->tpl_vars['VIEW_NAME']->value) {
$_smarty_tpl->tpl_vars['VIEW_NAME']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['VIEW_NAME']->value;?>
" <?php if (strpos($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpinfo'),$_smarty_tpl->tpl_vars['VIEW_NAME']->value) !== false) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['VIEW_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><hr><?php $_smarty_tpl->_assignInScope('CONTEXT_HELP', (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()).('|')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel()));
$_smarty_tpl->_assignInScope('TRANSLATE', \App\Language::translate($_smarty_tpl->tpl_vars['CONTEXT_HELP']->value,'Other:HelpInfo',$_smarty_tpl->tpl_vars['LANG_DEFAULT']->value));
if ($_smarty_tpl->tpl_vars['TRANSLATE']->value == $_smarty_tpl->tpl_vars['CONTEXT_HELP']->value) {
$_smarty_tpl->_assignInScope('TRANSLATE', '');
}?><div class="form-group"><label for="lang"><?php echo \App\Language::translate('LBL_CHOOSE_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><a href="#" class="js-help-info float-right" data-toggle="popover" title="<?php echo App\Purifier::decodeHtml(\App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()));?>
" data-placement="top" data-content="<?php echo htmlspecialchars(App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['TRANSLATE']->value));?>
" data-original-title='<?php echo App\Purifier::decodeHtml(\App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()));?>
'><span class="fa fa-info-circle"></span></a><select class="form-control select2 js-lang" data-js="change" name="lang" id="lang"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'LABEL', false, 'PREFIX');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PREFIX']->value == $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'LABEL', false, 'PREFIX');
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
$_smarty_tpl->_assignInScope('TRANSLATE', \App\Language::translate($_smarty_tpl->tpl_vars['CONTEXT_HELP']->value,'Other:HelpInfo',$_smarty_tpl->tpl_vars['PREFIX']->value));?><div class="form-group js-context-block <?php if ($_smarty_tpl->tpl_vars['PREFIX']->value != $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {?> d-none <?php }?>"><textarea id="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
" name="context" <?php if ($_smarty_tpl->tpl_vars['PREFIX']->value != $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {?> disabled <?php }?> data-js="CkEditor" class="form-control js-editor js-context-area" data-purify-mode="Html"><?php if ($_smarty_tpl->tpl_vars['TRANSLATE']->value != $_smarty_tpl->tpl_vars['CONTEXT_HELP']->value) {
echo $_smarty_tpl->tpl_vars['TRANSLATE']->value;
}?></textarea></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><!-- /tpl-Settings-LayoutEditor-HelpInfo -->
<?php }
}
