<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-04 12:39:20
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Banlist/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11694674646069b378ab84e5-52307384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6235cdad62b6822bc675bd165e8f36ee5f2ece10' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Banlist/menu.tpl',
      1 => 1616928855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11694674646069b378ab84e5-52307384',
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
  'unifunc' => 'content_6069b378abbc49_95917150',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6069b378abbc49_95917150')) {function content_6069b378abbc49_95917150($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/index"><button <?php if (isset($_smarty_tpl->tpl_vars['banlist']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-ban"></div> Detected IP(s)</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['banlist']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add IP(s)</button></a>
    </div>
    <hr><?php }} ?>
