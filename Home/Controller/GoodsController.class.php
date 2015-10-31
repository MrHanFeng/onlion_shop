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
            $goods = D('goods')->find($goods_id);
            $brand = D('brand')->find($goods['goods_brand_id']);//查询该商品的品牌
            $this->assign('goods_info',$goods);
            $this->assign('brand_info',$brand);
            $this -> display();
        }


        //        购物车页面
        function gwc1(){
            $order=D('Goods');
            $goods_info=$order->goods_info($_POST['goods_id']);
            if($goods_info){
               $this->assign('goods_info',$goods_info);
            }else{
                echo "查询错误";
            }
            $this->assign('number',$_POST['number']);
            $this->display();
        }
        //       下订单页面
        function gwc2(){
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
//            show($data);

            $data['order_sn']=date('YmdHis',time())+rand(100,999);//生成订单号
            $data['order_create_time']=time();//订单生成日期
            $order->create($data);
            $re=$order->add();
            $this->last_insert_id=$re;
            $this->if_re($re,array('添加订单成功','gwc3'),array('添加订单失败',''));
        }

        //        成功页面
        function gwc3(){
            $info=D('Admin/Order');
           $data=$info->order_info($this->last_insert_id);
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

