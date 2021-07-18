<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-03 08:17:51
         compiled from "/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Layout/tab.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134901352603f462f8c1726-92136800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a441988faddc28b87ed8e7fb4b91e86e367f318' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Layout/tab.js.tpl',
      1 => 1611844232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134901352603f462f8c1726-92136800',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_603f462f8c2513_97964205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603f462f8c2513_97964205')) {function content_603f462f8c2513_97964205($_smarty_tpl) {?><?php echo '<script'; ?>
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
