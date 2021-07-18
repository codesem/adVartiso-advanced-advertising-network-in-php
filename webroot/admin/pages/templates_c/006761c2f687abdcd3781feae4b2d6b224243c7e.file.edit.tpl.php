<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-03-16 16:47:21
         compiled from "/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Pages/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15437694796050e119c24746-17358884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '006761c2f687abdcd3781feae4b2d6b224243c7e' => 
    array (
      0 => '/home2/xutumuro/revadvert.com/webroot/template/Advanced/Admin/Pages/edit.tpl',
      1 => 1615848328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15437694796050e119c24746-17358884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'edit' => 0,
    'HOST' => 0,
    'THEME' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6050e119c51041_46335554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6050e119c51041_46335554')) {function content_6050e119c51041_46335554($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../Layout/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <title>Edit pages - Admin</title>
 <div class="content">
            <div class="container-fluid">
<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>
<div class='alert alert-success' >You have edit this page with success!</div>
<?php }?>


<br>
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">edit</i>
                </div>
                <br>
                <h4 class="card-title">Edit Pages</h4>
                <div class="card-content">
                    <br>
                    <form id="changeDataVO" class="form form-horizontal" data-toggle="validator" method="POST">


                    <div class="form-group">
                      <label for="accountNumber" class="col-sm-1 control-label"style="white-space: nowrap; text-align: left; float: left;">
                               Content
                            </label>
                        <div class="col-sm-9">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
template/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/assest/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

            <textarea name="editor1" id="editor1" rows="10" cols="80">
          <?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
            <?php echo '<script'; ?>
>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
                <?php echo '</script'; ?>
>
            </textarea>


</div></div>
                        
                        <div class= "form-group">  
                            <div class="col-sm-5 col-sm-offset-1">

                                <h5 style="color: red"></h5>
                                <h5 style="color: #00a000"></h5>

                                <br>
                                <input class="btn btn-info" name="edit" type="submit"
                                       value="Edit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('../Layout/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
