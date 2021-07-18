<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-28 10:44:51
         compiled from "/home/codsemco/public_html/cardavo/webroot/template/main/Ajax/admin.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26965403460129577a69918-69307986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8220215414a12e5c146f9206f7a93ca21ce828a5' => 
    array (
      0 => '/home/codsemco/public_html/cardavo/webroot/template/main/Ajax/admin.js.tpl',
      1 => 1611830675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26965403460129577a69918-69307986',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60129577a6a048_57267043',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60129577a6a048_57267043')) {function content_60129577a6a048_57267043($_smarty_tpl) {?><?php echo '<script'; ?>
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
