<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ($title); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/index.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/page.css" / >

</head>
	
	<body>
	<div id="web">
			<div id="bghead">
				
				<input type="hidden" id="currentPage" value="<?php echo ($current_page); ?>"/> 
				
				<div id="header">
					<div id="logo"><a href="__APP__"><img src="__TMPL__/resource/images/logo.png"></a></div>
					<div id="nav" class="nav">
						<ul>
							<li><a id="home_page" href="__APP__">首页</a></li>
							<li><a id="careerwiki_page" href="__APP__/CareerWiki">职场维基</a></li>
							<!--
							<li><a id="careerbaike_page" href="__APP__/CareerWiki">职场百科</a></li>
							-->
							<li><a id="member_page" href="__APP__/Members">追梦者</a></li>
							<li><a id="aboutus_page" href="__APP__/AboutUs">关于我们</a></li>
							
							
						</ul>
					</div>
					<div id="contribute">
						<ul>
							<li>
								<a href="">投稿</a>
								<ul>
									<li><a id="article-add" href="__APP__/EssayAdd">发表文章</a></li>
									<li><a id="work-add" href="__APP__/WorkAdd">上传作品</a></li>
									<li><a id="experience-add" href="__APP__/ExperienceAdd">添加经历</a></li>
									
								</ul>
							</li>
						</ul>
					</div>
					<div id="login">
						<ul>
							<div id="part-logout">
								<li><a href="__ROOT__/index.php/Profile"><?php echo ($myself["username"]); ?></a></li>
								<li><a href="__ROOT__/index.php/Login/logout">退出</a></li>
							</div>
							<div id="part-login">
								<li><a href="__ROOT__/index.php/Register">注册</a></li>
								<li><a href="__ROOT__/index.php/Login">登录</a></li>
							</div>
						</ul>
						<!--使用hidden标签来获取用户登录信息，用于js获取div #login中part-login和part-logout的显示与否-->
						<input type="hidden" id="myself" value="<?php echo ($myself["username"]); ?>"/>
					</div>
					
				</div>
			
			</div>
			<div id="container">
			
		
		<div id="container-wrap">
			
<div id="aside-left">
	<div id="nav-aside">
		<ul id="mynav">
			
					<li><a href="__APP__/EssayM?type=Essay">文章管理</a>
					</li>
					<li><a href="__APP__/EssayM?type=Work">作品管理</a>
					</li>
					<li><a href="__APP__/EssayM?type=Experience">经历管理</a>
					</li>
					<li><a href="__APP__/UserM?type=user">用户管理</a>
					</li>
				
				   
		</ul>
	</div>
	
	
</div>
			<div id="main">
				<div id="content-essay">
						<div class="essay">
							
							<div class="essay-header">
							<!--中间大标题下的小字 -->
								<h2 class="essay-title"><a href="__APP__/Essay?id=<?php echo ($essay["id"]); ?>"><?php echo ($essay["title"]); ?></a></h2>
								<div class="essay-metas">
								<span class="muted">
								<i class="icon-user icon12"></i>
								<a class="inline hovercolor"  href="__APP__/Profile?member=<?php echo ($essay["author"]); ?>">
									<?php echo ($essay["author"]); ?>&nbsp;&nbsp;
								</a>
								</span>
							
								<span class="muted">
									<i class="icon-time icon12"></i><?php echo ($essay["addtime"]); ?>&nbsp;&nbsp;
									</span>
									<span class="muted">
									<i class="icon-type icon12"></i><?php echo ($essay["type"]); ?>类型&nbsp;&nbsp;
									</span>
								
									<span class="muted">
									<i class="icon-eye-open icon12"></i><?php echo ($essay["visits"]); ?>&nbsp;浏览&nbsp;&nbsp;
									</span>
									<span class="muted">
									<i class="icon-comment icon12"></i><?php echo ($essay["commentscount"]); ?>&nbsp;评论&nbsp;&nbsp;
									</span>
									
									<div class="right" name="edit" id="edit">
										<!--action="__APP__/EssayM/checkessay?essayno=<?php echo ($essay["id"]); ?>" method="post"-->
										<a  href="__APP__/EssayEdit/checkessay?id=<?php echo ($essay["id"]); ?>">审核通过</a>
										<a  href="__APP__/EssayEdit?essayno=<?php echo ($essay["id"]); ?>">编辑</a>
										<a  href="__APP__/EssayEdit/essayDelete?id=<?php echo ($essay["id"]); ?>">删除</a>
										<!--<input type="hidden"  id="targetno" value="<?php echo ($essay["id"]); ?>"/>
										<input type="hidden" id="motto" value="<?php echo ($myself["motto"]); ?>"/>
										<input id="commenttype" type="hidden" value="essaycomment"/>-->
									</div>
								</div>
								
							</div>
							
							
							
							<div class="essay-summary">
								<p><?php echo ($essay["content"]); ?></p>
							</div>
							
							<div class="box">
								<input type="hidden" id="praisetype" value="essaypraise"/>
								<div class="pos-btn" id="like" onclick="addLike(this)">
									<p id="add1" class="pos-btn">+1</p>
									<i class="icon-like icon12" title="喜欢"></i>
									<p id="add1" class="pos-btn">+1</p>
									<span id="likecount"  class="praisecount"><?php echo ($likecount); ?></span>
								</div>		
								<div class="pos-btn" id="dislike" onclick="addDislike(this);">
								
									<i class="icon-dislike icon12" title="没劲"></i>
									<p id="add2" class="pos-btn">+1</p>
									<span id="dislikecount" class="praisecount"><?php echo ($dislikecount); ?></span>
								</div>
							</div>
						</div>
				</div>
				
							
			</div>
							
		
			
			<input id="author" type="hidden" value="<?php echo ($essay["author"]); ?>"/>
			<br class="clear"/><!--因为浮动元素不占据空间，所以容器元素不包围他们。添加一个进行清理的空元素可以迫使容器元素包围浮动元素-->
		</div>
		

			
<script type="text/javascript" src="__TMPL__/resource/js/index.js"></script> 
	
</body>
</html>