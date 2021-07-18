<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-01 08:04:29
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Pages/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106464905960657e8d67aa91-99535081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a2636a085423c23b391fb7a9166e0954dc29f71' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Pages/menu.tpl',
      1 => 1616105924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106464905960657e8d67aa91-99535081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60657e8d67dcd0_43911878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60657e8d67dcd0_43911878')) {function content_60657e8d67dcd0_43911878($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/index"><button <?php if (isset($_smarty_tpl->tpl_vars['pages']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-files-o"></div> Pages</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['pages']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add Page</button></a>
    </div>
    <hr><?php }} ?>
