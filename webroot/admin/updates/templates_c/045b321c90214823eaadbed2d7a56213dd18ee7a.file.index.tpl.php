<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-18 02:01:42
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Updates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13263604646069b37e8ed204-49275389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '045b321c90214823eaadbed2d7a56213dd18ee7a' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Updates/index.tpl',
      1 => 1618711299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13263604646069b37e8ed204-49275389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6069b37e901716_70845224',
  'variables' => 
  array (
    'APPversion' => 0,
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6069b37e901716_70845224')) {function content_6069b37e901716_70845224($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
                                    <span id="update-msg"></span><br><hr>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
                                    <form id="upload_form" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="update" value="update"/>
                                        <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
                                        <div class="form-group text-center">
                                            <div class="col-md-6">
                                                <label for="Icon" >ZIP FILE (UPDATE)</label>
                                                    <div id="upload-files" class="upload-file">
                                                        <label for="file-input">
                                                            <i class="fa fa-cloud-upload up-icon"></i>
                                                        </label>
                                                        <input id="file-input" type="file" name="update-file" onchange="uploadUpdate()"/>
                                                    </div>
                                                    <div id="progress" class="progress" style="display: none;">
                                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                                        aria-valuemin="0" aria-valuemax="100" style="width:0%">0%
                                                        </div>
                                                    </div>
                                                    <div id="response" class=""></div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-black waves-effect w-md m-b-5 submitBtn" disabled="disabled"><i class="fa fa-refresh"></i> Update</button>
                                                    </div>
                                            </div>
	                                    </div>
                                    </form><hr>
	                                        <p>You can get your new version by redownload your item.</p>
	                                        <h4>instruction :</h4>
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
