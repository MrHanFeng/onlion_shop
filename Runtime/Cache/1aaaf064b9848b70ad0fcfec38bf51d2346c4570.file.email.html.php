<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 17:37:57
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\User\email.html" */ ?>
<?php /*%%SmartyHeaderCode:2876256340ce23d9c85-14702088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1aaaf064b9848b70ad0fcfec38bf51d2346c4570' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\User\\email.html',
      1 => 1447666624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2876256340ce23d9c85-14702088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56340ce242fb9',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56340ce242fb9')) {function content_56340ce242fb9($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div class="block block1">
            <div class="block box">
                <div class="blank"></div>
                <div id="ur_here">
                    当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
                </div>
            </div>
            <div class="blank"></div>

            <div class="block box">

            <div class="usBox clearfix">
                <div class="usBox_1 f_l">
                    <div class="logtitle"></div>
                    <form name="formLogin" action="<?php echo @__CONTROLLER__;?>
/sendemail" method="post">
                        <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%">
                            <tbody>
                                <tr>
                                    <td align="right" width="15%">邮箱</td>
                                    <td width="85%"><input name="user_email" size="25" class="inputBg" type="text" /></td>
                                </tr>

                                <tr>
                                    <td>&nbsp;</td>
                                    <td align="left">
                                        <input name="act" value="act_login" type="hidden" />
                                        <input name="back_act" value="./index.php" type="hidden" />
                                        <input name="submit" value="立即找回"  type="submit" />
                                    </td>
                                </tr>   
                            </tbody></table>
                    </form>
                    <div class="blank"></div>
                </div>
                <div class="usTxt">
                    <div class="regtitle"></div>
                    <div style="padding-left: 50px;">
                        <strong>如果您不是会员，请注册</strong>  <br />
                        <strong class="f4">友情提示：</strong><br />
                        不注册为会员也可在本店购买商品<br />
                        但注册之后您可以：<br />
                        1. 保存您的个人资料<br />
                        2. 收藏您关注的商品<br />
                        3. 享受会员积分制度<br />
                        4. 订阅本店商品信息  <br />
                        <a href="#"><img src="<?php echo @IMG_URL;?>
bnt_ur_reg.gif"></a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="blank"></div>
            <div class="block">
                <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="<?php echo @IMG_URL;?>
di.jpg"></a>
            </div>

     <?php echo $_smarty_tpl->getSubTemplate ("../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>