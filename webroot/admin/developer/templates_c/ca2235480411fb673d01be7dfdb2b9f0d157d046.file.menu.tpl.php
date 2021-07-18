<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 12:53:15
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Developer/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133218658560cde8bbf32bd0-65248997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca2235480411fb673d01be7dfdb2b9f0d157d046' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Developer/menu.tpl',
      1 => 1619064788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133218658560cde8bbf32bd0-65248997',
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
  'unifunc' => 'content_60cde8bbf39693_53223616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cde8bbf39693_53223616')) {function content_60cde8bbf39693_53223616($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
developer/index"><button <?php if ($_smarty_tpl->tpl_vars['developer']->value) {?> class="tablinks active"<?php }?>><i class="fa fa-code"></i> Developer Page</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
developer/faqs"><button <?php if ($_smarty_tpl->tpl_vars['faqs']->value) {?> class="tablinks active"<?php }?>><i class="fa fa-question-circle"></i> FAQs</button></a>
    </div>
    <hr><?php }} ?>
