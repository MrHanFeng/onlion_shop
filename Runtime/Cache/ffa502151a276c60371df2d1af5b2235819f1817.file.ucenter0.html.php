<?php /* Smarty version Smarty-3.1.6, created on 2015-11-02 00:21:52
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Ucenter\ucenter0.html" */ ?>
<?php /*%%SmartyHeaderCode:21300563616007ce3f3-70385167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffa502151a276c60371df2d1af5b2235819f1817' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Ucenter\\ucenter0.html',
      1 => 1446392714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21300563616007ce3f3-70385167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5636160085310',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5636160085310')) {function content_5636160085310($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("../head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 


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
                            <h5><span>请完善信息</span></h5>
                            <div class="blank"></div>
                            <form action="<?php echo @__SELF__;?>
" method="post" name="theForm">
                                <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                                    <tbody>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">登录邮箱：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="user_email" class="inputBg" id="consignee_0" value="" type="text" />
                                                (必填) </td>

                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">登录密码：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="password" class="inputBg" id="address_0" value="" type="password" />
                                                (必填)</td>

                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">确认密码：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="password2" class="inputBg" id="zipcode_0" value="" type="password" /></td>
                                                (必填)</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>
">
                                                <input type="submit" value="提交">
                                            </td>
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