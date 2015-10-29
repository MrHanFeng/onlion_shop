<?php

    namespace admin\Controller;
    use Component\AdminController;

    class OrderController extends AdminController{

        public function order_list(){
            $re=R("Goods/pager",array('Order','7'));
            $this->assign('order_info',$re['info']);
            $this->assign('pagelist',$re['pagelist']);
            $this->display();
        }

        /**
         * 添加订单
         */
        public function order_add(){
            $order=D('order');
            if(!empty($_POST)){
                /*分离处理收货人信息*/
                $consignee_arr=explode(",",$_POST['order_consignee']);
                $_POST['order_consignee_id']=$consignee_arr[0];
                $_POST['order_consignee_info']=$consignee_arr[1];
                unset($_POST['order_consignee']);

                /*分离处理用户信息*/
                $user_arr=explode(",",$_POST['order_user']);
                $_POST['order_user_id']=$user_arr[0];
                $_POST['order_user_name']=$user_arr[1];
                unset($_POST['order_user']);

                /*处理商品信息*/
                $goods_arr=explode(",",$_POST['order_goods']);
                $_POST['order_goods_id']=$goods_arr[0];
                $_POST['order_goods_name']=$goods_arr[1];
                unset($_POST['order_goods']);

                $_POST['order_sn']=md5(time());
                $_POST['order_create_time']=time();
                $order->create();
                $re=$order->add();
                $this->if_re($re,array('添加订单成功','order_list'),array('添加订单失败','order_add'));
            }else{
                $user_list_fn=D("User")->user_list_fn();
                $goods_list_fn=D("Goods")->goods_list_fn();
                $user_list=array();//存放用户ID姓名
                $goods_list=array();//存放商品ID名字
                foreach($user_list_fn as $v){
                    $user_list[$v['user_id'].",".$v['username']]=$v['username'];
                }
                foreach($goods_list_fn as $v){
                    $goods_list[$v['goods_id'].",".$v['goods_name']]=$v['goods_name'];
                }
                $this->assign('user_list',$user_list);
                $this->assign('goods_list',$goods_list);
                $this->display();
            }
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
         * 修改指定订单的信息
         * @param $order_id
         */
        public function order_update($order_id){
            $order=D('order');
            if(!empty($_POST)){
                $order->create();
                $re=$order->save();
                $this->if_re($re,array('修改订单成功','order_list'),array('修改订单失败','order_list'));
            }else{
                $re=$order->order_info($order_id);
                $this->assign('order_info',$re);
                $this->display();
            }
        }

        /**
         * 删除订单，修改订单状态为取消
         */
        public function order_delete(){
            $data['order_status']="取消";
            $re=M('Order')->where("order_id={$_GET['order_id']}")->data($data)->save();
            $this->if_re($re,array('删除订单成功','order_list'),array('删除订单失败','order_list'));
        }

        /**
         * 打印订单
         */
        public function order_print(){

        }
    }