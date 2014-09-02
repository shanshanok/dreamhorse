<?php
class EssayMAction extends Action{
	public function index(){
      // $essays = M('Production')->where('checked=false')->Distinct(true)->field('type')->select();
	   $essays = M('post')->Distinct(true)->field('industry')->select();
	   $this->assign('essays',$essays);
       $essays1 = M('post')->Distinct(true)->field('postname')->select();
	   $this->assign('essays1',$essays1);
	   if ($_GET['type']=='user') {
            $essays2 = M('User')->where(array('checked'=>'false'))->select(); 
             $this->assign('essays2',$essays2);
            // $dis=$_GET['essays2'];
           // $this->display('public/displayuser');  	   	
	   }
	   else
       {$essays2 = M('Production')->where(array('checked'=>'false','type'=>$_GET['type']))->select();
	   $this->assign('essays2',$essays2);}

	   $this->display();
	}

	public function selectEssays(){
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
public function displayEssays(){
      // $essays = M('Production')->where(array('type'=>$_POST['selecttext'],'checked'=>false) )->select();
	  // $this->assign('essays1',$essays);
      // $essays1 = M('Production')->where('checked=false')->Distinct(true)->field('type')->select();
	  /// $this->assign('essays',$essays1);
	  // $this->display('index');
	 // $essays1 = M('post')->where(array('industry'=>$_POST['selecttext'],'checked'=>false) )->Distinct(true)->field('postname')->select();
      // $this->assign('essays1',$essays1);
      // 
      
	   $essays2 = M('Production')->where(array('industry'=>$_POST['selecttext'],'checked'=>'false') )->select();
	   $this->assign('essays2',$essays2);
	   $this->display('public/display');
	  // $essays = M('post')->where('checked=false')->Distinct(true)->field('industry')->select();
	 // $this->assign('essays',$essays);     

	}
	public function displaydouble(){
     $essays3 = M('Production')->where(array('industry'=>$_POST['selecttext'],'postname'=>$_POST['selecttext1'],'checked'=>'false') )->select();
	   $this->assign('essays2',$essays3);
	   $this->display('public/display');
	}
	public function search(){
		//$text=$_POST['searchtext'];
		$data['title']=array('like',array('%'.$_POST['searchtext'].'%'));
         // $this->success('%'.$_POST['searchtext'].'%');
		 //$essays3 = M('Production')->where(array('title'=>$_POST['searchtext']))->select();
		  $essays3 = M('Production')->where($data)->select();
		// $this->success($essays3);
      // $data['title']=array('like','%'+$_POST['searchtext']+'%');
      //  $essays3 = M('Production')->where($data)->select();
	 // $essays3 = mysql_query("SELECT * FROM production WHERE title like '$text'");
	 if($essays3==""){
	 	$this->error( '数据集为空');
	 }
	    $this->assign('essays2',$essays3);
	    $this->display('public/display');
	}
	public function searchtime(){
		//$text=$_POST['searchtext'];
		//$this->success($_POST['selecttime']);
		$data['addtime']=array('between',array($_POST['selecttime'],$_POST['selecttime1']));
         // $this->success('%'.$_POST['searchtext'].'%');
		 //$essays3 = M('Production')->where(array('title'=>$_POST['searchtext']))->select();
		  $essays3 = M('Production')->where($data)->select();
		// $this->success($essays3);
      // $data['title']=array('like','%'+$_POST['searchtext']+'%');
      //  $essays3 = M('Production')->where($data)->select();
	 // $essays3 = mysql_query("SELECT * FROM production WHERE title like '$text'");
	 if($essays3==""){
	 	$this->error( '数据集为空');
	 }
	    $this->assign('essays2',$essays3);
	    $this->display('public/display');
	}
	
}



	
			
			
		
