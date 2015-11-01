<?php

namespace Home\Controller;
use Component\HomeController;

class UcenterController extends HomeController{


    /**
     *QQ用户首次快速登录，进行完善信息
     */
    function ucenter0(){
        $this->check_user_login();
        if(!empty($_POST)){
            if($_POST['password']==$_POST['password2']){
                unset($_POST['password2']);
                $_POST['password']=$this->md6($_POST['password']);
                show($_POST);exit;
                $user_model=D('User');
                $user_model->create();
                $re=$user_model->save();
                $this->if_re($re,array('完善信息成功','Index/index'),array('完善信息失败'));
            }
        }else{
            $this->display();
        }
    }

    /**
     * 个人中心欢迎页面
     */
    function ucenter1(){
        $this->check_user_login();
        $this->display();
    }

    /**
     * 个人中心收货人页面
     */
    function ucenter2(){
        $this->check_user_login();
        $this->display();
    }

    /**
     * 个人中心订单页面
     */
    function ucenter3(){
        $this->check_user_login();
        $this->display();
    }




}
