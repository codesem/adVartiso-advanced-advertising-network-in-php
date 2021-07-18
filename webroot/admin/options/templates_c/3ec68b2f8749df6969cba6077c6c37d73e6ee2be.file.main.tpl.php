<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-03 08:17:51
         compiled from "/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Options/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1473205857603f462f8a53e3-93756333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ec68b2f8749df6969cba6077c6c37d73e6ee2be' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Options/main.tpl',
      1 => 1611844232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1473205857603f462f8a53e3-93756333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'options' => 0,
    'emails' => 0,
    'payments' => 0,
    'currencies' => 0,
    'themes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_603f462f8abc39_26093954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603f462f8abc39_26093954')) {function content_603f462f8abc39_26093954($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/index"><button <?php if (isset($_smarty_tpl->tpl_vars['options']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-cog"></div> Options</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/email"><button <?php if (isset($_smarty_tpl->tpl_vars['emails']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-envelope"></div> Email</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/payment"><button <?php if (isset($_smarty_tpl->tpl_vars['payments']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-bank"></div> Payment Methods</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/currencies"><button <?php if (isset($_smarty_tpl->tpl_vars['currencies']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-bank"></div> Currencies</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/themes"><button <?php if (isset($_smarty_tpl->tpl_vars['themes']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-paint-brush"></div> Themes</button></a>
    </div>
    <hr><?php }} ?>
