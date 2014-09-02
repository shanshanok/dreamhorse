<?php
class MembersAction extends Action{
	public function index(){
		$members = M('User')->select();
		$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
	//消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
		
		$this->assign('members', $members);
		$this->assign('current_page', 'member_page');
		$this->assign('myself', $myself);
		$this->assign('title', '追梦者秀 - 以梦为马');

		$this->display();
	}

	
}