<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 21:18:03
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Users/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17245188856053bfc0cce789-69802850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd4cf7e412578ae3ff57321bacc40518833a0aca' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Users/add.tpl',
      1 => 1616102280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17245188856053bfc0cce789-69802850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6053bfc0d332b0_62471172',
  'variables' => 
  array (
    'do_exist' => 0,
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6053bfc0d332b0_62471172')) {function content_6053bfc0d332b0_62471172($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
    <?php if ($_smarty_tpl->tpl_vars['do_exist']->value) {?><div class="alert alert-danger">Error: Username/Email Already Exist! Please Try again.</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>   
    <?php echo $_smarty_tpl->getSubTemplate ('../Users/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        					<form class="form-horizontal" method="POST">
                                              
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
                                                     <option value="2">Pending</option>
                                                     <option value="3">Inactive</option>
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

                                               <button type="submit" name="add-user" value="add-user" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Add</button>
	                                        </form>

                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->


<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
