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
		{ $this->success('审核结果已进入数据库！');}
	 else
		 { $this->error('审核失败！'); }
	 $this->display('index');

	
	}
}