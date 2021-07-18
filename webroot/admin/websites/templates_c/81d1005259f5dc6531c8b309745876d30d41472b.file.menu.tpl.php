<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-26 22:22:40
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Websites/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34608091360561de2132b70-98207175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d1005259f5dc6531c8b309745876d30d41472b' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Websites/menu.tpl',
      1 => 1616797329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34608091360561de2132b70-98207175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60561de2137ac5_30194838',
  'variables' => 
  array (
    'ADM' => 0,
    'websites' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60561de2137ac5_30194838')) {function content_60561de2137ac5_30194838($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/index"><button <?php if (isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-link"></i> Websites</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/categories"><button <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-sitemap"></i> Categories</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/addcat"><button <?php if (!isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-plus-circle"></i> Add Category</button></a>
    </div>
    <hr><?php }} ?>
