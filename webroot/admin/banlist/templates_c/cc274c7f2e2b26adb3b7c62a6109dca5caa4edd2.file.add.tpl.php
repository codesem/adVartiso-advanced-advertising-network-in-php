<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-28 10:58:38
         compiled from "/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Banlist/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14038601876060615e5d9229-00272010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc274c7f2e2b26adb3b7c62a6109dca5caa4edd2' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/proads/webroot/template/Advanced/Admin/Banlist/add.tpl',
      1 => 1616928855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14038601876060615e5d9229-00272010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6060615e5eefd7_31468319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6060615e5eefd7_31468319')) {function content_6060615e5eefd7_31468319($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                       <div class="row">
                            <div class="col-sm-12">
                               <div class="card-box">
                <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try again.</div><?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ('../Banlist/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        					<form class="form-horizontal" method="POST">
                                              
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <input type="text" name="ip" class="form-control" placeholder="IP Number">
	                                                </div>
	                                            </div>
	                                            <div class="form-group">
	                                                <div class="col-md-10">
	                                                    <textarea type="text" name="reason" class="form-control" placeholder="Reason"></textarea>
	                                                </div>
	                                            </div>
                                                <div class="form-group">
                                                    <div class="col-sm-10">
                                                    <select name="status" class="form-control">
                                                     <option value="2" selected>Blacklist</option>
                                                     <option value="1">Whitelist</option>
                                                    </select>
                                                   </div>
                                                </div>

                                               <button type="submit" name="add-ip" value="add-ip" class="btn btn-primary btn-bordered waves-effect w-md m-b-5"> Add</button>
	                                        </form>

                               </div>
                            </div>
                        </div>
                       </div>
 <?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
