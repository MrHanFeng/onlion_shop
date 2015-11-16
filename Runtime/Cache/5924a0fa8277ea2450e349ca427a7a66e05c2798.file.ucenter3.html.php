<?php /* Smarty version Smarty-3.1.6, created on 2015-11-14 16:16:21
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Ucenter\ucenter3.html" */ ?>
<?php /*%%SmartyHeaderCode:2032856340ed82c7356-86485078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5924a0fa8277ea2450e349ca427a7a66e05c2798' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Ucenter\\ucenter3.html',
      1 => 1447488959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2032856340ed82c7356-86485078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56340ed8353d7',
  'variables' => 
  array (
    'order_info' => 0,
    'v' => 0,
    'order_num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56340ed8353d7')) {function content_56340ed8353d7($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 






        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        
        <div class="blank"></div>
        <div class="blank"></div>
        
        <div class="block clearfix">
            <div class="AreaL">
               <?php echo $_smarty_tpl->getSubTemplate ("./u_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            </div>

            <div class="AreaR">
                <div class="box">
                    <div class="box_1">
                        <div class="userCenterBox boxCenterList clearfix" style="">
                            <h5><span>我的订单</span></h5>
                            <div class="blank"></div>
                            <table cellpadding="5" cellspacing="1">
                                <tbody><tr align="center">
                                        <td>订单号</td>
                                        <td>下单时间</td>
                                        <td>订单总金额</td>
                                        <td>订单状态</td>
                                        <td>操作</td>
                                    </tr>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                    <tr>

                                        <td align="center"><a href="" class="f6"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_sn'];?>
</a></td>
                                        <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['order_create_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                                        <td align="right">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['order_amount'];?>
.00元</td>
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['v']->value['order_status'];?>
</td>
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['order_status']=="待付款"){?>
                                        <td align="center"><font class="f6"><a href="<?php echo @__MODULE__;?>
/Order/order_pay/order_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
" >我要付款</a></font></td>
                                        <td align="center"><font class="f6"><a href="<?php echo @__MODULE__;?>
/Order/order_delete/order_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
" >取消订单</a></font></td>
                                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['order_status']=="已付款"){?>
                                        <td align="center"><font class="f6">等待发货</font></td>
                                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['order_status']=="已发货"){?>
                                        <td align="center"><font class="f6"><a href="<?php echo @__MODULE__;?>
/Order/order_confirm/order_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['order_id'];?>
" >确认收货</a></font></td>
                                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['order_status']=="已完成"){?>
                                        <td align="center"><font class="f6">已完成</font></td>
                                        <?php }elseif($_smarty_tpl->tpl_vars['v']->value['order_status']=="取消"){?>
                                        <td align="center"><font class="f6">已取消</font></td>
                                        <?php }?>
                                    </tr>
                                <?php } ?>
                                </tbody></table>
                            <div class="blank5"></div>

                            <form action="/user.php" method="get">

                                <div id="pager" class="pagebar">
                                    <span class="f_l " style="margin-right: 10px;">总计 <b><?php echo $_smarty_tpl->tpl_vars['order_num']->value;?>
</b>  个记录</span>
                                </div>

                            </form>
                            <div class="blank5"></div>
                            <h5><span>合并订单</span></h5>
                            <div class="blank"></div>
                            <form action="#" method="post">
                                <table cellpadding="5" cellspacing="1">
                                    <tbody>
                                        <tr>
                                            <td align="right" width="22%">主订单:</td>
                                            <td align="left" width="12%"><select name="to_order">
                                                    <option selected="selected" value="0">请选择...</option>

                                                    <option value="2015100649488">2012100649488</option>
                                                </select></td>
                                            <td align="right" width="19%">从订单:</td>
                                            <td align="left" width="11%"><select name="from_order">
                                                    <option selected="selected" value="0">请选择...</option>

                                                    <option value="2012100649488">2012100649488</option>
                                                </select></td>
                                            <td width="36%">&nbsp;<input name="act" value="merge_order" type="hidden" />
                                                <input name="Submit" class="bnt_blue_1" style="border: medium none;" value="合并订单" type="submit" /></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td colspan="4" align="left">订单合并是在发货前将相同状态的订单合并成一新的订单。<br />收货地址，送货方式等以主定单为准。</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
       <?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>