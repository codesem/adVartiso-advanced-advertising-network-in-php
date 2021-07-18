<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-05-01 01:01:58
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Campaigns/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1120089080608a2d6dcd8c23-22163965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '038d9d9e51266d15766e04a1845f708e51ace9ac' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Campaigns/menu.tpl',
      1 => 1619830898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1120089080608a2d6dcd8c23-22163965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608a2d6dcdf280_82246566',
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
<?php if ($_valid && !is_callable('content_608a2d6dcdf280_82246566')) {function content_608a2d6dcdf280_82246566($_smarty_tpl) {?>    <div class="tab">
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
