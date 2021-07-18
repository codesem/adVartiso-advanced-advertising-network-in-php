<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 10:52:26
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Ajax/admin.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:551019023605330ea030b05-10784915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188ededb0c547ac3f8edcf811bc389458cbaa1a9' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Ajax/admin.js.tpl',
      1 => 1616016645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '551019023605330ea030b05-10784915',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_605330ea031ee3_56422004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605330ea031ee3_56422004')) {function content_605330ea031ee3_56422004($_smarty_tpl) {?><?php echo '<script'; ?>
>
    function CheckUpdate(version) {
        $("#loader-version").show();
        jQuery.ajax({
            url: "https://codsem.com/cardavo/update",
            data:'version='+version,
            type: "POST",
            success:function(data){
                $("#update-msg").html(data);
                $("#loader-version").hide();
                $("#check-btn").attr("disabled", true);
            },
            error:function (data){}
        });
    }

<?php echo '</script'; ?>
>
<?php }} ?>
