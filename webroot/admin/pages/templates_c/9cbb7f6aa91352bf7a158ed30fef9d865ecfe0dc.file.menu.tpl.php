<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 12:12:41
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Pages/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34390786060cddf39b313b7-16299057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cbb7f6aa91352bf7a158ed30fef9d865ecfe0dc' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Pages/menu.tpl',
      1 => 1616109524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34390786060cddf39b313b7-16299057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cddf39b365c5_55018117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cddf39b365c5_55018117')) {function content_60cddf39b365c5_55018117($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/index"><button <?php if (isset($_smarty_tpl->tpl_vars['pages']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-files-o"></div> Pages</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['pages']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add Page</button></a>
    </div>
    <hr><?php }} ?>
