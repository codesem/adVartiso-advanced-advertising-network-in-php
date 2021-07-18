<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-23 09:52:36
         compiled from "/home2/mrporeek/creativeocean.pw/webroot/template/Metro/Admin/Layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2135643225600c4644ea63d6-85348596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '115df801c02f45f6578a645f2f258354ef4bf2ec' => 
    array (
      0 => '/home2/mrporeek/creativeocean.pw/webroot/template/Metro/Admin/Layout/header.tpl',
      1 => 1550334940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2135643225600c4644ea63d6-85348596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_description' => 0,
    'site_url' => 0,
    'site_title' => 0,
    'admin_head' => 0,
    'HOST' => 0,
    'THEME' => 0,
    'Favicon_url' => 0,
    'name' => 0,
    'withdrawal_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_600c46451a3992_05699371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600c46451a3992_05699371')) {function content_600c46451a3992_05699371($_smarty_tpl) {?><html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
      content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
">
<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['site_url']->value;?>
">
<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
 - Admin">
<meta property="og:description"
      content="description search">
<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
">
<meta name="twitter:description"
      content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
">
<?php echo $_smarty_tpl->tpl_vars['admin_head']->value;?>

<!-- Bootstrap core CSS     -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
template/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/Assest/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
template/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/Assest/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
template/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/Assest/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['Favicon_url']->value;?>
">
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
</head>

<div class="wrapper">
   <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
template/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/Assest/images/member/side.jpg">

<div class="logo">
    <a href="#" class="simple-text">
         Admin Panel
    </a>
</div>
<div class="logo logo-mini">
    <a href="#" class="simple-text">
        <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    </a>
</div>
<div class="sidebar-wrapper">
    <div class="user">
        <div class="photo">
            <img src="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
template/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/Assest/images/member/admin-avatar.png" />
        </div>
        <div class="info">
            <a data-toggle="collapse" href="#UserColl" class="collapsed">
               Admin
                <b class="caret"></b>
            </a>
            <div class="collapse" id="UserColl">
                <ul class="nav">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
member/profile">Edit Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="nav">
         <li class=" ">
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/dashboard">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li> 
        <li>
        <a data-toggle="collapse" href="#Sites">
                    <i class="material-icons">language</i>
                    <p>Websites & Ads
                        <b class="caret"></b>
                    </p>
                </a>   <div class="collapse" id="Sites">
                    <ul class="nav">
          <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/sites">
                <i class="material-icons">public</i>
                <p>All Websites</p>
            </a>
        </li>
         <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/catsite">
                <i class="material-icons">view_comfy</i>
                <p>Websites Categories</p>
            </a>
        </li>
         <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/add-cat">
                <i class="material-icons">add_comment</i>
                <p>Add Category</p>
            </a>
        </li>
         <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/bannsite">
                <i class="material-icons">vpn_lock</i>
                <p>Banned Websites</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/codes">
                <i class="material-icons">code</i>
                <p>Ads Zone</p>
            </a>
        </li></ul>
                </div>
            </li>
    <li>
            <li>
        <a data-toggle="collapse" href="#cam">
                    <i class="material-icons">laptop_chromebook</i>
                    <p>Campaigns
                        <b class="caret"></b>
                    </p>
                </a>   <div class="collapse" id="cam">
                    <ul class="nav">
          <li> <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/index">
                <i class="material-icons">widgets</i>
                <p>All Campaigns</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/reports/index">
                <i class="material-icons">insert_chart_outlined</i>
                <p>Reports</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/create-banner">
                <i class="material-icons">photo_size_select_actual</i>
                <p>Create Banner Ads</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/create-popup">
                <i class="material-icons">phonelink</i>
                <p>Create Popup Ads</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/campaigns/create-direct">
                <i class="material-icons">insert_link</i>
                <p>Create Direct Ads</p>
             </a>
        </li></ul>
                </div>
            </li>
          <li>
        <a data-toggle="collapse" href="#userinfo">
                    <i class="material-icons">contacts</i>
                    <p>User Information
                        <b class="caret"></b>
                    </p>
                </a>   <div class="collapse" id="userinfo">
                    <ul class="nav">  
            <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/users/index">
                <i class="material-icons">people</i>
                <p>All User</p>
            </a>
        </li>
         <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/users/add">
                <i class="material-icons">person_add</i>
                <p>Add User</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/withdraws">
                <i class="material-icons">monetization_on</i>
                <p>User Withdraws <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['withdrawal_id']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>'0') {?> (<span class="numberCircle"><span><?php echo $_smarty_tpl->tpl_vars['withdrawal_id']->value;?>
</span></span>)<?php } else {
}?></span></p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/invoices">
                <i class="material-icons">local_atm</i>
                <p>User Invoices</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/transactions">
                <i class="material-icons">attach_money</i>
                <p>User Transactions</p>
            </a>
        </li></ul>
                </div>
            </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/log_history">
                <i class="material-icons">compass_calibration</i>
                <p>Log history</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/announc">
                <i class="material-icons">speaker</i>
                <p>Announcements</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/pages/index">
                <i class="material-icons">pages</i>
                <p>Pages</p>
            </a>
        </li>
            <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/set/themes">
                <i class="material-icons">format_paint</i>
                <p>Themes</p>
            </a>
        </li>
        
        <li>
        <a data-toggle="collapse" href="#settings">
                    <i class="material-icons">settings</i>
                    <p>Settings
                        <b class="caret"></b>
                    </p>
                </a>   <div class="collapse" id="settings">
                    <ul class="nav">
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/set/settings">
                <i class="material-icons">settings</i>
                <p>General Settings</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/set/email">
                <i class="material-icons">email</i>
                <p>Email Setting</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/set/payment">
                <i class="material-icons">payment</i>
                <p>Payment Methods</p>
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/set/withdrawal">
                <i class="material-icons">local_atm</i>
                <p> Withdrawal Methods</p>
            </a>
        </li></ul>
                </div>
            </li>
        <li>
            <a href="https://codsem.com/user/CreativeOcean">
                <i class="material-icons">mode_comment</i>
                <p>Support</p>
            </a>
        </li>
    </ul>
</div>


    </div>





    <div class="main-panel">


        <nav class="navbar navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            
            <a class="navbar-brand" href="#"> <i class="material-icons">home</i> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>

            
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                   <li><div class="dropdown"><a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
member/dashboard" class="btn btn-info dropdown-toggle"> <i class="material-icons">desktop_windows</i> Publisher Dashboard</a></div></li>
                    <li><div class="dropdown"><a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
advertiser/dashboard" class="btn btn-danger dropdown-toggle"> <i class="material-icons">person_pin</i> Advertiser Dashboard</a></div></li>
                
                    <li>
                        <div class="dropdown">
                            <a href="#" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                               <i class="material-icons">face</i>Admin<b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/set/settings"> <i class="material-icons">settings</i> Settings </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
auth/logout"> <i class="material-icons">lock</i> Logout </a>
                                </li>
                            </ul>
                        </div>
                    </li>

            </ul>
        </div>
    </div>
</nav>


















<?php }} ?>
