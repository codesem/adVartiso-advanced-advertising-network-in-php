<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-29 00:14:27
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Ajax/admin.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1417309832605b4b02bebfa9-03266637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '643d5bd12a9d32d3ba483d584b96973730707e58' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Ajax/admin.js.tpl',
      1 => 1616968249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1417309832605b4b02bebfa9-03266637',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_605b4b02bed1c9_91934320',
  'variables' => 
  array (
    'HOST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605b4b02bed1c9_91934320')) {function content_605b4b02bed1c9_91934320($_smarty_tpl) {?><?php echo '<script'; ?>
>
    function CheckUpdate(version) {
        $("#loader-version").show();
        jQuery.ajax({
            url: "https://projects.codsem.com/proads/update",
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
    
    function uploadUpdate() {
        
        var formData = new FormData($("#upload_form")[0]);
        $("#progress").show();
        $.ajax({
            xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $('.progress-bar').width(percentComplete+'%');
                                $('.progress-bar').html(percentComplete+'%');
                            }
                        }, false);
                        return xhr;
                    },
                    url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/file-upload",
                    data: formData,
                    type: "POST",
                    processData: false,
                    contentType: false,
            beforeSend: function(){
                $('.submitBtn').attr("disabled","disabled");
            },
            success:function(data){
                console.log(data);
                $("#response-msg").html(data);
            },
            error:function (data){}
        });
    }
<?php echo '</script'; ?>
><?php }} ?>
