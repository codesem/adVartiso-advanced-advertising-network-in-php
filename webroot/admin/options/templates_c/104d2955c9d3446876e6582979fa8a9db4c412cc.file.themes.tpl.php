<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-29 16:00:10
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Options/themes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9779192976061f2393e6b02-01540308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '104d2955c9d3446876e6582979fa8a9db4c412cc' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Options/themes.tpl',
      1 => 1617033523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9779192976061f2393e6b02-01540308',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6061f239402b92_90377206',
  'variables' => 
  array (
    'pass' => 0,
    'deactivated' => 0,
    'activated' => 0,
    'deleted' => 0,
    'do_error' => 0,
    'themes' => 0,
    'AST' => 0,
    'foo' => 0,
    'THEME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6061f239402b92_90377206')) {function content_6061f239402b92_90377206($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['pass']->value) {?><div class='alert alert-success'>Theme Uploaded Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['deactivated']->value) {?><div class='alert alert-success'>Theme Deactivated Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['activated']->value) {?><div class='alert alert-success'>Theme Activated Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class="alert alert-success">Theme Deleted Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
                                   <?php echo $_smarty_tpl->getSubTemplate ('../Options/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                   
                                   <form class="form-vertical" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="col-md-5">
                                                <input type="file" name="userfile" class="filestyle" data-buttonname="btn-default" data-iconname="fa fa-cloud-upload" id="filestyle-1" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-bordered waves-effect w-md m-b-5" name="new" value="Upload"><i class="fa fa-plus"></i> Upload</button>
                                    </form>
                                    <hr>
                                    <div class="row">
                            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                        <div class="col-lg-4">
                                            <div class="theme-design" style="margin-right:10px;margin-top: 15px;">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['screen'];?>
" style="width: 100%;height: 100%;">
                                            </div><br>
                                            <form method="POST">
                                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"/>
                                                <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
"/>
                                        <?php if ($_smarty_tpl->tpl_vars['THEME']->value==$_smarty_tpl->tpl_vars['foo']->value['name']) {?>
                                                <button type="submit" class="btn btn-info" disabled="disabled">Activated</button>
                                                <button type="submit" class="btn btn-danger" disabled="disabled">Delete</button>
                                        <?php } else { ?>
                                                <button type="submit" class="btn btn-info" name="activate" value="activate">Activate</button>
                                                <button type="submit" class="btn btn-danger" name="delete" value="delete">Delete</button>
                                        <?php }?>
                                            </form>
                                        </div> 
                            <?php } ?>
                                        <div class="col-lg-4">
                                            <div class="theme-design" style="margin-top: 15px;">
                                                <a href="https://codsem.com/search?term=cardavo" target="_blank" ><img src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
images/new-theme.svg" style="width: 100%;height: 100%;"></a>
                                            </div><br>
                                            <button class="btn btn-info" disabled="disabled">Activate</button>
                                            <button class="btn btn-danger" disabled="disabled">Delete</button>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
