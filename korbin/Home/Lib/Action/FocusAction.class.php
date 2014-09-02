<?php 
	class FocusAction extends Action{
		public function index(){
			define('APP_DEBUG', true);
			// 获取header部分需要的值，保持当前header状态
			$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
			$this->assign('current_page', 'member_page');
			$this->assign('myself', $myself);
			// 获取自己的关注信息
			$allfocusmember=M('Focus')->where(array('username'=>$_SESSION['username']))->select();
			// for($i=0;$i<count($allfocusmember);$i++){
			// 	$focusmember=$allfocusmember[$i];
			// }
			$this->assign('allcount',count($allfocusmember));
			$this->assign('list',$allfocusmember);

			$this->display();
		}

	}
 ?>