<?php
	class LoginAction extends Action {
		function index() {
			$this->display();
		}

		public function login(){
			
			$user = D('user')->field('userno, username')
				->where(array('username'=>$_POST['username'], 'password'=>md5($_POST['password'])))->find();

			//echo $user == 0;

			if($user){
				$_SESSION = $user;
				$_SESSION['isLogin'] = 1;
				
				$this->redirect('./Index');//页面跳转和重定向的规则到底是怎样的？括号内的内容要怎么写？为什么跳转或者重定向之后会显示.html文件的路径，而且文章中图片显示不出来
			}
			else{
				$this->error('用户登录失败，请重新登录！', 'index');
			}

		}

		public function logout() {
			$username = $_SESSION['username'];

			$_SESSION=array();
			
			if(isset($_COOKIE[session_name()])) {
				setCookie(session_name(), '', time()-3600, '/');
			}

			session_destroy();

			$this->success("亲，{$username},你退出成功喽!", __APP__);
		}	

	}