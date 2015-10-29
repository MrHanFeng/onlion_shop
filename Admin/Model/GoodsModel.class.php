<?php
namespace Admin\Model;
use Think\Model;

class GoodsModel extends Model{


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
     * 查询商品所有信息
     * @return
     *      成功：返回所有商品的二维数组
     *      失败：false
     */
    function goods_list_fn(){
        $goods=M('Goods');
        $re=$goods->select();
        if($re){
            return $re;
        }else{
            return false;
        }
    }



}