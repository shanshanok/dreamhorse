<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"/>
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
			
	<div id="container-wrap">	
	<h3 class="title">搜索结果</h3>
	<?php if(is_array($results)): foreach($results as $key=>$result): ?><div class="essay">
							
			<div class="essay-header">
			<!--中间大标题下的小字 -->
				<h2 class="essay-title"><a href="__APP__/<?php echo ($result["type"]); ?>?id=<?php echo ($result["id"]); ?>"><?php echo ($result["title"]); ?></a></h2>
				<div class="essay-metas">
				<span class="muted">
				<i class="icon-user icon12"></i>
				<a class="inline hovercolor"  href="__APP__/Profile?member=<?php echo ($result["author"]); ?>">
					<?php echo ($result["author"]); ?>&nbsp;&nbsp;
				</a>
				</span>
			
				<span class="muted">
				<i class="icon-time icon12"></i><?php echo ($result["addtime"]); ?>&nbsp;&nbsp;
				</span>
				<span class="muted">
				<i class="icon-type icon12"></i><?php echo ($result["type"]); ?>类型&nbsp;&nbsp;
				</span>
			
				<span class="muted">
				<i class="icon-eye-open icon12"></i><?php echo ($result["visits"]); ?>&nbsp;浏览&nbsp;&nbsp;
				</span>
				<span class="muted">
				<i class="icon-comment icon12"></i><?php echo ($result["commentscount"]); ?>&nbsp;评论&nbsp;&nbsp;
				</span>
			
				</div>
			</div>
			
			
			<div id="essay_<?php echo ($result["id"]); ?>" class="essay-summary">
				 <?php echo ($result["summary"]); ?>
				 
			</div>
			
		</div><?php endforeach; endif; ?>
	</div>

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
									<a class="pic-link-small" href="__APP__/Profile?member=korbinzhao"><img title="korbinzhao" src="korbinzhao" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" src="__ROOT__/Home/Uploads/korbinzhao_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=porkzhao"><img title="porkzhao" src="porkzhao" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" src="__ROOT__/Home/Uploads/porkzhao_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Doris"><img title="Doris" src="Doris" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" src="__ROOT__/Home/Uploads/Doris_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=shanshan"><img title="shanshan" src="shanshan" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" src="__ROOT__/Home/Uploads/shanshan_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=minmin"><img title="minmin" src="minmin" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" src="__ROOT__/Home/Uploads/minmin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=tinker"><img title="tinker" src="tinker" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" src="__ROOT__/Home/Uploads/minmin_large.png"/></a>
									
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

<script type="text/javascript" src="__TMPL__/resource/js/post.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/jquery.masonry.min.js"></script>
		<script type="text/javascript" src="__TMPL__/resource/js/index.js"></script> 
		

</body>
</html>