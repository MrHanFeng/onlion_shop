<?php /* Smarty version Smarty-3.1.6, created on 2015-10-28 16:09:36
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Index\mobile_gouwuche.html" */ ?>
<?php /*%%SmartyHeaderCode:1930156307a1948e6d7-90467849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5abdc862482302b4b617ecc2789f65992b75cec0' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Index\\mobile_gouwuche.html',
      1 => 1446019754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1930156307a1948e6d7-90467849',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56307a1950b6f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56307a1950b6f')) {function content_56307a1950b6f($_smarty_tpl) {?><!DOCTYPE html>
<body>

		<header id="header" class="u-header clearfix">
	    <!--返回按钮根据程序判断来源，返回上一级-->
		 		 <!-- 非微信扫码进入的用户 -->
	    <div class="u-hd-left f-left">
      		 <a href="<?php echo @__CONTROLLER__;?>
/mobile_chanpin" mars_sead="cart-back_btn" class="J_backToPrev"><span class="u-icon i-hd-back"></span></a>
        </div>
			     <span class="u-hd-tit">购物车</span>
		 	    <div class="u-hd-right f-right">
					<a mars_sead="nav_home_btn" href="<?php echo @__CONTROLLER__;?>
/mobile_index">
					   <span class="u-icon i-hd-home"></span>
					</a>
				</div>
		 	</header>



<div id="cart_list">

  <!--特卖会订单-->
  <div class="space10"></div>
	<span>
			商城发货,支持货到付款
	</span>
  </h2>
  <div class="cartdiv">
            <div class="cartlist clearfix">
            <!-- 分组品牌开始 -->
      <div class="space10"></div>
      <div class="cartlistinner clearfix">
	  	<a href="//product-328791-43280703.html?rbc=url_cart" class="cart_orderlist_i">
        	<img style="display: inline;" src="<?php echo @MO_URL;?>
lishi/MYTENO-MAG1143801660-5.jpg" data-original="//upload/merchandise/328791/MYTENO-MAG1143801660-5.jpg" data-onerror="//upload/merchandise/328791/MYTENO-MAG1143801660-5.jpg" data-brandlazy="true" height="101" width="80">
		</a>
        <div class="cart_orderlist_info"> <a href="//product-328791-43280703.html?rbc=url_cart">
          <p class="cart_g_name">灰卡其色V领珠片优雅长袖连衣裙</p>
          <p class="cart_b_name">马天奴MYTENO女装专场</p>
                    <p class="fontgrey">尺码：36</p>
          <p class="space5"></p>
		            </a>
          <div class="amount-confirm-box" data-product_id="43280703" data-size_id="112517730">
              <a href="javascript:;" class="amount-action amount-action-min disabled" mars_sead="cart_edit_btn" data_mars="prd_id:43280703">-</a>
              <span class="amount-text">1</span>
              <input class="amount-num" readonly="readonly" data-brand-id="328791" data-product_id="43280703" data-size_id="112517730" data-id="" value="1" name="num" type="text">
              <a href="javascript:;" class="amount-action amount-action-max" data-action="addNum" mars_sead="cart_edit_btn" data_mars="prd_id:43280703">+</a>
          </div>
        </div>


       	      <!--一般商品-->
	      <a class="cart_orderlist_p" href="//product-328791-43280703.html?rbc=url_cart" target="_blank" style="display:block">
	          <span class="c_price">¥1472</span>
	          <span class="fontstyle">¥3680</span>
	      </a>


    <span class="delete">
       <a href="javascript:;" data-action="delete" data-usecoupon="0" mars_sead="cart_delect_btn" data_mars="prd_id:43280703">
        <img src="<?php echo @MO_URL;?>
images/74ff20009b.png" height="22" width="22">
       </a>
    </span>
	</div>


          </div>



    <div class="orderaction clearfix">
      	    <p class="fl">本单已免运费</p>
            <p class="fr"><span class="c_price"> ¥1472 </span></p>
      <div class="clear"></div>
	  <div class="use_bouns clearfix">
	 	 	 <div class="use_bouns">
    	        如需使用优惠券请<a href="/user-login.html?back_act=http%3A%2F%2Fm.vip.com%2Fcart.html" class="fontyellow"> 登录&gt;&gt;</a>
        	 </div>
	 	 	 </div>
          </div>
  </div>
  <!--固定在页面底部浮动的购买按钮-->
  <div class="navbar navbar-default navbar-fixed-bottom">
    <!--<div class="saveguid"><span></span>100%正品保证</div>-->
    <div class="container nav-current-box checkout-box">
      <div class="navbar-header">
        <p class="totle">总金额：<span class="price">¥1472</span></p>
        <span>为您节省：¥2208</span>
      </div>
      <div class="navbar-brand">
         <a class="btn btn-large btn-purple" mars_sead="first-check_btn" href="<?php echo @__CONTROLLER__;?>
/mobile_jiesuan" data-islogin="true" data-shopcarthide="true" data-countdown="true" data-carttime="1189" style="background: #0066CC;border:1px solid #0066CC;">去结算</a>
      </div>
    </div>
  </div>

</div>
<div class="space10"></div>


  <div class="layout-login-area" id="footer" style="display:none">
		<div class="layout-login">

		</div>
    	<div class="layout-version"><a href="">标准版</a><a href="javascript:void(0)" class="layout-on">触屏版</a>
			<a href="javascript:void(0);" id="layout_toPcHome">电脑版</a>
    	</div>

        <div class="layout-copyright">© hofo购物 版权所有</div>
	</div>
      <a href="#top" class="u-backtop" mars_sead="home_foot_top_btn"></a>
    <!--以下是浮于显示屏左下角的购物袋-->




</body></html>

<html><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta name="baidu-site-verification" content="t7oDT96Amk">
    <title>购物车</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="sogou_site_verification" content="G7nmLR75yc">
    <meta name="baidu-tc-cerfication" content="0a8c6d28b570b218f78510c29be4529b">
    <meta name="360-site-verification" content="8b6121969d78afda8caeb69053fa29d9">



    <link rel="stylesheet" href="<?php echo @MO_URL;?>
style/c3e09ac36d.css">
    <link rel="stylesheet" href="<?php echo @MO_URL;?>
style/86fe49ca90.css">
    <link rel="stylesheet" type="text/css" href="<?php echo @MO_URL;?>
style/footer.css">

    

    <style type="text/css">.u-footer{display:none;}</style>
    
</head>
<?php }} ?>