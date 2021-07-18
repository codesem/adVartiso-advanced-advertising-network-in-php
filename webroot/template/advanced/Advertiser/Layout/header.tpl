<!DOCTYPE html>
<html lang="{preg_replace('([_])', '-', $LOCALE)}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{$site_title} {do_config(7)} {do_config(0)}</title>
       
        <!-- head code -->
        {do_config(14)}
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="{do_config(8)}" type="image/png">
     
        <!--google fonts-->
        <link href="//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Plugins css-->
        <link href="{$AST}plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="{$AST}plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="{$AST}plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{$AST}plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="{$AST}plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="{$AST}css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{$AST}css/core.css" rel="stylesheet" type="text/css" />
        <link href="{$AST}css/components.css" rel="stylesheet" type="text/css" />
        <link href="{$AST}css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{$AST}css/pages.css" rel="stylesheet" type="text/css" />
        <link href="{$AST}css/menu.css" rel="stylesheet" type="text/css" />
        <link href="{$AST}css/responsive.css" rel="stylesheet" type="text/css" />
		<link href="{$AST}plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" >

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{$AST}js/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="fixed-left">
        <!-- body code -->
        {do_config(16)}
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <!-- Image logo -->
                    <a href="{$HOST}" class="logo">
                        <span><img src="{do_config(27)}" alt="{do_config(0)}" height="50"></span>
                        <i><img src="{do_config(8)}" height="50"></i>
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
                                <a href="{$ADV}settings/index" class="dropdown-toggle menu-item" href="#" aria-expanded="false"><i class="fa fa-cog"></i> {$_SETTINGS}</a>
                              </li>
                              <li class="dropdown hidden-xs">
                                <a href="{$ADV}support" class="dropdown-toggle menu-item" href="#" aria-expanded="false"><i class="fa fa-envelope"></i> {$_SUPPORT}</a>
                              </li>
                            <li class="dropdown hidden-xs">
                                <a data-toggle="dropdown" class="dropdown-toggle menu-item" href="#" aria-expanded="false">
                                    <i class="fa fa-flag"></i> 
                                    {if $LOCALE == 'en_US'}
                                       {$_ENGLISH}
                                    {elseif $LOCALE == 'fr_FR'}
                                       {$_FRENCH}
                                    {/if}
                                    <span class="caret"></span>
                                </a>
                                <ul role="menu" class="dropdown-menu">
                                    {if $LOCALE == 'en_US'}
                                       <li><a href="?locale=fr_FR"><i class="fa fa-flag"></i> {$_FRENCH}</a></li>
                                    {elseif $LOCALE == 'fr_FR'}
                                       <li><a href="?locale=en_US"><i class="fa fa-flag"></i> {$_ENGLISH}</a></li>
                                    {/if}
                                </ul>
                            </li>
                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" onClick = "ReadAll()" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <span class="badge up bg-danger" id="read-notidications">{$notifications_num}</span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                    <li>
                                        <h5 class="droplabel">{$_NOTIFICATIONS}</h5>
                                    </li>
                                {foreach from=$notifications item=foo}
                                    <li>
                                        <a href="#" class="user-list-item">
                                            <div class="icon bg-danger">
                                               {if $foo['type'] == 'support'}
                                                <i class="fa fa-comment"></i>
                                               {elseif $foo['type'] == 'deposit'}
                                                <i class="fa fa-money"></i>
                                               {elseif $foo['type'] == 'campaign'}
                                                <i class="fa fa-database"></i>
                                               {/if}
                                            </div>
                                            <div class="user-desc">
                                               {if $foo['type'] == 'support'}
                                                <span class="white-color">{$_NEW_REPLY}</span>
                                               {elseif $foo['type'] == 'deposit'}
                                                <span class="white-color">{$_AMOUNT} {do_amount($foo['amount'])} {$_CREDITE}.</span>
                                               {elseif $foo['type'] == 'campaign'}
                                                <span class="white-color">{$_YOUR_CAMPAIGN_WAS_ACTIVATED}</span>
                                               {/if}
                                            </div>
                                        </a>
                                    </li>
                                {/foreach}
                                    <li class="all-msgs text-center">
                                        <p class="m-0"></p>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                  <span class="avatar-sm-box bg-primary"><i class="fa fa-user"></i></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5 class="droplabel">{$username}</h5>
                                    </li>
                                {if $role == 'admin'}
                                    <li><a href="{$ADM}dashboard"><i class="fa fa-dashboard"></i> {$_ADMIN_AREA}</a></li>
                                    <li><a href="{$PUB}dashboard"><i class="fa fa-bar-chart"></i> {$_PUBLISHER_AREA}</a></li>
                                {/if}
                                    <li><a href="{$ADV}settings/index"><i class="fa fa-cog"></i> {$_SETTINGS}</a></li>
                                    <li><a href="{$HOST}signout"><i class="fa fa-power-off"></i> {$_SIGN_OUT}</a></li>
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
                        	<li class="menu-title">
                        	    <h5 class="white-color text-uppercase"><i class="fa fa-money"></i> {$_BALANCE}: {do_amount($ad_balance)}</h5>
                        	 </li>
                            <li>
                                <a href="{$ADV}dashboard" class="waves-effect"><i class="fa fa-dashboard"></i><span> {$_DASHBOARD} </span></a>
                            </li>
                            <li>
                                <a href="{$ADV}stats/index" class="waves-effect"><i class="fa fa-bar-chart"></i><span> {$_STATS}</span></a>
                            </li>
                            <li>
                                <a href="{$ADV}campaigns/index" class="waves-effect"><i class="fa fa-database"></i><span> {$_CAMPAIGNS} </span></a>
                            </li>
                            <li>
                                <a href="{$ADV}purchase/index" class="waves-effect"><i class="fa fa-shopping-cart"></i><span> {$_PURCHASE} </span></a>
                            </li>

                        	<li class="menu-title text-uppercase">{$_USER_AREA}</li>
                            <li>
                                <a href="{$ADV}templates/index" class="waves-effect"><i class="fa fa-paint-brush"></i><span> {$_TEMPLATES}</span></a>
                            </li>
                            <li>
                                <a href="{$ADV}deposit/index" class="waves-effect"><i class="fa fa-money"></i><span> {$_DEPOSIT}</span></a>
                            </li>
                            <li>
                                <a href="{$ADV}announcements/index" class="waves-effect"><i class="fa fa-bullhorn"></i><span> {$_ANNOUNCEMENTS} </span></a>
                            </li>
                            <li>
                                <a href="{$ADV}support" class="waves-effect"><i class="fa fa-envelope"></i><span> {$_SUPPORT} </span></a>
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
                                    <h4 class="page-title">{$site_title}</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="{$HOST}">{$_HOME}</a>
                                        </li>
                                        <li>
                                            <a href="{$ADV}dashboard">{$_ADVERTISER}</a>
                                        </li>
                                        <li class="active">
                                            {$site_title}
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                        {if do_config(29) == 1}
                          {if $isactivated == 2}
                             <div class="alert alert-success text-center">
                                 <p><i class="fa fa-warning"></i> {$_SENT_ACTIVATION} <b>{$email}</b>.</p>
                                 <p><i class="fa fa-flag"></i> {$__SENT_ACTIVATION}</p>
                             </div>
                          {/if}
                        {/if}