<?php
	// 本类由系统自动生成，仅供测试用途
	namespace Home\Controller;
	use Component\HomeController;

	class IndexController extends HomeController {
	    public function index(){
			$re=$this->isMobile();
			if($re){
				$this->display('mobile_index');
			}else{
				$this->sql();
				$brand=D('Index');
				$re=$brand->brand_info();
//				$this->if_re($re,array('删除订单成功','order_list'),array('删除订单失败','order_list'));
				$this->assign('brand',$re);
				$this->display();
			}
	    }
/*		function  display(){
			$this->assign()
				parent::display(())
		}*/

		function mobile_index(){
			$this->display();
		}
		function mobile_chanpin(){
			$this->display();
		}
		function mobile_gouwuche(){
			$this->display();
		}
		function mobile_jiesuan(){
			$this->display();
		}
		function do_order(){
			$this->redirect('mobile_index');
		}
		function sql(){
	    	$goods = D('goods');

			// 按热度搜索全部商品
	    	$info = $goods->field('goods_id,goods_name,goods_price,goods_big_img,goods_small_img')->limit(0,6)->order('goods_sale_num desc')->select();
	    	// ss($info);
	    	$this->assign('goods_hot',$info);

	    	// 价格最贵排行
	    	$info = $goods->field('goods_id,goods_name,goods_price,goods_big_img,goods_small_img')->limit(0,3)->order('goods_price desc')->select();
	    	$this->assign('goods_price',$info);

	    	// 新品排行
	    	$info = $goods->field('goods_id,goods_name,goods_price,goods_big_img,goods_small_img')->limit(0,3)->order('goods_create_time desc')->select();
	    	$this->assign('goods_price_time',$info);

			//广告
			$info = M('Ad')->getByAd_position('主页顶部广告');
			$this->assign('ad_top',$info['ad_big_img']);

		/*	$info = M('Ad')->getByAd_position('主页底部广告');
//			show($info);
			$this->assign('ad_bottom',$info['ad_big_img']);*/


			//新闻公告
			$info= M('News')->select();
			$this->assign('news_info',$info);

			//导航分类遍历
			$cate = M('category');
			$cate_info=$cate->select();
			$this->assign('cate',$cate_info);

			//主体商品，左侧分类列表
			$cate_mobile=$goods->where('goods_category_id=1')->select();//查询手机信息
			$cate_computer=$goods->where('goods_category_id=2')->select();//查询手机信息
			$cate_other=$goods->where('goods_category_id =3')->select();//查询手机信息
			$this->assign('cate_mobile',$cate_mobile);
			$this->assign('cate_computer',$cate_computer);
			$this->assign('cate_other',$cate_other);
		}


//判断是否是电脑登录，还是手机登录return true手机登录
		function isMobile()
		{
			// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
			if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
			{
				return true;
			}
			// 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
			if (isset ($_SERVER['HTTP_VIA']))
			{
				// 找不到为flase,否则为true
				return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
			}
			// 脑残法，判断手机发送的客户端标志,兼容性有待提高
			if (isset ($_SERVER['HTTP_USER_AGENT']))
			{
				$clientkeywords = array ('nokia',
					'sony',
					'ericsson',
					'mot',
					'samsung',
					'htc',
					'sgh',
					'lg',
					'sharp',
					'sie-',
					'philips',
					'panasonic',
					'alcatel',
					'lenovo',
					'iphone',
					'ipod',
					'blackberry',
					'meizu',
					'android',
					'netfront',
					'symbian',
					'ucweb',
					'windowsce',
					'palm',
					'operamini',
					'operamobi',
					'openwave',
					'nexusone',
					'cldc',
					'midp',
					'wap',
					'mobile'
				);
				// 从HTTP_USER_AGENT中查找手机浏览器的关键字
				if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
				{
					return true;
				}
			}
			// 协议法，因为有可能不准确，放到最后判断
			if (isset ($_SERVER['HTTP_ACCEPT']))
			{
				// 如果只支持wml并且不支持html那一定是移动设备
				// 如果支持wml和html但是wml在html之前则是移动设备
				if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
				{
					return true;
				}
			}
			return false;
		}



	}	    