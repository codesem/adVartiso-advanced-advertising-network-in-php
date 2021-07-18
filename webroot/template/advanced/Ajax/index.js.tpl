<script>
    function checkAvailability() {
        $("#loader-availability").show();
        jQuery.ajax({
            url: "{$HOST}ajax/username-availability",
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
            url: "{$HOST}ajax/price-data",
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
            url: "{$HOST}ajax/camp-method",
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
            url: "{$HOST}ajax/grabe-preview",
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
            url: "{$HOST}ajax/grabe-template",
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
            url: "{$HOST}ajax/grabe-sizes",
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
            url: "{$HOST}ajax/grabe-countries",
            data:'country-type='+val,
            success: function(data){
                $("#countries-data").html(data);
            }
        });
    }
    function grabeBrowsers(val) {
        $.ajax({
            type: "POST",
            url: "{$HOST}ajax/grabe-browsers",
            data:'browser-type='+val,
            success: function(data){
                $("#browsers-data").html(data);
            }
        });
    }
    function grabePlatforms(val) {
        $.ajax({
            type: "POST",
            url: "{$HOST}ajax/grabe-platforms",
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
                    url: "{$HOST}ajax/banner-upload",
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
            url: "{$HOST}ajax/read-notifications",
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
            url: "{$HOST}ajax/grabe-countries",
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
</script>