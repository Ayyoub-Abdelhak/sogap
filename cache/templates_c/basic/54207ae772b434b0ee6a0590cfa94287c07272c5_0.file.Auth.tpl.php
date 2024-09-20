<?php
/* Smarty version 4.2.0, created on 2024-03-14 11:48:15
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Users\Auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65f2e3ffb06589_30921689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54207ae772b434b0ee6a0590cfa94287c07272c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Users\\Auth.tpl',
      1 => 1702905755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f2e3ffb06589_30921689 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=" usersAuth"><div class="o-breadcrumb widget_header row"><div class="col-md-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="mt-2"><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#ldap"><strong><?php echo \App\Language::translate('LBL_LDAP_AUTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent py-3"><?php $_smarty_tpl->_assignInScope('CONFIG', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getConfig('ldap'));?><div class="tab-pane active" id="ldap"><div class="alert alert-info alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p><span class="fas fa-exclamation-circle"></span>&nbsp;&nbsp;<?php echo \App\Language::translate('LBL_LDAP_RECOMMENDED_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div><div class="clearfix"></div><div class="form-row"><div class="col-md-1 col-sm-1 col-2 pagination-centered"><input class="configField" type="checkbox" name="active" id="ldapActive" data-type="ldap" value="1" <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['active'] == 'true') {?>checked="" <?php }?>></div><div class="col-md-11 col-sm-11 col-10"><label class="u-text-small-bold" for="ldapActive"><?php echo \App\Language::translate('LBL_ACTIVE_LDAP_AUTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><hr /><div class="form-row pt-2"><div class="col-md-12 col-lg-3"><label class="u-text-small-bold" for="showMailIcon"><?php echo \App\Language::translate('LBL_LDAP_SERVER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-md-12 col-lg-8"><input class="configField form-control" title="<?php echo \App\Language::translate('LBL_LDAP_SERVER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="text" name="server" data-type="ldap" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['server'];?>
"></div></div><div class="form-row pt-3"><div class="col-md-12 col-lg-3"><label class="u-text-small-bold" for="showMailIcon"><?php echo \App\Language::translate('LBL_LDAP_DOMAIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-md-12 col-lg-8"><div class="input-group"><input class="configField form-control" title="<?php echo \App\Language::translate('LBL_LDAP_DOMAIN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="text" name="domain" data-type="ldap" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['domain'];?>
"><span class="input-group-append js-popover-tooltip" data-js="popover" data-content="@testlab.local (DC=testlab,DC=local)"><div class="input-group-text"><span class="fas fa-info-circle"></span></div></span></div></div></div><div class="form-row pt-3"><div class="col-md-12 col-lg-3"><label class="u-text-small-bold" for="showMailIcon"><?php echo \App\Language::translate('LBL_LDAP_PORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-md-12 col-lg-8"><input class="configField form-control" title="<?php echo \App\Language::translate('LBL_LDAP_PORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" type="text" name="port" data-type="ldap" value="<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['port'];?>
"></div></div></div></div></div></div></div>
<?php }
}
