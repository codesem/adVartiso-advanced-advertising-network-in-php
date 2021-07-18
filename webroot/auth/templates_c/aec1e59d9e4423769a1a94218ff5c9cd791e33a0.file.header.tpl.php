<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-21 22:35:37
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Auth/Layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75887545960d114398012d8-40074134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aec1e59d9e4423769a1a94218ff5c9cd791e33a0' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Auth/Layout/header.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75887545960d114398012d8-40074134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'keywords' => 0,
    'site_description' => 0,
    'AST' => 0,
    'HOST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60d1143980f465_92926299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d1143980f465_92926299')) {function content_60d1143980f465_92926299($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo do_config(8);?>
" type="image/png">
     
        <!--google fonts-->
        <link href="//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- App title -->
        <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
 - <?php echo do_config(0);?>
</title>
        <!-- Keywords -->
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
        <!-- Description -->
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
" />
        <!-- Robots -->
        <meta name="robots" content="index, follow"/>
        <!-- Head Code -->
        <?php echo do_config(14);?>

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
        <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
    </head>


    <body class="bg-transparent">

        <!-- HOME -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrapper-page">
                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
" class="text-success">
                                            <span><img src="<?php echo do_config(27);?>
" alt="<?php echo do_config(0);?>
" height="50"></span>
                                        </a>
                                    </h2>
                                </div><?php }} ?>
