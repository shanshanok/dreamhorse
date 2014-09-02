<?php
class UserMAction extends Action{
	public function index(){
             $essays = M('post')->Distinct(true)->field('industry')->select();
	   $this->assign('essays',$essays);
       $essays1 = M('post')->Distinct(true)->field('postname')->select();
	   $this->assign('essays1',$essays1);
            $essays2 = M('User')->where(array('checked'=>'false'))->select(); 
            $this->assign('essays2',$essays2);
            $this->display();  	   	
	   
	}

	public function selectusers(){
      // $essays = M('Production')->where(array('type'=>$_POST['selecttext'],'checked'=>false) )->select();
	  // $this->assign('essays1',$essays);
      // $essays1 = M('Production')->where('checked=false')->Distinct(true)->field('type')->select();
	  /// $this->assign('essays',$essays1);
	  // $this->display('index');
	  $essays1 = M('post')->where(array('industry'=>$_POST['selecttext'],'checked'=>'false') )->Distinct(true)->field('postname')->select();
       $this->assign('essays1',$essays1);
      // echo $essays1;
      $this->display('index');
	  
	         
	  // $essays = M('post')->where('checked=false')->Distinct(true)->field('industry')->select();
	 // $this->assign('essays',$essays);     

	}
public function displayusers(){
      // $essays = M('Production')->where(array('type'=>$_POST['selecttext'],'checked'=>false) )->select();
	  // $this->assign('essays1',$essays);
      // $essays1 = M('Production')->where('checked=false')->Distinct(true)->field('type')->select();
	  /// $this->assign('essays',$essays1);
	  // $this->display('index');
	 // $essays1 = M('post')->where(array('industry'=>$_POST['selecttext'],'checked'=>false) )->Distinct(true)->field('postname')->select();
      // $this->assign('essays1',$essays1);
      // 
      
	   $essays2 = M('User')->where(array('industry'=>$_POST['selecttext'],'checked'=>'false') )->select();
	   $this->assign('essays2',$essays2);
	   $this->display('public/displayuser');
	  // $essays = M('post')->where('checked=false')->Distinct(true)->field('industry')->select();
	 // $this->assign('essays',$essays);     

	}
	public function displaydouble(){
     $essays3 = M('User')->where(array('industry'=>$_POST['selecttext'],'postname'=>$_POST['selecttext1'],'checked'=>'false') )->select();
	   $this->assign('essays2',$essays3);
	   $this->display('public/displayuser');
	}
	public function search(){
		//$text=$_POST['searchtext'];
		$data['username']=array('like',array('%'.$_POST['searchtext'].'%'));
         // $this->success('%'.$_POST['searchtext'].'%');
		 //$essays3 = M('Production')->where(array('title'=>$_POST['searchtext']))->select();
		  $essays3 = M('User')->where($data)->select();
		// $this->success($essays3);
      // $data['title']=array('like','%'+$_POST['searchtext']+'%');
      //  $essays3 = M('Production')->where($data)->select();
	 // $essays3 = mysql_query("SELECT * FROM production WHERE title like '$text'");
	 if($essays3==""){
	 	$this->error( '数据集为空');
	 }
	    $this->assign('essays2',$essays3);
	    $this->display('public/displayuser');
	}
	public function UserDelete(){
		
		$delete = M('User')->where(array('userno'=>$_GET['id']))->delete();
		$delete2 = M('Production')->where(array('author'=>$_GET['username']))->delete();

		if($delete){
			$this->success('用户 "'.$_GET['username'].'" 删除成功！', '__APP__/UserM?member='.$_SESSION['username']);
		}
		else{
			$this->error('文章 "'.$_POST['username'].'" 删除失败！', '__APP__/UserM?id='.$_GET['id']);
		}
	}
	
}