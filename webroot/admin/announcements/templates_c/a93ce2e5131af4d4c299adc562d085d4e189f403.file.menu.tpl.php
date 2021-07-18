<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 22:25:53
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Announcements/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14490509066053d371799094-42875117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93ce2e5131af4d4c299adc562d085d4e189f403' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Announcements/menu.tpl',
      1 => 1616106319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14490509066053d371799094-42875117',
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
  'unifunc' => 'content_6053d37179c9e8_12309681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6053d37179c9e8_12309681')) {function content_6053d37179c9e8_12309681($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/index"><button <?php if (isset($_smarty_tpl->tpl_vars['announcements']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-bullhorn"></div> Announcements</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['announcements']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add Announcement</button></a>
    </div>
    <hr><?php }} ?>
