<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo ($title); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
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
							<li><a id="pm_page" href="__APP__/Category?essaytype=pm">产品 PM</a>
									<ul>
										<li><a href="__APP__/Category?essaytype=productanalysis">产品分析</a>
										</li>
										<li><a href="__APP__/Category?essaytype=industryobservation">行业观察</a>
										</li>
										<li><a href="__APP__/Category?essaytype=demandanalysis">需求分析</a>
										</li>
									</ul>
							</li>
							<li><a id="fe_page" href="__APP__/Category?essaytype=fe">前端 FE</a>
									<ul>
										<li><a href="__APP__/Category?essaytype=divcss">DIV+CSS</a>
										</li>
										<li><a href="__APP__/Category?essaytype=javascript">JavaScript</a>
										</li>
									</ul>
							</li>
							<li><a id="member_page" href="">成员展示</a>
								<ul>
									<li><a href="">Korbin</a>
									</li>
									<li><a href="">Katherine</a>
									</li>
								</ul>
							</li>
							<li><a id="aboutus_page" href="">关于我们</a></li>
							
							
						</ul>
					</div>
					<div id="article_add">
						<ul>
							<li><a href="__APP__/Articleadd">发表文章/作品</a></li>
						</ul>
					</div>
					<div id="login">
						<ul>
							<li><a href="__ROOT__/index.php/Profile"><?php echo ($user["username"]); ?></a></li>
							<li><a href="__ROOT__/index.php/Login/logout">退出</a></li>
							<li><a href="__ROOT__/index.php/Register">注册</a></li>
							<li><a href="__ROOT__/index.php/Login">登录</a></li>
						</ul>
					</div>
					
				</div>
			
			</div>
			<div id="container">
			
	<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/profile.css"/>
	<script type="text/javascript" src="__TMPL__/resource/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/profile.js"></script>
		<div id="container-wrap">
			<div class="inner-wrap">
							<div class="personal-card">
				<div class="potrait">
					<a href="">
						<img src="__TMPL__/resource/images/person-default-big.png" />
					</a>
				</div>
				<div id="personal-card-box" class="personal-card-box">
					<form id="person-info" method="post">
						<p class="card-info" onmouseover="showEdit(this);" onmouseout="hideEdit(this);" >
							<span class="name personal-info"><?php echo ($user["username"]); ?></span>
							<span class="motto personal-info "><b class="big">“</b><span  class="edit-content" id="motto"><?php echo ($user["motto"]); ?>&nbsp;</span><b class="big">”</b></span>
							<span class="edit" onclick="editContent(this);">
								
									<span class="edit-inner img-edit-inner" ></span>
									<span class="edit-inner" >修改</span>
								
							</span>
						</p>
						
						<p class="card-info" onmouseover="showEdit(this);" onmouseout="hideEdit(this);">
							<span id="email" class="email personal-info edit-content"><?php echo ($user["email"]); ?></span>
							
						</p>
						<p class="card-info" onmouseover="showEdit(this);" onmouseout="hideEdit(this);">
							<span id="school" class="school personal-info edit-content"><?php echo ($user["school"]); ?></span>
							<span class="edit" onclick="editContent(this);">
								
									<span class="edit-inner img-edit-inner" ></span>
									<span class="edit-inner">修改</span>
								
							</span>
						</p>
					</div>
					<br class="clear"/>
				</form>
				
			</div>
			<div class="personal-expression">
				<p class="join-time">加入以梦为马：2014-01-17</p>
				<ul>
					<li>好评</li>
					<li>活跃</li>
				</ul>
				<ul>
					<li>0</li>
					<li>0</li>
				</ul>
			</div>
			<div class="profile-nav-wrap">
				<div class="profile-nav">
					<a class="profile-nav-item" id="timeline-title" href="__APP__/Profile">时间轴</a>
					<span class="profile-nav-item">|</span>
					<a class="profile-nav-item" id="works-title" href="__APP__/MyWorks">文章/作品</a>
					<br class="clear"/>
				</div>
			</div>
			<div class="dividing-line"></div>
	



			</div>
				<br class="clear"/>
			</div>
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
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
								</div>
							</div>
							<div class="inner-block">
								<p>大家在关注</p>
								
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