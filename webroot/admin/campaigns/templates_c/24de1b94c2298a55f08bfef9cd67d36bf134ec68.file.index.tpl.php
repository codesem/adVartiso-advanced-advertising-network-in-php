<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-21 21:16:13
         compiled from "/home/creatprs/public_html/metro/webroot/template/Metro/Admin/Campaigns/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1302528445ce46a9d4faae3-82460137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24de1b94c2298a55f08bfef9cd67d36bf134ec68' => 
    array (
      0 => '/home/creatprs/public_html/metro/webroot/template/Metro/Admin/Campaigns/index.tpl',
      1 => 1550303088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302528445ce46a9d4faae3-82460137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'campaign_succ' => 0,
    'deactivate_banner' => 0,
    'activate_banner' => 0,
    'deactivate_popup' => 0,
    'activate_popup' => 0,
    'deactivate_direct' => 0,
    'activate_direct' => 0,
    'marked_as' => 0,
    'as' => 0,
    'enable_banners' => 0,
    'enable_popups' => 0,
    'enable_direct' => 0,
    'with' => 0,
    'foo' => 0,
    'HOST' => 0,
    'sumbole' => 0,
    'n_banner' => 0,
    'BannerP' => 0,
    'with_popup' => 0,
    'n_pop' => 0,
    'PopP' => 0,
    'with_direct' => 0,
    'n_direct' => 0,
    'DirectP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce46a9d5e84e1_10833769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce46a9d5e84e1_10833769')) {function content_5ce46a9d5e84e1_10833769($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>Campaigns - Admin</title>

   <div class="content">
            <div class="container-fluid">
 
<br>
 <?php if ($_smarty_tpl->tpl_vars['campaign_succ']->value) {?>
<div class='alert alert-success'>Campaign Created Successfully</div>
 <?php }?>
 
 <?php if ($_smarty_tpl->tpl_vars['deactivate_banner']->value) {?>
<div class='alert alert-success'>Banner Deactivated Successfully</div>
 <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['activate_banner']->value) {?>
  <div class='alert alert-success'>Banner Activated Successfully</div>
 <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['deactivate_popup']->value) {?>
 <div class='alert alert-success'>Popup  Deactivated Successfully</div>
 <?php }?>
 
   <?php if ($_smarty_tpl->tpl_vars['activate_popup']->value) {?>
<div class='alert alert-success'>Popup Activated Successfully</div>
<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['deactivate_direct']->value) {?>
  <div class='alert alert-success'>Direct Deactivated Successfully</div>
<?php }?>
   <?php if ($_smarty_tpl->tpl_vars['activate_direct']->value) {?>
  <div class='alert alert-success'>Direct Activated Successfully</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['marked_as']->value) {?><div class='alert alert-success'>Campaign Marked As <?php echo $_smarty_tpl->tpl_vars['as']->value;?>
</div><?php }?>

           <div class="row">
        <div class="col-md-12"> <div class="card">
                <div class="card-header card-header-tabs" data-background-color="purple">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Campaigns</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                               <?php if ($_smarty_tpl->tpl_vars['enable_banners']->value=='1') {?> <li class=" ">
                                    <a href="#Banners" data-toggle="tab">
                                        <i class="material-icons">photo_size_select_actual</i> Banners
                                        <div class="ripple-container"></div>
                                    </a>
                                </li> <?php }?> 
                                <?php if ($_smarty_tpl->tpl_vars['enable_popups']->value==1) {?>
                                <li class=" ">
                                     <a href="#Popups" data-toggle="tab">
                                        <i class="material-icons">phonelink</i> Popups
                                        <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['enable_direct']->value==1) {?>
                                     <li class="">
                                    <a href="#Directs" data-toggle="tab">
                                        <i class="material-icons">insert_link</i> Directs
                                        <div class="ripple-container"></div>
                                    </a>
                                </li><?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <br>
    <div class="tab-content">
  <div id="Banners" class="tab-pane fade in active">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-middle">
                                    <thead>
                                    <tr>
                                        <th><div class="fa fa-link"></div> Url</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-user"></div> User</th>

                                        <th style="text-align: center"><div class="fa fa-navicon "></div> Type</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-dollar"></div> Spend</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-money"></div> Price</th>

                                        <th style="text-align: center"><div class="fa fa-line-chart"></div> Views</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-bar-chart"></div> Clicks</th>
                                        <th style="text-align: center"><div class="fa fa-code"></div> Size</th>

                                        
                                        <th style="text-align: center"><div class="fa fa-unsorted "></div> Status</th>
                                        
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
                                        <td><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['foo']->value['banner_url'];?>
" target="_blank">
                                        <div class="form-group">
                                        <input class="btn btn-warning" type="submit"
                                       value="View" />
                            </div></form>
                                      </td>

                                        <td style="text-align: center" ><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/users/view?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
">
                                        <div class="form-group">
                                        <input type="hidden" > 
                                        <input class="btn btn-info" type="submit"
                                       value="User #<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
" />
                            </div></form>
                                      </td>

                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['foo']->value['banner_type'];?>
</td>
                                        
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['spend'];?>
</td>
                                        
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['price'];?>
</td>

                        <td style="text-align: center"><?php if ($_smarty_tpl->tpl_vars['foo']->value['type_spend']=='clicks') {?>0/0<?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['type_spend']=='views') {
echo $_smarty_tpl->tpl_vars['foo']->value['views'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['banner_views'];
}?></td>
                        
                        <td style="text-align: center"><?php if ($_smarty_tpl->tpl_vars['foo']->value['type_spend']=='views') {?>0/0<?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['type_spend']=='clicks') {
echo $_smarty_tpl->tpl_vars['foo']->value['clicks'];?>
/<?php echo $_smarty_tpl->tpl_vars['foo']->value['banner_clicks'];
}?></td>
                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['foo']->value['banner_size'];?>
</td>
                        
     <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                                        <td style="text-align: center"><span class="btn btn-primary">Active</span></td>
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>
                                        <td style="text-align: center"><span class="btn btn-info">Inactive</span></td>
                                        
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==3) {?>
                                        <td style="text-align: center"><span class="btn btn-success">Completed</span></td>
                                        
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==4) {?>
                                        <td style="text-align: center"><span class="btn btn-warning">Pending</span></td> 
    <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==5) {?>
                                        <td style="text-align: center"><span class="btn btn-danger">Unpaid</span></td> 
                                           <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
        <td style="text-align: center">
        <form method="POST">
        <div class="col-sm-8 col-sm-offset-3">
        <div class="form-group">
        <input type="hidden" name="b_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
"> 
        
            <input class="btn btn-danger" type="submit" name="deactivate_banner"
            value="Deactivate" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"/></div>
            </div></form></td>
            
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="b_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
"> 
        
                                <input class="btn btn-success" type="submit" name="activate_banner"
                                       value="Activate"/></div>
                                       </div></form></td>
                                       
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==3) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="b_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
"> 
                              <input class="btn btn-warning" type="submit" name="delete_banner"
                                       value="Delete"/></div>
                                       </div></form></td>
                                       
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==4) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="b_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
"> 
        
                                <input class="btn btn-success" type="submit" name="activate_banner"
                                       value="Activate"/></div>
                                       </div></form></td>
 <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==5) {?>
<td  style="text-align: center">
                   <form method="POST">
                     <div class="col-sm-8 col-sm-offset-3">
                     <div class="form-group">
       <input type="hidden" name="b_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
"> 
        
                                <input class="btn btn-warning" type="submit" name="delete_banner"
                                       value="Delete"/></div>
                                       </div></form></td>
                                       
                                       <?php }?>
                                       
<td  style="text-align: center">

<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/edit?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
&campaign=banner">

<div class="col-sm-8 col-sm-offset-3">

<div class="form-group"><input class="btn btn-warning" type="submit" value="Edit"/>

</div></div></form></td>

<td style="text-align: center">

<select class="btn btn-success" onchange="location = this.value;"> 
 <option disabled="disabled" selected="selected">Mark As</option>
 
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
&campaign=banner&as=nsfw">NSFW</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
&campaign=banner&as=gamble">Gambling</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
&campaign=banner&as=shady">Shady</option>
 <option value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['idBanner'];?>
&campaign=banner&as=risky">Risky</option>
</select>
</td>

                                        </tr>
 <?php } ?>

                                    </tbody>
                                </table>
                            </div>

<div class="row" style="text-align: center">
<?php if ($_smarty_tpl->tpl_vars['n_banner']->value>0) {?>
<ul class="pagination">
<?php echo $_smarty_tpl->tpl_vars['BannerP']->value;?>
</ul>
<?php } else { ?>
<span class="alert alert-danger text-center">No Banners Found</span>
<?php }?>
</div>
</div>  </div>

</div>

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
