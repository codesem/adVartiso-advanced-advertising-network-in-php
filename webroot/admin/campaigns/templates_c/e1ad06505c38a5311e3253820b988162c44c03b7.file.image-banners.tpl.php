<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 15:32:30
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Campaigns/image-banners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78692527460536b68c5a695-08474224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1ad06505c38a5311e3253820b988162c44c03b7' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Campaigns/image-banners.tpl',
      1 => 1616081547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78692527460536b68c5a695-08474224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60536b68cf0c77_62181988',
  'variables' => 
  array (
    'updated' => 0,
    'deactivated' => 0,
    'activated' => 0,
    'deleted' => 0,
    'do_error' => 0,
    'imgbanners' => 0,
    'foo' => 0,
    'paging' => 0,
    'with_popup' => 0,
    'HOST' => 0,
    'sumbole' => 0,
    'n_pop' => 0,
    'PopP' => 0,
    'with_direct' => 0,
    'n_direct' => 0,
    'DirectP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60536b68cf0c77_62181988')) {function content_60536b68cf0c77_62181988($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
     <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class="alert alert-success">Campaign Updated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deactivated']->value) {?><div class='alert alert-success'>Campaign Deactivated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['activated']->value) {?><div class='alert alert-success'>Campaign Activated Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class="alert alert-success">Campaign Deleted Successfully</div><?php }?>
     <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
     <?php echo $_smarty_tpl->getSubTemplate ('../Campaigns/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                                                                <th><i class="fa fa-calendar"></i> Date</th>
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
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
</td>
                                                                <td><span class="badge badge-warning"><?php echo $_smarty_tpl->tpl_vars['foo']->value['url'];?>
</span></td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['price'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_price'];?>
</td>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['method']=='clicks') {?>
                                                                <td>0/0</td>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['method']=='views') {?>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['views'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_views'];?>
</td>
                                               <?php }?>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['method']=='views') {?>
                                                                <td>0/0</td>
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
                                                               <span class="badge badge-danger">Inactive</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='3') {?>
                                                               <span class="badge badge-info">Completed</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='4') {?>
                                                               <span class="badge badge-warning">Pending</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='5') {?>
                                                               <span class="badge badge-danger">Unpaid</span>
                                               <?php }?></td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['created'];?>
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



  <div id="Popups" class="tab-pane fade">

                    <div class="panel">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-middle">
                                    
                                    <thead>
                                    <tr>
                                        <th><div class="fa fa-link"></div> Url</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-user "></div> User</th>

                                        <th style="text-align: center"><div class="fa fa-navicon "></div> Type</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-dollar"></div> Spend</th>

                                        <th style="text-align: center"><div class="fa fa-money"></div> Price</th>

                                        <th style="text-align: center"><div class="fa fa-line-chart"></div> Views</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-bar-chart"></div> Clicks</th>

                                        
                                        <th style="text-align: center"><div class="fa fa-unsorted "></div> Status</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-mail-reply-all"></div> Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with_popup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>

                                        <td><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_url'];?>
" target="_blank">
                                        <div class="form-group">
                                        <input class="btn btn-warning" type="submit"
                                       value="View" />
                            </div></form>
                                      </td>

                                        <td style="text-align: center" ><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/users/view?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_user'];?>
">
                                        <div class="form-group">
                                        <input type="hidden" > 
                                        <input class="btn btn-info" type="submit"
                                       value="User #<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_user'];?>
" />
                            </div></form>
                                      </td>

                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['foo']->value['type_spend'];?>
</td>
                                        
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['popup_spend'];?>
</td>
                                        
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['popup_price'];?>
</td>

                        <td style="text-align: center"><?php if ($_smarty_tpl->tpl_vars['foo']->value['type_spend']=='clicks') {
echo $_smarty_tpl->tpl_vars['foo']->value['popup_views'];?>
/0<?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['type_spend']=='views') {
echo $_smarty_tpl->tpl_vars['foo']->value['popup_views'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['pop_views'];
}?> </td>
                        
                        <td style="text-align: center"><?php if ($_smarty_tpl->tpl_vars['foo']->value['type_spend']=='views') {
echo $_smarty_tpl->tpl_vars['foo']->value['popup_clicks'];?>
/0<?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['type_spend']=='clicks') {
echo $_smarty_tpl->tpl_vars['foo']->value['popup_clicks'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['pop_clicks'];
}?></td>

     <?php if ($_smarty_tpl->tpl_vars['foo']->value['popup_status']==1) {?>
                                      <td style="text-align: center"><span class="btn btn-primary">Active</span></td>
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['popup_status']==2) {?>
                                        <td style="text-align: center"><span class="btn btn-info">Inctive</span></td>
                                        
                                        
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['popup_status']==3) {?>
                                         <td style="text-align: center"><span class="btn btn-success">Completed</span></td>
                                        
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['popup_status']==4) {?>
                                         <td style="text-align: center"><span class="btn btn-warning">Pending</span></td>
                                          
                                           
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['popup_status']==5) {?>
                                         <td style="text-align: center"><span class="btn btn-danger">Rejected</span></td>
                                           <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['foo']->value['popup_status']==1) {?>
        <td style="text-align: center">
        <form method="POST">
        <div class="col-sm-8 col-sm-offset-3">
        <div class="form-group">
        <input type="hidden" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_id'];?>
"> 
        
            <input class="btn btn-danger" type="submit" name="deactivate_popup"
            value="Deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"/></div>
            </div></form></td>
            
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['popup_status']==2) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_id'];?>
"> 
               <input class="btn btn-success" type="submit" name="activate_popup" value="Activate"/></div>
                                       </div></form></td>
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['popup_status']==3) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="p_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_id'];?>
"> 
                                <input class="btn btn-warning" type="submit" name="delete_popup"
                                       value="Delete"/></div>
                                       </div></form></td>
                                    <?php }?>
                 
<td  style="text-align: center">

<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/edit?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_id'];?>
&campaign=popup">

<div class="col-sm-8 col-sm-offset-3">

<div class="form-group"><input class="btn btn-warning" type="submit" value="Edit"/>

</div></div></form></td>
<td style="text-align: center">

<select class="btn btn-success" onchange="location = this.value;"> 
 <option disabled="disabled" selected="selected">Mark As</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_id'];?>
&campaign=popup&as=nsfw">NSFW</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_id'];?>
&campaign=popup&as=gamble">Gambling</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_id'];?>
&campaign=popup&as=shady">Shady</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['popup_id'];?>
&campaign=popup&as=risky">Risky</option>
</select>
</td>
                                       
                                        </tr>
 <?php } ?>

                                    </tbody>
                                </table>
                            </div>  
<div class="row" style="text-align: center">

<?php if ($_smarty_tpl->tpl_vars['n_pop']->value>0) {?><ul class="pagination"><?php echo $_smarty_tpl->tpl_vars['PopP']->value;?>
</ul><?php } else { ?>

<span class="alert alert-danger text-center">No Popups Found</span>

<?php }?>

</div>


                                    </div>       </div>   
                        
     </div>
 
 
    <div id="Directs" class="tab-pane fade">

                    <div class="panel">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-middle">
                                    <thead>
                                    <tr>
                                        <th><div class="fa fa-link"></div> Url</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-user "></div> User</th>

                                        <th style="text-align: center"><div class="fa fa-dollar"></div> Spend</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-money"></div> Price</th>

                                        <th style="text-align: center"><div class="fa fa-bar-chart"></div> Hits</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-unsorted "></div> Status</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-mail-reply-all"></div> Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with_direct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                        
                                        <td><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_url'];?>
" target="_blank">
                                        <div class="form-group">
                                        <input class="btn btn-warning" type="submit"
                                       value="View" />
                            </div></form>
                                      </td>

                                        <td style="text-align: center" ><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/users/view?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_user'];?>
">
                                        <div class="form-group">
                                        <input type="hidden" > 
                                        <input class="btn btn-info" type="submit"
                                       value="User #<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_user'];?>
" />
                            </div></form>
                                      </td>

                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['direct_spend'];?>
</td>
                                           
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['direct_price'];?>
</td>

                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_clicks'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['dir_clicks'];?>
</td>

     <?php if ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==1) {?>
                                         <td style="text-align: center"><span class="btn btn-primary">Active</span></td>
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==2) {?>
                                         <td style="text-align: center"><span class="btn btn-info">Inactive</span></td>
                                        
                                        
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==3) {?>
                                        <td style="text-align: center"><span class="btn btn-success">Completed</span></td>
                                        
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==4) {?>
                                         <td style="text-align: center"><span class="btn btn-warning">Pending</span></td>
                                        
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==5) {?>
                                         <td style="text-align: center"><span class="btn btn-danger">Rejected</span></td>
                                        
                                        
                                           <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==1) {?>
        <td style="text-align: center">
        <form method="POST">
        <div class="col-sm-8 col-sm-offset-3">
        <div class="form-group">
        <input type="hidden" name="d_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
"> 
        
            <input class="btn btn-danger" type="submit" name="deactivate_direct"
            value="Deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"/></div>
            </div></form></td>
            
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==2) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="d_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
"> 
        
                                <input class="btn btn-success" type="submit" name="activate_direct"
                                       value="Activate"/></div>
                                       </div></form></td>
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==3) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="d_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
"> 
        
                                <input class="btn btn-warning" type="submit" name="delete_direct"
                                       value="Delete"/></div>
                                       </div></form></td>
                                       
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['direct_status']==4) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="d_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
"> 
        
                                <input class="btn btn-success" type="submit" name="activate_direct"
                                       value="Activate"/></div>
                                       </div></form></td>
                                       
                                       <?php }?>
                                       
<td  style="text-align: center">

<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/edit?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
&campaign=direct">

<div class="col-sm-8 col-sm-offset-3">

<div class="form-group"><input class="btn btn-warning" type="submit" value="Edit"/>

</div></div></form></td>
<td style="text-align: center">

<select class="btn btn-success" onchange="location = this.value;"> 
 <option disabled="disabled" selected="selected">Mark As</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
&campaign=direct&as=nsfw">NSFW</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
&campaign=direct&as=gamble">Gambling</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
&campaign=direct&as=shady">Shady</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['direct_id'];?>
&campaign=direct&as=risky">Risky </option>
</select>
</td>
                                       
                                        </tr>
 <?php } ?>

                                    </tbody>
                                </table>
                            </div> 
<div class="row" style="text-align: center">

<?php if ($_smarty_tpl->tpl_vars['n_direct']->value>0) {?><ul class="pagination"><?php echo $_smarty_tpl->tpl_vars['DirectP']->value;?>
</ul><?php } else { ?>

<span class="alert alert-danger text-center">No Directs Found</span>

<?php }?>
               </div>                        </div>       </div>   
                        
</div>

<hr><br><div class="btn btn-warning">NSFW — <b> Nudity or other content not suitable for work.</b></div> 
<br><div class="btn btn-info">Gambling — <b>Games of chance, HYIPs, ponzi schemes.</b></div> 
<br><div class="btn btn-success">Shady — <b>Ads that pass other filters, but might be considered inappropriate by publishers.</b></div> 
<br><div class="btn btn-danger">Risky Investments — <b>High risk investments.</b></div> 


                        </div>
                    </div> 
    </div>  </div>  </div>       
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
