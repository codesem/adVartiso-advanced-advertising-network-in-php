<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-20 18:14:36
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Pages/404/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90285505260cf858cd09419-34711889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2276183b9bdebab108d3fbb8ebc281960d22748f' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Pages/404/index.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90285505260cf858cd09419-34711889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    '__NOT_FOUND' => 0,
    'HOST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cf858cd2f624_34767852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cf858cd2f624_34767852')) {function content_60cf858cd2f624_34767852($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TMP']->value)."/Pages/Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="col-sm-12 account-content">
                            <h2 class="text-uppercase text-danger"><i class="fa fa-warning"></i> <?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</h2><hr>
                            <p class="text"><?php echo $_smarty_tpl->tpl_vars['__NOT_FOUND']->value;?>
</p><hr>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
" class="badge badge-success"><i class="fa fa-arrow-left"></i> BACK</a>
                        </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->
          
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TMP']->value)."/Pages/Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
