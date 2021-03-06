<?php

//普通控制器的父类
namespace Component;
use Think\Controller;

class HomeController extends Controller{
    //构造方法
    function __construct() {
        //先执行父类的构造方法，否则系统要报错
        //因为原先的构造方法默认是被执行的
        parent::__construct();
    }

    //  访问空方法调用
    function _empty(){
        echo "<img src='".IMG_URL."404.gif"."' alt=''>";
    }

    function md6($pwd){
        return md5(md5($pwd));
    }

    /**
     * SQL语句结果的IF判断
     * @param $re ,执行SQL语句后的返回结果
     * @param $right $right[0]正确提示信息，$right[1]正确跳转页
     * @param $error $error[0]错误提示信息，$error[1]错误跳转页
     */
    function if_re($re,$right,$error){
        if($re){
            $this->success($right[0],U($right[1]));
        }else{
            $this->error($error[0],U($error[1]));
        }
    }

    /**
     * 检测会员用户是否登录，没有登录跳转登录页面
     */
    function check_user_login(){
        if( empty($_SESSION['user_id']) || empty($_SESSION['user_username']) ){
            $this->success("请先登录",U('User/login'));
        }
    }

    /**
     * 设置SESSION
     *  @param $value ，SESSION['order_sn']的值
     */
    function set_order_session($value){
        $_SESSION['order_sn']=$value;
    }

    /**
     * 返回要获取的SESSIO值
     * @return bool  成功返回数据，不存在返回false
     */
    function get_order_session(){
        if(isset($_SESSION['order_sn'])){
            return $_SESSION['order_sn'];
        }
        return false;
    }


    /**
     * 自定义重定向函数，支持延迟，输入提示信息
     * @param string $url 跳转信息
     * @param array $params 传入参数
     * @param int $delay 延迟秒数
     * @param string $msg 弹框提示信息
     * @return void
     */
    function my_redirect($url,$params=array(),$delay=1,$msg='出问题啦'){
        $temp_url=U($url);
        $a_str="<script>alert('{$msg}')</script>即将跳转，若无反应，<a href='{$temp_url}'>点击这里";
        $this->redirect($url,$params,$delay,$a_str);
    }


    function display(){
        $this->head();
        $this->foot();
        parent::display();
    }
    //导航分类遍历
    function head(){
			$cate = M('category');
			$cate_info=$cate->select();
			$this->assign('cate',$cate_info);
    }
    function foot(){
        $info = M('Ad')->getByAd_position('主页底部广告');
//			show($info);
        $this->assign('ad_bottom',$info['ad_big_img']);
    }

}
