<?php /* Smarty version Smarty-3.1.6, created on 2015-10-27 09:15:26
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\User\comment_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:6479562ed02e3b3bb6-61669419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f7411fbedc1cede6a74383ca746af8b87d367f' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\User\\comment_detail.html',
      1 => 1445239968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6479562ed02e3b3bb6-61669419',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment_info' => 0,
    'v' => 0,
    'user' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562ed02e64bd5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562ed02e64bd5')) {function content_562ed02e64bd5($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：会员管理-》评论列表</span>

            </span>
        </div>
        <div></div>

        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>评论者</td>
                        <td>内容</td>
                        <td>IP地址</td>
                        <td>评论时间</td>
                        <td>审核状态</td>
                        <td align="center">操作</td>
                    </tr>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comment_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cm_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value[$_smarty_tpl->tpl_vars['v']->value['cm_user_id']];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cm_content'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cm_ip'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['cm_time'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value['cm_status']==1){?>
                            <td>已审核</td>
                        <?php }else{ ?>
                            <td>未审核</td>
                        <?php }?>

                         <?php if ($_smarty_tpl->tpl_vars['v']->value['cm_status']==1){?>
                             <td><a href="<?php echo @__CONTROLLER__;?>
/commend_change/flag/0/cm_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['cm_id'];?>
/goods_id/<?php echo $_GET['goods_id'];?>
">取消审核</a></td>
                         <?php }else{ ?>
                            <td><a href="<?php echo @__CONTROLLER__;?>
/commend_change/flag/1/cm_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['cm_id'];?>
/goods_id/<?php echo $_GET['goods_id'];?>
">通过审核</a></td>
                         <?php }?>


                    </tr>
                <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                        </td>
                    </tr>
                </tbody>

            </table>
            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>


        </div>

    </body>
</html><?php }} ?>