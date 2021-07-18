<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-28 21:55:54
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Updates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1496392065606066fe867934-94040120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c90715f42936bef035530c66ec514e91d97981d2' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Updates/index.tpl',
      1 => 1616968550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496392065606066fe867934-94040120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_606066fe87d2c5_38483768',
  'variables' => 
  array (
    'APPversion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_606066fe87d2c5_38483768')) {function content_606066fe87d2c5_38483768($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
')" id="check-btn" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"><i class="fa fa-refresh"></i> Check for Update</button>
                                    </div>
                                    <h6 style="display: inline-block;"><i class="fa fa-spinner" id="loader-version" style="display: none;"></i></h6>
                                    <span id="update-msg"></span><br><hr>
                                    
                                    <span id="response-msg"></span>
                                    <div class="progress" id="progress" style="display: none;">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:0%">0%</div>
                                    </div>

                                    <form id="upload_form" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label for="Icon">ZIP FILE (UPDATE)</label>
                                                <input type="file" name="update-file" class="filestyle" data-buttonname="btn-default" data-iconname="fa fa-cloud-upload" id="filestyle-1" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                                            </div>
	                                    </div>
                                        <button onclick("uploadUpdate()") class="btn btn-black btn-bordered waves-effect w-md m-b-5 submitBtn"><i class="fa fa-refresh"></i> Update</button>
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
