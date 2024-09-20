<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:49:51
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\RecordPopover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6581916f2d3330_39508927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9efe0347f3cd4d8468b8b4fb3ca9ccae95417c4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\RecordPopover.tpl',
      1 => 1702905745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6581916f2d3330_39508927 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-RecordPopover --><div><h5 class="c-popover--link__header px-2 py-1 mb-0 bg-light"><?php $_smarty_tpl->_assignInScope('IMAGE', $_smarty_tpl->tpl_vars['RECORD']->value->getImage());
if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?><img class="rounded-circle u-max-w-40px" data-js="click" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
" src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value['url'];?>
"><?php } else { ?><span class="yfm-<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
 mr-1"></span><?php }?><span class="u-text-ellipsis--no-hover mr-2" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayName();?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayName();?>
</span><?php $_smarty_tpl->_assignInScope('RECORD_STATE', \App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()));
if ($_smarty_tpl->tpl_vars['RECORD_STATE']->value && $_smarty_tpl->tpl_vars['RECORD_STATE']->value !== 'Active') {
$_smarty_tpl->_assignInScope('COLOR', App\Config::search('LIST_ENTITY_STATE_COLOR'));?><span class="badge badge-secondary ml-1 mr-1 float-right" <?php if ($_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value]) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['COLOR']->value[$_smarty_tpl->tpl_vars['RECORD_STATE']->value];?>
;" <?php }?>><?php if (\App\Record::getState($_smarty_tpl->tpl_vars['RECORD']->value->getId()) === 'Trash') {?><span class="fas fa-trash-alt mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_TRASH');
} else { ?><span class="fas fa-archive mr-2"></span><?php echo \App\Language::translate('LBL_ENTITY_STATE_ARCHIVED');
}?></span><?php }
if ($_smarty_tpl->tpl_vars['HEADER_LINKS']->value) {?><div class="c-popover--link__header__buttons btn-group"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_LINKS']->value, 'LINK');
$_smarty_tpl->tpl_vars['LINK']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->tpl_vars['LINK']->do_else = false;
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'recordPopover'), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></h5><div class="c-popover--link__body px-2 pb-1"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
?><div class="u-white-space-nowrap u-text-ellipsis--no-hover"><?php $_smarty_tpl->_assignInScope('ICON', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getIcon('RecordPopover'));
if ((isset($_smarty_tpl->tpl_vars['ICON']->value['name']))) {?><span class="<?php echo $_smarty_tpl->tpl_vars['ICON']->value['name'];?>
 mr-1"></span><?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReferenceField() || (isset($_smarty_tpl->tpl_vars['FIELDS_ICON']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value]))) {?><span class="mr-1 <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isReferenceField()) {?>yfm-<?php echo \App\Record::getType($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value));
} else {
echo $_smarty_tpl->tpl_vars['FIELDS_ICON']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value];
}?>"></span><?php }?><label class="c-popover--link__label"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label>: <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><!-- /tpl-Base-RecordPopover -->
<?php }
}
