<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-02 23:43:51
         compiled from "/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Options/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270985995fefdc6832a4a2-45724735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03f5115e5857a2634a8a83255b05c3b2d6b6d601' => 
    array (
      0 => '/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Options/edit.tpl',
      1 => 1609589825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270985995fefdc6832a4a2-45724735',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fefdc68353798_50675811',
  'variables' => 
  array (
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
    'r_name' => 0,
    'r_symbol' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fefdc68353798_50675811')) {function content_5fefdc68353798_50675811($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                     <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div><?php }?>

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
	                                            <div class="form-group">
                                                    <label for="Method" class="col-sm-10">
                                                        Method Name
                                                    </label>
	                                                <div class="col-md-10">
                                                     <input type="text" name="method" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['r_name']->value;?>
"/>	                                           
                                                    </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="Symbol" class="col-sm-10">
                                                        Symbol
                                                    </label>
	                                                <div class="col-md-10">
	                                                    <input type="text" name="symbol" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['r_symbol']->value;?>
">
	                                                </div>
	                                            </div>

                                               <button type="submit" name="up-options" value="up-options" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Save</button>
	                                        </form>
	                                        <?php echo $_smarty_tpl->getSubTemplate ('../Layout/back.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
