<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 19:24:22
         compiled from "E:/xampp/htdocs/buy_tp/shop/Admin/View\News\news_list.html" */ ?>
<?php /*%%SmartyHeaderCode:71535649bc99e81b00-55224409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9b26416209249b06ce9aabd7d1ec3df96ec8891' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Admin/View\\News\\news_list.html',
      1 => 1447673062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71535649bc99e81b00-55224409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5649bc9a083ad',
  'variables' => 
  array (
    'brand_info' => 0,
    'news_info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649bc9a083ad')) {function content_5649bc9a083ad($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>新闻列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            
            .tr_color{background-color: #9F88FF}
            
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：新闻管理-》新闻列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__MODULE__;?>
/News/news_add">【添加新闻】</a>
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
                        <td>新闻标题</td>
                        <td>创建人</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['news_id'];?>
</td>
                        <td><a href="<?php echo @__SELF__;?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['v']->value['news_title'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['news_manager_name'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['news_date'],"%Y-%m-%d %H:%M:%S ");?>
</td>
                        <td>
                            <a href="<?php echo @__CONTROLLER__;?>
/news_update/news_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['news_id'];?>
">修改</a><span>|
                            <a href='<?php echo @__CONTROLLER__;?>
/news_delete/news_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['news_id'];?>
' onclick="return confirm('确定要删除？');"> 删除 </a>
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