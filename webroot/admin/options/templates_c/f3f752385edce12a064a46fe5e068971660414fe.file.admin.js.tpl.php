<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-03 00:15:44
         compiled from "/home/codsemco/public_html/cardtag/webroot/template/main/Ajax/admin.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4737582445fefd6f857c795-57861148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3f752385edce12a064a46fe5e068971660414fe' => 
    array (
      0 => '/home/codsemco/public_html/cardtag/webroot/template/main/Ajax/admin.js.tpl',
      1 => 1609632839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4737582445fefd6f857c795-57861148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fefd6f8582249_33481327',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fefd6f8582249_33481327')) {function content_5fefd6f8582249_33481327($_smarty_tpl) {?><?php echo '<script'; ?>
>
    function CheckUpdate(version) {
        $("#loader-version").show();
        jQuery.ajax({
            url: "https://codsem.com/cardtag/update",
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
