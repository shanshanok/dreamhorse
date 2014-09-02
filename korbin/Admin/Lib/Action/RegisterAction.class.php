<?php
	class Register extends Action{
		function index(){
			debug();
			$this->display();
		}

		function register(){
			
			$_POST['password'] = md5($_POST['password']);
			$_POST['authority'] = 'manager';
			$user = D('user')->where('username, password')->insert($_POST);

			if($user){
				$this->success('用户注册成功！请登录。', 2, 'login/index');
			}
			else{
				$this->error('用户注册失败，请重新注册！', 2, 'index');
			}
		}
	}