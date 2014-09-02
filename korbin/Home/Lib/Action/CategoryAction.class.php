<?php
class CategoryAction extends Action{
	public function index(){

		$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
		$Essay = M('Essay'); // 实例化Data数据对象
		import('ORG.Util.Page');// 导入分页类
		
		$type = $_GET['type'];
		
		switch($type){
			case 'pm':
				$title = 'PM - 以梦为马';
				$content_title = 'PM';
				$current_page = 'pm_page';
				break;
			case 'fe':
				$title = 'FE - 以梦为马';
				$content_title = 'FE';
				$current_page = 'fe_page';
				break;
			case 'divcss':
				$title = 'DIV+CSS - 以梦为马';
				$content_title = 'DIV+CSS';
				$current_page = 'fe_page';
				break;
			case 'javascript':
				$title = 'JavaScript - 以梦为马';
				$content_title = 'JavaScript';
				$current_page = 'fe_page';
				break;
			case 'productanalysis':
				$title = '产品分析 - 以梦为马';
				$content_title = '产品分析';
				$current_page = 'pm_page';
				break;
			case 'industryobservation':
				$title = '行业观察 - 以梦为马';
				$content_title = '行业观察';
				$current_page = 'pm_page';
				break;
			case 'demandanalysis':
				$title = '需求分析 - 以梦为马';
				$content_title = '需求分析';
				$current_page = 'pm_page';
				break;
			
		}
				

		if($_GET['type'] == 'pm'){
			
			$condition = 'essaytype="productanalysis" or essaytype="industryobservation" or essaytype="demandanalysis"';

		}
		else if($_GET['essaytype'] == 'fe'){
			
			$condition = 'essaytype="divcss" or essaytype="javascript" ';

		}
		else{
			$condition = array("essaytype"=>$_GET["essaytype"]);

		}
		
	
		
		$count = $Essay->where($condition)->count();// 查询满足要求的总记录数
		$Page = new Page($count, 10);// 实例化分页类 传入总记录数
		
		$Page->setConfig('header', '篇文章');//共有多少条数据
		$Page->setConfig('prev', "<");//上一页
		$Page->setConfig('next', '>');//下一页
		$Page->setConfig('first', '<<');//第一页
		$Page->setConfig('last', '>>');//最后一页
		$show = $Page->show();                        //分页的导航条的输出变量
		
		//消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		$nowPage = isset($_GET['page'])?$_GET['page']:1;
		$essays = $Essay->where($condition)->order('essayno desc')->page($nowPage.','.$Page->listRows)->select();

		//去除转义过程中添加的反斜杠
		for($i = 0; $i < count($essays); $i++){
			$str = $essays[$i][essaycontent];
			
			$str = stripslashes($str);

			$essays[$i][essaycontent] = $str;

			$str2 = $essays[$i][essayabstract];
			
			$str2 = stripslashes($str2);

			$essays[$i][essayabstract] = $str2.'......'; 
		}

		$essays_newest10 = $Essay->order('essayno desc')->page(1,10)->select();

		
		$this->assign('title', $title);
		$this->assign('content_title', $content_title);
		$this->assign('essays_newest10', $essays_newest10);
		$this->assign('myself', $myself);
		$this->assign('current_page', 'home_page');
		
		$this->assign('page',$show);// 赋值分页输出
		$this->assign('essays',$essays);// 赋值数据集
		$this->display('Index:index'); // 输出模板

	}
	
}