<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-21 22:35:37
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Ajax/index.js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175349279960d114398f6bc4-25846377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1d7f4364dff8b5ec92aa17b0508d2e0b2d9ae4' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Ajax/index.js.tpl',
      1 => 1624276958,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175349279960d114398f6bc4-25846377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60d1143990af57_29641302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d1143990af57_29641302')) {function content_60d1143990af57_29641302($_smarty_tpl) {?><?php echo '<script'; ?>
>
    function checkAvailability() {
        $("#loader-availability").show();
        jQuery.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/username-availability",
            data:'username='+$("#username").val(),
            type: "POST",
            success:function(data){
                $("#user-availability-status").html(data);
                $("#loader-availability").hide();
            },
            error:function (){}
        });
    }
    function priceData(type,method) {
        $("#loader-price").show();
        jQuery.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/price-data",
            data:'order='+$("#order").val()+'&method='+method+'&type='+type,
            type: "POST",
            success:function(data){
                $("#price-data").html(data);
                $("#loader-price").hide();
            },
            error:function (){}
        });
    }
    function CampMethod(method,type) {
        jQuery.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/camp-method",
            data:'method='+method+'&type='+type,
            type: "POST",
            success:function(data){
                $("#method-data").html(data);
            },
            error:function (){}
        });
    }
    function GrabePreview(size,type) {
        $("#preview-loader").show();
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/grabe-preview",
            data:'size='+size+'&type='+type,
            success: function(data){
                $("#preview-data").html(data);
                $("#preview-loader").hide();
            }
        });
    }
    function grabeTemplate(val) {
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/grabe-template",
            data:'id='+val,
            success: function(data){
                $("#template-data").html(data);
            }
        });
    }
    function grabeSizes(val) {
        $("#loader").show();
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/grabe-sizes",
            data:'type='+val,
            success: function(data){
                $("#sizes-data").html(data);
                $("#loader").hide();
            }
        });
    }
    function grabeCountry(val) {
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/grabe-countries",
            data:'country-type='+val,
            success: function(data){
                $("#countries-data").html(data);
            }
        });
    }
    function grabeBrowsers(val) {
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/grabe-browsers",
            data:'browser-type='+val,
            success: function(data){
                $("#browsers-data").html(data);
            }
        });
    }
    function grabePlatforms(val) {
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/grabe-platforms",
            data:'platform-type='+val,
            success: function(data){
                $("#platforms-data").html(data);
            }
        });
    }
    function uploadBanner() {
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
ajax/banner-upload",
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
    function ReadAll() {
        jQuery.ajax({
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/read-notifications",
            data:'read=all',
            type: "POST",
            success:function(data){
                var result = $.trim(data);
                $("#read-notidications").html(result);
            },
            error:function (data){}
        });	
    }
    function grabeCountries(val) {
        $.ajax({
            type: "POST",
            url: "<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
ajax/grabe-countries",
            data:'type='+val,
            success: function(data){
                $("#sizes-data").html(data);
            }
        });
    }
    function copy(element_id){
        var aux = document.createElement("div");
        aux.setAttribute("contentEditable", true);
        aux.innerHTML = document.getElementById(element_id).innerHTML;
        aux.setAttribute("onfocus", "document.execCommand('selectAll',false,null)"); 
        document.body.appendChild(aux);
        aux.focus();
        document.execCommand("copy");
        document.body.removeChild(aux);
    }
    function showUpload() {
        $("#upload-files").show();
        $("#response").html('');
    }
<?php echo '</script'; ?>
><?php }} ?>
