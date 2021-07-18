<!DOCTYPE html>
<html lang="{preg_replace('([_])', '-', $LOCALE)}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="{$site_description}">
    <meta name="keywords" content="{do_config(65)}" />
    <meta name="robots" content="index,follow" />
    <meta property="og:url" content="{$site_url}">
    <meta property="og:title" content="{do_config(0)} - {$site_title}">
    <meta property="og:description" content="{$site_description}">
    <meta name="twitter:title" content="{do_config(0)} - {$site_title}">
    <meta name="twitter:description" content="{$site_description}">
    <meta name="author" content="{do_config(0)}">

    <!--favicon icon-->
	<link rel="icon" href="{do_config(8)}">
    <title>{do_config(0)} {do_config(7)} {$site_title}</title>

    <!-- head code -->
    {do_config(14)}
    
    <!--google fonts-->
    <link href="//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--common style-->
    <link href="{$LND}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{$LND}css/font-awesome.min.css" rel="stylesheet">
    <link href="{$LND}vendor/bicon/css/bicon.min.css" rel="stylesheet">
    <link href="{$LND}vendor/animate.css" rel="stylesheet">
    <link href="{$LND}vendor/owl/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{$LND}vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!--custom css-->
    <link href="{$LND}css/main.css" rel="stylesheet">
    
</head>
<body class="dark-theme">
<!-- body code -->
{do_config(16)}
    
<!--header start-->
<header class="app-header navbar-purple">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-md" id="mainNav">
                    <!--logo-->
                    <a class="navbar-brand mr-5" href="{$HOST}">
                        <img class="" src="{do_config(27)}" srcset="{do_config(27)} 2x" alt="{do_config(0)}" width="176" height="57"/>
                    </a>
                    <!--logo-->

                    <!--responsive toggle icon-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="fa fa-bars"> </i>
                        </span>
                    </button>
                    <!--responsive toggle icon-->

                    <!--nav link-->
                    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{$HOST}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#features"><i class="fa fa-bar-chart"></i> features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="#faq"><i class="fa fa-question-circle"></i> faq</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger" href="{$HOST}page/about-us/"><i class="fa fa-users"></i> About</a>
                            </li>
                            <li class="nav-item">
                         {if !$logged}
                                <a class="nav-link btn btn-pill buy-token js-scroll-trigger" href="{$HOST}auth/signup"><i class="fa fa-user-plus"></i> Signup</a>
                         {else}
                            {if $role == 'publisher'} 
                                <a class="nav-link btn btn-pill buy-token js-scroll-trigger" href="{$HOST}member/dashboard"><i class="fa fa-dashboard"></i> {$_DASHBOARD}</a>
                            {elseif $role == 'advertiser'} 
                                <a class="nav-link btn btn-pill buy-token js-scroll-trigger" href="{$HOST}advertiser/dashboard"><i class="fa fa-dashboard"></i> {$_DASHBOARD}</a>      
                            {else}
                                <a class="nav-link btn btn-pill buy-token js-scroll-trigger" href="{$HOST}admin/dashboard"><i class="fa fa-dashboard"></i> {$_DASHBOARD}</a>
                            {/if}
                         {/if}
                            </li>
                        </ul>
                    </div>
                    <!--nav link-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!--header end-->