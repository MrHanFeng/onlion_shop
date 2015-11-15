<?php

    namespace home\Controller;
    use Component\AdminController;
    use Component\HomeController;

    class OrderController extends HomeController{
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
         * 订单付款
         */
        public function order_pay(){
            $order=M("Order");
            $user=M('User');
            $order_info=$order->getFieldByOrder_id($_GET['order_id'],'order_id,order_goods_id,order_user_id,order_amount');
            $goods_id=$order_info[$_GET['order_id']]['order_goods_id'];//该商品ID
            $user_id=$order_info[$_GET['order_id']]['order_user_id'];//该用户ID
            $order_amount=$order_info[$_GET['order_id']]['order_amount'];//账户余额
            $user_money=$user->getFieldByUser_id($user_id,'user_money');
            if($user_money<$order_amount){
                $this->my_redirect('Ucenter/ucenter3','',1,"余额不足，请充值");
            }else{
                //更新用户表数据
                $user_data['user_money']=$user_money-$order_amount;
                $user->where("user_id={$user_id}")->data($user_data)->save();
                //更新订单数据
                $order_data['order_status']="已付款";
                $order_data['order_pay_time']=time();
                $re=$order->where("order_id={$_GET['order_id']}")->data($order_data)->save();
                if($re){
                    echo "<script>alert('付款成功，请评价')</script>";
                    $param['goods_id']=$goods_id;
                    $param['goods_comment']="goods_comment";
                    $this->redirect('Goods/detail',$param);
                }else{
                    echo "<script>alert('付款失败')</script>";
                    $this->redirect('Ucenter/ucenter3',"",3,"付款失败");
                }
//                $this->if_re($re,array('','Goods/detail'),array('付款失败','Ucenter/ucenter3'));
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
//            $re && $this->my_redirect('Ucenter/ucenter3','',1,"收货成功");  $this->my_redirect('Ucenter/ucenter3','',1,"收货失败");
            $re ?$this->my_redirect('Ucenter/ucenter3','',1,"收货成功"):$this->my_redirect('Ucenter/ucenter3','',1,"收货失败");
//            $this->if_re($re,array('收货成功','Ucenter/ucenter3'),array('收货失败','Ucenter/ucenter3'));
        }

        /**
         * 删除订单，修改订单状态为取消
         */
        public function order_delete(){
            $data['order_status']="取消";
            $re=M('Order')->where("order_id={$_GET['order_id']}")->data($data)->save();
//            $this->if_re($re,array('取消订单成功','Ucenter/ucenter3'),array('取消订单失败','Ucenter/ucenter3'))
            $re ?$this->my_redirect('Ucenter/ucenter3','',1,"取消订单成功"):$this->my_redirect('Ucenter/ucenter3','',1,"取消订单失败");;
        }


    }