<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-21 17:41:03
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Announcements/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15784184716077acb03a6ec4-36630429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1b02b2f4aee06c4077e6c708ca4475a97318228' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Announcements/edit.tpl',
      1 => 1618455895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15784184716077acb03a6ec4-36630429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6077acb03bf644_27349537',
  'variables' => 
  array (
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
    'r_title' => 0,
    'AST' => 0,
    'r_content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6077acb03bf644_27349537')) {function content_6077acb03bf644_27349537($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                     <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                     <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div><?php }?>
                        					<form class="form-horizontal" method="POST">
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
	                                            <div class="form-group">
                                                    <label for="Title" class="col-sm-10">
                                                        Title
                                                    </label>
	                                                <div class="col-md-10">
                                                     <input name="title" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['r_title']->value;?>
"/>	                                           
                                                    </div>
	                                            </div>
	                                            <div class="form-group">
                                                    <label for="Content" class="col-sm-10">
                                                        Content
                                                    </label>
	                                                <div class="col-md-10">
                                                      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
                                                      <textarea type="text" name="content" class="form-control" id="editor1" rows="10" cols="90"><?php echo $_smarty_tpl->tpl_vars['r_content']->value;?>
</textarea>
                                                      <?php echo '<script'; ?>
>
                                                      // Replace the <textarea id="editor1"> with a CKEditor
                                                      // instance, using default configuration.
                                                      CKEDITOR.replace( 'editor1' );
                                                      <?php echo '</script'; ?>
>
	                                                </div>
	                                            </div>
                                               <button type="submit" name="up-announcement" value="up-announcement" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-check-circle"></i> Save</button>
	                                        </form>
	                                        <?php echo $_smarty_tpl->getSubTemplate ('../Layout/back.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
