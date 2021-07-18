<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-22 00:57:50
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Banner/img-ad-style.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171245032960d1358e9788b6-01588216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08648e7468d1b7afc941a5b954ce03beeeeb8eda' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Banner/img-ad-style.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171245032960d1358e9788b6-01588216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'UPD' => 0,
    'size' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60d1358e9ae1a2_82120719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d1358e9ae1a2_82120719')) {function content_60d1358e9ae1a2_82120719($_smarty_tpl) {?><style type="text/css">

 ._19_ff9lYbpT9kOPGhy3mQS{
     height:13px;
     width:13px;
     background-size:13px 13px;
     background-repeat:no-repeat;
     background-image:url(<?php echo $_smarty_tpl->tpl_vars['UPD']->value;?>
images/adchoice.svg);
     margin:1px 2px 1px 4px;
 }
 ._3hK_KnZ5Ea1czHOAb0XjRp{
     cursor:pointer;
     position:absolute;
     right:0;
     bottom:0;
     border-radius:8px 0px 0px 0px;
     background-color:rgba(255,255,255,0.7);
     z-index:10;
     display:flex;
     flex-direction:row-reverse;
 }
 ._3hK_KnZ5Ea1czHOAb0XjRp:hover ._1iU6QyDEUwEXo1W-5nEg60{
     display:block;
 }
 ._1iU6QyDEUwEXo1W-5nEg60{
     margin-left:9px;
     font-size:11px;
     font-family:arial;
     font-weight:regular;
     line-height:14px;
     display:none;
 }

 /*! CSS Used from: Embedded */
 .str-adunit{
     cursor:pointer;
     position:relative;
 }
 /*! CSS Used from: Embedded */
 
 html *{
     -moz-box-sizing:inherit;
     box-sizing:inherit;
 }
 a,div,span{
     margin:0;
     padding:0;
     border:0;
     font-size:100%;
     font:inherit;
     vertical-align:baseline;
 }
 :after,:before{
     box-sizing:border-box;
 }
 a{
     background:transparent;
     color:#0fadc4;
     text-decoration:none;
 }
 a:hover{
     color:#202429;
     text-decoration:none;
 }
 a:active,a:focus,a:hover{
     outline:0;
 }
 ::-webkit-scrollbar{
     display:none!important;
 }

 /*! CSS Used from: Embedded */
 
<?php if (detectDevice()=='MOBILE') {?>
 /* small devices (phones) */
     .str-adunit-img-top{
         box-sizing:border-box;
         font-family:sans-serif;
         font-size:17px;
         line-height:18px;
         color:black;
         background-color:white;
         margin:auto;
         overflow:hidden;
         border:1px solid #eee;
         text-align:center;
         <?php echo do_size($_smarty_tpl->tpl_vars['size']->value,'source','mb');?>

     }
     .str-adunit-img-top .thumbnail-wrapper{
         background-color:#eee;
         background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
);
         <?php echo do_size($_smarty_tpl->tpl_vars['size']->value,'source','mb');?>

     }
<?php } elseif (detectDevice()=='PC') {?>
 /* Medium devices (desktops) */
     .str-adunit-img-top{
         box-sizing:border-box;
         font-family:sans-serif;
         font-size:17px;
         line-height:18px;
         color:black;
         background-color:white;
         margin:auto;
         overflow:hidden;
         border:1px solid #eee;
         text-align:center;
         <?php echo do_size($_smarty_tpl->tpl_vars['size']->value,'source','pc');?>

     }
     .str-adunit-img-top .thumbnail-wrapper{
         background-color:#eee;
         background-image: url(<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
);
         <?php echo do_size($_smarty_tpl->tpl_vars['size']->value,'source','pc');?>

     }
<?php }?>

 .str-adunit-img-top .str-title,.str-adunit-img-top .str-description,.str-adunit-img-top .str-advertiser{
     color:black!important;
 }
 .str-adunit-img-top .str-title{
     padding:8px 8px 12px 8px;
     font-weight:bold;
 }
 .str-adunit-img-top .str-description{
     padding:0 8px 16px 8px;
     font-size:13px;
     line-height:17px;
 }
 .str-adunit-img-top .str-bottom{
     padding:0 8px 8px 8px;
     display:flex;
     justify-content:space-between;
     align-items:center;
     font-size:12px;
     line-height:13px;
     float:none;
 }
 .str-adunit-img-top .str-brand-logo{
     display:inline-block;
     width:16px;
     height:16px;
     max-width:16px;
     max-height:16px;
     background-size:contain;
     background-position:50%;
     background-repeat:no-repeat;
     vertical-align:middle;
     border:none;
     background-color:inherit;
     margin-left:8px;
     float:none;
 }
 .str-adunit-img-top .str-cta{
     background-color:#596777;
     color:white;
     border-radius:5px;
     padding:3px 13px;
     line-height:20px;
     text-align:center;
 }
 .str-adunit-img-top:hover .str-cta{
     background-color:#4BD1A6;
 }
 .str-adunit-img-top .str-opt-out-container{
     bottom:unset!important;
     top:0!important;
     border-radius:0 0 0 8px!important;
     background-color:unset!important;
 }
 .str-adunit-img-top .str-opt-out-container:hover .str-opt-out-label{
     background-color:rgba(255, 255, 255, 0.7)!important;
 }

</style><?php }} ?>
