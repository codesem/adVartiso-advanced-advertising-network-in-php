<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-22 00:27:57
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Layout/tab.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12642703560cdd7f10b9365-00304500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00474fca966e91bd78da9a4fc91b24293dce2a72' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Layout/tab.js.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12642703560cdd7f10b9365-00304500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cdd7f10bb3c4_13471146',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cdd7f10bb3c4_13471146')) {function content_60cdd7f10bb3c4_13471146($_smarty_tpl) {?><?php echo '<script'; ?>
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
