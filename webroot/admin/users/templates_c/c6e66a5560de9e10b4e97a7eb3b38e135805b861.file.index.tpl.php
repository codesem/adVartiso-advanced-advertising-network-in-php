<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-12-27 01:10:43
         compiled from "/home2/mrporeek/creativeocean.pw/webroot/template/Metro/Admin/Users/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16775584795fe833731ca5f5-48724267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6e66a5560de9e10b4e97a7eb3b38e135805b861' => 
    array (
      0 => '/home2/mrporeek/creativeocean.pw/webroot/template/Metro/Admin/Users/index.tpl',
      1 => 1550303088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16775584795fe833731ca5f5-48724267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_n' => 0,
    'deactivate' => 0,
    'activate' => 0,
    'succ' => 0,
    'deleted' => 0,
    'with' => 0,
    'foo' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fe83373212b20_69959206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe83373212b20_69959206')) {function content_5fe83373212b20_69959206($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>Users (<?php echo $_smarty_tpl->tpl_vars['user_n']->value;?>
) - Admin</title>

  
      <div class="content">
            <div class="container-fluid">

 <?php if ($_smarty_tpl->tpl_vars['deactivate']->value) {?>
<div class='alert alert-success'>User Deactivated Successfully</div>
 <?php }?>

 <?php if ($_smarty_tpl->tpl_vars['activate']->value) {?>
<div class='alert alert-success'>User Activated Successfully</div>
 <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['succ']->value) {?>
<div class='alert alert-success' >You have Add user with success!</div>
<?php }?>
         
<?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class='alert alert-success'>User Deleted Successfully</div><?php }?>
            <br>
   <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">people</i>
                </div>
                <br>
                <h4 class="card-title">Users (<?php echo $_smarty_tpl->tpl_vars['user_n']->value;?>
)</h4>
                <div class="card-content">
                    <br>
                            <div class="table-responsive">
                                <table class="table table-middle">
                                    <thead>
                                    <tr>
                                        <th><div class="fa fa-address-book"></div> Id</th>
                                        <th style="text-align: center"><div class="fa fa-user"></div> Username</th>
                                        <th style="text-align: center"><div class="fa fa-sort"></div> Status</th>

                                        <th style="text-align: center"><div class="fa fa-envelope-o"></div> Email</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-wifi"></div> Login IP</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-calendar"></div> Created</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-mail-reply-all"></div> Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                        <td><b>#<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
</b></td>
                                        
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['foo']->value['username'];?>
</td>

     <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                                        <td style="text-align: center"><span class="btn btn-success text-center btn-xs">Active</span></td>
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>
                                        <td style="text-align: center"><span class="btn btn-warning text-center btn-xs">Pending</span></td>
                                        
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==3) {?>
                                        <td style="text-align: center"><span class="btn btn-danger text-center btn-xs">Inactive</span></td>
                                           <?php }?>

<td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['foo']->value['email'];?>
 </td>

                        <td style="text-align: center"><small><?php echo $_smarty_tpl->tpl_vars['foo']->value['login_ip'];?>
</small></td>
                        
                                        <td style="text-align: center"><small><?php echo $_smarty_tpl->tpl_vars['foo']->value['created'];?>
</small></td>

                            </td>
                        <td style="text-align: center">
                     <form method="POST" action="view?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
">
                            <div class="col-sm-8 col-sm-offset-3">
                      <div class="form-group">
       <input type="hidden" > 
                                <input class="btn btn-info btn-xs" type="submit"
                                       value="View" />
                           
                            </div></div></form>
</td>
            <td style="text-align: center">
                
          <form method="POST" action="edit?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
">
              
            <div class="col-sm-8 col-sm-offset-3">
             <div class="form-group">
       <input type="hidden" > 
       <input class="btn btn-warning btn-xs" type="submit" value="Edit" />
                           
                            </div></div></form>
</td>
     <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                                    
                        <td style="text-align: center">
                                                <form method="POST">
                            <div class="col-sm-8 col-sm-offset-3">
                      <div class="form-group">
       <input type="hidden" name="u_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
"> 
        
                                <input class="btn btn-danger btn-xs" type="submit" name="deactivate"
                                       value="Deactivate"  onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"/>
                           
                            </div></div></form>
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>

                        <td style="text-align: center">
                                                <form method="POST">
                            <div class="col-sm-8 col-sm-offset-3">
                      <div class="form-group">
       <input type="hidden" name="u_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
"> 
        
                                <input class="btn btn-success btn-xs" type="submit" name="activate"
                                       value="Activate"/>
                           
                            </div></div></form>
                            
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==3) {?>
                        <td style="text-align: center">
                                                <form method="POST">
                            <div class="col-sm-8 col-sm-offset-3">
                      <div class="form-group">
       <input type="hidden" name="u_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
"> 
        
                                <input class="btn btn-success btn-xs" type="submit" name="activate"
                                       value="Activate"/>
                           
                            </div></div></form>
                                           <?php }?>
                                        </tr>
    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                                    </div>
                    </div>
                </div>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['user_n']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?>

<div class="row" style="text-align: center">
                    
<ul class="pagination"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
 </ul></div>

<?php } else { ?>

<center><span class="alert alert-danger text-center">No users to show...</span></center>

<?php }?>
                
            </div>                        </div>
        </div>


<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
