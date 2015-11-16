<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 19:33:45
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\News\news_add.html" */ ?>
<?php /*%%SmartyHeaderCode:259245649be6a000f65-08754953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c77d0d7630c33db744cad39794d25a506bda9d54' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\News\\news_add.html',
      1 => 1447673623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259245649be6a000f65-08754953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649be6a04b30',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649be6a04b30')) {function content_5649be6a04b30($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加会员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：新闻管理-》添加新闻</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__MODULE__;?>
/News/news_list">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">

                <tr>
                    <td>新闻标题</td>
                    <td><input type="text" name="news_title" /></td>
                </tr>
                <tr>
                    <td>发表人</td>
                    <td><?php echo $_SESSION['mg_username'];?>
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
</html><?php }} ?>