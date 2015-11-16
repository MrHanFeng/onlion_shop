<?php /* Smarty version Smarty-3.1.6, created on 2015-10-29 22:13:32
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Order\gwc_success.html" */ ?>
<?php /*%%SmartyHeaderCode:42805632056441b081-44848303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f32740375852a381ecb336f8fb3b75914aab27b1' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Order\\gwc_success.html',
      1 => 1446128011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42805632056441b081-44848303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563205645c0ef',
  'variables' => 
  array (
    'order_info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563205645c0ef')) {function content_563205645c0ef($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>订单列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：订单管理-》订单列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/order_add">【添加订单】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>订单编号</td>
                        <td>商品名</td>
                        <td>用户</td>
                        <td>收货人信息</td>
                        <td>订单状态</td>
                        <td>运送方式</td>
                        <td>支付方式</td>
                        <td>创建时间</td>
                        <td>支付时间</td>
                        <td>发货时间</td>
                        <td>收货时间</td>
                        <td>备注</td>
                        <td align="center">操作</td>
                    </tr>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_goods_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_user_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_consignee_info'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_status'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_ship_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_pay_name'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['order_create_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['order_pay_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['order_send_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['order_confirm_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['order_remarks'];?>
</td>
                        <td>
                            <a href="<?php echo @__CONTROLLER__;?>
/order_update/order_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
">修改</a>
                            <a href='<?php echo @__CONTROLLER__;?>
/order_delete?order_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
' onclick="return confirm('确定要删除？');">删除</a>
                        </td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                           <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>