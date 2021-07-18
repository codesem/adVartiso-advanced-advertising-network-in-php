<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-24 14:30:16
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Announcements/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1277959964605b4cf8a47c79-05863431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8270f1f1c4ba836f3440cd87e4dbee8ea295aea2' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Announcements/index.tpl',
      1 => 1616106331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1277959964605b4cf8a47c79-05863431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'added' => 0,
    'updated' => 0,
    'deactivated' => 0,
    'activated' => 0,
    'deleted' => 0,
    'do_error' => 0,
    'announcements' => 0,
    'foo' => 0,
    'ADM' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_605b4cf8a69813_77934510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605b4cf8a69813_77934510')) {function content_605b4cf8a69813_77934510($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 
                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['added']->value) {?><div class="alert alert-success">Announcement Added Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class="alert alert-success">Announcement Updated Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['deactivated']->value) {?><div class='alert alert-success'>Announcement Deactivated Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['activated']->value) {?><div class='alert alert-success'>Announcement Activated Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class="alert alert-success">Announcement Deleted Successfully</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
                                   <?php echo $_smarty_tpl->getSubTemplate ('../Announcements/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                     <div class="table-responsive">
                                                    <table class="table m-0">

                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-pencil"></i> Title</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-calendar"></i> Date</th>
                                                                <th><i class="fa fa-eye"></i> View</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                            <tr>
                                                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
</th>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</td>
                                                                <td>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']=='on') {?>
                                                               <span class="badge badge-success">Active</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='off') {?>
                                                               <span class="badge badge-danger">Inactive</span>
                                               <?php }?></td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['created'];?>
</td>
                                                                <td>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['link'];?>
" target="_blank" class="badge badge-info">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </td>
                                                                
                                                                                                                                <td>
                <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']=='on') {?>
                    <form method="POST">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                      <button class="btn btn-danger btn-xs" type="submit" name="deactivate" value="deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Deactivate</button>
                    </form>
               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='off') {?>
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
                   <form action="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
/" method="POST">
                    <button class="btn btn-success btn-xs">Edit</button>
                   </form>
                  </td>
                    
                                                            </tr>
                                               <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                               <?php if (!$_smarty_tpl->tpl_vars['announcements']->value) {?><span class="badge badge-danger elem-center" style="margin-left: 200px;">No announcements was Found..</span><?php }?>
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
