<?php
class PositionAction extends Action{
	public function index(){
       /*
	   import('ORG.Util.Page');// �����ҳ��
	   $count = $->count();// ��ѯ����Ҫ����ܼ�¼��
	   $Page = new Page($count, 10);// ʵ������ҳ�� �����ܼ�¼��
			
	   $Page->setConfig('header', 'ƪ����');//���ж���������
	   $Page->setConfig('prev', "<");//��һҳ
	   $Page->setConfig('next', '>');//��һҳ
	   $Page->setConfig('first', '<<');//��һҳ
	   $Page->setConfig('last', '>>');//���һҳ
	   $show = $Page->show();                        //��ҳ�ĵ��������������
			
			
			// ���з�ҳ���ݲ�ѯ ע��page�����Ĳ�����ǰ�沿���ǵ�ǰ��ҳ��ʹ�� $_GET[p]��ȡ
			$nowPage = isset($_GET['page'])?$_GET['page']:1;
	   */
	   $industry = M('post')->Distinct(true)->getField('industry',true);
	   $position = M('post')->where(array('industry'=>$industry[0]))->Distinct(true)->getField('postname',true);
           $part = M('post')->where(array('industry'=>$industry[0]))->Distinct(true)->getField('editpart',true);
	   //$position = array(1,2,3);
	   $this->assign('position',$position);
	   $this->assign('industry',$industry);
           $this->assign('part',$part);
	   $this->display();
	}

	public function selectPosition(){
            $postName = $_POST['selectPost'];
	   $part = $_POST['selectPart'];
	   //$industry = $_POST['selectInd'];
	   //if $part{
	   //ְλĳpart�༭��ʷ��¼
	   $postEditHis = M('post')->where(array('postname'=>$postName,'editpart'=>$part,'formal'=>'false'))->order('addtime desc')->select();
	   //ְλĳpart��ʽ�汾
	   $postFormal = M('post')->where(array('postname'=>$postName,'editpart'=>$part,'formal'=>'true'))->find();
           //$count = M('post')->where(array('postname'=>$postName,'editpart'=>$part,'formal'=>'true'))->count();
	   /*}
	   else{
	       $postEditHis = M('post')->where(array('postname'=>$postName),formal=>'false')->order('addtime desc')->select();
	   }*/
	   $industry = M('post')->Distinct(true)->getField('industry',true);
	   $position = M('post')->where(array('industry'=>$industry[0]))->Distinct(true)->getField('postname',true);
           $part = M('post')->where(array('industry'=>$industry[0],'postname'=>$position[0]))->Distinct(true)->getField('editpart',true);
	   
	   $this->assign('editHis',$postEditHis);
	   $this->assign('formal',$postFormal);
	   $this->assign('position',$position);
	   $this->assign('industry',$industry);
           $this->assign('part',$part);
           //$this->assign('count',$count);
	   $this->display('index');
	}
	
	public function changeIndustry(){
            $industry = $_GET['industry'];
            $positions = M('post')->where(array('industry'=>$industry))->Distinct(true)->getField('postname',true);
            $this->assign('position',$positions);
            $this->display('index');
	}
        
        public function changePosition(){
            $industry = $_GET['industry'];
            $position = $_GET['position'];
            $part = M('post')->where(array('industry'=>$industry,'postname'=>$position))->Distinct(true)->getField('editpart',true);
            $this->assign('part',$part);
            $this->display('index');
        }
        public function setFormal(){
            $cFormal['formal'] = 'false';
            if($_GET['formalno']){
                $cancelForm = M('post')->where(array('editno'=>$_GET['formalno']))->save($cFormal);
            }
            $sForm['formal'] = 'true';
            $setForm = M('post')->where(array('editno'=>$_GET['editno']))->save($sForm);
            $formal = M('post')->where(array('editno'=>$_GET['editno']))->find();
            $editHis = M('post')->where(array('postname'=>$formal['postname'],'editpart'=>$formal['editpart'],'formal'=>'false'))->order('addtime desc')->select();
            $industry = M('post')->Distinct(true)->getField('industry',true);
	   $position = M('post')->where(array('industry'=>$industry[0]))->Distinct(true)->getField('postname',true);
           $part = M('post')->where(array('industry'=>$industry[0],'postname'=>$position[0]))->Distinct(true)->getField('editpart',true);
           
            $this->assign('formal',$formal);
            $this->assign('editHis',$editHis);
             $this->assign('position',$position);
	   $this->assign('industry',$industry);
           $this->assign('part',$part);
            $this->display('index');
            
        }
        
        public function deleteHis(){
            $delete = M('post')->where(array('editno'=>$_GET['editno']))->delete();
            $industry = M('post')->Distinct(true)->getField('industry',true);
	   $position = M('post')->where(array('industry'=>$industry[0]))->Distinct(true)->getField('postname',true);
           $part = M('post')->where(array('industry'=>$industry[0],'postname'=>$position[0]))->Distinct(true)->getField('editpart',true);
           $this->assign('position',$position);
	   $this->assign('industry',$industry);
           $this->assign('part',$part);
            $this->display('index');
        }
        
         

}

