<?php /* Smarty version Smarty-3.1.6, created on 2015-10-29 21:11:17
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\Order\order_add.html" */ ?>
<?php /*%%SmartyHeaderCode:174315631b7b5eb0491-67823919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '084e9e9a406d0dc285875968b4df0128672b2aff' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\Order\\order_add.html',
      1 => 1446123990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174315631b7b5eb0491-67823919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5631b7b6096ed',
  'variables' => 
  array (
    'user_list' => 0,
    'all_user' => 0,
    'goods_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5631b7b6096ed')) {function content_5631b7b6096ed($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加会员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
        <script src="<?php echo @ADMIN_JS_URL;?>
jquery-1.8.0min.js"></script>
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加会员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/Order/order_list">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">

                <tr>
                    <td>购买用户</td>
                    <td>
                        <select name="order_user" style="width: 100px;" id="user">
                            <option selected="selected" value="0">请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['user_list']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        收货人
                    </td>
                    <td>
                        <select name="order_consignee" style="width: 175px;" id="accept_people">
                            <option selected="selected" value="0">请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['all_user']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>购买商品</td>
                    <td>
                        <select name="order_goods" style="width: 100px;">
                            <option selected="selected" value="0">请选择</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['goods_list']->value),$_smarty_tpl);?>

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>运送方式</td>
                    <td><input type="text" name="order_ship_name" /></td>
                </tr>
                <tr>
                    <td>支付方式</td>
                    <td><input type="text" name="order_pay_name" /></td>
                </tr>
                <tr>
                    <td>订单备注</td>
                    <td><input type="text" name="order_remarks" /></td>
                </tr>

                <tr>
                    <td>购买数量</td>
                    <td>
                        <input type="text" name="order_amount">
                    </td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
    <script>

        $(function(){
            var user=$('#user');
            var accept=$('#accept_people');
            user.change(function(){
                var key=user.find('option:selected').val();
                var user_id=key.split(',')[0];//获得该用户的ID
                $.ajax({
                    type:'POST',
                    url:'<?php echo @__CONTROLLER__;?>
/get_consignee',
                    data:{ user_id:user_id},
                     success:function(data){
                         if(typeof(data)!="object"){
                             data=eval('('+data+')');
                         }
                         var str='';
                         if(data.status){
//                             for(var i in data.data){
//                                 str +='<option value="'+i+'">'+data.data[i]+'</option>';
//                             }
                             $.each(data.data,function(i,v){
                                 str +='<option value="'+i+'">'+v+'</option>';
                             })
                         }else{
                             str +="<option value=''>---暂无收货人，请完善---</option>";
                         }
                         accept.html(str);
                    },
                    error:function(data){
                        alert('操作失败');
                    },
                    dataType:'json'
                });
            })
        })
    </script>
</html><?php }} ?>