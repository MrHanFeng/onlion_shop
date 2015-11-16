<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 19:44:01
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\News\news_update.html" */ ?>
<?php /*%%SmartyHeaderCode:142545649c181b93041-26007178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca5cfb509a0091c525d31bb8fd3b6cdd1606a7b9' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\News\\news_update.html',
      1 => 1447674239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142545649c181b93041-26007178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649c181bd955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649c181bd955')) {function content_5649c181bd955($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加用户</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：新闻管理-》更改新闻</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/news_list">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>新闻标题：</td>
                    <td><input type="text" name="news_title" value="<?php echo $_smarty_tpl->tpl_vars['news_info']->value['news_title'];?>
"/></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <input type="hidden" name="news_id" value="<?php echo $_smarty_tpl->tpl_vars['news_info']->value['news_id'];?>
" />
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>