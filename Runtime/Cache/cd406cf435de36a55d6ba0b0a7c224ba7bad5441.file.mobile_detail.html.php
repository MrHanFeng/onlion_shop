<?php /* Smarty version Smarty-3.1.6, created on 2015-10-28 14:12:49
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Index\mobile_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:17625630670f327e71-84430376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd406cf435de36a55d6ba0b0a7c224ba7bad5441' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Index\\mobile_detail.html',
      1 => 1446012768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17625630670f327e71-84430376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5630670f37dd8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5630670f37dd8')) {function content_5630670f37dd8($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品展示</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />

    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
mobile/index.css">
</head>
<body>
<div class="home index show-hover">
    <!--头页-->
    <div class="header">
        <ul>
            <li style="float: left">
                <img src="<?php echo @IMG_URL;?>
logo.png" alt="">
            </li>
            <li style="float: right">
                <img src="<?php echo @IMG_URL;?>
seach.png" alt="" class="search">
            </li>
        </ul>
    </div>
    <!--菜单也-->
    <div class="menu">
        <ul>
            <li class="cate-hover">首页</li>
            <li>手机</li>
            <li>分类</li>
            <li>周边产品</li>
            <li>其他</li>
        </ul>
    </div><!--end menu-->
</div><!--end home-->
</body>
</html><?php }} ?>