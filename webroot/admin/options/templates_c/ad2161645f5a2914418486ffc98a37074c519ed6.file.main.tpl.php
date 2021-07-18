<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-02 15:44:11
         compiled from "/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Options/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20768125275ff094be1b03d7-20230131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad2161645f5a2914418486ffc98a37074c519ed6' => 
    array (
      0 => '/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Options/main.tpl',
      1 => 1609602248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20768125275ff094be1b03d7-20230131',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ff094be1eb332_14436448',
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
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff094be1eb332_14436448')) {function content_5ff094be1eb332_14436448($_smarty_tpl) {?>    <div class="tab">
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
