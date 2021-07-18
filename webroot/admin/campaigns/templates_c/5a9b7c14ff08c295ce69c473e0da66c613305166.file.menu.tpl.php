<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-20 16:08:09
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Campaigns/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23652420060561de9e85af4-12327037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a9b7c14ff08c295ce69c473e0da66c613305166' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Campaigns/menu.tpl',
      1 => 1616079899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23652420060561de9e85af4-12327037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'imgbanners' => 0,
    'textbanners' => 0,
    'popups' => 0,
    'directs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60561de9e8aba8_56552453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60561de9e8aba8_56552453')) {function content_60561de9e8aba8_56552453($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/image-banners"><button <?php if (isset($_smarty_tpl->tpl_vars['imgbanners']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-image"></i> Image Banners</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/text-banners"><button <?php if (isset($_smarty_tpl->tpl_vars['textbanners']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-file"></i> Text Banners</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/popups"><button <?php if (isset($_smarty_tpl->tpl_vars['popups']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-files-o"></i> Popups</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/directs"><button <?php if (isset($_smarty_tpl->tpl_vars['directs']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-link"></i> Directs</button></a>
    </div>
    <hr><?php }} ?>
