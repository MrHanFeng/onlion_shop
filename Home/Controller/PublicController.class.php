<?php
	// 本类由系统自动生成，仅供测试用途
	namespace Home\Controller;
	use Component\HomeController;

	class PublicController extends HomeController {
		function head(){
			echo 112112;
		}

		function foot(){
			$info = M('Ad')->getByAd_position('主页底部广告');
//			show($info);
			$this->assign('ad_bottom',$info['ad_big_img']);
		}

	}	    