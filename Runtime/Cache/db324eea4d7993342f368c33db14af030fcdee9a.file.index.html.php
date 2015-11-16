<?php /* Smarty version Smarty-3.1.6, created on 2015-11-16 22:12:28
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:31392562dc88329d6a2-47699381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db324eea4d7993342f368c33db14af030fcdee9a' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Index\\index.html',
      1 => 1447683147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31392562dc88329d6a2-47699381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562dc8837f0bb',
  'variables' => 
  array (
    'cate_mobile' => 0,
    'cate_computer' => 0,
    'cate_other' => 0,
    'goods_hot' => 0,
    'v' => 0,
    'brand' => 0,
    'ad_top' => 0,
    'goods_price' => 0,
    'news_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562dc8837f0bb')) {function content_562dc8837f0bb($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\xampp\\htdocs\\buy_tp\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--<include file="Public/head" />-->
<div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="#">首页</a> <code>&gt;</code> 用户中心 
            </div>
        </div>
        <div class="blank"></div>
        <div class="block box">

        <div class="block clearfix">

            <div class="AreaL">

                <h3><span>商品分类</span></h3>
                <div id="category_tree" class="box_1">
                        <dl>
                            <dt><a href="<?php echo @__MODULE__;?>
/Goods/showlist/cate_id/1">手机</a></dt>
                            <dd>
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['name'] = 'mobile_k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cate_mobile']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['max'] = (int)6;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mobile_k']['total']);
?>
                                    <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['cate_mobile']->value[$_smarty_tpl->getVariable('smarty')->value['section']['other_k']['index']]['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate_mobile']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mobile_k']['index']]['goods_name'];?>
</a>
                                <?php endfor; endif; ?>
                            </dd>
                        </dl>

                        <dl>
                            <dt><a href="<?php echo @__MODULE__;?>
/Goods/showlist/cate_id/2">电脑</a></dt>
                                <dd>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['name'] = 'computer_k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cate_computer']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['max'] = (int)6;
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['computer_k']['total']);
?>
                                    <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['cate_computer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['other_k']['index']]['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate_computer']->value[$_smarty_tpl->getVariable('smarty')->value['section']['computer_k']['index']]['goods_name'];?>
</a>
                                    <?php endfor; endif; ?>
                                </dd>

                        </dl>
                        <dl>
                            <dt><a href="<?php echo @__MODULE__;?>
/Goods/showlist/cate_id/3">数码周边</a></dt>
                                <dd>
                                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['name'] = 'other_k';
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cate_other']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['max'] = (int)6;
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['other_k']['total']);
?>
                                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['cate_other']->value[$_smarty_tpl->getVariable('smarty')->value['section']['other_k']['index']]['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cate_other']->value[$_smarty_tpl->getVariable('smarty')->value['section']['other_k']['index']]['goods_name'];?>
 </a>
                                    <?php endfor; endif; ?>
                                </dd>
                        </dl>
                </div>
                <div class="blank"></div>
                <div class="box">
                    <h3><span>销售排行榜</span></h3>
                    <div class="box_1">
                        <div class="top10List clearfix">

                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_hot']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                            <ul class="clearfix">
                                <img src="<?php echo @IMG_URL;?>
top_<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
.gif" class="iteration">
                                    <li class="topimg">
                                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" alt="" class="samllimg"></a>
                                    </li>

                                    <li class="iteration1">
                                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" title=""><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['goods_name'],12,'...');?>
</a><br />
                                        售价：<font class="f1">￥<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['goods_price'],5,'');?>
元</font><br />
                                    </li>
                            </ul>
                        <?php } ?>


                        </div>
                    </div>
                </div>
                <div class="blank5"></div><div class="box">  <h3><span>品牌专区</span></h3>
                    <div class="box_1">
                        <div class=" brands clearfix">
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                                <a href="#"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['brand_small_logo'];?>
" alt="诺基亚 (7)"></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="AreaM">
                <div class="box clearfix">
                    <div id="focus">
                        <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['ad_top']->value;?>
" width="515" height="160" alt="" />
                    </div>
                </div>
                <div class="blank"></div>

                <div class="itemTit" id="itemHot">
                    <div class="tit">热卖商品</div>
                 <!--   <h2 class="h2bg"><a href="#" >GSM手机</a></h2>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >小灵通/固话充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >移动手机充值卡</a></h2>-->
                </div>
                <div id="show_hot_area" class="clearfix">

                <!-- <volist name="goods_hot" id="v" key="k" offset="0" length='3'> -->
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['goods_hot']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int)3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total']);
?> <!-- step=2 start=0 show=false -->
                    <div class="goodsItem">
                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_id'];?>
">
                            <img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_small_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_name'];?>
" class="goodsimg">
                        </a><br />
                        <p class="f1">
                            <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_name'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_name'];?>

                            </a>
                        </p>
                        <font class="market">￥<?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_price']+300;?>
元</font><br />
                        <font class="f1">
                            ￥<?php echo $_smarty_tpl->tpl_vars['goods_hot']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['goods_price'];?>
元                     </font>
                    </div>
                    <?php endfor; endif; ?>
                <!-- </volist> -->
                </div>

                <div class="blank"></div>

                <div class="itemTit" id="itemBest">

                    <div class="tit">精品推荐</div>
                   <!-- <h2><a href="#" >全部商品</a></h2>
                    <h2 class="h2bg"><a href="#" >GSM手机</a></h2>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >联通手机充值卡</a></h2>-->
                </div>
                <div id="show_best_area" class="clearfix">

                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goods_price']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <div class="goodsItem">

                        <a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @IMG_UPLOAD;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
" class="goodsimg"></a><br />
                        <p class="f1"><a href="<?php echo @__MODULE__;?>
/Goods/detail/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></p>


                        <font class="market">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price']+100;?>
元</font><br />

                        <font class="f1">
                            ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
元                     </font>
                    </div>
                    <?php } ?>


                </div>
                <div class="blank"></div>

             <!--   <div class="itemTit" id="itemNew">
                    <div class="tit">新品上架</div>
                    <h2 class="h2bg"><a href="#" >GSM手机</a></h2>
                    <h2 class="h2bg"><a href="#" >双模手机</a></h2>
                    <h2 class="h2bg"><a href="#" >充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >移动手机充值卡</a></h2>
                    <h2 class="h2bg"><a href="#" >联通手机充值卡</a></h2>
                </div>-->
            <!--    <div id="show_new_area" class="clearfix">
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="诺基亚E66">诺基亚E66</a></p>
                        <font class="market">￥2758元</font><br />
                        <font class="f1">
                            ￥2298元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
1_thumb_G_1240902890710.jpg" alt="KD876" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="KD876">KD876</a></p>
                        <font class="market">￥1666元</font><br />
                        <font class="f1">
                            ￥1388元                     </font>
                    </div>
                    <div class="goodsItem">

                        <a href="#"><img src="<?php echo @IMG_URL;?>
8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                        <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>
                        <font class="market">￥479元</font><br />
                        <font class="f1">
                            ￥399元                     </font>
                    </div>

                </div>-->
                <div class="blank"></div>

            </div>


            <div class="AreaL" style="float: right;">

                <h3><span>新闻快讯</span></h3> 
                <div class="NewsList tc box_1" style="border-top: medium none;">
                    <ul>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['name'] = 'kk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news_info']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['max'] = (int)8;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total']);
?>
                            <li>
                                <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['news_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['news_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['news_info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['news_title'];?>
</a>
                            </li>
                        <?php endfor; endif; ?>
                    </ul>
                </div>

                <div class="blank"></div>
                <div class="box">  
                    <h3><span>订单查询</span></h3>
                    <div class="box_1">
                        <div class="boxCenterList">
                            <form name="ecsOrderQuery">
                                <input name="order_sn" class="inputBg" type="text" /><br />
                                <div class="blank5"></div>
                                <input value="查询该订单号" class="bnt_blue_2"  type="button" />
                            </form>
                            <div id="ECS_ORDER_QUERY" style="margin-top: 8px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
                <div class="blank"></div><div class="box">
                    <h3><span>邮件订阅</span></h3>
                    <div class="box_1">

                        <div class="boxCenterList RelaArticle">
                            <input id="user_email" class="inputBg" type="text" /><br />
                            <div class="blank5"></div>
                            <input class="bnt_blue" value="订阅"  type="button" />
                            <input class="bnt_bonus" value="退订"  type="button" />
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
                <div class="box"> 
                    <h3>
                        <span><a href=""></a></span>
                        <a href="">更多</a>
                    </h3>
                    <div class="box_1">

                        <div class="boxCenterList RelaArticle">
                        </div>
                    </div>
                </div>
                <div class="blank5"></div>
                
                <style type="text/css">
                    .boxCenterList form{display:inline;}
                    .boxCenterList form a{color:#404040; text-decoration:underline;}
                </style>
                
                <div class="box">  
                    <h3><span>发货查询</span></h3>
                    <div class="box_1">
                        <div class="boxCenterList">
                            订单号 2009061909851<br />
                            发货单 232421   <div class="blank"></div>
                            订单号 2009052224892<br />
                            发货单 1123344   <div class="blank"></div>
                        </div>
                    </div>
                </div>
                <div class="blank"></div>
            </div>
        </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ("../Public/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>