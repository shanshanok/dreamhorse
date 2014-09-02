<?php
class PostEditAction extends Action{

	public function index(){
	
		if('' != $_GET['postname'] && '' != $_GET['type']){
		
			$postname = $_GET['postname'];
			$typeorgin = $_GET['type'];

		}

		$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
		
        if($typeorgin=="introduction")
		{$post = M('Post')->where(array('postname'=>$postname,'editpart'=>'introduction','formal'=>'true'))->find();
		  $type="职位简介";
		}
	    if($typeorgin=="requirement")
		{$post = M('Post')->where(array('postname'=>$postname,'editpart'=>'requirement','formal'=>'true'))->find();
		  $type="职位需求";
		}
		 if($typeorgin=="improvement")
		{$post = M('Post')->where(array('postname'=>$postname,'editpart'=>'improvement','formal'=>'true'))->find();
		$type="个人提升";
		}
		 if($typeorgin=="employment")
		{ $post =M('Post')->where(array('postname'=>$postname,'editpart'=>'employment','formal'=>'true'))->find();
		$type="招聘信息";
		 }

		$str0 = $post[postname];
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str0 = stripslashes($str0);
		$post[postname] = $str0;

		$str1 = $post[introduction];
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str1 = stripslashes($str1);
		$post[introduction] = $str1;
		
		$str2 = $post[requirement];	
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str2 = stripslashes($str2);
		$post[requirement] = $str2;

		$str3 = $post[improvement];	
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str3 = stripslashes($str3);
		$post[improvement] = $str3;

		$str4 = $post[employment];	
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str4 = stripslashes($str4);
		$post[employment] = $str4;
//消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
			$this->assign('myself', $myself);
			$this->assign('postname', $postname);
			$this->assign('current_page', 'careerwiki_page');
			$this->assign('post', $post);
			$this->assign('type', $type);
			$this->display();
	}

	public function postEdit(){
		/*	
		$data['addtime'] = date("Y-m-d H:m:s");
		$data['author'] = $_SESSION['username'];
		$data['industry']=$_POST['industry'];
		$data['editpart']=$_POST['editpart'];
		$data['postname']=$_POST['postname'];
		$data['content']=$_POST['content'];
		*/

		$_POST['addtime'] = date("Y-m-d H:m:s");
		$_POST['author'] = $_SESSION['username'];
         

		if($_POST['postname'] != null && $_POST['postname'] != ''){
			$save = M('Post')->add($_POST);
		}

		if($save){
			$this->success('岗位 '.$_POST['postname'].' 修改成功！', '__APP__/CareerWiki?postname='.$_POST['postname']);
		}
		else{
			$this->error('岗位 '.$_POST['postname'].' 修改失败！', 'index');
		}
	}















}