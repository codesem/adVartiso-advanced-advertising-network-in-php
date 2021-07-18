<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-02 16:48:09
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Layout/tab.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116526205560674ac9c59f60-54685294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd16c03befb18769ddc4b64bdf00a0c3f2d261e27' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Layout/tab.js.tpl',
      1 => 1616933110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116526205560674ac9c59f60-54685294',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60674ac9c5b534_40275461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60674ac9c5b534_40275461')) {function content_60674ac9c5b534_40275461($_smarty_tpl) {?><?php echo '<script'; ?>
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
