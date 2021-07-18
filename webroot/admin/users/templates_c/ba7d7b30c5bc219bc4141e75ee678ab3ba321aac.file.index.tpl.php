<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 15:45:45
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Users/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743571626605260c2b8c008-47239029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba7d7b30c5bc219bc4141e75ee678ab3ba321aac' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Users/index.tpl',
      1 => 1616082313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743571626605260c2b8c008-47239029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_605260c2bbcec0_64376156',
  'variables' => 
  array (
    'deactivated' => 0,
    'activated' => 0,
    'deleted' => 0,
    'added' => 0,
    'updated' => 0,
    'do_error' => 0,
    'search' => 0,
    'data' => 0,
    'members' => 0,
    'foo' => 0,
    'ADM' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605260c2bbcec0_64376156')) {function content_605260c2bbcec0_64376156($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                       <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     <?php if ($_smarty_tpl->tpl_vars['deactivated']->value) {?><div class="alert alert-success">User Deactivated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['activated']->value) {?><div class="alert alert-success">User Activated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class="alert alert-success">User Deleted Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['added']->value) {?><div class="alert alert-success">User Added Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class="alert alert-success">User Updated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
     <?php echo $_smarty_tpl->getSubTemplate ('../Users/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <form class="form-vertical" method="GET">
           <div class="form-group">
             <div class="col-sm-3">
             <select name="search" class="form-control">
               <option value="username" <?php if ($_smarty_tpl->tpl_vars['search']->value=="username") {?>selected<?php }?>>Username</option>
               <option value="email" <?php if ($_smarty_tpl->tpl_vars['search']->value=="email") {?>selected<?php }?>>E-mail</option>
               <option value="status" <?php if ($_smarty_tpl->tpl_vars['search']->value=="status") {?>selected<?php }?>>Status (1=active, 2=inactive, 3=pending)</option>
               <option value="login_ip" <?php if ($_smarty_tpl->tpl_vars['search']->value=="login_ip") {?>selected<?php }?>>Login IP</option>
               <option value="register_ip" <?php if ($_smarty_tpl->tpl_vars['search']->value=="register_ip") {?>selected<?php }?>>Registred IP	</option>
             </select>
             </div>
           </div>
	       <div class="form-group">
	         <div class="col-md-3">
	          <input type="text" name="data" class="form-control" placeholder="Search..." value="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
">
	         </div>
	       </div>
           <button type="submit" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Search</button>
	       </form>
	                                 <hr>
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-user"></i> Username</th>
                                                                <th><i class="fa fa-envelope-o"></i> Email</th>
                                                                <th><i class="fa fa-wifi"></i> Login IP</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-eye"></i> View</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                            <tr>
                                                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
</th>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['username'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['email'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['login_ip'];?>
</td>
                                                                <td>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                                                               <span class="badge badge-success">Active</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>
                                                               <span class="badge badge-danger">Inactive</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==3) {?>
                                                               <span class="badge badge-warning">Pending</span>
                                               <?php }?></td>
                                                                <td>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
users/view/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
/" class="badge badge-info">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </td>
                                                                 <td>
                <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                    <form method="POST">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Deactivate</button>
                    </form>
               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2||$_smarty_tpl->tpl_vars['foo']->value['status']==3) {?>
                   <form method="POST">
                     <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                     <button class="btn btn-success btn-xs" type="submit" name="activate" value="activate">Activate</button>
                   </form>
              <?php }?>
                    </td>
                   <td>
                     <form method="POST">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                      <button class="btn btn-warning btn-xs" type="submit" name="delete" value="Delete" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Delete</button>
                     </form> 
                    </td>
                    <td>
                     <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
users/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
/">
                      <button class="btn btn-success btn-xs" type="submit">Edit</button>
                     </form> 
                    </td>
                    
                                                            </tr>
                                               <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                               <?php if (!$_smarty_tpl->tpl_vars['members']->value) {?><span class="badge badge-danger elem-center" style="margin-left: 200px;">No Users was Found..</span><?php }?>
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                             <ul class="pagination">
                                       <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
 
                             </ul>
                        </div>
                        <!-- end pagination -->
                       </div>
                
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
