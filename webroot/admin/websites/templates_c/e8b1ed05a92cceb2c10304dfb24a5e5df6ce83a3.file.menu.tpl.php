<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-21 11:01:23
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Websites/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83052305860cddf03e78aa9-68745038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b1ed05a92cceb2c10304dfb24a5e5df6ce83a3' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Websites/menu.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83052305860cddf03e78aa9-68745038',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cddf03e81048_32041037',
  'variables' => 
  array (
    'ADM' => 0,
    'websites' => 0,
    'categories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cddf03e81048_32041037')) {function content_60cddf03e81048_32041037($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/index"><button <?php if (isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-link"></i> Websites</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/categories"><button <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-sitemap"></i> Categories</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/addcat"><button <?php if (!isset($_smarty_tpl->tpl_vars['categories']->value)&&!isset($_smarty_tpl->tpl_vars['websites']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-plus-circle"></i> Add Category</button></a>
    </div>
    <hr><?php }} ?>
