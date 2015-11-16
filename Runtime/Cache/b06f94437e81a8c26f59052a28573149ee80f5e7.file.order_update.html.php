<?php /* Smarty version Smarty-3.1.6, created on 2015-11-12 21:30:20
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Order\order_update.html" */ ?>
<?php /*%%SmartyHeaderCode:2432056322023792475-23391445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06f94437e81a8c26f59052a28573149ee80f5e7' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Order\\order_update.html',
      1 => 1447335017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2432056322023792475-23391445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563220237f7d8',
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563220237f7d8')) {function content_563220237f7d8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float:left">当前位置是：订单管理-》更改订单信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/order_list">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>订单号：</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['order_info']->value['order_sn'];?>
</td>
                </tr>

                <tr>
                    <td>订单状态：</td>
                    <td>
                        <select name="order_status" >
                            <option value="待付款">待付款</option>
                            <option value="已付款">已付款</option>
                            <option value="已发货">已发货</option>
                            <option value="已完成">已完成</option>
                            <option value="取消">取消</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->tpl_vars['order_info']->value['order_id'];?>
" />
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>