<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 11:47:30
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Updates/complete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12745325860cdd952613fd5-35368805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ed6c47fac66a1a0475cd3a5412a04a32611705d' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Updates/complete.tpl',
      1 => 1616930520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12745325860cdd952613fd5-35368805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'csrfToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdd952638d66_94816297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdd952638d66_94816297')) {function content_60cdd952638d66_94816297($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
