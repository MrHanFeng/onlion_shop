<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{


    // 是否批处理验证
    protected $patchValidate    =   true;


    // 实现表单项目验证
    // 通过重写父类属性_validate实现表单验证
    protected $_validate     =   array(
//        array('username','require','用户名必须填写'),
//        array('password','require','密码必须填写'),
//        array('password2','require','确认密码密码必须填写'),
//        array('password2','password','两次密码输入不相同','0','confirm'),	//比较应用
//        array('user_email','email','请输入正确的Email'),
        // array('user_qq','/^[1-9]\d{4,9}$/','请输入5-10位的QQ数字号码'),		//正则应用
        // array('user_tel','/^[1-9]\d{5,10}$/','请输入11手机号码'),
        // array('user_xuli','2,3,4','请选择一个学历',0,'in'),					//选择范围内
        // array('user_hobby','check_hobby',"爱好必须两项以上",1,'callback'),	//调用函数验证
    );

    /**
     * 返回品牌的所有信息
     * @return
     *       成功返回品牌的所有信息
     *       失败返回false
     */
//    public function brand_info(){
//        $re=M('Brand')->select();
//        if($re){
//            return $re;
//        }else{
//            return false;
//        }
//    }

    /**
     * 查询该QQ用户原来是否在本站授权
     * @param $id
     * @return bool
     *  成功，返回该用户数据
     *  失败返回FALSE
     */
    function qq_user($id){
        $where['user_qq_openid']=$id;
        $user=M('User');
        $re=$user->where($where)->select();
        if($re){
            return $re;
        }
        return false;

    }
    function test(){
        echo 111;
    }

}