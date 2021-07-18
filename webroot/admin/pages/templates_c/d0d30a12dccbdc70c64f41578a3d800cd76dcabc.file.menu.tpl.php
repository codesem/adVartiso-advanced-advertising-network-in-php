<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-24 14:21:54
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Pages/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1760798425605b4b02bd5f84-97446270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d30a12dccbdc70c64f41578a3d800cd76dcabc' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Pages/menu.tpl',
      1 => 1616105924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760798425605b4b02bd5f84-97446270',
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
  'unifunc' => 'content_605b4b02bd9178_25742213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605b4b02bd9178_25742213')) {function content_605b4b02bd9178_25742213($_smarty_tpl) {?>
    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/index"><button <?php if (isset($_smarty_tpl->tpl_vars['pages']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-files-o"></div> Pages</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/add"><button <?php if (!isset($_smarty_tpl->tpl_vars['pages']->value)) {?> class="tablinks active"<?php }?>><div class="fa fa-plus-circle"></div> Add Page</button></a>
    </div>
    <hr><?php }} ?>
