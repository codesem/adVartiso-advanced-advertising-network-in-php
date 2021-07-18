<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-20 18:01:55
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Banlist/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45235838260cddf46f28b20-80339490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a17ba44ccd3c8e4a7827df6556841e43c603ef4c' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Banlist/menu.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45235838260cddf46f28b20-80339490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cddf46f2e4a6_39512853',
  'variables' => 
  array (
    'ADM' => 0,
    'banlist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cddf46f2e4a6_39512853')) {function content_60cddf46f2e4a6_39512853($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/index"><button <?php if (isset($_smarty_tpl->tpl_vars['banlist']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-ban"></div> Detected IP(s)</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['banlist']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add IP(s)</button></a>
    </div>
    <hr><?php }} ?>
