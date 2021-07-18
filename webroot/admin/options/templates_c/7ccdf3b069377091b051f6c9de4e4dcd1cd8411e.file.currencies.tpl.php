<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-03 08:19:11
         compiled from "/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Options/currencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112648503603f4653631db7-10319316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ccdf3b069377091b051f6c9de4e4dcd1cd8411e' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Options/currencies.tpl',
      1 => 1614759548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112648503603f4653631db7-10319316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_603f465364b5c4_19399616',
  'variables' => 
  array (
    'currencies' => 0,
    'foo' => 0,
    'ADM' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603f465364b5c4_19399616')) {function content_603f465364b5c4_19399616($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                                               <?php if (!$_smarty_tpl->tpl_vars['currencies']->value) {?>
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No currencies was Found..</span>
                                               </div>
                                               <?php }?>
                                 </div>
                            </div>
                        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
