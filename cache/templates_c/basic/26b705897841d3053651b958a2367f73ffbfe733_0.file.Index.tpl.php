<?php
/* Smarty version 4.2.0, created on 2023-12-28 22:16:49
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Backup\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_658de5c1e5cee1_40400628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b705897841d3053651b958a2367f73ffbfe733' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Backup\\Index.tpl',
      1 => 1702905756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658de5c1e5cee1_40400628 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Backup-Index"><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="contents mt-2"><div class="listViewContentDiv ps ps--active-y"><?php if (!empty($_smarty_tpl->tpl_vars['CONFIG_ALERT']->value)) {?><div class="alert alert-block alert-danger fade in show"><button type="button" class="close" data-dismiss="alert">×</button><h4 class="alert-heading"><?php echo \App\Language::translate('ERR_CONFIG_ALERT_TITLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><p><?php echo $_smarty_tpl->tpl_vars['CONFIG_ALERT']->value;?>
</p></div><?php } else { ?><h5><?php echo \App\Language::translate('LBL_BACKUP_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><table class="table tableBorderHeadBody listViewEntriesTable medium"><?php if (!empty($_smarty_tpl->tpl_vars['STRUCTURE']->value['manage'])) {?><tr class="listViewEntries"><td class="border bc-gray-lighter"><a href="<?php echo $_smarty_tpl->tpl_vars['STRUCTURE']->value['manage'];?>
"><i class="fas fa-level-up-alt"></i> [..]</a></td></tr><?php }
if ((isset($_smarty_tpl->tpl_vars['STRUCTURE']->value['catalogs']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value['catalogs'], 'catalog');
$_smarty_tpl->tpl_vars['catalog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catalog']->value) {
$_smarty_tpl->tpl_vars['catalog']->do_else = false;
?><tr class="listViewEntries<?php if (empty($_smarty_tpl->tpl_vars['catalog']->value['url'])) {?> u-opacity-muted<?php }?>"><td><?php if (empty($_smarty_tpl->tpl_vars['catalog']->value['url'])) {?><span class="fas fa-folder mr-1"></span><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['catalog']->value['name']);
} else { ?><a href="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['catalog']->value['url']);?>
" class="font-weight-bold"><span class="fas fa-folder"></span> <?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['catalog']->value['name']);?>
</a><?php }?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></table><table class="table table-striped table-bordered js-data-table dataTable" data-j="DataTable"><thead><tr class="c-tab--border-active listViewHeaders"><th class="p-2"><?php echo \App\Language::translate('LBL_FILE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="p-2"><?php echo \App\Language::translate('LBL_FILE_DATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="p-2"><?php echo \App\Language::translate('LBL_FILE_SIZE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="noWrap p-2"><?php echo \App\Language::translate('LBL_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><?php if (!empty($_smarty_tpl->tpl_vars['STRUCTURE']->value['files'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['STRUCTURE']->value['files'], 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?><tr class="listViewEntries"><td><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['file']->value['name']);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['file']->value['date'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['file']->value['size'];?>
</td><td class="u-w-1em"><a href="<?php echo $_smarty_tpl->tpl_vars['file']->value['url'];?>
" class="btn btn-primary btn-sm js-post-action"><span class="fas fa-download mr-1"></span> <?php echo \App\Language::translate('LBL_DOWNLOAD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></table><?php if (empty($_smarty_tpl->tpl_vars['STRUCTURE']->value['files'])) {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_NO_RECORDS_FOUND');?>
</td></tr></tbody></table><?php }
}?></div></div></div>
<?php }
}
