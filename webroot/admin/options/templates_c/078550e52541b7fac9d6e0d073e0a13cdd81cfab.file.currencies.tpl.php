<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-27 23:04:19
         compiled from "/home/codsemco/public_html/cardavo/webroot/template/main/Admin/Options/currencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7618204026011f173c37ef6-10833896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078550e52541b7fac9d6e0d073e0a13cdd81cfab' => 
    array (
      0 => '/home/codsemco/public_html/cardavo/webroot/template/main/Admin/Options/currencies.tpl',
      1 => 1609602359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7618204026011f173c37ef6-10833896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'foo' => 0,
    'ADM' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6011f173c4dc56_32020467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6011f173c4dc56_32020467')) {function content_6011f173c4dc56_32020467($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
             <?php echo $_smarty_tpl->getSubTemplate ('../Options/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                     <div class="table-responsive">
                                                    <table class="table m-0">

                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-bank"></i> Method</th>
                                                                <th><i class="fa fa-money"></i> Symbol</th>
                                                                <th><i class="fa fa-calendar"></i> Date</th>
                                                                <th><i class="fa fa-mail-reply-all"></i> Actions</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                            <tr>
                                                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
</th>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['name'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['symbol'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['created'];?>
</td>
                   <td>
                     <form method="POST">
                      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
                      <button class="btn btn-warning btn-xs" type="submit" name="delete" value="Delete" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;">Delete</button>
                     </form> 
                    </td>
                   <td>
                   <form action="<?php echo $_smarty_tpl->tpl_vars['ADM']->value;?>
options/edit/<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
/" method="POST">
                    <button class="btn btn-success btn-xs">Edit</button>
                   </form>
                   </td>
                    </tr>
                                               <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                               <?php if (!$_smarty_tpl->tpl_vars['currencies']->value) {?><span class="badge badge-danger elem-center" style="margin-left: 200px;">No currencies was Found..</span><?php }?>
                                 </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
