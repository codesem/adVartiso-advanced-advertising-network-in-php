<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-28 10:54:55
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Banlist/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3486967276060607fc0b080-78499069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '455a8ff3ead9fc71e9d3bec11b3d2493416fd843' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Banlist/menu.tpl',
      1 => 1616928855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3486967276060607fc0b080-78499069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'banlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6060607fc0de40_53268468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6060607fc0de40_53268468')) {function content_6060607fc0de40_53268468($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/index"><button <?php if (isset($_smarty_tpl->tpl_vars['banlist']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-ban"></div> Detected IP(s)</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['banlist']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add IP(s)</button></a>
    </div>
    <hr><?php }} ?>
