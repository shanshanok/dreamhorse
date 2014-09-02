<?php
class PositionDisplayAction extends Action{
	public function index(){
       /*
	   import('ORG.Util.Page');// 导入分页类
	   $count = $->count();// 查询满足要求的总记录数
	   $Page = new Page($count, 10);// 实例化分页类 传入总记录数
			
	   $Page->setConfig('header', '篇文章');//共有多少条数据
	   $Page->setConfig('prev', "<");//上一页
	   $Page->setConfig('next', '>');//下一页
	   $Page->setConfig('first', '<<');//第一页
	   $Page->setConfig('last', '>>');//最后一页
	   $show = $Page->show();                        //分页的导航条的输出变量
			
			
			// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			$nowPage = isset($_GET['page'])?$_GET['page']:1;
	   */
	   $editno = $_GET['editno'];
           if($_GET['formalno']){
               $formalno = $_GET['formalno'];
           } else {
               $formalno = '';
           }
           
           $edit = M('post')->where(array('editno'=>$editno))->find();
          if($editno === $formalno){
               $formal = $edit;
           } else{
               $formal = M('post')->where(array('editno'=>$formalno))->find();
           }
           
           $this->assign('formal',$formal);
           
           $this->assign('edit',$edit);
           $this->display();
            
	}

	
        
         

}

