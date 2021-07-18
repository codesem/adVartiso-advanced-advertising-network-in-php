<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-22 02:52:59
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Options/withdrawal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1110738951607596c21bdcd3-13069503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '329ae5acde286707a05ff00ff675b23666625a5e' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Options/withdrawal.tpl',
      1 => 1619059789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1110738951607596c21bdcd3-13069503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_607596c21e9fe3_54213466',
  'variables' => 
  array (
    'deleted' => 0,
    'added' => 0,
    'updated' => 0,
    'do_error' => 0,
    'do_demo' => 0,
    'wmethods' => 0,
    'foo' => 0,
    'ADM' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_607596c21e9fe3_54213466')) {function content_607596c21e9fe3_54213466($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                        <div class="row">
                            <div class="col-md-12">
                               <div class="card-box">
                                   <?php if ($_smarty_tpl->tpl_vars['deleted']->value) {?><div class='alert alert-success'>Withdrawal Deleted Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['added']->value) {?><div class='alert alert-success'>New Withdrawal Added Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['updated']->value) {?><div class='alert alert-success'>Withdrawal Settings Updated Successfully!</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class='alert alert-danger'>Error: Somthing wrong! Please Try again.</div><?php }?>
                                   <?php if ($_smarty_tpl->tpl_vars['do_demo']->value) {?><div class="alert alert-danger">Error: You can't do this action on demo mode.</div><?php }?>
                                   <?php echo $_smarty_tpl->getSubTemplate ('../Options/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                                   <form class="form-horizontal" method="POST">
                                       <input type="hidden" name="up-withdraws" value="up-withdraws"/>

                            <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wmethods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                       <h4><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 Settings <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/withdrawal?delete=<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" class="btn btn-danger btn-xs" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"><i class="fa fa-trash"></i></a></h4><hr>
                                       <div class="form-group">
                                           <div class="col-md-7">
                                               <label for="Status" class="col-md-7">Status</label>
                                               <select name="status_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control">
                                                    <option value="1"<?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?> selected="selected"<?php }?>>Enable</option>
                                                    <option value="2"<?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?> selected="selected"<?php }?>>Disable</option>
                                                </select>
                                            </div>
                                       </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="minimum" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 minimum withdrawal</label>
	                                           <input type="text" name="minimum_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['minimum'];?>
">
	                                       </div>
	                                   </div>
	                                   <div class="form-group">
	                                       <div class="col-md-7">
	                                           <label for="fee" class="col-md-10"><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
 fee</label>
	                                           <input type="text" name="fee_<?php echo $_smarty_tpl->tpl_vars['foo']->value['methods'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['fee'];?>
">
	                                       </div>
	                                   </div>
                                       
                                     <hr>
                            <?php } ?>
                                       <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-check-circle"></i>  Save</button>
                                       <a href="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/add-withdrawal" class="btn btn-primary waves-effect w-md m-b-5"><i class="fa fa-plus-circle"></i> Add Method</a>
	                               </form>


                                 </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
