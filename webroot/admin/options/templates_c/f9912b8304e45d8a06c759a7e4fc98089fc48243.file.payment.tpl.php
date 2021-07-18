<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-22 05:35:26
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Options/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19855129246069e0ec9bcad8-83311052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9912b8304e45d8a06c759a7e4fc98089fc48243' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Options/payment.tpl',
      1 => 1619069724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19855129246069e0ec9bcad8-83311052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6069e0ec9e4963_46036295',
  'variables' => 
  array (
    'updated' => 0,
    'do_error' => 0,
    'do_demo' => 0,
    'currencies' => 0,
    'foo' => 0,
    'dmethods' => 0,
    'HOST' => 0,
    'AST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6069e0ec9e4963_46036295')) {function content_6069e0ec9e4963_46036295($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class='alert alert-success'>Payment Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_demo']->value) {?><div class="alert alert-danger">Error: You can't do this action on demo mode.</div><?php }?>
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
"<?php if (do_config(17)==$_smarty_tpl->tpl_vars['foo']->value['name']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['foo']->value['symbol'];?>
)</option>
                                            <?php } ?>
                                                </select>
                                            </div>
                                       </div>
                                       <div class="form-group">
                                           <div class="col-md-7">
                                               <label for="Minimum" class="col-md-10">Minimum deposit</label>
                                               <input type="number" name="min_deposit" class="form-control" value="<?php echo do_config(2);?>
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
	                                           <input type="password" name="public_key_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['public_key'];?>
">
	                                       </div>
	                                   </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="SharedSecret" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Shared Secret</label>
	                                           <input type="password" name="secret_key_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['secret_key'];?>
">
	                                       </div>
	                                   </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['methods']=='stripe') {?>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="PublicKey" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Public Key</label>
	                                           <input type="password" name="public_key_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['public_key'];?>
">
	                                       </div>
	                                   </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="SecretKey" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Secret Key</label>
	                                           <input type="password" name="secret_key_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['secret_key'];?>
">
	                                       </div>
	                                   </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['methods']=='bank') {?>
	                                            <div class="form-group">
	                                           <label for="PublicKey" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Account</label>
	                                                <div class="col-md-10">
                                                        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
	                                                    <textarea type="text" name="account_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" id="editor1" rows="10" cols="90" class="form-control"><?php echo $_smarty_tpl->tpl_vars['foo']->value['account'];?>
</textarea>
	                   <?php echo '<script'; ?>
>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1' );
                        <?php echo '</script'; ?>
>
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
                                <?php if ($_smarty_tpl->tpl_vars['foo']->value['methods']!='stripe'&&$_smarty_tpl->tpl_vars['foo']->value['methods']!='bank') {?>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="IPNUrl" class="col-md-10">IPN Url</label>
	                                           <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['ipn_url'];?>
" disabled>
	                                       </div>
	                                   </div>
                                <?php }?>
                                     <hr>
                            <?php } ?>
                                       <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-floppy-o"></i> Save</button>
	                                        
	                               </form>


                                 </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
