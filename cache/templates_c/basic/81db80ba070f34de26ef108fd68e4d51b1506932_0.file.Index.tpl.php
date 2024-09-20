<?php
/* Smarty version 4.2.0, created on 2023-12-19 13:31:27
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Settings\Countries\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65818d1f73f349_54108324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81db80ba070f34de26ef108fd68e4d51b1506932' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Settings\\Countries\\Index.tpl',
      1 => 1702905757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65818d1f73f349_54108324 (Smarty_Internal_Template $_smarty_tpl) {
?><div class=""><div class="o-breadcrumb widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><div class="contents mt-2"><div class="mb-2"><span class="mr-2"><?php echo \App\Language::translate('LBL_SET_DEFAULT_PHONE_COUNTRY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><?php $_smarty_tpl->_assignInScope('DEFAULT_PHONE_COUNTRY', \App\Config::component('Phone','defaultPhoneCountry'));?><div class="btn-group btn-group-toggle" data-toggle="buttons"><label class="btn btn-sm btn-outline-primary <?php if ($_smarty_tpl->tpl_vars['DEFAULT_PHONE_COUNTRY']->value) {?> active<?php }?>"><input class="js-switch js-update-get-default-phone-country" type="radio" name="defaultPhoneCountry" data-js="change" id="defaultPhoneCountry1" autocomplete="off" value="1"<?php if ($_smarty_tpl->tpl_vars['DEFAULT_PHONE_COUNTRY']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_DEFAULT_PHONE_FROM_PANEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><label class="btn btn-sm btn-outline-primary <?php if (!$_smarty_tpl->tpl_vars['DEFAULT_PHONE_COUNTRY']->value) {?> active <?php }?>"><input class="js-switch js-update-get-default-phone-country" type="radio" name="defaultPhoneCountry" data-js="change" id="defaultPhoneCountry2" autocomplete="off" value="0"<?php if (!$_smarty_tpl->tpl_vars['DEFAULT_PHONE_COUNTRY']->value) {?>checked<?php }?>><?php echo \App\Language::translate('LBL_DEFAULT_PHONE_FROM_USER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><table class="table tableRWD table-bordered table-sm listViewEntriesTable"><thead><tr class="listViewHeaders"><th width="1%" class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_SHORTNAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 col-md-2 text-center"><span class="marginRight10"><?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</span><span><button class="all-statuses btn btn-light btn-sm js-popover-tooltip" data-js="popover" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_TOGGLE_ALL_STATUSES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="far fa-check-square"></span></button></span></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Countries_Record_Model::getAll(), 'ROW');
$_smarty_tpl->tpl_vars['ROW']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->tpl_vars['ROW']->do_else = false;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['id'];?>
"><td width="1%" nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="fas fa-ellipsis-v" title="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"></span></td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Language::translateSingleMod($_smarty_tpl->tpl_vars['ROW']->value['name'],'Other.Country');?>
</td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ROW']->value['code']);?>
</td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 actionImages"><span class="float-right actions"><button class="to-bottom btn btn-light btn-sm js-popover-tooltip" data-js="popover" data-placement="left" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_ROW_TO_BOTTOM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-arrow-down"></span></button></span><span class="float-right actions"><button class="to-top btn btn-light btn-sm marginLeft20 js-popover-tooltip" data-js="popover" data-placement="left" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_ROW_TO_TOP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-arrow-up"></span></button></span><span class="float-right actions"><button class="mr-1 uitype btn <?php if (!$_smarty_tpl->tpl_vars['ROW']->value['uitype']) {?>btn-success<?php } else { ?>btn-danger<?php }?> btn-sm js-popover-tooltip" data-js="popover" data-uitype="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['uitype'];?>
" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_VISIBLE_IN_COUNTRY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="far fa-image"></span></button></span><span class="float-right actions"><button class="mr-1 phone btn <?php if (!$_smarty_tpl->tpl_vars['ROW']->value['phone']) {?>btn-success<?php } else { ?>btn-danger<?php }?> btn-sm js-popover-tooltip" data-js="popover" data-phone="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['phone'];?>
" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_VISIBLE_IN_PHONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="fas fa-mobile-alt"></span></button></span><span class="float-right actions"><button class="mr-1 status btn <?php if (!$_smarty_tpl->tpl_vars['ROW']->value['status']) {?>btn-success<?php } else { ?>btn-danger<?php }?> btn-sm js-popover-tooltip" data-js="popover" data-status="<?php echo $_smarty_tpl->tpl_vars['ROW']->value['status'];?>
" data-content="<?php echo \App\Purifier::encodeHtml(\App\Language::translate('LBL_COUNTRY_TOGGLE_STATUS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span class="far fa-check-square"></span></button></span></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div></div>
<?php }
}
