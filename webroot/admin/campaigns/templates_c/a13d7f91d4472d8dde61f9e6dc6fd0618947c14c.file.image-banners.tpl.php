<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-14 16:05:33
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Campaigns/image-banners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148649809960657e2ee8c4a2-10106403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a13d7f91d4472d8dde61f9e6dc6fd0618947c14c' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Campaigns/image-banners.tpl',
      1 => 1618415767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148649809960657e2ee8c4a2-10106403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60657e2eeb58f7_88865130',
  'variables' => 
  array (
    'updated' => 0,
    'deactivated' => 0,
    'activated' => 0,
    'deleted' => 0,
    'do_error' => 0,
    'imgbanners' => 0,
    'foo' => 0,
    'UPD' => 0,
    'ADM' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60657e2eeb58f7_88865130')) {function content_60657e2eeb58f7_88865130($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class="alert alert-success">Campaign Updated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deactivated']->value) {?><div class='alert alert-success'>Campaign Deactivated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['activated']->value) {?><div class='alert alert-success'>Campaign Activated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class="alert alert-success">Campaign Deleted Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
     <?php echo $_smarty_tpl->getSubTemplate ('../Campaigns/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                   <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imgbanners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                     <div id="modal-<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                         <div class="modal-dialog" style="width:70%; max-width: none;">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h4 class="modal-title mt-0">Image #<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
</h4>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">×</span>
                                                     </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="text-center">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['UPD']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['image'];?>
" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                   <?php } ?>
                                     <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-user"></i> User</th>
                                                                <th><i class="fa fa-link"></i> Url</th>
                                                                <th><i class="fa fa-dollar"></i> Spend</th>
                                                                <th><i class="fa fa-money"></i> Price</th>
                                                                <th><i class="fa fa-eye"></i> Views</th>
                                                                <th><i class="fa fa-bar-chart"></i> Clicks</th>
                                                                <th><i class="fa fa-code"></i> Size</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-image"></i> IMG</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imgbanners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                            <tr>
                                                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
</th>
                                                                <td>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
users/view/<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
/" class="badge badge-info">
                                                                        <i class="fa fa-user"></i>
                                                                    </a>
                                                                </td>
                                                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['url'];?>
" class="badge badge-danger" target="_blank"><i class="fa fa-link"></i></a></td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['price'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_price'];?>
</td>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['method']=='clicks') {?>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['views'];?>
</td>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['method']=='views') {?>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['views'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_views'];?>
</td>
                                               <?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['method']=='views') {?>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['clicks'];?>
</td>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['method']=='clicks') {?>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['clicks'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_clicks'];?>
</td>
                                               <?php }?>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_size'];?>
</td>
                                                                <td>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']=='1') {?>
                                                               <span class="badge badge-success">Active</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='2') {?>
                                                               <span class="badge badge-danger">Pending</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='3') {?>
                                                               <span class="badge badge-info">Completed</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='4') {?>
                                                               <span class="badge badge-warning">Paused</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='5') {?>
                                                               <span class="badge badge-danger">Inactive</span>
                                               <?php }?></td>
                                                                <td>
                                                                    <a href="" class="btn btn-black btn-xs" data-toggle="modal" data-target="#modal-<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
">
                                                                        <i class="fa fa-image"></i>
                                                                    </a>
                                                                </td>                                                                
                                                                <td>
                <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']=='1') {?>
                    <form method="POST">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Deactivate</button>
                    </form>
               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='2') {?>
                   <form method="POST">
                     <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                     <button class="btn btn-success btn-xs" type="submit" name="activate" value="activate">Activate</button>
                   </form>
                    <form method="POST">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="reject" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">ٌReject</button>
                    </form>
               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='3'||$_smarty_tpl->tpl_vars['foo']->value['status']=='4'||$_smarty_tpl->tpl_vars['foo']->value['status']=='5') {?>
                     <button class="btn btn-black btn-xs" disabled="disabled">No Access</button>
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
                                               <?php if (!$_smarty_tpl->tpl_vars['imgbanners']->value) {?>
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No image banners was Found..</span>
                                               </div>
                                               <?php }?>
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           <?php if ($_smarty_tpl->tpl_vars['imgbanners']->value) {?>
                             <ul class="pagination">
                                       <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
 
                             </ul>
                           <?php }?>
                        </div>
                        <!-- end pagination -->
                       </div>
                
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
