<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-23 10:17:28
         compiled from "/home2/mrporeek/creativeocean.pw/webroot/template/Metro/Admin/Campaigns/create-direct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1226566315600c4c18708fa2-31024693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a3edf5bbb16edfbc91fa638192c0fd3c4c4ce2' => 
    array (
      0 => '/home2/mrporeek/creativeocean.pw/webroot/template/Metro/Admin/Campaigns/create-direct.tpl',
      1 => 1550303088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1226566315600c4c18708fa2-31024693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_600c4c1875cff4_72307998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600c4c1875cff4_72307998')) {function content_600c4c1875cff4_72307998($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <title>Create Direct - Admin</title>
 <div class="content">
            <div class="container-fluid">
                
                <div class="row">

                    <div class="col-md-12">
                
                    <div class="card-content">
                        <div class="alert alert-info alert-with-icon" data-notify="container">
                            <i class="material-icons" data-notify="icon">notifications</i>

                                <span data-notify="message"><b>Note: </b>Create Direct from here mains is <b>Default</b>.
<br><b>Countings :</b> Doesn't count earnings,clicks.
<br><b>Deactivated :</b> You Can Deactivated from your <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index">Campaigns</a></span>
                        </div>
                    </div>

            </div>
            </div>

<br>
       <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="rose">
                    <i class="material-icons">insert_link</i>
                </div>
                <br>
                <h4 class="card-title">Create Direct</h4>
                <div class="card-content">
                    <br>             
  <div class="col-sm-12">
    <div class="demo-form-wrapper">
         <form class="form form-horizontal" method="POST">
                       <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Name
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4"
                                    data-msg-required="The field must not be empty." required="true"
                                    class="form-control" type="text" name="name" placeholder="Please name your direct"style="height: 45px;"/>
                                   <center>
                                </div>
                            </div>

                       <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Link
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4"
                                    data-msg-required="The field must not be empty." required="true"
                                    class="form-control" type="text" name="direct_website" placeholder="Your Website / Link"style="height: 45px;"/>
                                   <center>
                                </div>
                            </div>
                 
                       <center>
 <div class="form-group">

  <div class="col-sm-6">
      
      <div class="form-group">
        <label class="control-label"><div class="fa fa-question-circle" alt="" data-toggle="tooltip" title="Target hits by device type"></div> Device type</label>
        <div>
          <input type="radio" name="direct_device" value="ALL" checked>All
          <input type="radio" name="direct_device" value="PC">PC
          <input type="radio" name="direct_device" value="MOBILE">Mobile
            <p>Target visitors by device type</p>

                                </div>
                            </div>
                        

                        <div class="form-group">
                            <div class="col-sm-1 col-sm-offset-1">

                                <h5 style="color: red"></h5>
                                <h5 style="color: #00a000"></h5>

                                <br>
                                <input class="btn btn-info"
                                name="direct" type="submit"
                                       value="Submit"/>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
    </div>
    </div>
    </div>

        </div>
    </div>
 <?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
