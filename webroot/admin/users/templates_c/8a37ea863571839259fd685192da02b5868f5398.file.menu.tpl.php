<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-01 08:02:59
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Users/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161814859760657e330461a3-08467516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a37ea863571839259fd685192da02b5868f5398' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Users/menu.tpl',
      1 => 1616101050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161814859760657e330461a3-08467516',
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
  'unifunc' => 'content_60657e3304af69_60528434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60657e3304af69_60528434')) {function content_60657e3304af69_60528434($_smarty_tpl) {?>
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
