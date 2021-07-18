<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-29 03:51:17
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Layout/back.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341229952608a2d35f0ac40-17118119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f054f1f6d21c58454d8760c72cba3ce54bcb03f' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Layout/back.tpl',
      1 => 1618964014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1341229952608a2d35f0ac40-17118119',
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
  'unifunc' => 'content_608a2d35f0c6d3_20436205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a2d35f0c6d3_20436205')) {function content_608a2d35f0c6d3_20436205($_smarty_tpl) {?>        <hr>
        <div class="row">
            <div class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['REFERER']->value;?>
" class="badge badge-success text-uppercase"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_GO_BACK']->value;?>
</a>
            </div><!-- end col -->
        </div><!-- end row -->
    <?php }} ?>
