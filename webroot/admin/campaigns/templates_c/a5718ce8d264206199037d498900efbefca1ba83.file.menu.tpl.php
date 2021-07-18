<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 12:12:06
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Campaigns/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150116524160cddf16746d26-74551054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5718ce8d264206199037d498900efbefca1ba83' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Campaigns/menu.tpl',
      1 => 1619834498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150116524160cddf16746d26-74551054',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cddf167564a9_37586504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cddf167564a9_37586504')) {function content_60cddf167564a9_37586504($_smarty_tpl) {?>    <div class="tab">
    <?php if (do_config(80)==1) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/image-banners"><button <?php if (isset($_smarty_tpl->tpl_vars['imgbanners']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-image"></i> Image Banners <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['nimgbanners']->value;?>
</span></button></a>
    <?php }?>
    <?php if (do_config(81)==1) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/text-banners"><button <?php if (isset($_smarty_tpl->tpl_vars['textbanners']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-file"></i> Text Banners <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['ntxtbanners']->value;?>
</span></button></a>
    <?php }?>
    <?php if (do_config(82)==1) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/popups"><button <?php if (isset($_smarty_tpl->tpl_vars['popups']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-files-o"></i> Popups <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['npopups']->value;?>
</span></button></a>
    <?php }?>
    <?php if (do_config(83)==1) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/directs"><button <?php if (isset($_smarty_tpl->tpl_vars['directs']->value)) {?> class="tablinks active"<?php }?>><i class="fa fa-link"></i> Directs <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['ndirects']->value;?>
</span></button></a>
    <?php }?>
      <a href="#"><button><i class="fa fa-file-o"></i> Native</button></a>
      <a href="#"><button><i class="fa fa-times-circle"></i> Exit Intent</button></a>
    </div>
    <hr><?php }} ?>
