<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-03 07:11:59
         compiled from "/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Layout/tab.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:521860295ff10d759f62b6-83598201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f65b2bce897ee15044c32222aed98b5890f49aa' => 
    array (
      0 => '/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Layout/tab.js.tpl',
      1 => 1609657908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '521860295ff10d759f62b6-83598201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ff10d75a0e7f0_58736724',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff10d75a0e7f0_58736724')) {function content_5ff10d75a0e7f0_58736724($_smarty_tpl) {?><?php echo '<script'; ?>
>

    function openTAB(evt, Name) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
    
<?php echo '</script'; ?>
><?php }} ?>
