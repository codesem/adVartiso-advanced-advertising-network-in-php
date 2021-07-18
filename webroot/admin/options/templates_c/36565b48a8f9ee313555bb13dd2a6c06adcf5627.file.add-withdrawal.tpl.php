<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-22 02:53:07
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Options/add-withdrawal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9166808796075a0bcbc13b3-34171982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36565b48a8f9ee313555bb13dd2a6c06adcf5627' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Options/add-withdrawal.tpl',
      1 => 1619059801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9166808796075a0bcbc13b3-34171982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6075a0bcbd6a76_18876967',
  'variables' => 
  array (
    'do_error' => 0,
    'required' => 0,
    'do_demo' => 0,
    'csrfToken' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6075a0bcbd6a76_18876967')) {function content_6075a0bcbd6a76_18876967($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_demo']->value) {?><div class="alert alert-danger">Error: You can't do this action on demo mode.</div><?php }?>
                                   <?php echo $_smarty_tpl->getSubTemplate ('../Options/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                   
                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="add-withdrawal" value="add-withdrawal"/>
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="name" class="form-control" placeholder="Name">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="minimum" class="form-control" placeholder="Minimum">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="fee" class="form-control" placeholder="Fee">
	                                                </div>
	                                            </div>

                                               <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-plus-circle"></i> New Withdrawal</button>
	                                        </form>
	                                        <?php echo $_smarty_tpl->getSubTemplate ('../Layout/back.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                 </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
