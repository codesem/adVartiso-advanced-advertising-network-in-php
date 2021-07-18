<?php /* Smarty version Smarty-3.1.21-dev, created on 2020-12-26 18:38:27
         compiled from "/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Options/withdraws.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21349704885fe7832346d1c5-10793347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6809f76f97de1ad315307dc23a9e8a4259d0ffab' => 
    array (
      0 => '/home/codsemco/public_html/cardtag/webroot/template/main/Admin/Options/withdraws.tpl',
      1 => 1580026390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21349704885fe7832346d1c5-10793347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'updated' => 0,
    'do_error' => 0,
    'HOST' => 0,
    '_SAVE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5fe78323495804_99132504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fe78323495804_99132504')) {function content_5fe78323495804_99132504($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
             <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class='alert alert-success'>Withdraws Settings Updated Successfully!</div><?php }?>
             <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div><?php }?>
             <?php echo $_smarty_tpl->getSubTemplate ('../Options/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                 <form class="form-horizontal" method="POST">
                      <div class="form-group">
                           <label for="Payouts" class="col-md-10">
                            Payouts
                           </label>
                           <div class="col-md-6">
                              <select name="form_withdraw" class="form-control">
                                <option value="fhb"<?php if (do_config(6)=='fhb') {?> selected="selected"<?php }?>>Only FaucetHub</option>
                                <option value="all"<?php if (do_config(6)=='all') {?> selected="selected"<?php }?>>All Methods</option>
                             </select>
                           </div>
                      </div>
                      <div class="form-group">
                            <label for="Minimumwithdraw" class="col-md-10">
                             Minimum withdraw
                            </label>
                            <div class="col-sm-6">
                                 <input type="text" name="min_withdraw" class="form-control" value="<?php echo do_config(2);?>
"/>
                         </div>
                      </div>
                      <div class="form-group">
                            <label for="Fees" class="col-md-10">
                             Fees
                            </label>
                            <div class="col-sm-6">
                                 <input type="text" name="withdraw_fee" class="form-control" value="<?php echo do_config(15);?>
"/>
                         </div>
                      </div>

                     <?php if (do_config(6)=='fhb') {?>
                      <h3>FaucetHub Settings</h3><br>
                      <span class="help"><i class="fa fa-question-circle"></i> For instructions step by step click <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
pages/fhb-setup" target="_blank">here</a>.</span><hr>
                      <div class="form-group">
                            <label for="APIKEY" class="col-md-10">
                              API KEY
                            </label>
                            <div class="col-sm-6">
                                 <input type="text" name="fhb_api" class="form-control" value="<?php echo do_config(10);?>
"/>
                         </div>
                      </div>
                     <?php }?>
                       <button type="submit" name="up-withdraw" value="up-withdraw" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> <?php echo $_smarty_tpl->tpl_vars['_SAVE']->value;?>
</button>

                    </form>
                                 </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
