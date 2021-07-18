<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-29 03:51:28
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Users/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1273236899608a2d401b8d84-47228858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf82b477ffc206b0fd94141ad38560127d4bd77' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Users/view.tpl',
      1 => 1618321376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1273236899608a2d401b8d84-47228858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'r_id' => 0,
    'r_status' => 0,
    'r_username' => 0,
    'r_role' => 0,
    'r_email' => 0,
    'ad_balance' => 0,
    'pub_balance' => 0,
    'referral_earnings' => 0,
    'r_created' => 0,
    'r_login_ip' => 0,
    'r_register_ip' => 0,
    'r_first_name' => 0,
    'r_last_name' => 0,
    'r_country' => 0,
    'r_address_one' => 0,
    'r_address_two' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608a2d401d3478_16723592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a2d401d3478_16723592')) {function content_608a2d401d3478_16723592($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                           aria-expanded="true" aria-controls="collapseOne">
                            Account Info</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                           <tr>
                             <td>Id</td>
                             <td>#<?php echo $_smarty_tpl->tpl_vars['r_id']->value;?>
</td>
                           </tr>
                           <tr>
                            <td>Status</td>
                            
                          <?php if ($_smarty_tpl->tpl_vars['r_status']->value=='1') {?>
                            <td>Active</td>
                          <?php } elseif ($_smarty_tpl->tpl_vars['r_status']->value=='2') {?>
                            <td>Pending</td>
                          <?php } elseif ($_smarty_tpl->tpl_vars['r_status']->value=='3') {?>
                            <td>Inactive</td>
                          <?php }?>
                          
                            </tr>
                            <tr>
                             <td>Username</td>
                             <td><?php echo $_smarty_tpl->tpl_vars['r_username']->value;?>
</td>
                            </tr>
                            <tr>
                              <td>Role</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['r_role']->value;?>
</td>
                            </tr>
                            <tr>
                              <td>Email</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['r_email']->value;?>
</td>
                            </tr>
                            <tr>
                                <td>Advertiser balance</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ad_balance']->value;?>
</td>
                            </tr>
                            <tr>
                                <td>Publisher Earnings</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['pub_balance']->value;?>
</td>
                            </tr>
                            <tr>
                                <td>Referral Earnings</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['referral_earnings']->value;?>
</td>
                            </tr>
                            <tr>
                              <td>Created</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['r_created']->value;?>
</td>
                            </tr>
                        </table>
                    </div>
                </div>
           </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            IP Info</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>Login IP</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['r_login_ip']->value;?>
</td>
                            </tr>
                            <tr>
                                <td>Registred IP</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['r_register_ip']->value;?>
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
                            Billing Info</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <td>First Name</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['r_first_name']->value;?>
</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['r_last_name']->value;?>
</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['r_country']->value;?>
</td>
                            </tr>
                            <tr>
                                <td>Address Line 1</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['r_address_one']->value;?>
</td>
                            </tr>
                            <tr>
                                <td>Address Line 2</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['r_address_two']->value;?>
</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <?php echo $_smarty_tpl->getSubTemplate ('../Layout/back.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
 <?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
