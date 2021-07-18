<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-29 03:37:03
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Options/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1210349001608a29df046350-49068536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6ef0d85bda044ebd491b8af1dbe28dd14e66895' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Options/main.tpl',
      1 => 1618316240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1210349001608a29df046350-49068536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'options' => 0,
    'emails' => 0,
    'payments' => 0,
    'withdrawal' => 0,
    'themes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608a29df04dda9_84489248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a29df04dda9_84489248')) {function content_608a29df04dda9_84489248($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/index"><button <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-cog"></div> Options</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/ads"><button <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-code"></div> ADS Configuration</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/email"><button <?php if (isset($_smarty_tpl->tpl_vars['emails']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-envelope"></div> Email</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/payment"><button <?php if (isset($_smarty_tpl->tpl_vars['payments']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-bank"></div> Payment Methods</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/withdrawal"><button <?php if (isset($_smarty_tpl->tpl_vars['withdrawal']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-dollar"></div> Withdrawal Methods</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/themes"><button <?php if (isset($_smarty_tpl->tpl_vars['themes']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-paint-brush"></div> Themes</button></a>
    </div>
    <hr><?php }} ?>
