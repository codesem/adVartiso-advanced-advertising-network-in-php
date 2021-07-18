<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-29 03:55:08
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Websites/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1360981487608a2e1ccd8ec4-50133495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '918a0c3e525bbd45d01012d3c508c020c8533c87' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Websites/menu.tpl',
      1 => 1616797330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1360981487608a2e1ccd8ec4-50133495',
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
  'unifunc' => 'content_608a2e1ccde498_12242890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a2e1ccde498_12242890')) {function content_608a2e1ccde498_12242890($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/index"><button <?php if (isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-link"></i> Websites</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/categories"><button <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-sitemap"></i> Categories</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/addcat"><button <?php if (!isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-plus-circle"></i> Add Category</button></a>
    </div>
    <hr><?php }} ?>
