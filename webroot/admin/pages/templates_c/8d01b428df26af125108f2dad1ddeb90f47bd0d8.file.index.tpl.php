<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-01-23 09:52:36
         compiled from "/home2/mrporeek/creativeocean.pw/webroot/template/Metro/Admin/Pages/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1001552419600c4644e56fe5-39076190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d01b428df26af125108f2dad1ddeb90f47bd0d8' => 
    array (
      0 => '/home2/mrporeek/creativeocean.pw/webroot/template/Metro/Admin/Pages/index.tpl',
      1 => 1550303088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1001552419600c4644e56fe5-39076190',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_600c4644e9d7c0_57214602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_600c4644e9d7c0_57214602')) {function content_600c4644e9d7c0_57214602($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>Pages - Admin</title>

  <div class="content">
            <div class="container-fluid">
                <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">pages</i>
                </div>
                <br>
                <h4 class="card-title">Pages</h4>
                <div class="card-content">
                    <br>
                            <div class="table-responsive">
                                <table class="table table-middle">
                                    <thead>
                                    <tr>

                                        <th><div class="fa fa-pencil"></div> Page</th>

                                        <th style="text-align: center"><div class="fa fa-sort"></div> Published</th>

                                        <th style="text-align: center"><div class="fa fa-mail-reply-all"></div> Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td><b>#Rules</b></td>

                        <td style="text-align: center">Yes</td>

                                 <td  style="text-align: center">
                                 <form method="POST">
                        <div class="col-sm-8 col-sm-offset-3">
                        <div class="form-group">
                        <input type="hidden" name="p_id" value="rules"> 
                       <input class="btn btn-warning btn-xs" type="submit" name="edit" value="Edit"/></div>
                               </div></form></td>

                    
                                        </tr>
                                        <tr>
                                        <td><b>#Terms</b></td>

                        <td style="text-align: center">Yes</td>

                                 <td  style="text-align: center">
                                 <form method="POST">
                        <div class="col-sm-8 col-sm-offset-3">
                        <div class="form-group">
                        <input type="hidden" name="p_id" value="terms"> 
                       <input class="btn btn-warning btn-xs" type="submit" name="edit" value="Edit"/></div>
                               </div></form></td>

                    
                                        </tr>
                                        
                                        <tr>
                                        <td><b>#Policy</b></td>

                        <td style="text-align: center">Yes</td>

                                 <td  style="text-align: center">
                                 <form method="POST">
                        <div class="col-sm-8 col-sm-offset-3">
                        <div class="form-group">
                        <input type="hidden" name="p_id" value="policy"> 
                       <input class="btn btn-warning btn-xs" type="submit" name="edit" value="Edit"/></div>
                               </div></form></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                            </div>
    </div>
                    </div>
                </div>
             <center>
                    
            </div>                        </div>
        </div>


<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
