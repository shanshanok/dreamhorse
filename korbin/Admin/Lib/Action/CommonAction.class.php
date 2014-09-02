<?php
	class Common extends Action {
		function init(){
		
		$user = D('user')->where(array('username'=>$_SESSION['username']))->find();

		if(!(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === 1 && $user['authority'] == 'manager')){
			$this->redirect('login/index');
		}
		
		/*
			$user = D('user')->where(array('username'=>$_SESSION['username']))->find();

			//p($user['authority']);

			if(!(isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === 1 && $user['authority'] == 'manager')) {
				$this->redirect('login/index');
			}

			*/
		}		
	}