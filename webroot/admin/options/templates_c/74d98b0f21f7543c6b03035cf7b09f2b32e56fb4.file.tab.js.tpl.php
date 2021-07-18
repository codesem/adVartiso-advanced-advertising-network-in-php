<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-29 03:37:03
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Layout/tab.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:502083504608a29df0669e3-37801915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74d98b0f21f7543c6b03035cf7b09f2b32e56fb4' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Admin/Layout/tab.js.tpl',
      1 => 1616929510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '502083504608a29df0669e3-37801915',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608a29df0679d5_23244858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a29df0679d5_23244858')) {function content_608a29df0679d5_23244858($_smarty_tpl) {?><?php echo '<script'; ?>
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
