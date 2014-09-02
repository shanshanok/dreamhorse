<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>后台管理-文章审核</title>
		<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/page.css" / >
		<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
	</head>
	<body>
	<div id="web">
		<div style="background: #333333; width:100%; height:100px; color:#CCCCCC"> 后台管理</div>
		<div id="container-wrap">
			
<div id="aside-left">
	<div id="nav-aside">
		<ul id="mynav">
			
					<li><a href="__APP__/EssayM?type=Essay">文章管理</a>
					</li>
					<li><a href="__APP__/Category?essaytype=javascript">作品管理</a>
					</li>
					<li><a href="__APP__/Category?essaytype=productanalysis">经理管理</a>
					</li>
					<li><a href="__APP__/Category?essaytype=industryobservation">用户管理</a>
					</li>
					
				   
		</ul>
	</div>
	
	
</div>
			
			<form action="__APP__/EssayDisplay/checkessay" method="post">
			<div id="main">
			  <div id="essaycontent">
			     <input  id="check1" type="submit" value="审核通过"/>
			     <div id="essayno" >文章编号：<?php echo ($essay["id"]); ?> </div>
				 <input type="hidden" value="<?php echo ($essay["id"]); ?>" name="essayno"/>
			     <div id="essaytitle">文章标题：<?php echo ($essay["title"]); ?> </div>
			     <div id="abstract">文章摘要：<?php echo ($essay["summary"]); ?> </div>
			     <div id="content">文章内容：<?php echo ($essay["content"]); ?> </div>
			     <input  id="check" type="submit" value="审核通过"/>
			  <div>
			</div>
			</div>
			
		  </div>
		</form>	
		</div>
	
	
	<div class="footer">
				<div id="footer-bg">
					<div id="footer-inner">
						
							<div class="inner-block">
								<p>关于我们</p>
								<div class="footer-content">
								有待编辑。。。记录你的求职准备之路，分享你的成长经历！。。。
								</div>
							</div>
							<div class="inner-block">
								<p>我们的团队</p>
								<div class="footer-content">
									<a class="pic-link-small" href="__APP__/Profile?member=xiaowenjie"><img src="__ROOT__/Home/Uploads/xiaowenjie_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=zbin"><img src="__ROOT__/Home/Uploads/zbin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Doris"><img src="__ROOT__/Home/Uploads/Doris_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=korbin"><img src="__ROOT__/Home/Uploads/korbin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Baby"><img src="__ROOT__/Home/Uploads/Baby_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Pork.zhao"><img src="__ROOT__/Home/Uploads/Pork.zhao_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=shanshan"><img src="__ROOT__/Home/Uploads/shanshan_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=minmin"><img src="__ROOT__/Home/Uploads/minmin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=雨天"><img src="__ROOT__/Home/Uploads/雨天_large.png"/></a>
									
								</div>
							</div>
							<div class="inner-block">
								<p>大家在关注</p>
								<div>
								    <div class="col">
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									</div>
								    <div class="col">
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									</div>
								
								</div>
								
								
							</div>
							<div class="inner-block">
								<p>Korbin Zhao</p>
								<div class="footer-content">
									<a class="pic-link-big" href="#"><img src="__TMPL__/resource/images/korbinzhao.png"/></a>
									<a class="right white" href="#">联系站长：Korbin Zhao</a>
								</div>
							</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p class="copyright">Copyright © 2013 “以梦为马 Dream Catcher”团队</p>
				</div>
				
				<div id="back2top">
					<a href="#"></a>
				</div>
	</div>
	
</div>


	
	<script type="text/javascript" src="__TMPL__/resource/js/index.js"></script> 
	
</body>
</html>