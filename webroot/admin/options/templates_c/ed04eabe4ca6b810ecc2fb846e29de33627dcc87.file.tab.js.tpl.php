<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-28 12:05:32
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Layout/tab.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14558421546060710c90e523-47757075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed04eabe4ca6b810ecc2fb846e29de33627dcc87' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Layout/tab.js.tpl',
      1 => 1616933110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14558421546060710c90e523-47757075',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6060710c91c6b3_59096647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6060710c91c6b3_59096647')) {function content_6060710c91c6b3_59096647($_smarty_tpl) {?><?php echo '<script'; ?>
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
