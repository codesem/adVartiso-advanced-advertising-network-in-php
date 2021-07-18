<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-22 04:45:25
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Banlist/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19554286486069b378a78557-03862210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae92457d7f32dc11a1ce6647ebc21598fe6d6f7' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Banlist/index.tpl',
      1 => 1619066724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19554286486069b378a78557-03862210',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6069b378a9b875_64037973',
  'variables' => 
  array (
    'added' => 0,
    'deleted' => 0,
    'deactivated' => 0,
    'activated' => 0,
    'do_error' => 0,
    'banlist' => 0,
    'foo' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6069b378a9b875_64037973')) {function content_6069b378a9b875_64037973($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                       <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     <?php if ($_smarty_tpl->tpl_vars['added']->value) {?><div class="alert alert-success">IP Added Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class="alert alert-success">IP Deleted Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deactivated']->value) {?><div class='alert alert-success'>IP BlackListed Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['activated']->value) {?><div class='alert alert-success'>IP WhiteListed Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
     <?php echo $_smarty_tpl->getSubTemplate ('../Banlist/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

     <div class="text-center">
         <span class="badge badge-danger"><i class="fa fa-ban"></i> Blacklisted IP(s) Can't Login/signup</span>
     </div><br>
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-wifi"></i> IP</th>
                                                                <th><i class="fa fa-comment"></i> Reason</th>
                                                                <th><i class="fa fa-calendar"></i> Date</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                            <tr>
                                                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
</th>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['ip_address'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['reason'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['created'];?>
</td>
                                                                <td>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                                                               <span class="badge badge-success">Whitelisted</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>
                                                               <span class="badge badge-danger">Blacklisted</span>
                                               <?php }?>
                                                                </td>
                                                                <td>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']=='1') {?>
                                                    <form method="POST">
                                                       <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                                                       <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Blacklist</button>
                                                    </form>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='2') {?>
                                                    <form method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                                                        <button class="btn btn-success btn-xs" type="submit" name="activate" value="activate">Whitelist</button>
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
                                                                                                                        </tr>
                                               <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                               <?php if (!$_smarty_tpl->tpl_vars['banlist']->value) {?>
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No IP(s) was Found..</span>
                                               </div>
                                               <?php }?>
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           <?php if ($_smarty_tpl->tpl_vars['banlist']->value) {?>
                             <ul class="pagination">
                                       <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
 
                             </ul>
                           <?php }?>
                        </div>
                        <!-- end pagination -->
                       </div>
                
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
