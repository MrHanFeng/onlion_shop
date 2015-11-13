<?php

    namespace home\Controller;
    use Component\AdminController;

    class OrderController extends AdminController{

        public function order_list(){
            $re=R("Goods/pager",array('Order','7'));
            $this->assign('order_info',$re['info']);
            $this->assign('pagelist',$re['pagelist']);
            $this->display();
        }



        /**
         * 返回特定会员的所有收货人信息,用于前台页面JSON的交互
         * @param $user_id ，该会员ID
         * @return array
         *      key为收货人ID，
         *      value为收货人-邮编-手机号
         */
        public function get_consignee(){
            $re=D('Consignee')->consignee_info($_POST['user_id']);
            $info=array();
            foreach($re as $v){
                $value=$v['consignee_name']."-".$v['consignee_zipcode']."-".$v['consignee_mobile'];
                $key=$v['consignee_id'].",".$value;
                $info[$key]=$value;
            }
           if($info){
               $status=1;//标识位
               $msg =$info;
           }else{
               $status=0;
               $msg="没有数据";
           }
            $data=array(
                'status'=>$status,
                'data'=>$msg
            );
            echo json_encode($data);
        }



        /**
         * 删除订单，修改订单状态为取消
         */
        public function order_delete(){
            $data['order_status']="取消";
            $re=M('Order')->where("order_id={$_GET['order_id']}")->data($data)->save();
            $this->if_re($re,array('取消订单成功','Ucenter/ucenter3'),array('取消订单失败','Ucenter/ucenter3'));
        }

        /**
         * 订单付款
         */
        public function order_pay(){
            $order=M("Order");
            $user=M('User');
            $user_id_money=$order->getFieldByOrder_id($_GET['order_id'],'order_user_id,order_amount');
//            echo key($user_id_money);//存user_id
//            echo current($user_id_money);//存该订单花销的钱
            $user_money=$user->getFieldByUser_id(key($user_id_money),'user_money');
            if($user_money<current($user_id_money)){
               $this->error("余额不足，请充值",U('Ucenter/ucenter3'));
            }else{
                //更新用户表数据
                $user_id=key($user_id_money);
                $user_data['user_money']=$user_money-current($user_id_money);
                $user->where("user_id={$user_id}")->data($user_data)->save();

                //更新订单数据
                $order_data['order_status']="已付款";
                $order_data['order_pay_time']=time();
                $re=$order->where("order_id={$_GET['order_id']}")->data($order_data)->save();
                $this->if_re($re,array('付款成功','Ucenter/ucenter3'),array('付款失败','Ucenter/ucenter3'));
            }
        }


        /**
         * 用户确认收货
         */
        function order_confirm(){
            $data['order_id']=$_GET['order_id'];
            $data['order_confirm_time']=time();
            $data['order_status']="已完成";
            $re=M('Order')->data($data)->save();
            $this->if_re($re,array('收货成功','Ucenter/ucenter3'),array('收货失败','Ucenter/ucenter3'));
        }




    }