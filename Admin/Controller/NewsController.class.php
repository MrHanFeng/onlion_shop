<?php

namespace Admin\Controller;
use Component\AdminController;

class NewsController extends AdminController{
    function news_list(){
        $re=R("Goods/pager",array('News','10'));
        $this->assign('news_info',$re['info']);
        $this->assign('pagelist',$re['pagelist']);
        $this->display();
    }

    function news_add(){
        $news=D('News');
        if(!empty($_POST)){
            $_POST['news_manager_id']=$_SESSION['mg_id'];
            $_POST['news_manager_name']=$_SESSION['mg_username'];
            $_POST['news_date']=time();
//            show($_POST);exit;
            $news->create();
            $re=$news->add();
            $this->if_re($re,array('添加新闻成功','news_list'),array('添加新闻失败','news_list'));
        }else{
            $this->display();
        }

    }

    function news_update(){
        $news=D('News');
        if(!empty($_POST)){
            $_POST['news_id']=$_GET['news_id'];
            $news->create();
            $re=$news->save();
            $this->if_re($re,array('修改新闻成功','news_list'),array('修改新闻失败','news_list'));
        }else{
            $news_info=$news->find($_GET['news_id']);
            $this->assign("news_info",$news_info);
            $this->display();
        }
    }

    function news_delete(){
        $re=M('News')->where("news_id={$_GET['news_id']}")->delete();
        $this->if_re($re,array('删除新闻成功','news_list'),array('删除新闻失败','news_list'));
    }

}
