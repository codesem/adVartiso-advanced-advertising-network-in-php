<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-02 02:11:56
         compiled from "/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Updates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18517999765fefd4cc0f0139-25265167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a91639aa74e22ff2bd8b77330f2868f9eb474569' => 
    array (
      0 => '/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Updates/index.tpl',
      1 => 1609553514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18517999765fefd4cc0f0139-25265167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fefd4cc112955_20702635',
  'variables' => 
  array (
    'up_err' => 0,
    'APPversion' => 0,
    'csrfToken' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fefd4cc112955_20702635')) {function content_5fefd4cc112955_20702635($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <?php if ($_smarty_tpl->tpl_vars['up_err']->value) {?><div class="alert alert-danger" >Error: Somthing Is wrong Please try again.</div><?php }?>
                                    
                                    <div class="form-vertical">
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" disabled="disabled" value="Your version: <?php echo $_smarty_tpl->tpl_vars['APPversion']->value;?>
">
                                            </div>
                                        </div>
                                        <button onclick="CheckUpdate('<?php echo $_smarty_tpl->tpl_vars['APPversion']->value;?>
')" id="check-btn" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"><i class="fa fa-refresh"></i> Check for Update</button>
                                    </div>
                                    <h6 style="display: inline-block;"><i class="fa fa-spinner" id="loader-version" style="display: none;"></i></h6>
                                    <span id="update-msg"></span><hr>
                                    
                                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        
                                        <input type="hidden" name="submit" value="submit"/>
                                        <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="Icon">ZIP FILE (UPDATE)</label>
                                                <input type="file" name="userfile" class="filestyle" data-buttonname="btn-default" data-iconname="fa fa-cloud-upload" id="filestyle-1" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                                            </div>
	                                    </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Update</button>
                                    </form><hr>
                                    
	                                        <p>You can get your new version by redownload your item.</p>
	                                        <h4>instraction :</h4>
	                                        <p class="font-600">
	                                            1. Download your new version from where you purchase our script.<br>
	                                            2. Check in >> <em>/updates/</em> folder a zip file.<br>
	                                            3. Upload that zip file to the update form.<br>
	                                        </p>
	                                        <p>Leave a comment in the item (comment section) if you're facing issues</p>
	                           </div> <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
