<?php
class EssayDisplayAction extends Action{
	public function index(){
		 $essay = M('Production')->where(array('id'=>$_GET['essayno']))->find();
		 $this->assign('essay',$essay);
		 $this->display();
	}
    public function checkessay()
	{
	 $data['checked']="true";
     $count= M('Production')->where(array('id'=>$_POST['essayno']))->save($data);
	 $essay = M('Production')->where(array('id'=>$_POST['essayno']))->find();
     $this->assign('essay',$essay);
	 if($count>0)
		{ $this->success('��˽���ѽ������ݿ⣡');}
	 else
		 { $this->error('���ʧ�ܣ�'); }
	 $this->display('index');

	
	}
}