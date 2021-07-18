<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 22:18:58
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Pages/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8381204726053d19a1e1f85-53163981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '302a4e3fba7da9afac0833de5f214919e17af299' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Pages/menu.tpl',
      1 => 1616105924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8381204726053d19a1e1f85-53163981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6053d19a1e2a30_36170804',
  'variables' => 
  array (
    'ADM' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6053d19a1e2a30_36170804')) {function content_6053d19a1e2a30_36170804($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/index"><button <?php if (isset($_smarty_tpl->tpl_vars['pages']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-files-o"></div> Pages</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['pages']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add Page</button></a>
    </div>
    <hr><?php }} ?>
