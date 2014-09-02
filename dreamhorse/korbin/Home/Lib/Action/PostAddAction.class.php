<?php
	class PostAddAction extends Action{
	
		public function index(){			
               $this->assign('postname', $_GET['postname']);
			$isLogin = $_SESSION['isLogin'];
			$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
			//消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
			$this->assign('myself', $myself);

			if( $isLogin == 1){
				
				$this->assign('current_page', 'careerwiki_page');
				$this->display();
			}
			else{
				$this->error('登录后才能添加岗位哦，快点去登录吧！', './Login/index');
			}

		}

		public function postAdd(){
             
           
			$_POST['addtime'] = date("Y-m-d H:m:s");

			$_POST['author'] = $_SESSION['username'];
			
			//添加职位的introduction部分
			$_POST['content'] = $_POST['introduction'];
			$_POST['editpart'] = 'introduction';

			if($_POST['postname'] != null && $_POST['postname'] != ''){
				$add1 = M('Post')->add($_POST);
			}

			//添加职位的requirement部分
			$_POST['content'] = $_POST['requirement'];
			$_POST['editpart'] = 'requirement';

			if($_POST['postname'] != null && $_POST['postname'] != ''){
				$add2 = M('Post')->add($_POST);
			}

			//添加职位的improvement部分
			$_POST['content'] = $_POST['improvement'];
			$_POST['editpart'] = 'improvement';

			if($_POST['postname'] != null && $_POST['postname'] != ''){
				$add3 = M('Post')->add($_POST);
			}

			//添加职位的employment部分
			$_POST['content'] = $_POST['employment'];
			$_POST['editpart'] = 'employment';

			if($_POST['postname'] != null && $_POST['postname'] != ''){
				$add4 = M('Post')->add($_POST);
			}

			$Tag = M("Tag"); // 实例化User对象
			$data['tagdetail'] = $_POST['postname'];
			$add5 = $Tag->add($data);

			if($add1 && $add2 && $add3 && $add4 && $add5){
				$this->success('岗位 '.$_POST['postname'].' 添加成功！', '__APP__/CareerWiki?postname='.$_POST['postname']);
			}
			else{
				$this->error('岗位 '.$_POST['postname'].' 添加失败！', 'index');
			}
		}
	
	
		
	
	
	
	
	
	
	
	}