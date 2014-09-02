<?php
	class CareerWikiAction extends Action{
	
		public function index(){
		 	$myself = M('User')->where(array('username'=>$_SESSION['username']))->find();
			 //消息提醒
			$num = M('Message')->where(array('message_author'=>$_SESSION['username']))->count();
			$this->assign('num',$num);
			$messagedetail= M('Message')->where(array('message_author'=>$_SESSION['username']))->select();
            $this->assign('messagedetail', $messagedetail);
			
			if('' != $_GET['postname'] && '' != $_GET['postname']){
		
				$postname = $_GET['postname'];
			}
			else{
				$postname = '前端开发工程师';
				
			}
			
			$postintro = M('Post')->where(array('postname'=>$postname,'editpart'=>'introduction'))->find();
			$postrequire = M('Post')->where(array('postname'=>$postname,'editpart'=>'requirement'))->find();
			$postimpro = M('Post')->where(array('postname'=>$postname,'editpart'=>'improvement'))->find();
			$postemploy = M('Post')->where(array('postname'=>$postname,'editpart'=>'employment'))->find();
			//找到所有的职位
			$names=M('Post')->field('postname')->distinct(true)->select();
			//显示赞踩
			//inrtroduction赞踩
			$likecount1 = M('praise')->where(array('targetno'=>$postintro['editno'],'praisetype'=>'postpraise', 'positive'=>'true'))->count();
		    $dislikecount1 = M('praise')->where(array('targetno'=>$postintro['editno'],'praisetype'=>'postpraise', 'positive'=>'false'))->count();
		    if($likecount1==0){
			$this->assign('likecount1', 0);
		    }else{
		     $this->assign('likecount1', $likecount1);
		     }
		   if($dislikecount1==0){
			$this->assign('dislikecount1', 0);
		    }else{
		    $this->assign('dislikecount1', $dislikecount1);
		   }
		   //requirement赞踩
		   $likecount2 = M('praise')->where(array('targetno'=>$postrequire['editno'],'praisetype'=>'postpraise', 'positive'=>'true'))->count();
		    $dislikecount2 = M('praise')->where(array('targetno'=>$postrequire['editno'],'praisetype'=>'postpraise', 'positive'=>'false'))->count();
		    if($likecount2==0){
			$this->assign('likecount2', 0);
		    }else{
		     $this->assign('likecount2', $likecount2);
		     }
		   if($dislikecount2==0){
			$this->assign('dislikecount2', 0);
		    }else{
		    $this->assign('dislikecount2', $dislikecount2);}
	        //improvement赞踩
		    $likecount3 = M('praise')->where(array('targetno'=>$postimpro['editno'],'praisetype'=>'postpraise', 'positive'=>'true'))->count();
		    $dislikecount3 = M('praise')->where(array('targetno'=>$postimpro['editno'],'praisetype'=>'postpraise', 'positive'=>'false'))->count();
		    if($likecount3==0){
			$this->assign('likecount3', 0);
		    }else{
		     $this->assign('likecount3', $likecount3);
		     }
		   if($dislikecount2==0){
			$this->assign('dislikecount3', 0);
		    }else{
		    $this->assign('dislikecount3', $dislikecount3);}
		 
		   //employment赞踩
		    $likecount4 = M('praise')->where(array('targetno'=>$postemploy['editno'],'praisetype'=>'postpraise', 'positive'=>'true'))->count();
		    $dislikecount4 = M('praise')->where(array('targetno'=>$postemploy['editno'],'praisetype'=>'postpraise', 'positive'=>'false'))->count();
		    if($likecount4==0){
			$this->assign('likecount4', 0);
		    }else{
		     $this->assign('likecount4', $likecount4);
		     }
		   if($dislikecount4==0){
			$this->assign('dislikecount4', 0);
		    }else{
		    $this->assign('dislikecount4', $dislikecount3);}

            $this->assign('names', $names);
			$this->assign('postintro', $postintro);
			$this->assign('postrequire', $postrequire);
			$this->assign('postimpro', $postimpro);
			$this->assign('postemploy', $postemploy);
			$this->assign('myself', $myself);
			$this->assign('current_page', 'careerwiki_page');
			$this->assign('title', '职场维基 - 以梦为马');
			$this->display();
			
			}
}