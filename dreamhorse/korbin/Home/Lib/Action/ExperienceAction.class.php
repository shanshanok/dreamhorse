<?php
class ExperienceAction extends Action{
	public function index(){
		//删除消息
       if($_GET['messageno'])
		{  M('Message')->where(array('messageno'=>$_GET['messageno']))->delete();}
		$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();

		$exp = M('Production')->find($_GET['id']);
		$praise = M('Praise');
		//因为mysql中没有布尔类型，因此用VARCHAR来实现true，false的效果，实际上是字符型的，所以true和false都加引号
		$likecount = $praise ->where(array('targetno'=>$_GET['id'], 'positive'=>'true'))->count();
		$dislikecount = $praise ->where(array('targetno'=>$_GET['id'], 'positive'=>'false'))->count();
		$comments = M('Comment')->where(array('targetno'=>$_GET['id']))->order('commentno desc')->select();
		$exp[commentscount] = count($comments);
		
		
	//消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
		
		$array = array();
		$i = 0;

		foreach($comments as $comment){
			
			$user = M('User')->where(array('username'=>$comment['username']))->find();
			$authormotto = $user['motto'];
			$authormotto = stripslashes($authormotto);
			

			$array[$i]['commentno'] = $comment['commentno'];
			$array[$i]['commenttype'] = $comment['commenttype'];
			$array[$i]['username'] = $comment['username'];
			$array[$i]['authormotto'] = $authormotto;
			$array[$i]['commenttext'] = $comment['commenttext'];
			$array[$i]['addtime'] = $comment['addtime'];

			$i++;
/*
			$user = M('User')->where(array('username'=>$comment['username']))->find();
			$authormotto = $user['motto'];
			$authormotto = stripslashes($authormotto);
			$comment['authormotto'] = $authormotto;
*/
			//echo $authormotto;
		}

		$str0 = $exp[title];
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str0 = stripslashes($str0);
		$exp[title] = $str0;

		$str1 = $exp[summary];
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str1 = stripslashes($str1);
		$exp[summary] = $str1;
		
		$str2 = $exp[content];	
		//去掉转义后字符串中的反斜杠\
		//$str = html_entity_decode($str);
		$str2 = stripslashes($str2);
		$exp[content] = $str2;



		if($exp){
			$exp[visits] = $exp[visits] + 1;
			$save = M('Production')->where(array('id'=>$exp[id]))->save($exp);
			
			$this->assign('exp', $exp);
			$this->assign('title', $exp[title]);
		}

		if($comments){
			$this->assign('comments', $array);
		}

		if($myself){
			$this->assign('myself', $myself);
		}

		if($likecount==0){
			$this->assign('likecount', 0);
		}else{
		$this->assign('likecount', $likecount);
		}
		
		if($dislikecount==0){
			$this->assign('dislikecount', 0);
		}else{
		$this->assign('dislikecount', $dislikecount);
		}
		
		$this->assign('myself', $myself);
		$this->assign('current_page', 'home_page');

		$this->display();
	}
	
	
	
}