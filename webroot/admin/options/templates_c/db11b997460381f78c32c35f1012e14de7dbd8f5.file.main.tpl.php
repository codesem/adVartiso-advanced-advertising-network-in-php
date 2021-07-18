<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-13 13:17:21
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Options/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83183560560674ac9c38614-40484438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db11b997460381f78c32c35f1012e14de7dbd8f5' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Options/main.tpl',
      1 => 1618319839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83183560560674ac9c38614-40484438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60674ac9c3e152_55833980',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60674ac9c3e152_55833980')) {function content_60674ac9c3e152_55833980($_smarty_tpl) {?>    <div class="tab">
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
