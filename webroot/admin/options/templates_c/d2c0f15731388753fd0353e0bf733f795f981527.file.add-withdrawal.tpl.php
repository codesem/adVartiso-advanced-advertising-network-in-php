<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-22 00:51:09
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Options/add-withdrawal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152950220960cdf462e43cf6-91777976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2c0f15731388753fd0353e0bf733f795f981527' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Options/add-withdrawal.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152950220960cdf462e43cf6-91777976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdf462e74668_51949373',
  'variables' => 
  array (
    'do_error' => 0,
    'required' => 0,
    'do_demo' => 0,
    'csrfToken' => 0,
    'prmcode' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdf462e74668_51949373')) {function content_60cdf462e74668_51949373($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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

                                             <button type="submit" class="btn btn-black waves-effect w-md m-b-5"
                                             <?php if (!$_smarty_tpl->tpl_vars['prmcode']->value) {?> data-toggle="tooltip" data-placement="top" title="" data-original-title="Go Premium To Unlock This Feature" <?php }?>>
                                                   <i class="fa fa-plus-circle"></i> New Withdrawal
                                             </button>
	                                        </form>
	                                        <?php echo $_smarty_tpl->getSubTemplate ('../Layout/back.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                 </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
