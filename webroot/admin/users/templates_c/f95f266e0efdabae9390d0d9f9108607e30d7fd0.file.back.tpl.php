<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-21 05:19:23
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Layout/back.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15311354136075ad6931ccc1-19231271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f95f266e0efdabae9390d0d9f9108607e30d7fd0' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Layout/back.tpl',
      1 => 1618967613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15311354136075ad6931ccc1-19231271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6075ad6931dc51_33533006',
  'variables' => 
  array (
    'REFERER' => 0,
    '_GO_BACK' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6075ad6931dc51_33533006')) {function content_6075ad6931dc51_33533006($_smarty_tpl) {?>        <hr>
        <div class="row">
            <div class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['REFERER']->value;?>
" class="badge badge-success text-uppercase"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_GO_BACK']->value;?>
</a>
            </div><!-- end col -->
        </div><!-- end row -->
    <?php }} ?>
