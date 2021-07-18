<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-30 21:21:40
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Banlist/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:828294377608c74e44f8e18-42730545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3627d7629fff6e30300dc9b80bc253c56f1b36f' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Banlist/menu.tpl',
      1 => 1616925256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '828294377608c74e44f8e18-42730545',
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
  'unifunc' => 'content_608c74e44fc1b8_92712398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608c74e44fc1b8_92712398')) {function content_608c74e44fc1b8_92712398($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/index"><button <?php if (isset($_smarty_tpl->tpl_vars['banlist']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-ban"></div> Detected IP(s)</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['banlist']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add IP(s)</button></a>
    </div>
    <hr><?php }} ?>
