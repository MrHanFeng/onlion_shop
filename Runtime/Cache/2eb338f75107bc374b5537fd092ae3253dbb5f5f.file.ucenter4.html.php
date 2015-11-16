<?php /* Smarty version Smarty-3.1.6, created on 2015-11-02 00:23:12
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Ucenter\ucenter4.html" */ ?>
<?php /*%%SmartyHeaderCode:271865636344b73bfd7-13354381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2eb338f75107bc374b5537fd092ae3253dbb5f5f' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Ucenter\\ucenter4.html',
      1 => 1446394990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271865636344b73bfd7-13354381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5636344b7fb68',
  'variables' => 
  array (
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5636344b7fb68')) {function content_5636344b7fb68($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
                            <h5><span>会员信息</span></h5>
                            <div class="blank"></div>
                            <form action="<?php echo @__SELF__;?>
" method="post" name="theForm">
                                <table bgcolor="#dddddd" border="0" cellpadding="5" cellspacing="1" width="100%">
                                    <tbody><tr>
                                            <td align="right" bgcolor="#ffffff">故乡：</td>
                                            <td colspan="3" align="left" bgcolor="#ffffff">
                                                <select name="" id="selCountries_0" >
                                                    <option value="0">请选择国家</option>
                                                    <option value="1" selected="selected">中国</option>
                                                </select>
                                                <select name="user_province" id="selProvinces_0">
                                                    <option value="0">请选择省</option>
                                                    <option value="北京" selected="selected">北京</option>
                                                    <option value="安徽">安徽</option>
                                                    <option value="山西">山西</option>
                                                    <option value="福建">福建</option>
                                                    <option value="甘肃">甘肃</option>
                                                    <option value="广东">广东</option>
                                                    <option value="广西">广西</option>
                                                    <option value="贵州">贵州</option>
                                                    <option value="海南">海南</option>
                                                    <option value="河北">河北</option>
                                                    <option value="河南">河南</option>
                                                    <option value="黑龙江">黑龙江</option>
                                                    <option value="湖北">湖北</option>
                                                    <option value="湖南">湖南</option>
                                                    <option value="吉林">吉林</option>
                                                    <option value="内蒙古">内蒙古</option>
                                                    <option value="江苏">江苏</option>
                                                </select>
                                                <select name="user_city" id="selCities_0">
                                                    <option value="0">请选择市</option>
                                                    <option value="北京" selected="selected">北京</option>
                                                </select>
                                                <select name="user_district" id="selDistricts_0">
                                                    <option value="0">请选择区</option>
                                                    <option value="500">东城区</option>
                                                    <option value="501">西城区</option>
                                                    <option value="502">海淀区</option>
                                                    <option value="503">朝阳区</option>
                                                    <option value="504">崇文区</option>
                                                    <option value="505">宣武区</option>
                                                    <option value="506">丰台区</option>
                                                    <option value="507">石景山区</option>
                                                    <option value="508">房山区</option>
                                                    <option value="509">门头沟区</option>
                                                    <option value="510">通州区</option>
                                                    <option value="511">顺义区</option>
                                                    <option value="昌平区" selected="selected">昌平区</option>
                                                    <option value="513">怀柔区</option>
                                                    <option value="514">平谷区</option>
                                                    <option value="515">大兴区</option>
                                                    <option value="516">密云县</option>
                                                    <option value="517">延庆县</option>
                                                </select>
                                                (必填) </td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">用户姓名：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="username" class="inputBg" id="consignee_0" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['username'];?>
" type="text" />
                                                (必填) </td>
                                            <td align="right" bgcolor="#ffffff">电子邮件地址：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_email'];?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">爱好：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="user_hobby" class="inputBg"  value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_hobby'];?>
" type="text" />
                                                </td>
                                            <td align="right" bgcolor="#ffffff">性别：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="user_sex" class="inputBg" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_sex'];?>
" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">座右铭：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="user_introduce" class="inputBg" id="address_0" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_introduce'];?>
" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">邮政编码：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="user_post" class="inputBg" id="zipcode_0" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_post'];?>
" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">QQ：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="user_qq" class="inputBg" id="tel_0" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_qq'];?>
" type="text" />
                                                (必填)</td>
                                            <td align="right" bgcolor="#ffffff">手机：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <input name="user_tel" class="inputBg" id="mobile_0" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_tel'];?>
" type="text" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" bgcolor="#ffffff">注册时间：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userinfo']->value['user_create_time'],'%Y-%m-%d %H:%M:%S');?>

                                            </td>
                                            <td align="right" bgcolor="#ffffff">上次登录时间：</td>
                                            <td align="left" bgcolor="#ffffff">
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['userinfo']->value['user_last_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
                                        </tr>

                                        <tr>
                                            <td align="right" bgcolor="#ffffff">&nbsp;</td>
                                            <td colspan="3" align="center" bgcolor="#ffffff">
                                                <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['user_id'];?>
">
                                                <input  class="bnt_blue_1" value="确认修改" type="submit" />
                                                <input name="button" class="bnt_blue" value="删除" type="button" />
                                                <!--<input name="act" value="act_edit_address" type="hidden" />-->
                                                <!--<input name="address_id" value="3" type="hidden" />-->
                                            </td>
                                        </tr>
                                    </tbody></table>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php echo $_smarty_tpl->getSubTemplate ("../foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>