<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-03 08:17:56
         compiled from "/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Options/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1436867909603f4634ecc1e2-08910726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a581c5d6979b6142e9f31a6f261965c2ee11a306' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Options/payment.tpl',
      1 => 1611847874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1436867909603f4634ecc1e2-08910726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'updated' => 0,
    'do_error' => 0,
    'currencies' => 0,
    'foo' => 0,
    'dmethods' => 0,
    'HOST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_603f4634ef1c53_89270532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603f4634ef1c53_89270532')) {function content_603f4634ef1c53_89270532($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class='alert alert-success'>Payment Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div><?php }?>
                                   <?php echo $_smarty_tpl->getSubTemplate ('../Options/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                   <form class="form-horizontal" method="POST">
                                       <input type="hidden" name="up-payments" value="up-payments"/>
                                       <h4>Payment Settings</h4><hr>
                                       <div class="form-group">
                                           <div class="col-md-7">
                                               <label for="CurrencyCode" class="col-md-7">Currency Code</label>
                                               <select name="currency" class="form-control">
                                            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
"<?php if (do_config(16)==$_smarty_tpl->tpl_vars['foo']->value['name']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['foo']->value['symbol'];?>
)</option>
                                            <?php } ?>
                                                </select>
                                            </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="col-md-7">
                                               <label for="Minimum" class="col-md-10">Minimum deposit</label>
                                               <input type="number" name="min_deposit" class="form-control" value="<?php echo do_config(3);?>
">
                                            </div>
                                       </div><hr>
	                                            
                            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dmethods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                       <h4><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Settings</h4><hr>
                                       
                                <?php if ($_smarty_tpl->tpl_vars['foo']->value['methods']=='paypal') {?>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <small>Please Go to <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
pages/paypal-setup">PayPal Setup Page</a>, So you can make it working.</small>
	                                       </div>
	                                   </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="PayPalEmail" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Email</label>
	                                           <input type="text" name="account_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['account'];?>
">
	                                       </div>
	                                   </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['methods']=='coinbase') {?>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <small>Please Go to <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
pages/coinbase-setup">Coinbase Setup Page</a>, So you can make it working.</small>
	                                       </div>
	                                   </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="APIKey" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 API Key</label>
	                                           <input type="text" name="public_key_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['public_key'];?>
">
	                                       </div>
	                                   </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="SharedSecret" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Shared Secret</label>
	                                           <input type="text" name="secret_key_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['secret_key'];?>
">
	                                       </div>
	                                   </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['methods']=='stripe') {?>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="PublicKey" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Public Key</label>
	                                           <input type="text" name="public_key_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['public_key'];?>
">
	                                       </div>
	                                   </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="SecretKey" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Secret Key</label>
	                                           <input type="text" name="secret_key_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['secret_key'];?>
">
	                                       </div>
	                                   </div>
                                <?php }?>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="TAXPercent" class="col-md-10">TAX Percent</label>
	                                           <input type="text" name="tax_percent_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['tax_percent'];?>
">
	                                       </div>
	                                   </div>
                                <?php if ($_smarty_tpl->tpl_vars['foo']->value['methods']!='stripe') {?>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="IPNUrl" class="col-md-10">IPN Url</label>
	                                           <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['ip_url'];?>
" disabled>
	                                       </div>
	                                   </div>
                                <?php }?>
                                     <hr>
                            <?php } ?>
                                       <button type="submit" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Save</button>
	                                        
	                               </form>


                                 </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
