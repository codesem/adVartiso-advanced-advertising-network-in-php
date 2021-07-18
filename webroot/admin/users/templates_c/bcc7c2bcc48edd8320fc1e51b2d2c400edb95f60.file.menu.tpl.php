<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-20 16:08:12
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Users/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209625793360561dec8fe737-34382979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcc7c2bcc48edd8320fc1e51b2d2c400edb95f60' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Users/menu.tpl',
      1 => 1616101050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209625793360561dec8fe737-34382979',
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
  'unifunc' => 'content_60561dec9034b7_34120604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60561dec9034b7_34120604')) {function content_60561dec9034b7_34120604($_smarty_tpl) {?>
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
