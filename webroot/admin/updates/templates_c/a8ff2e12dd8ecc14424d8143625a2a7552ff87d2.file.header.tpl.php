<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-02 23:44:15
         compiled from "/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4704355305fefd4cc11ba92-99744589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8ff2e12dd8ecc14424d8143625a2a7552ff87d2' => 
    array (
      0 => '/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Layout/header.tpl',
      1 => 1609613393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4704355305fefd4cc11ba92-99744589',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fefd4cc12f2a4_71110294',
  'variables' => 
  array (
    'site_title' => 0,
    'AST' => 0,
    'HOST' => 0,
    'ADM' => 0,
    'ntickets' => 0,
    'nreported' => 0,
    'APPversion' => 0,
    'username' => 0,
    'USR' => 0,
    '_HOME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fefd4cc12f2a4_71110294')) {function content_5fefd4cc12f2a4_71110294($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
 <?php echo do_config(6);?>
 <?php echo do_config(0);?>
</title>
       
        <!-- Verification -->
        <?php echo do_config(13);?>

        
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo do_config(7);?>
" type="image/png">

        <!-- Plugins css-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
css/menu.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
css/responsive.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" >

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/modernizr.min.js"><?php echo '</script'; ?>
>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!-- Image logo -->
                    <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
" class="logo">
                        <span>
                            <?php echo do_config(0);?>

                        </span>
                        <i>
                            <?php echo do_config(0);?>

                        </i>
                    </a>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Navbar-left -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                              <li class="dropdown hidden-xs">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/index" class="dropdown-toggle menu-item" href="#" aria-expanded="false"><div class="fa fa-cog"></div> Options</a>
                              </li>
                              <li class="dropdown hidden-xs">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
support" class="dropdown-toggle menu-item" href="#" aria-expanded="false"><div class="fa fa-envelope"></div> Support <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['ntickets']->value;?>
</span></a>
                              </li>
                              <li class="dropdown hidden-xs">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
reports" class="dropdown-toggle menu-item" href="#" aria-expanded="false"><div class="fa fa-bug"></div> Reports <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['nreported']->value;?>
</span></a>
                              </li>
                              <li class="dropdown hidden-xs">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
updates/index?version=<?php echo $_smarty_tpl->tpl_vars['APPversion']->value;?>
" class="dropdown-toggle menu-item" href="#" aria-expanded="false"><div class="fa fa-refresh"></div> Update</a>
                              </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                  <span class="avatar-sm-box bg-primary"><i class="fa fa-user"></i></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5 class="droplabel"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h5>
                                    </li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/index"><i class="fa fa-cog"></i> Options</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['USR']->value;?>
password"><i class="fa fa-lock"></i> Password</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
signout"><i class="fa fa-power-off"></i> Signout</a></li>
                                </ul>

                            </li>
                        </ul> <!-- end navbar-right -->

                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
dashboard" class="waves-effect"><i class="fa fa-dashboard"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
products/index" class="waves-effect"><i class="fa fa-bars"></i><span> Products </span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
orders/index" class="waves-effect"><i class="fa fa-database"></i><span> Orders</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
cardcodes/index" class="waves-effect"><i class="fa fa-credit-card"></i><span> Cards Codes </span></a>
                            </li>
                            
                        	<li class="menu-title">Users Area </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
users/index" class="waves-effect"><i class="fa fa-users"></i><span> Users </span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
invoices/index" class="waves-effect"><i class="fa fa-bank"></i><span> Invoices </span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
announcements/index" class="waves-effect"><i class="fa fa-bullhorn"></i><span> Announcements </span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
pages/index" class="waves-effect"><i class="fa fa-files-o"></i><span> Pages </span></a>
                            </li>
                        	<li class="menu-title">Settings </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
categories/index" class="waves-effect"><i class="fa fa-sitemap"></i><span> Categories </span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/index" class="waves-effect"><i class="fa fa-ban"></i><span> Detected IP(s)</span></a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->


                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title"><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['_HOME']->value;?>
</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
dashboard">Admin</a>
                                        </li>
                                        <li class="active">
                                            <?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>

                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row --><?php }} ?>
