<?php /* Smarty version Smarty-3.1.6, created on 2015-11-13 22:23:47
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Ucenter\ucenter1.html" */ ?>
<?php /*%%SmartyHeaderCode:3111256340ed21d3aa1-44945971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f25957e7508e6e9f696fdcbb8693c65e81c360a8' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Ucenter\\ucenter1.html',
      1 => 1447424625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3111256340ed21d3aa1-44945971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56340ed22587c',
  'variables' => 
  array (
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56340ed22587c')) {function content_56340ed22587c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 


        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        <div class="blank"></div>
        <div class="block clearfix">
            <div class="AreaL">
                <?php echo $_smarty_tpl->getSubTemplate ("./u_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
            </div>

            <div class="AreaR">
                <div class="box">
                    <div class="box_1">
                        <div class="userCenterBox boxCenterList clearfix" style="">

                            <font class="f5"><b class="f4"><?php echo $_SESSION['user_username'];?>
</b> 欢迎您回到 HOFO商城！</font><br />
                            <div class="blank"></div>
                            您的上一次登录时间: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user_info']->value['user_last_time'],"%Y-%m-%d %H:%M:%S ");?>
<br />
                            <div class="blank5"></div>
                            您的等级是 注册用户  ,您还差 10000 积分达到 vip <br />
                            <div class="blank5"></div>
                            <?php if ($_smarty_tpl->tpl_vars['user_info']->value['identify']==0){?>
                            您还没有通过邮件认证 <a href="<?php echo @__MODULE__;?>
/User/ucenter_register" style="color: rgb(0, 107, 208);">点此发送认证邮件</a><br />
                            <?php }?>
                            <div style="margin: 5px 0pt; border: 1px solid rgb(247, 221, 152); padding: 10px 20px; background-color: rgb(255, 250, 213);">
                                <img src="<?php echo @IMG_URL;?>
note.gif" alt="note" />&nbsp;用户中心公告！           </div>
                            <br /><br />
                            <div class="f_l" style="width: 350px;">
                                <h5><span>您的账户</span></h5>
                                <div class="blank"></div>
                                余额:<a href="#" style="color: rgb(0, 107, 208);">￥<?php echo $_smarty_tpl->tpl_vars['user_info']->value['user_money'];?>
元</a><br />
                                红包:<a href="#" style="color: rgb(0, 107, 208);">共计 0 个,价值 ￥0.00元</a><br />
                                积分:0积分<br />
                            </div>
                            <div class="f_r" style="width: 350px;">
                                <h5><span>用户提醒</span></h5>
                                <div class="blank"></div>
                                您最近30天内提交了1个订单<br />
                            </div>
                            <div class="blank5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
   <?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>