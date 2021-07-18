<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-22 11:29:27
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Layout/back.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201452712660cdf0510829e5-83527584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3780659fece3ca99e6ca589b4fda0e5e30990ebf' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Layout/back.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201452712660cdf0510829e5-83527584',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdf051085457_79015392',
  'variables' => 
  array (
    'REFERER' => 0,
    '_GO_BACK' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdf051085457_79015392')) {function content_60cdf051085457_79015392($_smarty_tpl) {?>        <hr>
        <div class="row">
            <div class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['REFERER']->value;?>
" class="badge badge-success text-uppercase"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_GO_BACK']->value;?>
</a>
            </div><!-- end col -->
        </div><!-- end row -->
    <?php }} ?>
