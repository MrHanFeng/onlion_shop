<?php /* Smarty version Smarty-3.1.6, created on 2015-10-30 16:54:33
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Goods\gwc_success.html" */ ?>
<?php /*%%SmartyHeaderCode:210705632da0512c6a9-85808750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb82a008e65e40adc853a33e96272019d800493d' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Goods\\gwc_success.html',
      1 => 1446195269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210705632da0512c6a9-85808750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5632da051efbd',
  'variables' => 
  array (
    'order_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5632da051efbd')) {function content_5632da051efbd($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 



        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 购物流程 
            </div>
        </div>

        <div class="blank"></div>
        <div class="blank"></div>

        <div class="block">
            <div class="flowBox" style="margin: 0pt auto 70px;">
                <h6 style="text-align: center; height: 30px; line-height: 30px;">感谢您在本店购物！您的订单已提交成功，请记住您的订单号: <font style="color: red;"><?php echo $_smarty_tpl->tpl_vars['order_info']->value['order_sn'];?>
</font></h6>
                <table style="border: 1px solid rgb(221, 221, 221); margin: 20px auto;" align="center" bgcolor="#ffffff" border="0" cellpadding="15" cellspacing="0" width="99%">
                    <tbody><tr>
                            <td align="center" bgcolor="#ffffff">
                                您选定的配送方式为: <strong><?php echo $_smarty_tpl->tpl_vars['order_info']->value['order_ship_name'];?>
</strong>，您选定的支付方式为: <strong><?php echo $_smarty_tpl->tpl_vars['order_info']->value['order_pay_name'];?>
</strong>。您的应付款金额为: <strong>￥<?php echo $_smarty_tpl->tpl_vars['order_info']->value['order_amount']*50;?>
.00元</strong>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#ffffff">银行名称
                                收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。
                                注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。</td>
                        </tr>
                    </tbody></table>
                <p style="text-align: center; margin-bottom: 20px;">您可以 <a href="<?php echo @__MODULE__;?>
/Index/index">返回首页</a> 或去 <a href="<?php echo @__MODULE__;?>
/Index/index">用户中心</a></p>
            </div>
        </div>


        
<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>