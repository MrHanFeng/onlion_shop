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
     *  @param $name，SESSION的KEY，若为数组，其key与value分别对应SESSION的key和value
     *  @param $value ，SESSION的值
     *  @return bool ，$name是数组，成功会返回true
     */
    function set_order_session($name,$value=""){
        if(is_array($name)){
            foreach($name as $k=>$v){
                $_SESSION[$k]=$v;
            }
            return true;
        }
        $_SESSION[$name]=$value;
    }

    /**
     * 返回要获取的SESSIO值
     * @param $name
     * @return bool  成功返回数据，不存在返回false
     */
    function get_session($name){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }
        return false;
    }


}
