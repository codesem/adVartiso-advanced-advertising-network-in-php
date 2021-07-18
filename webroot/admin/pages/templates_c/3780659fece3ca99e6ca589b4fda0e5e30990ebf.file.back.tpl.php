<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 14:36:21
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Layout/back.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183869740560ce00e5642627-37664644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3780659fece3ca99e6ca589b4fda0e5e30990ebf' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Layout/back.tpl',
      1 => 1618967614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183869740560ce00e5642627-37664644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REFERER' => 0,
    '_GO_BACK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60ce00e5644db7_38679303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ce00e5644db7_38679303')) {function content_60ce00e5644db7_38679303($_smarty_tpl) {?>        <hr>
        <div class="row">
            <div class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['REFERER']->value;?>
" class="badge badge-success text-uppercase"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_GO_BACK']->value;?>
</a>
            </div><!-- end col -->
        </div><!-- end row -->
    <?php }} ?>
