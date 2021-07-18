<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-13 14:38:33
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Campaigns/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1524468560657e2eed1918-52241331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8950d5f3a50db39a3232f8e7c79c6132b991f80b' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Campaigns/menu.tpl',
      1 => 1618324415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1524468560657e2eed1918-52241331',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60657e2eed6db3_23254296',
  'variables' => 
  array (
    'ADM' => 0,
    'imgbanners' => 0,
    'nimgbanners' => 0,
    'textbanners' => 0,
    'ntxtbanners' => 0,
    'popups' => 0,
    'npopups' => 0,
    'directs' => 0,
    'ndirects' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60657e2eed6db3_23254296')) {function content_60657e2eed6db3_23254296($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/image-banners"><button <?php if (isset($_smarty_tpl->tpl_vars['imgbanners']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-image"></i> Image Banners <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['nimgbanners']->value;?>
</span></button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/text-banners"><button <?php if (isset($_smarty_tpl->tpl_vars['textbanners']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-file"></i> Text Banners <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['ntxtbanners']->value;?>
</span></button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/popups"><button <?php if (isset($_smarty_tpl->tpl_vars['popups']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-files-o"></i> Popups <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['npopups']->value;?>
</span></button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/directs"><button <?php if (isset($_smarty_tpl->tpl_vars['directs']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-link"></i> Directs <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['ndirects']->value;?>
</span></button></a>
    
      <a href="#"><button><i class="fa fa-file-o"></i> Native</button></a>
      <a href="#"><button><i class="fa fa-times-circle"></i> Exit Intent</button></a>
    </div>
    <hr><?php }} ?>
