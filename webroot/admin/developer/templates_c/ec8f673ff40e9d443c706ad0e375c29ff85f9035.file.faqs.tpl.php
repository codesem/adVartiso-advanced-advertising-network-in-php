<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-19 12:55:40
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Developer/faqs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14299095960cde910717a04-93379600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec8f673ff40e9d443c706ad0e375c29ff85f9035' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Admin/Developer/faqs.tpl',
      1 => 1624107337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14299095960cde910717a04-93379600',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cde910742c82_95497426',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cde910742c82_95497426')) {function content_60cde910742c82_95497426($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                        <div class="col-md-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?php echo $_smarty_tpl->getSubTemplate ('../Developer/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                            <div class="text-center">
                                                <h4><i class="fa fa-gift"></i> We Hope You Find This FAQs List Useful.</h4><hr>
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    How to update your current version?
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                             <b>Follow this steps :</b><br>
                                                             - Go to the updates section.<br>
                                                             - Click (Check For Updates) button.<br>
                                                             - New Form will be shown, Once you click start server will auto download the new version.<br>
                                                             - Last, Click the Next button.<br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Why earnings/views/clicks not counting?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            AdVartiso have an anti-cheat system, So if you get your zone code and view or click by yourself doesn't generate or count earnings , instead mark them as fraud.<br>
                                                            Our anti-cheat system detect IP(s) that linked to publishers zones and prevent them from self earning.<br>
                                                            Our anti-cheat system detect VPN/PROXY IP(s).<br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                Why no banners shown?
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            Make sure there are some campaigns active and have ALL devices and ALL Countries.
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                                </div> <!-- end card -->
                            </div>

                            <!-- end col -->
                        </div>
                        <!-- end row -->

 

<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
