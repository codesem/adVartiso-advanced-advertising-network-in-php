<!DOCTYPE html>
<html lang="{preg_replace('([_])', '-', $LOCALE)}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
   
    <!-- css style -->
    <link href="{$LND}fonts/sfuidisplay.css" rel="stylesheet">
    <link href="{$LND}css/font-awesome.min.css" rel="stylesheet">
    <link href="{$LND}css/plugins.min.css" rel="stylesheet">
    <link href="{$LND}css/app.css" rel="stylesheet">
    <link href="{$LND}css/custom.css" rel="stylesheet">
</head>
<body class="theme-gradient-7" data-spy="scroll" data-target="#navbar-nav" data-animation="false" data-appearance="light">
<!-- body code -->
{do_config(16)}
    <main class="main">
        <header class="navbar navbar-sticky sticky-bg-color--primary navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="{$HOST}">
                    <img class="navbar-brand__regular" src="{do_config(27)}" alt="{do_config(0)}" width="176" height="57">
                    <img class="navbar-brand__sticky" src="{do_config(27)}" alt="{do_config(0)}" width="176" height="57">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-inner mr-lg-auto pl-lg-2 pl-xl-6">
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="navbarToggler" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <nav>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="{$HOST}"> {$_HOME}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="{$HOST}page/faqs/"> {$_FAQS}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" href="{$HOST}page/about-us/"> {$_ABOUT}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="d-flex align-items-center ml-lg-1 ml-xl-2 mr-5 mr-sm-6 m-lg-0">
                {if !$logged}
                    <a href="{$HOST}auth/signin" class="color--white mr-2 text-uppercase">{$_SIGN_IN}</a>
                    <a href="{$HOST}auth/signup" class="btn btn-size--md btn-border color--white btn-hover--splash opacity--80 d-none d-sm-inline-flex">
                        <span class="btn__text font-w--500 text-uppercase">{$_CREATE_ACCOUNT}</span>
                    </a>
                {else}
                  {if $role == 'publisher'} 
                    <a href="{$HOST}member/dashboard" class="btn btn-size--md btn-border color--white btn-hover--splash opacity--80 d-none d-sm-inline-flex">
                        <span class="btn__text font-w--500 text-uppercase"><i class="fa fa-dashboard"></i> {$_DASHBOARD}</span>
                    </a>
                  {elseif $role == 'advertiser'} 
                    <a href="{$HOST}advertiser/dashboard" class="btn btn-size--md btn-border color--white btn-hover--splash opacity--80 d-none d-sm-inline-flex">
                        <span class="btn__text font-w--500 text-uppercase"><i class="fa fa-dashboard"></i> {$_DASHBOARD}</span>
                    </a>
                  {else}
                    <a href="{$HOST}admin/dashboard" class="btn btn-size--md btn-border color--white btn-hover--splash opacity--80 d-none d-sm-inline-flex">
                        <span class="btn__text font-w--500 text-uppercase"><i class="fa fa-dashboard"></i> {$_DASHBOARD}</span>
                    </a>
                  {/if}
                {/if}
                </div>
            </div>
        </header>