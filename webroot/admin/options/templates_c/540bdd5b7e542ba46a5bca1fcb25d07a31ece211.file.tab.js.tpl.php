<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-27 18:25:40
         compiled from "/home/codsemco/public_html/cardavo/webroot/template/main/Admin/Layout/tab.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12942311396011b0247f97e5-69124874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '540bdd5b7e542ba46a5bca1fcb25d07a31ece211' => 
    array (
      0 => '/home/codsemco/public_html/cardavo/webroot/template/main/Admin/Layout/tab.js.tpl',
      1 => 1609657908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12942311396011b0247f97e5-69124874',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6011b0247f9de9_68251549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6011b0247f9de9_68251549')) {function content_6011b0247f9de9_68251549($_smarty_tpl) {?><?php echo '<script'; ?>
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
