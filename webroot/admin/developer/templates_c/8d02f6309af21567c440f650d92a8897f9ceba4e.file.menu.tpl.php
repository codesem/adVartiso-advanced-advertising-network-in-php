<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-30 21:21:31
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Developer/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:528060812608c74dbb792b2-70955928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d02f6309af21567c440f650d92a8897f9ceba4e' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Developer/menu.tpl',
      1 => 1619061188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '528060812608c74dbb792b2-70955928',
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
  'unifunc' => 'content_608c74dbb7d554_19397830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608c74dbb7d554_19397830')) {function content_608c74dbb7d554_19397830($_smarty_tpl) {?>    <div class="tab">
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
developer/index"><button <?php if ($_smarty_tpl->tpl_vars['developer']->value) {?> class="tablinks active"<?php }?>><i class="fa fa-code"></i> Developer Page</button></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
developer/faqs"><button <?php if ($_smarty_tpl->tpl_vars['faqs']->value) {?> class="tablinks active"<?php }?>><i class="fa fa-question-circle"></i> FAQs</button></a>
    </div>
    <hr><?php }} ?>
