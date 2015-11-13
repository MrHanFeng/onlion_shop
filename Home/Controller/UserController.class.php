<?php

    namespace Home\Controller;
    use Component\HomeController;

    //Controller父类：ThinkPHP/Library/Think/Controller.class.php

    class UserController extends HomeController{
        //用户登录
        function login(){
            if(!empty($_POST)){
                $verify = new \Think\Verify();//实例化验证码类
                if(!$verify -> check($_POST['captcha'])){
                    $re="<font color=red>验证码错误</font>";
                    $this->assign('re',$re);
                }else{
                    // ss($_POST);
                    $re =  $this ->checkNamePwd('user',$_POST['user_email'],$_POST['password']);
                    if( $re['result'] === false){
                            $arr="<font color=red>{$re['tips']}</font>";
                            $this->assign('re',$arr);
                    }else{
                        //登录成功，录入SESSION
                        session('user_email',$_POST['user_email']);
                        session('user_username',$re['message']['username']);
                        session('user_id',$re['message']['user_id']);
                        $time = D('user');
                        $time->user_id = $re['user_id'];
                        $time->last_time = time();
                        $time->save();
                        // $this->redirect($url,$params,$delay,$msg)
                        $this->redirect('Index/index');
                    }
                }
            }

            $this -> display();
        }


        // 检查登录时的密码验证
        function checkNamePwd($table,$User_email,$pwd){
            $arr = array();
            $info = D($table)->getByUser_email($User_email);//getByXXX是__call封装好的方法，返回一个一维数组
            //如果能查询出来信息，说明有此用户，再比较密码
//            show($info);
            // $md6 = new \Component\AdminController;
            if($info != null){      
                if($info['password'] != $this->md6($pwd)){
                    $arr['result']=false;
                    $arr['tips']="账户或者密码错误";
                }elseif($info['identify'] != 1){
                    $arr['result']=false;
                    $arr['tips']="账户未激活";
                }else{
                    $arr['result']=true;
                    $arr['message']= $info;
                }
            }else{
                $arr['result']=false;
                $arr['tips']="用户不存在";;
            }
            return $arr;
        }


        // 用户退出
        function logout(){
            session('user_email',null);
            session('user_username',null);
            session('user_id',null);
            $this -> redirect('index/index');
        }

        /**
         * QQ登录
         */
        function qq_login(){
            //应用的APPID
            $app_id = "101265030";
            //应用的APPKEY
            $app_secret = "7d5e215c1651f14dd0024845899a553e";
            //【成功授权】后的回调地址，即此地址在腾讯的信息中有储存
            $my_url = "http://www.letsman.com/buy_tp/shop/index.php/Home/User/qq_login";

            //Step1：获取Authorization Code
            session_start();
            $code = $_REQUEST["code"];//存放Authorization Code
            if(empty($code))
            {
                //state参数用于防止CSRF攻击，成功授权后回调时会原样带回
                $_SESSION['state'] = md5(uniqid(rand(), TRUE));
                //拼接URL
                $dialog_url = "https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id="
                    . $app_id . "&redirect_uri=" . urlencode($my_url) . "&state="
                    . $_SESSION['state'];
                echo("<script> top.location.href='" . $dialog_url . "'</script>");
            }

            //Step2：通过Authorization Code获取Access Token
            if($_REQUEST['state'] == $_SESSION['state'] || 1)
            {
                //拼接URL
                $token_url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&"
                    . "client_id=" . $app_id . "&redirect_uri=" . urlencode($my_url)
                    . "&client_secret=" . $app_secret . "&code=" . $code;
                $response = file_get_contents($token_url);
                if (strpos($response, "callback") !== false)//如果登录用户临时改变主意取消了，返回true!==false,否则执行step3
                {
                    $lpos = strpos($response, "(");
                    $rpos = strrpos($response, ")");
                    $response  = substr($response, $lpos + 1, $rpos - $lpos -1);
                    $msg = json_decode($response);
                    if (isset($msg->error))
                    {
                        echo "<h3>error:</h3>" . $msg->error;
                        echo "<h3>msg  :</h3>" . $msg->error_description;
                        exit;
                    }
                }

                //Step3：使用Access Token来获取用户的OpenID
                $params = array();
                parse_str($response, $params);//把传回来的数据参数变量化
                $graph_url = "https://graph.qq.com/oauth2.0/me?access_token=".$params['access_token'];
                $str  = file_get_contents($graph_url);
                if (strpos($str, "callback") !== false)
                {
                    $lpos = strpos($str, "(");
                    $rpos = strrpos($str, ")");
                    $str  = substr($str, $lpos + 1, $rpos - $lpos -1);
                }
                $user = json_decode($str);//存放返回的数据 client_id  ，openid
                if (isset($user->error))
                {
                    echo "<h3>error:</h3>" . $user->error;
                    echo "<h3>msg  :</h3>" . $user->error_description;
                    exit;
                }

                //Step4：使用Access Token来获取用户的信息
                $user_data_url = "https://graph.qq.com/user/get_user_info?access_token={$params['access_token']}&oauth_consumer_key={$app_id}&openid={$user->openid}&format=json";
                $user_data = file_get_contents($user_data_url);//此为获取到的user信息
                $user_model=D('User')->qq_user($user->openid);
//                show($user_model);exit;
                if($user_model){
                    //已经登陆过，进行SESSION操作
//                    $_SESSION['user_email']=$user_model[0]['user_email'];
                    $_SESSION['user_username']=$user_model[0]['username'];
                    $_SESSION['user_id']=$user_model[0]['user_id'];
//                    show($_SESSION);exit;
                    $this->redirect('Index/index');//进入首页
                    exit;
                }else{
                    //如果该用户原来没有QQ快速登陆过，进行录入信息
                    $re=$this->qq_login_reg(json_decode($user_data),$user->openid);
                    if($re){
                        $_SESSION['user_id']=$re['user_id'];
                        $_SESSION['user_username']=$re['username'];
                        $this->redirect('Ucenter/ucenter0');//进入个人中心完善信息
                        exit;
                    }
                    $this->error('快速登录失败，信息有误',U("login"));
                }

            }
            else
            {
                echo("The state does not match. You may be a victim of CSRF.");
            }
        }
/*--------------------------------------------------------------------------------------------------------------------*/
        /**
         * QQ快速登录的注册,插入数据
         * @param $data ，登录的QQ用户所有信息
         * @param $open_id ,对应唯一的qq的OPENID
         * @return bool,成功返回true 失败false
         */
        function qq_login_reg($u_data,$open_id){
            $data['user_qq_openid']=$open_id;
            $data['username']=$u_data->nickname;//昵称
            $data['user_sex']=$u_data->gender;//性别
            $data['identify']=1;
            $data['user_create_time']=time();
            $data['user_last_time']=time();
            $user=D('User');
            $user->create($data);
            $re=$user->add();
            if($re){
                $arr['user_id']=$re;
                $arr['username']=$user->getFieldByUser_id($re,"username");
                return $arr;
            }
            return false;
        }


         //发送邮件，用户注册
            function register(){
                /**
                *思路：     1.用户提交邮箱
                *           2.如果该邮箱未激活$identify = 0，则重新发送邮件注册
                *           3.如果该邮箱已经激活，则提示用户，邮箱邮件被注册，请登陆或找回密码
                */
                $user = new \Model\UserModel();
                $num = rand(100000,999999);
                $code = md5($num);
                //判断表单是否提交
                if(!empty($_POST)){

                    /*判断是否注册过*/
                    $user_id1 = $user->getFieldByUser_email("$_POST[user_email]",'user_id');
                    $identify = $user->getFieldByUser_email("$_POST[user_email]",'identify');
                    // show_bug($identify);
                    if($user_id1){// 如果能查询出user_id,说明此email注册过,
                        if(!$identify) {//如果此identify为1，说明记激活过，进入登录；若为0，未激活但有号，删除信息注册
                             //删除原来注册过的信息
                             $user->where("user_id=$user_id1")->delete();                     
                        }else{
                            $this->error('邮箱邮件被注册，请登陆或找回密码');
                            exit;
                        }
                    }

                    $z=$user->create();  //集成表单验证,只有全部验证通过$z才会为真
                    if(!$z){
                        //验证失败，输出错误信息
                        //getError() 方法返回验证失败的信息
                        show($user->getError());
                        $user->getError();
                        $this ->assign('error',$user->getError());
                    }else{
                        if(!empty($_POST['user_hobby'])){//如果有爱好这一栏
                            $user ->user_hobby = implode(',', $_POST['user_hobby']);   //AR方式处理，Create只是暂时存到内存，所以这里可以修改
                        }
                        $user ->code = $code;
                        $user ->password =$this->md6($_POST['password']);  //MD6加密密码
                        $user ->user_time =time();  //存储注册时间
                        $rst = $user->add();

                        /*add()添加成功,发送邮件*/
                        if($rst){
                            $this->email_jihuo($_POST['user_email'],$code);
                        }else{//add()失败
                            // echo "error";
                            $this->error('注册失败',U('register'));
                        }
                    }
                }
                $this->display();
            }

        function ucenter_register(){
//            show($_SESSION);
            $num = rand(100000,999999);
            $code = md5($num);
            $user=M('User');
            $data['code']=$code;
            $user->where("user_id={$_SESSION['user_id']}")->save($data);//把CODE存入数据库
            $this->email_jihuo($_SESSION['user_email'],$code,"Ucenter/ucenter1");
        }

        /**
         * 发送激活邮件
         * @param $user_email ，需要发送的邮件地址
         * @param $code ，防伪编码
         * @param $to,默认跳转到登录页面
         *  成功跳转到指定页面
         *  失败跳到注册界面
         */
            private function email_jihuo($user_email,$code,$to="login"){
                $message=<<<str
                        你好！$user_email
                        <h2>欢迎注册MR.峰网站</h2>
                        请点击如下地址激活帐号:<br/><br/>
                        <a href="http://localhost/buy_tp/shop/index.php/Home/User/register_finish/user_email/$user_email/code/$code">
                        http://localhost/buy_tp/shop/index.php/Home/User/register_finish/user_email/$user_email/code/$code</a>
                        <br/><br/>
str;
                /*发送邮件*/
                if(SendMail("$user_email",'欢迎注册峰峰购物网站',"$message")){
                    $this->success('发送成功，请激活后登录',U($to));
                }else{
                    $this->error('发送失败',U("register"));
                }
            }


            function register_finish($user_email,$code){

                $sql = "update sw_user set identify='1' where user_email='{$user_email}' and code='{$code}' ";//code,email缺一不可，防止盗链改激活
                $info = D('User')->execute($sql);
                if($info){
                    $this->success('帐号激活成功，请您登录',U('User/login'));
                }else{
                    $this->error('帐号激活失败',U('User/login'));
                }
                // $this->display();
            }


/*以下函数皆为【找回密码】的相关函数*/
            //填写找回邮箱页面
            function email(){

                $this->display();
            }
            //填完邮件后 1判断邮箱是否存在 2若存在发送找回密码邮件
            function sendemail(){
                $user = new \Model\UserModel();
                $num = rand(100000,999999);
                $code = md5($num);
                //判断表单师范提交
                if(!empty($_POST)){
                    // show_bug($_POST[user_email]);
                    $user_id = $user->getFieldByUser_email("$_POST[user_email]",'user_id');
                    if(!$user_id){
                        //验证失败，输出错误信息
                        //getError() 方法返回验证失败的信息
                        // show_bug($user->getError());
                        // $user->getError();
                        // $this ->assign('user',$user->getError());
                        $this->error('邮箱无效',U('login'));
                    }else{
                        $user ->code= $code;
                        $rst = $user->where("user_id=$user_id")->save();
                        if($rst){
                        $message=<<<str
                            你好！$_POST[user_email]
                                <h2>欢迎使用MR.峰的网站</h2>
                                点击如下地址找回帐号密码:<br/><br/>
                                <a href="http://localhost/buy_tp/shop/index.php/Home/User/password/user_email=$_POST[user_email])&code=$code">
                                http://localhost/buy_tp/shop/index.php/Home/User/password/user_email=$_POST[user_email]&code=$code</a>
                                <br/><br/>
str;

                            if(SendMail("$_POST[user_email]",'点此找回密码',"$message"))
                            {
                                $this->success("一封确认邮件已经发送到你的邮箱$_POST[user_email]<br/>请登陆邮箱进行激活！",U('login'));
                            }
                            else
                            {
                                $this->error('发送失败，请重试');
                            }
                        }else{
                            $this->error('error，请重试');
                        }
                        }
                }else{
                    $this->error('请输入正确的邮箱',"login");
                }
                
            }

            // 通过发送的邮件链接连入，验证链接是否有效
            function password($user_email,$code){
                $user = new \Model\UserModel();
                $usercode = $user->getFieldByUser_email("$user_email",'code');
                if($code==$usercode){
                    $this ->assign('user_email',"$user_email");
                    $this ->assign('code',"$code");
                    $this->display();
                }else{
                    $this->error('链接无效',U('User/login'));
                }
            
            }
            //忘记密码的链接有效，修改新密码
            function modifypwd(){
                if(!empty($_POST)&&($_POST[password]==$_POST[password2]))
                {
                    $pwd = $this->md6($_POST[password]);
                    $sql = "update sw_user set password='{$pwd}' where user_email='{$_POST[user_email]}' and code='{$_POST[code]}' ";
                    $info = D('User')->execute($sql);
                    if($info)
                    {
                        $this->success('帐号密码修改成功，请您登录',U('User/login'));
                    }else{
                        $this->error('帐号密码修改失败',U('User/login'));
                    }
                }else{
                        $this->error('两次密码无效',U('User/password'));
                    }
            }
/*--------------------------------------------------------------------------------------------------------------------*/



        // 生成验证码图片
        function verifyImg(){
            $config = array(
                    'imageH' =>30,      //验证码高度
                    'imageW' =>100,     //验证码宽度
                    'fontSize' => 14,   //验证码字体大小
                    'fontttf'=>'4.ttf', //验证码字体风格
                    'length' => 1,      //验证码位数
                );
            $verify = new \Think\Verify($config);//实例化验证码类
            $verify -> entry();//生成验证码
        }

    }

