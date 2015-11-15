<?php

    //商品控制器
    namespace Home\Controller;
    use Component\HomeController;

    class GoodsController extends HomeController{
        //商品列表
        private  $last_insert_id=1;

        function showlist(){
            //获得User控制器的number方法返回的信息
            //当前UserController会通过自动加载机制引入
            //ThinkPHP/Library/Think/Think.class.php  
            // function autoload();
            // $user = new UserController();
            
            //通过快捷函数实例化控制器对象
            //new一个控制器对象给我们返回
            //A([项目://][模块/]控制器标志);
            // $user = A("User"); 
            // echo $user -> number();
            // $goods = A("Admin/Goods");
            // echo $goods -> getMoney();
            
            //跨项目、跨模块调用指定控制器
            //$index = A("book://Home/Index");
            //echo $index -> getName();
            
            //简便操作
            //R("[项目://][模块/]控制器/操作方法")
            //实例化对象之后再调用其对应的方法
            // echo R("User/number");   
            // echo R("Admin/Goods/getMoney");
            //echo R("book://Home/Index/getName");
            
            R('Index/sql');//实力换Index控制器下的INDEX方法，
           
            /*分页显示*/
            $goods = D('goods');
            //1.获得当前记录总条数
            $total = $goods -> count();
            $per = 12;   //每页条数
            //2.实例化分页对象
            $page = new \Component\Page($total,$per);//实例化分页类
            // 3.写SQL语句
            $sql = "select * from sw_goods ";
            $sql .= " ".$page->limit;
            $goods_hot = $goods ->query($sql);
            // 4.获得页码列表
            $pagelist = $page->fpage();
            // $this->assign('goods_hot',$goods_hot);
            $this->assign('pagelist',$pagelist);

            $this -> display();
        }

        //商品详细信息
        function detail($goods_id){
//            unset( $_SESSION['shop_car_num']);
//            unset( $_SESSION['goods_id']);
//            unset( $_SESSION['shop_car_price']);
            $goods = D('goods')->find($goods_id);
            $brand = D('brand')->find($goods['goods_brand_id']);//查询该商品的品牌
            $this->assign('goods_info',$goods);
            $this->assign('brand_info',$brand);
            $this -> display();
        }

        //        购物车页面
        function gwc_show(){
            show($_POST);
            $order=D('Goods');
            if(!empty($_POST['goods_id'])){
                //如果是通过商品详情页面添加过来的
                $goods_price=$_POST['number']*$_POST['goods_price'];//当前商品的价钱
                if($_SESSION['goods_id']){
                    //如果该商品以前已经加入过，不计入
                    $goods_id=$_SESSION['goods_id'].",".$_SESSION['goods_id'];
                }else{
                    //若没有加入
                    $goods_id=$_POST['goods_id'];//存储所有商品的ID
                }
                echo $goods_id;
                $goods_num_all=$_SESSION['shop_car_num'] ? $_POST['number']+@$_SESSION['shop_car_num'] : $_POST['number'];//存储购物车内商品总数量
                $goods_price_all=$_SESSION['shop_car_price'] ? $goods_price+@$_SESSION['shop_car_price'] : $goods_price;//存储购物车内商品总价格
            }else{
                //如果点击查看购物车进入
                $goods_id = $_SESSION['goods_id'];
                $goods_num_all = $_SESSION['shop_car_num'];
                $goods_price_all = $_SESSION['goods_price_all'];
            }
             $goods_info=$order->select($goods_id);
            show($goods_info);

            if($goods_info){
                $_SESSION['shop_car_num']=$goods_num_all;//购物车内商品总数量
                $_SESSION['goods_id']= $goods_id;//商品ID存入SESSION
                $_SESSION['goods_price_all']= $goods_price_all;//总价钱存入SESSION
                $this->assign('goods_info',$goods_info);
            }else{
                echo "查询错误";
            }
            $this->assign('number',$goods_num_all);//把当前购物车总数量传输
            $this->assign('number',$goods_price_all);//把当前购物车总价传输
            $this->display();
        }

        //       下订单页面
        function gwc_confirm(){
            $order=D('Goods');
            $goods_info=$order->goods_info($_POST['goods_id']);
            if($goods_info){
                $this->assign('goods_info',$goods_info);
            }else{
                echo "查询出错误了";
            }
            $this->assign('number',$_POST['goods_num']);
            $this->display();
        }

        //      订单处理
        function do_order(){
            unset($_POST['x']);
            unset($_POST['y']);//提交的表单多出来的数据，待核实
//            show($_POST);echo "<hr>";
            $order=D('Order');
            while(list($k[],$v[])=each($_POST)){
//                show($k);show($v);echo "<hr>";最后一次会多出一个空，因为WHILE的判断，为空的时候，判断了，就赋值
            }
            $data= array_combine($k,$v);
            array_pop($data);
//            show($data);
//            array_unshift($arr,'te');
//            show($data);
//            array_push($arr,'te');
//            show($data);exit;
            $data['order_sn']=date('YmdHis',time())+rand(100,999);//生成订单号
            $data['order_create_time']=time();//订单生成日期
            $order->create($data);
            $re=$order->add();
            $this->set_order_session($re);
            $this->if_re($re,array('添加订单成功','gwc_success'),array('添加订单失败',''));
        }

        //        成功页面
        function gwc_success(){
            $info=D('Admin/Order');
            $order_sn=$this->get_order_session();
//            exit;
            $data=$info->order_info($order_sn);
            $this->assign('order_info',$data);
            $this->display();
        }


        /**
         * 遍历输出多为数组的值
         * @param $arr
         * @return bool
         */
        function echo_arr_value($arr){
            if(!is_array($arr)){
                echo $arr."<br>";
                return false;
            }
            foreach($arr as $k=>$v){
                $this->echo_arr_value($v);
            }
        }
    }

