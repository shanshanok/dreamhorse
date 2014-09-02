<?php
	 class IndexAction extends Action {
		public function index(){
			define('APP_DEBUG', true);

			//$essays = M('Essay')->order('essayno desc')->select();
			$Exp = M('Experience');
			$Production = M('Production');
			$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
		     //消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);

			$Essay = M('Production'); // 实例化Data数据对象
			import('ORG.Util.Page');// 导入分页类
			$count = $Production->count();// 查询满足要求的总记录数
			$Page = new Page($count, 10);// 实例化分页类 传入总记录数
			
			$Page->setConfig('header', '篇文章');//共有多少条数据
			$Page->setConfig('prev', "<");//上一页
			$Page->setConfig('next', '>');//下一页
			$Page->setConfig('first', '<<');//第一页
			$Page->setConfig('last', '>>');//最后一页
			$show = $Page->show();                        //分页的导航条的输出变量
			
			
			// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
			$nowPage = isset($_GET['page'])?$_GET['page']:1;
			$essays = $Production->order('id desc')->page($nowPage.','.$Page->listRows)->select();

			//去除转义过程中添加的反斜杠
			for($i = 0; $i < count($essays); $i++){
				
				$commentscount = M('Comment')->where(array('targetno'=>$essays[$i][id]))->count();
				$essays[$i][commentscount] = $commentscount;
				
				
				
				$str0 = $essays[$i][title];
				//去掉转义后字符串中的反斜杠\
				//$str = html_entity_decode($str);
				$str0 = stripslashes($str0);
				$essays[$i][title] = $str0;


				$str1 = $essays[$i][content];
				
				$str1 = stripslashes($str1);

				$essays[$i][content] = $str1;

				$str2 = $essays[$i][summary];
				
				$str2 = stripslashes($str2);

				$essays[$i][summary] = $str2.'......'; 
			}

			$essays_newest10 = $Production->where(array('type'=>'essay'))->order('id desc')->page(1,10)->select();
			$works_newest10 = $Production->where(array('type'=>'work'))->order('id desc')->page(1,10)->select();
			$exps_newest10 = $Production->where(array('type'=>'experience'))->order('id desc')->page(1,10)->select();
			

			
			


			$this->assign('title', '以梦为马-你的求职准备之路');
			$this->assign('content_title', '最新动态');
			$this->assign('essays_newest10', $essays_newest10);
			$this->assign('exps_newest10', $exps_newest10);
			$this->assign('works_newest10', $works_newest10);
			$this->assign('myself', $myself);
			$this->assign('current_page', 'home_page');
			
			
			$this->assign('page',$show);// 赋值分页输出
			$this->assign('essays',$essays);// 赋值数据集
			$this->display(); // 输出模板

		}
		
		
		
		
	}