<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-05-01 00:14:39
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Campaigns/directs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:528612377608a2e806d89c3-72422377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a51aee691d13d5f462c1fddec44272a6eb61f4f6' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Campaigns/directs.tpl',
      1 => 1619828036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '528612377608a2e806d89c3-72422377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608a2e806ffa10_48259925',
  'variables' => 
  array (
    'marked' => 0,
    'updated' => 0,
    'deactivated' => 0,
    'activated' => 0,
    'deleted' => 0,
    'do_error' => 0,
    'directs' => 0,
    'foo' => 0,
    'ADM' => 0,
    'csrfToken' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a2e806ffa10_48259925')) {function content_608a2e806ffa10_48259925($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     <?php if ($_smarty_tpl->tpl_vars['marked']->value) {?><div class="alert alert-success">Campaign Marked Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class="alert alert-success">Campaign Updated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deactivated']->value) {?><div class='alert alert-success'>Campaign Deactivated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['activated']->value) {?><div class='alert alert-success'>Campaign Activated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class="alert alert-success">Campaign Deleted Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
     <?php echo $_smarty_tpl->getSubTemplate ('../Campaigns/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                   <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['directs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                     <div id="modal-<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="modal fade" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                         <div class="modal-dialog" style="width:70%; max-width: none;">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h4 class="modal-title mt-0">Mark Campaign #<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
</h4>
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">×</span>
                                                     </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="text-center">
                                                            <span class="badge badge-success"><i class="fa fa-check-circle"></i> Mark Campaign As:</span>
                                                        </div><hr>
                                                        <form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/mark">
                                                            
                                                            <input type="hidden" name="mark" value="mark"/>
                                                            <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
                                                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"/>
                                                            <div class="form-group">
                                                                <div class="col-md-6" style="margin-left: 225px;">
                                                                    <select name="filter" class="form-control">
                                                                        <option value="clean" <?php if ($_smarty_tpl->tpl_vars['foo']->value['filter']=='clean') {?>selected="selected"<?php }?>>CLEAN - Clean Campaign</option>
                                                                        <option value="nsfw" <?php if ($_smarty_tpl->tpl_vars['foo']->value['filter']=='nsfw') {?>selected="selected"<?php }?>>NSFW - Nudity or other content not suitable for work</option>
                                                                        <option value="gamble" <?php if ($_smarty_tpl->tpl_vars['foo']->value['filter']=='gamble') {?>selected="selected"<?php }?>>GAMBLING - Games of chance, HYIPs, ponzi schemes</option>
                                                                        <option value="shady" <?php if ($_smarty_tpl->tpl_vars['foo']->value['filter']=='shady') {?>selected="selected"<?php }?>>SHADY - Ads that pass other filters, but might be considered inappropriate by publishers</option>
                                                                        <option value="risky" <?php if ($_smarty_tpl->tpl_vars['foo']->value['filter']=='risky') {?>selected="selected"<?php }?>>RISKY - High risk investments</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" style="margin-left: 225px;">
                                                                <button type="submit" class="btn btn-black waves-effect btn-xs"><i class="fa fa-check-circle"></i> Mark</button>
                                                            </div>
                                                        </form>
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
                                                                <th><i class="fa fa-bar-chart"></i> Clicks</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['directs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['clicks'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_clicks'];?>
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
               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='3'||$_smarty_tpl->tpl_vars['foo']->value['status']=='4'||$_smarty_tpl->tpl_vars['foo']->value['status']=='5') {?>
                     <button class="btn btn-black btn-xs" disabled="disabled">No Access</button>
              <?php }?>
                    </td>
                    <td>
                        <a href="" class="btn btn-black btn-xs" data-toggle="modal" data-target="#modal-<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
">
                            <i class="fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Mark Campaign"></i>
                        </a>
                    </td> 
                   <td>
                     <form method="POST">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                      <button class="btn btn-warning btn-xs" type="submit" name="delete" value="delete" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Delete</button>
                     </form> 
                    </td>
                                                            </tr>
                                               <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                               <?php if (!$_smarty_tpl->tpl_vars['directs']->value) {?>
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No directs was Found..</span>
                                               </div>
                                               <?php }?>
                               </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="text-align: center"> 
                           <?php if ($_smarty_tpl->tpl_vars['directs']->value) {?>
                             <ul class="pagination">
                                       <?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
 
                             </ul>
                           <?php }?>
                        </div>
                        <!-- end pagination -->
                       </div>
                
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
