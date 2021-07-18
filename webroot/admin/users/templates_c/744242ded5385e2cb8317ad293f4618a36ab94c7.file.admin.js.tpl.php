<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-30 21:21:44
         compiled from "/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Ajax/admin.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:841597440608a2d32497aa5-41759605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '744242ded5385e2cb8317ad293f4618a36ab94c7' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/develope/advartiso/webroot/template/advanced/Ajax/admin.js.tpl',
      1 => 1619735168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '841597440608a2d32497aa5-41759605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_608a2d3249b8f8_13874870',
  'variables' => 
  array (
    'HOST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_608a2d3249b8f8_13874870')) {function content_608a2d3249b8f8_13874870($_smarty_tpl) {?><?php echo '<script'; ?>
>
    function CheckUpdate(version) {
        $("#loader-version").show();
        jQuery.ajax({
            url: "https://projects.codsem.com/advartiso/update",
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
                    beforeSend: function() {
                    },
                    success:function(data){
                        $("#upload-files").hide();
                    },
                    complete: function (data) {
                        $("#progress").hide();
                        $("#response").html(data['responseText']);
                        $('.submitBtn').removeAttr('disabled');
                    },
                    error:function (){}
                });
    }
    function uploadTheme() {
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
ajax/theme-upload",
                    data: formData,
                    type: "POST",
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                    },
                    success:function(data){
                        $("#upload-files").hide();
                    },
                    complete: function (data) {
                        $("#progress").hide();
                        $("#response").html(data['responseText']);
                        $('.submitBtn').removeAttr('disabled');
                    },
                    error:function (){}
                });
    }
<?php echo '</script'; ?>
><?php }} ?>
