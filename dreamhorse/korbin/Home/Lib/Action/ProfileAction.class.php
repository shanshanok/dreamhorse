<?php
	class ProfileAction extends Action{
		public function index(){
			define('APP_DEBUG', true);
			$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
			//消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
			
			if(null != $_GET['member']  && '' != $_GET['member']){
				$member = M('User')->where(array('username'=>$_GET['member']))->find();
			}
			else{
				$member = $myself;//用于展现profile-top.html中个人名片的信息，在查看自己Profile页面时，$member和$myself是相同的，都是指自己
			}
			// 添加 添加关注
			$focus=M('Focus')->where(array('username' =>$myself['username'],'focusname'=>$member['username']))->find();
			if($focus){
				$this->assign('focus',$focus);
			}
			$focusmembers=M('Focus')->where(array('username'=>$_SESSION['username']))->order('focusno desc')->page(1,8)->select();
			$allfocusmember=M('Focus')->where(array('username'=>$_SESSION['username']))->select();
			$this->assign('list',$focusmembers);
			$this->assign('allcount',count($allfocusmember));


			$experiences = M('Production')->where(array('type'=>'experience', 'author'=>$member['username']))->order('addtime desc')->select();
			
			//去除转义过程中添加的反斜杠
			for($i = 0; $i < count($experiences); $i++){
				$str = $experiences[$i][content];
				
				$str = stripslashes($str);

				$experiences[$i][content] = $str;

				$str2 = $experiences[$i][summary];
				
				$str2 = stripslashes($str2);

				$experiences[$i][summary] = $str2; 
			}


			$this->assign('experiences', $experiences);

			$this->assign('current_page', 'member_page');
			$this->assign('current_profile_page', 'timeline-title');
			$this->assign('member', $member);
			$this->assign('myself', $myself);
			$this->assign('title', $member["username"].'的时间轴 - 以梦为马');

			$this->display();
		}

		public function myWorks(){
			define('APP_DEBUG', true);
			$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
			
			if(null != $_GET['member']  && '' != $_GET['member']){
				$member = M('User')->where(array('username'=>$_GET['member']))->find();
			}
			else{
				$member = $myself;//用于展现profile-top.html中个人名片的信息，在查看自己Profile页面时，$member和$myself是相同的，都是指自己
			}
			
			

			$Production = M('Production'); // 实例化Data数据对象
			$Work = M('Work');

			import('ORG.Util.Page');// 导入分页类
			$count = $Production->where(array('author'=>$member['username']))->count();
			//$count2 = $Work->where(array('author'=>$member))->count();
			//$count = $count1 + $count2;// 查询满足要求的总记录数

			$Page = new Page($count, 10);// 实例化分页类 传入总记录数
			
			$Page->setConfig('header', '篇文章');//共有多少条数据
			$Page->setConfig('prev', "<");//上一页
			$Page->setConfig('next', '>');//下一页
			$Page->setConfig('first', '<<');//第一页
			$Page->setConfig('last', '>>');//最后一页
			$show = $Page->show();                        //分页的导航条的输出变量
			
			
			// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			$nowPage = isset($_GET['page'])?$_GET['page']:1;
			$essays = $Production->where(array('author'=>$member['username']))->order('id desc')->page($nowPage.','.$Page->listRows)->select();

			//去除转义过程中添加的反斜杠
			for($i = 0; $i < count($essays); $i++){
				$str = $essays[$i][content];
				
				$str = stripslashes($str);

				$essays[$i][content] = $str;

				$str2 = $essays[$i][summary];
				
				$str2 = stripslashes($str2);

				$essays[$i][summary] = $str2.'......'; 
			}


			$this->assign('page',$show);// 赋值分页输出
			$this->assign('essays',$essays);// 赋值数据集

			$this->assign('current_page', 'member_page');
			$this->assign('current_profile_page', 'works-title');
			$this->assign('member', $member);
			$this->assign('myself', $myself);
			$this->assign('title', $member["username"].'的作品集 - 以梦为马');

			$this->display(Profile/myWorks);
		}

		

		
		public function modifyInfo(){
			define('APP_DEBUG', true);
			
			$name = $_GET["name"];
			$info = $_GET["info"];
			
			$data[$name] = $info;

			$save = M('User')->where(array('username'=>$_SESSION['username']))->save($data);
			// echo $save;此处不能只在$save存在才执行下边的语句，否则在不做修改的点击完成情况下会变为空
			// if($save){
				$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();

				echo $myself[$name];
			// }	
		}
// 添加
		public function addFocusMembers(){
			define('APP_DEBUG',true);
			$focusname=$_GET['targetname'];
			$username=M('User')->where(array('username'=>$_SESSION['username']))->find();

			$focus=M('Focus')->where(array('focusname'=>$focusname))->find();
			if(!$focus){
				$data['username']=$username[username];
				$data['focusname']=$focusname;
				M('Focus')->data($data)->add();	
			}
			
			$focusmembers=M('Focus')->where(array('username'=>$_SESSION['username']))->order('focusno desc')->select();
			// $data['name']='zhangsan';
			// $data['info']='info';
			// echo $focusmembers;
			// $this->ajaxReturn($focusmembers[1],'JSON');
			// $b=array();
			$b[0]=count($focusmembers);
			$i=1;
			foreach($focusmembers as $f){
				$b[$i]=$f;
				$i++;
			};
			$this->ajaxReturn($b,'JSON');
			echo count($focusmembers);
		}

	}