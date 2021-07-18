<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 11:18:25
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Websites/addcat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1031928249605336c160b070-59459922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f61b4300d4a217c108ea25ae23805c90ad7609' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Websites/addcat.tpl',
      1 => 1616066302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1031928249605336c160b070-59459922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_605336c16383c2_86547929',
  'variables' => 
  array (
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605336c16383c2_86547929')) {function content_605336c16383c2_86547929($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div><?php }?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('../Websites/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="add-category" value="add-category"/>
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="name" class="form-control" placeholder="Name">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-7">
	                                                    
	                                                    <label for="switch"> Status</label>
	                                                    <input type="checkbox" name="status" switch="primary" checked="" data-plugin="switchery" data-color="#039cfd">
	                                                </div>
	                                            </div>

                                               <button type="submit" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Add</button>
	                                        </form>
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
