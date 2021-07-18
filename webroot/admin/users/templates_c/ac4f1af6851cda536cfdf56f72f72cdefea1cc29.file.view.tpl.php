<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-21 21:18:10
         compiled from "/home/creatprs/public_html/metro/webroot/template/Metro/Admin/Users/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18025867225ce46b12ac8006-58298866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac4f1af6851cda536cfdf56f72f72cdefea1cc29' => 
    array (
      0 => '/home/creatprs/public_html/metro/webroot/template/Metro/Admin/Users/view.tpl',
      1 => 1550303088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18025867225ce46b12ac8006-58298866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ucid' => 0,
    'sumbole' => 0,
    'publisher_earnings' => 0,
    'with' => 0,
    'foo' => 0,
    'user_nameref' => 0,
    'createdref' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce46b12b1f998_76668958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce46b12b1f998_76668958')) {function content_5ce46b12b1f998_76668958($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>User #<?php echo $_smarty_tpl->tpl_vars['ucid']->value;?>
 - Admin</title>

<div class="content">
            <div class="container-fluid">
<style>
    div.col-xs-6.col-md-3 {
    width: 1100px;
}

</style>
            </div>
            <center>
        </center>
<br>
    <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">monetization_on</i>
                        </div>
                        <div class="card-content">
                            <p class="category">USD</p>
                            <h4 class="card-title"><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['publisher_earnings']->value;?>
</h4>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-success">account_circle</i>
                                Account Balance
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
              <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">airline_seat_recline_normal</i>
                </div>
                <br>
                <h4 class="card-title">User #<?php echo $_smarty_tpl->tpl_vars['ucid']->value;?>
</h4>
                <div class="card-content">
                    <br> 
       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            Account Info.</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                             <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                            <tr>
                                <td>Id</td>
                                <td>#<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
</td>
                            </tr>
                            <tr>
                                <td>Status</td>
       <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                            <td>Active</td>
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>
                            <td>Pending</td>
                                        
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==3) {?>
                            <td>Inactive</td>
 <?php }?>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['username'];?>
</td>
                            </tr>
                            <tr>
                                <td>role</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['role'];?>
</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['email'];?>
</td>
                            </tr>

                            <tr>
                                <td>Current advertiser balance</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['advertiser_balance'];?>
</td>
                            </tr>
                            <tr>
                                <td>Current Publisher Earnings</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['publisher_earnings'];?>
</td>
                            </tr>
                            <tr>
                                <td>Current Referral Earnings</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['referral_earnings'];?>
</td>
                            </tr>
                            <tr>
                                <td>Modified</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['modified'];?>
</td>
                            </tr>
                            <tr>
                                <td>Created</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['created'];?>
</td>
                            </tr>
                        </table>
                    </div>
                </div>
           </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title" >
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Withdrawal Info.</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>Withdrawal Method</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['withdrawal_method'];?>
</td>
                            </tr>
                            <tr>
                                <td>Withdrawal Account</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['withdrawal_account'];?>
</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Billing Info.                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>First Name</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['first_name'];?>
</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['last_name'];?>
</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['country'];?>
</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading4">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            Referr by                        </a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Username</th>
                                <th>Date</th>
                            </tr>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['user_nameref']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['createdref']->value;?>
</td>
                            </tr>

                 </table>
                    </div>
                </div>
            </div>
        </div>
              <?php } ?>

    </div>
</div>

        </section>
        </div>
 <?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
