<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"/>
<html>
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
					<div id="logo"><a href="__APP__"></a></div>
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
			<div class="wrap">
				<div id="search-wrap">
				<form method="post" action="__APP__/Search">
					<div id="search">
							<input name="keyword" id="search-input" class="input" onFocus="clearText(this);"  onBlur="showText(this);" type="text" value="输入行业、岗位、作者名、关键词试试"/>
							<input type="submit" class="search-btn" value=""/>
						
					</div>
					</form>
				</div>
			</div>
			<div id="container">
			
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/profile.css"/>

	<input type="hidden" id="currentProfilePage" value="<?php echo ($current_profile_page); ?>"/>
	<input type="hidden" id="currentMember" value="<?php echo ($member["username"]); ?>"/><!--获取当前Profile页面的成员名称-->
	<input type="hidden" id="myself" value="<?php echo ($myself["username"]); ?>"/><!--获取当前登录用户名称-->
	<!-- 添加 -->
	<input type="hidden" id="relatedMember" value="<?php echo ($focus["focusname"]); ?>"/>
	<div id="container-wrap">
		<div class="inner-wrap">
			<div class="personal-card">
				<div class="potrait">
					<a id="a-potrait" href="__APP__/UploadImage" target="blank">
						
						<img title="点我，换头像哦~" alt="快快点我，上传头像哦~" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" src="__ROOT__/Home/Uploads/<?php echo ($member["username"]); ?>_large.png"/>
					</a>
					<div class='addfocus'>
					<span><em>+</em>关注</span>
				    </div>
				    <div id="tip"></div>
				</div>
				
				<div id="personal-card-box" class="personal-card-box">
					<form id="person-info" method="post">
						<p class="card-info" >
							<span class="name personal-info"><?php echo ($member["username"]); ?></span>
						</p>
						<p class="motto card-info" onmouseover="showEdit(this);" onmouseout="hideEdit(this);">
							<span class='info-tips'>签名：</span>
							<span  class="edit-content personal-info" id="motto"><?php echo ($member["motto"]); ?></span>	
							<span class="edit" onclick="editContent(this);">
								<span class="edit-inner img-edit-inner" ></span>
								<span class="edit-inner" >修改</span>
							</span>
						</p>
						<p class="card-info">
							<span class='info-tips'>邮箱：</span>
							<span id="email" class="email personal-info edit-content"><?php echo ($member["email"]); ?></span>
							
						</p>
						<p class="card-info" onmouseover="showEdit(this);" onmouseout="hideEdit(this);">
							<!-- 添加 -->
							<span class="info-tips">公司职位：</span>
							<span id="company" class="personal-info edit-content"><?php echo ($member["company"]); ?></span>
							<span class="edit" onclick="editContent(this);">
								<span class="edit-inner img-edit-inner" ></span>
								<span class="edit-inner">修改</span>
							</span>
						</p>
						<p class='card-info' onmouseover="showEdit(this);" onmouseout="hideEdit(this);">
							<span class='info-tips'>毕业院校：</span>
							<span id="organization" class=" personal-info edit-content"><?php echo ($member["organization"]); ?></span><!--后边 不能加&nbsp;否则从空的内容到添加内容的第一次添加仍为空-->
							<span class="edit" onclick="editContent(this);">
								<span class="edit-inner img-edit-inner" ></span>
								<span class="edit-inner">修改</span>
							</span>
						</p>
						<p class='card-info' onmouseover="showEdit(this);" onmouseout="hideEdit(this);">
							<span class='info-tips'>个人网站：</span>
							<span id="website" class=" personal-info edit-content"><?php echo ($member["website"]); ?></span>
							<span class="edit" onclick="editContent(this);">
								<span class="edit-inner img-edit-inner" ></span>
								<span class="edit-inner">修改</span>
							</span>
						</p>
						<p class='card-info' onmouseover="showEdit(this);" onmouseout="hideEdit(this);">
							<span class='info-tips'>个人简介：</span>
							<span id="resume" class=" personal-info edit-content"><?php echo ($member["resume"]); ?></span>
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
			<!-- 添加 -->
			<div class="personal-expression members-focus">
					<p class="focushead">我的关注</p>
					<?php if(is_array($list)): foreach($list as $key=>$item): ?><div class='focusmember'>
							<a href="__APP__/Profile?member=<?php echo ($item["focusname"]); ?>" target="blank">
								<img class='memberpic' title="<?php echo ($item["focusname"]); ?>" onerror="this.src='__TMPL__/resource/images/person-default-middle.png'" src="__ROOT__/Home/Uploads/<?php echo ($item["focusname"]); ?>_middle.png"/>
								<span title="<?php echo ($item["focusname"]); ?>"><?php echo ($item["focusname"]); ?></span>
							</a>
						</div><?php endforeach; endif; ?>
					
			</div>

			<div class="profile-nav-wrap">
				<div class="profile-nav">
					<a class="profile-nav-item" id="timeline-title" href="__APP__/Profile?member=<?php echo ($member["username"]); ?>">时间轴</a>
					<span class="profile-nav-item">|</span>
					<a class="profile-nav-item" id="works-title" href="__APP__/Profile/myWorks?member=<?php echo ($member["username"]); ?>">文章/作品</a>
					<br class="clear"/>
				</div>
			</div>
			<div class="dividing-line"></div>
		<!--此处jquery-1.7.2.min.js和jquery.masonry.min.js文件必须要在footer.html中重新加载一遍，因为在非Profile页面中也会用到jquery-1.7.2.min.js文件，所以要在footer.html中重新加载一次。加载完成后，此处的jquery.masonry.min.js文件又会变得无效，只能在footer.html中jquery-1.7.2.min.js文件之后重新加载一次。如果此时去掉Profile页面中两个文件的加载语句的话，profile.js中的$()会变得无效，就是说jquery语句无法执行。所以最后找到的解决方案只能是在Profile页面和footer.html文件中各加载一次。
		不能将profile.js文件改在footer.html文件中加载的原因是该js文件中定义的函数在其他页面中执行会出错-->	
<script type="text/javascript" src="__TMPL__/resource/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__TMPL__/resource/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="__TMPL__/resource/js/profile.js"></script>
				<div id="my-works">
				
					<div class="inner">
					
						<p class="content-title"><?php echo ($content_title); ?></p>
					
						<?php if(is_array($essays)): foreach($essays as $key=>$essay): ?><div class="essay">
								<div class="essay-header">
							<!--中间大标题下的小字 -->
								<h2 class="essay-title"><a href="__APP__/<?php echo ($essay["type"]); ?>?id=<?php echo ($essay["id"]); ?>"><?php echo ($essay["title"]); ?></a></h2>
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
										<a  href="__APP__/<?php echo ($essay["type"]); ?>Edit?id=<?php echo ($essay["id"]); ?>">编辑</a>
										<a  href="__APP__/<?php echo ($essay["type"]); ?>Edit/<?php echo ($essay["type"]); ?>Delete?id=<?php echo ($essay["id"]); ?>">删除</a>
										<input type="hidden"  id="targetno" value="<?php echo ($essay["essayno"]); ?>"/>
										<input type="hidden" id="motto" value="<?php echo ($myself["motto"]); ?>"/>
										<input id="commenttype" type="hidden" value="essaycomment"/>
									</div>
								</div>
								
							</div>
								<!--
								<div class="essay-header">
									<h2 class="essay-title"><a href="__APP__/Essay?essayno=<?php echo ($essay["essayno"]); ?>"><?php echo ($essay["title"]); ?></a></h2>
									<div class="essay-metas">
										<div class="left">
											作者：<?php echo ($essay["author"]); ?>&nbsp;&nbsp;类型：<?php echo ($essay["type"]); ?>&nbsp;&nbsp;时间：<?php echo ($essay["addtime"]); ?>
										</div>
										<div class="right" name="edit" id="edit">
											<a  href="__APP__/ArticleEdit?essayno=<?php echo ($essay["essayno"]); ?>">编辑</a>
											<a  href="__APP__/ArticleEdit/articleDelete?essayno=<?php echo ($essay["essayno"]); ?>">删除</a>
										</div>
									</div>
								</div>
								-->
								
								<div id="essay_<?php echo ($essay["essayno"]); ?>" class="essay-summary">
									 <?php echo ($essay["summary"]); ?>
									 
								</div>
								<div class="attachment">
									<a href="<?php echo ($essay["attachment"]); ?>" class="alink"><?php echo ($essay["attachment"]); ?></a>
								</div>
								
							</div>
							<input id="author" type="hidden" value="<?php echo ($essay["author"]); ?>"/><?php endforeach; endif; ?>
						<div id="pages-nav" class="black2"><?php echo ($page); ?></div>
					
					
						</div>
				
				</div>



			</div>
				<br class="clear"/>
			</div>
		</div>



﻿
	<div class="footer">
				<div id="footer-bg">
					<div id="footer-inner">
						
							<div class="inner-block">
								<p>关于我们</p>
								<div class="footer-content">
								“以梦为马”职业生涯网站是一个以职业生涯记录与分享、求职准备、职业生涯规划为主题的网站。
为职场人士、在校学生等用户群提供了一个记录和分享自己职业生涯、了解各行业职位、规划职业生涯、为求职做相关准备的平台。
								</div>
							</div>
							<div class="inner-block">
								<p>我们的团队</p>
								<div class="footer-content">
									<a class="pic-link-small" href="__APP__/Profile?member=korbinzhao"><img title="korbinzhao" src="__ROOT__/Home/Uploads/korbinzhao_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=porkzhao"><img title="porkzhao" src="__ROOT__/Home/Uploads/poryzhao_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Doris"><img title="Doris" src="__ROOT__/Home/Uploads/Doris_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=shanshan"><img title="shanshan" src="__ROOT__/Home/Uploads/shanshan_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=水情曦鱼"><img title="minmin" src="__ROOT__/Home/Uploads/水情曦鱼_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=tinker"><img title="tinker" src="__ROOT__/Home/Uploads/minmin_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									
								</div>
							</div>
							<div class="inner-block">
								<p>大家在关注</p>
								<div>
								    <div class="col">
									<a href="http://www.whycss.com/">前端网址导航</a>
									<a href="http://ued.taobao.org/blog/">淘宝UED</a>
									<a href="http://adc.alibabatech.org/">阿里技术嘉年华</a>
								    <a href="http://www.w3.org/">W3C</a>
									
									</div>
								
								    <div class="col">
									<a href="http://www.w3cfuns.com/">w3cfuns</a>
									<a href="http://www.w3cplus.com/">w3cplus</a>
								    <a href="http://www.daqianduan.com/">大前端</a>
									<a href="http://www.uisdc.com/">优设</a>
									</div>
									
								
								</div>
								
								
							</div>
							<div class="inner-block">
								<p>Korbin Zhao</p>
								<div class="footer-content">
									<a class="pic-link-big" href="__APP__/Profile?member=korbinzhao"><img src="__TMPL__/resource/images/korbinzhao.png"/></a>
									<a class="right white" href="__APP__/Profile?member=korbinzhao">联系站长：Korbin Zhao</a>
								</div>
							</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p class="copyright">Copyright © 2014 DreamCatcher Team. All rights reserved.</p>
				</div>
				
				<div id="back2top">
					<a class="back2top" href="#"></a>
				</div>
				
	</div>
	
</div>

	
	<script type="text/javascript" src="__TMPL__/resource/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/index.js"></script> 
	<script type="text/javascript" src="__TMPL__/resource/js/bxCarousel.js"></script> 
		

</body>
</html>