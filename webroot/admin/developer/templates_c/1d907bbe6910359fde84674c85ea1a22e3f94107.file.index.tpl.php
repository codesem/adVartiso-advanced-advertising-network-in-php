<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 12:54:24
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Developer/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122844296560cde8bbdef033-22489719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d907bbe6910359fde84674c85ea1a22e3f94107' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Developer/index.tpl',
      1 => 1624107260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122844296560cde8bbdef033-22489719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cde8bbe12280_01354405',
  'variables' => 
  array (
    'UPD' => 0,
    'APP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cde8bbe12280_01354405')) {function content_60cde8bbe12280_01354405($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?php echo $_smarty_tpl->getSubTemplate ('../Developer/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                            <div class="text-center">
                                                <h4><i class="fa fa-gift"></i> Thank You For Using Our Advanced Script!</h4><hr>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['UPD']->value;?>
images/script.svg" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
" width="750" height="350"><hr>
                                                <h4><i class="fa fa-image"></i> Order Custom Logo/Favicon From Us</h4>
                                                <h5>Don't Want To Wait? Send me a private message to my email: <b>jhard4360@gmail.com</b></h5><hr><br>
                                                
                                                <h4><i class="fa fa-code"></i> Order Custom Features From Us</h4>
                                                <h5>Don't Want To Wait? Send me a private message to my email: <b>jhard4360@gmail.com</b></h5>
                                            </div>

                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                                </div> <!-- end card -->
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->

 

<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
