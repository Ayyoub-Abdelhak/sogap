<?php
/* Smarty version 4.2.0, created on 2023-12-18 15:14:41
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\LangManagement\LangList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658053d1ca9bb6_91146332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea2fbed573e3ca5f9b28acf2b670ab7d75fe30ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\LangManagement\\LangList.tpl',
      1 => 1702905758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658053d1ca9bb6_91146332 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-LangManagement-LangList"><div class="btn-toolbar" role="toolbar"><?php if (\App\Security\AdminAccess::isPermitted('ModuleManager') && \App\Config::main('systemMode') !== 'demo') {?><div class="btn-group mr-2" role="group"><a class="btn btn-primary btn-sm float-right marginBottom10px" href="<?php echo Settings_ModuleManager_Module_Model::getUserModuleImportUrl();?>
"><span class="fas fa-file-import u-mr-5px"></span><?php echo \App\Language::translate('LBL_IMPORT_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><?php }?><div class="btn-group mr-2" role="group"><button class="btn btn-info add_lang btn-sm float-right marginBottom10px"><span class="fa fa-plus u-mr-5px"></span><?php echo \App\Language::translate('LBL_ADD_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><?php if ($_smarty_tpl->tpl_vars['IS_NET_CONNECTED']->value) {?><div class="btn-group mr-2" role="group"><button class="btn btn-success btn-sm u-h-fit mr-1 js-add-languages-modal" type="button" data-js="click"><span class="fas fas fa-download mr-1"></span><?php echo \App\Language::translate('LBL_DOWNLOAD_LANG','Settings::YetiForce');?>
</button></div><?php }?></div><table class="table tableRWD table-bordered table-sm listViewEntriesTable"><thead><tr class="blockHeader"><th><strong><?php echo \App\Language::translate('LBL_Lang_name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_Lang_prefix',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_LAST_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th><strong><?php echo \App\Language::translate('LBL_Lang_action',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, App\Language::getAll(false,true), 'LANG', false, 'ID');
$_smarty_tpl->tpl_vars['LANG']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['LANG']->value) {
$_smarty_tpl->tpl_vars['LANG']->do_else = false;
?><tr data-prefix="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LANG']->value['prefix']);?>
"data-is-default="<?php if ($_smarty_tpl->tpl_vars['LANG']->value['prefix'] === \App\Language::DEFAULT_LANG) {?>true<?php } else { ?>false<?php }?>"><td><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LANG']->value['name']);?>
</td><td><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LANG']->value['prefix']);?>
</td><td><?php echo \App\Fields\DateTime::formatToViewDate($_smarty_tpl->tpl_vars['LANG']->value['lastupdated']);?>
</td><td><a href="index.php?module=LangManagement&parent=Settings&action=Export&lang=<?php echo $_smarty_tpl->tpl_vars['LANG']->value['prefix'];?>
"class="btn btn-primary btn-sm mr-2"><span class="fas fa-file-export fa-xs mr-2"></span><?php echo \App\Language::translate('Export',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php if ($_smarty_tpl->tpl_vars['LANG']->value['isdefault'] != '1') {?><button class="btn btn-success btn-sm mr-2" data-toggle="confirmation" id="setAsDefault"><span class="fas fa-check fa-xs mr-2"></span><?php echo \App\Language::translate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php if ($_smarty_tpl->tpl_vars['LANG']->value['prefix'] !== \App\Language::DEFAULT_LANG) {?><button class="btn btn-danger btn-sm mr-2" data-toggle="confirmation" data-original-title="" id="deleteItemC"><span class="fas fa-trash fa-xs mr-2"></span><?php echo \App\Language::translate('LBL_Delete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }
}
if ($_smarty_tpl->tpl_vars['IS_NET_CONNECTED']->value) {?><button class="js-update btn btn-outline-primary btn-sm" data-prefix="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['LANG']->value['prefix']);?>
"data-js="click | data | class: fa-spin"><span class="js-update__icon fas fa-sync fa-xs mr-2"></span><?php echo \App\Language::translate('LBL_UPDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div>
<?php }
}
