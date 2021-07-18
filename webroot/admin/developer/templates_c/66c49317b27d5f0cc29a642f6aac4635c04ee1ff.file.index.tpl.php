<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-30 21:21:31
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Developer/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1604292665608c74dbb48ae3-70294272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c49317b27d5f0cc29a642f6aac4635c04ee1ff' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Developer/index.tpl',
      1 => 1619061028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1604292665608c74dbb48ae3-70294272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'UPD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608c74dbb5d015_87795085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608c74dbb5d015_87795085')) {function content_608c74dbb5d015_87795085($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?php echo $_smarty_tpl->getSubTemplate ('../Developer/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                            <div class="text-center">
                                                <h4><i class="fa fa-gift"></i> Thank You For Purchasing Our Advanced Script!</h4><hr>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['UPD']->value;?>
images/advartiso-script.svg" alt="AdVartiso Banner" width="750" height="350"><hr>
                                                <h4><i class="fa fa-image"></i> Order Custom Logo/Favicon From Us</h4>
                                                <a href="https://projects.codsem.com/advartiso/custom" class="btn btn-black waves-effect w-md m-b-5" target="_blank">
                                                    <i class="fa fa-code"></i> Order
                                                </a>
                                                <h5>Don't Want To Wait? Send me a private message to my email: <b>jhard4360@gmail.com</b></h5><hr><br>
                                                
                                                <h4><i class="fa fa-code"></i> Order Custom Features From Us</h4>
                                                <a href="https://projects.codsem.com/advartiso/custom" class="btn btn-black waves-effect w-md m-b-5" target="_blank">
                                                    <i class="fa fa-code"></i> Order
                                                </a>
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
