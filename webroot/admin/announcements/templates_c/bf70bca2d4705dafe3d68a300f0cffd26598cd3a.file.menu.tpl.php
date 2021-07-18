<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-01 08:04:20
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Announcements/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91228143960657e844a7b41-22684228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf70bca2d4705dafe3d68a300f0cffd26598cd3a' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Announcements/menu.tpl',
      1 => 1616106319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91228143960657e844a7b41-22684228',
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
  'unifunc' => 'content_60657e844aaf53_34405496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60657e844aaf53_34405496')) {function content_60657e844aaf53_34405496($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/index"><button <?php if (isset($_smarty_tpl->tpl_vars['announcements']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-bullhorn"></div> Announcements</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['announcements']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add Announcement</button></a>
    </div>
    <hr><?php }} ?>
