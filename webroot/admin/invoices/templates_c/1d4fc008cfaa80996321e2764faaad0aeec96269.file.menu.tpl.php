<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 21:52:15
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Websites/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18130670596053cb8f745a70-12144054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4fc008cfaa80996321e2764faaad0aeec96269' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Websites/menu.tpl',
      1 => 1616064965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18130670596053cb8f745a70-12144054',
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
  'unifunc' => 'content_6053cb8f74bca0_42019006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6053cb8f74bca0_42019006')) {function content_6053cb8f74bca0_42019006($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/index"><button <?php if (isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-link"></i> Websites</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/cats"><button <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-sitemap"></i> Categories</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/addcat"><button <?php if (!isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-plus-circle"></i> Add Category</button></a>
    </div>
    <hr><?php }} ?>
