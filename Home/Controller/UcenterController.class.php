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
                $user_model=D('User');
//                show($_POST);exit;
//                $re = $user_model->where("user_id={$_POST['user_id']}")->data($_POST)->save();
                $user_model->create();
                $re=$user_model->save();
//                echo $user_model->getLastSql();exit;
                $this->if_re($re,array('设置成功，请完善您的个人信息','ucenter4'),array('完善信息失败'));
            }else{
                $this->error('两次密码不相同');
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
        $user=M('user');
        $user_info=$user->find($_SESSION['user_id']);
        $this->assign("user_info",$user_info);
        $this->display();

    }

    /**
     * 个人中心收货人页面
     */
    function ucenter2(){
        $this->check_user_login();
        $accept=M('User_consignee');
//        $consinee_info=$accept->getFieldByConsignee_user_id($_SESSION['user_id']);//?????为何返回ID主键值不是全部值
        $consinee_info=$accept->where("consignee_user_id={$_SESSION['user_id']}")->find();
//        show($consinee_info);
//        echo $accept->getLastSql();
        $this->assign("accept_info",$consinee_info);
        $this->display();
    }

    /**
     * 个人中心订单页面
     */
    function ucenter3(){
        $this->check_user_login();
        $a=D('Order');
        if(!empty($_POST)){
            $a->create();
            $re=$a->save();
            $this->if_re($re,array('会员信息修改成功'),array('会员信息修改失败'));
        }else{
//            $order_id=$a->getFieldByOrder_user_id($_SESSION['user_id'],'order_id');
            $ids=$a->field("order_id")->where("order_user_id={$_SESSION['user_id']}")->select();
            $order_id="";
            foreach($ids as $v){
                $order_id .=$v['order_id'].",";
            }
            $order_id=substr($order_id,0,-1);
            $order_info=$a->select($order_id);//查询出该用户所有订单
//            show($order_info);exit;
            $this->assign('order_info',$order_info);
            $this->assign('order_num',count($order_info));
            $this->display();
        }
    }

    /**
     * 个人中心会员详细信息
     */
    function ucenter4(){
        $this->check_user_login();
        $a=D('User');
        if(!empty($_POST)){
            $a->create();
            $re=$a->save();
            $this->if_re($re,array('会员信息修改成功'),array('会员信息修改失败'));
        }else{
            $re=$a->find($_SESSION['user_id']);
            $this->assign('userinfo',$re);
            $this->display();
        }
    }


}
