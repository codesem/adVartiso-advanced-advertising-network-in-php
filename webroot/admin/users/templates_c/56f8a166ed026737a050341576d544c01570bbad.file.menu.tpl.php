<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 21:01:44
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Users/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14774274976053762ec68832-78239659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56f8a166ed026737a050341576d544c01570bbad' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Users/menu.tpl',
      1 => 1616101050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14774274976053762ec68832-78239659',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6053762ec698c5_12213322',
  'variables' => 
  array (
    'ADM' => 0,
    'members' => 0,
    'topusers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6053762ec698c5_12213322')) {function content_6053762ec698c5_12213322($_smarty_tpl) {?>
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
