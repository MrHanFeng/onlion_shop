<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 21:28:09
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Goods\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:19784562dd364e82f22-81610658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8546fb03303e715a50f4a5eedb5ed2fe138f4f8a' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Goods\\detail.html',
      1 => 1447680483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19784562dd364e82f22-81610658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562dd36514072',
  'variables' => 
  array (
    'goods_info' => 0,
    'brand_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562dd36514072')) {function content_562dd36514072($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> <a href="#">手机类型</a> <code>&gt;</code> <a href="#">GSM手机</a> <code>&gt;</code> <?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_name'];?>
 
            </div>
        </div>
        <div class="blank"></div>



        <div class="block clearfix">
            <div class="AreaL">
                <h3><span>商品分类</span></h3> 
                <div id="category_tree" class="box_1">
                    <dl>
                        <dt><a href="#">CDMA手机</a></dt>
                        <dd>       </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">GSM手机</a></dt>
                        <dd>       </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">3G手机</a></dt>
                        <dd>       </dd>
                    </dl>
                    <dl>
                        <dt><a href="#">双模手机</a></dt>
                        <dd>       </dd>
                    </dl>

                </div>
                <div class="blank"></div>

                <div style="display: block;" class="box" id="history_div">
                    <h3><span>浏览历史</span></h3>
                    <div class="box_1">

                        <div class="boxCenterList clearfix" id="history_list">
                            <ul class="clearfix"><li class="goodsimg"><a href="#" target="_blank"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="B_blue"></a></li><li><a href="#" target="_blank" title="飞利浦9@9v">飞利浦9@9v</a><br />本店售价：<font class="f1">￥399元</font><br /></li></ul><ul class="clearfix"><li class="goodsimg"><a href="#" target="_blank"><img src="<?php echo @IMG_URL;?>
9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="B_blue"></a></li><li><a href="#" target="_blank" title="诺基亚E66">诺基亚E66</a><br />本店售价：<font class="f1">￥2298元</font><br /></li></ul><ul class="clearfix"><li class="goodsimg"><a href="#" target="_blank"><img src="<?php echo @IMG_URL;?>
17_thumb_G_1241969394587.jpg" alt="夏新N7" class="B_blue"></a></li><li><a href="#" target="_blank" title="夏新N7">夏新N7</a><br />本店售价：<font class="f1">￥2300元</font><br /></li></ul><ul id="clear_history"><a onclick="clear_history()">[清空]</a></ul>  </div>
                    </div>
                </div>
                <div class="blank5"></div>
            </div>

            <div class="AreaR">
                <div id="goodsInfo" class="clearfix">
                    <div class="imgInfo">

                        <a class="MagicZoom MagicThumb" title="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['name'];?>
">
                        <!-- 大图 -->
                            <img id="sim806035" src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_big_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['name'];?>
" height="310px" width="310px;" />
                        </a>
                        <div class="blank5"></div>
                        <div style="text-align: center; position: relative; width: 100%;">
                            <a href="#">
                                <img style="position: absolute; left: 0pt;" alt="prev" src="<?php echo @IMG_URL;?>
up.gif" /></a>
                            <a href="javascript:;" onclick="window.open('gallery.php?id=9'); return false;">
                                <img alt="zoom" src="<?php echo @IMG_URL;?>
zoom.gif" />
                            </a>
                            <a href="#">
                                <img style="position: absolute; right: 0pt;" alt="next" src="<?php echo @IMG_URL;?>
down.gif" /></a>
                        </div>
                        <div class="blank5"></div>

                        <!-- 缩略图 -->
                        <div class="picture" id="imglist">
                            <a style="outline: 0pt none;" href="<?php echo @IMG_URL;?>
200905/goods_img/9_P_1241511871575.jpg" rel="zoom1" rev="images/200905/goods_img/9_P_1241511871575.jpg" title="">
                                <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_small_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['name'];?>
" class="onbg" /></a>
                        </div>
                    </div>

                    <div class="textInfo">
                        <form action="<?php echo @__CONTROLLER__;?>
/gwc_show" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
                            <div class="clearfix" style="font-size: 14px; font-weight: bold; padding-bottom: 8px;">
                                <?php echo $_smarty_tpl->tpl_vars['goods_info']->value['name'];?>
      
                            </div>
                            <ul>
                                <li class="clearfix">
                                    <dd>
                                        <strong>商品货号：</strong>ECS000009      
                                    </dd>
                                </li> 
                                <li class="clearfix">
                                    <dd>
                                        <strong>商品库存：</strong>
                                        <?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_number'];?>
 台             
                                    </dd>
                                </li>  
                                <li class="clearfix">
                                    <dd>
                                        <strong>商品品牌：</strong><a href="#"><?php echo $_smarty_tpl->tpl_vars['brand_info']->value['brand_name'];?>
</a>
                                    </dd>
                                </li>  
                                <li class="clearfix">
                                    <dd>
                                        <strong>商品重量：</strong><?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_weight'];?>
克       
                                    </dd>
                                </li>
                                <li class="clearfix">
                                    <dd>
                                        <strong>上架时间：</strong><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['goods_info']->value['goods_create_time'],"%Y-%m-%d ");?>
      
                                    </dd>
                                </li>
                                <li class="clearfix">
                                    <dd>
                                        <strong>商品点击数：</strong><?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_number']*10+33;?>
     </dd>
                                </li>
                                <li class="clearfix">
                                    <dd>
                                        <strong>市场价格：</strong><font class="market">￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price']+200;?>
 元</font><br />

                                        <strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE">￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price'];?>
 元</font><br />
                                        <strong>注册用户：</strong><font class="shop" id="ECS_RANKPRICE_1">￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price'];?>
 元</font><br />
                                        <strong>vip：</strong><font class="shop" id="ECS_RANKPRICE_2">￥<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price']-50;?>
 元</font><br />
                                    </dd>
                                </li>
                                <li class="clearfix">
                                    <dd>
                                        <strong>用户评价：</strong>
                                        <img src="<?php echo @IMG_URL;?>
stars5.gif" alt="comment rank 5">
                                    </dd>
                                </li>
                                <li class="padd">
                                    <font class="f1">购买商品达到以下数量区间时可享受的优惠价格：</font><br />
                                    <table bgcolor="#aad6ff" border="0" cellpadding="3" cellspacing="1" width="100%">
                                        <tbody><tr>
                                                <td align="center" bgcolor="#ffffff"><strong>数量</strong></td>
                                                <td align="center" bgcolor="#ffffff"><strong>优惠价格</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="shop" align="center" bgcolor="#ffffff">3</td>
                                                <td class="shop" align="center" bgcolor="#ffffff">￥2200元</td>
                                            </tr>
                                            <tr>
                                                <td class="shop" align="center" bgcolor="#ffffff">5</td>
                                                <td class="shop" align="center" bgcolor="#ffffff">￥2100元</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li class="clearfix">
                                    <dd>
                                        <strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="shop">￥2298元</font>
                                    </dd>
                                </li>
                                <li class="clearfix">
                                    <dd>
                                        <strong>购买数量：</strong>
                                        <input name="number" id="number" value="1" size="4" onblur="changePrice()" style="border: 1px solid rgb(204, 204, 204);" type="text" />
                                    </dd>
                                </li>
                                <li class="clearfix">
                                    <dd>
                                        <strong>购买此商品可使用：</strong><font class="f4">2200 积分</font>
                                    </dd>
                                </li>

                                <li class="padd loop">
                                    <strong>颜色:</strong>
                                    <label for="spec_value_227">
                                        <input name="color" value="227" id="spec_value_227" checked="checked" onclick="changePrice()" type="radio" />
                                        白色 [ ￥0.00元] </label>
                                    <label for="spec_value_226">
                                        <input name="color" value="226" id="spec_value_226" onclick="changePrice()" type="radio" />
                                        黑色 [加 ￥10.00元] </label>
                                </li>

                                <li class="padd">
                                    <input type="hidden" name="goods_id" value="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_id'];?>
">
                                    <input type="hidden" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_price'];?>
">

                                    <a><button><img src="<?php echo @IMG_URL;?>
goumai2.gif"></button></a>
                                    <a href="javascript:void(0)" onclick="alert('收藏成功')"><img src="<?php echo @IMG_URL;?>
shoucang2.gif"></a>
                                    <a href="javascript:void(0)" onclick="alert('功能·待完善')"><img src="<?php echo @IMG_URL;?>
tuijian.gif"></a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <div class="blank"></div>
                <div class="box">
                    <div class="box_1">
                        <h3 style="padding: 0pt 5px;">
                            <div id="com_b" class="history clearfix">
                                <h2 style="cursor: pointer;">商品描述：</h2>
                                <h2 style="cursor: pointer;" class="h2bg">商品属性</h2>
                            </div>
                        </h3>
                        <div id="com_v" class="boxCenterList RelaArticle">
                          <?php echo $_smarty_tpl->tpl_vars['goods_info']->value['goods_introduce'];?>
     
                        </div>
                    </div>
                </div>
                <div class="blank"></div>

                <div class="box">
                    <div class="box_1">
                        <h3><span class="text">商品标签</span></h3>
                        <div class="boxCenterList clearfix ie6">
                            <form name="tagForm"   id="tagForm">
                                <p id="ECS_TAGS" style="margin-bottom: 5px;">
                                </p>
                                <p>
                                    <input name="tag" id="tag" class="inputBg" size="35" type="text" />
                                    <input value="添 加" class="bnt_blue" style="border: medium none;" type="submit" />
                                    <input name="goods_id" value="9" type="hidden" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="blank5"></div>
                <div class="box">
                    <div class="box_1">
                        <h3><span class="text">购买过此商品的人还购买过</span></h3>
                        <div class="boxCenterList clearfix ie6">
                            <div class="goodsItem">
                                <a href="#">
                                    <img src="<?php echo @IMG_URL;?>
24_thumb_G_1241971981429.jpg" alt="P806" class="goodsimg"></a><br />
                                <p><a href="#" title="P806">P806</a></p> 
                                <font class="shop_s">￥2000元</font>
                            </div>
                            <div class="goodsItem">
                                <a href="#">
                                    <img src="<?php echo @IMG_URL;?>
22_thumb_G_1241971076803.jpg" alt="多普达Touch HD" class="goodsimg" /></a><br />
                                <p><a href="#" title="多普达Touch HD">多普达Touc...</a></p> 
                                <font class="shop_s">￥5999元</font>
                            </div>
                            <div class="goodsItem">
                                <a href="#">
                                    <img src="<?php echo @IMG_URL;?>
13_thumb_G_1241968002527.jpg" alt="诺基亚5320 XpressMusic" class="goodsimg" /></a><br />
                                <p><a href="#" title="诺基亚5320 XpressMusic">诺基亚5320...</a></p> 
                                <font class="shop_s">￥1311元</font>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blank5"></div>
                <div id="ECS_BOUGHT"><div class="box">
                        <div class="box_1">
                            <h3><span class="text">购买记录</span>(近期成交数量<font class="f1">0</font>)</h3>
                            <div class="boxCenterList">
                                还没有人购买过此商品               
                                <div id="buy_pagebar" class="f_r" style="margin-top: 10px;">
                                    <form name="selectPageForm" action="/goods.php" method="get">
                                        <div id="buy_pager">
                                            总计 0 个记录，共 1 页。 <span> <a href="#">第一页</a> <a href="#">上一页</a> <a href="#">下一页</a> <a href="#">最末页</a> </span>
                                        </div>
                                    </form>
                                </div>

                                <div class="blank5"></div>
                            </div>
                        </div>
                    </div>
                    <div class="blank5"></div></div><div id="ECS_COMMENT"> <div class="box">
                        <div class="box_1">
                            <h3><span class="text">用户评论</span>(共<font class="f1">0</font>条评论)</h3>
                            <div class="boxCenterList clearfix" style="height: 1%;">
                                <ul class="comments">
                                    <li>暂时还没有任何用户评论</li>
                                </ul>

                                <div id="pagebar" class="f_r">
                                    <form name="selectPageForm" action="/goods.php" method="get">
                                        <div id="pager">
                                            总计 0 个记录，共 1 页。 <span> <a href="#">第一页</a> <a href="#">上一页</a> <a href="#">下一页</a> <a href="#">最末页</a> </span>
                                        </div>
                                    </form>
                                </div>

                                <div class="blank5"></div>

                                <div class="commentsList">
                                    <form action="#"  method="post" name="commentForm" id="commentForm">
                                        <table border="0" cellpadding="0" cellspacing="5" width="710">
                                            <tbody><tr>
                                                    <td align="right" width="64">用户名：</td>
                                                    <td width="631">匿名用户</td>
                                                </tr>
                                                <tr>
                                                    <td align="right">E-mail：</td>
                                                    <td>
                                                        <input name="email" id="email" maxlength="100" class="inputBorder" type="text" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">评价等级：</td>
                                                    <td>
                                                        <input name="comment_rank" value="1" id="comment_rank1" type="radio" /> 
                                                        <img src="<?php echo @IMG_URL;?>
stars1.gif" />
                                                        <input name="comment_rank" value="2" id="comment_rank2" type="radio" /> 
                                                        <img src="<?php echo @IMG_URL;?>
stars2.gif" />
                                                        <input name="comment_rank" value="3" id="comment_rank3" type="radio" /> 
                                                        <img src="<?php echo @IMG_URL;?>
stars3.gif" />
                                                        <input name="comment_rank" value="4" id="comment_rank4" type="radio" /> 
                                                        <img src="<?php echo @IMG_URL;?>
stars4.gif" />
                                                        <input name="comment_rank" value="5" checked="checked" id="comment_rank5" type="radio" /> 
                                                        <img src="<?php echo @IMG_URL;?>
stars5.gif" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="right" valign="top">评论内容：</td>
                                                    <td>
                                                        <textarea name="content" class="inputBorder" style="height: 50px; width: 620px;"></textarea>
                                                        <input name="cmt_type" value="0" type="hidden" />
                                                        <input name="id" value="9" type="hidden" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div style="padding-left: 15px; text-align: left; float: left;">
                                                            验证码：<input name="captcha" class="inputBorder" style="width: 50px; margin-left: 5px;" type="text" />
                                                            <img src="<?php echo @IMG_URL;?>
captcha.png" alt="captcha" onclick="this.src='captcha.php?'+Math.random()" class="captcha" />
                                                        </div>
                                                        <input name="" value="评论咨询" class="f_r bnt_blue_1" style="margin-right: 8px;" type="submit" />
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="blank5"></div>

                   </div>
            </div>

        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>