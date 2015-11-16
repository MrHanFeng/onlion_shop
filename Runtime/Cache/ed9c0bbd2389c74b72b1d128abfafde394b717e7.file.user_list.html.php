<?php /* Smarty version Smarty-3.1.6, created on 2015-11-12 20:08:13
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\User\news_list.html" */ ?>
<?php /*%%SmartyHeaderCode:333056262de5b72d40-66830448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed9c0bbd2389c74b72b1d128abfafde394b717e7' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\User\\news_list.html',
      1 => 1447329908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '333056262de5b72d40-66830448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56262de5c0f16',
  'variables' => 
  array (
    'brand_info' => 0,
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56262de5c0f16')) {function content_56262de5c0f16($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>用户列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：用户管理-》用户列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/User/user_add">【添加用户】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <!--<span>-->
                <!--<form action="<?php echo @__SELF__;?>
" method="get">-->
                    <!--品牌<select name="brand_s" style="width: 100px;">-->
                        <!--<option selected="selected" value="0">请选择</option>-->
                        <!--<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['brand_info']->value),$_smarty_tpl);?>
-->
                    <!--</select>-->
                    <!--<input value="查询" type="submit" />-->
                <!--</form>-->
            <!--</span>-->
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>用户名称</td>
                        <td>性别</td>
                        <td>登陆账号</td>
                        <td>激活状态</td>
                        <td>QQ</td>
                        <td>手机</td>
                        <td>上次登陆时间</td>
                        <td align="center">操作</td>
                    </tr>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
                        <td><a href="<?php echo @__SELF__;?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_sex'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_email'];?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['v']->value['identify']){?>已激活
                            <?php }else{ ?>未激活
                            <?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_qq'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_tel'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['user_last_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td>
                            <a href="<?php echo @__CONTROLLER__;?>
/user_update/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
">修改</a><span>|
                            <a href='<?php echo @__CONTROLLER__;?>
/user_del/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
' onclick="return confirm('确定要删除？');"> 删除 </a>|<span>
                            <a href='<?php echo @__CONTROLLER__;?>
/user_freeze/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
' onclick="return confirm('确定要冻结？');"> 冻结 </a>|<span>
                            <a href='<?php echo @__CONTROLLER__;?>
/user_repwd/user_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
' onclick="return confirm('确定要重置密码？');"> 重置密码 </a>
                        </td>
                    </tr>
                <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                           <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>