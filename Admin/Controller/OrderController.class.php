<?php

    namespace admin\Controller;
    use Component\AdminController;

    class OrderController extends AdminController{

        public function order_list(){
            $re=R("Goods/pager",array('order','7'));
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
                $_POST['order_send_time']=$_POST['order_status']=="已发货"?time():"";
//                show($_POST);exit;

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
            $order=D('Order');
            $order_list=$order->order_info();//查询出要打印的数据

            /*对查寻出来的数据进行摘选，处理*/
            foreach($order_list as $k=>$v){
                $data[$k][]=$v['order_sn'];
                $data[$k][]=$v['order_user_id'];
                $data[$k][]=$v['order_user_name'];
                $data[$k][]=$v['order_goods_name'];
                $data[$k][]=date('Y-m-d H:i:s',$v['order_create_time']);
                $data[$k][]=$v['order_consignee_info'];
                $data[$k][]=$v['order_status'];
                $data[$k][]=$v['order_ship_name'];
                $data[$k][]=$v['order_pay_name'];
                $data[$k][]=$v['order_remarks'];
            }
            /*编辑EXCEL表里的每列开头*/
            $headArr=array(
                '订单编号',
                '用户ID',
                '用户姓名',
                '商品名称',
                '订单生成时间',
                '收货人信息',
                '此订单状态',
                '邮送方式',
                '支付方式',
                '备注'
            );
            $filename="order_list";//生成的EXCEL的文件名字
            $this->getExcel($filename,$headArr,$data);
        }


        /**
         * 生成EXCEL文件
         * @param $fileName,文件名称
         * @param $headArr,EXCEL文件里的第一行，每列列名
         * @param $data，打印的数据
         * @throws \PHPExcel_Exception
         * @throws \PHPExcel_Reader_Exception
         */
        private  function getExcel($fileName,$headArr,$data){
            //导入PHPExcel类库，因为PHPExcel没有用命名空间，只能inport导入
            import("Org.Util.PHPExcel");
            import("Org.Util.PHPExcel.Writer.Excel5");
            import("Org.Util.PHPExcel.IOFactory.php");

            $date = date("Y_m_d",time());
            $fileName .= "_{$date}.xls";

            //创建PHPExcel对象，注意，不能少了\
            $objPHPExcel = new \PHPExcel();
            $objProps = $objPHPExcel->getProperties();

            //设置表头
            $key = ord("A");
            //print_r($headArr);exit;
            foreach($headArr as $v){
                $colum = chr($key);
                $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
                $objPHPExcel->setActiveSheetIndex(0) ->setCellValue($colum.'1', $v);
                $key += 1;
            }

            $column = 2;
            $objActSheet = $objPHPExcel->getActiveSheet();

            //print_r($data);exit;
            foreach($data as $key => $rows){ //行写入
                $span = ord("A");
                foreach($rows as $keyName=>$value){// 列写入
                    $j = chr($span);
                    $objActSheet->setCellValue($j.$column, $value);
                    $span++;
                }
                $column++;
            }

            $fileName = iconv("utf-8", "gb2312", $fileName);

            //重命名表
            //$objPHPExcel->getActiveSheet()->setTitle('test');
            //设置活动单指数到第一个表,所以Excel打开这是第一个表
            $objPHPExcel->setActiveSheetIndex(0);
            ob_end_clean();//清除缓冲区,避免乱码
            header('Content-Type: application/vnd.ms-excel');
            header("Content-Disposition: attachment;filename=\"$fileName\"");
            header('Cache-Control: max-age=0');

            $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output'); //文件通过浏览器下载
            exit;
        }

    }