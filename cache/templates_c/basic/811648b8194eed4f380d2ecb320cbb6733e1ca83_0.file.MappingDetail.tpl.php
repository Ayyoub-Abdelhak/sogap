<?php
/* Smarty version 4.2.0, created on 2024-03-18 13:46:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Leads\MappingDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f845a7d5ac85_97572494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811648b8194eed4f380d2ecb320cbb6733e1ca83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Leads\\MappingDetail.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f845a7d5ac85_97572494 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tpl-Settings-Leads-MappingDetail row align-items-center widget_header"><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="col-md-4 btn-toolbar ml-0 justify-content-end"><div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewLinks(), 'LINK_MODEL');
$_smarty_tpl->tpl_vars['LINK_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LINK_MODEL']->value) {
$_smarty_tpl->tpl_vars['LINK_MODEL']->do_else = false;
?><button type="button" class="btn btn-info" onclick=<?php echo $_smarty_tpl->tpl_vars['LINK_MODEL']->value->getUrl();?>
><strong><span class="yfi yfi-full-editing-view u-mr-5px"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LINK_MODEL']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><div class='clearfix'></div><div class=" contents" id="detailView"><table class="table customTableRWD table-bordered my-2" id="convertLeadMapping"><thead><tr class="blockHeader"><th class="blockHeader"><?php echo \App\Language::translate('LBL_FIELD_LABEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th class="blockHeader"><?php echo \App\Language::translate('LBL_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th data-hide='phone' class="blockHeader"><?php echo \App\Language::translate('LBL_MAPPING_WITH_OTHER_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead></table><table class="table customTableRWD table-bordered" id="convertLeadMapping"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getHeaders(), 'LABEL', false, 'key', 'index', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->tpl_vars['LABEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['iteration']++;
?><th <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_index']->value['iteration'] : null) > 2) {?>data-hide='phone' <?php }?>><b><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['LABEL']->value);?>
</b></th><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getMapping(), 'MAPPING', false, 'MAPPING_ID');
$_smarty_tpl->tpl_vars['MAPPING']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MAPPING_ID']->value => $_smarty_tpl->tpl_vars['MAPPING']->value) {
$_smarty_tpl->tpl_vars['MAPPING']->do_else = false;
?><tr class="listViewEntries" data-cfmid="<?php echo $_smarty_tpl->tpl_vars['MAPPING_ID']->value;?>
"><td><?php ob_start();
echo $_smarty_tpl->tpl_vars['MAPPING']->value['Leads']['label'];
$_prefixVariable1 = ob_get_clean();
echo \App\Language::translate($_prefixVariable1,'Leads');?>
</td><td><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MAPPING']->value['Leads']['fieldDataType'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td><td><?php if ((isset($_smarty_tpl->tpl_vars['MAPPING']->value['Accounts']['label']))) {
echo \App\Language::translate($_smarty_tpl->tpl_vars['MAPPING']->value['Accounts']['label'],'Accounts');
}?></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div>
<?php }
}
