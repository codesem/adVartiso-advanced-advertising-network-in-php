<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-18 16:00:43
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Invoices/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19287522706053792b7407a9-03565729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e987ca3940efe2fc179cf7e29bee338f5940090c' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Invoices/index.tpl',
      1 => 1615848328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19287522706053792b7407a9-03565729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'succ' => 0,
    'with' => 0,
    'foo' => 0,
    'HOST' => 0,
    'sumbole' => 0,
    'id' => 0,
    'paging' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6053792b775d07_99992173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6053792b775d07_99992173')) {function content_6053792b775d07_99992173($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>User Invoices - Admin</title>

   <div class="content">
            <div class="container-fluid">
<br>
 <?php if ($_smarty_tpl->tpl_vars['succ']->value) {?>
<div class='alert alert-success'>Invoice Deleted Successfully</div>
 <?php }?>
<br>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="blue">
                    <i class="material-icons">local_atm</i>
                </div>
                <br>
                <h4 class="card-title">User Invoices</h4>
                <div class="card-content">
                    <br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-middle">
                                    <thead>
                                    <tr>
                                        <th><div class="fa fa-tag"></div> Id</th>
                                        <th style="text-align: center"><div class="fa fa-address-book "></div> User id</th>
                                        <th style="text-align: center"><div class="fa fa-dollar"></div> Amount</th>

                                        <th style="text-align: center"><div class="fa fa-bank"></div> Method</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-sort"></div> Status</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-calendar"></div> created</th>
                                        
                                        <th style="text-align: center"><div class="fa fa-mail-reply-all"></div> Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['with']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>

                                        <td><b>#<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
</b></td>
                                        
                                       
                                        <td style="text-align: center" ><form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
admin/users/view?id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
">
                                        <div class="form-group">
                                        <input type="hidden" > 
                                        <input class="btn btn-info btn-xs" type="submit"
                                       value="User #<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
" />
                            </div></form>
                                      </td>
                                      
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['sumbole']->value;
echo $_smarty_tpl->tpl_vars['foo']->value['amount'];?>
</td>
                                    
                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['foo']->value['method'];?>
</td>
                        
     <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==1) {?>
                                        <td class="alert alert-success text-center" style="text-align: center">Paid</td>
      <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>
                                        <td class="alert alert-danger text-center" style="text-align: center">Unpaid</td>
                                           <?php }?>
                        <td style="text-align: center"><small><?php echo $_smarty_tpl->tpl_vars['foo']->value['created'];?>
</small></td>
     
     <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']==2) {?>

<td  style="text-align: center">
                         <form method="POST">
                            <div class="col-sm-8 col-sm-offset-3">
                      <div class="form-group">
       <input type="hidden" name="i_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
       <input type="hidden" name="i_am" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['amount'];?>
"> 
       <input type="hidden" name="i_uid" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
"> 

                                <input class="btn btn-success btn-xs" type="submit" name="paid"
                                       value="marked as paid" />
                           
                            </div></div></form>
</td>
      
      <?php }?>
                                           
<td  style="text-align: center">
                                                    <form method="POST">
                            <div class="col-sm-8 col-sm-offset-3">
                      <div class="form-group">
       <input type="hidden" name="i_id" value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
"> 
        
                                <input class="btn btn-danger btn-xs" type="submit" name="delete"
                                       value="Delete" onclick="if (confirm(&quot;Are you sure?&quot;)) { document.post_5a529c86cb181240954732.submit(); } event.returnValue = false; return false;"/>
                           
                            </div></div></form>
</td>
                    
                                        </tr>
    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
      </div>
                    </div>
                </div>
<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1>0) {?>

<div class="row" style="text-align: center">                

<ul class="pagination"><?php echo $_smarty_tpl->tpl_vars['paging']->value;?>
 </ul></div>

<?php } else { ?>

<center><h3>No invioces Found</h3></span></center>
 
<?php }?>
                  
            </div>                        </div>
        </div>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
