<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-22 11:29:27
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Users/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33270506660cdf050eb5726-35830812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9041481a818510694b38c8af7457fede7a03cacc' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Users/edit.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33270506660cdf050eb5726-35830812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdf050eeed90_85939484',
  'variables' => 
  array (
    'required' => 0,
    'do_error' => 0,
    'do_demo' => 0,
    'csrfToken' => 0,
    'r_role' => 0,
    'r_status' => 0,
    'r_username' => 0,
    'r_email' => 0,
    'r_pub_earnings' => 0,
    'r_ad_balance' => 0,
    'prmcode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdf050eeed90_85939484')) {function content_60cdf050eeed90_85939484($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['do_demo']->value) {?><div class="alert alert-danger">Error: You can't do this action on demo mode.</div><?php }?>
                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="up-user" value="up-user"/>
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
                                                <div class="form-group">
                                                   <label for="Role" class="col-sm-10">
                                                     Role
                                                   </label>
                                                   <div class="col-sm-10">
                                                     <select name="role" class="form-control">
                                                        <option value="admin" <?php if ($_smarty_tpl->tpl_vars['r_role']->value=='admin') {?> selected="selected"<?php }?>>Admin</option>
                                                        <option value="publisher" <?php if ($_smarty_tpl->tpl_vars['r_role']->value=='publisher') {?> selected="selected"<?php }?> >Publisher</option>
                                                        <option value="advertiser" <?php if ($_smarty_tpl->tpl_vars['r_role']->value=='advertiser') {?> selected="selected"<?php }?> >Advertiser</option>
                                                     </select>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Status" class="col-sm-10">
                                                         Status
                                                    </label>
                                                    <div class="col-sm-10">
                                                    <select name="status" class="form-control">
                                                     <option value="1" <?php if ($_smarty_tpl->tpl_vars['r_status']->value=='1') {?> selected="selected"<?php }?> >Active</option>
                                                     <option value="2"<?php if ($_smarty_tpl->tpl_vars['r_status']->value=='2') {?> selected="selected"<?php }?>>Inactive</option>
                                                    </select>
                                                    </div>
                                                </div>
	                                            <div class="form-group">
                                                    <label for="Username" class="col-sm-10">
                                                        Username *
                                                    </label>
	                                                <div class="col-md-10">
                                                     <input name="username" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['r_username']->value;?>
"/>	                                           
                                                    </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="Email" class="col-sm-10">
                                                        Email *
                                                    </label>
	                                                <div class="col-md-10">
                                                      <input name="email" class="form-control" type="email" value="<?php echo $_smarty_tpl->tpl_vars['r_email']->value;?>
"/>
	                                                </div>
	                                            </div>
                        <?php if ($_smarty_tpl->tpl_vars['r_role']->value=='publisher') {?> 
	                                            <div class="form-group">
                                                    <label for="Balance" class="col-sm-10">
                                                        Pub Balance
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="pub_earnings" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['r_pub_earnings']->value;?>
">
	                                                </div>
	                                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['r_role']->value=='advertiser') {?>
	                                            <div class="form-group">
                                                    <label for="Balance" class="col-sm-10">
                                                        Adv Balance
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="ad_balance" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['r_ad_balance']->value;?>
">
	                                                </div>
	                                            </div>
                        <?php } else { ?>
	                                            <div class="form-group">
                                                    <label for="Balance" class="col-sm-10">
                                                        Adv Balance
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="ad_balance" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['r_ad_balance']->value;?>
">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="Balance" class="col-sm-10">
                                                        Pub Balance
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="pub_earnings" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['r_pub_earnings']->value;?>
">
	                                                </div>
	                                            </div>
                        <?php }?>

                                              <button type="submit" class="btn btn-black waves-effect w-md m-b-5" <?php if (!$_smarty_tpl->tpl_vars['prmcode']->value) {?> data-toggle="tooltip" data-placement="top" title="" data-original-title="Go Premium To Unlock This Feature" <?php }?>>
                                                   <i class="fa fa-check-circle"></i> Save
                                              </button>
	                                        </form>
	                                        <?php echo $_smarty_tpl->getSubTemplate ('../Layout/back.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
