<?php /* Smarty version Smarty-3.1.6, created on 2015-10-28 16:34:05
         compiled from "E:/xampp/htdocs/buy_tp/shop/Home/View\Index\mobile_index.html" */ ?>
<?php /*%%SmartyHeaderCode:28624563027335889b7-43608434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a361445653f061f24ee3472820a19fb8964a22' => 
    array (
      0 => 'E:/xampp/htdocs/buy_tp/shop/Home/View\\Index\\mobile_index.html',
      1 => 1446021242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28624563027335889b7-43608434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5630273371ee0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5630273371ee0')) {function content_5630273371ee0($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="MobileOptimized" content="width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1.0" />
    <title>峰峰传媒</title>
    <script src="<?php echo @JS_URL;?>
mobile/jquery-1.8.0min.js"></script>
    <script src="<?php echo @JS_URL;?>
mobile/index.js"></script>
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
mobile/index.css">
    <link rel="stylesheet" href="<?php echo @CSS_URL;?>
mobile/swiper.min.css">
    <style>
     .swiper-container {
         width: 100%;
         height: 100%;
         
     }
     .swiper-slide {
         text-align: center;
         font-size: 18px;
         background: #fff;
         
         /* Center slide text vertically */
         display: -webkit-box;
         display: -ms-flexbox;
         display: -webkit-flex;
         display: flex;
         -webkit-box-pack: center;
         -ms-flex-pack: center;
         -webkit-justify-content: center;
         justify-content: center;
         -webkit-box-align: center;
         -ms-flex-align: center;
         -webkit-align-items: center;
         align-items: center;
        }
        .swiper-wrapper img{
            height:160px;
        }
     </style>
</head>
<body>
<div class="contain">
    <!-- 一。第一页面-->
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
                    <li>周边</li>
                    <li>其他</li>
                </ul>
        </div><!--end menu-->
        <!--详细内容-->
        <div class="details">
            <div class="detail dt-hover">
                <div class="ad_roll">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="<?php echo @IMG_URL;?>
111.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="<?php echo @IMG_URL;?>
222.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="<?php echo @IMG_URL;?>
333.jpg" alt=""></div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <!-- Swiper JS -->
                    <script src="<?php echo @JS_URL;?>
mobile/swiper.min.js"></script>

                    <!-- Initialize Swiper -->
                    <script>
                    var swiper = new Swiper('.swiper-container', {
                        pagination: '.swiper-pagination',
                        nextButton: '.swiper-button-next',
                        prevButton: '.swiper-button-prev',
                        paginationClickable: true,
                        spaceBetween: 30,
                        centeredSlides: true,
                        autoplay: 2500,
                        autoplayDisableOnInteraction: false
                    });
                    </script>
                </div><!--end ad-->
                <div class="media">
                    <div class="ms_cate"><!--最新手机-->
                        <h3>最新产品</h3>
                        <div class="ms_detail">
                            <p class="music_box" data-cs="进口" >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt="" class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            </p>
                            <p class="music_box" data-cs="欧美" >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
1.jpg" alt="">
                                </span>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
u=2343403225,3098373454&fm=21&gp=0.jpg" alt="">
                                </span>
                            </p>
                            <div class="clear"></div>
                        </div>
                    </div><!--最新手机-->
                    <div class="ms_cate"><!--手机推荐-->
                        <h3>手机推荐</h3>
                        <div class="ms_detail">
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt="" class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">手机1</font>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">手机2</font>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">手机3</font>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">进口</font>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">进口</font>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">电子产品</font>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">电子产品</font>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">电子产品</font>
                            </p>
                            <p class="music_box" data-cs="电子产品"  >
                                <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">电子产品</font>
                            </p>

                            <div class="clear"></div>
                        </div>
                    </div><!--end 手机推荐-->
                    <div class="ms_cate"><!--MV-->
                        <h3>研发产品</h3>
                        <div class="ms_detail">
                            <div class="videos">
                                    <p class="video" onclick="video_play('电子产品','1')">
                                        <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                        <span>Like Ooh-Ahh-Twice[韩]</span>
                                    </p>
                            </div>
                            <div class="videos">
                                    <p class="video" onclick="video_play('电子产品','2')">
                                        <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                        <span>Like Ooh-Ahh-Twice[韩]</span>
                                    </p>
                            </div>
                            <div class="videos">
                                    <p class="video" onclick="video_play('电子产品','3')">
                                        <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                        <span>Like</span>
                                    </p>
                            </div>
                            <div class="videos">
                                    <p class="video" onclick="video_play('电子产品','4')">
                                        <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                        <span>Like Ooh-Ahh-Twice[韩]</span>
                                    </p>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div><!--end 研发产品-->
                </div><!--end media-->
            </div><!--end detail-->

            <!--2.排行页-->
            <div class="detail">
                <div class="ms_cate"><!--手机推荐-->
                    <h3>手机热搜榜</h3>
                    <div class="ms_detail">
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt="" class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                                <font style="">进口</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">欧美</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">电子产品</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
u=2343403225,3098373454&fm=21&gp=0.jpg" alt="">
                                </span>
                            <font style="">进口</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
u=2343403225,3098373454&fm=21&gp=0.jpg" alt="">
                                </span>
                            <font style="">进口</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
u=2343403225,3098373454&fm=21&gp=0.jpg" alt="">
                                </span>
                            <font style="">电子产品</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt="" class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">进口</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">欧美</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">电子产品</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
u=2343403225,3098373454&fm=21&gp=0.jpg" alt="">
                                </span>
                            <font style="">进口</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
u=2343403225,3098373454&fm=21&gp=0.jpg" alt="">
                                </span>
                            <font style="">进口</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
u=2343403225,3098373454&fm=21&gp=0.jpg" alt="">
                                </span>
                            <font style="">电子产品</font>
                        </p>
                        <div class="clear"></div>
                    </div>
                </div><!--end 手机推荐-->
            </div><!--end detail-->

            <!--3.分类页-->
            <div class="detail" style="background: #f3f3f3">
                <div class="ms_cate"><!--热门分类-->
                    <h3>电脑</h3>
                    <div class="ms_detail" >
                        <p class="catebox"  >
                            <span>苹果</span>
                        </p>
                        <p class="catebox"  >
                            <span>surface</span>
                        </p>
                        <p class="catebox"  >
                            <span>联想</span>
                        </p>
                        <p class="catebox"  >
                            <span>华硕</span>
                        </p>
                        <p class="catebox"  >
                            <span>戴尔</span>
                        </p>
                        <p class="catebox"  >
                            <span>宏碁</span>
                        </p>
                        <div class="clear"></div>
                    </div>
                    <div class="ms_cate"><!--分类-->
                        <h3>搜索排行</h3>
                        <div class="ms_detail">
                            <p class="catebox"  >
                                <span>苹果</span>
                            </p>
                            <p class="catebox"  >
                                <span>surface</span>
                            </p>
                            <p class="catebox"  >
                                <span>联想</span>
                            </p>
                            <p class="catebox"  >
                                <span>华硕</span>
                            </p>
                            <p class="catebox"  >
                                <span>戴尔</span>
                            </p>
                            <p class="catebox"  >
                                <span>宏碁</span>
                            </p>
                            <div class="clear"></div>
                        </div>

                    </div>
                    <div class="ms_cate"><!--分类-->
                        <h3>周边产品</h3>
                        <div class="ms_detail">
                            <p class="catebox"  >
                                <span>苹果</span>
                            </p>
                            <p class="catebox"  >
                                <span>surface</span>
                            </p>
                            <p class="catebox"  >
                                <span>联想</span>
                            </p>
                            <p class="catebox"  >
                                <span>华硕</span>
                            </p>
                            <p class="catebox"  >
                                <span>戴尔</span>
                            </p>
                            <p class="catebox"  >
                                <span>宏碁</span>
                            </p>
                            <div class="clear"></div>
                            <div class="clear"></div>
                        </div>

                    </div>
                    <div class="ms_cate"><!--分类-->
                        <h3>耳机分类</h3>
                        <div class="ms_detail">
                            <p class="catebox"  >
                                <span>苹果</span>
                            </p>
                            <p class="catebox"  >
                                <span>surface</span>
                            </p>
                            <p class="catebox"  >
                                <span>联想</span>
                            </p>
                            <p class="catebox"  >
                                <span>华硕</span>
                            </p>
                            <p class="catebox"  >
                                <span>戴尔</span>
                            </p>
                            <p class="catebox"  >
                                <span>宏碁</span>
                            </p>
                            <div class="clear"></div>
                        </div>

                    </div>
                </div>
            </div><!--end detail-->

            <!--4。歌手分类-->
            <div class="detail">
                <div class="ms_cate"><!--歌手推荐-->
                    <h3>周边产品</h3>
                    <div class="ms_detail">
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt="" class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">进口歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
1.jpg" alt="">
                                </span>
                            <font style="">欧美歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">电子产品歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
1.jpg" alt="">
                                </span>
                            <font style="">进口歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">进口歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
1.jpg" alt="">
                                </span>
                            <font style="">电子产品歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">电子产品歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
1.jpg" alt="">
                                </span>
                            <font style="">电子产品歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">电子产品歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
1.jpg" alt="">
                                </span>
                            <font style="">电子产品歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
2.jpg" alt="">
                                </span>
                            <font style="">电子产品歌手</font>
                        </p>
                        <p class="music_box" data-cs="电子产品"  >
                            <img src="<?php echo @IMG_URL;?>
imgBg.png" alt=""  class="img_bg">
                                <span class="music_pic">
                                    <img src="<?php echo @IMG_URL;?>
1.jpg" alt="">
                                </span>
                            <font style="">电子产品歌手榜</font>
                        </p>
                        <div class="clear"></div>
                    </div>
                </div><!--end 歌手推荐-->
            </div><!--end detail-->

            <!--5.MV页-->
            <div class="detail">
                <div class="ms_cate"><!--MV-->
                    <h3>其他产品</h3>
                    <div class="ms_detail">
                        <div class="videos">
                            <p class="video" onclick="video_play('电子产品','1')">
                                <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                <span>Like Ooh-Ahh-Twice[韩]</span>
                            </p>
                        </div>
                        <div class="videos">
                            <p class="video" onclick="video_play('电子产品','2')">
                                <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                <span>Like Ooh-Ahh-Twice[韩]</span>
                            </p>
                        </div>
                        <div class="videos">
                            <p class="video" onclick="video_play('电子产品','3')">
                                <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                <span>Like</span>
                            </p>
                        </div>
                        <div class="videos">
                            <p class="video" onclick="video_play('电子产品','4')">
                                <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                <span>Like Ooh-Ahh-Twice[韩]</span>
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div><!--end 研发产品-->
                <div class="ms_cate"><!--MV-->
                    <h3>人气最高</h3>
                    <div class="ms_detail">
                        <div class="videos">
                            <p class="video" onclick="video_play('电子产品','1')">
                                <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                <span>Like Ooh-Ahh-Twice[韩]</span>
                            </p>
                        </div>
                        <div class="videos">
                            <p class="video" onclick="video_play('电子产品','2')">
                                <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                <span>Like Ooh-Ahh-Twice[韩]</span>
                            </p>
                        </div>
                        <div class="videos">
                            <p class="video" onclick="video_play('电子产品','3')">
                                <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                <span>Like</span>
                            </p>
                        </div>
                        <div class="videos">
                            <p class="video" onclick="video_play('电子产品','4')">
                                <img src="<?php echo @IMG_URL;?>
u=3231043057,2249954927&fm=21&gp=0.jpg" alt="">
                                <span>Like Ooh-Ahh-Twice[韩]</span>
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div><!--end 研发产品-->
            </div><!--end detail-->
        </div><!--end detials-->
        <!--尾页-->
        <div class="footer">
            <div class="ft_contain">
                版权没有，仿冒不究！
            </div>
        </div>
    </div><!--end home-->

</div><!--end contain-->
</body>
<script>
    var music_box=$('.music_box');
    music_box.click(function(){
        location.href="<?php echo @__CONTROLLER__;?>
/mobile_chanpin";
    });
    function video_play(){
        location.href="<?php echo @__CONTROLLER__;?>
/mobile_chanpin";
    };
</script>

</html><?php }} ?>