<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-17 20:04:37
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Users/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:416558069605260d5dbeac1-68189419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '669ffe2e11a292a3f500da1e29d3e9f1b9a3b55d' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Users/edit.tpl',
      1 => 1615848328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '416558069605260d5dbeac1-68189419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'succ' => 0,
    'us_id1' => 0,
    'role1' => 0,
    'status1' => 0,
    'username1' => 0,
    'email1' => 0,
    'publisher_earnings' => 0,
    'advertiser_balance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_605260d5e2b9f7_69986326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605260d5e2b9f7_69986326')) {function content_605260d5e2b9f7_69986326($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title> Edit User - Admin</title>

     <div class="content">
            <div class="container-fluid">
  <?php if ($_smarty_tpl->tpl_vars['succ']->value) {?><br><br><div class='alert alert-success' >You have changed user #<?php echo $_smarty_tpl->tpl_vars['us_id1']->value;?>
 with success!</div><?php }?>
           <br>
<br>
 <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">border_color</i>
                </div>
                <br>
                <h4 class="card-title">Edit User #<?php echo $_smarty_tpl->tpl_vars['us_id1']->value;?>
</h4>
                <div class="card-content">
                    <br>
                    <form id="changeDataVO" class="form form-horizontal" data-toggle="validator" method="POST">
                       <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Role
                            </label>
                            <div class="col-sm-6">
                                    <select id="form-control-6" name="role" class="form-control" data-msg-required="Please select a status admin!." required="true"style="height: 45px;">
                                        <option value="" disabled="disabled" >Select...</option>
            <option value="admin" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['role1']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='admin') {?> selected="selected" <?php } else {
}?>>Admin</option>
   
            <option value="publisher"  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['role1']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='publisher') {?> selected="selected" <?php } else {
}?> >Publisher</option>

            
            <option value="advertiser" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['role1']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='advertiser') {?> selected="selected" <?php } else {
}?> >Advertiser</option>

            
                                    </select>
                                </div>
                            </div>
                   
                       <div class="form-group">
                            <label for="paymentWay" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Status
                            </label>
                            <div class="col-sm-6">
                                    <select id="form-control-6" name="status" class="form-control" data-msg-required="Please select a status admin!." required="true"style="height: 45px;">
                                        <option value="" disabled="disabled" selected="selected">Select...</option>
              <option value="1" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status1']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==1) {?> selected="selected" <?php } else {
}?> >Active</option>

            
            <option value="2" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status1']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5==2) {?> selected="selected" <?php } else {
}?> >Pending</option>

            
            <option value="3"<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status1']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6==3) {?> selected="selected" <?php } else {
}?>>Inactive</option>

                                    </select>
                                </div>
                            </div>
                    
                        
                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Username
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="username" class="form-control" type="text" data-msg-required="The field must not be empty." required="true" maxlength="100"style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['username1']->value;?>
"/>
                                </div>
                            </div>
                 
                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Email
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="email" class="form-control" type="email" data-msg-required="The field must not be empty." required="true" maxlength="100" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['email1']->value;?>
"/>
                                </div>
                            </div>
                        <?php if ($_smarty_tpl->tpl_vars['role1']->value=='publisher') {?> 
         
                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Pub Balance
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="publisher_earnings" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['publisher_earnings']->value;?>
"/>
                                </div>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['role1']->value=='advertiser') {?>
         
                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                              Adv Balance
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="advertiser_balance" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['advertiser_balance']->value;?>
"/>
                                </div>
                            </div>
                        <?php } else { ?>

                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Pub Balance
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="publisher_earnings" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['publisher_earnings']->value;?>
"/>
                                </div>
                            </div>
                            
                        <div class="form-group">
                            <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Adv Balance
                            </label>
                            <div class="col-sm-6">
                                    <input id="form-control-4" name="advertiser_balance" class="form-control" type="text" required="true" style="height: 45px;" value="<?php echo $_smarty_tpl->tpl_vars['advertiser_balance']->value;?>
"/>
                                </div>
                            </div>
                            
                            
                        <?php }?>


                        <div class= "form-group" style="display:inline-block;margin-right:1px;">  
                            <div class="col-sm-1 col-sm-offset-1">

                                <h5 style="color: red"></h5>
                                <h5 style="color: #00a000"></h5>

                                <br>
                                <input class="btn btn-info" name="change" type="submit" value="Save" />

                            </div>
                        </div>
                        
                        <div class= "form-group" style="display:inline-block;">  
                            <div class="col-sm-1 col-sm-offset-1">

                                <h5 style="color: red"></h5>
                                <h5 style="color: #00a000"></h5>

                                <br>
                                <input class="btn btn-danger" name="delete" type="submit" value="Delete" onclick="if (confirm(&quot;We Are Going To Delete All Data Related To This User, Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"/>

                            </div>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
