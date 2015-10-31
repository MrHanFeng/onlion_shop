<?php
namespace Component;
/*!
* QQAUTH for wordpress
* 申请地址：http://connect.qq.com
* V1.1
* by 云淡然 http://qianduanblog.com
* 2013年5月7日15:18:10
* 2013年5月11日22:07:18
*/
class QQAUTH
{
	// appid
	public $appid=YDR_QQ_APPID;
	// appkey
	public $appkey=YDR_QQ_APPKEY;
	// 回调地址
	public $callback=YDR_QQ_CALLBACK;
	// get请求额外参数
	public $get_args=array();
	// 额外
	public $scope="";
	// token
	public $token="";
	// openid
	public $openid="";

	// 生成授权URL
	public function auth_url()
	{
		if($this->appid=="" || $this->appkey=="")return get_bloginfo("url");
		// 生成唯一state，用于校验
		$state=md5(uniqid(rand(), true));
		// 存入session
		$_SESSION["state"]=$state;
		// 参数
		// 详情：http://wiki.open.qq.com/wiki/website/%E4%BD%BF%E7%94%A8Authorization_Code%E8%8E%B7%E5%8F%96Access_Token#2._.E8.BF.87.E7.A8.8B.E8.AF.A6.E8.A7.A3
		$param=array
		(
			"response_type"=> "code",
			"client_id"=>$this->appid,
			"redirect_uri"=>$this->callback,
			"state"=>$state,
			"scope"=>$this->scope,
		);
		$url="https://graph.qq.com/oauth2.0/authorize?".http_build_query($param);
		return $url;
	}

	// 授权过程
	// @code，用户点击授权传入的
	// @state，用户点击授权之前生成的
	// return json数据{data,info}
	// data=1，授权成功，返回token和openid
	// data=-1，获取token失败
	// data=-2，获取openid失败
	// 其他data，授权错误
	public function auth($code="",$state="")
	{
		// 删除验证的state
		unset($_SESSION["state"]);
		// 定义错误消息
		$error_msg="";
		// 定义状态值
		$data=0;
		$token="";
		$openid="";
		$get_args=$this->get_args;

		// step1:通过Code获取Access Token
		$step1=false;
		$param = array
		(
			"grant_type"=> "authorization_code",
			"client_id"=>$this->appid,
			"client_secret"=>$this->appkey,
			"code"=>$code,
			"state"=>$state,
			"redirect_uri"=>$this->callback,
		);
		$url="https://graph.qq.com/oauth2.0/token?".http_build_query($param);

		$response=wp_remote_get($url,$get_args);
		// 正确返回=>access_token=CE28D2857EDF8C593642A3B3EB29C374&expires_in=7776000
		if(!is_wp_error($response))
		{
			parse_str($response["body"],$body);
			if(isset($body["access_token"]))
			{
				// 获得token：
				// 获取到的access token具有3个月有效期
				// 用户再次登录时自动刷新。
				$token=$body["access_token"];
				// $_SESSION["access_token"]=$token;
				// 有效期
				$expires_in=$body["expires_in"];
				// 第一步ok
				$step1=true;
			}
			else
			{
				$error_msg='授权错误1：'.$body["error_description"];
				$data=$body["error"];
			}
		}
		else
		{
			$error_msg='网络错误1：'.$response->get_error_message();
			$data=-1;
		}

		// step2:使用Access Token来获取用户的OpenID
		$step2=false;
		if($step1)
		{
			$url="https://graph.qq.com/oauth2.0/me?access_token=".urlencode($token);
			$response=wp_remote_get($url,$get_args);
			if(!is_wp_error($response))
			{
				$body=$response["body"];
				// 错误返回=>callback( {"error":100007,"error_description":"param access token is wrong or lost "} );
				// 正确返回=>callback( {"client_id":"100260435","openid":"7933F57337EF46CBE699AD9DD50E549E"} );
				// 解析成json数据，这里带callback的原因是便于前端跨域请求
				$lpos=strpos($body,"(");
				$rpos=strrpos($body,")");
				$body=substr($body,$lpos+1,$rpos-$lpos-1);
				$json=json_decode($body);
				if($json->openid)
				{
					// 获得openid
					$openid=$json->openid;
					// $_SESSION["openid"]=$openid;
					$step2=true;
					$data=1;
				}
				else
				{
					$error_msg='授权错误2：'.$json->error_description;
					$data=$json->error;
				}
			}
			else
			{
				$error_msg='网络错误2：'.$response->get_error_message();
				$data=-2;
			}
		}

		$json=array();
		$json["data"]=$data;
		$json["info"]=$error_msg==""?
			array
			(
				"token"=>$token,
				"openid"=>$openid,
			):
			$error_msg;
		return json_encode($json);
	}

	// 获得QQ空间资料
	// http://wiki.open.qq.com/wiki/website/get_user_info
	public function get_user_info()
	{
		return $this->api("https://graph.qq.com/user/get_user_info");
	}

	// 获得QQ微博资料
	// http://wiki.open.qq.com/wiki/website/get_info
	public function get_info()
	{
		return $this->api("https://graph.qq.com/user/get_info");
	}

	// 发布QQ微博
	// http://wiki.open.qq.com/wiki/website/add_t
	public function add_t($content="",$user_ip="")
	{
		$url="https://graph.qq.com/t/add_t";
		$array=array
		(
			// 微博内容
			"content"=>$content,
			"clientip"=>$user_ip,
		);
		return $this->api($url,$array,"post");
	}

	// 收听某人
	// http://wiki.open.qq.com/wiki/website/add_idol
	public function add_idol($names="",$fopenids="")
	{
		$url="https://graph.qq.com/relation/add_idol";
		$array=array
		(
			// 收听的人的用户名
			"name"=>$names,
			// 收听的人的openid
			"fopenids"=>$fopenids,
		);
		return $this->api($url,$array,"post");
	}

	// 分享到QQ空间
	// http://wiki.opensns.qq.com/wiki/%E3%80%90QQ%E7%99%BB%E5%BD%95%E3%80%91add_share
	// @title:分享标题【*】
	// @url:跳转url【*】
	// @site:来源网站名称【*】
	// @fromurl:来源url【*】
	// @summary:摘要
	// @comment:分享评论
	// @images:图片src，多个¦分开
	// @nswb:同步到微博，1=不，0=要
	// @type:分享类型，4=文本，5=视频
	// @playurl:视频swf播放地址
	public function add_share($share_string_or_array)
	{
		if(is_array($share_string_or_array))$array=$share_string_or_array;
		else if(is_string($share_string_or_array))
		{
			$array=array();
			$array["title"]=$share_string_or_array;
		}
		else return false;
		extract(stripslashes_deep($array), EXTR_SKIP);
		if(!isset($array["title"]))$array["title"]="分享到QQ空间";
		if(!isset($array["url"]))$array["url"]=get_bloginfo("url");
		if(!isset($array["site"]))$array["site"]=get_bloginfo("name");
		if(!isset($array["fromurl"]))$array["fromurl"]=get_bloginfo("url");
		if(!isset($array["summary"]))$array["summary"]=$array["title"];
		if(!isset($array["comment"]))$array["comment"]=$array["title"];
		if(!isset($array["images"]))$array["images"]="";
		if(!isset($array["nswb"]))$array["nswb"]="0";
		if(!isset($array["type"]))$array["type"]="4";
		if(!isset($array["playurl"]))$array["playurl"]="";
		$bsurl="https://graph.qq.com/share/add_share";
		return $this->api($bsurl,$array,"post");
	}

	// 私有方法
	// @API的基本路径，不需要问号，默认：空
	// @其他参数，默认：空
	// @请求方法，默认：get
	// 返回消息json数据：data、info
	private function api($baseurl="",$params=array(),$request_type="get")
	{
		$return=array();
		// 所有API的通用参数
		// http://wiki.open.qq.com/wiki/website/OpenAPI%E8%B0%83%E7%94%A8%E8%AF%B4%E6%98%8E_OAuth2.0#2._.E8.B0.83.E7.94.A8OpenAPI.E6.8E.A5.E5.8F.A3
		$apiparams=array
		(
			"access_token"=>$this->token,
			"oauth_consumer_key"=>$this->appid,
			"openid"=>$this->openid,
		);
		$query=$apiparams+$params;
		$post_query=array
		(
			"body"=>$query,
		);

		$get_url=$baseurl."?".http_build_query($query);

		$response=$request_type=="get"?
			wp_remote_get($get_url):
			wp_remote_post($baseurl,$post_query);

		if(!is_wp_error($response))
		{
			$body=$response["body"];
			$json=json_decode($body);
			if($json->ret===0)
			{
				$data=1;
				$info=$json;
			}
			else
			{
				$data=0-abs($json->errcode);
				$info='API错误：'.$json->msg;
			}
		}
		else
		{
			$data=0;
			$info='网络错误：'.$response->get_error_message();
		}
		$return["data"]=$data;
		$return["info"]=$info;
		return json_encode($return);
	}
};