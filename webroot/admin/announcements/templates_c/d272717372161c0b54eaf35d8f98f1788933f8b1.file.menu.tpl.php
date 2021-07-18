<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 12:12:38
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Announcements/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5259729660cddf36f08b93-10307312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd272717372161c0b54eaf35d8f98f1788933f8b1' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Announcements/menu.tpl',
      1 => 1616109920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5259729660cddf36f08b93-10307312',
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
  'unifunc' => 'content_60cddf36f118d5_11310060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cddf36f118d5_11310060')) {function content_60cddf36f118d5_11310060($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/index"><button <?php if (isset($_smarty_tpl->tpl_vars['announcements']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-bullhorn"></div> Announcements</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['announcements']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add Announcement</button></a>
    </div>
    <hr><?php }} ?>
