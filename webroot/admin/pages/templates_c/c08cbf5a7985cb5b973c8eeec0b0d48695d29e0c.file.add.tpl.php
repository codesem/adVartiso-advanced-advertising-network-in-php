<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 13:54:44
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Pages/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127574021560cdf72477b820-25320523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08cbf5a7985cb5b973c8eeec0b0d48695d29e0c' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Pages/add.tpl',
      1 => 1624109636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127574021560cdf72477b820-25320523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
    'AST' => 0,
    'prmcode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdf7247a9318_17728438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdf7247a9318_17728438')) {function content_60cdf7247a9318_17728438($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                     <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div><?php }?>
                     <?php echo $_smarty_tpl->getSubTemplate ('../Pages/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        					<form class="form-horizontal" method="POST">
                        					    
                                                <input type="hidden" name="add-page" value="add-page"/>
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
