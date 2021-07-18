<?php /* Smarty version Smarty-3.1.21-dev, created on 2021-06-20 18:21:28
         compiled from "/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Banner/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96941413060cf87284c4b84-83429480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbc7755a528fd0e914dd48c927b85aa9bd7ab9ea' => 
    array (
      0 => '/storage/ssd2/175/17088175/public_html/webroot/template/advanced/Banner/index.tpl',
      1 => 1624114910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96941413060cf87284c4b84-83429480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad_type' => 0,
    'id' => 0,
    'url' => 0,
    'HOST' => 0,
    'title' => 0,
    'description' => 0,
    'url_host' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_60cf87284f4f34_05126335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60cf87284f4f34_05126335')) {function content_60cf87284f4f34_05126335($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Zone - <?php echo do_config(0);?>
</title>
    </head>
    <body>
        <?php if ($_smarty_tpl->tpl_vars['ad_type']->value=='img_banner') {?>
        <?php echo $_smarty_tpl->getSubTemplate ('../Banner/img-ad-style.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-str-visited-flag="true" data-str-rendered="1616004005649">
            <div class="str-adunit str-card-exp str-adunit-img-top str-clickout">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_blank">
                    <div class="thumbnail-wrapper">
                        <div class="str-thumbnail" style=""></div>
                    </div>
                </a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
" target="_blank">
                    <div class="str-opt-out-container _3hK_KnZ5Ea1czHOAb0XjRp" style="right: 0px;">
                        <span class="str-opt-out-icon _19_ff9lYbpT9kOPGhy3mQS"></span>
                        <span class="str-opt-out-label _1iU6QyDEUwEXo1W-5nEg60"><?php echo do_config(0);?>
</span>
                    </div>
                </a>
            <div>
        </div>
        </div>
        </div>
        <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ('../Banner/txt-ad-style.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-str-visited-flag="true" data-str-rendered="1616004005649">
            <div class="str-adunit str-card-exp str-adunit-img-top str-clickout">
                <div class="thumbnail-wrapper"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_blank"></a></div>
                <div class="str-title"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a></div>
                <div class="str-description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
                <div class="str-bottom">
                       <div class="str-advertiser"><?php echo $_smarty_tpl->tpl_vars['url_host']->value;?>
</div>
                </div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['HOST']->value;?>
" target="_blank">
                    <div class="str-opt-out-container _3hK_KnZ5Ea1czHOAb0XjRp" style="right: 0px;">
                        <span class="str-opt-out-icon _19_ff9lYbpT9kOPGhy3mQS"></span>
                        <span class="str-opt-out-label _1iU6QyDEUwEXo1W-5nEg60"><?php echo do_config(0);?>
</span>
                    </div>
                </a>
            <div>
        </div>
        </div>
        </div>
        <?php }?>
    </body>
</html><?php }} ?>
