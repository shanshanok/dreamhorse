<?php
class PositionDisplayAction extends Action{
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
	   $editno = $_GET['editno'];
           if($_GET['formalno']){
               $formalno = $_GET['formalno'];
           } else {
               $formalno = '';
           }
           
           $edit = M('post')->where(array('editno'=>$editno))->find();
          if($editno === $formalno){
               $formal = $edit;
           } else{
               $formal = M('post')->where(array('editno'=>$formalno))->find();
           }
           
           $this->assign('formal',$formal);
           
           $this->assign('edit',$edit);
           $this->display();
            
	}

	
        
         

}

