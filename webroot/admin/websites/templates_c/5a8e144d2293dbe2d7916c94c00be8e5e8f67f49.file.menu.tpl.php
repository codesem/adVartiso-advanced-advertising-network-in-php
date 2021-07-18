<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-01 08:02:50
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Websites/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53231970560657e2a82b1e9-87509362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a8e144d2293dbe2d7916c94c00be8e5e8f67f49' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Websites/menu.tpl',
      1 => 1616797329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53231970560657e2a82b1e9-87509362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'websites' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60657e2a831089_59642230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60657e2a831089_59642230')) {function content_60657e2a831089_59642230($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/index"><button <?php if (isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-link"></i> Websites</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/categories"><button <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-sitemap"></i> Categories</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/addcat"><button <?php if (!isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-plus-circle"></i> Add Category</button></a>
    </div>
    <hr><?php }} ?>
