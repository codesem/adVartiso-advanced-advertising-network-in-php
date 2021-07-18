<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-22 00:54:32
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Ajax/admin.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203093652060cddf303deb22-25598145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064ae5940dc629a4c8caadf0b2b21151b5ec494b' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Ajax/admin.js.tpl',
      1 => 1624315261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203093652060cddf303deb22-25598145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cddf303e69b0_10668977',
  'variables' => 
  array (
    'HOST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cddf303e69b0_10668977')) {function content_60cddf303e69b0_10668977($_smarty_tpl) {?><?php echo '<script'; ?>
>
    function CheckUpdate(version) {
        $("#loader-version").show();
        jQuery.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/check-update",
            data:'version='+version,
            type: "POST",
            success:function(data){
                //console.log(data);
                var result = $.trim(data);
                
                $("#loader-version").hide();
                $("#check-btn").attr("disabled", true);
                if(result === 'ok'){
                    $("#update-msg").html("<span class='badge badge-success'><i class='fa fa-check-circle'></i> Your version is up to date</span>");
                }else{
                    $("#update-msg").html(data);
                    $("#update-form").show();
                }
            },
            error:function (data){}
        });
    }
    function DoUpdate(version) {
        jQuery.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/file-upload",
            data:'update='+version,
            type: "POST",
            success:function(data){
                $("#update-data").html(data);
            },
            error:function (data){}
        });
    }
    function DoPremium(purchase_code) {
        jQuery.ajax({
            
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/premium",
            data:'purchase_code='+purchase_code,
            type: "POST",
            success:function(data){
                var result = $.trim(data);
                    //$("#premium-data").html(data);

                if(result === 'error'){
                    $("#premium-data").html("<span class='badge badge-danger'><i class='fa fa-times'></i> Purchase Code Wrong</span>");
                }else if(result === 'success'){
                    $("#premium-data").html("<span class='badge badge-success'><i class='fa fa-check'></i> Your Premium Version Was Activated!</span>");
                    $("#premium-form").show();
                    $("#activation-form").hide();
                }
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
    function uploadPlugin() {
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
ajax/plugin-upload",
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
                        console.log(data);
                        $("#progress").hide();
                        $("#response").html(data['responseText']);
                        $('.submitBtn').removeAttr('disabled');
                    },
                    error:function (){}
                });
    }
    function showUpload() {
        $("#upload-files").show();
        $("#response").html('');
    }
<?php echo '</script'; ?>
><?php }} ?>
