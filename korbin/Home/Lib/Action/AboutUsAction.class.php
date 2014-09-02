<?php
	 class AboutUsAction extends Action {
		public function index(){
			define('APP_DEBUG', true);

			$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
           //消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
			

			$this->assign('title', '关于我们 - 以梦为马');
			$this->assign('content_title', '关于我们');
			$this->assign('myself', $myself);
			$this->assign('current_page', 'aboutus_page');
			
			$this->display(); // 输出模板

		}
		
		
		
		
	}