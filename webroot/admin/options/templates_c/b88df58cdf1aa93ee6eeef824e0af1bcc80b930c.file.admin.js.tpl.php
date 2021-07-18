<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-03 08:17:51
         compiled from "/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Ajax/admin.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783365389603f462f8d4d84-18355494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b88df58cdf1aa93ee6eeef824e0af1bcc80b930c' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Ajax/admin.js.tpl',
      1 => 1611844232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783365389603f462f8d4d84-18355494',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_603f462f8d5fa4_83949437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603f462f8d5fa4_83949437')) {function content_603f462f8d5fa4_83949437($_smarty_tpl) {?><?php echo '<script'; ?>
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
