<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-28 11:15:00
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Announcements/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:408470866606065345f4212-80575204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6021880d1300136712405de2261969fb835f8f3' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Announcements/add.tpl',
      1 => 1616106344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '408470866606065345f4212-80575204',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
    'AST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6060653460b1d1_39315786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6060653460b1d1_39315786')) {function content_6060653460b1d1_39315786($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div><?php }?>
                                    <?php echo $_smarty_tpl->getSubTemplate ('../Announcements/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        					<form class="form-horizontal" method="POST">
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="title" class="form-control" placeholder="Title">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
                                                        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
	                                                    <textarea type="text" name="content" id="editor1" rows="10" cols="90" class="form-control" placeholder="content"></textarea>
	                   <?php echo '<script'; ?>
>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1' );
                        <?php echo '</script'; ?>
>
	                                                </div>
	                                            </div>
                                                <button type="submit" name="add-announcement" value="add-announcement" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Add</button>
	                                        </form>
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
