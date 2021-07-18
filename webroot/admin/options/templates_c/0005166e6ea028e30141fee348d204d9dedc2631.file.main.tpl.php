<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-29 15:26:14
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Options/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88423944960607062ccd3a9-24779123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0005166e6ea028e30141fee348d204d9dedc2631' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Options/main.tpl',
      1 => 1617031547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88423944960607062ccd3a9-24779123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60607062cd3697_85243190',
  'variables' => 
  array (
    'ADM' => 0,
    'options' => 0,
    'emails' => 0,
    'payments' => 0,
    'themes' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60607062cd3697_85243190')) {function content_60607062cd3697_85243190($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/index"><button <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-cog"></div> Options</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/email"><button <?php if (isset($_smarty_tpl->tpl_vars['emails']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-envelope"></div> Email</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/payment"><button <?php if (isset($_smarty_tpl->tpl_vars['payments']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-bank"></div> Payment Methods</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/themes"><button <?php if (isset($_smarty_tpl->tpl_vars['themes']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-paint-brush"></div> Themes</button></a>
    </div>
    <hr><?php }} ?>
