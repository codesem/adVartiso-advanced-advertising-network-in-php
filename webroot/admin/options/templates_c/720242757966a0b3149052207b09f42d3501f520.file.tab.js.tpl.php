<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-03 00:15:44
         compiled from "/home/codsemco/public_html/cardtag/webroot/template/main/Ajax/tab.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4293934525ff10cb0567ba8-04570012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '720242757966a0b3149052207b09f42d3501f520' => 
    array (
      0 => '/home/codsemco/public_html/cardtag/webroot/template/main/Ajax/tab.js.tpl',
      1 => 1609632888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4293934525ff10cb0567ba8-04570012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ff10cb057d532_92650000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ff10cb057d532_92650000')) {function content_5ff10cb057d532_92650000($_smarty_tpl) {?><?php echo '<script'; ?>
>

    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
    
<?php echo '</script'; ?>
><?php }} ?>
