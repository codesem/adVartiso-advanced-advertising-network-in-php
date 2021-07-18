<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-22 04:13:09
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Developer/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2562557456080f7d57d7c25-57438660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5291c8ea9b353c315ad39bab7129f9f87646eb5d' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Developer/menu.tpl',
      1 => 1619064787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2562557456080f7d57d7c25-57438660',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADM' => 0,
    'developer' => 0,
    'faqs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6080f7d57db5e5_61155191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6080f7d57db5e5_61155191')) {function content_6080f7d57db5e5_61155191($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
developer/index"><button <?php if ($_smarty_tpl->tpl_vars['developer']->value) {?> class="tablinks active"<?php }?>><i class="fa fa-code"></i> Developer Page</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
developer/faqs"><button <?php if ($_smarty_tpl->tpl_vars['faqs']->value) {?> class="tablinks active"<?php }?>><i class="fa fa-question-circle"></i> FAQs</button></a>
    </div>
    <hr><?php }} ?>
