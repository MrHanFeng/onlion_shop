<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 20:59:25
         compiled from "E:\xampp\htdocs\buy_tp\shop\Home\View\Public\head.html" */ ?>
<?php /*%%SmartyHeaderCode:64815649a1c7e11862-96740724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a565d2ee065ad3e6bab78a9574404c427f7fc19' => 
    array (
      0 => 'E:\\xampp\\htdocs\\buy_tp\\shop\\Home\\View\\Public\\head.html',
      1 => 1447678764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64815649a1c7e11862-96740724',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649a1c7f3a6a',
  'variables' => 
  array (
    'cate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649a1c7f3a6a')) {function content_5649a1c7f3a6a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="hofo v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="SMS EMS MMS 短消息群发 语音 阅读器 SMS,EMS,MMS,短消息群发语音合成信息阅读器 黑色 白色 滑盖" />
        <meta name="Description" content="" />
        <meta property="qc:admins" content="245447434764543516637573070" />
        <title>在线商城</title>
        <link href="<?php echo @CSS_URL;?>
style.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="cursor: auto;">
        <div class="block clearfix" style="position: relative; height: 98px;overflow:hidden">
            <a href="#" name="top">
                <img class="logo" src="<?php echo @IMG_URL;?>
logo.png" />
            </a>
            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font id="ECS_MEMBERZONE"><div id="append_parent"></div>
                        欢迎光临本店&nbsp;
                        <?php if ($_SESSION['user_username']!=null){?>
                                
                        <a href="<?php echo @__MODULE__;?>
/Ucenter/ucenter1"><?php echo $_SESSION['user_username'];?>
的用户中心</a>
                                <a href="<?php echo @__MODULE__;?>
/User/logout" onclick="return confirm('确定要退出？');">安全退出</a>
                        <?php }else{ ?>
                        <a href="<?php echo @__MODULE__;?>
/User/qq_login"><img src="<?php echo @IMG_URL;?>
Connect_logo_1.png" alt="QQ快速登录" style="width:16px;height:16px;vertical-align: middle;padding-bottom: 3px;"></a>
                        <a href="<?php echo @__MODULE__;?>
/User/login"> 登录</a><?php echo $_SESSION['user_username'];?>

                        <a href="<?php echo @__MODULE__;?>
/User/register">注册</a>
                        <?php }?>
                    </font>
                </div>
                <div style="float: right;">
                    <a href="#">查看购物车</a>
                    |
                    <a href="#">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>
                </div>
            </div>
            <div id="mainNav" class="clearfix">
                <a href="<?php echo @__MODULE__;?>
/Index/index">首页<span></span></a>

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['name'] = 'cate_k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cate']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['max'] = (int)3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cate_k']['total']);
?>
                <a href="<?php echo @__MODULE__;?>
/Goods/showlist/cate_id/<?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cate_k']['index']]['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cate_k']['index']]['cat_name'];?>
<span></span></a>
                <?php endfor; endif; ?>
                <a href="#">优惠活动<span></span></a>
                <a href="#">留言板<span></span></a>

            </div>
        </div>
        <div class="header_bg">
            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" >
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('<?php echo @IMG_URL;?>
sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />
            </form>
        </div>
        <div class="blank5"></div>
        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;">
                <img src="<?php echo @IMG_URL;?>
biao6.gif">
                    北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
            </div>
            <?php if ($_SESSION['shop_car_num']!=null){?>
                <div class="f_r" style="padding-right: 10px;">
                    <img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao3.gif">
                        <span class="cart" id="ECS_CARTINFO">
                            <a href="#" title="查看购物车">您的购物车中有<?php echo $_SESSION['shop_car_num'];?>
件商品，总计金额 ￥2000.00元。</a></span>
                        <a href="#"><img style="vertical-align: middle;" src="<?php echo @IMG_URL;?>
biao7.gif"></a>
                </div>
            <?php }?>
        </div>

<?php }} ?>