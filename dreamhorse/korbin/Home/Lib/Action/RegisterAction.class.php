<?php
	class RegisterAction extends Action{
		public function index(){
			$this->display();
		}

		public function register(){
			define('APP_DEBUG', true);

			$_POST['password'] = md5($_POST['password']);
			$user = M('user')->where('username, password')->add($_POST);

			$Tag = M("Tag"); // 实例化User对象
			$data['tagdetail'] = $_POST['username'];
			$add5 = $Tag->add($data);

			if($user){
				$this->success('用户注册成功！请登录。', '__APP__/Login/index');
			}
			else{
				$this->error('用户注册失败，请重新注册！', 'index');
			}
		}
	}