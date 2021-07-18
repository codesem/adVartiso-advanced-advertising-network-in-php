<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 15:05:01
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Campaigns/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153685992860536a434aa745-18044134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51466059e5e882c28f2f56a235cf9c316156e6ec' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Campaigns/menu.tpl',
      1 => 1616079899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153685992860536a434aa745-18044134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60536a434b0425_20390179',
  'variables' => 
  array (
    'ADM' => 0,
    'imgbanners' => 0,
    'textbanners' => 0,
    'popups' => 0,
    'directs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60536a434b0425_20390179')) {function content_60536a434b0425_20390179($_smarty_tpl) {?>    <div class="tab">
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
