<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-29 03:51:14
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Users/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1328955771608a2d3247f6c6-57730212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '373c8480ed519443e17dacff06b3751f5cd4b6d8' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Users/menu.tpl',
      1 => 1616101050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1328955771608a2d3247f6c6-57730212',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'members' => 0,
    'topusers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608a2d32484730_28875077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a2d32484730_28875077')) {function content_608a2d32484730_28875077($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
users/index"><button <?php if (isset($_smarty_tpl->tpl_vars['members']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-users"></i> Users</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
users/top"><button <?php if (isset($_smarty_tpl->tpl_vars['topusers']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-fire"></i> Top Users</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
users/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['members']->value)&&!isset($_smarty_tpl->tpl_vars['topusers']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-plus-circle"></i> Add User</button></a>
    </div>
    <hr>
    <?php }} ?>
