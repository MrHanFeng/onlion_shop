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
        if( empty($_SESSION['user_id'])  ){
            $this->success("请先登录",U('User/login'));
        }
    }
}
