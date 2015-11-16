<?php /* Smarty version Smarty-3.1.6, created on 2015-11-12 20:30:41
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\User\user_update.html" */ ?>
<?php /*%%SmartyHeaderCode:271756263467e69d03-13538580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249fe8be6dc89b7a54a593be8b08f67259e9b7f0' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\User\\user_update.html',
      1 => 1447331434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271756263467e69d03-13538580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56263467ec3aa',
  'variables' => 
  array (
    'user_info' => 0,
    'all_idy' => 0,
    'cur_idy' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56263467ec3aa')) {function content_56263467ec3aa($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加用户</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》更改用户信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/user_list">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>用户名称：</td>
                    <td><input type="text" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
"/></td>
                </tr>

                <tr>
                    <td>性别：</td>
                    <td><input type="text" name="user_sex" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_sex'];?>
"/></td>
                </tr>
                <tr>
                    <td>登陆账号：</td>
                    <td>
                        <input type="text" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_email'];?>
">
                    </td>
                </tr>
                <tr>
                    <td>激活状态</td>
                    <td>
                        <select name="identify" id="">
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['all_idy']->value,'selected'=>$_smarty_tpl->tpl_vars['cur_idy']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>QQ</td>
                    <td>
                        <input type="text" name="user_qq" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_qq'];?>
">
                    </td>
                </tr>
                <tr>
                    <td>电话</td>
                    <td>
                        <input type="text" name="user_tel" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_tel'];?>
">
                    </td>
                </tr>
                <tr>
                    <td>余额</td>
                    <td>
                        <input type="text" name="user_money" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_money'];?>
">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_id'];?>
" />
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>