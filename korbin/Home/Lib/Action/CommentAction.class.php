<?php
class CommentAction extends Action{

	public function commentAdd(){
			//define('APP_DEBUG', true);

			$data['commenttype'] = $_POST['commenttype'];
			$data['targetno'] = $_POST['targetno'];
			
			$data['username'] = $_SESSION['username'];
			$data['commenttext'] = $_POST['commenttext'];
			$data['addtime'] = date("Y-m-d H:m:s");
			
			//echo $data;

			if(null != $_POST['commenttext'] && '' != $_POST['commenttext']){
				$add = M('Comment')->add($data);
				if($add){
					echo $_POST['commenttext'];
				}
			}

			//加入消息提醒
			$essaymessage = M('Production')->where(array('id'=>$_POST['targetno']))->find();
			$data1[message_author]=$essaymessage['author'];
			$data1[message_title]=$essaymessage['title'];
			$data1[message_text]=$_POST['commenttext'];
			$data1[comment_user]=$_SESSION['username'];
			$data1[comment_targetno]=$_POST['targetno'];
			$data1[prodouction_type]=$essaymessage['type'];
				 M('Message')->add($data1);
			
	}

	public function commentDelete(){
		$comment = M('Comment')->where(array('commentno'=>$_GET['commentno']));

		$target = $comment->find();
		$targetno = $target['targetno'];
		$commenttype = $target['commenttype'];
		
		$delete = $comment->delete();
	
		if('essaycomment' == $commenttype){
			$this->success('评论删除成功', '__APP__/Essay?essayno='.$targetno);
		}
		else if('experiencecomment' == $commenttype){
			$this->success('评论删除成功', '__APP__/Experience?experienceno='.$targetno );
		}
		else if('workcomment' == $commenttype){
			$this->success('评论删除成功', '__APP__/Work?workno='.$targetno );
		}
		else{
			$this->error('评论删除失败！', 'index');
		}
		
	}

	
}