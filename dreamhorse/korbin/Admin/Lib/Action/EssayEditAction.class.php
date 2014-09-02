<?php
class EssayEditAction extends Action{
	public function index(){
		
		//echo $_SERVER['DOCUMENT_ROOT'];

		$isLogin = $_SESSION['isLogin'];
		$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();

		$essay = M('Production')->where(array('id'=>$_GET['essayno']))->find();

		$str0 = $essay[title];
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str0 = stripslashes($str0);
		$essay[title] = $str0;

		$str1 = $essay[summary];
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str1 = stripslashes($str1);
		$essay[summary] = $str1;
		
		$str2 = $essay[content];	
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str2 = stripslashes($str2);
		$essay[content] = $str2;

		$this->assign('myself', $myself);

		if( $isLogin == 1){
			$this->assign('current_page', 'home_page');
			$this->assign('essay', $essay);
			$this->display();
		}
		else{
			$this->error('登录后才能编辑文章哦，快点去登录吧！', '../Home/Tpl/Default/Login/index');
		}
	}

	public function ArticleEdit(){
		
			$updateTime = date("Y-m-d H:m:s");
			$_POST['addtime'] = $updateTime;

			$_POST['author'] = $_SESSION['username'];

			if($_POST['title'] != null && $_POST['title'] != ''){
				$save = M('Production')->where(array('id'=>$_GET['essayno']))->save($_POST);
			}
			

			if($save){
				$this->success('文章 "'.$_POST['title'].'" 修改成功！', '__APP__/Essay?essayno='.$_GET['essayno']);
			}
			else{
				$this->error('文章 "'.$_POST['title'].'" 修改失败！', 'index?essayno='.$_GET['essayno']);
			}
	
	}
	public function checkessay()
	{
	 $data['checked']="true";
     $count= M('Production')->where(array('id'=>$_GET['id']))->save($data);
	 $essay = M('Production')->where(array('id'=>$_GET['id']))->find();
     $this->assign('essay',$essay);
	 if($count>0)
		{ $this->success('审核结果已进入数据库！');}
	 else
		 { $this->error('审核失败！'); }
	 $this->display('index');

	
	}

	public function EssayDelete(){
		
		$delete = M('Production')->where(array('id'=>$_GET['id']))->delete();
		$delete2 = M('Comment')->where(array('id'=>$_GET['id']))->delete();

		if($delete){
			$this->success('文章 "'.$_GET['title'].'" 删除成功！', '__APP__/EssayM?member='.$_SESSION['username']);
		}
		else{
			$this->error('文章 "'.$_POST['title'].'" 删除失败！', '__APP__/EssayM?id='.$_GET['id']);
		}
	}
}