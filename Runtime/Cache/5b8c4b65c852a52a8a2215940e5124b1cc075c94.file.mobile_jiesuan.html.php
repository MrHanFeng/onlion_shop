<?php /* Smarty version Smarty-3.1.6, created on 2015-11-02 21:59:45
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Index\mobile_jiesuan.html" */ ?>
<?php /*%%SmartyHeaderCode:2099656307b0451cc88-27158356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b8c4b65c852a52a8a2215940e5124b1cc075c94' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Index\\mobile_jiesuan.html',
      1 => 1446344142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2099656307b0451cc88-27158356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56307b0459db2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56307b0459db2')) {function content_56307b0459db2($_smarty_tpl) {?><!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<meta name="baidu-site-verification" content="t7oDT96Amk">
<title>结算</title>
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


</head>

<body style="padding-bottom: 45px;" class="hPC">

<script src="<?php echo @MO_URL;?>
js/562a4c0e89.js"></script>


 

		<header id="header" class="u-header clearfix">
	    <!--返回按钮根据程序判断来源，返回上一级-->
		 		 <!-- 非微信扫码进入的用户 -->
				<div class="u-hd-left f-left">
						<a href="<?php echo @__CONTROLLER__;?>
/mobile_gouwuche" mars_sead="check-back_btn" class="J_backToPrev"><span class="u-icon i-hd-back"></span></a>
				</div>
			    <div class="u-hd-tit"><span>结算</span></div>
		</header>
	
<div class="container cart-box u-checkout" data-formorder="checkoutForm">
  <!-- 收货信息 -->
  <div class="u-panel u-infobox bg-blue">
    <!-- 地址信息 -->
    <div class="u-addressbox">
      <div class="title">
        <a href="<?php echo @__CONTROLLER__;?>
/index">
          <span class="i-icon-arrow-right"></span>
          <p class="u-name">叶良辰</p>
          <p class="u-address">山西省太原市</p>
        </a>
      </div>
    </div>
    <!-- 配送时间 -->
    <div class="u-timebox" data-cartforms="time" data-collapse="true" data-toggle="i-icon-arrow-up">
      <div class="title">
                <span class="i-icon-arrow-down"></span>
                <span class="text">送货时间不限</span>
      </div>
      <ul class="u-panel-bd bg-white nav hide">
        <li mars_sead="checkout_receive_anytime_btn">
		   <span class="u-icon i-radio active"></span><p>送货时间不限</p><input name="transport_day" value="1" class="hide" checked="checked" type="radio">
		</li>
        <li mars_sead="checkout_receive_weekend_btn"><span class="u-icon i-radio "></span><p class="u-divline">只双休日/节假日送货</p><input name="transport_day" value="2" class="hide" type="radio"></li>
        <li mars_sead="checkout_receive_workday_btn"><span class="u-icon i-radio "></span><p class="u-divline">只工作日送货</p><input name="transport_day" value="3" class="hide" type="radio"></li>
	  </ul>
    </div>
  </div>
  
  
  <!-- 支付方式 -->
  <div class="u-panel u-paybox bg-white">
		<div class="u-panel-hd bg-default">
		  <h3 class="c-bluegray">支付方式<span class="c-red mr-left-10" data-paytypetip="true" style="display:none;">请选择支付方式</span></h3> 
		</div>
    <div data-cartforms="payway">
      <ul class="u-panel-bd nav">
        
               
   	            <input name="is_pos" value="1" type="hidden">
                <li class="otherpay" mars_sead="checkout_payment_pod_pos_radio">
   	    		   	    	<span class="u-icon i-radio"></span>
	   	    	            <span class="u-icon i-pay-pos"></span>
	   	    	            <p class="aposition">微支付</p>
	   	    	            <input name="pay_type" value="8" class="hide" type="radio">
   	    	   	</li>
               
   	             <li class="otherpay" mars_sead="checkout_payment_paypal_radio">
   	    		   	    	<span class="u-icon i-radio"></span>
	   	    	            <span class="u-icon i-pay-zfbapp"></span>
	   	    	            <p class="aposition">支付宝</p>
	   	    	           <input name="pay_type" value="50" class="hide" type="radio">
   	    	   	</li>
               

               
   	          </ul>
    </div>
  </div>

  <!-- 订单金额 -->
  <div class="u-panel u-paytotlebox bg-white">
    <div class="u-panel-hd bg-default">
      <h3 class="c-bluegray">订单金额</h3>
    </div>
    <div class="u-panel-bd">
      <ul class="nav nav-list-totle">
        <li>商品金额：<span class="f-right c-red">¥1472</span></li>
        <li>发货运费：<span class="f-right c-red">¥0</span></li>
        <li>待支付总额：<span class="f-right c-red">¥1472</span></li>
      </ul>
      <input name="payable" value="" type="hidden">
      <input name="favourable_id" value="" type="hidden">
    </div>
  </div>

  <!-- 发票信息 -->
   <div class="u-payinvoicebox">
    <div data-cartforms="invoice">
      <ul class="u-panel-bd bg-white">
        <li><p class="title"><span class="u-icon i-unselected"></span>开具发票</p></li>
        <li id="invoice_inputbox" class="hide">
          <p class="title p-relative"><span class="u-icon i-selected"></span>开具发票：</p>
          <p class="input"><input name="invoice" placeholder="请输入发票抬头" class="text_input w100" type="text"></p>
        </li>
      </ul>
    </div>
  </div>
    
  <!--固定在页面底部浮动的购买按钮-->
  <div class="navbar navbar-default navbar-fixed-bottom">
    <div class="container nav-current-box checkout-box">
      <div class="navbar-header">
        <p class="totle">总金额：<span class="price">¥1472</span></p>
        <span>为您节省：¥2208</span>
      </div>
      <div class="navbar-brand">
         <a class="btn-checkout btn btn-large btn-purple" onclick="alert('支付成功，测试');location.href='<?php echo @__CONTROLLER__;?>
/do_order'" style="background: #0066CC;border:1px solid #0066CC;">提交订单</a>
      </div>
    </div>
  </div>
</div>
<div class="space10"></div>

 	<div class="layout-login-area" id="footer">
			<div class="layout-login">
						<span class="layout-lg-bar">528062317@qq.com </span>
						<span class="layout-new-fr"><a href="">反馈</a></span>
			</div>

			<div class="layout-copyright">© 峰峰购物 版权所有</div>
	 </div>

  

  
      <a href="#top" class="u-backtop" mars_sead="home_foot_top_btn"></a>
    <!--以下是浮于显示屏左下角的购物袋-->
  





</body></html><?php }} ?>