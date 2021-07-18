<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-15 19:12:34
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Metro/Admin/Campaigns/create-banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:853696862604fb1a2c56494-41649923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8af70fc5634198eef1b54f71063a086a2796b6ec' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Metro/Admin/Campaigns/create-banner.tpl',
      1 => 1550303088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '853696862604fb1a2c56494-41649923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOST' => 0,
    'upe_error' => 0,
    'size_error' => 0,
    'format_error' => 0,
    'up_error' => 0,
    'cpm_error' => 0,
    'cpc_error' => 0,
    'banner_728x90' => 0,
    'banner_468x60' => 0,
    'banner_300x250' => 0,
    'banner_300x600' => 0,
    'banner_120x600' => 0,
    'banner_200x200' => 0,
    'banner_125x125' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_604fb1a2c948b7_03227667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_604fb1a2c948b7_03227667')) {function content_604fb1a2c948b7_03227667($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <title>Create Banner - Admin</title>
  <div class="content">
            <div class="container-fluid">
                
                <div class="row">

                    <div class="col-md-12">
                
                    <div class="card-content">
                        <div class="alert alert-info alert-with-icon" data-notify="container">
                            <i class="material-icons" data-notify="icon">notifications</i>

                                <span data-notify="message"><b>Note: </b>Create banner from here mains is <b>Default</b>.
<br><b>Countings :</b> Doesn't count earnings,views,clicks.
<br><b>Deactivated :</b> You Can Deactivated from your <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index">Campaigns</a>.</span>
                        </div>
                    </div>

            </div>
            </div>




<?php if ($_smarty_tpl->tpl_vars['upe_error']->value) {?>
<div class="alert alert-danger text-center" >Error: with image banner </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['size_error']->value) {?>
<div class="alert alert-danger" >Error: File size is larger than the allowed limit.</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['format_error']->value) {?>
<div class="alert alert-danger" >Error: Please select a valid file format.</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['up_error']->value) {?>
<div class="alert alert-danger " >Error: There was a problem uploading your file. Please try again.</div>
<?php }?>
                                         
<?php if ($_smarty_tpl->tpl_vars['cpm_error']->value) {?>
<div class="alert alert-danger" >Error: Something wrong! Please try again.</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cpc_error']->value) {?>
<div class="alert alert-danger" >Error: Something wrong! Please try again.</div>
<?php }?>
<br>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">add_photo_alternate</i>
                </div>
                <br>
                <h4 class="card-title">Create Banner</h4>
                <div class="card-content">
                    <br>


           
                    <form  class="form form-horizontal" method="POST" enctype="multipart/form-data">

                           <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Type
                            </label>
                            <div class="col-sm-6">
                                    <select id="select_role" name="banner_type" class="form-control"style="height: 45px;">
                                        <option value="" disabled="disabled" selected="selected">Select...</option>

            <option value="image">Image Banner </option>
            <option value="text">Text Banner </option>
                                    </select>
                                </div>
                            </div>
                     
   <?php echo '<script'; ?>
>
    document.getElementById('select_role').addEventListener('change', function () {
    var style = this.value == 'image' ? 'block' : 'none';
    document.getElementById('hidden_div').style.display = style;
    
    var style = this.value == 'text' ? 'block' : 'none';
    document.getElementById('hidden_text').style.display = style;
    
});
<?php echo '</script'; ?>
>
                       <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                              Title
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4"
                                    data-msg-required="The field must not be empty." required="true"
                                    class="form-control" type="text" name="banner_title" placeholder="Your Website / Link title"style="height: 45px;"/>
                                </div>
                            </div>
       <div id="hidden_text" style="display: yes;">
                       <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                              Description
                            </label>
                            <div class="col-sm-6">
                                    <textarea id="form-control-4"
                                    data-msg-required="The field must not be empty." class="form-control" type="text" name="banner_dsc" placeholder="Your Website / Link description" style="height:100px"></textarea>
                                </div>
                            </div></div>
                            
                       <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                              Link
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4"
                                    data-msg-required="The field must not be empty." required="true"
                                    class="form-control" type="text" name="banner_website" placeholder="Your Website / Link"style="height: 45px;"/>
                                   <center>
                                </div>
                            </div>
                     
                        <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                              Size
                            </label>
                            <div class="col-sm-6">
                                    <select id="form-control-6" name="banner_size" class="form-control"style="height: 45px;">
                                        <option value="" disabled="disabled" selected="selected">Select...</option>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['banner_728x90']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='1') {?>
            <option value="728x90">728x90</option>
<?php }?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['banner_468x60']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='1') {?> 
            <option value="468x60">468x60</option>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['banner_300x250']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='1') {?> 
            <option value="300x250">300x250</option>
<?php }?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['banner_300x600']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='1') {?> 
            <option value="300x600">300x600</option>
<?php }?>

<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['banner_120x600']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=='1') {?> 
            <option value="120x600">120x600</option>
<?php }?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['banner_200x200']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6=='1') {?> 
            <option value="200x200">200x200</option>
<?php }?>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['banner_125x125']->value;?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7=='1') {?> 
            <option value="125x125">125x125</option>
<?php }?>
              
                                    </select>
                                </div>
                            </div>


                       <center>
 <div class="form-group">

  <div class="col-sm-6">
 <div class="input-with-icon">

      <center>
      <div class="form-group">
        <label class="control-label"><div class="fa fa-question-circle" alt="" data-toggle="tooltip" title="Target click/views by device type"></div> Device type</label>
        <div>
          <input type="radio" name="banner_device" value="ALL" checked>All
          <input type="radio" name="banner_device" value="PC">PC
          <input type="radio" name="banner_device" value="MOBILE">Mobile
        </div>
        Target visitors by device type
      </div>
<br><br><br>
<div id="hidden_div" style="display: yes;">
                <div class="form-group">
                <label for="accountNumber" class="col-sm-3 control-label"style="white-space: nowrap; text-align: left; float: left;"><div class="fa fa-question-circle" alt="" data-toggle="tooltip" title="Upload image only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB."></div> Image </label>
               
                <input type="hidden" name="templateBanner">
                <div class="btn btn-primary">
                    <span>Upload File Here</span>
                    <input type="file" class="upload" name="photo">
                </div>
            </div> </div>
      </center>
                                </div>
                            </div>
                        </div>
                        

                        <div class= "form-group">  
                            <div class="col-sm-1 col-sm-offset-1">

                                <h5 style="color: red"></h5>
                                <h5 style="color: #00a000"></h5>

                                <br>
                                <input class="btn btn-info" name="banner" type="submit" value="Submit"/>
                                        
                            </div>
                        </div>
                        
                        </div></div>
                        </form>
                </div>
               </div>
</div> </div>
 <?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
