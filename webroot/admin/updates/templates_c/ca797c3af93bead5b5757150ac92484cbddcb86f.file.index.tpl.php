<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-20 18:24:15
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Updates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103641566860cdd83c0b3c51-19381102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca797c3af93bead5b5757150ac92484cbddcb86f' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Updates/index.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103641566860cdd83c0b3c51-19381102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdd83c0e1eb2_87897036',
  'variables' => 
  array (
    'APPversion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdd83c0e1eb2_87897036')) {function content_60cdd83c0e1eb2_87897036($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <div class="form-vertical">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" disabled="disabled" value="Your version: <?php echo $_smarty_tpl->tpl_vars['APPversion']->value;?>
">
                                            </div>
                                        </div>
                                        <button onclick="CheckUpdate('<?php echo $_smarty_tpl->tpl_vars['APPversion']->value;?>
')" id="check-btn" class="btn btn-primary waves-effect w-md m-b-5"><i class="fa fa-refresh"></i> Check for Update</button>
                                    </div>
                                    <h6 style="display: inline-block;"><i class="fa fa-spinner" id="loader-version" style="display: none;"></i></h6>
                                    <span id="update-msg"></span><hr>
                                    <div id="update-form" style="display: none;">
                                        <div class="text-center">
                                            <h3>Update Your Version</h3>
                                            <p>Click the update button to start.</p>
                                        </div>
                                        <div class="text-center">
                                            <div id="update-data">
                                                <button onclick="DoUpdate('<?php echo $_smarty_tpl->tpl_vars['APPversion']->value;?>
')" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-refresh"></i> Update</button>
                                            </div>
                                        </div>
	                                </div>
	                           </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
