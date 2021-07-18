<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 13:54:23
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Users/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108362841760cdf70f180d17-77494005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '029628a50fdae60f3fbd31ea77a0ac8ff0cf36f7' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Users/add.tpl',
      1 => 1624109049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108362841760cdf70f180d17-77494005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'do_exist' => 0,
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
    'prmcode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdf70f1acf06_95705810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdf70f1acf06_95705810')) {function content_60cdf70f1acf06_95705810($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
    <?php if ($_smarty_tpl->tpl_vars['do_exist']->value) {?><div class="alert alert-danger">Error: Username/Email Already Exist! Please Try again.</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ('../Users/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        					<form class="form-horizontal" method="POST">
                                                <input type="hidden" name="add-user" value="add-user"/>
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                     <select name="role" class="form-control">
                                                      <option value="admin">Admin</option>
                                                      <option value="publisher">Publisher</option>
                                                      <option value="advertiser">Advertiser</option>
                                                     </select>
                                                    </div>
                                                 </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                    <select name="status" class="form-control">
                                                     <option value="1">Active</option>
                                                     <option value="2">Inactive</option>
                                                    </select>
                                                   </div>
                                                </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="username" class="form-control" placeholder="Username">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="email" name="email" class="form-control" placeholder="Email"/>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="password" name="password" class="form-control" placeholder="Password">
	                                                </div>
	                                            </div>

                                            <button type="submit" class="btn btn-black waves-effect w-md m-b-5"
                                            <?php if (!$_smarty_tpl->tpl_vars['prmcode']->value) {?> data-toggle="tooltip" data-placement="top" title="" data-original-title="Go Premium To Unlock This Feature" <?php }?>>
                                                   <i class="fa fa-plus-circle"></i> Add
                                            </button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->


<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
