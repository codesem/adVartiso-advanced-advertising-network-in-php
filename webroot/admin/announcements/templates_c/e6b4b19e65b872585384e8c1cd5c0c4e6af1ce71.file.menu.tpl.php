<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-24 14:30:16
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Announcements/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:910102146605b4cf8a85d08-82474584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6b4b19e65b872585384e8c1cd5c0c4e6af1ce71' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Announcements/menu.tpl',
      1 => 1616106319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910102146605b4cf8a85d08-82474584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'announcements' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_605b4cf8a88fa8_65781402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605b4cf8a88fa8_65781402')) {function content_605b4cf8a88fa8_65781402($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/index"><button <?php if (isset($_smarty_tpl->tpl_vars['announcements']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-bullhorn"></div> Announcements</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['announcements']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add Announcement</button></a>
    </div>
    <hr><?php }} ?>
