Admin:后台
Home:前台
Model:M层文件存放
Public:前后台的公共文件存放
Common:公共文件，配置文件
Component:组建,文件夹，自己添加的类放里头
Runtime:临时文件
	cache:模版缓存文件，smarty——HTML混合缓存文件
	date:mysql字段
	temp:用户专门设置的缓存flie 


已有功能
	1.订单管理
	2.会员管理
		会员登陆
		邮件注册
	3.商品管理
		分类
		评论
		品牌
	4.广告管理
	5.权限管理



小遗留：
	1.Admin/Goods/pager 的where只能有一个条件，有限制，方法待完善提高
	2.Admin/Order/order_update的功能太少，待添加
	2.移动端页面
	3.Home/Goods/gwc2的$_POST[X,Y]来源不明
