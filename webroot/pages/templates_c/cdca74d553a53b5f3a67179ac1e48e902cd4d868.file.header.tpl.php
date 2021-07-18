<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-20 18:14:36
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Pages/Layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168074602760cf858cd40c22-13037133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdca74d553a53b5f3a67179ac1e48e902cd4d868' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Pages/Layout/header.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168074602760cf858cd40c22-13037133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_description' => 0,
    'site_title' => 0,
    'AST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cf858cd4b993_67194748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cf858cd4b993_67194748')) {function content_60cf858cd4b993_67194748($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
">
        <meta name="keywords" content="<?php echo do_config(41);?>
">
        <meta name="robots" content="index, follow"/>
        
        <!-- Verification -->
        <?php echo do_config(14);?>

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo do_config(8);?>
">
     
        <!--google fonts-->
        <link href="//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- App title -->
        <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
 <?php echo do_config(7);?>
 <?php echo do_config(0);?>
</title>

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

    </head>

    <body class="bg-transparent">
        <!-- Pagesw -->
        <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrapper-page">
                            <div class="m-t-40 account-pages text-center"><?php }} ?>
