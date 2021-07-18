<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-20 18:13:44
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Users/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161004087760cddf28451242-68280302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14149a851637ecda2f46b5dcc0bf7b853f83824c' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Users/menu.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161004087760cddf28451242-68280302',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cddf28457e62_51593982',
  'variables' => 
  array (
    'ADM' => 0,
    'members' => 0,
    'topusers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cddf28457e62_51593982')) {function content_60cddf28457e62_51593982($_smarty_tpl) {?>
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
