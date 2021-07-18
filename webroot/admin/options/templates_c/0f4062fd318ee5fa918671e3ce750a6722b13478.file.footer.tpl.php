<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-03 08:17:51
         compiled from "/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Layout/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1856736482603f462f8c4bd7-07509600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f4062fd318ee5fa918671e3ce750a6722b13478' => 
    array (
      0 => '/home/codsemco/projects.codsem.com/cardavo/webroot/template/main/Admin/Layout/footer.tpl',
      1 => 1611844232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1856736482603f462f8c4bd7-07509600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'APPversion' => 0,
    'date' => 0,
    'AST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_603f462f8d15b8_68021288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_603f462f8d15b8_68021288')) {function content_603f462f8d15b8_68021288($_smarty_tpl) {?>            </div> <!-- container -->
                </div> <!-- content -->
                
                <footer class="footer text-right">
                   Version <?php echo $_smarty_tpl->tpl_vars['APPversion']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 © <?php echo do_config(0);?>

                </footer>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <!-- =========================
    	     AJAX CALL
        ============================== -->
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TMP']->value)."/Ajax/admin.js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php echo '<script'; ?>
>
            var resizefunc = [];
        <?php echo '</script'; ?>
>

        <!-- jQuery  -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/detect.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/fastclick.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/jquery.blockUI.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/waves.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/jquery.slimscroll.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/jquery.scrollTo.min.js"><?php echo '</script'; ?>
>
        
        <!-- Plugins  -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/switchery/switchery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/multiselect/js/jquery.multi-select.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/jquery-quicksearch/jquery.quicksearch.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/select2/js/select2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/autocomplete/countries.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
pages/jquery.form-advanced.init.js"><?php echo '</script'; ?>
>

        <!-- Counter js  -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/waypoints/jquery.waypoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/counterup/jquery.counterup.min.js"><?php echo '</script'; ?>
>

        <!-- Flot chart js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/flot-chart/jquery.flot.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/flot-chart/jquery.flot.time.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/flot-chart/jquery.flot.tooltip.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/flot-chart/jquery.flot.resize.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/flot-chart/jquery.flot.pie.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/flot-chart/jquery.flot.selection.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/flot-chart/jquery.flot.crosshair.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
plugins/bootstrap-daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>

        <!-- Dashboard init -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
pages/jquery.dashboard_2.js"><?php echo '</script'; ?>
>

        <!-- App js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/jquery.core.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['AST']->value;?>
js/jquery.app.js"><?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
