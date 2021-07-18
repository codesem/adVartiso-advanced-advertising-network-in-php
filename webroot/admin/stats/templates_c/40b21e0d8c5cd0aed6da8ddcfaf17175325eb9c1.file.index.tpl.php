<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-04-15 02:25:30
         compiled from "/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Stats/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57687471560657e3bd0ab33-42599388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40b21e0d8c5cd0aed6da8ddcfaf17175325eb9c1' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/advartiso/webroot/template/advanced/Admin/Stats/index.tpl',
      1 => 1618453528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57687471560657e3bd0ab33-42599388',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60657e3bd358c4_54307093',
  'variables' => 
  array (
    'monthly_views' => 0,
    'monthly_clicks' => 0,
    'monthly_earnings' => 0,
    'do_nonfound' => 0,
    'required' => 0,
    'do_error' => 0,
    'csrfToken' => 0,
    'campaigns' => 0,
    'foo' => 0,
    'id' => 0,
    'stats' => 0,
    'statistics' => 0,
    'countries' => 0,
    'referers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60657e3bd358c4_54307093')) {function content_60657e3bd358c4_54307093($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



                        <div class="row">

                            <div class="col-md-12">
                                <div class="card-box">
                                        <div class="col-sm-12">
                                             <div style="display: flex; justify-content: flex-end"></div>
                                              <div class="col-xl-2 col-md-4">
                                                 <div class="card-box widget-box-two widget-two-success">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow">Views <small>(MONTH)</small></p>
                                                      <h2><i class="fa fa-eye"></i> <span data-plugin="counterup"><?php echo $_smarty_tpl->tpl_vars['monthly_views']->value;?>
</span></h2>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                                <div class="card-box widget-box-two widget-two-primary">
                                                   <div class="wigdet-two-content">
                                                     <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Spending">CLIKCS <small>(MONTH)</small></p>
                                                     <h2><i class="fa fa-bar-chart"></i> <span data-plugin="counterup"><?php echo $_smarty_tpl->tpl_vars['monthly_clicks']->value;?>
</span></h2>
                                                      </div>
                                                     </div>
                                                </div>
                                              <div class="col-xl-2 col-md-4">
                                               <div class="card-box widget-box-two widget-two-danger">
                                                 <div class="wigdet-two-content">
                                                  <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Invoices">Earnings <small >(MONTH)</small></p>
                                                  <h2><i class="fa fa-dollar"></i> <span data-plugin="counterup"><?php echo $_smarty_tpl->tpl_vars['monthly_earnings']->value;?>
</span></h2>
                                                  </div>
                                                 </div>
                                                </div>
                                        </div><!-- end col --><hr>
                                        <div class="text-center">
                                            <span class="badge badge-success">Check every campaign statistics</span>
                                        </div>
                                            <!-- filter form -->
                                            <?php if ($_smarty_tpl->tpl_vars['do_nonfound']->value) {?><div class="alert alert-danger">Error: Campaign Non Found.</div><?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['required']->value) {?><div class="alert alert-danger">Error: All Fields Are Required!</div><?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['do_error']->value) {?><div class="alert alert-danger">Error: Somthing Wrong! Please Try Again.</div><?php }?>
                        					<form class="form-vertical" method="POST">
                                              
                                                <input type="hidden" name="filter" value="filter"/>
                                                <input type="hidden" name="csrf" value="<?php echo $_smarty_tpl->tpl_vars['csrfToken']->value;?>
"/>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                     <select name="camp_id" class="form-control">
                    <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['campaigns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                         <option value="<?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['foo']->value['id']==$_smarty_tpl->tpl_vars['id']->value) {?> selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
 
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_type'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='img_banner') {?>
                                                             (Image Banner)
                                                    <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_type'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2=='text_banner') {?>
                                                             (Text Banner)
                                                    <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_type'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=='popup') {?>
                                                             (Popup)
                                                    <?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['foo']->value['camp_type'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='direct') {?>
                                                             (Direct Link)
                                                    <?php }}}}?>
                                                         </option>
                    <?php } ?>
                                                     </select>
                                                    </div>
                                                 </div>
                                                <button type="submit" class="btn btn-black waves-effect w-md m-b-5"><i class="fa fa-line-chart"></i> Filter</button>
	                                        </form>
	                                        <?php if ($_smarty_tpl->tpl_vars['stats']->value) {?>
	                                           <hr><h5>Statistics By Campaign (Current Month)</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-unsorted"></i> Status</th>
                                                                <th><i class="fa fa-money"></i> Admin Earn</th>
                                                                <th><i class="fa fa-eye"></i> VIEWS</th>
                                                                <th><i class="fa fa-bar-chart"></i> CLICKS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                            <tr>
                                                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</th>
                                                                <td>
                                               <?php if ($_smarty_tpl->tpl_vars['foo']->value['status']=='1') {?>
                                                               <span class="badge badge-danger">EARN</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='2') {?>
                                                               <span class="badge badge-danger">IP CHANGED</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='3') {?>
                                                               <span class="badge badge-danger">DON'T COUNT</span>
                                               <?php } elseif ($_smarty_tpl->tpl_vars['foo']->value['status']=='4') {?>
                                                               <span class="badge badge-danger">FRAUD</span>
                                                <?php }?>
                                                                </td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['earn'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['views'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['clicks'];?>
</td>
                                                            </tr>
                                               <?php } ?>
                                                        </tbody>
                                                    </table>
                                            </div>
                                              <?php if (!$_smarty_tpl->tpl_vars['statistics']->value) {?>
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No statistics was Found..</span>
                                               </div>
                                              <?php }?>
                                               <hr><h5>Statistics By Country (Current Month)</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-globe"></i> Country</th>
                                                                <th><i class="fa fa-money"></i> Admin Earn</th>
                                                                <th><i class="fa fa-eye"></i> VIEWS</th>
                                                                <th><i class="fa fa-bar-chart"></i> CLICKS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                            <tr>
                                                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</th>
                                                                <td><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['foo']->value['country'];?>
</span></td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['earn'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['views'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['clicks'];?>
</td>
                                                            </tr>
                                               <?php } ?>
                                                        </tbody>
                                                    </table>
                                            </div>
                                              <?php if (!$_smarty_tpl->tpl_vars['countries']->value) {?>
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No statistics was Found..</span>
                                               </div>
                                              <?php }?>
                                               <hr><h5>Statistics By Referer Domains (Current Month)</h5>
	                                           <div class="table-responsive">
                                                    <table class="table m-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th><i class="fa fa-share"></i> Referer</th>
                                                                <th><i class="fa fa-money"></i> Admin Earn</th>
                                                                <th><i class="fa fa-eye"></i> VIEWS</th>
                                                                <th><i class="fa fa-bar-chart"></i> CLICKS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
	                                           <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['referers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
                                                            <tr>
                                                                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</th>
                                                                <td><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['foo']->value['referer_domain'];?>
</span></td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['earn'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['views'];?>
</td>
                                                                <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['clicks'];?>
</td>
                                                            </tr>
                                               <?php } ?>
                                                        </tbody>
                                                    </table>
                                            </div>
                                              <?php if (!$_smarty_tpl->tpl_vars['referers']->value) {?>
                                               <div class="text-center">
                                                   <span class="badge badge-danger" style="margin-top: 30px;">No statistics was Found..</span>
                                               </div>
                                              <?php }?>
                                            <?php }?>
                                </div> <!-- end card -->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
