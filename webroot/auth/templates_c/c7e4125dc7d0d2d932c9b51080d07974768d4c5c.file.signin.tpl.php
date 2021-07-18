<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-21 22:35:37
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Auth/signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127056273560d114397b7086-00282888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e4125dc7d0d2d932c9b51080d07974768d4c5c' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Auth/signin.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127056273560d114397b7086-00282888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blocked_ip' => 0,
    '_IP_BLOCKED' => 0,
    '__IP_BLOCKED' => 0,
    'recaptcha' => 0,
    '_RECAPTCHA' => 0,
    '__RECAPTCHA' => 0,
    'banned' => 0,
    '_BANNED' => 0,
    '__BANNED' => 0,
    'invalid' => 0,
    '_INVALID' => 0,
    '__INVALID' => 0,
    'required' => 0,
    '_REQUIRED' => 0,
    '__REQUIRED' => 0,
    'express_login' => 0,
    '_EXPRESS' => 0,
    '__EXPRESS' => 0,
    'csrfToken' => 0,
    '_USERNAME' => 0,
    '_PASSWORD' => 0,
    '_REMEMBER_ME' => 0,
    '_PROVE_YOUR_HUMAN' => 0,
    'HOST' => 0,
    '_FORGOT_PASSWORD' => 0,
    '_SIGN_IN' => 0,
    '_NO_ACCOUNT' => 0,
    '_SIGN_UP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60d114397f46c6_50975637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d114397f46c6_50975637')) {function content_60d114397f46c6_50975637($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('./Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                <div class="account-content">
                                    <!-- ALERTS START HERE -->
                                      <?php if ($_smarty_tpl->tpl_vars['blocked_ip']->value) {?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['_IP_BLOCKED']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['__IP_BLOCKED']->value;?>
</div><?php }?>
                                      <?php if ($_smarty_tpl->tpl_vars['recaptcha']->value) {?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['_RECAPTCHA']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['__RECAPTCHA']->value;?>
</div><?php }?>
                                      <?php if ($_smarty_tpl->tpl_vars['banned']->value) {?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['_BANNED']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['__BANNED']->value;?>
</div><?php }?>
                                      <?php if ($_smarty_tpl->tpl_vars['invalid']->value) {?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['_INVALID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['__INVALID']->value;?>
</div><?php }?>
                                      <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['_REQUIRED']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['__REQUIRED']->value;?>
</div><?php }?>
                                      <?php if ($_smarty_tpl->tpl_vars['express_login']->value) {?><div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['_EXPRESS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['__EXPRESS']->value;?>
</div><?php }?>
                                    <!-- ALERTS END HERE -->
                     
                                    <form class="form-horizontal" method="POST">

                                    <input type="hidden" name="login" value="login" />
                                    <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
" />

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                               <input class="form-control" type="text" name="username" required="" placeholder="<?php echo $_smarty_tpl->tpl_vars['_USERNAME']->value;?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                              <input class="form-control" type="password" name="password" required="" placeholder="<?php echo $_smarty_tpl->tpl_vars['_PASSWORD']->value;?>
">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <div class="checkbox checkbox-success">
                                                    <input id="checkbox-signup" type="checkbox" checked>
                                                    <label for="checkbox-signup">
                                                        <?php echo $_smarty_tpl->tpl_vars['_REMEMBER_ME']->value;?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                     <?php if (do_config(55)==1) {?>
                                       <div class="form-group">
                                            <div class="col-xs-12">
                                              <label for="password"><?php echo $_smarty_tpl->tpl_vars['_PROVE_YOUR_HUMAN']->value;?>
<span class="required">*</span></label>
										      	<div id="recaptcha-widget" class="g-recaptcha" data-sitekey="<?php echo do_config(5);?>
"></div>
                                            </div>
  									   </div>
                                     <?php }?>
                                    <div class="form-group text-center m-t-30">
                                        <div class="col-sm-12">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
auth/forgot-password" class="text-muted"><i class="fa fa-lock m-r-5"></i> <?php echo $_smarty_tpl->tpl_vars['_FORGOT_PASSWORD']->value;?>
?</a>
                                        </div>
                                    </div>
                                        <div class="form-group text-center">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-black waves-effect waves-light" type="submit"><i class="fa fa-key"></i> <?php echo $_smarty_tpl->tpl_vars['_SIGN_IN']->value;?>
</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row m-t-50">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['_NO_ACCOUNT']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
auth/signup" class="text-primary m-l-5"><b><?php echo $_smarty_tpl->tpl_vars['_SIGN_UP']->value;?>
</b></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->
                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->

 <?php echo $_smarty_tpl->getSubTemplate ('./Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
