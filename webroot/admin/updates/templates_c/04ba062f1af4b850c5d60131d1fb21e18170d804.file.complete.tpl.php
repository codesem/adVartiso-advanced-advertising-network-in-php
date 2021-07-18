<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-15 22:15:49
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Updates/complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74570156078bb155b35a9-93232419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04ba062f1af4b850c5d60131d1fb21e18170d804' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Updates/complete.tpl',
      1 => 1616930520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74570156078bb155b35a9-93232419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'csrfToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6078bb155c6e35_31779946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6078bb155c6e35_31779946')) {function content_6078bb155c6e35_31779946($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                            <h6>You need to complete this step (Updating Database)</h6>
                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>

                                               <button type="submit" name="complete" value="complete" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Complete</button>
	                                        </form>
                                </div> <!-- end card -->
                              
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
