<?php
/* Smarty version 4.2.0, created on 2024-01-03 12:15:33
  from 'C:\xampp\htdocs\yetiforce\layouts\basic\modules\Vtiger\TilesSize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_659541d52f3171_28755454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b299961ab7dff43b7ad5c7567f92cb9034a905c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\yetiforce\\layouts\\basic\\modules\\Vtiger\\TilesSize.tpl',
      1 => 1702905744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_659541d52f3171_28755454 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-TileSize --><div class="d-inline-block mr-sm-1 mb-1 mb-sm-0 c-btn-block-sm-down"><button class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><span class="fas fa-th-large"></span><span class="textHolder ml-2 js-tile-dropdown-title"> <?php echo App\Language::translate(mb_strtoupper(('LBL_TILE_').($_smarty_tpl->tpl_vars['TILE_SIZE']->value), 'UTF-8'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span><span class="caret"></span></button><div class="dropdown-menu js-selected-tile-size" data-selected-tile-size="<?php echo $_smarty_tpl->tpl_vars['TILE_SIZE']->value;?>
"><a class="dropdown-item js-tile-size" data-tile-size="very_small" href="#"><?php echo \App\Language::translate('LBL_TILE_VERY_SMALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><a class="dropdown-item js-tile-size" data-tile-size="small" href="#"><?php echo \App\Language::translate('LBL_TILE_SMALL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><a class="dropdown-item js-tile-size" data-tile-size="medium" href="#"> <?php echo \App\Language::translate('LBL_TILE_MEDIUM',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><a class="dropdown-item js-tile-size" data-tile-size="big" href="#"> <?php echo \App\Language::translate('LBL_TILE_BIG',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div></div><!-- /tpl-Base-TileSize -->
<?php }
}
