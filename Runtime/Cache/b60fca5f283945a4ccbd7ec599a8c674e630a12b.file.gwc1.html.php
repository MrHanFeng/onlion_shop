<?php /* Smarty version Smarty-3.1.6, created on 2015-10-30 10:57:54
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Goods\gwc_show.html" */ ?>
<?php /*%%SmartyHeaderCode:23295562dd3712122b4-42151614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60fca5f283945a4ccbd7ec599a8c674e630a12b' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Goods\\gwc_show.html',
      1 => 1446173871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23295562dd3712122b4-42151614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562dd37139101',
  'variables' => 
  array (
    'goods_info' => 0,
    'number' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562dd37139101')) {function content_562dd37139101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 


        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 购物流程 
            </div>
        </div>
        <div class="blank"></div>

        <div class="blank"></div>
        <div class="block">
            <div class="flowBox">
                <h6><span>商品列表</span></h6>
                <form id="formCart" action="<?php echo @__CONTROLLER__;?>
/gwc2" method="post">
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                                <th>商品名称</th>
                                <th>属性</th>
                                <th>市场价</th>
                                <th>本店价</th>
                                <th>购买数量</th>
                                <th>小计</th>
                                <th>操作</th>
                            </tr>
                            <tr>
                                <td align="center">
                                    <a href="#" target="_blank"><img style="width: 80px; height: 80px;" src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_small_img'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_name'];?>
" /></a><br />
                                    <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_id'];?>
" target="_blank" class="f6"><?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_name'];?>
</a>
                                </td>
                                <td>颜色:随机 <br />
                                </td>
                                <td align="right">￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price']*1.5;?>
.00元</td>
                                <td align="right">￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price'];?>
.00元</td>
                                <td align="right">
                                    <center><input type="text" name="goods_num" value="<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
" style="width:25px;"></center>
                                </td>
                                <td align="right"><font color="#ff4500">￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price']*$_smarty_tpl->tpl_vars['number']->value;?>
.00元</font></td>
                                <td align="center">
                                    <a href="#" class="f6">删除</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                                <td>
                                    购物金额小计 ￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price']*$_smarty_tpl->tpl_vars['number']->value;?>
.00元，比市场价 ￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price']*1.5;?>
.00元 <font color="red">节省了 ￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price']*0.5*$_smarty_tpl->tpl_vars['number']->value;?>
.00元 </font>(17%)              </td>
                                <td align="right">
                                    <input value="清空购物车" class="bnt_blue_1"  type="button" />
                                    <input name="submit" class="bnt_blue_1" value="更新购物车" type="submit" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table cellpadding="5" cellspacing="0" width="99%">
                        <tbody>
                        <tr>
                            <td>
                                <a href="<?php echo @__MODULE__;?>
/Index/index">
                                    <img src="<?php echo @IMG_URL;?>
continue.gif" alt="continue" />
                                </a>
                            </td>
                            <td align="right">
                                <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_id'];?>
">
                                <button>
                                    <a href="<?php echo @__CONTROLLER__;?>
/gwc2">
                                        <img src="<?php echo @IMG_URL;?>
checkout.gif" alt="checkout" />
                                    </a>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>

            </div>
            <div class="blank"></div>
            <div class="blank5"></div>
        </div>
        
<?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>