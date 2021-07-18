<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-28 12:02:42
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180248334360607062cb4430-06230760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4de4b90f865a3d3b450ce81714a4f83744a6734' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Layout/header.tpl',
      1 => 1616878424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180248334360607062cb4430-06230760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'AST' => 0,
    'HOST' => 0,
    'ADM' => 0,
    'nreported' => 0,
    'APPversion' => 0,
    'username' => 0,
    'PUB' => 0,
    'ADV' => 0,
    'nsites' => 0,
    'npending' => 0,
    '_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60607062cc4133_82891701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60607062cc4133_82891701')) {function content_60607062cc4133_82891701($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
 <?php echo do_config(7);?>
 <?php echo do_config(0);?>
</title>
       
        <!-- Admin Code -->
        <?php echo do_config(33);?>

        
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo do_config(8);?>
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
stats/index" class="dropdown-toggle menu-item" href="#" aria-expanded="false"><div class="fa fa-line-chart"></div> Stats <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['nreported']->value;?>
</span></a>
                              </li>
                              <li class="dropdown hidden-xs">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
banlist/index" class="dropdown-toggle menu-item" href="#" aria-expanded="false"><div class="fa fa-ban"></div> Detected IP(s)</a>
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
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['PUB']->value;?>
dashboard"><i class="fa fa-bar-chart"></i> Publisher Area</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ADV']->value;?>
dashboard"><i class="fa fa-user"></i> Advertiser Area</a></li>
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
                        	<li class="menu-title">Informations </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
dashboard" class="waves-effect"><i class="fa fa-dashboard"></i><span> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
websites/index" class="waves-effect"><i class="fa fa-bars"></i><span> Websites <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['nsites']->value;?>
</span></span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
zones" class="waves-effect"><i class="fa fa-code"></i><span> Zones</span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
campaigns/image-banners" class="waves-effect"><i class="fa fa-database"></i><span> Campaigns </span></a>
                            </li>
                        	<li class="menu-title">Users Area </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
users/index" class="waves-effect"><i class="fa fa-users"></i><span> Users </span></a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
withdraws/index" class="waves-effect"><i class="fa fa-dollar"></i><span> Withdraws <span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['npending']->value;?>
</span></span></a>
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
                        <!-- end row -->
<?php }} ?>
