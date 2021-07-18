<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-22 15:32:03
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Pages/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211683514960d20273875af9-18242313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4dcfd61e215133e02d0f62c4fbd5f7f19a0439e' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Pages/index.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211683514960d20273875af9-18242313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'REFERER' => 0,
    '_GO_BACK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60d2027389f0e0_88731824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d2027389f0e0_88731824')) {function content_60d2027389f0e0_88731824($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TMP']->value)."/Pages/Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="account-content">
                            <h2 class="text-uppercase text-success"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2><hr>
                            <p class="text"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p><hr>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['REFERER']->value;?>
" class="badge badge-success text-uppercase"><i class="fa fa-arrow-left"></i> <?php echo $_smarty_tpl->tpl_vars['_GO_BACK']->value;?>
</a>
                        </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->
          
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TMP']->value)."/Pages/Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
